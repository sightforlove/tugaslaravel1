<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Counters as Abc;

class Counter extends Component
{

  public $text = "";

  public function render ()
  {
    return view('livewire.counter');
  }

  public function submit(){
    $counter = new Abc();
    $counter->value = $this->text;
    
    $counter->save();

    session()->flash('message', 'Data Successfully added.');
  }

}