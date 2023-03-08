<?php

namespace App\Http\Livewire;

use App\Enums\CivilStatusEnum;
use App\Enums\EducationalLevelEnum;
use App\Enums\GenderEnum;
use App\Models\ApplicantCategory;
use App\Models\ApplicantType;
use App\Models\Application;
use App\Models\EducationalBackground;
use App\Models\Religion;
use App\Models\WorkExperiences;
use Livewire\Component;

class ApplicationFormLivewire extends Component
{
    public $genders;
    public $civilStatus;
    public $levels;

    public $applicantCategory;
    public $applicantType;
    public $religion;

    public $generalInfo;
    public $educational;
    public $workHistory;

    public $appId;

    protected $queryString = ['appId'];

    public function mount()
    {
        $this->genders = GenderEnum::cases();
        $this->civilStatus = CivilStatusEnum::cases();
        $this->levels = EducationalLevelEnum::cases();

        $this->applicantCategory = ApplicantCategory::all();
        $this->applicantType = ApplicantType::all();
        $this->religion = Religion::all();

        $this->generalInfo = $this->appId ? Application::find(decrypt($this->appId))->toArray() : [];
        $this->educational = $this->appId ? EducationalBackground::where('application_id', decrypt($this->appId))->get()->toArray() : [];
        $this->workHistory = $this->appId ? WorkExperiences::where('application_id', decrypt($this->appId))->get()->toArray() : [];
    }

    public function render()
    {
        return view('livewire.application-form-livewire');
    }
}
