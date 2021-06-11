<div>
    @if (session()->has('message'))

        <div class="alert alert-success">

            {{ session('message') }}

        </div>

    @endif
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
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
        <div class="container-fluid">
            @include('livewire.client.sms.table')
         </div>
        </section>
    <!-- /.content -->
    </div>
</div>
