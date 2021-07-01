<div>
    {{-- <div wire:loading>
        Loading Please Wait ...
    </div> --}}
        <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-dark">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
        </ul>

    </nav>
        <!-- /.navbar -->
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{url('/')}}" class="brand-link">
            <span class="brand-text font-weight-light"><h3>RatComet(RC)</h3></span>
        </a>
        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <select style="width:100%" wire:model="phoneImei">
                    <option value="">--Select Phone--</option>
                    @foreach ( $phoneList as $device)
                        <option value="{{$device->imei}}">
                            @if ($device->readable_name != null)
                                {{$device->readable_name}}
                            @else
                                {{$device->model}}
                            @endif
                        </option>

                    @endforeach
                </select>
                @include('livewire.client.menu',['menu' => $menu])
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
            @if($menu == '0')
                @include('livewire.client.dashboard')
            @endif
            @if ($menu == '4')
                @include('livewire.client.app.index')
            @endif
            @if ($menu == '6')
                @include('livewire.client.location.index')
            @endif
            @if ($menu == '1')
                @include('livewire.client.sms.index')
            @endif
            @if ($menu == '2')
                @include('livewire.client.contact.index')
            @endif
            @if ($menu == '7')
                @include('livewire.client.whatsapp.index')
            @endif
            @if($menu == '3')
                @include('livewire.client.contactlog.index')
            @endif
            @if($menu == '5')
                @include('livewire.client.phone.index')
            @endif
            @if ($menu == '8')
                @include('livewire.client.token.index')
            @endif
        </div>
        </section>
        <!-- /.content -->
    </div>
    {{-- {{dd("fish")}} --}}
</div>