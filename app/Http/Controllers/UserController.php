<?php

namespace App\Http\Controllers;

use App\Models\User as UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function updateStatus(Request $request)
    {
        $userid = Auth::user()->id;
        $user = UserModel::findOrFail($userid);

        if ($request->city_id == 0) {
            $user->city_id = NULL;
        } else
            $user->city_id = $request->city_id;
        $user->save();
    }
}
