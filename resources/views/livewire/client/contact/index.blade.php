<div>

    @if (session()->has('message'))

        <div class="alert alert-success">

            {{ session('message') }}

        </div>

    @endif
    
    @if (count($contactList) == 0)
        @include('livewire.client.contact.404')   
    @else
        @include('livewire.client.contact.table')
    @endif

</div>
