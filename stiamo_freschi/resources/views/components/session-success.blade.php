@if (session('message'))
    <div class="pop">
        <div class="alert alert-success " style="width: 90%; display: flex;
    justify-content: center;" role="alert">
            {{ session('message') }}
        </div>
    </div>
@endif
