<?php

namespace App\Livewire;

use App\Models\Announcement;
use App\Models\Category;
use Livewire\Component;
use Livewire\WithFileUploads;

class FormCreate extends Component
{
    use WithFileUploads;
    public $title;
    public $price;
    public $description;
    public $category_id;
    public $images = [];
    public $announcement;
    public $temporary_images;


    protected $rules = [
        'title' => 'required|max:40',
        'price' => 'required|numeric',
        'description' => 'required|max:255',
        'category_id' => 'required',
        /*  'image' => 'required|image|max:1024', */
    ];

    protected $messages = [
        'title.required' => 'Il campo titolo è obbligatorio',
        'title.max' => 'Il campo titolo deve essere lungo al massimo 40 caratteri',
        'price.required' => 'Il campo prezzo è obbligatorio',
        'price.numeric' => 'Il campo prezzo deve essere un numero',
        'description.required' => 'Il campo descrizione è obbligatorio',
        'description.max' => 'Il campo descrizione deve essere lungo al massimo 255 caratteri',
        'category_id.required' => 'Il campo categoria è obbligatorio',
        /* 'image.required' => 'Il campo :attribute è obbligatorio',
        'image.image' => 'Il campo :attribute deve essere un\'immagine',
        'image.max' => 'Il campo :attribute deve essere lungo al massimo 1024 caratteri', */
    ];


    public function store()
    {
        $validatedData = $this->validate();
        /* dd($validateData); */
        $authUser = auth()->user()->id;
        Announcement::create(array_merge($validatedData, ['user_id' => $authUser]));
        session()->flash('message', 'Annuncio creato con successo!');
    }

    public function render()
    {
        return view('livewire.form-create', [
            'categories' => Category::all()
        ]);
    }
}