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
            {{-- @yield('content') --}}
        </div>
        </section>
        <!-- /.content -->
    </div>
</div>



