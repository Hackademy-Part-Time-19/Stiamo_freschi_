<div>
    <div class="row div-fcorm" style=" justify-content: center !important;
    align-items: center !important;">
        <div class="col-4 div-cons">

        </div>
        <div class="col-4 div-modale">
            <h1 style="margin-bottom: 20px">Crea il tuo annuncio</h1>
            <div class="form3">
                <form wire:submit="store">
                    <x-session-success />
                    <div class="mb-3">
                        <label for="title" class="form-label">Inserisci il titolo del tuo annuncio</label>
                        <input type="text" name="text" class="form-control" style="width: 100%; height:35px;"
                            id="title" wire:model.blur="title">
                    </div>
                    @error('title')
                        <div class="alert alert-danger"
                            style="height: 25px;display:flex;justify-content:center;align-items:center">{{ $message }}
                        </div>
                    @enderror
                    <div class="mb-3">
                        <label for="price" class="form-label">Inserisci il prezzo</label>
                        <input type="price" name="price" class="form-control" style="width: 100%; height:35px;"
                            id="price" wire:model.blur="price">
                    </div>
                    @error('price')
                        <div class="alert alert-danger"
                            style="height: 25px;display:flex;justify-content:center;align-items:center">{{ $message }}
                        </div>
                    @enderror
                    <div class="mb-3">
                        <label for="description" class="form-label">Inserisci una breve descrizione</label>
                        <input type="textarea" name="description" class="form-control" style="width: 100%; height:35px;"
                            id="description" wire:model.blur="description">
                    </div>
                    @error('description')
                        <div class="alert alert-danger"
                            style="height: 25px;display:flex;justify-content:center;align-items:center">{{ $message }}
                        </div>
                    @enderror
                    <div class="mb-3">
                        <label for="category">Seleziona una categoria</label>
                    </div>
                    <select class="form-select" aria-label="Default select example" name="category_id"
                        style="width: 100%; height:35px;margin-bottom: 20px;" wire:model.blur="category_id">
                        <option selected>Seleziona un elemento</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                        <div class="alert alert-danger"
                            style="height: 25px;display:flex;justify-content:center;align-items:center">{{ $message }}
                        </div>
                    @enderror
                    <div class="mb-3">
                        <label for="image" class="form-label">Inserisci un'immagine</label>
                        <input type="file" name="image" class="form-control" id="image" wire:model.blur="image"
                            style="width: 100%; height:35px;margin-bottom: 20px">
                    </div>
                    @error('image')
                        <div class="alert alert-danger"
                            style="height: 25px;display:flex;justify-content:center;align-items:center">{{ $message }}
                        </div>
                    @enderror

                    <button type="submit" class="BtnRegistratiLogin">Crea il tuo annuncio</button>
                </form>
            </div>
        </div>

    </div>
</div>
