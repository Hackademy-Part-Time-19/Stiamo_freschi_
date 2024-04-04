<x-layout>
    <x-navbar />
      
    <div class="containerPadreLogin">
        <div id="containerFormLogin" class="col-12 col-xl-4">
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
            <h1 class="accediLogin">{{__('ui.login')}}</h1>
            <form action="./login" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="exampleInputEmail1" class="form-label">{{__('ui.insertemail')}}</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                        style="width: 100%; height:40px;" aria-describedby="emailHelp" value="{{ old('email') }}">
                </div>

                <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label">{{__('ui.insertipsw')}}</label>
                    <input type="password" name="password" class="form-control" style="width: 100%; height:40px;"
                        id="exampleInputPassword1">
                </div>
                <div class="mb-4 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">{{__('ui.remember')}}</label>
                </div>
                @error('email')
                    <div class="alert alert-danger"
                        style="height: 30px;display:flex;justify-content:center;align-items:center;">{{ $message }}
                    </div>
                @enderror

                <button type="submit" class="BtnAccediLogin">{{__('ui.login')}}</button>
                <h6 class="oppureLogin">{{__('ui.or')}}</h6>
                <button type="button" class="BtnRegistratiLogin"><a href="{{ route('register') }}"
                        style="color: white">{{__('ui.register')}}</a></button>
                <a href="/forgot-password">
                    <p class="pswDimenticata" style="color: black">{{__('ui.requestPsw')}}</p>
                </a>
            </form>
        </div>
    </div>

</x-layout>
