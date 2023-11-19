<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;
use App\Models\booking;
use App\Models\feedback;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class adminController extends Controller
{
    public function admin(){
				$admin = Users::where('email', "admin@mail.ru")->first();
				return view('admin.admin', ['admin' => $admin]);
		}

		public function feedbackAll(){
			$data = feedback::all();
			$admin = Users::where('email', "admin@mail.ru")->first();
			return view('feedback.feedback', ['data' => $data,'admin' => $admin]);
		}

		public function feedbackCheck(){
			$data = feedback::all();
			$admin = Users::where('email', "admin@mail.ru")->first();
			return view('feedback.feedbackCheck', ['data' => $data,'admin' => $admin]);
		}

		public function feedbackPublish(){
			$data = feedback::all();
			$admin = Users::where('email', "admin@mail.ru")->first();
			return view('feedback.feedbackPublish', ['data' => $data,'admin' => $admin]);
		}
		
		public function adminUsers(){
			$data= users::all();
			$user = Auth::user()->name; 
			$admin = Users::where('email', "admin@mail.ru")->first();
			return view('admin.users', ['data' => $data, 'user'=> $user, 'admin' => $admin ]);
    }

		public function usersDelete($id){
        DB::table('users')->where('id', $id)->delete();
				return redirect()->route('adminUsers');
				// $user = Auth::user()->name; 
        // $data = users::all();
				// return view('admin.users', ['data' => $data, 'user'=> $user ]);
    }

		public function bookingUserAll(){
				$data = booking::all();
				$admin = Users::where('email', "admin@mail.ru")->first();
				return view('admin.bookingUserAll', ['data' => $data, 'admin' => $admin]);
		}

		public function adminBookingDelete($id){
        DB::table('bookings')->where('id', $id)->delete();
				return redirect()->route('bookingUserAll');
				// $data = booking::all();
				// $admin = Users::where('email', "admin@mail.ru")->first();
        // return view('admin.bookingUserAll', ['data' => $data, 'admin' => $admin]);
    } 

}
