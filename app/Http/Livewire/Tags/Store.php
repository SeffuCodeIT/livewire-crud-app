<?php

namespace App\Http\Livewire\Tags;

//use App\Http\Livewire\Tag;
use Livewire\Component;
//use Psy\Util\Str;
use Illuminate\Support\Str;
use App\Models\Tag;
class Store extends Component
{
    public $name;
    public $email;
    public $openModalToCreateTag;
    public $openModal = false;

    protected $rules = [
        'name' => ['required','unique:tags,name', 'min:2', 'max:10'],
        'email' => ['required','email'],
    ];

    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }
    public function openModalToCreateTag(){
        $this->resetErrorBag();
        $this->openModal = true;
    }

    public function store(){
//        new \App\Models\Tag([
//            'name' => $this->name,
//            'slug' => $this->name,
//
//        ]);
        Tag::create([
            'name' => $this->name,
//            'slug' => $this->name,
        'slug' => Str::slug($this->name),
//            'slug' => Str::slug($this->name),
        ]);

        session()->flash('success', 'Tag Created');

        $this->reset();
    }
    public function render()
    {
        return view('livewire.tags.store');
    }
}
