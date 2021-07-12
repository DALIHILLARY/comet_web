<div>

    @if (session()->has('message'))

        <div class="alert alert-success">

            {{ session('message') }}

        </div>

    @endif

    <div class="card-body">
        @include('livewire.client.token.create')
    </div>

</div>
