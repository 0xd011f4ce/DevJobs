<?php

namespace App\Livewire;

use App\Models\Categories;
use App\Models\Salaries;
use Livewire\Component;

class EditVacancy extends Component
{
    public function render()
    {
        $salaries = Salaries::all();
        $categories = Categories::all();

        return view('livewire.edit-vacancy', compact("salaries", "categories"));
    }
}
