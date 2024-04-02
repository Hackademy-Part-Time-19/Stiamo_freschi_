<x-layout>
    <x-navbar />

    <div class="container-img-back">
        <div class="containerPageShow">
            <div class="containerCaruselShow">
                <div id="carouselExampleCaptions" class="carousel slide" style="margin-top: 50px">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://images1.vinted.net/t/01_00c4d_ibKrDo5AVXpgGHcrrAVUxZwh/f800/1711030911.jpeg?s=162684a97acb85e57eac3596398af8bbcb25c46e"
                                class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                {{--  <h5>First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p> --}}
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="https://images1.vinted.net/t/03_020ff_deBXJucaf2G5VnFM62raM5Rw/f800/1711108129.jpeg?s=b6164143a60fe0c40ddc86383b3e7daaab71ce84"
                                style="object-fit:cover" class="d-block w-100" alt="">
                            <div class="carousel-caption d-none d-md-block">
                                {{-- <h5>Second slide label</h5>
                            <p>Some representative placeholder content for the second slide.</p> --}}
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="https://images1.vinted.net/t/03_01fd8_jgmvMVaPyanyFJhuirmeztBk/f800/1711030578.jpeg?s=73a378831d6cb366a168d5abd6ac4fe19c1d222e"
                                class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                {{--                             <h5>Third slide label</h5>
                            <p>Some representative placeholder content for the third slide.</p> --}}
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="containerTextShow">
                <div style="width:70%: height: 50%; margin-top:0px">
                    <h1 style="font-size: 3vw">{{ $announcement->title }}</h1>
                    <h2 style="font-size: 2vw">Prezzo : {{ $announcement->price }} € </h2>
                    <p style="font-size: 2vw">Descrizione : {{ $announcement->description }}</p>
                    <p style="font-size: 2vw">Categoria : {{ $announcement->category->name }}</p>
                </div>
                <div class="div-btn-acq">
                    <button class="btn btn-acq">Acquista</button>
                    <button class="btn btn-acq">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-heart" viewBox="0 0 16 16">
                            <path
                                d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15" />
                        </svg>Aggiungi ai preferiti</button>
                </div>
            </div>
        </div>
        <div class="ContainerCard">
            <div class="banner2">
                @foreach ($categories as $category)
                    <div id="myButton" class="banner-cat"><a
                            href="{{ route('announcement.category', ['id' => $category->id]) }}">{{ $category->name }}</a>
                    </div>
                @endforeach
            </div>
            <div class="row" style="display:flex;justify-content:center;padding:0px;margin:0px; flex:3">
                @forelse ($announcements_all as $announcement)
                    <div id="containerColCard" class="col-12 col-xl-3 col-lg-4 col-md-6 mt-5">
                        <x-card-home :user="$announcement->user->name" :date="$announcement->updated_at->format('Y/m/d H:i:s')" :title="$announcement->title" :price="$announcement->price"
                            :description="$announcement->description" :category="$announcement->category->name" :announcement="$announcement">
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
</x-layout>
