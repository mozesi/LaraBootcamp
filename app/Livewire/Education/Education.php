<?php

namespace App\Livewire\Education;

use Livewire\Component;

class Education extends Component
{
    public $nameOfSchoolAttended;
    public $nameOfCertificate;
    public $yearStartedSchool;
    public $yearGraduatedSchool;
    public $descriptionOfStudy;

    public function render()
    {
        return view('livewire.education.education');
    }

    public function store()
    {

    }
}
