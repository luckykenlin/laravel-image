<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Luckykenlin\LivewireTables\Views\Column;
use Luckykenlin\LivewireTables\LivewireTables;

class UserTable extends LivewireTables
{
    public function query(): Builder
    {
        return User::query();
    }

    public function columns(): array
    {
        return [
            Column::make('#', 'id')->sortable(),
            Column::make('Email')->searchable(),
            Column::make('Name')->searchable(),
            Column::make('Created At')->sortable(),
            Column::make('Updated At')->sortable()
        ];
    }
}
