<div>
       <!-- Sidebar -->
       <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <select style="width:100%" wire:model="phoneImei">
                <option value="">--Select Phone--</option>
                @foreach ( $phones as $device)
                    <option value="{{$device->imei}}">
                        @if ($device->readable_name != null)
                            {{$device->readable_name}}
                        @else
                            {{$device->model}}
                        @endif
                    </option>

                @endforeach
            </select>
            @include('livewire.client.menu')
        </nav>
        <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Main content -->
            <section class="content">
            <div class="container-fluid">
                <div class="row">
                    {{-- {{dd($conversations)}} --}}
                    <div class="col-sm-4">
                            <!-- Sidebar -->
                        <div class="sidebar">
                            <!-- Sidebar Menu -->
                            <nav class="mt-2">
                            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                                @foreach ($conversations as $conversation)
                                    <li  wire:click="show('{{ $conversation->contact }}')">
                                        <div class="info-box">
                                            {{-- <span class="info-box-icon bg-info"><i class="far fa-envelope"></i></span> --}}
                                            <div class="info-box-content">
                                            <span class="info-box-number">{{Str::limit($conversation->contact,35,'...')}}</span>
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
                            @include('livewire.client.whatsapp.messages')
                        </div>
                    </div>
                </div>
            </div>
            </section>
            <!-- /.content -->
        </div>
</div>

