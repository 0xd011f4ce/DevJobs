<?php

namespace App\Livewire;

use App\Models\Categories;
use App\Models\Salaries;
use App\Models\Vacancy;
use Livewire\Component;

class EditVacancy extends Component
{
    public $title;

    public function mount(Vacancy $vacancy)
    {
        // This method is called when the component is initialized
        // vacancy is the model that is passed to the component
        $this->title = $vacancy->title;
    }

    public function render()
    {
        $salaries = Salaries::all();
        $categories = Categories::all();

        return view('livewire.edit-vacancy', compact("salaries", "categories"));
    }
}
