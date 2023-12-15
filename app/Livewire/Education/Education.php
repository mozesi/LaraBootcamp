<?php


namespace App\Livewire\Education;
use Livewire\Attributes\Validate;
use App\Models\Education as MyEducation;

use Livewire\Component;

class Education extends Component
{
    #[Validate('required')]
    public $nameOfSchoolAttended;
    #[Validate('required')]
    public $nameOfCertificate;
    #[Validate('required')]
    public $yearStartedSchool;
    #[Validate('required')]
    public $yearGraduatedSchool;
    #[Validate('required')]
    public $descriptionOfStudy;

    public function render()
    {
        return view('livewire.education.education');
    }


    #[Title("Add education details")]
    public function saveMyEducation()
    {   $this->validate();

        $myEducationDetails = MyEducation::create([
          'school_name' => $this->nameOfSchoolAttended,
          'certificate_name' => $this->nameOfCertificate,
          'start_date' => $this->yearStartedSchool,
          'graduation_date' => $this->yearGraduatedSchool,
          'study_description' => $this->descriptionOfStudy
        ]);

    }
}
