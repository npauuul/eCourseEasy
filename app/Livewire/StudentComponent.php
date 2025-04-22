<?php

namespace App\Livewire;

use App\Models\Student;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;

class StudentComponent extends Component
{
    public $allStudents;
    public $showModal = false;
    public $showModalCreate = false;
    public $studentId;
    
    // Propiedades para el formulario
    public $name;
    public $email;
    public $password;
    public $password_confirmation;
    public $phone;
    public $address;
    public $city;
    public $country;

    public function mount()
    {
        $this->loadStudents();
    }

    public function loadStudents()
    {
        $this->allStudents = Student::all();
    }

    public function createStudent()
    {
        $this->resetForm();
        $this->showModalCreate = true;
    }

    public function storeStudent()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
            'phone' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:255',
        ]);
        
        Student::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        $this->showModalCreate = false;
        $this->loadStudents();
        session()->flash('success', 'Estudiante creado correctamente');
    }

    public function editStudent($studentId)
    {
        $this->resetValidation();
        $student = Student::findOrFail($studentId);
        
        $this->studentId = $studentId;
        $this->name = $student->name;
        $this->email = $student->email;
        $this->phone = $student->phone;
        $this->address = $student->address;
        $this->city = $student->city;
        $this->country = $student->country;
        
        $this->showModal = true;
    }

    public function updateStudent()
    {
        $rules = [
            'name' => 'required|string|max:255',
            'phone' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:255',
            'country' => 'nullable|string|max:255',
        ];

        // Solo validar email si cambió
        if(Student::find($this->studentId)->email != $this->email) {
            $rules['email'] = 'required|email|unique:users,email';
        } else {
            $rules['email'] = 'required|email';
        }

        $this->validate($rules);

        $student = Student::findOrFail($this->studentId);
        
        $updateData = [
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'address' => $this->address,
            'city' => $this->city,
            'country' => $this->country,
        ];

        // Actualizar contraseña solo si se proporcionó
        if(!empty($this->password)) {
            $this->validate([
                'password' => 'string|min:8|confirmed',
            ]);
            $updateData['password'] = Hash::make($this->password);
        }

        $student->update($updateData);

        $this->showModal = false;
        $this->loadStudents();
        session()->flash('success', 'Estudiante actualizado correctamente');
    }
    
    public function deleteStudent($studentId)
    {
        $student = Student::findOrFail($studentId);
        $student->delete();
        
        $this->loadStudents();
        session()->flash('success', 'Estudiante eliminado correctamente');
    }

    private function resetForm()
    {
        $this->reset([
            'name',
            'email',
            'password',
            'password_confirmation',
            'phone',
            'address',
            'city',
            'country',
            'studentId'
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
        return view('livewire.student-component');
    }
}