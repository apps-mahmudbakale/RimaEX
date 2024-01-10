<?php

namespace App\Http\Livewire;

use App\Models\Commodity;
use Livewire\Component;

class Market extends Base
{ 
    public $sortBy = 'name';
    public $productId;
    public $action;
    public $current_price;
    public $buy_price;
    public $productName;
    public $buyQty = 1;

    public function selectedProduct($productId, $action)
    {
        $this->productId = $productId;
        $this->action = $action;

        if ($action == 'buy') {
            $commodity = Commodity::find($productId);
            $this->current_price = number_format($commodity->current_price);
            $this->buy_price = $commodity->current_price;
            $this->productName = $commodity->name;
            
            $this->dispatchBrowserEvent('openBuyModal');
        }else if ($action == 'sell') {
            $commodity = Commodity::find($productId);
            $this->current_price = number_format($commodity->current_price);
            $this->buy_price = $commodity->current_price;
            $this->productName = $commodity->name;
            
            $this->dispatchBrowserEvent('openSellModal');
        }
    }
    public function render()
    {
        if ($this->search) {
            $commodities = Commodity::query()
                ->where('name', 'like', '%' . $this->search . '%')
                ->Orwhere('current_price', 'like', '%' . $this->search . '%')
                ->Orwhere('old_price', 'like', '%' . $this->search . '%')
                ->Orwhere('no_of_buys', 'like', '%' . $this->search . '%')
                ->Orwhere('no_of_sells', 'like', '%' . $this->search . '%')
                ->paginate(10);

            return view(
                'livewire.market',
                ['markets' => $commodities]
            );
        } else {
            $commodities = Commodity::query()
                ->orderBy($this->sortBy, $this->sortDirection)
                ->paginate($this->perPage);
            return view(
                'livewire.market',
                ['markets' => $commodities]
            );
        }
    }
}
