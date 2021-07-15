<div>

    @if (session()->has('message'))

        <div class="alert alert-success">

            {{ session('message') }}

        </div>

    @endif
    
    @if (count($phoneList) == 0)
        @include('livewire.client.phone.404')
    @else
        @include('livewire.client.phone.table')
    @endif

</div>
