<?php

namespace App\Livewire;

use App\Models\Categories;
use App\Models\Salaries;
use Livewire\Component;

class CreateVacancy extends Component
{
    public function render()
    {
        // consult db for salaries
        $salaries = Salaries::all();
        $categories = Categories::all();

        return view('livewire.create-vacancy', compact("salaries", "categories"));
    }
}
