<ul class="nav navbar-nav pull-right">
    <li class="nav-item">
        <a href="#" class="nav-link">
            <span class="title" >DASHBOARD</span>
        </a>
    </li>
    <li class="nav-item {{ Request::is('*people*') ? 'active' :'' }}" >
        <a href="{{ route('wholeSaler.index') }}" class="nav-link">
            <span class="title">PEOPLE</span>
        </a>
    </li>
    <li class="nav-item {{ Request::is('*booking*') ? 'active' :'' }}">
        <a href="{{ route('booking.index') }}" class="nav-link">
            <span class="title">BOOKING</span>
        </a>
    </li>
    <li class="nav-item {{ Request::is('*hotel*') ? 'active' :'' }}">
        <a href="{{ route('hotel.index') }}" class="nav-link">
            <span class="title">HOTEL</span>
        </a>
    </li>
    <li class="nav-item {{ Request::is('*billing*') ? 'active' :'' }}">
        <a href="$" class="nav-link">
            <span class="title">BILLING</span>
        </a>
    </li>
    <li class="nav-item {{ Request::is('*setting*') ? 'active' :'' }}">
        <a href="$" class="nav-link">
            <span class="title">SETTING</span>
        </a>
    </li>
    <li class="nav-item {{ Request::is('*report*') ? 'active' :'' }}">
        <a href="$" class="nav-link">
            <span class="title">Report</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="" href="#">
            <span class="title"><em>Hello, User0000</em></span>
            <img src="{{ asset('images/user.png') }}" style="width: 35px; margin-top: -10px;">
        </a>
    </li>
</ul>
