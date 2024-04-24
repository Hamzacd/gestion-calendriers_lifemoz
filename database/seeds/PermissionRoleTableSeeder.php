<?php

use App\Permission;
use App\Role;
use Illuminate\Database\Seeder;

class PermissionRoleTableSeeder extends Seeder
{
    // public function run()
    // {
    //     $admin_permissions = Permission::all();
    //     Role::findOrFail(1)->permissions()->sync($admin_permissions->pluck('id'));
    //     $user_permissions = $admin_permissions->filter(function ($permission) {
    //         return substr($permission->title, 0, 5) != 'user_' && substr($permission->title, 0, 5) != 'role_' && substr($permission->title, 0, 11) != 'permission_';
    //     });
    //     Role::findOrFail(2)->permissions()->sync($user_permissions);
    // }
    public function run()
{
    // Fetch all permissions
    $permissions = Permission::all();

    // Admin role permissions
    $admin_permissions = $permissions->whereIn('title', [
        'user_management_access',
        'permission_create', 'permission_edit', 'permission_show', 'permission_delete', 'permission_access',
        'role_create', 'role_edit', 'role_show', 'role_delete', 'role_access',
        'user_create', 'user_edit', 'user_show', 'user_delete', 'user_access',
        'event_show', 'event_delete', 'event_access',
        'dashboard_access'
    ]);
    Role::findOrFail(1)->permissions()->sync($admin_permissions->pluck('id'));

    // User role permissions
    $user_permissions = $permissions->whereIn('title', [
        'user_edit',
        'event_create', 'event_edit', 'event_show', 'event_delete', 'event_access'
    ]);
    Role::findOrFail(2)->permissions()->sync($user_permissions->pluck('id'));
}

}
