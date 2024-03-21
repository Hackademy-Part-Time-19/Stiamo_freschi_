<div>

    <div class="row div-form">
        <div class="col-4 div-modale">
            <div class="form3">
                <form wire:submit="store">
                    <x-session-success />
                    <div class="mb-3">
                        <label for="title" class="form-label">Inserisci il titolo del tuo annuncio</label>
                        <input type="text" name="text" class="form-control" id="title" wire:model="title">
                    </div>
                    @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="mb-3">
                        <label for="price" class="form-label">Inserisci il prezzo</label>
                        <input type="price" name="price" class="form-control" id="price" wire:model="price">
                    </div>
                    @error('price')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="mb-3">
                        <label for="description" class="form-label">Inserisci una breve descrizione</label>
                        <input type="textarea" name="description" class="form-control" id="description"
                            wire:model="description">
                    </div>
                    @error('description')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <select class="form-select" aria-label="Default select example" name="category_id"
                        wire:model="category_id">
                        <option selected>Open this select menu</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="mb-3">
                        <label for="image" class="form-label">Inserisci un'immagine</label>
                        <input type="file" name="image" class="form-control" id="image" wire:model="image">
                    </div>
                    @error('image')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>

        </div>
    </div>

</div>
