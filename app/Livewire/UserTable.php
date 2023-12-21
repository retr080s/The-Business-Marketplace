<?php

namespace App\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
// use App\Models\User;
use App\Models\MarketplaceData;

class UserTable extends DataTableComponent
{
    // protected $model = User::class;
    protected $model = MarketplaceData::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Product", "product")
                ->sortable()
                ->searchable(),
            Column::make("Category", "category")
                ->sortable()
                ->searchable(),
            Column::make("Company", "company")
                ->sortable()
                ->searchable(),
            Column::make("Price", "price")
                ->sortable()
                ->searchable(),
            Column::make("Contact", "contact")
                ->sortable()
                ->searchable(),


        ];
    }
}
