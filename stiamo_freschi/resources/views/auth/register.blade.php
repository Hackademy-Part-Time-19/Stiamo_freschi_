<x-layout>
    <x-navbar/>

    <div class="containerPadreLogin">
        <div id="containerFormLogin" class="col-12 col-xl-4">
            <h1 class="accediLogin">{{__('ui.registerR')}}</h1>
            <form action="./register" method="POST">
                @csrf
                <div class="mb-3">
                    <input type="text" name="name" class="form-control" style="width: 100%; height:35px;" id="name"
                        aria-describedby="emailHelp">
                    @error('name')
                        <div class="alert alert-danger"
                            style="height: 30px;display:flex;justify-content:center;align-items:center;">{{ $message }}
                        </div>
                    @enderror

                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">{{__('ui.insertemailR')}}</label>
                    <input type="email" name="email" class="form-control" style="width: 100%; height:35px;" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                </div>
                @error('email')
                <div class="alert alert-danger" style="height: 30px;display:flex;justify-content:center;align-items:center;">{{ $message }}</div>
                @enderror
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">{{__('ui.newPswR')}}</label>
                    <input type="password" name="password" class="form-control" style="width: 100%; height:35px;" id="exampleInputPassword1">
                    <div id="emailHelp" class="form-text"></div>

                </div>
                @error('password')
                <div class="alert alert-danger" style="height: 30px;display:flex;justify-content:center;align-items:center;">{{ $message }}</div>
                @enderror
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">{{__('ui.retypePswR')}}</label>
                    <input type="password" name="password_confirmation" class="form-control" style="width: 100%; height:35px;" id="exampleInputPassword1">
                </div>
                @error('password_confirmation')
                <div class="alert alert-danger" style="height: 30px;display:flex;justify-content:center;align-items:center;">{{ $message }}</div>
                @enderror


                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">{{__('ui.rememberR')}}</label>
                </div>


                <button type="submit" class="BtnRegistratiLogin">{{__('ui.registerR')}}</button>

                <p class="giaRegistrato">{{__('ui.requestRegister')}} <span style="font-weight: bold;"><a href="/login"
                            class="accedi">{{__('ui.loginR')}}</a></span></p>
            </form>
        </div>
    </div>


</x-layout>
