<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Subscriptions extends Component
{
    protected $listeners = ['render'];

    public function render()
    {
        return view('livewire.subscriptions');
    }

    public function newSubscrition($name,$price){

        auth()->user()->newSubscription($name, $price)->create();
    }

    public function changingPrice($name,$price){

        auth()->user()->subscription($name)->swap($price);
    }

    public function cancelingToPlan($name){

        auth()->user()->subscription($name)->cancel();

    }

    public function resumeToPlan($name){

        auth()->user()->subscription($name)->resume();
    }
}
