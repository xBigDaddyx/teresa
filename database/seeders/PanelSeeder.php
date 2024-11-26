<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Xbigdaddyx\Fuse\Domain\System\Models\Panel;

class PanelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Panel::create([
            'name' => 'Fuse',
            'description' => 'User and system management package',
            'panel_path' => 'fuse',
            'registered_panel_id' => 'fuse',
            'logo' => '/images/logo/teresa_fuse_full_logo.png',
            'is_default' => false
        ]);
        Panel::create([
            'name' => 'Beverly',
            'description' => 'Packing validation and accuracy management system package',
            'panel_path' => 'beverly',
            'registered_panel_id' => 'beverly',
            'logo' => '/images/logo/teresa_beverly_full.png',
            'is_default' => false
        ]);
        Panel::create([
            'name' => 'Falcon',
            'description' => 'Information Technology Asset Management system',
            'panel_path' => 'falcon',
            'registered_panel_id' => 'falcon',
            'logo' => '/images/logo/teresa_falcon_full.png',
            'is_default' => false
        ]);
        Panel::create([
            'name' => 'Teresa',
            'description' => 'Core application',
            'panel_path' => 'portal',
            'registered_panel_id' => 'portal',
            'logo' => '/images/logo/teresa_logo.png',
            'is_default' => true
        ]);
    }
}
