<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use DB;

class RoleController extends Controller
{
    public function AllPermission(){

        $permissions = Permission::all();
        return view('backend.pages.permission.all_permission',compact('permissions'));

    } // End Method

    public function AddPermission(){
        return view('backend.pages.permission.add_permission');
    }// End Method


    public function StorePermission(Request $request){

        $role = Permission::create([
            'name' => $request->name,
            'group_name' => $request->group_name,
        ]);

        $notification = array(
            'message' => 'Permission Inserted Successfully',
            'alert-type' => 'success'

        );
        return redirect()->route('all.permission')->with($notification);

    }// End Method


    public function EditPermission($id){

        $permission = Permission::findOrFail($id);
        return view('backend.pages.permission.edit_permission',compact('permission'));

    }// End Method


     public function UpdatePermission(Request $request){

        $per_id = $request->id;

         Permission::findOrFail($per_id)->update([
            'name' => $request->name,
            'group_name' => $request->group_name,
        ]);

        $notification = array(
            'message' => 'Permission Updated Successfully',
            'alert-type' => 'success'

        );
        return redirect()->route('all.permission')->with($notification);

    }// End Method


    public function DeletePermission($id){

        Permission::findOrFail($id)->delete();

           $notification = array(
            'message' => 'Permission Deleted Successfully',
            'alert-type' => 'success'

        );
        return redirect()->back()->with($notification);

    }// End Method


     ///////////////// All Roles Method ////////////////



    public function AllRoles(){

        $roles = Role::all();
        return view('backend.pages.roles.all_roles',compact('roles'));

    } // End Method


    public function AddRoles(){
        return view('backend.pages.roles.add_roles');
    }// End Method


    public function StoreRoles(Request $request)
    {
        // Validate request to ensure 'name' is provided and unique
        $request->validate([
            'name' => 'required|string|max:255|unique:roles,name',
        ]);

        // Create a new role
        Role::create([
            'name' => $request->name,
        ]);

        // Flash success message
        return redirect()->route('all.roles')->with([
            'message' => 'Role Inserted Successfully',
            'alert-type' => 'success'
        ]);
    }

    public function EditRoles($id){

        $roles = Role::findOrFail($id);
        return view('backend.pages.roles.edit_roles',compact('roles'));

    }// End Method


    public function UpdateRoles(Request $request){

        $role_id = $request->id;

         Role::findOrFail($role_id)->update([
            'name' => $request->name,
        ]);

        $notification = array(
            'message' => 'Role Updated Successfully',
            'alert-type' => 'success'

        );
        return redirect()->route('all.roles')->with($notification);

    }// End Method

    public function DeleteRoles($id){

    Role::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Role Deleted Successfully',
            'alert-type' => 'success'

        );
        return redirect()->back()->with($notification);

    }// End Method

    //// ///////// Add Role For Permission ////////////////


    public function AddRolesPermission(){

        $roles = Role::all();
        $permissions = Permission::all();
        $permission_groups = User::getpermissionGroups();
        return view('backend.pages.roles.add_roles_permission',compact('roles','permissions','permission_groups'));

    }// End Method


    public function RolePermissionStore(Request $request)
{
    // Validate request to ensure role_id and permission array exist
    $request->validate([
        'role_id'    => 'required|exists:roles,id',
        'permission' => 'required|array',
        'name'       => 'required|string|max:255|unique:permissions,name',
        'guard_name' => 'nullable|string|max:255', // Allow nullable guard_name
    ]);

    // Get role_id and permissions from request
    $roleId = $request->role_id;
    $permissions = $request->permission;

    // Prepare bulk insert data
    $data = [];
    foreach ($permissions as $permissionId) {
        $data[] = [
            'role_id'       => $roleId,
            'permission_id' => $permissionId,
        ];
    }

    // Perform bulk insert into role_has_permissions
    DB::table('role_has_permissions')->insert($data);

    // Ensure `guard_name` is provided, else default to 'web'
    $guardName = $request->guard_name ?? 'web';

    // Create the permission record
    $per = new Permission();
    $per->name = $request->name;
    $per->guard_name = $guardName; // Assign default value if missing
    $per->save();

    return response()->json(['success' => 'Permissions assigned successfully!']);
}

    // End Method


    public function AllRolesPermission(){

        $roles = Role::all();
        return view('backend.pages.roles.all_roles_permission',compact('roles'));

    }// End Method


    public function AdminEditRoles($id){

        $role = Role::findOrFail($id);
        $permissions = Permission::all();
        $permission_groups = User::getpermissionGroups();
        return view('backend.pages.roles.role_permission_edit',compact('role','permissions','permission_groups'));

    }// End Method


    public function RolePermissionUpdate(Request $request, $id){

        $role = Role::findOrFail($id);
        $permissions = $request->permission;

        if (!empty($permissions)) {
           $role->syncPermissions($permissions);
        }

        $notification = array(
            'message' => 'Role Permission Updated Successfully',
            'alert-type' => 'success'

        );
        return redirect()->route('all.roles.permission')->with($notification);


    }// End Method


    public function AdminDeleteRoles($id){
        $role = Role::findOrFail($id);
        if (!is_null($role)) {
           $role->delete();
        }

         $notification = array(
            'message' => 'Role Permission Deleted Successfully',
            'alert-type' => 'success'

        );
        return redirect()->back()->with($notification);

    }// End Method


}
