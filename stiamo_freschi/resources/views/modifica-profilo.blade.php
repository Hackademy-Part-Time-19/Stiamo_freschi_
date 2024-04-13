<x-layout>
    <x-navbar />
    <div class="DivModProf" style="height: 100vh;">
        <div class="divPadreMod  box">
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
                        <button>
                            scegli la foto
                        </button>
                    </div>
                </div>

            </div>
            <div style="flex:3;display: flex">
                <div class="ModFoto " style="flex: 1">
                    <h5>informazioni su di te</h5>
                </div>
                <div class="ModForm1 " style="flex: 3">
                    <input type="textarea" name="" class="FormProf" id=""
                        placeholder="{{ __('ui.InsertDescriptionAnnouncements') }}">
                </div>

            </div>
        </div>
        <div class="divPadreMod">
            <div class="InfoModProf box">
                <div class="ModFoto borderProf" style="flex: 1">
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
                        <button>
                            scegli la foto
                        </button>
                    </div>
                </div>
                <div></div>
            </div>
        </div>
    </div>
</x-layout>
