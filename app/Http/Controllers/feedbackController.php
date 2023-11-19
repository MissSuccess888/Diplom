<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\feedbackRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\feedback;
use App\Models\users;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class feedbackController extends Controller
	{	  
		public function feedback(){
			$data = feedback::all();
			$admin = Users::where('email', "admin@mail.ru")->first();
			return view('feedback.feedback', ['data' => $data,'admin' => $admin]);
		}

		public function feedbackView($id){			
					//  return "это $id";
					$data = DB::table('feedback')->find($id);
					$admin = Users::where('email', "admin@mail.ru")->first();
					return view('feedback.feedbackView', ['data' => $data, 'admin' => $admin]);
						// return $data;
		}

		public function feedbackUser(){
					$data = feedback::all();
					$admin = Users::where('email', "admin@mail.ru")->first();
					return view('feedback.feedbackUser', ['data' => $data, 'admin' => $admin]);
		}

		public function feedbackCreate(){
					$admin = Users::where('email', "admin@mail.ru")->first();
					return view('feedback.feedbackCreate', ['admin' => $admin]);
				}
			

		public function feedbackCreateSubmit(feedbackRequest $req){
				if (!Schema::hasColumn('feedback', 'statusFeedback')) {
							Schema::table('feedback', function (Blueprint $table) {
											$table->integer('statusFeedback');});
			}
					//dd($req);
						$feedback = new feedback();
						$feedback->feedback = $req->input('feedbackText');
						$feedback->email = $req->input('email');
						$id = Auth::id();
						$feedback->id_user = $id;
						if(isset($id)){
								$feedback->id_user = Auth::id();
						}else {
								$feedback->id_user = 0;
						};

						$statusFeedback = 0;
			// кнопка "отправить на модерацию" 
						if ($req->input('feedbackModeration')) 
								{	$statusFeedback = 1;}
			// кнопка "сохранить отзыв" 
						if ($req->input('feedbackSave')){
							// черновик
								$statusFeedback = 0; }
						$feedback->statusFeedback = $statusFeedback;
						
						$feedback->save();
						return redirect()->route('feedbackUser');	
				}

		public function feedbackEdit($id){				
			if(!Gate::allows('feedbackGate', $id)){
					return view('errors.errors');
			}
				$data = DB::table('feedback')->find($id);
				$admin = Users::where('email', "admin@mail.ru")->first();	
				return view('feedback.feedbackEdit', ['data'=>$data, 'admin' => $admin]);
		}

		public function feedbackEditSubmit($id, feedbackRequest $req){
			  // dd($req);
				$statusFeedback = 0;
			 if ($req->input('feedbackModeration')) 
						{	$statusFeedback = 1;}
			// кнопка "сохранить отзыв" 
				if ($req->input('feedbackSave')){
					// черновик
					$statusFeedback = 0; 	}

			DB::table('feedback')->where('id', $id)->update(
					[ 'email' => $req->email,
            'feedback' => $req->feedbackText,
            'updated_at' => now(),
						'statusFeedback' => $statusFeedback,]);
        return redirect()->route('feedbackUser');
			}
		
		public function feedbackModeration($id){						
				DB::table('feedback')->where('id', $id)->update(
					[	'statusFeedback' => 1,	]);
				return redirect()->route('feedbackUser');
				}

		public function feedbackPublishSubmit($id){
				DB::table('feedback')->where('id', $id)->update(
					['statusFeedback' => 2, ]);
        return redirect()->route('feedback');
			}

		public function feedbackDelete($id){
        DB::table('feedback')->where('id', $id)->delete();
        return redirect()->route('feedbackUser');
    }
	}