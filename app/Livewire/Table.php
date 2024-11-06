<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

class Table extends Component
{
    use WithPagination;

    public string $resource;
    public array $columns;
    public string $editRoute;
    public string $deleteRoute;


    public function render()
    {
        return view(
            'livewire.table',
            [
                'items' => app("App\Models\\" . $this->resource)->paginate(10)
            ]
        );
    }
}
