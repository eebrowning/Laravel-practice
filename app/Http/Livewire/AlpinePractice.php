<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AlpinePractice extends Component
{
    
    public $mediaCollection;
    
    public $defaultImg;
    public $defaultId;
    
    public function displayImg(){
       $defaultImg=$mediaCollection[0]['name'];
        $defaultId=$mediaCollection[0]['shopifyId'];
    }

    public function render()
    {
        
        return view('livewire.alpine-practice');
    }
}
