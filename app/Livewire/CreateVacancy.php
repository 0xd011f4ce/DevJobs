<?php

namespace App\Livewire;

use App\Models\Categories;
use App\Models\Salaries;
use App\Models\Vacancy;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateVacancy extends Component
{
    public $title;
    public $salary;
    public $category;
    public $company;
    public $deadline;
    public $description;
    public $image;

    use WithFileUploads;

    protected $rules = [
        "title" => "required|string",
        "salary" => "required|numeric",
        "category" => "required",
        "company" => "required",
        "deadline" => "required",
        "description" => "required",
        "image" => "required|image|max:4096",
    ];

    public function createVacancy()
    {
        $data = $this->validate();

        // store the image
        $image = $this->image->store("public/vacancies");
        $nameImage = str_replace("public/vacancies/", "", $image);

        // create vacancy
        Vacancy::create([
            "title" => $data["title"],
            "salary_id" => $data["salary"],
            "category_id" => $data["category"],
            "company" => $data["company"],
            "deadline" => $data["deadline"],
            "description" => $data["description"],
            "image" => $nameImage,
            "user_id" => auth()->user()->id(),
        ]);

        // create message

        // redirect to vacancies page
    }

    public function render()
    {
        // consult db for salaries
        $salaries = Salaries::all();
        $categories = Categories::all();

        return view('livewire.create-vacancy', compact("salaries", "categories"));
    }
}
