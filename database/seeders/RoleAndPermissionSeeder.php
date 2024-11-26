<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Xbigdaddyx\Fuse\Domain\User\Enums\RoleEnums;
use Xbigdaddyx\Fuse\Domain\User\Enums\UserManagementPermissionEnums;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();
        $arrayOfPermissionNames = UserManagementPermissionEnums::cases();
        $permissions = collect($arrayOfPermissionNames)->map(function ($permission) {
            return ['name' => $permission->value, 'guard_name' => 'web'];
        });

        Permission::insert($permissions->toArray());


        // update cache to know about the newly created permissions (required if using WithoutModelEvents in seeders)
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();


        // create roles and assign created permissions

        $role = Role::create(['name' => RoleEnums::IT->value])
            ->givePermissionTo(
                collect(UserManagementPermissionEnums::cases())->map(function ($permission) {
                    return [$permission->value];
                })->toArray()
            );

        $role = Role::create(['name' => RoleEnums::VENDOR->value]);
        $role->givePermissionTo(Permission::all());
    }
}
