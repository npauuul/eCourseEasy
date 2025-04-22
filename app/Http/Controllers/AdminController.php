<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Student;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function DashShow(): View {
        $courseCount = Course::count();
        $studentCount = Student::count();
        $students = Student::all();
        $saleCount = 1;
        return view('Admin.Pages.dashboard', compact('courseCount', 'studentCount', 'saleCount', 'students'));
    }

    public function CourseShow(): View {
        $courses = Course::all();
        return view('Admin.Pages.courses', compact('courses'));
    }
    public function CreateCourseShow(): View {
        return view('Admin.Components.couse');
    }
}
