@extends('layouts.app')

@section('content')

<div class="cofrom-booking-banner">
        <div class="container">
            <h2>Booking Summary</h2>
        </div>
    </div>


    <div class="cofrom-booking">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="cofrom-booking-left">
                        <div class="hadding-booklingfrom">Room 1: Standard Superior</div>
                        <section class="signup-step-container">
                            <div class="row d-flex justify-content-center">
                                <div class="wizard">
                                    <div class="wizard-inner">
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li role="presentation" class="active">
                                                <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab"
                                                    aria-expanded="true">Micheal Bight</a>
                                            </li>
                                            <li role="presentation" class="disabled"><a href="#step2" data-toggle="tab"
                                                    aria-controls="step2" role="tab" aria-expanded="false">Guest 2</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <form role="form" action="./index.html"
                                        class="login-box">
                                        <div class="tab-content" id="main_form">
                                            <div class="tab-pane active" role="tabpanel" id="step1">
                                                <div class="fill-name">
                                                    <label>Full Name </label>
                                                    <input class="form-control" type="text" name="name" placeholder="">
                                                </div>
                                                <div class="form-group">
                                                    <label>Phone Number</label>
                                                    <div class="nbr-cont-code">
                                                        <select name="country" class="phon-dropdown" id="country">
                                                            <option value="NG" selected="selected">+91</option>
                                                            <option value="NU">+91</option>
                                                            <option value="NF">+92</option>
                                                            <option value="KP">+93</option>
                                                            <option value="MP">+94</option>
                                                            <option value="NO">+95</option>
                                                        </select>
                                                    </div>
                                                    <input class="phone-nbr-input" type="text" name="name"
                                                        placeholder="+91 123456789">
                                                </div>
                                                <div class="Email">
                                                    <label>Email Address *</label>
                                                    <input class="form-control" type="email" name="name"
                                                        placeholder="demo@gmail.com">
                                                </div>
                                                <div class="special-requests">
                                                    <a id="display_123 show-hid"
                                                        href="javascript:toggle('123');">Special requests<img
                                                            src="{{ asset('images/Asset%203.png') }}"></a>
                                                    <div id="toggle_123" style="display: none">
                                                        <div class="extra-bed"><input type="checkbox" name="ch2"
                                                                id="ch2" value="2"> Extra bed</div>
                                                        <div class="other-remarks-box">
                                                            <div class="other-remarks">Other remarks</div>
                                                            <textarea placeholder="Wirte down remarks"
                                                                required></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <ul class="list-inline pull-right">
                                                    <li><button type="button" class="default-btn next-step">Continue to
                                                            next step</button></li>
                                                </ul>
                                            </div>
                                            <div class="tab-pane" role="tabpanel" id="step2">
                                                <div class="fill-name">
                                                    <label>Full Name </label>
                                                    <input class="form-control" type="text" name="name" placeholder="">
                                                </div>
                                                <div class="form-group">
                                                    <label>Phone Number</label>
                                                    <div class="nbr-cont-code">
                                                        <select name="country" class="phon-dropdown" id="country">
                                                            <option value="NG" selected="selected">+91</option>
                                                            <option value="NU">+91</option>
                                                            <option value="NF">+92</option>
                                                            <option value="KP">+93</option>
                                                            <option value="MP">+94</option>
                                                            <option value="NO">+95</option>
                                                        </select>
                                                    </div>
                                                    <input class="phone-nbr-input" type="text" name="name"
                                                        placeholder="+91 123456789">
                                                </div>
                                                <div class="Email">
                                                    <label>Email Address *</label>
                                                    <input class="form-control" type="email" name="name"
                                                        placeholder="demo@gmail.com">
                                                </div>
                                                <a id="display_2234 show-hid" href="javascript:toggle('2234');">Special
                                                    requests <img src="{{ asset('images/Asset%203.png') }}" class="drop-img"></a>
                                                <div id="toggle_2234" style="display: none">
                                                    <div class="extra-bed"><input type="checkbox" name="ch2" id="ch2"
                                                            value="2"> Extra bed</div>
                                                    <div class="other-remarks-box">
                                                        <div class="other-remarks">Other remarks</div>
                                                        <textarea placeholder="Wirte down remarks" required></textarea>
                                                    </div>
                                                </div>
                                                <ul class="list-inline pull-right">
                                                    <li><button type="button"
                                                            class="default-btn prev-step">Back</button></li>
                                                    <li><button type="button"
                                                            class="default-btn next-step skip-btn">Skip</button></li>
                                                    <li><button type="button"
                                                            class="default-btn next-step">Continue</button></li>
                                                </ul>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </section>
                    </div>

                    <div class="cofrom-booking-left">
                        <div class="hadding-booklingfrom">Room 2: Premier Room</div>
                        <section class="signup-step-container">
                            <div class="row d-flex justify-content-center">
                                <div class="wizard">
                                    <div class="wizard-inner">
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li role="presentation" class="active"><a href="#step3" data-toggle="tab"
                                                    aria-controls="step3" role="tab" aria-expanded="true">Natalie Smith
                                                </a></li>
                                            <li role="presentation" class="disabled"><a href="#step4" data-toggle="tab"
                                                    aria-controls="step4" role="tab" aria-expanded="false">David
                                                    Smith</a></li>
                                            <li role="presentation" class="disabled"><a href="#step5" data-toggle="tab"
                                                    aria-controls="step5" role="tab" aria-expanded="false">Gabriel
                                                    Smith</a></li>
                                        </ul>
                                    </div>
                                    <form role="form" action="./index.html"
                                        class="login-box">
                                        <div class="tab-content" id="main_form">
                                            <div class="tab-pane active" role="tabpanel" id="step3">
                                                <div class="fill-name">
                                                    <label>Full Name </label>
                                                    <input class="form-control" type="text" name="name" placeholder="">
                                                </div>
                                                <div class="form-group">
                                                    <label>Phone Number</label>
                                                    <div class="nbr-cont-code">
                                                        <select name="country" class="phon-dropdown" id="country">
                                                            <option value="NG" selected="selected">+91</option>
                                                            <option value="NU">+91</option>
                                                            <option value="NF">+92</option>
                                                            <option value="KP">+93</option>
                                                            <option value="MP">+94</option>
                                                            <option value="NO">+95</option>
                                                        </select>
                                                    </div>
                                                    <input class="phone-nbr-input" type="text" name="name"
                                                        placeholder="+91 123456789">
                                                </div>
                                                <div class="Email">
                                                    <label>Email Address *</label>
                                                    <input class="form-control" type="email" name="name"
                                                        placeholder="demo@gmail.com">
                                                </div>
                                                <div class="special-requests">
                                                    <a id="display_12344" href="javascript:toggle('12344');">Special
                                                        requests<img src="{{ asset('images/Asset%203.png') }}"></a>
                                                    <div id="toggle_12344" style="display: none">
                                                        <div class="extra-bed"><input type="checkbox" name="ch2"
                                                                id="ch2" value="2"> Extra bed</div>
                                                        <div class="other-remarks-box">
                                                            <div class="other-remarks">Other remarks</div>
                                                            <textarea placeholder="Wirte down remarks"
                                                                required></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <ul class="list-inline pull-right">
                                                    <li><button type="button" class="default-btn next-step">Continue to
                                                            next step</button></li>
                                                </ul>
                                            </div>
                                            <div class="tab-pane" role="tabpanel" id="step4">
                                                <div class="fill-name">
                                                    <label>Full Name </label>
                                                    <input class="form-control" type="text" name="name" placeholder="">
                                                </div>
                                                <div class="form-group">
                                                    <label>Phone Number</label>
                                                    <div class="nbr-cont-code">
                                                        <select name="country" class="phon-dropdown" id="country">
                                                            <option value="NG" selected="selected">+91</option>
                                                            <option value="NU">+91</option>
                                                            <option value="NF">+92</option>
                                                            <option value="KP">+93</option>
                                                            <option value="MP">+94</option>
                                                            <option value="NO">+95</option>
                                                        </select>
                                                    </div>
                                                    <input class="phone-nbr-input" type="text" name="name"
                                                        placeholder="+91 123456789">
                                                </div>
                                                <div class="Email">
                                                    <label>Email Address *</label>
                                                    <input class="form-control" type="email" name="name"
                                                        placeholder="demo@gmail.com">
                                                </div>
                                                <div class="special-requests">
                                                    <a id="display_12355" href="javascript:toggle('12355');">Special
                                                        requests<img src="{{ asset('images/Asset%203.png') }}"></a>
                                                    <div id="toggle_12355" style="display: none">
                                                        <div class="extra-bed"><input type="checkbox" name="ch2"
                                                                id="ch2" value="2"> Extra bed</div>
                                                        <div class="other-remarks-box">
                                                            <div class="other-remarks">Other remarks</div>
                                                            <textarea placeholder="Wirte down remarks"
                                                                required></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <ul class="list-inline pull-right">
                                                    <li><button type="button"
                                                            class="default-btn prev-step">Back</button></li>
                                                    <li><button type="button"
                                                            class="default-btn next-step skip-btn">Skip</button></li>
                                                    <li><button type="button"
                                                            class="default-btn next-step">Continue</button></li>
                                                </ul>
                                            </div>
                                            <div class="tab-pane" role="tabpanel" id="step5">
                                                <div class="fill-name">
                                                    <label>Full Name </label>
                                                    <input class="form-control" type="text" name="name" placeholder="">
                                                </div>
                                                <div class="form-group">
                                                    <label>Phone Number</label>
                                                    <div class="nbr-cont-code">
                                                        <select name="country" class="phon-dropdown" id="country">
                                                            <option value="NG" selected="selected">+91</option>
                                                            <option value="NU">+91</option>
                                                            <option value="NF">+92</option>
                                                            <option value="KP">+93</option>
                                                            <option value="MP">+94</option>
                                                            <option value="NO">+95</option>
                                                        </select>
                                                    </div>
                                                    <input class="phone-nbr-input" type="text" name="name"
                                                        placeholder="+91 123456789">
                                                </div>
                                                <div class="Email">
                                                    <label>Email Address *</label>
                                                    <input class="form-control" type="email" name="name"
                                                        placeholder="demo@gmail.com">
                                                </div>
                                                <div class="special-requests">
                                                    <a id="display_12366" href="javascript:toggle('12366');">Special
                                                        requests<img src="{{ asset('images/Asset%203.png') }}"></a>
                                                    <div id="toggle_12366" style="display: none">
                                                        <div class="extra-bed"><input type="checkbox" name="ch2"
                                                                id="ch2" value="2"> Extra bed</div>
                                                        <div class="other-remarks-box">
                                                            <div class="other-remarks">Other remarks</div>
                                                            <textarea placeholder="Wirte down remarks"
                                                                required></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <ul class="list-inline pull-right">
                                                    <li><button type="button"
                                                            class="default-btn prev-step">Back</button></li>
                                                    <li><button type="button"
                                                            class="default-btn next-step skip-btn">Skip</button></li>
                                                    <li><button type="button"
                                                            class="default-btn next-step">Continue</button></li>
                                                </ul>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </section>
                    </div>

                    <div class="cofrom-booking-left">
                        <div class="hadding-booklingfrom">Roome 3: Premier Room</div>
                        <section class="signup-step-container">
                            <div class="row d-flex justify-content-center">
                                <div class="wizard">
                                    <div class="wizard-inner">
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li role="presentation" class="active"><a href="#step6" data-toggle="tab"
                                                    aria-controls="step6" role="tab" aria-expanded="true">Benjamin
                                                    Rechs</a></li>
                                            <li role="presentation" class="disabled"><a href="#step7" data-toggle="tab"
                                                    aria-controls="step7" role="tab" aria-expanded="false">Guest 2</a>
                                            </li>
                                            <li role="presentation" class="disabled"><a href="#step8" data-toggle="tab"
                                                    aria-controls="step8" role="tab" aria-expanded="false">Guest 3</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <form role="form" action="./index.html"
                                        class="login-box">
                                        <div class="tab-content" id="main_form">
                                            <div class="tab-pane active" role="tabpanel" id="step6">
                                                <div class="fill-name">
                                                    <label>Full Name </label>
                                                    <input class="form-control" type="text" name="name" placeholder="">
                                                </div>
                                                <div class="form-group">
                                                    <label>Phone Number</label>
                                                    <div class="nbr-cont-code">
                                                        <select name="country" class="phon-dropdown" id="country">
                                                            <option value="NG" selected="selected">+91</option>
                                                            <option value="NU">+91</option>
                                                            <option value="NF">+92</option>
                                                            <option value="KP">+93</option>
                                                            <option value="MP">+94</option>
                                                            <option value="NO">+95</option>
                                                        </select>
                                                    </div>
                                                    <input class="phone-nbr-input" type="text" name="name"
                                                        placeholder="+91 123456789">
                                                </div>
                                                <div class="Email">
                                                    <label>Email Address *</label>
                                                    <input class="form-control" type="email" name="name"
                                                        placeholder="demo@gmail.com">
                                                </div>
                                                <div class="special-requests">
                                                    <a id="display_12388" href="javascript:toggle('12388');">Special
                                                        requests<img src="{{ asset('images/Asset%203.png') }}"></a>
                                                    <div id="toggle_12388" style="display: none">
                                                        <div class="extra-bed"><input type="checkbox" name="ch2"
                                                                id="ch2" value="2"> Extra bed</div>
                                                        <div class="other-remarks-box">
                                                            <div class="other-remarks">Other remarks</div>
                                                            <textarea placeholder="Wirte down remarks"
                                                                required></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <ul class="list-inline pull-right">
                                                    <li><button type="button" class="default-btn next-step">Continue to
                                                            next step</button></li>
                                                </ul>
                                            </div>
                                            <div class="tab-pane" role="tabpanel" id="step7">
                                                <div class="fill-name">
                                                    <label>Full Name </label>
                                                    <input class="form-control" type="text" name="name" placeholder="">
                                                </div>
                                                <div class="form-group">
                                                    <label>Phone Number</label>
                                                    <div class="nbr-cont-code">
                                                        <select name="country" class="phon-dropdown" id="country">
                                                            <option value="NG" selected="selected">+91</option>
                                                            <option value="NU">+91</option>
                                                            <option value="NF">+92</option>
                                                            <option value="KP">+93</option>
                                                            <option value="MP">+94</option>
                                                            <option value="NO">+95</option>
                                                        </select>
                                                    </div>
                                                    <input class="phone-nbr-input" type="text" name="name"
                                                        placeholder="+91 123456789">
                                                </div>
                                                <div class="Email">
                                                    <label>Email Address *</label>
                                                    <input class="form-control" type="email" name="name"
                                                        placeholder="demo@gmail.com">
                                                </div>
                                                <div class="special-requests">
                                                    <a id="display_12377" href="javascript:toggle('12377');">Special
                                                        requests<img src="{{ asset('images/Asset%203.png') }}"></a>
                                                    <div id="toggle_12377" style="display: none">
                                                        <div class="extra-bed"><input type="checkbox" name="ch2"
                                                                id="ch2" value="2"> Extra bed</div>
                                                        <div class="other-remarks-box">
                                                            <div class="other-remarks">Other remarks</div>
                                                            <textarea placeholder="Wirte down remarks"
                                                                required></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <ul class="list-inline pull-right">
                                                    <li><button type="button"
                                                            class="default-btn prev-step">Back</button></li>
                                                    <li><button type="button"
                                                            class="default-btn next-step skip-btn">Skip</button></li>
                                                    <li><button type="button"
                                                            class="default-btn next-step">Continue</button></li>
                                                </ul>
                                            </div>
                                            <div class="tab-pane" role="tabpanel" id="step8">
                                                <div class="fill-name">
                                                    <label>Full Name </label>
                                                    <input class="form-control" type="text" name="name" placeholder="">
                                                </div>
                                                <div class="form-group">
                                                    <label>Phone Number</label>
                                                    <div class="nbr-cont-code">
                                                        <select name="country" class="phon-dropdown" id="country">
                                                            <option value="NG" selected="selected">+91</option>
                                                            <option value="NU">+91</option>
                                                            <option value="NF">+92</option>
                                                            <option value="KP">+93</option>
                                                            <option value="MP">+94</option>
                                                            <option value="NO">+95</option>
                                                        </select>
                                                    </div>
                                                    <input class="phone-nbr-input" type="text" name="name"
                                                        placeholder="+91 123456789">
                                                </div>
                                                <div class="Email">
                                                    <label>Email Address *</label>
                                                    <input class="form-control" type="email" name="name"
                                                        placeholder="demo@gmail.com">
                                                </div>
                                                <div class="special-requests">
                                                    <a id="display_12399" href="javascript:toggle('12399');">Special
                                                        requests<img src="{{ asset('images/Asset%203.png') }}"></a>
                                                    <div id="toggle_12399" style="display: none">
                                                        <div class="extra-bed"><input type="checkbox" name="ch2"
                                                                id="ch2" value="2"> Extra bed</div>
                                                        <div class="other-remarks-box">
                                                            <div class="other-remarks">Other remarks</div>
                                                            <textarea placeholder="Wirte down remarks"
                                                                required></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <ul class="list-inline pull-right">
                                                    <li><button type="button"
                                                            class="default-btn prev-step">Back</button></li>
                                                    <li><button type="button"
                                                            class="default-btn next-step skip-btn">Skip</button></li>
                                                    <li><button type="button"
                                                            class="default-btn next-step">Continue</button></li>
                                                </ul>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="cofrom-booking-right">

                        <div class="img-bokking">
                            <img src="{{ asset('images/Asset-18-100.jpg.jpg') }}">
                            <div class="booking-title">WIWO Hotel</div>
                        </div>
                        <div class="rating-star"><em>3.0</em><i class="fa fa-star" aria-hidden="true"></i><i
                                class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i>
                        </div>
                        <div class="stay-box-date">
                            <div class="stay-box-date-title">3-night stay</div>
                            <div class="box-check-in"><span>Check-in:</span> 1 April 2021</div>
                            <div class="box-check-out"><span>Check-out:</span> 4 April 2021</div>
                        </div>
                        <div class="room-choose-list">
                            <div class="room-ltilte">
                                <h5>Superior Twin</h5>
                                <p>1 room x 3 nights<br>
                                    RM96 per night</p>
                            </div>
                            <div class="room-ltilte-right">
                                <p>RM 181.00</p>
                                <p>RM 288.00</p>
                            </div>
                        </div>
                        <div class="room-choose-list">
                            <div class="room-ltilte">
                                <h5>Premier Double</h5>
                                <p>1 room x 3 nights<br>
                                    RM96 per night</p>
                            </div>
                            <div class="room-ltilte-right">
                                <p>RM 181.00</p>
                                <p>RM 288.00</p>
                            </div>
                        </div>
                        <div class="totle-box-price">
                            <div class="totle-hadding">Total</div>
                            <div class="totle-price">RM 576.00</div>
                        </div>
                        <div class="reservebt"><a href="#" style="background-color:#5fb578;">Conform Booking</a></div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@once
@push('scripts')
<script src="{{asset('js/confirm-booking.js')}}"></script>
@endpush
@endonce

@endsection