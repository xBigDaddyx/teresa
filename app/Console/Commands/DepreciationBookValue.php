<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Contracts\Console\PromptsForMissingInput;
use Illuminate\Support\Facades\DB;
use Xbigdaddyx\Falcon\Models\Age;
use Xbigdaddyx\Falcon\Models\Asset;
use Xbigdaddyx\Falcon\Models\BookValue;
use Xbigdaddyx\Falcon\Models\Depreciation;
use Xbigdaddyx\Falcon\Models\Method;

class DepreciationBookValue extends Command implements PromptsForMissingInput
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'falcon:book-value';

    protected function promptForMissingArgumentsUsing(): array
    {
        return [
            //
        ];
    }

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $assets = Asset::all();
        foreach ($assets as $asset) {
            // if ($this->argument('method_id') ===  '9d2368dc-010f-4d66-a3ac-c81df52fae18') {

            $method = Method::findOrFail($asset->methods()->first()->uuid);
            $formula = $method->formula;
            $age = $asset->age;

            $purchased_price = $asset->purchased_price;
            $salvage_value = 0;
            $estimate_age = $age->estimate_age;
            eval($formula);
            // }
            $period = Carbon::parse($asset->purchased_at);
            $last_value = BookValue::select('book_value', 'period')->where('depreciation_id', $asset->uuid)->latest()->first();
            if (!empty($last_value)) {
                $last_value = $last_value->book_value;
                $period = Carbon::parse($last_value)->addYear(1);
            } else {
                $last_value = $asset->purchased_price;
                $period = $period->copy()->endOfYear();
            }
            BookValue::create([
                'value' => $value,
                'book_value' => $last_value - $value,
                'period' => $period,
                'depreciation_id' => $asset->uuid,
            ]);
        }
    }
}
