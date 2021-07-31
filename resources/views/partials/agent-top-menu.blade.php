<ul class="nav navbar-nav pull-right">
    <li class="border-line">
    <li/>
    <li class="logout-btn">
        <a href="#"   onclick="event.preventDefault(); document.getElementById('logout-form').submit();" style="padding:0px;">
            <img src="{{asset('assets/img/logout.png') }}"/>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST"
              style="display: none;">
            {{ csrf_field() }}
            <input type="hidden" name="agentLogout" value="agent">
        </form>
    <li/>
</ul>
<ul class="nav navbar-nav pull-left">
    <li class="system-name"  style="padding-left: 6px !important;">
        WMS
    <li/>
    <li class="nav-item {{ Request::is('*agent/dashboard*') ? "active" :"" }}" style="margin-left: 320px;">
        <a href="{{route('/')}}" class="nav-link">
            <img alt="" src="{{Request::is('*agent/dashboard*') ? asset('assets/img/topmenu/Dashboard (R)-8.png') : asset('assets/img/topmenu/Dashboard (G)-8.png') }}" />
            <span class="title" >Dashboard</span>
        </a>
    </li>
    <li class="nav-item {{ Request::is('*agent/manifest*') ? "active" :"" }}">
        <a href="{{route('/')}}" class="nav-link">
            <img alt="" src="{{Request::is('*agent/manifest*') ? asset('assets/img/topmenu/Manifest (R)-8.png') : asset('assets/img/topmenu/Manifest (G)-8.png') }}" />
            <span class="title">Manifest</span>
        </a>
    </li>
    <li class="nav-item {{ Request::is('*agent/report*') ? "active" :"" }}"  style="margin-right: 400px;">
        <a href="{{route('/damage')}}" class="nav-link">
            <img alt="" src="{{Request::is('*agent/report*') ? asset('assets/img/topmenu/Report (R)-8.png') : asset('assets/img/topmenu/Report (G)-8.png') }}" />
            <span class="title">Report</span>
        </a>
    </li>
</ul>