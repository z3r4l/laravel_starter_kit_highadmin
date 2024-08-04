<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use DB;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Yajra\DataTables\DataTables;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:role-list|role-create|role-edit|role-delete', ['only' => ['index','store']]);
         $this->middleware('permission:role-create', ['only' => ['create','store']]);
         $this->middleware('permission:role-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:role-delete', ['only' => ['destroy']]);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {

            $data = Role::latest();
            return DataTables::of($data)
            ->addIndexColumn('DT_RowIndex')
            ->addColumn('action', function($data){
                $id             = $data->id;
                $url_edit       = route('roles.edit', $id);
                $url_show       = route('roles.show', $id);
                $url_delete     = route('roles.destroy', $id);

                $edit       = '<a href="' . $url_edit . '" class="btn btn-info btn-sm"><i class="fa fa-pencil" aria-hidden="true"></i></a>';
                $show       = '<a href="' . $url_show . '" class="btn btn-success btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></a>';
                $delete     = '<a href="javascript:void(0)" id="' . $id . '" data-id="' . $url_delete . '" class="btn btn-danger btn-delete btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></a>';
            
                return $edit . ' ' . $show . ' ' . $delete;
            })
            ->rawColumns(['action'])
            ->make(true);
        }
        return view('back.roles.index');
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(): View
    {
        $permission = Permission::get();
        $permissionDashboard = Permission::take(1)->get();
        $permissionRoles = Permission::skip(1)->take(4)->get();
        $permissionUsers = Permission::skip(5)->take(4)->get();
        $role = new Role();
        $rolePermissions = [];
        // dd($permissionRoles);
        $permission = Permission::get();
        return view('back.roles.create',compact('permission','permissionDashboard','permissionRoles','permissionUsers', 'role', 'rolePermissions'));
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'name' => 'required|unique:roles,name',
            'permission' => 'required',
        ]);
    
        $role = Role::create(['name' => $request->input('name')]);
        $role->syncPermissions($request->input('permission'));
    
        return redirect()->route('roles.index')
                        ->with('success','Role created successfully');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id): View
    {
        $role = Role::find($id);
        $permissionDashboard = Permission::take(1)->get();
        $permissionRoles = Permission::skip(1)->take(4)->get();
        $permissionUsers = Permission::skip(5)->take(4)->get();
        $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id",$id)
        ->pluck('role_has_permissions.permission_id','role_has_permissions.permission_id')
        ->all();

        return view('back.roles.show',compact('role','rolePermissions', 'permissionDashboard', 'permissionRoles', 'permissionUsers'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id): View
    {
        $role = Role::find($id);
        $permission = Permission::get();
        $permissionDashboard = Permission::take(1)->get();
        $permissionRoles = Permission::skip(1)->take(4)->get();
        $permissionUsers = Permission::skip(5)->take(4)->get();
        $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id",$id)
            ->pluck('role_has_permissions.permission_id','role_has_permissions.permission_id')
            ->all();
    
        return view('back.roles.edit',compact('role','permission','rolePermissions', 'permissionDashboard', 'permissionRoles','permissionUsers'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id): RedirectResponse
    {
        $this->validate($request, [
            'name' => 'required',
            'permission' => 'required',
        ]);
    
        $role = Role::find($id);
        $role->name = $request->input('name');
        $role->save();
    
        $role->syncPermissions($request->input('permission'));
    
        return redirect()->route('roles.index')
                        ->with('success','Role updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("roles")->where('id',$id)->delete();

        return response()->json([
            'success'   => true,
            'message'   => 'Data User Berhasi Di Hapus'
        ]);
    }
}
