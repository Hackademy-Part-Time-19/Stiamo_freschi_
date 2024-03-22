<x-layout>
    <x-navbar/>

    <div class="containerPadreLogin">
        <div id="containerFormLogin" class="col-12 col-xl-4">
            <h1 class="accediLogin">Registrati</h1>
            <form action="./register" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Inserisci il tuo nome completo</label>
                    <input type="text" name="name" class="form-control" style="width: 100%; height:35px;" id="name"
                        aria-describedby="emailHelp">
                    @error('name')
                        <div class="alert alert-danger"
                            style="height: 30px;display:flex;justify-content:center;align-items:center;">{{ $message }}
                        </div>
                    @enderror

                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Inserisci una email</label>
                    <input type="email" name="email" class="form-control" style="width: 100%; height:35px;" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                </div>
                @error('email')
                <div class="alert alert-danger" style="height: 30px;display:flex;justify-content:center;align-items:center;">{{ $message }}</div>
                @enderror
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Inserisci una password</label>
                    <input type="password" name="password" class="form-control" style="width: 100%; height:35px;" id="exampleInputPassword1">
                    <div id="emailHelp" class="form-text"></div>

                </div>
                @error('password')
                <div class="alert alert-danger" style="height: 30px;display:flex;justify-content:center;align-items:center;">{{ $message }}</div>
                @enderror
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Ripeti la password</label>
                    <input type="password" name="password_confirmation" class="form-control" style="width: 100%; height:35px;" id="exampleInputPassword1">
                </div>
                @error('password_confirmation')
                <div class="alert alert-danger" style="height: 30px;display:flex;justify-content:center;align-items:center;">{{ $message }}</div>
                @enderror


                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Ricordami</label>
                </div>


                <button type="submit" class="BtnRegistratiLogin">Registrati</button>

                <p class="giaRegistrato">Sei già registrato? <span style="font-weight: bold;"><a href="/login"
                            class="accedi">ACCEDI</a></span></p>
            </form>
        </div>
    </div>


</x-layout>
