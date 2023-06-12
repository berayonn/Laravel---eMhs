<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\task;

class IndexTask extends Component
{
    protected $listeners = [
        'indexTask'
    ];

    public function render()
    {
        $task = task::orderBy('id', 'desc')->paginate(10);
        return view('livewire.index-task', ['task' => $task]);
    }

    public function indexTask($task)
    {
        
    }
}
