<?php

namespace App\Http\Livewire\Client;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Sms extends Component
{
    public function render()
    {
        return view('livewire.client.sms.index',[
            'smses' => \App\Models\Sms::all(),
        ]);
    }
}
