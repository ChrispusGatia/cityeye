<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('educational');
});

Route::get('/applicationform', function() {
    return view('application_form');
});

Route::get('/appointment', function() {
    return view('appointment');
});

Route::get('/appointmentclinic', function() {
    return view('appointment-clinic');
});

Route::get('/branches', function() {
    return view('branches');
});

Route::get('/careers', function() {
    return view('careers');
});

Route::get('/confirmation', function() {
    return view('confirmation');
});

Route::get('/contact', function() {
    return view('contact');
});

// ROUTES

Route::get('/department', function() {
    return view('department');
});

Route::get('/departmentsingle', function() {
    return view('department_single');
});

Route::get('/directions', function() {
    return view('directions_location');
});

Route::get('/doctor', function() {
    return view('doctor');
});

Route::get('/doctorsingle', function() {
    return view('doctor_single');
});

Route::get('/donate', function() {
    return view('donate');
});

Route::get('/educational', function() {
    return view('educational');
});

Route::get('/faqs', function() {
    return view('faqs');
});

Route::get('/gallery', function() {
    return view('gallery');
});

Route::get('/gdprstatement', function() {
    return view('gdprstatement');
});

Route::get('/hospitallocations', function() {
    return view('hospital_locations');
});

Route::get('/insurances', function() {
    return view('insurances');
});

Route::get('/mainhospital', function() {
    return view('main_hospital');
});

Route::get('/management', function() {
    return view('management');
});

Route::get('/medicaloutpatient', function() {
    return view('medical_outpatient');
});

Route::get('/missionvision', function() {
    return view('mission_vision');
});

Route::get('/newsevent', function() {
    return view('news_events');
});

Route::get('/ngongvisioncenter', function() {
    return view('ngong_visioncenter');
});

Route::get('/nyerihospital', function() {
    return view('nyeri_hospital');
});

Route::get('/opticalshop', function() {
    return view('opticalshop');

});
Route::get('/ourhistory', function() {
    return view('ourhistory');
});

Route::get('/outpatientservices', function() {
    return view('outpatient_services');
});

Route::get('/outreachcamps', function() {
    return view('outreachcamps');
});

Route::get('/patientfeedback', function() {
    return view('patientfeedback');
});

Route::get('/privacypolicy', function() {
    return view('privacypolicy');
});

Route::get('/service', function() {
    return view('service');
});

Route::get('/services', function() {
    return view('services');
});

Route::get('/testimonials', function() {
    return view('testimonials');
});

Route::get('/whoweare', function() {
    return view('whoweare');
});
