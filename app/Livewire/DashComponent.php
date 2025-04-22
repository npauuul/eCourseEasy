<?php

namespace App\Livewire;

use App\Models\Course;
use App\Models\Student;
use Livewire\Component;

class DashComponent extends Component
{
    
    public $courseCount;
    public $studentCount;
    public $students;
    public $saleCount;

    public function mount()
    {
        
    $this->courseCount = Course::count();
    $this->studentCount = Student::count();
    $this->students = Student::all();
    $this->saleCount = 1;
    }
    public function render()
    {
        return view('livewire.dash-component');
    }
}
