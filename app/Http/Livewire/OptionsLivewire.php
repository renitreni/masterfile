<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\ApplicantCategory;
use App\Models\ApplicantType;
use App\Models\Religion;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class OptionsLivewire extends Component
{
    use LivewireAlert;
    
    public $applicantCategory;

    public $applicantCategoryText;
    
    public $applicantType;

    public $applicantTypeText;

    public $religion;

    public $religionText;

    public function render()
    {
        $this->applicantCategory = ApplicantCategory::all();
        $this->applicantType = ApplicantType::all();
        $this->religion = Religion::all();

        return view('livewire.options-livewire');
    }

    public function destroyApplicantCategory($id)
    {
        $validator = Validator::make(['id' => $id], ['id' => 'required|exists:applications,applicant_category_id']);

        if ($validator->fails()) {
            ApplicantCategory::destroy($id);
            $this->alert('success', 'Deleted!');
         } else {
            $this->alert('warning', 'Cannot Delete! Data is being used!');
         }
    }

    public function addApplicantCategory()
    {
        ApplicantCategory::create([
            'name' => $this->applicantCategoryText
        ]);
        $this->applicantCategoryText = '';
        $this->alert('success', 'Added!');
    }

    public function destroyApplicantType($id)
    {
        $validator = Validator::make(['id' => $id], ['id' => 'required|exists:applications,applicant_type_id']);

        if ($validator->fails()) {
            ApplicantType::destroy($id);
            $this->alert('success', 'Deleted!');
         } else {
            $this->alert('warning', 'Cannot Delete! Data is being used!');
         }
    }

    public function addApplicantType()
    {
        ApplicantType::create([
            'name' => $this->applicantTypeText
        ]);
        $this->applicantTypeText = '';
        $this->alert('success', 'Added!');
    }

    public function destroyReligion($id)
    {
        $validator = Validator::make(['id' => $id], ['id' => 'required|exists:applications,religion_id']);

        if ($validator->fails()) {
            Religion::destroy($id);
            $this->alert('success', 'Deleted!');
         } else {
            $this->alert('warning', 'Cannot Delete! Data is being used!');
         }
    }

    public function addReligion()
    {
        Religion::create([
            'name' => $this->religionText
        ]);
        $this->religionText = '';
        $this->alert('success', 'Added!');
    }
}
