<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class Members extends Controller
{
    public function HomeShow(): View {

        $courses = Course::take(6)->get();
        return view('Members.home', compact('courses'));

    }

    public function ContactoShow(): View {

        return view('Members.Page.contacto');

    }
    public function AcercaShow(): View {
        
        return view('Members.Page.acerca');
    }
    public function CursosShow(): View {

        $courses = Course::all();

        return view ('Members.Page.cursos', compact('courses'));
    }
    public function NosotrosShow(): View {
        
        return view('Members.Page.nosotros');
    }
}
