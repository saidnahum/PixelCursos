<?php

namespace App\Http\Livewire;

use App\Models\Course;
use Livewire\Component;

class InstructorCourse extends Component
{
    public function render()
    {
        $courses = Course::where('user_id', auth()->user()->id)->get();

        return view('livewire.instructor-course', compact('courses'));
    }
}
