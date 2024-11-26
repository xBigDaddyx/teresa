<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Xbigdaddyx\Fuse\Domain\Company\Models\Company;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Company::create([
            'short_name' => 'IDIS',
            'name' => 'PT. Cartini Lingerie Indonesia',
            'address' => 'Dukuh Tegalsari RT.001 RW.004, Desa Randusari, Kecamatan Teras, Boyolali 57372, Jawa Tengah, Indonesia',
            'logo' => '/images/logo/hoplun_logo.bmp',
            'is_default' => false,
            'prefix' => 'SL'
        ]);
        Company::create([
            'short_name' => 'IDCT',
            'name' => 'PT. Cartini Lingerie Indonesia 2',
            'address' => 'Dukuh Ngaran RT.005 RW.002, Kuncen, Ceper, Klaten 57465, Jawa Tengah, Indonesia',
            'logo' => '/images/logo/hoplun_logo.bmp',
            'is_default' => false,
            'prefix' => 'CT'
        ]);
        Company::create([
            'short_name' => 'IDBY',
            'name' => 'PT. HopLun Boyolali',
            'address' => 'Dukuh Jelok RT.002 RW.003, Desa Jelok, Kecamatan Cepogo, Boyolali 57362, Jawa Tengah, Indonesia',
            'logo' => '/images/logo/hoplun_logo.bmp',
            'is_default' => false,
            'prefix' => 'BY'
        ]);
        Company::create([
            'short_name' => 'IDIN',
            'name' => 'PT. Hop Lun Indonesia',
            'address' => 'Dusun Kemasan RT.009 / RW.005, Desa Klepu, Kec. Pringapus, Kabupaten Semarang 50553, Jawa Tengah, Indonesia',
            'logo' => '/images/logo/hoplun_logo.bmp',
            'is_default' => false,
            'prefix' => 'SR'
        ]);
        Company::create([
            'short_name' => 'DF',
            'name' => 'Teresa',
            'address' => '',
            'logo' => '/images/logo/teresa_logo.png',
            'is_default' => true,
            'prefix' => 'DF'
        ]);
    }
}
