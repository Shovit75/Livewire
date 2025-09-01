<?php

namespace App\Livewire;

use Livewire\Component;

class Greeter extends Component
{
    public $greeting = "This is from Livewire Component.";
    public $hiddenMessage = "";
    public $status = false;
    public $toggleMessage = false;
    public $nepaliGreeting = "यो Livewire Component बाट हो।";
    public $englishGreeting = "This is from Livewire Component.";
    public $welcome = "Hello,";
    public $newName = 'Bubu Rani';

    public function showHiddenMessage(){
        if($this->status == true){
            $this->welcome = 'नमस्ते,';
            $this->hiddenMessage = "❤️ म तिमीलाई माया गर्छु, " . $this->newName . " !";
        } else {
            $this->welcome = 'Hello,';
            $this->hiddenMessage = "❤️ I love You, " . $this->newName . " !";
        }
        $this->toggleMessage = true;
    }

    public function toggleGreeting(){
        if($this->status == false){
            $this->greeting = $this->nepaliGreeting;
            if($this->toggleMessage == true){
                $this->welcome = 'नमस्ते,';
                $this->hiddenMessage = "❤️ म तिमीलाई माया गर्छु, " . $this->newName . " !";
                $this->toggleMessage = true;
            } else {
                $this->welcome = 'नमस्ते,';
                $this->hiddenMessage = "";
                $this->toggleMessage = false;
            }
            $this->status = true;
        } else {
            $this->greeting = $this->englishGreeting;
            if($this->toggleMessage == true){
                $this->welcome = 'Hello,';
                $this->hiddenMessage = "❤️ I love You, " . $this->newName . " !";
                $this->toggleMessage = true;
            } else {
                $this->welcome = 'Hello,';
                $this->hiddenMessage = "";
                $this->toggleMessage = false;
            }
            $this->status = false;
        }
    }

    public function render()
    {
        return view('livewire.greeter');
    }
}
