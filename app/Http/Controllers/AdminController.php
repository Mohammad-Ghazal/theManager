<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{

    public function __construct()
    {

        $this->middleware('auth:admin');
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin = Admin::all();
        return view("admins.admins", [
            "admins" => $admin
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Admin::create([
            "name"    => $request->name,
            "email"       => $request->email,
            "password"    => Hash::make($request->password),
            "role"       => $request->role,
        ]);
        //    return "done";
        return redirect("/admin");
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $adminedit = admin::where("id", $id)->get()->first();
        return view("admins.admin-edit", [
            "admin" => $adminedit
        ]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Admin::where("id", $id)->update([
            "name"    => $request->name,
            "email"       => $request->email,
            "password"    => Hash::make($request->password),
            "role"       => $request->role,
        ]);
        return redirect("/admin");
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $x = admin::where("id", $id)->delete();
        return redirect("/admin");
    }
}
