<x-layout>
    <x-navbar />

    
        
    

@if (!isset($_COOKIE['request_user_cookies']))
    <div class="ContainerModaleCookies">
        <div class="modaleCookies">
            <div class="containerTextModale">
                <h5>Informativa</h5>
                <p>Il sito <b>Presto.it</b> utilizza cookies di profilazione e cookies di terza parte, utili per migliorare la
                    fruibilità del sito da parte del navigatore. Se vuoi conoscere i dettagli sull’utilizzo dei cookie e
                    sapere come disabilitarli, consulta la nostra informativa estesa sull’uso dei cookies. Se presti il
                    tuo consenso, sarà valido solo su questo dominio. Il rifiuto del consenso può rendere non
                    disponibili le relative funzioni.
                    Usa il pulsante “Accetta” per acconsentire. Usa il pulsante “Rifiuta” per continuare senza
                    accettare.</p>
            </div>
            <div class="containerBtnCookies">
                <button class="btn btn-primary"><a style="text-decoration: none;color:white;" href="{{route('accetta-cookies')}}">Accetta</a></button>
                <button class="btn btn-danger"><a style="text-decoration: none;color:white;" href="{{route('accetta-cookies')}}">Rifiuta</a></button>
            </div>
        </div>
    </div>
    @endif







</x-layout>
