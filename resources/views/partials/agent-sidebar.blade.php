@if (!Request::is('*dashboard*'))
<ul class="page-sidebar-menu  page-header-fixed page-sidebar-menu-hover-submenu " data-keep-expanded="false"
    data-auto-scroll="true" data-slide-speed="200">
    @if (Request::is('*agent/report*'))
        <li class="nav-item  {{ Request::is('*agent/report/damage*') ? "active" :"" }}">
            <a href="{{route('/')}}" class="nav-link">
                <img alt="" src="{{Request::is('*agent/report/damage*') ? asset('assets/img/sidebar/Damage (B)-8.png') : asset('assets/img/sidebar/Damage (G)-8.png') }}"/>
                <span class="title">Damage</span>
            </a>
        </li>
        <li class="nav-item  {{ Request::is('*agent/report/shortage*') ? "active" :"" }}">
            <a href="{{route('/')}}" class="nav-link">
                <img alt="" src="{{Request::is('*agent/report/shortage*') ? asset('assets/img/sidebar/Storage (B)-8.png') : asset('assets/img/sidebar/Storage (G)-8.png') }}"/>
                <span class="title">Shortage</span>
            </a>
        </li>
        <li class="nav-item  {{ Request::is('*agent/report/addition*') ? "active" :"" }}">
            <a href="{{route('/')}}" class="nav-link">
                <img alt="" src="{{Request::is('*agent/report/addition*') ? asset('assets/img/sidebar/Addition (B)-8.png') : asset('assets/img/sidebar/Addition (G)-8.png') }}"/>
                <span class="title">Addition</span>
            </a>
        </li>
        <li class="nav-item  {{ Request::is('*agent/report/vessel_status*') ? "active" :"" }}">
            <a href="{{route('/')}}" class="nav-link">
                <img alt="" src="{{Request::is('*agent/report/vessel_status*') ? asset('assets/img/sidebar/Vessel Status (B)-8.png') : asset('assets/img/sidebar/Vessel Status (G)-8.png') }}"/>
                <span class="title">Vessel Status</span>
            </a>
        </li>
        <li class="nav-item  {{ Request::is('*agent/report/delivery_progress*') ? "active" :"" }}">
            <a href="{{route('/')}}" class="nav-link">
                <img alt="" src="{{Request::is('*agent/report/delivery_progress*') ? asset('assets/img/sidebar/Delivery Progress (B)-8.png') : asset('assets/img/sidebar/Delivery Progress (G)-8.png') }}"/>
                <span class="title">Delivery Progress</span>
            </a>
        </li>
    @endif
    @if (Request::is('*sales*'))
        <li class="nav-item  {{ Request::is('*sales/manifest*') ? "active" :"" }}">
            <a href="{{route('/ class="nav-link">
                <img alt="" src="{{Request::is('*sales/manifest*') ? asset('assets/img/sidebar/Manifest (B)-8.png') : asset('assets/img/sidebar/Manifest (G)-8.png') }}"/>
                <span class="title">Manifest</span>
            </a>
        </li>
        <li class="nav-item  {{ Request::is('*sales/jobs*') ? "active" :"" }}">
            <a href="{{route('/ class="nav-link">
                <img alt="" src="{{Request::is('*sales/jobs*') ? asset('assets/img/sidebar/Jobs (B)-8.png') : asset('assets/img/sidebar/Jobs (G)-8.png') }}"/>
                <span class="title">Jobs</span>
            </a>
        </li>
        <li class="nav-item  {{ Request::is('*sales/sale*') ? "active" :"" }}">
            <a href="{{route('/ class="nav-link">
                <img alt="" src="{{Request::is('*sales/sale*') ? asset('assets/img/sidebar/Sales (B)-8.png') : asset('assets/img/sidebar/Sales (G)-8.png') }}"/>
                <span class="title">Sales</span>
            </a>
        </li>
        <li class="nav-item  {{ Request::is('*sales/quotation*') ? "active" :"" }}">
            <a href="{{route('/ class="nav-link">
                <img alt="" src="{{Request::is('*sales/quotation*') ? asset('assets/img/sidebar/Quotation (B)-8.png') : asset('assets/img/sidebar/Quotation (G)-8.png') }}"/>
                <span class="title">Quotation</span>
            </a>
        </li>
    @endif
    @if (Request::is('*inventory*'))
        <li class="nav-item  {{ Request::is('*inventory/warehouse*') ? "active" :"" }}">
            <a href="{{route('/ class="nav-link">
                <img alt="" src="{{Request::is('*inventory/warehouse*') ? asset('assets/img/sidebar/Warehouse (B)-8.png') : asset('assets/img/sidebar/Warehouse (G)-8.png') }}"/>
                <span class="title">Warehouse</span>
            </a>
        </li>
        <li class="nav-item  {{ Request::is('*inventory/expiry*') ? "active" :"" }}">
            <a href="{{route('/ class="nav-link">
                <img alt="" src="{{Request::is('*inventory/expiry*') ? asset('assets/img/sidebar/Expiry (B)-8.png') : asset('assets/img/sidebar/Expiry (G)-8.png') }}"/>
                <span class="title">Expiry</span>
            </a>
        </li>
        <li class="nav-item  {{ Request::is('*inventory/container*') ? "active" :"" }}">
            <a href="{{route('/ class="nav-link">
                <img alt="" src="{{Request::is('*inventory/container*') ? asset('assets/img/sidebar/Location (B)-8.png') : asset('assets/img/sidebar/Location (G)-8.png') }}"/>
                <span class="title">Location</span>
            </a>
        </li>
        <li class="nav-item  {{ Request::is('*inventory/location*') ? "active" :"" }}">
            <a href="{{route('/ class="nav-link">
                <img alt="" src="{{Request::is('*inventory/location*') ? asset('assets/img/sidebar/ContainerStock(B)-8.png') : asset('assets/img/sidebar/ContainerStock(G)-8.png') }}"/>
                <span class="title">Container<br/>Stock</span>
            </a>
        </li>
    @endif
    @if (Request::is('*billing*'))
        <li class="nav-item  {{ Request::is('*billing/invoice*') ? "active" :"" }}">
            <a href="{{route('/ class="nav-link">
                <img alt="" src="{{Request::is('*billing/invoice*') ? asset('assets/img/sidebar/Customer Invoice (B)-8.png') : asset('assets/img/sidebar/Customer Invoice (G)-8.png') }}"/>
                <span class="title">Customer<br/>Invoice</span>
            </a>
        </li>
        <li class="nav-item  {{ Request::is('*billing/DO*') ? "active" :"" }}">
            <a href="{{route('/ class="nav-link">
                <img alt="" src="{{Request::is('*billing/DO*') ? asset('assets/img/sidebar/D.O. (B)-8.png') : asset('assets/img/sidebar/D.O. (G)-8.png') }}"/>
                <span class="title">D.O.</span>
            </a>
        </li>
        <li class="nav-item  {{ Request::is('*billing/payment*') ? "active" :"" }}">
            <a href="{{route('/ class="nav-link">
                <img alt="" src="{{Request::is('*billing/payment*') ? asset('assets/img/sidebar/Payment (B)-8.png') : asset('assets/img/sidebar/Payment (G)-8.png') }}"/>
                <span class="title">Payment</span>
            </a>
        </li>
        <li class="nav-item  {{ Request::is('*billing/CN*') ? "active" :"" }}">
            <a href="{{route('/ class="nav-link">
                <img alt="" src="{{Request::is('*billing/CN*') ? asset('assets/img/sidebar/C.N. (B)-8.png') : asset('assets/img/sidebar/C.N. (G)-8.png') }}"/>
                <span class="title">C.N.</span>
            </a>
        </li>
        <li class="nav-item  {{ Request::is('*billing/DN*') ? "active" :"" }}">
            <a href="{{route('/ class="nav-link">
                <img alt="" src="{{Request::is('*billing/DN*') ? asset('assets/img/sidebar/D.N. (B)-8.png') : asset('assets/img/sidebar/D.N. (G)-8.png') }}"/>
                <span class="title">D.N.</span>
            </a>
        </li>
    @endif
    @if (Request::is('*preset*'))
        <li class="nav-item  {{ Request::is('*preset/charge*') ? "active" :"" }}">
            <a href="{{route('/ class="nav-link">
                <img alt="" src="{{Request::is('*preset/charge*') ? asset('assets/img/sidebar/Container Charges (B)-8.png') : asset('assets/img/sidebar/Container Charges (G)-8.png') }}"/>
                <span class="title">Container<br/>Charges</span>
            </a>
        </li>
        <li class="nav-item  {{ Request::is('*preset/expiry*') ? "active" :"" }}">
            <a href="{{route('/ class="nav-link">
                <img alt="" src="{{Request::is('*preset/expiry*') ? asset('assets/img/sidebar/Expiry (B)-8.png') : asset('assets/img/sidebar/Expiry (G)-8.png') }}"/>
                <span class="title">Expiry</span>
            </a>
        </li>
        <li class="nav-item  {{ Request::is('*preset/running*') ? "active" :"" }}">
            <a href="{{route('/ class="nav-link">
                <img alt="" src="{{Request::is('*preset/running*') ? asset('assets/img/sidebar/Document Running No. (B)-8.png') : asset('assets/img/sidebar/Document Running No. (G)-8.png') }}"/>
                <span class="title">Document<br/>Running No.</span>
            </a>
        </li>
    @endif
</ul>
@endif