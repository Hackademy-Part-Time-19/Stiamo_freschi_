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
                <h1>{{__('ui.welcomeName')}} {{ auth()->user()->name }}</h1>
                <button class="btn-txt-img"><a href="{{ route('announcement.create') }}"
                        style="text-decoration: none; color:white;">
                        {{__('ui.insertAd')}}</a>
                </button>
            </div>
        @endauth
        @guest
            <div class="txt-img">
                <h1>{{__('ui.cardAccediRegistrati1')}}</h1>
                <h4>{{__('ui.cardAccediRegistrati2')}}</h5>
                    <button class="btn-txt-img"><a href="/login" style="text-decoration: none; color:white;">
                            {{__('ui.buttonAccediRegistrati')}}
                        </a></button>
            </div>
        @endguest

    </div>
    <div class="div-container">
        <div class="container-copy">
            <div class="container2">
                <h1 class="copy">
                    {{__('ui.copyHomepage')}}
                    <div class="btn-copy">
                        <button class="btn2"></button>
                        <button class="btn3"></button>
                    </div>
            </div>
        </div>


        <div class="containerD ">
            <div class="row">
                <div class="col-12 col-xl-6 col-l-6 col-md-12 mb-3 mb-sm-0 ">

                    <div class="card-body box">
                        <h4>{{__('ui.boxSx1')}}</h4>
                        <p>{{__('ui.boxSx2')}}</p>
                    </div>
                </div>

                <div class="col-sm-6">

                    <div class="card-body2 box">
                        <h4>{{__('ui.boxDx1')}} <br> {{__('ui.boxDx2')}}</h4>
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
                    <h2 style="margin: 20px">{{__('ui.popup1')}}</h2>
                    <p style="margin: 20px">{{__('ui.popup2')}}</p>
                    <span id="close" style="color: black; font-size:1.5rem">X</span>
                    <a href="/register"><button class="btn_popup btn-desk2">{{__('ui.registration')}}</button></a>
                </div>
            </div>
        @endguest
                
        {{-- @dd($announcements) --}}

        <div class="ContainerCard">
            <div class="row" style="display:flex;justify-content:center;padding:0px;margin:0px">
                @forelse($announcements as $announcement)
                    <div id="containerColCard" class="col-12 col-xl-3 col-lg-4 col-md-6 mt-5">
                        <x-card-home :user="$announcement->user->name" :date="$announcement->updated_at->format('d/m/y H:i:s')" :title="$announcement->title" :price="$announcement->price"
                            :description="$announcement->description" :category="$announcement->category->name" :announcement="$announcement">
                        </x-card-home>
                    </div>
                @empty
                    <div class="col-12">
                        <div class="alert alert-warning py-3 shadow">
                            <p class="lead">{{__('ui.alertNoAds')}}</p>
                        </div>
                    </div> 
                @endforelse
            </div>
        </div>
    </div>




</x-layout>
