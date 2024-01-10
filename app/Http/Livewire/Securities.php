<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Security;
use App\Models\Commodity;

class Securities extends Component
{
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
        $securities = Security::all();
        return view('livewire.securities', ['securities' => $securities]);
    }
}
