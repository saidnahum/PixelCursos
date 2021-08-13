<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Course;
use Livewire\WithPagination;

class InstructorCourse extends Component
{
    use WithPagination;

    public function render()
    {
        $courses = Course::where('user_id', auth()->user()->id)->paginate(10);

        return view('livewire.instructor-course', compact('courses'));
    }
}
