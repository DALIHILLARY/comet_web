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
            <img src="https://img.icons8.com/emoji/48/000000/rat-emoji.png" alt="RatComet Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">RatComet(RC)</span>
          </a>
        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar Menu -->
            <nav class="mt-2">
                @if($menu != '0' && count($phoneList) != 0)
                    <select style="width:100%" wire:model="phoneImei" class="form-control">
                        <option value=""><em>Click Here</em></option>
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
                @else
                    <select style="width:100%" wire:model="phoneImei" class="form-control">
                        <option value="">--No Phone--</option>
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
                @endif
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
            <div wire:loading.delay class="bg-primary text-white text-center w-100"><b>Loading ...</b></div>

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
            @if ($menu == '9')
                @include('livewire.client.mobile.index')
            @endif
        </div>
        </section>
        <!-- /.content -->
    </div>
    {{-- {{dd("fish")}} --}}
</div>