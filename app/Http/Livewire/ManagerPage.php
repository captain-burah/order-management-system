<?php

namespace App\Http\Livewire;

use App\Models\Manager;
use Livewire\Component;

class ManagerPage extends Component
{

    public $name;
    public $email;
    public $modalFormVisible = false;

    public function createShowModal() 
    {
        $this->modalFormVisible = true;
    }
    public function render()
    {
        return view('livewire.manager-page');
    }
}
