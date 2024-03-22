<nav class="navbar mobile ">
    <div class="container-navbar">
        <div class="container-logo">
            <img src="img/3202bafdb1a3c31e249263cbffd1a937.png" alt="logo" class="img-logo">
        </div>
        <div class="container-menu">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <img src="img/3202bafdb1a3c31e249263cbffd1a937.png" alt="logo" class="img-logo">
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <div
                        style="height: 30%; display: flex;flex-direction: column;justify-content: center;align-items: center;">
                        <button class="btn-menu" style=" margin-bottom: 20px;">
                            ACCEDI
                        </button>
                        <button class="btn-menu" style=" width: 80%;height: 30px;">REGISTRATI
                        </button>
                    </div>
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex mt-3" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</nav>
<nav class="navbar tablet">
    <div class="container-navbar">
        <div class="container-logo">
            <img src="img/3202bafdb1a3c31e249263cbffd1a937.png" alt="logo" class="img-logo">
            <div class="container-fluid">
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-secondary" type="submit">Search</button>
                </form>
            </div>
        </div>
        <div class="container-menu">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" id="text"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <img src="img/3202bafdb1a3c31e249263cbffd1a937.png" alt="logo" class="img-logo">
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <div
                        style="height: 30%; display: flex;flex-direction: column;justify-content: center;align-items: center;">
                        <button style=" width: 80%;height: 30px; margin-bottom: 20px;">
                            ACCEDI
                        </button>
                        <button class="btn-menu" style=" width: 80%;height: 30px;">REGISTRATI
                        </button>
                    </div>
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex mt-3" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</nav>
<nav class="navbar desktop">
    <div class="container-navbar">
        <a href="/">
            <div class="container-logo">
                <img src="\img\logo.presto.scontornato.2.png" alt="logo" class="img-logo">
            </div>
        </a>

        <div class="container-fluid">
            <form class="d-flex" role="search">
                <input class="form-control me-2" style="margin-top: 13px; height:35px" type="search"
                    placeholder="Cerca il tuo annuncio" aria-label="Search">
                <button class="btn btn-outline-secondary btn-search"
                    style="color: white; background-color: #081F37;height:35px;" type="submit">Cerca</button>
            </form>
        </div>

        @guest
            <div class="div-btn-desk">
                <a href="/login"><button class="btn-desk2">ACCEDI</button></a>
                <a href="/register"><button class="btn-desk2">REGISTRATI</button></a>
            </div>
        @endguest
        @auth
            <div class="div-btn-desk">
                <a href="/dashboard"><button class="btn-desk2">Utente logato : <span style="font-weight: bold">
                            {{ auth()->user()->name }}</span></button></a>
                <form action="/logout" method="post">
                    @csrf
                    <button class="btn-desk2">LOGOUT</button>
                </form>
            </div>
        @endauth
    </div>
    </div>
</nav>
<div class="container-cat">
    <div class="container-fluid">
        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-secondary" type="submit">Search</button>
        </form>
    </div>
</div>
