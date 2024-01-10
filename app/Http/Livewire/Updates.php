<?php

namespace App\Http\Livewire;

use App\Models\Update;
use Livewire\Component;

class Updates extends Base
{
    public $sortBy = 'title';
    public function render()
    {
        if ($this->search) {
            $updates = Update::query()
                ->where('title', 'like', '%' . $this->search . '%')
                ->Orwhere('body', 'like', '%' . $this->search . '%')
                ->paginate(10);

            return view(
                'livewire.updates',
                ['updates' => $updates]
            );
        } else {
            $updates = Update::query()
                ->orderBy($this->sortBy, $this->sortDirection)
                ->paginate($this->perPage);
            return view(
                'livewire.updates',
                ['updates' => $updates]
            );
        }
    }
    }
