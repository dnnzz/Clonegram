<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function destroy($id)
    {
        $usrid = User::find($id);
        DB::table('users')->where('id', $usrid->id)->delete();
        DB::table('profiles')->where('id',$usrid->id)->delete();
        return redirect('/admin');
    }
}
