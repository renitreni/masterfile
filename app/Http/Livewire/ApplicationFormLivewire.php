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
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class ApplicationFormLivewire extends Component
{
    use LivewireAlert;
    
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
        $this->applicantCategory = ApplicantCategory::all();
        $this->applicantType = ApplicantType::all();
        $this->religion = Religion::all();

        $this->generalInfo = $this->appId ? Application::find(decrypt($this->appId))->toArray() : [];
        $this->educational = $this->appId ? EducationalBackground::where('application_id', decrypt($this->appId))->get()->toArray() : [];
        $this->workHistory = $this->appId ? WorkExperiences::where('application_id', decrypt($this->appId))->get()->toArray() : [];
    }

    public function render()
    {
        $this->genders = GenderEnum::cases();
        $this->civilStatus = CivilStatusEnum::cases();
        $this->levels = EducationalLevelEnum::cases();

        return view('livewire.application-form-livewire');
    }

    public function addEntry($entry)
    {
        if ($entry == 'education') {
            $this->educational[] = [];
        }
        if ($entry == 'work') {
            $this->workHistory[] = [];
        }
    }

    public function removeEntry($entry, $idx)
    {
        if ($entry == 'education') {
            array_splice($this->educational, $idx, 1);
        }
        if ($entry == 'work') {
            array_splice($this->workHistory, $idx, 1);
        }
    }

    public function save()
    {
        $applicationId = decrypt($this->appId);

        EducationalBackground::where('application_id', $applicationId)->delete();
        WorkExperiences::where('application_id', $applicationId)->delete();

        foreach ($this->educational as $item) {
            EducationalBackground::query()->insert([
                'application_id' => $applicationId,
                'level' => $item['level'] ?? null,
                'course' => $item['course'] ?? null,
                'address' => $item['address'] ?? null,
                'year_graduate' => $item['year_graduate'] ?? null,
                'awards' => $item['awards'] ?? null,
            ]);
        }

        foreach ($this->workHistory as $item) {
            WorkExperiences::query()->insert([
                'application_id' => $applicationId,
                'company_name' => $item['company_name'] ?? null,
                'position' => $item['position'] ?? null,
                'address' => $item['address'] ?? null,
                'contact_no' => $item['contact_no'] ?? null,
                'years_experience' => $item['years_experience'] ?? null,
            ]);
        }

        $this->alert('success', 'Save Succesfully!');
    }
}
