<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Application;

class ApplicationTable extends DataTableComponent
{
    protected $model = Application::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Name", "name")
                ->searchable()
                ->sortable(),
            Column::make("Position", "position")
                ->searchable()
                ->sortable(),
            Column::make("Position category", "position_category")
                ->searchable()
                ->sortable(),
            Column::make("Applicant date", "applicant_date")
                ->sortable(),
            Column::make("Gender", "gender")
                ->searchable()
                ->sortable(),
            Column::make("Civil status", "civil_status")
                ->searchable()
                ->sortable(),
            Column::make("Birthdate", "birthdate")
                ->sortable(),
        ];
    }
}
