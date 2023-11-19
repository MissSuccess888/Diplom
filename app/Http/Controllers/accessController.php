<?php

namespace App\Http\Controllers;
use Illuminate\Contracts\Support\Responsable;

use Illuminate\Http\Request;
use App\Models\bookingUser;
use App\Models\booking;
use App\Models\users;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class accessController extends Controller
{
    public function idUserAuth()
    {
        $id = Auth::id();
				$id_user = DB::table('booking')->find($id_user);
				// $id_user = booking::all()->id_user;
        return $id;
				// return view('index', ['id_user' => $id_user]);
    }

    public function nameUserAuth()
    {		$admin = Users::where('email', "admin@mail.ru")->first();
        $user = Auth::user()->name;
       	$id_user = Auth::id();

				// $id = Auth::id();
				
        return view('home.index', ['name' => $user, 'id_user' => $id_user, 'admin'=> $admin]);
    }

		public function accessGate()
					{
						
							if (Gate::allows('test-post'))
							{
									$reply .= "test-post пройдена! <br>";
							}
							else {
									$reply .= "test-post не пройдена! <br>";
							}

							if (Gate::denies('test2-post'))
							{
									$reply .= "test2-post пройдена! <br>";
							}
							else {
									$reply .= "test2-post не пройдена! <br>";
							}

							return $reply;
					}

}
