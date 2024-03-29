<x-layout>
    <x-navbar />
    <div class="containerPadreLogin">
        <div id="containerFormLogin" class="col-12 col-xl-4" style="min-height:300px">
            <h1 class="accediLogin">Recupera la tua password</h1>
            <form action="/forgot-password" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="exampleInputEmail1" class="form-label">Inserisci la tua email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                        style="width: 100%; height:40px;" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">Se l'indirizzo inserito è corretto riceverai una email con il link per il recupero</div>
                </div>
                <button type="submit" class="BtnAccediLogin">Continua</button>
            </form>
        </div>
    </div>

</x-layout>
