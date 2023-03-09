<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use App\Models\Application;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\DataTableComponent;

class ApplicationTable extends DataTableComponent
{
    protected $model = Application::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id')
            ->setTableRowUrl(function ($row) {
                return route('application-form', ['appId' => encrypt($row['id'])]);
            });
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
                ->format(fn ($value) => Carbon::parse($value)->format('F j, Y'))
                ->sortable(),
            Column::make("Gender", "gender")
                ->searchable()
                ->sortable(),
            Column::make("Civil status", "civil_status")
                ->searchable()
                ->sortable(),
            Column::make("Birthdate", "birthdate")
                ->format(fn ($value) => Carbon::parse($value)->format('F j, Y'))
                ->sortable(),
        ];
    }
}
