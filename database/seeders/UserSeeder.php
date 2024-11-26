<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Xbigdaddyx\Fuse\Domain\User\Enums\RoleEnums;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $vendor = User::create([
            'name' => 'Faisal Yusuf',
            'email' => 'faisal.yusuf@teresa.com',
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('password'),
            'avatar_url' => '/avatars/01J6YPRD7Q3PYPAZRE4SMQT8V9.jpg',
            'company_id' => 1,
            'phone' => '089529030641',
            'address' => 'TUTUP RT003/RW001 Jelok, Cepogo, Boyolali.',
            'gender' => 'm'
        ]);
        $vendor->assignRole(RoleEnums::VENDOR->value);
        $vendor->panels()->attach(1);
        $vendor->panels()->attach(2);
        $vendor->panels()->attach(3);
        $vendor->panels()->attach(4);
        $vendor->companies()->attach(1);
        $vendor->companies()->attach(2);
        $vendor->companies()->attach(3);
        $vendor->companies()->attach(4);
        $vendor->companies()->attach(5);
        $vendor->save();
    }
}
