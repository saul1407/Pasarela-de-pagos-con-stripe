<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Exception;

class ProductPay extends Component
{

    public $product;
   
    protected $listeners = ['paymentMethodCreate'];

    public function mount(Product $product){

        $this->product = $product;
    }


    public function render()
    {
        return view('livewire.product-pay');
    }

    public function paymentMethodCreate($paymentMethod){

        try {
            //code...
            auth()->user()->charge($this->product->price*100, $paymentMethod);

           $this->emit('resetStripe');

        } catch (Exception $e) {
            //throw $th;
            $this->emit('ErrorPaymentMethod');
        }
    }
}
