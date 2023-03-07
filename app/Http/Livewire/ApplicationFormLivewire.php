<?php

namespace App\Http\Livewire;

use App\Enums\CivilStatusEnum;
use App\Enums\GenderEnum;
use App\Models\ApplicantCategory;
use App\Models\ApplicantType;
use App\Models\Application;
use App\Models\Religion;
use Livewire\Component;

class ApplicationFormLivewire extends Component
{
    public $genders;
    public $civilStatus;
    public $applicantCategory;
    public $applicantType;
    public $religion;
    public $generalInfo;
    public $appId;

    protected $queryString = ['appId'];

    public function mount()
    {
        $this->genders = GenderEnum::cases();
        $this->civilStatus = CivilStatusEnum::cases();
        $this->applicantCategory = ApplicantCategory::all();
        $this->applicantType = ApplicantType::all();
        $this->religion = Religion::all();

        $this->generalInfo = $this->appId ? Application::find(decrypt($this->appId))->toArray() : [];
    }

    public function render()
    {
        return view('livewire.application-form-livewire');
    }
}
