<x-layout>
    <x-navbar />

    
        
    

@if (!isset($_COOKIE['request_user_cookies']))
    <div class="ContainerModaleCookies">
        <div class="modaleCookies">
            <div class="containerTextModale">
                <h5>{{__('ui.information')}}</h5>
                <p>{{__('ui.theSite')}} <b>Presto.it</b> {{__('ui.textInformation')}}</p>
            </div>
            <div class="containerBtnCookies">
                <button class="btn btn-primary"><a style="text-decoration: none;color:white;" href="{{route('accetta-cookies')}}">{{__('ui.buttonAcceptCookies')}}</a></button>
                <button class="btn btn-danger"><a style="text-decoration: none;color:white;" href="{{route('accetta-cookies')}}">{{__('ui.buttonrefuseCookies')}}</a></button>
            </div>
        </div>
    </div>
    @endif







</x-layout>
