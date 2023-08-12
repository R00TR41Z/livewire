<?php

namespace App\Http\Livewire;

use App\Models\Tweet;
use Livewire\Component;
use Livewire\WithPagination;

class ShowTweet extends Component
{
    use WithPagination;
    protected $paginationTheme = "bootstrap";
    public $title ="";
    public $content ="";
    public function render()
    {
        $tweets = Tweet::with('user')->orderBy('id','desc')->paginate(2);
        return view('livewire.show-tweet',[
            'tweets'=>$tweets
        ]);
    }

    public function create(){
        Tweet::create([
            'user_id'=>1,
            'title'=>$this->title,
            'content'=>$this->content
        ]);

        $this->title ="";
        $this->content="";
    }
}
