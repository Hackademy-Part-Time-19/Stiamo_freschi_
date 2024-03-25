<x-layout>

    <x-navbar />
    <div class="banner">
        @foreach ($categories as $category)
            <div id="myButton" class="banner-cat"><a
                    href="{{ route('announcement.category', ['id' => $category->id]) }}">{{ $category->name }}</a></div>
        @endforeach
    </div>
    <div class="img-container-mobile">
    </div>
    <div class="img-container">
        @auth
            <div class="txt-img">
                <h1>Bentornato {{ auth()->user()->name }}</h1>
                <button class="btn-txt-img"><a href="{{ route('announcement.create') }}"
                        style="text-decoration: none; color:white;">
                        Inserisci il tuo annuncio</a>
                </button>
            </div>
        @endauth
        @guest
            <div class="txt-img">
                <h1>Vendi con facilità, inizia PRESTO!</h1>
                <h4>Comincia a guadagnare, registrati!</h5>
                    <button class="btn-txt-img"><a href="/login" style="text-decoration: none; color:white;">
                            Accedi/Registrati
                        </a></button>
            </div>
        @endguest

    </div>
    <div class="div-container">
        <div class="container-copy">
            <div class="container2">
                <h1 class="copy">
                    "Sono in arrivo grandi risparmi! Acquista e vendi con facilità. Scopri offerte imperdibili su
                    abbigliamento, accessori e tanto altro!"
                    <div class="btn-copy">
                        <button class="btn2"></button>
                        <button class="btn3"></button>
                    </div>
            </div>
        </div>


        <div class="containerD ">
            <div class="row">
                <div class="col-sm-6 mb-3 mb-sm-0 ">

                    <div class="card-body box">

                    </div>
                </div>

                <div class="col-sm-6">

                    <div class="card-body " style="background-color: rgba(217, 217, 217, 1)">

                    </div>

                </div>
            </div>
        </div>
        <div class="container-carousel">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="cardLayout">
                                    <div class="imgCard">

                                    </div>
                                    <div class="userCard">
                                        <div class="imageUser">

                                        </div>
                                        <div class="nomeUser">
                                            <p>Luca Leanza</p>
                                        </div>
                                    </div>
                                    <div class="prezzoCard">
                                        <h4>Titolo Card</h4>
                                        <p>10,99 €</p>
                                    </div>

                                    <div class="descrizioneCard">
                                        <p>Descrizione di prova</p>
                                    </div>

                                    <div class="Areabutton">

                                        <button class="btnCardLayout">Vai al dettaglio</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="cardLayout">
                                    <div class="imgCard">

                                    </div>
                                    <div class="userCard">
                                        <div class="imageUser">

                                        </div>
                                        <div class="nomeUser">
                                            <p>Luca Leanza</p>
                                        </div>
                                    </div>
                                    <div class="prezzoCard">
                                        <h4>Titolo Card</h4>
                                        <p>10,99 €</p>
                                    </div>

                                    <div class="descrizioneCard">
                                        <p>Descrizione di prova</p>
                                    </div>

                                    <div class="Areabutton">

                                        <button class="btnCardLayout">Vai al dettaglio</button>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-4">
                                <div class="cardLayout">
                                    <div class="imgCard">

                                    </div>
                                    <div class="userCard">
                                        <div class="imageUser">

                                        </div>
                                        <div class="nomeUser">
                                            <p>Luca Leanza</p>
                                        </div>
                                    </div>
                                    <div class="prezzoCard">
                                        <h4>Titolo Card</h4>
                                        <p>10,99 €</p>
                                    </div>

                                    <div class="descrizioneCard">
                                        <p>Descrizione di prova</p>
                                    </div>

                                    <div class="Areabutton">

                                        <button class="btnCardLayout">Vai al dettaglio</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="cardLayout">
                                    <div class="imgCard">

                                    </div>
                                    <div class="userCard">
                                        <div class="imageUser">

                                        </div>
                                        <div class="nomeUser">
                                            <p>Luca Leanza</p>
                                        </div>
                                    </div>
                                    <div class="prezzoCard">
                                        <h4>Titolo Card</h4>
                                        <p>10,99 €</p>
                                    </div>

                                    <div class="descrizioneCard">
                                        <p>Descrizione di prova</p>
                                    </div>

                                    <div class="Areabutton">

                                        <button class="btnCardLayout">Vai al dettaglio</button>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-4">
                                <div class="cardLayout">
                                    <div class="imgCard">

                                    </div>
                                    <div class="userCard">
                                        <div class="imageUser">

                                        </div>
                                        <div class="nomeUser">
                                            <p>Luca Leanza</p>
                                        </div>
                                    </div>
                                    <div class="prezzoCard">
                                        <h4>Titolo Card</h4>
                                        <p>10,99 €</p>
                                    </div>

                                    <div class="descrizioneCard">
                                        <p>Descrizione di prova</p>
                                    </div>

                                    <div class="Areabutton">

                                        <button class="btnCardLayout">Vai al dettaglio</button>
                                    </div>
                                </div>

                            </div>
                            <div class="cardLayout">
                                <div class="imgCard">

                                </div>
                                <div class="userCard">
                                    <div class="imageUser">

                                    </div>
                                    <div class="nomeUser">
                                        <p>Luca Leanza</p>
                                    </div>
                                </div>
                                <div class="prezzoCard">
                                    <h4>Titolo Card</h4>
                                    <p>10,99 €</p>
                                </div>

                                <div class="descrizioneCard">
                                    <p>Descrizione di prova</p>
                                </div>

                                <div class="Areabutton">

                                    <button class="btnCardLayout">Vai al dettaglio</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        
         {{-- @dd($announcements) --}}

        <div class="ContainerCard">
            <div class="row" style="display:flex;justify-content:center;padding:0px;margin:0px">
                @forelse ($announcements as $announcement)
                    <div id="containerColCard" class="col-12 col-xl-3 col-lg-4 col-md-6 mt-5">
                        <x-card-home :user="$announcement->user->name" 
                             :title="$announcement->title" 
                             :price="$announcement->price"
                              :description="$announcement->description"
                            :category="$announcement->category->name"
                             :announcement="$announcement">
                        </x-card-home>
                    </div>
                @empty
                    <div class="col-12">
                        <div class="alert alert-warning py-3 shadow">
                            <p class="lead">Non ci sono annunci per questa ricerca. Prova a cambiare i parametri di
                                ricerca.</p>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </div>




</x-layout>
