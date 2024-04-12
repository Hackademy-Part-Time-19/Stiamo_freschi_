<?php

namespace App\Livewire;

use App\Jobs\GoogleVisionLabelImage;
use Livewire\Livewire;
use Livewire\Component;
use App\Models\Category;
use App\Jobs\RemoveFaces;
use App\Jobs\ResizeImage;
use App\Models\Announcement;
use Livewire\WithFileUploads;
use App\Jobs\GoogleVisionSafeSearch;
use App\Jobs\Watermark;
use Illuminate\Support\Facades\File;

class FormEdit extends Component
{
    use WithFileUploads;
    public $title;
    public $price;
    public $description;
    public $category_id;
    public $images = [];
    public $announcement;
    public $temporary_images;
    public $announcement_revisor_counter;
    public $announcementToEdit;

    public $name = ['Sport', 'Elettronica', 'Musica', 'Casa', 'Giardino', 'Fai da te', 'Abbigliamento', 'Accessori', 'Gioielli'];



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

    public function mount()
    {
        $this->announcement_revisor_counter = Announcement::toBeRevisionedCount();
        
        $announcement = $this->announcementToEdit;
        $this->title = $announcement->title;
        $this->price = $announcement->price;
        $this->description = $announcement->description ;
        $this->category_id = $announcement->category_id;
    }

    public function render()
    {
        $categories = Category::all()->map(function ($category) {
            return [
                'id' => $category->id,
                'name' => $category->translatedName(),
            ];
        });

        return view('livewire.form-edit', [
            'categories' => $categories,
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



    public function editAnnouncement()
    {
        $announcement = $this->announcementToEdit;
        $this->validate();
        $announcement->is_accepted = null;
    
        if (count($this->images)) {
            foreach ($this->images as $image) {
                $newFileName = "announcement/{$announcement->id}";
                $newImage = $announcement->images()->create(['path' => $image->store($newFileName, 'public')]);
                RemoveFaces::withChain([
                    new ResizeImage($newImage->path, 400, 500),
                    new GoogleVisionSafeSearch($newImage->id),
                    new GoogleVisionLabelImage($newImage->id)
                ])->dispatch($newImage->id);
    
                // Invia la job Watermark separatamente dopo che tutte le altre operazioni sono state completate
                Watermark::dispatch($newImage->id);
            }
            // Rimuovi la directory temporanea di Livewire
            File::deleteDirectory(storage_path('/app/livewire-tmp'));
        }
    
        $announcement->update($this->validate());
    
        session()->flash('message', 'Annuncio modificato con successo! Verrà pubblicato nuovamente solamente dopo la revisione');

        return redirect()->route('profile');
    }
    
}