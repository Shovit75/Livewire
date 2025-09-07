<?php

namespace App\Livewire;

use Livewire\Component;

class DateLoveCalculator extends Component
{
    public $dob1;
    public $dob2;
    public $status = 0;
    public $compatibility;

    public function submitForm(){
        $this->validate([
            'dob1' => 'required|date|before_or_equal:today',
            'dob2' => 'required|date|before_or_equal:today',
        ],[
            'dob1.required' => 'The date field is required.',
            'dob2.required' => 'The date field is required.',
            'dob1.date' => 'The date field must be a valid date.',
            'dob2.date' => 'The date field must be a valid date.',
            'dob1.before_or_equal' => 'The date field must be less than equal to today.',
            'dob2.before_or_equal' => 'The date field must be less than equal to today.',
        ]);
        $this->compatibility = $this->calculateLove();
        $this->status = 1;
    }

    private function calculateLove(){
        return rand(80, 100);
    }

    public function mount(){
        $this->dispatch('showHeart');
    }

    public function clearAll(){
        $this->reset( 'dob1', 'dob2');
        $this->status = 0;
    }

    public function render()
    {
        return view('livewire.date-love-calculator');
    }

}
