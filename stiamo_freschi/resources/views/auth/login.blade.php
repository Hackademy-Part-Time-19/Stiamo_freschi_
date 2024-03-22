<x-layout>
    <x-navbar/>
    <div class="containerPadreLogin" >
        <div id="containerFormLogin" class="col-12 col-xl-4">
            <h1 class="accediLogin">Accedi</h1>
            <form action="./login" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="exampleInputEmail1" class="form-label">Inserisci la tua email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" style="width: 100%; height:40px;" aria-describedby="emailHelp">
                </div>
               
                <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label">Inserisci la tua password</label>
                    <input type="password" name="password" class="form-control" style="width: 100%; height:40px;" id="exampleInputPassword1">
                </div>
                <div class="mb-4 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Ricordami</label>
                </div>
                @error('email')
                <div class="alert alert-danger" style="height: 30px;display:flex;justify-content:center;align-items:center;">{{ $message }}</div>
                @enderror

                <button type="submit" class="BtnAccediLogin">Accedi</button>
                <h6 class="oppureLogin">OPPURE</h6>
                <button type="button" class="BtnRegistratiLogin"><a href="{{route('register')}}" style="color: white">Registrati</a></button>

                <a href=""><p class="pswDimenticata" style="color: black">Hai dimenticato la password?</p></a>
            </form>
        </div>
    </div>

</x-layout>
