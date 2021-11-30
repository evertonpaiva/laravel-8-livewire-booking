<?php

use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Admin\Users\ListUsers;
use App\Http\Livewire\Admin\Appointments\ListAppointments;
use App\Http\Livewire\Admin\Appointments\CreateAppointmentForm;

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin/dashboard', DashboardController::class)->name('admin.dashboard');

Route::get('admin/users', ListUsers::class)->name('admin.users');

Route::get('admin/appointments', ListAppointments::class)->name('admin.appointments');
Route::get('admin/appointments/create', CreateAppointmentForm::class)->name('admin.appointments.create');
