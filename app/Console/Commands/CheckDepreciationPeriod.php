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
    protected $signature = 'falcon:period-check';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    protected function promptForMissingArgumentsUsing(): array
    {
        return [
            //
        ];
    }

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $assets = Asset::all();
        foreach ($assets as $key => $asset) {
            $last_value = BookValue::select('book_value', 'period')->where('depreciation_id', $asset->uuid)->latest()->first();
            $startDate = Carbon::parse($last_value->period);
            $endDate = Carbon::now();
            $diff = $startDate->diffInYears($endDate);

            if ($diff >= 1) {
                $method = Method::findOrFail($asset->methods()->first()->uuid);
                $method = Method::findOrFail($asset->methods()->first()->uuid);
                $formula = $method->formula;
                $age = $asset->age;

                $purchased_price = $asset->purchased_price;
                $salvage_value = 0;
                $estimate_age = $age->estimate_age;
                eval($formula);
                // }
                $period = Carbon::parse($asset->purchased_at);
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
}
