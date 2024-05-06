<?php

use Illuminate\Support\Facades\Route;
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


Route::post('/contact', function () {
    $data = request(['name', 'email', 'subject', 'phone', 'message']);
    
    try {
        Mail::to('gatiachrispus@gmail.com')->send(new ContactMe($data));
        return redirect('/contact')->with('flash', 'Your message was sent successfully!');
    } catch (\Exception $e) {
        // Log the error for debugging
        \Log::error('Failed to send email: ' . $e->getMessage());
        return redirect('/contact')->with('flash', 'Failed to send message. Please try again later.');
    }
});


Route::post('/bookappointment', function () {
    $data = request(['name', 'email', 'doctor', 'date', 'time', 'phone', 'message']);
    
    try {
        Mail::to('gatiachrispus@gmail.com')->send(new BookMe($data));
        return redirect('/bookappointment')->with('flash', 'Your request to book an appointment has been sent. 
        A member of our team will get back to you to confirm your appointment booking. Thank you.');
    } catch (\Exception $e) {
        // Log the error for debugging
        \Log::error('Failed to send email: ' . $e->getMessage());
        return redirect('/bookappointment')->with('flash', 'Failed to send message. Please try again later.');
    }
});
