<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Log;
class UserController extends Controller
{
    function create() {
        User::create(request()->only("name","email","password"));
        return redirect()->to(Route('admin.user.index'));
    }
    function index() {
        $users = User::all();
        return view('admin.user.index', data: compact('users'));
    }
    function updateForm($id) {
        $user = User::find($id);
        return view('admin.user.update',compact('user'));
    }
    function update($id) {
        User::find($id)?->update(request()->only(['name', 'email','password']));
        return redirect()->to(route('admin.user.index'));
    }
    function delete($id) {
        $user = User::find($id);

        if ($user) {
            $user->delete();
            return redirect()->to(route('admin.user.index'));
        }

        redirect()->to(Route('admin.user.index'));
    }

    function info($id) {
        dd(Log::where('user_id',$id)->all());
    }
}
