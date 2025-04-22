<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Members;
use App\Http\Controllers\StudentController;
use App\Livewire\CourseComponent;
use App\Livewire\DashComponent;
use App\Livewire\StudentComponent;
use Illuminate\Support\Facades\Route;









Route::get('/', [Members::class, 'HomeShow' ])->name('home');
Route::get('/', [Members::class, 'HomeShow' ])->name('login');
Route::get('/login', [Members::class, 'LoginShow' ])->name('login');
Route::get('/acerca', [Members::class, 'AcercaShow' ])->name('acerca');
Route::get('/contacto', [Members::class, 'ContactoShow' ])->name('contacto');
Route::get('/cursos', [Members::class, 'CursosShow' ])->name('cursos');
Route::get('/nosotros', [Members::class, 'NosotrosShow' ])->name('nosotros');


// Login estudiantes
Route::get('login', [AuthController::class, 'LoginShow'])->name('student.login');
Route::post('logout', [AuthController::class, 'studentLogout'])->name('student.logout');
Route::post('login', [AuthController::class, 'studentLogin']);

//Register estudiantes 
Route::get('register', [AuthController::class, 'RegisterShow'])->name('student.register');
Route::post('register', [AuthController::class, 'studentRegister']);

// Login admins
Route::get('admin-login', [AuthController::class, 'AdminLoginShow'])->name('admin.login');
Route::post('admin-login', [AuthController::class, 'adminLogin']);

// Rutas protegidas para estudiantes
Route::middleware(['auth:web'])->group(function () {
    Route::get('/student/dashboard', [StudentController::class, 'DashShow'])->name('Members.dash');
    Route::get('/student/profile', [StudentController::class, 'ProfileShow'])->name('Members.profile');
});

// Rutas protegidas para admins
Route::middleware(['auth:admin'])->group(function () {
    Route::get('/admin/dashboard', DashComponent::class)->name('admin.dashboard');
    Route::get('/admin/students', StudentComponent::class)->name('admin.students');
    Route::get('/admin/courses', CourseComponent::class)->name('admin.courses');
});