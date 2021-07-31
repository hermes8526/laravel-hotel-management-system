@if (Request::is('*people*'))
<ul class="page-sidebar-menu  page-header-fixed page-sidebar-menu-hover-submenu " data-keep-expanded="false"
    data-auto-scroll="true" data-slide-speed="200">
        <li class="nav-item  {{ Request::is('*people/wholeSaler*') ? 'active' : '' }}">
            <a href="{{ route('wholeSaler.index') }}" class="nav-link">
                <img alt="" src="{{Request::is('*people/wholeSaler*') ? asset('assets/img/icon/wholesaler_active.png') : asset('assets/img/icon/wholesaler.png') }}"/>
                <span class="title">Whalesaler</span>
            </a>
        </li>
        <li class="nav-item  {{ Request::is('*people/agent*') ? 'active' : '' }}">
            <a href="{{ route('agent.index') }}" class="nav-link">
                <img alt="" src="{{Request::is('*people/agent*') ? asset('assets/img/icon/agent_active.png') : asset('assets/img/icon/agent.png') }}"/>
                <span class="title">Agent</span>
            </a>
        </li>
        <li class="nav-item  {{ Request::is('*people/staff*') ? 'active' : '' }}">
            <a href="{{ route('staff.index') }}" class="nav-link">
                <img alt="" src="{{Request::is('*people/staff*') ? asset('assets/img/icon/staff_active.png') : asset('assets/img/icon/staff.png') }}"/>
                <span class="title">Staff</span>
            </a>
        </li>
        <li class="nav-item  {{ Request::is('*people/customer*') ? 'active' : '' }}">
            <a href="{{ route('customer.index') }}" class="nav-link">
                <img alt="" src="{{Request::is('*people/customer*') ? asset('assets/img/icon/customer_active.png') : asset('assets/img/icon/customer.png') }}"/>
                <span class="title">Customer</span>
            </a>
        </li>
</ul>
@endif

@if (Request::is('*hotel*'))
<ul class="page-sidebar-menu  page-header-fixed page-sidebar-menu-hover-submenu " data-keep-expanded="false"
    data-auto-scroll="true" data-slide-speed="200">
    <li class="nav-item  {{ Request::is('*hotel/hotel*') ? 'active' : '' }}">
        <a href="{{ route('hotel.index') }}" class="nav-link">
            <img alt="" src="{{Request::is('*hotel/hotel*') ? asset('assets/img/icon/hotels_active.png') : asset('assets/img/icon/hotels.png') }}"/>
            <span class="title">Hotels</span>
        </a>
    </li>
    <li class="nav-item  {{ Request::is('*hotel/facility*') ? 'active' : '' }}">
        <a href="{{ route('facility.index') }}" class="nav-link">
            <img alt="" src="{{Request::is('*hotel/facility*') ? asset('assets/img/icon/facilities_active.png') : asset('assets/img/icon/facilities.png') }}"/>
            <span class="title">Facilities</span>
        </a>
    </li>
    <li class="nav-item  {{ Request::is('*hotel/roomType*') ? 'active' : '' }}">
        <a href="{{ route('roomType.index') }}" class="nav-link">
            <img alt="" src="{{Request::is('*hotel/roomType*') ? asset('assets/img/icon/room_type_active.png') : asset('assets/img/icon/room_type.png') }}"/>
            <span class="title">Room Type</span>
        </a>
    </li>
</ul>
@endif