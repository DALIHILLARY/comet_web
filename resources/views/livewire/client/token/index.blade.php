<div>

    @if (session()->has('message'))

        <div class="alert alert-success">

            {{ session('message') }}

        </div>

    @endif

    <div class="card-body">
        <button type="button" class="btn btn-block btn-outline-primary btn-flat">New Token</button> 
    </div>
    @include('livewire.client.token.create')

</div>
