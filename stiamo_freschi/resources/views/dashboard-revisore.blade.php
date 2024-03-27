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
                    <li>Profile</li>
                </div>
                <div class="li-aside">
                    <li>Basket</li>
                </div>
            </ul>
        </div>
        <div class="div-card">
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
            <div style="flex: 1;position: relative;right:20px; ">
                
                <div class="dx-aside " style="margin-top: 30px">
                    <div class="row" style="background-color:yellow;padding-top:80px;position: fixed;" >
                        <div style="padding-left:30px;">
                            <h1>Reading Now</h1>
                        </div>
                        <div class="row row-cols-1 row-cols-md-2 g-4" style="margin-top: 30px">
                            <div class="col-sm-3">
                              <div class="card div-card-dash">
                               
                                <div class="card-body body-dash"  >
                                  <h5 class="card-title">Card title</h5>
                                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                              </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="card div-card-dash">
                                 
                                  <div class="card-body body-dash"  >
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-3">
                                <div class="card div-card-dash">
                                 
                                  <div class="card-body body-dash"  >
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-3">
                                <div class="card div-card-dash">
                                 
                                  <div class="card-body body-dash"  >
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
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
