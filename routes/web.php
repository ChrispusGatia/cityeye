<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\NewsAndBlogsController;
use App\Mail\AppointmentConfirmation;
use App\Mail\ContactMe;
use App\Mail\BookMe;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::statamic('example', 'example-view', [
//    'title' => 'Example'
// ]);

// Route::statamic('whoweare', 'whoweare');

// Contact form route with rate limiting (e.g., 1 request per minute)
 
Route::get('/news_and_blogs', [NewsAndBlogsController::class, 'index']);
Route::get('/news-and-blogs/{slug}', [NewsAndBlogsController::class, 'show'])->name('news_and_blogs.show');



Route::post('/contact', function (Request $request) {
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'subject' => 'required|string|max:255',
        'phone' => 'required|digits:10',
        'message' => 'required|string|max:500',
    ]);

    try {
        $data = [
            'name' => e($validated['name']),
            'email' => e($validated['email']),
            'subject' => e($validated['subject']),
            'phone' => e($validated['phone']),
            'message' => e($validated['message']),
        ];

        // Send email
        Mail::to('info@cityeyehospital.or.ke')->send(new ContactMe($data));

        session()->flash('flash', 'Your message was sent successfully!');

        return redirect('/contact');
    } catch (\Exception $e) {
        \Log::error('Failed to send email: ' . $e->getMessage());
        return redirect('/contact')->with('flash', 'Failed to send message. Please try again later.');
    }
})->middleware('throttle:1,1'); // 1 request per minute per user

// Booking form route with rate limiting (e.g., 1 request per minute)
Route::post('/bookappointment', function (Request $request) {
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'doctor' => 'required|string|max:255',
        'date' => 'required|date|after_or_equal:today',
        'time' => 'required|string|max:50',
        'phone' => 'required|digits:10',
        'message' => 'nullable|string|max:500',
    ]);

    try {
        $data = [
            'name' => e($validated['name']),
            'email' => e($validated['email']),
            'doctor' => e($validated['doctor']),
            'date' => e($validated['date']),
            'time' => e($validated['time']),
            'phone' => e($validated['phone']),
            'message' => e($validated['message']),
        ];

        Mail::to('appointments@cityeyehospital.or.ke')->send(new BookMe($data));
        Mail::to($data['email'])->send(new AppointmentConfirmation($data));

        session()->flash('flash', 'Your request to book an appointment has been sent.');

        return redirect('/bookappointment');
    } catch (\Exception $e) {
        \Log::error('Failed to send email: ' . $e->getMessage());
        return redirect('/bookappointment')->with('flash', 'Failed to send message. Please try again later.');
    }
})->middleware('throttle:1,1'); // 1 request per minute per user
