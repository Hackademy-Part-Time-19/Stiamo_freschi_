<x-layout>
    <x-navbar />
    <h1 style="margin-top:100px">
        {{ $announcement_to_check ? "ecco l'annuncio da revisionare" : 'Non ci sono annunci da revisionare' }}
    </h1>

    <x-session-success/>

    <div class="containerPageShow">
        @if ($announcement_to_check)
            <div class="containerCaruselShow">
                <div id="carouselExampleCaptions" class="carousel slide" style="margin-top: 50px">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
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
                <h1>{{ $announcement_to_check->title }}</h1>
                <h2>Prezzo : {{ $announcement_to_check->price }} € </h2>
                <p>Descrizione : {{ $announcement_to_check->description }}</p>
                <p>Categoria : {{ $announcement_to_check->category->name }}</p>

                <div class="containerButton">
                    <form action="{{route('revisor.accept_announcement', ['announcement' => $announcement_to_check])}}" method="post">
                        @csrf
                        @method ('PATCH')
                        <button type="submit" class="btn btn-success shadow">Accetta annuncio</button>
                    </form>
                    <form action="{{route('revisor.reject_announcement', ['announcement' => $announcement_to_check])}}" method="post">
                        @csrf
                        @method ('PATCH')
                        <button type="submit" class="btn btn-danger shadow">Rifiuta annuncio</button>
                    </form>

                </div>
            </div>
    </div>
    @endif


</x-layout>
