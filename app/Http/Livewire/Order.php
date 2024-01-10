<?php

namespace App\Http\Livewire;

use App\Models\Order  as Orders;
use Livewire\Component;

class Order extends Base
{
    public function render()
    {
        $orders = Orders::where('order_status', 'pending')->paginate(10);
        return view('livewire.order', ['orders' => $orders]);
    }
}
