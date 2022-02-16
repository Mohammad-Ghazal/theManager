<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //

    public function index()
    {
        $user = User::all();
        return view("admins.employee", [
            "employees" => $user
        ]);
    }

    public function destroy($id)
    {
        $x = User::where("id", $id)->delete();
        return redirect("/user");
    }

    public function single($id)
    {
        $user = User::find($id);
        return view('profile', [
            'user' => $user,
        ]);
    }
    public function edit($id)
    {
        $user = User::where("id", $id)->get()->first();
        return view("profile-edit", ["user" => $user]);
    }
    /**     * Update the specified resource in storage.     *     * @param  \Illuminate\Http\Request  $request     * @param  int  $id     * @return \Illuminate\Http\Response     */    public function update(Request $request, $id)
    {

        user::where("id", $id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,

        ]);
        return redirect("/profile");
    }
}
