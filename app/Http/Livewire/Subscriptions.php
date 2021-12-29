<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Laravel\Cashier\Exceptions\IncompletePayment;

class Subscriptions extends Component
{
    protected $listeners = ['render'];

    public $name = "Cursos de striper";

    public $bgColor = "bg-white"; 
    public $textColor =  'text-indigo-500';
    public $coupon;
   

    public function mount($price){

        $this->price = $price;
    }

    public function render()
    {
        return view('livewire.subscriptions');
    }

    public function newSubscrition(){
        try {

            if($this->coupon){

                auth()->user()->newSubscription($this->name, $this->price)
                          ->withCoupon($this->coupon)
                          ->trialDays(10)
                          ->create();
            }else {

                auth()->user()->newSubscription($this->name, $this->price)
                          ->trialDays(10)
                          ->create();

            }

            $this->emitTo('invoices', 'render');
            $this->emitTo('subscriptions', 'render');

         } catch (IncompletePayment $exception) {
            return redirect()->route(
                'cashier.payment',
                [$exception->payment->id, 'redirect' => route('billing.index')]
        );
    
       }
    }

    public function changingPrice(){

        auth()->user()->subscription($this->name)->swap($this->price);
        $this->emitTo('invoices', 'render');
        $this->emitTo('subscriptions', 'render');
    }

    public function cancelingToPlan(){

        auth()->user()->subscription($this->name)->cancel();
        $this->emitTo('subscriptions', 'render');

    }

    public function resumeToPlan(){

        auth()->user()->subscription($this->name)->resume();
        $this->emitTo('subscriptions', 'render');
    }
}
