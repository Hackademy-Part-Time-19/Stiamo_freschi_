<x-layout>
    <x-navbar />
    <div class="DivModProf">
        <x-session-success />
        {{-- INIZIO FORM --}}
        <div class="containerBtnEditProfile">
            <a href="{{ route('profile') }}"><button class="btn" type="submit">
                    Torna al profilo
                </button></a>
        </div>
        <form class="divPadreMod  box" action="{{ route('profile.update') }}" method="POST">
            @csrf
            @method('PUT')
            <div class="InfoModProf ">
                <div class="ModFoto " style="flex: 1">
                    <h4>la tua foto</h4>
                </div>
                <div class="ModFoto1" style="flex: 3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor"
                        class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                        <path fill-rule="evenodd"
                            d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                    </svg>
                    <div style="margin-left: 50px">
                        <button class="btn">
                            scegli la foto
                        </button>
                    </div>
                </div>

            </div>

            <div style="flex:3;display: flex">
                <div class="ModFoto " style="flex: 1">
                    <h5>Nome utente</h5>
                </div>
                <div class="ModForm1 " style="flex: 3">
                    <input type="textarea" name="name" class="FormProf" id=""
                        placeholder="{{ Auth::user()->name }}">
                </div>

            </div>
            @error('name')
                <div class="alert alert-danger" style="height: 40px;display:flex;justify-content:center;align-items:center">
                    {{ $message }}</div>
            @enderror
            <div style="flex:3;display: flex">
                <div class="ModFoto " style="flex: 1">
                    <h5>Email</h5>
                </div>
                <div class="ModForm1 " style="flex: 3">
                    <input type="textarea" name="email" class="FormProf" id=""
                        placeholder="{{ Auth::user()->email }}">
                </div>

            </div>
            @error('email')
                <div class="alert alert-danger" style="height: 40px;display:flex;justify-content:center;align-items:center">
                    {{ $message }}</div>
            @enderror
            <div style="flex:3;display: flex">
                <div class="ModFoto " style="flex: 1">
                    <h5>Password</h5>
                </div>
                <div class="ModForm1 "style="flex:3">
                    <button class="btn" style="height: 40px !important; width: 400px; !important">Modifica
                        Password</button>
                </div>

            </div>
            <div style="display:flex; justify-content: end;margin-right:30px;margin-bottom:20px;gap:20px">
                <button class="btn" type="submit" style="height: 50px !important; width: 200px;font-size:18px">
                    Salva modifiche
                </button>
            </div>
        </form>

    </div>

    </div>
</x-layout>
