<x-layout>
    <x-navbar />
    <div style="display: flex;">

        <div class="aside-left">
            <ul class="ul-aside">
                <div class="li-aside">
                    <li>Dashboard</li>
                </div>
                <div class="li-aside">
                    <li>Catalogs</li>
                </div>
                <div class="li-aside">
                    <li>My favorites</li>
                </div>
                <div class="li-aside">
                    <li>My articles</li>
                </div>
                <div class="li-aside">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                        class="bi bi-person" viewBox="0 0 16 16" style="margin-right: 10px">
                        <path
                            d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
                    </svg>
                    <li>Profile</li>
                </div>
                <div class="li-aside">
                    <li>Basket</li>
                </div>
            </ul>
        </div>
        <div class="div-card">
            <div>
                <h3>Bentornato</h3>
            </div>
            <div class="card-dash">
                <div class="inserzione">
                    <button>
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="30" fill="currentColor"
                            class="bi bi-check2" viewBox="0 0 16 16">
                            <path
                                d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0" />
                        </svg>
                    </button>
                    <button>
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="30" fill="currentColor"
                            class="bi bi-x-lg" viewBox="0 0 16 16">
                            <path
                                d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z" />
                        </svg>
                    </button>
                    <div>
                        <h3></h3>
                    </div>
                    <div>
                        <h3></h3>
                    </div>
                    <button>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                            <path
                                d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                        </svg>
                    </button>
                </div>
                <div style="display: flex">
                    <div class="card-dash2">
                        <div id="carouselExample" class="carousel slide" style="width: 100%;height:100%">
                            <div class="carousel-inner" style="width: 100%;height:100%">
                                <div class="carousel-item active">
                                    <img src="https://images1.vinted.net/t/01_00c4d_ibKrDo5AVXpgGHcrrAVUxZwh/f800/1711030911.jpeg?s=162684a97acb85e57eac3596398af8bbcb25c46e"
                                        class=" img-size d-block " alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="https://images1.vinted.net/t/01_00c4d_ibKrDo5AVXpgGHcrrAVUxZwh/f800/1711030911.jpeg?s=162684a97acb85e57eac3596398af8bbcb25c46e"
                                        class="img-size d-block  " alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="https://images1.vinted.net/t/01_00c4d_ibKrDo5AVXpgGHcrrAVUxZwh/f800/1711030911.jpeg?s=162684a97acb85e57eac3596398af8bbcb25c46e"
                                        class="img-size d-block " alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <div style="flex:3">
                        <div class="div-descr" style="">
                            <h1>{{-- $announcement->title --}}</h1>
                            <h2>Prezzo : {{-- $announcement->price - € --}}</h2>
                            <p>Descrizione : {{-- $announcement->description --}}</p>
                            <p>Categoria : {{-- $announcement->category->name --}}</p>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</x-layout>
