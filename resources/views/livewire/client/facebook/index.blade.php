<div class="row">
    <div class="col-sm-4">
            <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar Menu -->
            <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                @foreach ($conversations as $conversation)
                    <li  wire:click="show('{{ $conversation->from }}')">
                        <div class="info-box">
                            {{-- <span class="info-box-icon bg-info"><i class="far fa-envelope"></i></span> --}}
                            <div class="info-box-content">
                            <span class="info-box-number">{{Str::limit($conversation->from,35,'...')}}</span>
                            <span class="info-box-text">{{Str::limit($conversation->message,35,'...')}}</span>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
    </div>
    <div class="col-sm-8">
        <div class="sidebar">
            @include('livewire.client.facebook.messages')
        </div>
    </div>
</div>
