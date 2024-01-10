<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\WareHouse AS House;

class Warehouse extends Base
{
    public $sortBy = 'name'; 
    public function render()
    {
        if ($this->search) {
            $warehouse = House::query()
                ->where('name', 'like', '%' . $this->search . '%')
                ->where('location', 'like', '%' . $this->search . '%')
                ->Orwhere('capacity', 'like', '%' . $this->search . '%')
                ->paginate(10);

            return view(
                'livewire.warehouse',
                ['warehouses' => $warehouse]
            );
        } else {
            $warehouse = House::query()
                ->orderBy($this->sortBy, $this->sortDirection)
                ->paginate($this->perPage);
            return view(
                'livewire.warehouse',
                ['warehouses' => $warehouse]
            );
        }
    }
}
