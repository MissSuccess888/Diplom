<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\bookingRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\bookingUser;
use App\Models\booking;
use App\Models\Users;
use Illuminate\Support\Facades\Gate;


class bookingController extends Controller
{

		public function booking()
					{
							$admin = Users::where('email', "admin@mail.ru")->first();
							return view('booking.booking', ['admin' => $admin]);
					}
    
					public function bookingSubmit(bookingRequest $req)
				{
						date_default_timezone_set("Europe/Moscow");
						// dd($req);
						$name = $req->input('name');
						$phone = $req->input('phone');

						$booking = new booking();
						$booking->namequeste = $req->input('name');
						$booking->phonequest = $req->input('phone');
						$booking->emailquest = $req->input('email');
						$booking->numquests = $req->input('number');
						$booking->date = $req->input('date');
						$booking->message = $req->input('message');
						$booking->created_at = date("d-m-Y H:i:s");
						$booking->updated_at = date("d-m-Y H:i:s");
						
						// $booking->publishedDate = date("d-m-Y H:i:s");
						$id = Auth::id();
						if(isset($id)){
								$booking->id_user = Auth::id();
						}else {
								$booking->id_user = 0;
						};
						$booking->save();
						$admin = Users::where('email', "admin@mail.ru") ->first();

						return view('booking.bookingSubmit', ['name' => $name, 'phone' => $phone, 'admin' => $admin]);
				}

		public function bookingUser(){
						$user = Auth::user()->name;
						$data = booking::all();
						$admin = Users::where('email', "admin@mail.ru") ->first();
						return view('booking.bookingUser', ['data' => $data, 'name' => $user, 'admin' => $admin]);
				}

		public function bookingDelete($id)
    {
        DB::table('bookings')->where('id', $id)->delete();
				$data = booking::all();
				return redirect()->route('bookingUser');
    }
}
