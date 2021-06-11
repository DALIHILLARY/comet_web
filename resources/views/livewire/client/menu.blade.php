<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
    <li class="nav-item">
    <a class="nav-link">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>Dashboard</p>
        </a>
    </li>

    <li class="nav-item">
        <a wire:click="showSms('{{$phoneImei}}')" class="nav-link">
            <i class="nav-icon fas fa-play"></i>
            <p>Messages</p>
        </a>

        </li>
        {{-- <li class ="nav-item">
            <a href="{{url("browser")}}" class="nav-link">
            <i class="nav-icon fas fa-car"></i>
            <p>Browser History</p>
        </a>
        </li> --}}
        <li class="nav-item has-treeview">
        <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
            Browser History
            <i class="right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview" style="display: none;">
            <li class="nav-item">
            <a href="./index.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Chrome</p>
            </a>
            </li>
            <li class="nav-item">
            <a href="./index2.html" class="nav-link active">
                <i class="far fa-circle nav-icon"></i>
                <p>Phoenix</p>
            </a>
            </li>
            <li class="nav-item">
            <a href="./index3.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>DuckDuckGo</p>
            </a>
            </li>
        </ul>
        </li>
    <li class="nav-item">
        <a class="nav-link">
            <i class="nav-icon fas fa-image"></i>
            <p>Apps</p>
        </a>
    </li>
    <li class="nav-item">
            <a class="nav-link">
                <i class="nav-icon fas fa-image"></i>
                <p>Contacts</p>
            </a>
    </li>

        <li class="nav-item">
            <a  class="nav-link">
                <i class="nav-icon fas fa-handshake"></i>
                <p>Call Logs</p>
            </a>
        </li>
    {{-- <li class="nav-item">
        <a href="{{url("location")}}" class="nav-link">
            <i class="nav-icon fas fa-map"></i>
            <p>Location</p>
        </a>
    </li> --}}
    {{-- <li class="nav-item">
        <a href="" class="nav-link">
            <i class="nav-icon fas fa-map"></i>
            <p>Social Apps</p>
        </a>
    </li> --}}
    <li class="nav-item has-treeview">
        <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
            Social Apps
            <i class="right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview" style="display: none;">
            <li class="nav-item">
            <a href="{{url("socials/facebook")}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>FaceBook</p>
            </a>
            </li>
            <li class="nav-item">
            <a wire:click="showWhatsapp('{{$phoneImei}}')" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>WhatsApp</p>
                </a>

            </li>
            {{-- <li class="nav-item">
            <a href="./index3.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Instagram</p>
            </a> --}}
            </li>
        </ul>
        </li>
        {{-- <li class="nav-item">
            <a href="{{url("admin/roles")}}" class="nav-link">
                <i class="nav-icon fas fa-cogs"></i>
                <p>Roles</p>
            </a>
        </li> --}}
        {{-- <li class="nav-item">
            <a href="{{url("admin/company")}}" class="nav-link">
                <i class="nav-icon fas fa-building"></i>
                <p>Company Info</p>
            </a>
        </li> --}}

    <li class="nav-item">
    <form method="POST" action="{{ route('logout') }}">
        @csrf

        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
            <br>&nbsp;&nbsp;&nbsp;&nbsp;<i class="nav-icon fas fa-sign-out-alt"></i>Logout

        </a>
    </form>
    </li>
    </ul>

