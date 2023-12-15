<?php

namespace App\Livewire\Education;
use App\Models\Education as MyEducation;

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


    #[Title("Add education details")]
    public function saveMyEducation()
    {
        $myEducationDetails = MyEducation::create([
          'school_name' => $this->nameOfSchoolAttended,
          'certificate_name' => $this->nameOfCertificate,
          'start_date' => $this->yearStartedSchool,
          'graduation_date' => $this->yearGraduatedSchool,
          'study_description' => $this->descriptionOfStudy
        ]);

    }
}
