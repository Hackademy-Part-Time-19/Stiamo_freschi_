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
            <div style="flex:2; display:flex">
                <div style="width:70%">
                    <div class="pad">
                        <h1>Good day, artem</h1>
                        <p>we are collecting articoles for you </p>
                    </div>
                    <div class="pad">
                        <h2> New Articles </h2>
                        <div class="card-aside">
                            <div class="row" style="--bs-gutter-x: 0rem;">

                                <div class="cardLayout box col-sm-4" style="margin: 10px">
                                    <div class="imgCard">
                                        <img src="https://images1.vinted.net/t/02_0126f_7UxTSDC7QPA9b5SwtpjvXi9K/f800/1710953115.jpeg?s=2b251215e7d94314a9ffa97432a4b9413faa19e3"
                                            alt="">
                                    </div>
                                    <div class="userCard">
                                        <div class="imageUser">
                                            <img src="https://banner2.cleanpng.com/20180508/toe/kisspng-user-profile-computer-icons-clip-art-5af1ac8cee74c6.8111281615257877889767.jpg"
                                                alt="">
                                        </div>
                                        <div class="nomeUser">
                                            <p> Giovanna{{-- {{ $user }} --}}</p>
                                        </div>
                                    </div>
                                    <div class="prezzoCard">
                                        <h4>Borsa{{-- {{ $title }} --}}</h4>
                                        <p>10 {{-- {{} $price }} --}} €</p>
                                        <h6>Donna{{-- $category --}}</h6>
                                    </div>

                                    <div class="descrizioneCard">
                                        <p>Descrizione {{-- $description --}}</p>

                                    </div>
                                    <div class="Areabutton">

                                        <button class="btnCardLayout"><a style="color: white"
                                                href="{{-- route('announcement.show', ['announcement' => $announcement]) --}}">Vai
                                                al
                                                dettaglio</a></button>
                                    </div>
                                </div>
                                <div class="cardLayout box col-sm-4" style="margin: 10px">
                                    <div class="imgCard">
                                        <img src="https://images1.vinted.net/t/02_0126f_7UxTSDC7QPA9b5SwtpjvXi9K/f800/1710953115.jpeg?s=2b251215e7d94314a9ffa97432a4b9413faa19e3"
                                            alt="">
                                    </div>
                                    <div class="userCard">
                                        <div class="imageUser">
                                            <img src="https://banner2.cleanpng.com/20180508/toe/kisspng-user-profile-computer-icons-clip-art-5af1ac8cee74c6.8111281615257877889767.jpg"
                                                alt="">
                                        </div>
                                        <div class="nomeUser">
                                            <p> Giovanna{{-- {{ $user }} --}}</p>
                                        </div>
                                    </div>
                                    <div class="prezzoCard">
                                        <h4>Borsa{{-- {{ $title }} --}}</h4>
                                        <p>10 {{-- {{} $price }} --}} €</p>
                                        <h6>Donna{{-- $category --}}</h6>
                                    </div>

                                    <div class="descrizioneCard">
                                        <p>Descrizione {{-- $description --}}</p>

                                    </div>

                                    <div class="Areabutton">

                                        <button class="btnCardLayout"><a style="color: white"
                                                href="{{-- route('announcement.show', ['announcement' => $announcement]) --}}">Vai
                                                al
                                                dettaglio</a></button>
                                    </div>


                                </div>

                                <div class="cardLayout box col-sm-4" style="margin: 10px">
                                    <div class="imgCard">
                                        <img src="https://images1.vinted.net/t/02_0126f_7UxTSDC7QPA9b5SwtpjvXi9K/f800/1710953115.jpeg?s=2b251215e7d94314a9ffa97432a4b9413faa19e3"
                                            alt="">
                                    </div>
                                    <div class="userCard">
                                        <div class="imageUser">
                                            <img src="https://banner2.cleanpng.com/20180508/toe/kisspng-user-profile-computer-icons-clip-art-5af1ac8cee74c6.8111281615257877889767.jpg"
                                                alt="">
                                        </div>
                                        <div class="nomeUser">
                                            <p> Giovanna{{-- {{ $user }} --}}</p>
                                        </div>
                                    </div>
                                    <div class="prezzoCard">
                                        <h4>Borsa{{-- {{ $title }} --}}</h4>
                                        <p>10 {{-- {{} $price }} --}} €</p>
                                        <h6>Donna{{-- $category --}}</h6>
                                    </div>

                                    <div class="descrizioneCard">
                                        <p>Descrizione {{-- $description --}}</p>

                                    </div>

                                    <div class="Areabutton">

                                        <button class="btnCardLayout"><a style="color: white"
                                                href="{{-- route('announcement.show', ['announcement' => $announcement]) --}}">Vai
                                                al
                                                dettaglio</a></button>
                                    </div>


                                </div>
                                <div class="cardLayout box col-sm-4" style="margin: 10px">
                                    <div class="imgCard">
                                        <img src="https://images1.vinted.net/t/02_0126f_7UxTSDC7QPA9b5SwtpjvXi9K/f800/1710953115.jpeg?s=2b251215e7d94314a9ffa97432a4b9413faa19e3"
                                            alt="">
                                    </div>
                                    <div class="userCard">
                                        <div class="imageUser">
                                            <img src="https://banner2.cleanpng.com/20180508/toe/kisspng-user-profile-computer-icons-clip-art-5af1ac8cee74c6.8111281615257877889767.jpg"
                                                alt="">
                                        </div>
                                        <div class="nomeUser">
                                            <p> Giovanna{{-- {{ $user }} --}}</p>
                                        </div>
                                    </div>
                                    <div class="prezzoCard">
                                        <h4>Borsa{{-- {{ $title }} --}}</h4>
                                        <p>10 {{-- {{} $price }} --}} €</p>
                                        <h6>Donna{{-- $category --}}</h6>
                                    </div>

                                    <div class="descrizioneCard">
                                        <p>Descrizione {{-- $description --}}</p>

                                    </div>

                                    <div class="Areabutton">

                                        <button class="btnCardLayout"><a style="color: white"
                                                href="{{-- route('announcement.show', ['announcement' => $announcement]) --}}">Vai
                                                al
                                                dettaglio</a></button>
                                    </div>


                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div style="flex: 1.2;heigth:60vh;">
                    <div style=" position: fixed;right:5px">
                        <div style="padding-left:10px;">
                            <h1>Reading Now</h1>
                        </div>
                        <div class="dx-aside">
                            <div class="row" style="width:100%;--bs-gutter-x: 0rem;">
                                <div class="col-sm-5 mb-3 mb-sm-0 div-a-dash">
                                    <div class="card div-card-dash box">
                                        <div class="card-body  body-dash">
                                            <h5 class="card-title">Special title treatment</h5>
                                            <p class="card-text">With supporting text below as a natural lead-in to
                                                additional
                                                content.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-5 mb-3 mb-sm-0  div-a-dash">
                                    <div class="card div-card-dash ">
                                        <div class="card-body body-dash box">
                                            <h5 class="card-title">Special title treatment</h5>
                                            <p class="card-text">With supporting text below as a natural lead-in to
                                                additional
                                                content.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 mb-3 mb-sm-0  div-a-dash">
                                    <div class="card div-card-dash ">
                                        <div class="card-body body-dash box">
                                            <h5 class="card-title">Special title treatment</h5>
                                            <p class="card-text">With supporting text below as a natural lead-in to
                                                additional
                                                content.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</x-layout>
