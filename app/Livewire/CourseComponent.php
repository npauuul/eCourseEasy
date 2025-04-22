<?php

namespace App\Livewire;

use App\Models\Course;
use Livewire\Component;

class CourseComponent extends Component
{
    public $allCourses;
    public $showModal = false;
    public $showModalCreate = false;
    public $courseId;
    
    // Propiedades para el formulario
    public $name;
    public $category_id;
    public $image;
    public $description;
    public $price;
    public $stock;

    public function mount()
    {
        $this->loadCourses();
    }

    public function loadCourses()
    {
        $this->allCourses = Course::all();
    }

    public function createCourse()
    {
        $this->resetForm();
        $this->showModalCreate = true;
    }

    public function storeCourse()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'nullable|integer',
            'image' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
        ]);
        
        Course::create([
            'name' => $this->name,
            'category_id' => $this->category_id,
            'image' => $this->image,
            'description' => $this->description,
            'price' => $this->price,
            'stock' => $this->stock,
        ]);

        $this->showModalCreate = false;
        $this->loadCourses();
        session()->flash('success', 'Curso creado correctamente');
    }

    public function editCourse($courseId)
    {
        $this->resetValidation();
        $course = Course::findOrFail($courseId);
        
        $this->courseId = $courseId;
        $this->name = $course->name;
        $this->category_id = $course->category_id;
        $this->image = $course->image;
        $this->description = $course->description;
        $this->price = $course->price;
        $this->stock = $course->stock;
        
        $this->showModal = true;
    }

    public function updateCourse()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'nullable|integer',
            'image' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
        ]);

        $course = Course::findOrFail($this->courseId);
        
        $course->update([
            'name' => $this->name,
            'category_id' => $this->category_id,
            'image' => $this->image,
            'description' => $this->description,
            'price' => $this->price,
            'stock' => $this->stock,
        ]);

        $this->showModal = false;
        $this->loadCourses();
        session()->flash('success', 'Curso actualizado correctamente');
    }
    
    public function deleteCourse($courseId)
    {
        $course = Course::findOrFail($courseId);
        $course->delete();
        
        $this->loadCourses();
        session()->flash('success', 'Curso eliminado correctamente');
    }

    private function resetForm()
    {
        $this->reset([
            'name',
            'category_id',
            'image',
            'description',
            'price',
            'stock',
            'courseId'
        ]);
        $this->resetValidation();
    }

    public function closeModal()
    {
        $this->showModal = false;
        $this->resetForm();
    }
    
    public function closeModalCreate()
    {
        $this->showModalCreate = false;
        $this->resetForm();
    }

    public function render()
    {
        return view('livewire.course-component');
    }
}