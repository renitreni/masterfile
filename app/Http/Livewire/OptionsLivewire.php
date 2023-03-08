<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\ApplicantCategory;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class OptionsLivewire extends Component
{
    use LivewireAlert;
    
    public $applicantCategory;

    public $applicantCategoryText;

    public function render()
    {
        $this->applicantCategory = ApplicantCategory::all();

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
        $this->alert('success', 'Added!');
    }
}
