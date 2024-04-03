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
        'title' => 'required|min:4|max:40',
        'price' => 'required|numeric',
        'description' => 'required|min:10|max:255',
        'category_id' => 'required',
        'images.*' => 'image|max:1024',
        'temporary_images.*' => 'image|max:1024',
    ];

    protected $messages = [
        'title.required' => 'Il campo titolo è obbligatorio',
        'title.min' => 'Il campo titolo deve contenere più di 4 caratteri',
        'title.max' => 'Il campo titolo deve essere lungo al massimo 40 caratteri',
        'price.required' => 'Il campo prezzo è obbligatorio',
        'price.numeric' => 'Il campo prezzo deve essere un numero',
        'description.required' => 'Il campo descrizione è obbligatorio',
        'description.min' => 'Il campo descrizione deve contenere più di 10 caratteri',
        'description.max' => 'Il campo descrizione deve essere lungo al massimo 255 caratteri',
        'category_id.required' => 'Il campo categoria è obbligatorio',
        'images.image' => 'I file caricati devono essere delle immagini',
        'images.max' => 'I file caricati non devono superare 1 mb di grandezza',
        'temporary_images.*.image' => 'I file caricati devono essere delle immagini',
        'temporary_images.*.max' => 'I file caricati non devono superare 1 mb di grandezza',
    ];


    public function store()
    {
        $validatedData = $this->validate();
        /* dd($validateData); */
        $authUser = auth()->user()->id;
        Announcement::create(array_merge($validatedData, ['user_id' => $authUser]));
        if (count($this->images)) {
            foreach ($this->images as $image) {
                $this->announcement->images()->create(['path' => $image->store('images', 'public')]);
            }
        }
        session()->flash('message', 'Annuncio creato con successo!');
        $this->clearForm();
    }

    public function render()
    {
        return view('livewire.form-create', [
            'categories' => Category::all()
        ]);
    }

    public function updatedTemporaryImages()
    {
        if ($this->validate(['temporary_images.*' => 'image|max:1024'])) {
            foreach ($this->temporary_images as $image) {
                $this->images[] = $image;
            }
        }
    }
    public function removeImage($key)
    {
        if (in_array($key, array_keys($this->images))) {
            unset($this->images[$key]);
        }
    }

    public function clearForm()
    {
        $this->title = '';
        $this->price = '';
        $this->description = '';
        $this->images = [];
        $this->temporary_images = [];
    }

}