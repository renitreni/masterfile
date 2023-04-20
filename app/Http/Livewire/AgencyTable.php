<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Agency;

class AgencyTable extends DataTableComponent
{
    protected $model = Agency::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id')
            ->setTableRowUrl(function ($row) {
              //  return route('application-form', ['appId' => encrypt($row['id'])]);
            });
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Company id", "company_id")
                ->sortable(),
            Column::make("Name", "name")
                ->sortable(),
            Column::make("Category", "category")
                ->sortable(),
            Column::make("Address", "address")
                ->sortable(),
            Column::make("Contact no", "contact_no")
                ->sortable(),
            Column::make("Website", "website")
                ->sortable(),
            Column::make("Created at", "created_at")
                ->sortable(),
            Column::make("Updated at", "updated_at")
                ->sortable(),
        ];
    }
}
