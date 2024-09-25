<?php

namespace App\Livewire;

use App\Models\Categories;
use App\Models\Salaries;
use Livewire\Component;

class CreateVacancy extends Component
{
    public $title;
    public $salary;
    public $category;
    public $company;
    public $deadline;
    public $description;
    public $image;

    protected $rules = [
        "title" => "required|string",
        "salary" => "required|numeric",
        "category" => "required",
        "company" => "required",
        "deadline" => "required",
        "description" => "required",
        "image" => "required",
    ];

    public function render()
    {
        // consult db for salaries
        $salaries = Salaries::all();
        $categories = Categories::all();

        return view('livewire.create-vacancy', compact("salaries", "categories"));
    }
}
