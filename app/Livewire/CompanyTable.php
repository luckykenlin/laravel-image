<?php

namespace App\Livewire;

use App\Models\Company;
use Illuminate\Database\Eloquent\Builder;
use Luckykenlin\LivewireTables\Views\Column;
use Luckykenlin\LivewireTables\LivewireTables;

class CompanyTable extends LivewireTables
{
    public function query(): Builder
    {
        return Company::query();
    }

    public function columns(): array
    {
        return [
            Column::make('#', 'id')->sortable(),
            Column::make('name')->searchable(),
            Column::make('Created At')->sortable(),
            Column::make('Updated At')->sortable()
        ];
    }
}
