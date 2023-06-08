<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Tag extends Component
{
    public function render(){
        return view('livewire.tag')->layout('layouts.guest')->slot('body');
    }
//    public function render()
//    {
////        old way
//        return view('livewire.tag')
//            ->extend('layouts.main')
//            ->section('content');
//    }
}
