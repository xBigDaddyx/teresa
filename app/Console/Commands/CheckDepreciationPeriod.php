<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Xbigdaddyx\Falcon\Models\Asset;
use Xbigdaddyx\Falcon\Models\BookValue;
use Xbigdaddyx\Falcon\Models\Method;
use Illuminate\Contracts\Console\PromptsForMissingInput;

class CheckDepreciationPeriod extends Command implements PromptsForMissingInput
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'falcon:period-check {asset_id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    protected function promptForMissingArgumentsUsing(): array
    {
        return [
            'asset_id' => 'Asset ID ?',
        ];
    }

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $asset = Asset::findOrFail($this->argument('asset_id'));
        $last_value = BookValue::select('book_value', 'period')->where('depreciation_id', $asset->uuid)->latest()->first();
        $startDate = Carbon::parse($last_value->period);
        $endDate = Carbon::now();
        $diff = $startDate->diffInYears($endDate);

        if ($diff >= 1) {
            $method = Method::findOrFail($asset->methods()->first()->uuid);
            Artisan::call('falcon:book-value ' . $this->argument('asset_id') . ' ' . $method->uuid);
            return 0;
        }
        return 1;
    }
}
