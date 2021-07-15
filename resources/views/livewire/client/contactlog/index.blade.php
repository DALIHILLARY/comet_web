<div>

    @if (session()->has('message'))

        <div class="alert alert-success">

            {{ session('message') }}

        </div>

    @endif

    @if(count($callLogList) == 0)
        @include('livewire.client.contactlog.404')
    @else
        @include('livewire.client.contactlog.table')
    @endif

</div>
