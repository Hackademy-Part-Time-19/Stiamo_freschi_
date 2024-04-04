<div>
    <div class="row div-form" style=" justify-content: center !important;
    align-items: center !important;">
        <div class="col-4 div-cons">
            <div style="margin-right:50px;margin-top:50px">
                <div class="cardLayout box">
                    <div class="imgCard">
                        <img src="https://images1.vinted.net/t/02_0126f_7UxTSDC7QPA9b5SwtpjvXi9K/f800/1710953115.jpeg?s=2b251215e7d94314a9ffa97432a4b9413faa19e3"
                            alt="">
                    </div>
                    <div class="userCard">
                        <div class="imageUser">
                            <img src="https://banner2.cleanpng.com/20180508/toe/kisspng-user-profile-computer-icons-clip-art-5af1ac8cee74c6.8111281615257877889767.jpg"
                                alt="">
                        </div>
                        <div class="nomeUser ">
                            <div aria-hidden="true">
                                <div class="card-body">
                                    <p class="card-text placeholder-glow skeleton ">
                                        <span class="placeholder col-4"></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="prezzoCard ">
                        <div aria-hidden="true">
                            <h4 class="card-text placeholder-glow skeleton centro-skeletron">
                                <span class="placeholder col-12"></span>
                            </h4>
                        </div>
                        <div aria-hidden="true">
                            <p class="card-text placeholder-glow skeleton centro-skeletron">
                                <span class="placeholder col-6"></span>
                            </p>
                        </div>
                        <div aria-hidden="true">
                            <h6 class="card-text placeholder-glow skeleton centro-skeletron">
                                <span class="placeholder col-12"></span>
                            </h6>
                        </div>
                    </div>
                    <div class="descrizioneCard" style="margin-top: 10px">
                        <div aria-hidden="true">
                            <p class="card-text placeholder-glow skeleton centro-skeletron">
                                <span class="placeholder col-12"></span>
                            </p>
                        </div>
                    </div>
                    <div class="Areabutton" style="padding: 20px;">
                        <a class="btn btn-primary disabled placeholder col-12" aria-disabled="true"></a>
                        {{-- <button class="btnCardLayout"><a style="color: white"
                            href="{{ route('announcement.show', ['announcement' => $announcement]) }}">Vai al
                            dettaglio</a></button> --}}
                    </div>


                </div>

            </div>


            <div class="col-4 div-modale">
                <h1 style="margin-bottom: 20px">Crea il tuo annuncio</h1>

                <div class="form3">
                    <x-session-success />
                    <form wire:submit.live="store">
                        <div class="mb-3">
                            <label for="title" class="form-label">Inserisci il titolo del tuo annuncio</label>
                            <input type="text" name="text" class="form-control" style="width: 100%; height:35px;"
                                id="title" wire:model.blur="title">
                        </div>
                        @error('title')
                            <div class="alert alert-danger"
                                style="height: 25px;display:flex;justify-content:center;align-items:center">
                                {{ $message }}
                            </div>
                        @enderror
                        <div class="mb-3">
                            <label for="price" class="form-label">Inserisci il prezzo</label>
                            <input type="price" name="price" class="form-control" style="width: 100%; height:35px;"
                                id="price" wire:model.live="price">
                        </div>
                        @error('price')
                            <div class="alert alert-danger"
                                style="height: 25px;display:flex;justify-content:center;align-items:center">
                                {{ $message }}
                            </div>
                        @enderror
                        <div class="mb-3">
                            <label for="description" class="form-label">Inserisci una breve descrizione</label>
                            <input type="textarea" name="description" class="form-control"
                                style="width: 100%; height:35px;" id="description" wire:model.live="description">
                        </div>
                        @error('description')
                            <div class="alert alert-danger"
                                style="height: 25px;display:flex;justify-content:center;align-items:center">
                                {{ $message }}
                            </div>
                        @enderror
                        <div class="mb-3">
                            <label for="category">Seleziona una categoria</label>
                        </div>
                        <select class="form-select" aria-label="Default select example" name="category_id"
                            style="width: 100%; height:35px;margin-bottom: 20px;" wire:model.live="category_id">
                            <option selected>Seleziona un elemento</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        @error('category_id')
                            <div class="alert alert-danger"
                                style="height: 25px;display:flex;justify-content:center;align-items:center">
                                {{ $message }}
                            </div>
                        @enderror
                        <div class="mb-3">
                            <label for="image" class="form-label">Inserisci un'immagine</label>
                            <input wire:model='temporary_images' type="file" name="image" multiple
                                class="form-control @error('temporary_images.*') is-invalide @enderror" id="image"
                                wire:model.blur="image" style="width: 100%; height:35px;margin-bottom: 20px">
                        </div>
                        @error('image')
                            <div class="alert alert-danger"
                                style="height: 25px;display:flex;justify-content:center;align-items:center">
                                {{ $message }}
                            </div>
                        @enderror

                        <button type="submit" class="BtnRegistratiLogin">Crea il tuo annuncio</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
