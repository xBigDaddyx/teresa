<?php

namespace App\Imports;

use Carbon\Carbon;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Xbigdaddyx\Falcon\Models\Asset;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithProgressBar;
use Illuminate\Support\Str;

class AssetImport implements ToModel, WithHeadingRow, WithBatchInserts, WithChunkReading, WithProgressBar
{
    use Importable;
    /**
     * @param array $row
     *
     * @return User|null
     */
    public function model(array $row)
    {
        $asset = new Asset([
            'uuid' => Str::uuid(),
            'asset_code'     => $row['asset_code'],
            'asset_name'    => $row['asset_name'],
            'purchased_price'     => $row['purchased_price'],
            'purchased_at'    => $row['purchased_at'],
            'purchase_order'     => $row['purchase_order'],
            'category_id'    => $row['category_id'],
            'sub_category_id'     => $row['sub_category_id'],
            'age_id'    => $row['age_id'],
            'created_by' => auth()->user()->id,
            'updated_by' => auth()->user()->id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

        ]);
        return $asset;
    }
    public function batchSize(): int
    {
        return 1000;
    }
    public function chunkSize(): int
    {
        return 1000;
    }
    public function uniqueBy()
    {
        return 'asset_code';
    }
}
