<x-layout>

    <x-navbar />
    <div class="banner">
        @foreach ($categories as $category)
            <div id="myButton" class="banner-cat">
                <a href="{{ route('announcement.category', ['id' => $category->id]) }}">
                    {{ $category->translatedName() }}
                </a>
            </div>
        @endforeach
    </div>
    <x-session-success />
    <div class="img-container-mobile">
    </div>
    <div class="container-img-back">
        <div class="img-container">
            @auth
                <div class="txt-img">
                    <h1>{{ __('ui.welcomeName') }} {{ auth()->user()->name }}</h1>
                    <a style="text-decoration: none; color:white; width: 500px" href="{{ route('announcement.create') }}">
                        <button class="btn-txt-img">
                            {{ __('ui.insertAd') }}
                        </button>
                    </a>
                </div>
            @endauth
            @guest
                <div class="txt-img">
                    <h1>{{ __('ui.cardAccediRegistrati1') }}</h1>
                    <h4>{{ __('ui.cardAccediRegistrati2') }}</h5>
                        <button class="btn-txt-img"><a href="/login" style="text-decoration: none; color:white;">
                                {{ __('ui.buttonAccediRegistrati') }}
                            </a></button>
                </div>
            @endguest

        </div>
        <div class="div-container">
            <div class="container-copy">
                <div class="container2">
                    <h1 class="copy">
                        {{ __('ui.copyHomepage') }}
                    </h1>
                </div>
            </div>


            <div class="containerD  containertab">
                <div class="row">
                    <div class="col-12 col-xl-6 col-l-6 col-md-12 mb-3 mb-sm-0 container-row">
                        <div class="card-body1 box">
                            <h4 class="font-img">{{ __('ui.boxSx1') }}</h4>
                            <p class="font-img">{{ __('ui.boxSx2') }}</p>
                        </div>
                    </div>

                    <div class="col-12 col-xl-6 col-l-6 col-md-12 mb-3 mb-sm-0 container-row ">

                        <div class="card-body2 box">
                            <h4 class="font-img">{{ __('ui.boxDx1') }} <br> {{ __('ui.boxDx2') }}</h4>
                        </div>

                    </div>
                </div>
            </div>
            {{--
        <div class="grid-container" id="grid-container">
            <!-- Le immagini verranno caricate qui dinamicamente -->
        </div>
--}}
            @guest
                <div id="pop" class="overlay">
                    <div class="popup">
                        <h2 class="font-img" style="margin: 20px">{{ __('ui.popup1') }}</h2>
                        <p class="font-img" style="margin: 20px">{{ __('ui.popup2') }}</p>
                        <span id="close" style="color: black; font-size:1.5rem">X</span>
                        <a href="/register"><button class="btn_popup btn-desk2">{{ __('ui.registration') }}</button></a>
                    </div>
                </div>
            @endguest

            {{-- @dd($announcements) --}}

            <div class="ContainerCard" style="@if($announcements->isEmpty()) min-height: 20vh;@endif">
                <div class="row" style="display:flex;justify-content:center;padding:0px;margin:0px;width:100%">
                    @forelse($announcements as $announcement)
                        <div id="containerColCard" class="col-12 col-xl-3 col-lg-4 col-md-6 mt-5">
                            @if ($announcement->images->isEmpty())
                                <x-card-home :imagecard="asset('img/pexels-photo-4464487.jpeg')" :user="$announcement->user->name" :date="$announcement->updated_at->format('d/m/y H:i:s')" :title="$announcement->title"
                                    :price="$announcement->price" :description="$announcement->description" :category="$announcement->category->name" :announcement="$announcement">
                                </x-card-home>
                            @else
                                <x-card-home :imagecard="$announcement->images->first()->getUrl(200, 300)" :user="$announcement->user->name" :date="$announcement->updated_at->format('d/m/y H:i:s')" :title="$announcement->title"
                                    :price="$announcement->price" :description="$announcement->description" :category="$announcement->category->name" :announcement="$announcement">
                                </x-card-home>
                            @endif

<<<<<<< HEAD
        <div class="ContainerCard">
            <div class="row" style="display:flex;justify-content:center;padding:0px;margin:0px;width:100%">
                @forelse($announcements as $announcement)
                <div id="containerColCard" class="col-12 col-xl-3 col-lg-4 col-md-6 mt-5">
                    @if ($announcement->images->isEmpty())
                    <x-card-home :imagecard="asset('img/pexels-photo-4464487.jpeg')" :user="$announcement->user->name" :date="$announcement->updated_at->format('d/m/y H:i:s')" :title="$announcement->title"
                        :price="$announcement->price" :description="$announcement->description" :category="$announcement->category->translatedName()" :announcement="$announcement">
                    </x-card-home>
                    @else
                    <x-card-home :imagecard="$announcement->images->first()->getUrl(200, 300)" :user="$announcement->user->name" :date="$announcement->updated_at->format('d/m/y H:i:s')" :title="$announcement->title"
                        :price="$announcement->price" :description="$announcement->description" :category="$announcement->category->translatedName()" :announcement="$announcement">
                    </x-card-home>
                    @endif
                </div>
                @empty
                <div class="col-12" style="display:flex;justify-content:center;align-items:center">
                    <div class="alert alert-warning py-3 shadow">
                        <p class="lead">{{ __('ui.alertNoAds') }}</p>
                    </div>
                </div>
                @endforelse
=======
                        </div>

                    @empty
                        <div id="popSuccess" class="pop" x-data="{ isOpen: true }" x-init="setTimeout(() => { isOpen = false; }, 3000)">
                            <div class="alert alert-warning traspWarning"
                                style="width: 90%; display: flex;
                                justify-content: center;align-items:center;text-align:center;font-size:20px"
                                role="alert" x-show="isOpen" class="popup">
                                {{ __('ui.alertNoAds') }}
                                <div onclick="hidePopup()" class="btnCloseM"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="20" height="20" fill="black" class="bi bi-x-lg"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z" />
                                    </svg></div>
                            </div>
                        </div>
                    @endforelse

                    @if(!$announcements->isEmpty())
                    <div class="containerPaginate">
                            {{ $announcements->links() }}
                    </div>
                    @endif

                </div>
>>>>>>> 1cad94b8bc8285757464a024ed45a63ee2d55d14
            </div>
        </div>
    </div>
    <script>
        function hidePopup() {
            document.getElementById('popSuccess').style.display = 'none';
        }

        function hidePopupDenied() {
            document.getElementById('popDenied').style.display = 'none';
        }
    </script>



</x-layout>
