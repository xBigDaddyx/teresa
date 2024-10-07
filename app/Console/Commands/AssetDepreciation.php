<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Xbigdaddyx\Falcon\Models\Asset;
use Xbigdaddyx\Falcon\Models\Depreciation;

class AssetDepreciation extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'falcon:asset-depreciation {asset_code} {method_id}';

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
        $asset = Asset::where('asset_code', $this->argument('asset_code'))->first();
        dd($asset->depreciation);
        Depreciation::create([
            'method_id' => $this->argument('method_id'),
            'asset_id' => $asset->uuid,
        ]);
    }
}
