<x-layout>

    <x-navbar />
    <div class="banner">
        @foreach ($categories as $category)
            <div id="myButton" class="banner-cat">{{ $category->name }}</div>
        @endforeach
    </div>
    <div class="img-container-mobile">
    </div>
    <div class="img-container">
        @auth
            <div class="txt-img">
                <h1>Bentornato {{ auth()->user()->name }}</h1>
                <button class="btn-txt-img">
                    Inserisci il tuo annuncio
                </button>
            </div>
        @else
            <div class="txt-img">
                <h1>Vendi con facilità, inizia PRESTO!</h1>
                <button class="btn-txt-img">
                    Inserisci il tuo annuncio
                </button>
            </div>
        @endauth

    </div>
    <div class="container-copy">
        <div class="container2">
            <h1 class="copy">
                "Grandi Risparmi in Arrivo! Vendi come Compri.<br>
                Scopri le Offerte Irripetibili su Abbigliamento, Accessori e Altro!"</h1>
            <div class="btn-copy">
                <button class="btn2"></button>
                <button class="btn3"></button>
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

    <div class="ContainerCard">
        <div class="row">
            <div id="containerColCard" class="col-12 col-xl-3 col-lg-4 col-md-6 mt-5">
                <x-card-home></x-card-home>
            </div>
            <div id="containerColCard" class="col-12 col-xl-3 col-lg-4 col-md-6 mt-5">
                <x-card-home></x-card-home>
            </div>
            <div id="containerColCard" class="col-12 col-xl-3 col-lg-4 col-md-6 mt-5">
                <x-card-home></x-card-home>
            </div>
            <div id="containerColCard" class="col-12 col-xl-3 col-lg-4 col-md-6 mt-5">
                <x-card-home></x-card-home>
            </div>
            <div id="containerColCard" class="col-12 col-xl-3 col-lg-4 col-md-6 mt-5">
                <x-card-home></x-card-home>
            </div>
            <div id="containerColCard" class="col-12 col-xl-3 col-lg-4 col-md-6 mt-5">
                <x-card-home></x-card-home>
            </div>
            <div id="containerColCard" class="col-12 col-xl-3 col-lg-4 col-md-6 mt-5">
                <x-card-home></x-card-home>
            </div>
            <div id="containerColCard" class="col-12 col-xl-3 col-lg-4 col-md-6 mt-5">
                <x-card-home></x-card-home>
            </div>


        </div>



    </div>

</x-layout>
