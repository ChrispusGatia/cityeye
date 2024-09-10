<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
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

Route::post('/contact', function (Request $request) {
    // Validate the incoming request data
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'subject' => 'required|string|max:255',
        'phone' => 'required|digits:10',
        'message' => 'required|string|max:500',
    ]);

    try {
        // Sanitize the data
        $data = [
            'name' => e($validated['name']),
            'email' => e($validated['email']),
            'subject' => e($validated['subject']),
            'phone' => e($validated['phone']),
            'message' => e($validated['message']),
        ];

        Mail::to('info@cityeyehospital.or.ke')->send(new ContactMe($data));

        // Flash success message with conversion tracking script
        session()->flash('flash', 'Your message was sent successfully!');
        
        // Inject the event snippet for Google conversions
        echo "<script>
                gtag('event', 'conversion', {'send_to': 'AW-16651053038/-uPxCL-1tNEZEO7P64M-'});
              </script>";

        return redirect('/contact');
    } catch (\Exception $e) {
        // Log the error for debugging
        \Log::error('Failed to send email: ' . $e->getMessage());
        return redirect('/contact')->with('flash', 'Failed to send message. Please try again later.');
    }
});


Route::post('/bookappointment', function (Request $request) {
    // Validate the incoming request data
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
        // Sanitize the data
        $data = [
            'name' => e($validated['name']),
            'email' => e($validated['email']),
            'doctor' => e($validated['doctor']),
            'date' => e($validated['date']),
            'time' => e($validated['time']),
            'phone' => e($validated['phone']),
            'message' => e($validated['message']),
        ];

        // Send email to the hospital
        Mail::to('appointments@cityeyehospital.or.ke')->send(new BookMe($data));
        
        // Send confirmation email to the user
        Mail::to($data['email'])->send(new AppointmentConfirmation($data));

        // Flash success message with conversion tracking script
        session()->flash('flash', 'Your request to book an appointment has been sent. A member of our team will get back to you to confirm your appointment booking. Thank you.');
        
        // Inject the event snippet for Google conversions
        echo "<script>
                gtag('event', 'conversion', {'send_to': 'AW-16651053038/-uPxCL-1tNEZEO7P64M-'});
              </script>";

        return redirect('/bookappointment');
    } catch (\Exception $e) {
        // Log the error for debugging
        \Log::error('Failed to send email: ' . $e->getMessage());
        return redirect('/bookappointment')->with('flash', 'Failed to send message. Please try again later.');
    }
});
