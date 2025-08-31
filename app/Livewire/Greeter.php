<?php

namespace App\Livewire;

use Livewire\Component;

class Greeter extends Component
{
    public $greeting = "Hello, this is from Livewire Component.";
    public $hiddenMessage = "";
    public $status = false;
    public $toggleMessage = false;
    public $spanishGreeting = "नमस्ते, यो Livewire Component बाट हो।";
    public $englishGreeting = "Hello, this is from Livewire Component.";
    public $name;
    public $newName = 'Bubu Rani';

    public function showHiddenMessage(){
        if($this->status == true){
            $this->hiddenMessage = "❤️ म तिमीलाई माया गर्छु, " . $this->newName . " !";
        } else {
            $this->hiddenMessage = "❤️ I love You, " . $this->newName . " !";
        }
        $this->toggleMessage = true;
    }

    public function toggleGreeting(){
        if($this->status == false){
            $this->greeting = $this->spanishGreeting;
            if($this->toggleMessage == true){
                $this->hiddenMessage = "❤️ म तिमीलाई माया गर्छु, " . $this->newName . " !";
                $this->toggleMessage = true;
            } else {
                $this->hiddenMessage = "";
                $this->toggleMessage = false;
            }
            $this->status = true;
        } else {
            $this->greeting = $this->englishGreeting;
            if($this->toggleMessage == true){
                $this->hiddenMessage = "❤️ I love You, " . $this->newName . " !";
                $this->toggleMessage = true;
            } else {
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
