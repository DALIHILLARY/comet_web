{{-- dashboard   0
messages    1
contact     2
call logs   3
app         4
phones      5
location    6
whatsapp    7
token       8
download    9 --}}
<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
    {{-- @if($menu == '0')
        <li class="nav-item">
            <a wire:click="showDashboard()" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>Dashboard</p>
            </a>
        </li>
    @else
        <li class="nav-item">
            <a wire:click="showDashboard()" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>Dashboard</p>
            </a>
        </li>
    @endif --}}
    @if($menu == '5')
        <li class="nav-item">
            <a wire:click="showPhone()" class="nav-link active">
                <i class="nav-icon fas fa-mobile-alt"></i>
                <p>Phones</p>
            </a>
        </li>
    @else
        <li class="nav-item">
            <a wire:click="showPhone()" class="nav-link">
                <i class="nav-icon fas fa-mobile-alt"></i>
                <p>Phones</p>
            </a>
        </li>
    @endif

    @if($menu == '1')
        <li class="nav-item">
            <a wire:click="showSms()" class="nav-link active">
                <i class="nav-icon fas fa-sms"></i>
                <p>Messages</p>
            </a>
        </li>
    @else
        <li class="nav-item">
            <a wire:click="showSms()" class="nav-link">
                <i class="nav-icon fas fa-sms"></i>
                <p>Messages</p>
            </a>
        </li>
    @endif
        {{-- <li class ="nav-item">
            <a href="{{url("browser")}}" class="nav-link">
            <i class="nav-icon fas fa-car"></i>
            <p>Browser History</p>
        </a>
        </li> --}}
        {{-- <li class="nav-item has-treeview">
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
        </li> --}}
    @if($menu == '4')
        <li class="nav-item">
            <a wire:click="showApps()" class="nav-link active">
                <i class="nav-icon fab fa-app-store"></i>
                <p>Apps</p>
            </a>
        </li>
    @else
        <li class="nav-item">
            <a wire:click="showApps()" class="nav-link">
                <i class="nav-icon fab fa-app-store"></i>
                <p>Apps</p>
            </a>
        </li>
    @endif
    @if($menu == '2')
        <li class="nav-item">
            <a wire:click="showContacts()" class="nav-link active">
                <i class="nav-icon fas fa-address-book"></i>
                <p>Contacts</p>
            </a>
        </li>
    @else
        <li class="nav-item">
            <a wire:click="showContacts()" class="nav-link">
                <i class="nav-icon fas fa-address-book"></i>
                <p>Contacts</p>
            </a>
        </li>

    @endif
    @if($menu == '6')
        <li class="nav-item">
            <a wire:click="showLocation()" class="nav-link active">
                <i class="nav-icon fas fa-street-view"></i>
                <p>Location</p>
            </a>
        </li>
    @else
        <li class="nav-item">
            <a wire:click="showLocation()" class="nav-link">
                <i class="nav-icon fas fa-street-view"></i>
                <p>Location</p>
            </a>
        </li>
    @endif
    @if($menu == '3')
        <li class="nav-item">
            <a wire:click="showCallLogs()" class="nav-link active">
                <i class="nav-icon fas fa-phone"></i>
                <p>Call Logs</p>
            </a>
        </li>
    @else
        <li class="nav-item">
            <a wire:click="showCallLogs()" class="nav-link">
                <i class="nav-icon fas fa-phone"></i>
                <p>Call Logs</p>
            </a>
        </li>
    @endif
    @if($menu == '7')
        <li class="nav-item">
            <a wire:click="showWhatsapp()" class="nav-link active">
                <i class="nav-icon fab fa-whatsapp"></i>
                <p>WhatsApp</p>
            </a>
        </li>
    @else
        <li class="nav-item">
            <a wire:click="showWhatsapp()" class="nav-link">
                <i class="nav-icon fab fa-whatsapp"></i>
                <p>WhatsApp</p>
            </a>
        </li>
    @endif
    @if($menu == '8')
        <li class="nav-item">
            <a wire:click="newToken()" class="nav-link active">
                <i class="nav-icon fas fa-coins"></i>
                <p>New Token</p>
            </a>
        </li>
    @else
        <li class="nav-item">
            <a wire:click="newToken()" class="nav-link">
                <i class="nav-icon fas fa-coins"></i>
                <p>New Token</p>
            </a>
        </li>
    @endif
    @if($menu == '9')
        <li class="nav-item">
            <a wire:click="showMobileClient()" class="nav-link active">
                <i class="nav-icon fab fa-android"></i>
                <p>Mobile Client</p>
            </a>
        </li>
    @else
        <li class="nav-item">
            <a wire:click="showMobileClient()" class="nav-link">
                <i class="nav-icon fab fa-android"></i>
                <p>Mobile Client</p>
            </a>
        </li>
    @endif
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
    {{-- <li class="nav-item has-treeview">
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
            <a wire:click="showWhatsapp()" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>WhatsApp</p>
                </a>

            </li>

            </li>
        </ul>
        </li> --}}
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

    <form method="POST" action="{{ route('logout') }}" >
        @csrf
        <li class="nav-item">
            <a  class="nav-link" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                &nbsp;&nbsp;<i class="nav-icon fas fa-sign-out-alt"></i>
                <p> Logout</p>

            </a>
        </li>

    </form>
    </ul>