<?php

use App\Http\Controllers;
// use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\feedbackController;
use App\Http\Controllers\accessController;
use App\Http\Controllers\bookingController;
use App\Http\Controllers\adminController;
use Laravel\Fortify\RoutePath;
use Carbon\Carbon;
use App\Models\users;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/test', function() {
//     return view('.test');
// });

Route::get('/versionLaravel', function() {
    return view('welcome');
});

Route::get('/', function() {
		$admin = Users::where('email', "admin@mail.ru")->first();
    return view('home.index',  ['admin' => $admin]);
})->name('home');

Route::controller (accessController::class)->group(function(){
		Route::get('/auth', 'nameUserAuth')->name('auth');
		// Route::get('/', 'idUserAuth')->name('idUserAuth');
		Route::get('/accessGate', 'accessGate')->name('accessGate');
		Route::get('/accessPolicies', 'accessPolicies')->name('accessPolicies');
});

Route::controller (feedbackController::class)->group(function(){
		Route::get('/feedback', 'feedback')->name('feedback');
		Route::get('/feedbackCreate', 'feedbackCreate' )->name('feedbackCreate')->middleware('auth');
		Route::get('/errors',  'feedbackCreate')->name('errors');
		Route::POST('/feedbackCreateSubmit', 'feedbackCreateSubmit' )->name('feedbackCreateSubmit')->middleware('auth');
		Route::get('/feedback/{idFeedback}/view','feedbackView')->name('feedbackView');
		Route::get('/feedbackEdit/{idFeedback}/edit', 'feedbackEdit' )->name('feedbackEdit')->middleware('auth');
		Route::POST('/feedbackEditSubmit/{idFeedback}/editSubmit', 'feedbackEditSubmit')->name('feedbackEditSubmit')->middleware('auth');
		Route::get('/feedbackDelete/{idFeedback}/delete',  'feedbackDelete')->name('feedbackDelete')->middleware('auth');
		Route::get('/feedbackUser', 'feedbackUser')->name('feedbackUser')->middleware('auth');
		Route::get('/moderationFeedbackUser/{idFeedback}/moderation', 'feedbackModeration')->name('feedbackModeration')->middleware('auth');
		Route::get('/feedbackPublish/{idFeedback}/publish', 'feedbackPublishSubmit')->name('feedbackPublishSubmit');
});

Route::controller (bookingController::class)->group(function(){
	Route::get('/booking',  'booking' )->name('booking');
	Route::post('/bookingSubmit',  'bookingSubmit' )->name('bookingSubmit');
	Route::get('/bookingUser',  'bookingUser', 'bookingUser')->name('bookingUser');
	Route::get('/bookingDelete/{idBooking}/delete', 'bookingDelete')->name('bookingDelete');
});

Route::controller (adminController::class)->group(function(){
	 Route::get('/admin', 'admin')->name('admin');
	 Route::get('/admin/users', 'adminUsers')->name('adminUsers');
	 Route::get('/admin/usersDelete/{idUser}/delete',  'usersDelete')->name('usersDelete')->middleware('auth');
	 Route::get('/admin/bookingUserAll',  'bookingUserAll')->name('bookingUserAll')->middleware('auth');
	 Route::get('/admin/{idBooking}/bookingDelete',  'adminBookingDelete')->name('adminBookingDelete')->middleware('auth');
	 Route::get('/admin/feedbackAll',  'feedbackAll')->name('feedbackAll')->middleware('auth');
	 Route::get('/admin/feedbackCheck',  'feedbackCheck')->name('feedbackCheck')->middleware('auth');
	 Route::get('/admin/feedbackPublish',  'feedbackPublish')->name('feedbackPublish')->middleware('auth');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
				$admin = Users::where('email', "admin@mail.ru")->first();
				// dd($admin);
        return view('dashboard', ['admin' => $admin ]);
    })->name('dashboard');
});

// Route::post('/logout',[accessController::class, 'logout'])->name('logout')->middleware('auth');
  // Route::post(RoutePath::for('logout', '/logout'), [accessController::class, 'destroy'])
  //       ->name('logout');

});