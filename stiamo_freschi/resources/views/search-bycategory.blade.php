<x-layout>
<x-navbar/>



<div class="img-container" style="display: flex; align-items:end;justify-content:center;color:white;padding-bottom:30px">
    <h1>Ecco i risultati trovati per la categoria : {{-- {{$announcements->category->name}} --}} </h1>
</div>

<div class="ContainerCard">
    <div class="row">
        @foreach ($announcements as $announcement)
        <div id="containerColCard" class="col-12 col-xl-3 col-lg-4 col-md-6 mt-5">
            <x-card-home 
            :user="$announcement->user->name" 
            :title="$announcement->title"
            :price="$announcement->price"
            :description="$announcement->description"
            :category="$announcement->category->name"
            >
            </x-card-home>
        </div>
        @endforeach

        
    
       


    </div>





















</x-layout>