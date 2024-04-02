<x-layout>
    <x-navbar />



    <div class="img-container"
        style="display: flex; align-items:end;justify-content:center;color:white;padding-bottom:30px">
        <h1>Ecco i risultati trovati per la categoria : {{-- {{$announcements->category->name}} --}} </h1>
    </div>

    <div class="ContainerCard1">
        <div class="row">
            @foreach ($announcements as $announcement)
                <div id="containerColCard" class="col-12 col-xl-3 col-lg-4 col-md-6 mt-5">
                    <x-card-home :user="$announcement->user->name" :title="$announcement->title" :date="$announcement->updated_at->format('Y/m/d H:i:s')" :price="$announcement->price"
                        :description="$announcement->description" :category="$announcement->category->name" :announcement="$announcement">
                    </x-card-home>
                </div>
            @endforeach


        </div>



    </div>
    <div class="banner2">
        @foreach ($categories as $category)
            <div id="myButton" class="banner-cat"><a
                    href="{{ route('announcement.category', ['id' => $category->id]) }}">{{ $category->name }}</a>
            </div>
        @endforeach
    </div>




















</x-layout>
