<?php

namespace App\Http\Livewire;

use App\Models\Tweet;
use Livewire\Component;

class ShowTweet extends Component
{
    public $name ="";
    public function render()
    {
        $tweets = Tweet::with('user')->get();
        return view('livewire.show-tweet',compact('tweets'));
    }
}
