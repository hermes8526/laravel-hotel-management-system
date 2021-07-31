@extends('layouts.app')

@section('content')

<div class="listing-single-room">
    <div class="container">
      <div class="ttle-single-room">Citadines Upland Kuching</div>
      <div class="rating-single-room"><img src="{{ asset('images/star.png') }}">4</div>
      <div class="addres-single-room"><img src="{{ asset('images/locaction.png') }}">55, Q5A Kenyalang Park, 93300 Kuching, Sarawak
      </div>
      <div class="row">
        <div class="col-md-6 preview">
          <div class="preview-pic tab-content">
            <div class="tab-pane active" id="pic-1"><img src="{{ asset('images/Asset%2014-100.jpg') }}" /></div>
            <div class="tab-pane" id="pic-2"><img src="{{ asset('images/Asset%2015-100.jpg') }}" /></div>c
            <div class="tab-pane" id="pic-3"><img src="{{ asset('images/Asset%2016-100.jpg') }}" /></div>
            <div class="tab-pane" id="pic-4"><img src="{{ asset('images/indoors-4234071_1920.jpg') }}" /></div>
          </div>
          <ul class="preview-thumbnail nav nav-tabs">
            <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="{{ asset('images/Asset%2014-100.jpg') }}" /></a>
            </li>
            <li><a data-target="#pic-2" data-toggle="tab"><img src="{{ asset('images/Asset%2015-100.jpg') }}" /></a></li>
            <li><a data-target="#pic-3" data-toggle="tab"><img src="{{ asset('images/Asset%2016-100.jpg') }}" /></a></li>
            <li><a data-target="#pic-4" data-toggle="tab"><img src="{{ asset('images/indoors-4234071_1920.jpg') }}" /></a></li>
          </ul>
        </div>
        <div class="col-md-6">
          <div class="listing-single-right-bx">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.3845088854246!2d110.35388411424424!3d1.5361021613778536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31fba7a06d17aab7%3A0xf1afe9bd504791ed!2sCitadines%20Uplands%20Kuching!5e0!3m2!1sen!2sin!4v1626429658965!5m2!1sen!2sin"
              width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="single-feclty-box">
    <div class="container">
      <div class="row">
        <div class="col-md-7">
          <div class="single-feclty-box-left">
            <div class="faclty-title">Hotel Facilities</div>
            <div class="single-feclty-box-most">
              <h6>Most popular Facilities</h6>
              <ul>
                <li>
                  <div class="icon-fac"><img src="{{ asset('images/Asset%2023-100.jpg') }}"></div>
                  <div class="cont-fac">Free <br>Wi-Wi</div>
                </li>
                <li>
                  <div class="icon-fac"><img src="{{ asset('images/Asset%2024-100.jpg') }}"></div>
                  <div class="cont-fac">Free <br>Parking </div>
                </li>
                <li>
                  <div class="icon-fac"><img src="{{ asset('images/Asset%2025-100.jpg') }}"></div>
                  <div class="cont-fac">Baggage <br>Storage</div>
                </li>
                <li>
                  <div class="icon-fac"><img src="{{ asset('images/Asset%2026-100.jpg') }}"></div>
                  <div class="cont-fac">24-hour <br>Services</div>
                </li>
                <li>
                  <div class="icon-fac"><img src="{{ asset('images/Asset%2027-100.jpg') }}"></div>
                  <div class="cont-fac">Food/<br>Drinks</div>
                </li>
                <li>
                  <div class="icon-fac"><img src="{{ asset('images/Asset%2028-100.jpg') }}"></div>
                  <div class="cont-fac">Spa and <br>relaxation</div>
                </li>
                <li>
                  <div class="icon-fac"><img src="{{ asset('images/Asset%2029-100.jpg') }}"></div>
                  <div class="cont-fac">laundry</div>
                </li>
                <li>
                  <div class="icon-fac"><img src="{{ asset('images/Asset%2030-100.jpg') }}"></div>
                  <div class="cont-fac">Tv</div>
                </li>
              </ul>
              <div class="sh-all">
                <a id="display_123" class="faclty" href="javascript:toggle('123');">Show All Facilities</a>
                <div id="toggle_123" style="display: none">
                  <ul>
                    <li>
                      <div class="icon-fac"><img src="{{ asset('images/Asset%2023-100.jpg') }}"></div>
                      <div class="cont-fac">Free <br>Wi-Wi</div>
                    </li>
                    <li>
                      <div class="icon-fac"><img src="{{ asset('images/Asset%2024-100.jpg') }}"></div>
                      <div class="cont-fac">Free <br>Parking </div>
                    </li>
                    <li>
                      <div class="icon-fac"><img src="{{ asset('images/Asset%2025-100.jpg') }}"></div>
                      <div class="cont-fac">Baggage <br>Storage</div>
                    </li>
                    <li>
                      <div class="icon-fac"><img src="{{ asset('images/Asset%2026-100.jpg') }}"></div>
                      <div class="cont-fac">24-hour <br>Services</div>
                    </li>
                    <li>
                      <div class="icon-fac"><img src="{{ asset('images/Asset%2027-100.jpg') }}"></div>
                      <div class="cont-fac">Food/<br>Drinks</div>
                    </li>
                    <li>
                      <div class="icon-fac"><img src="{{ asset('images/Asset%2028-100.jpg') }}"></div>
                      <div class="cont-fac">Spa and <br>relaxation</div>
                    </li>
                    <li>
                      <div class="icon-fac"><img src="{{ asset('images/Asset%2029-100.jpg') }}"></div>
                      <div class="cont-fac">laundry</div>
                    </li>
                    <li>
                      <div class="icon-fac"><img src="{{ asset('images/Asset%2030-100.jpg') }}"></div>
                      <div class="cont-fac">Tv</div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="row listing-single">
              <div class="col-md-12 chose-rom-sact">
                <div class="haddingchos-room">Choose Your Room</div>
                <div class="cose-your-room-box-left">
                  <div class="chhos-room-all-box-img">
                    <a class="lightbox" href="#dog">
                      <img src="{{ asset('images/Asset%2016-100.jpg') }}">
                      <i class="fa fa-search-plus" aria-hidden="true"></i>
                    </a>
                    <div class="lightbox-target" id="dog">
                      <img src="{{ asset('images/Asset%2016-100.jpg') }}">
                      <a class="lightbox-close" href="#"></a>
                    </div>

                  </div>
                  <div class="chhos-room-all-box-cont">
                    <div class="title-roome">Superior Twin</div>
                    <ul>
                      <li><img src="{{ asset('images/bed.png') }}">2 single beads</li>
                      <li><img src="{{ asset('images/sq.png') }}">Room size:21m2/225ft</li>
                      <li><img src="{{ asset('images/_4a-selection-of-rooms.png') }}">With brekfast</li>
                    </ul>
                    <div class="box">
                      <a class="button" href="#"><img src="{{ asset('images/bed.png') }}">Room Facilityes</a>
                    </div>
                    <div id="popup1" class="overlay">
                      <div class="popup">
                        <a class="close" href="#">&times;</a>
                        <div class="content">
                          <div class="popbox-cont">
                            <div class="row">
                              <div class="col-md-5">
                                <div class="popbox-cont-left">
                                  <h2>Standard superior</h2>
                                  <div class="ul-li-bx-po">
                                    <h4>Features</h4>
                                    <ul>
                                      <li>
                                        <div class="icon-bx"><img src="{{ asset('images/icon-dsh.png') }}"></div>
                                        <div class="cont-bx">Room size:21m2/ 226ft</div>
                                      </li>
                                      <li>
                                        <div class="icon-bx"><img src="{{ asset('images/icon-dsh4.png') }}"></div>
                                        <div class="cont-bx">Shower</div>
                                      </li>
                                    </ul>
                                    <ul>
                                      <li>
                                        <div class="icon-bx"><img src="{{ asset('images/icon-dsh1.png') }}"></div>
                                        <div class="cont-bx">City View</div>
                                      </li>
                                      <li>
                                        <div class="icon-bx"><img src="{{ asset('images/icon-dsh5.png') }}"></div>
                                        <div class="cont-bx">No-smoking</div>
                                      </li>
                                    </ul>
                                    <h4>Bed types</h4>
                                    <ul class="row-tow-fclty">
                                      <li>
                                        <div class="icon-bx"><img src="{{ asset('images/icon3.png') }}"></div>
                                        <div class="cont-bx">2 single beds</div>
                                      </li>
                                    </ul>
                                    <h4 class="bathroom">Bathroom and Toiletries</h4>
                                    <ul>
                                      <li>
                                        <div class="icon-bx"><img src="{{ asset('images/icon-4-(1).png') }}"></div>
                                        <div class="cont-bx">Hair dryer</div>
                                      </li>
                                    </ul>
                                    <ul>
                                      <li>
                                        <div class="icon-bx"><img src="{{ asset('images/iocn-10.png') }}"></div>
                                        <div class="cont-bx">Toiletries</div>
                                      </li>
                                    </ul>
                                    <h4 class="bathroom">Entertainment</h4>
                                    <ul>
                                      <li>
                                        <div class="icon-bx"><img src="{{ asset('images/icon-7.png') }}"></div>
                                        <div class="cont-bx">Free Wi-Wif rooms</div>
                                      </li>
                                      <li>
                                        <div class="icon-bx"><img src="{{ asset('images/iocn-11.png') }}"></div>
                                        <div class="cont-bx">Satellite/cable</div>
                                      </li>
                                    </ul>
                                    <ul>
                                      <li>
                                        <div class="icon-bx"><img src="{{ asset('images/iocn-6.png') }}"></div>
                                        <div class="cont-bx">Telephone</div>
                                      </li>
                                    </ul>
                                    <h4 class="bathroom">Comforts</h4>
                                    <ul>
                                      <li>
                                        <div class="icon-bx"><img src="{{ asset('images/icon-9.png') }}"></div>
                                        <div class="cont-bx">Air conditioning</div>
                                      </li>
                                    </ul>
                                    <ul>
                                      <li>
                                        <div class="icon-bx"><img src="{{ asset('images/icon-8.png') }}"></div>
                                        <div class="cont-bx">Air conditioning</div>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-7">
                                <div class="popbox-cont-right">
                                  <div class="holder">
                                    <div class="slides">
                                      <img src="{{ asset('images/Asset%2015-100.jpg') }}" alt="" />
                                    </div>
                                    <div class="slides">
                                      <img src="{{ asset('images/Asset%2016-100.jpg') }}">
                                    </div>
                                    <div class="slides">
                                      <img src="{{ asset('images/Asset%2019-100.jpg') }}">
                                    </div>
                                    <div class="slides">
                                      <img src="{{ asset('images/bedroom-5664221_1920.jpg') }}">
                                    </div>
                                    <div class="slides">
                                      <img src="{{ asset('images/restaurant-1837150_1920.jpg') }}">
                                    </div>
                                  </div>
                                  <div class="prevContainer"><a class="prev" onclick="plusSlides(-1)">
                                      <svg viewBox="0 0 24 24">
                                        <path
                                          d="M20,11V13H8L13.5,18.5L12.08,19.92L4.16,12L12.08,4.08L13.5,5.5L8,11H20Z">
                                        </path>
                                      </svg>
                                    </a></div>
                                  <div class="nextContainer"><a class="next" onclick="plusSlides(1)">
                                      <svg viewBox="0 0 24 24">
                                        <path
                                          d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z">
                                        </path>
                                      </svg>
                                    </a></div>
                                  <div class="caption-container">
                                    <p id="caption"></p>
                                  </div>
                                  <!-- thumnails in a row -->
                                  <div class="tumble">
                                    <div class="column">
                                      <img class="slide-thumbnail" src="{{ asset('images/Asset%2015-100.jpg') }}"
                                        onclick="currentSlide(1)" alt="Caption One">
                                    </div>
                                    <div class="column">
                                      <img class="slide-thumbnail" src="{{ asset('images/Asset%2016-100.jpg') }}"
                                        onclick="currentSlide(2)" alt="Caption Two">
                                    </div>
                                    <div class="column">
                                      <img class="slide-thumbnail" src="{{ asset('images/Asset%2019-100.jpg') }}"
                                        onclick="currentSlide(3)" alt="Caption Three">
                                    </div>
                                    <div class="column">
                                      <img class="slide-thumbnail" src="{{ asset('images/bedroom-5664221_1920.jpg') }}"
                                        onclick="currentSlide(4)" alt="Caption Four">
                                    </div>
                                    <div class="column">
                                      <img class="slide-thumbnail" src="{{ asset('images/restaurant-1837150_1920.jpg') }}"
                                        onclick="currentSlide(5)" alt="Caption Five">
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="chhos-room-all-box-price">
                    <div class="rmp-rate">RM 98
                      <em>! Per night</em>
                      <a href="#">$ Check rate</a>
                    </div>
                    <div class="qunty">
                      <button type="button" id="sub" class="sub">-</button>
                      <input class="count" type="text" id="1" value="1" min="1" max="100" />
                      <button type="button" id="add" class="add">+</button>
                    </div>
                    <div class="slect-btn"><a href="#">Select</a></div>
                  </div>
                </div>
              </div>
              <div class="cose-your-room-box-left">
                <div class="chhos-room-all-box">
                  <div class="chhos-room-all-box-img">
                    <a class="lightbox" href="#dog">
                      <img src="{{ asset('images/Asset%2016-100.jpg') }}">
                      <i class="fa fa-search-plus" aria-hidden="true"></i>
                    </a>
                    <div class="lightbox-target" id="dog">
                      <img src="{{ asset('images/Asset%2016-100.jpg') }}">
                      <a class="lightbox-close" href="#"></a>
                    </div>

                  </div>
                  <div class="chhos-room-all-box-cont">
                    <div class="title-roome">Premier Double</div>
                    <ul>
                      <li><img src="{{ asset('images/bed.png') }}">2 single beads</li>
                      <li><img src="{{ asset('images/sq.png') }}">Room size:21m2/225ft</li>
                      <li><img src="{{ asset('images/_4a-selection-of-rooms.png') }}">With brekfast</li>
                    </ul>
                    <div class="box">
                      <a class="button" href="#"><img src="{{ asset('images/bed.png') }}">Room Facilityes</a>
                    </div>
                    <div id="popup2" class="overlay">
                      <div class="popup">
                        <a class="close" href="#">&times;</a>
                        <div class="content">
                          <div class="popbox-cont">
                            <div class="row">
                              <div class="col-md-5">
                                <div class="popbox-cont-left">
                                  <h2>Standard superior</h2>
                                  <div class="ul-li-bx-po">
                                    <h4>Features</h4>
                                    <ul>
                                      <li>
                                        <div class="icon-bx"><img src="{{ asset('images/icon-dsh.png') }}"></div>
                                        <div class="cont-bx">Room size:21m2/ 226ft</div>
                                      </li>
                                      <li>
                                        <div class="icon-bx"><img src="{{ asset('images/icon-dsh4.png') }}"></div>
                                        <div class="cont-bx">Shower</div>
                                      </li>
                                    </ul>
                                    <ul>
                                      <li>
                                        <div class="icon-bx"><img src="{{ asset('images/icon-dsh1.png') }}"></div>
                                        <div class="cont-bx">City View</div>
                                      </li>
                                      <li>
                                        <div class="icon-bx"><img src="{{ asset('images/icon-dsh5.png') }}"></div>
                                        <div class="cont-bx">No-smoking</div>
                                      </li>
                                    </ul>
                                    <h4>Bed types</h4>
                                    <ul class="row-tow-fclty">
                                      <li>
                                        <div class="icon-bx"><img src="{{ asset('images/icon3.png') }}"></div>
                                        <div class="cont-bx">2 single beds</div>
                                      </li>
                                    </ul>
                                    <h4 class="bathroom">Bathroom and Toiletries</h4>
                                    <ul>
                                      <li>
                                        <div class="icon-bx"><img src="{{ asset('images/icon-4-(1).png') }}"></div>
                                        <div class="cont-bx">Hair dryer</div>
                                      </li>
                                    </ul>
                                    <ul>
                                      <li>
                                        <div class="icon-bx"><img src="{{ asset('images/iocn-10.png') }}"></div>
                                        <div class="cont-bx">Toiletries</div>
                                      </li>
                                    </ul>
                                    <h4 class="bathroom">Entertainment</h4>
                                    <ul>
                                      <li>
                                        <div class="icon-bx"><img src="{{ asset('images/icon-7.png') }}"></div>
                                        <div class="cont-bx">Free Wi-Wif rooms</div>
                                      </li>
                                      <li>
                                        <div class="icon-bx"><img src="{{ asset('images/iocn-11.png') }}"></div>
                                        <div class="cont-bx">Satellite/cable</div>
                                      </li>
                                    </ul>
                                    <ul>
                                      <li>
                                        <div class="icon-bx"><img src="{{ asset('images/iocn-6.png') }}"></div>
                                        <div class="cont-bx">Telephone</div>
                                      </li>
                                    </ul>
                                    <h4 class="bathroom">Comforts</h4>
                                    <ul>
                                      <li>
                                        <div class="icon-bx"><img src="{{ asset('images/icon-9.png') }}"></div>
                                        <div class="cont-bx">Air conditioning</div>
                                      </li>
                                    </ul>
                                    <ul>
                                      <li>
                                        <div class="icon-bx"><img src="{{ asset('images/icon-8.png') }}"></div>
                                        <div class="cont-bx">Air conditioning</div>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-7">
                                <div class="popbox-cont-right">
                                  <div class="holder">
                                    <div class="slides">
                                      <img src="{{ asset('images/Asset%2015-100.jpg') }}" alt="" />
                                    </div>
                                    <div class="slides">
                                      <img src="{{ asset('images/Asset%2016-100.jpg') }}">
                                    </div>
                                    <div class="slides">
                                      <img src="{{ asset('images/Asset%2019-100.jpg') }}">
                                    </div>
                                    <div class="slides">
                                      <img src="{{ asset('images/bedroom-5664221_1920.jpg') }}">
                                    </div>
                                    <div class="slides">
                                      <img src="{{ asset('images/restaurant-1837150_1920.jpg') }}">
                                    </div>
                                  </div>
                                  <div class="prevContainer"><a class="prev" onclick="plusSlides(-1)">
                                      <svg viewBox="0 0 24 24">
                                        <path
                                          d="M20,11V13H8L13.5,18.5L12.08,19.92L4.16,12L12.08,4.08L13.5,5.5L8,11H20Z">
                                        </path>
                                      </svg>
                                    </a></div>
                                  <div class="nextContainer"><a class="next" onclick="plusSlides(1)">
                                      <svg viewBox="0 0 24 24">
                                        <path
                                          d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z">
                                        </path>
                                      </svg>
                                    </a></div>
                                  <div class="caption-container">
                                    <p id="caption"></p>
                                  </div>
                                  <!-- thumnails in a row -->
                                  <div class="tumble">
                                    <div class="column">
                                      <img class="slide-thumbnail" src="{{ asset('images/Asset%2015-100.jpg') }}"
                                        onclick="currentSlide(1)" alt="Caption One">
                                    </div>
                                    <div class="column">
                                      <img class="slide-thumbnail" src="{{ asset('images/Asset%2016-100.jpg') }}"
                                        onclick="currentSlide(2)" alt="Caption Two">
                                    </div>
                                    <div class="column">
                                      <img class="slide-thumbnail" src="{{ asset('images/Asset%2019-100.jpg') }}"
                                        onclick="currentSlide(3)" alt="Caption Three">
                                    </div>
                                    <div class="column">
                                      <img class="slide-thumbnail" src="{{ asset('images/bedroom-5664221_1920.jpg') }}"
                                        onclick="currentSlide(4)" alt="Caption Four">
                                    </div>
                                    <div class="column">
                                      <img class="slide-thumbnail" src="{{ asset('images/restaurant-1837150_1920.jpg') }}"
                                        onclick="currentSlide(5)" alt="Caption Five">
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="chhos-room-all-box-price">
                    <div class="rmp-rate">RM 98
                      <em>! Per night</em>
                      <a href="#">$ Check rate</a>
                    </div>
                    <div class="qunty">
                      <button type="button" id="sub" class="sub">-</button>
                      <input class="count" type="text" id="1" value="1" min="1" max="100" />
                      <button type="button" id="add" class="add">+</button>
                    </div>
                    <div class="slect-btn"><a href="#">Select</a></div>
                  </div>
                </div>
              </div>
              <div class="cose-your-room-box-left">
                <div class="chhos-room-all-box">
                  <div class="chhos-room-all-box-img">
                    <a class="lightbox" href="#dog">
                      <img src="{{ asset('images/Asset%2016-100.jpg') }}">
                      <i class="fa fa-search-plus" aria-hidden="true"></i>
                    </a>
                    <div class="lightbox-target" id="dog">
                      <img src="{{ asset('images/Asset%2016-100.jpg') }}">
                      <a class="lightbox-close" href="#"></a>
                    </div>

                  </div>
                  <div class="chhos-room-all-box-cont">
                    <div class="title-roome">Deluse Triple</div>
                    <ul>
                      <li><img src="{{ asset('images/bed.png') }}">2 single beads</li>
                      <li><img src="{{ asset('images/sq.png') }}">Room size:21m2/225ft</li>
                      <li><img src="{{ asset('images/_4a-selection-of-rooms.png') }}">With brekfast</li>
                    </ul>
                    <div class="box">
                      <a class="button" href="#"><img src="{{ asset('images/bed.png') }}">Room Facilityes</a>
                    </div>
                    <div id="popup3" class="overlay">
                      <div class="popup">
                        <a class="close" href="#">&times;</a>
                        <div class="content">
                          <div class="popbox-cont">
                            <div class="row">
                              <div class="col-md-5">
                                <div class="popbox-cont-left">
                                  <h2>Standard superior</h2>
                                  <div class="ul-li-bx-po">
                                    <h4>Features</h4>
                                    <ul>
                                      <li>
                                        <div class="icon-bx"><img src="{{ asset('images/icon-dsh.png') }}"></div>
                                        <div class="cont-bx">Room size:21m2/ 226ft</div>
                                      </li>
                                      <li>
                                        <div class="icon-bx"><img src="{{ asset('images/icon-dsh4.png') }}"></div>
                                        <div class="cont-bx">Shower</div>
                                      </li>
                                    </ul>
                                    <ul>
                                      <li>
                                        <div class="icon-bx"><img src="{{ asset('images/icon-dsh1.png') }}"></div>
                                        <div class="cont-bx">City View</div>
                                      </li>
                                      <li>
                                        <div class="icon-bx"><img src="{{ asset('images/icon-dsh5.png') }}"></div>
                                        <div class="cont-bx">No-smoking</div>
                                      </li>
                                    </ul>
                                    <h4>Bed types</h4>
                                    <ul class="row-tow-fclty">
                                      <li>
                                        <div class="icon-bx"><img src="{{ asset('images/icon3.png') }}"></div>
                                        <div class="cont-bx">2 single beds</div>
                                      </li>
                                    </ul>
                                    <h4 class="bathroom">Bathroom and Toiletries</h4>
                                    <ul>
                                      <li>
                                        <div class="icon-bx"><img src="{{ asset('images/icon-4-(1).png') }}"></div>
                                        <div class="cont-bx">Hair dryer</div>
                                      </li>
                                    </ul>
                                    <ul>
                                      <li>
                                        <div class="icon-bx"><img src="{{ asset('images/iocn-10.png') }}"></div>
                                        <div class="cont-bx">Toiletries</div>
                                      </li>
                                    </ul>
                                    <h4 class="bathroom">Entertainment</h4>
                                    <ul>
                                      <li>
                                        <div class="icon-bx"><img src="{{ asset('images/icon-7.png') }}"></div>
                                        <div class="cont-bx">Free Wi-Wif rooms</div>
                                      </li>
                                      <li>
                                        <div class="icon-bx"><img src="{{ asset('images/iocn-11.png') }}"></div>
                                        <div class="cont-bx">Satellite/cable</div>
                                      </li>
                                    </ul>
                                    <ul>
                                      <li>
                                        <div class="icon-bx"><img src="{{ asset('images/iocn-6.png') }}"></div>
                                        <div class="cont-bx">Telephone</div>
                                      </li>
                                    </ul>
                                    <h4 class="bathroom">Comforts</h4>
                                    <ul>
                                      <li>
                                        <div class="icon-bx"><img src="{{ asset('images/icon-9.png') }}"></div>
                                        <div class="cont-bx">Air conditioning</div>
                                      </li>
                                    </ul>
                                    <ul>
                                      <li>
                                        <div class="icon-bx"><img src="{{ asset('images/icon-8.png') }}"></div>
                                        <div class="cont-bx">Air conditioning</div>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-7">
                                <div class="popbox-cont-right">
                                  <div class="holder">
                                    <div class="slides">
                                      <img src="{{ asset('images/Asset%2015-100.jpg') }}" alt="" />
                                    </div>
                                    <div class="slides">
                                      <img src="{{ asset('images/Asset%2016-100.jpg') }}">
                                    </div>
                                    <div class="slides">
                                      <img src="{{ asset('images/Asset%2019-100.jpg') }}">
                                    </div>
                                    <div class="slides">
                                      <img src="{{ asset('images/bedroom-5664221_1920.jpg') }}">
                                    </div>
                                    <div class="slides">
                                      <img src="{{ asset('images/restaurant-1837150_1920.jpg') }}">
                                    </div>
                                  </div>
                                  <div class="prevContainer"><a class="prev" onclick="plusSlides(-1)">
                                      <svg viewBox="0 0 24 24">
                                        <path
                                          d="M20,11V13H8L13.5,18.5L12.08,19.92L4.16,12L12.08,4.08L13.5,5.5L8,11H20Z">
                                        </path>
                                      </svg>
                                    </a></div>
                                  <div class="nextContainer"><a class="next" onclick="plusSlides(1)">
                                      <svg viewBox="0 0 24 24">
                                        <path
                                          d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z">
                                        </path>
                                      </svg>
                                    </a></div>
                                  <div class="caption-container">
                                    <p id="caption"></p>
                                  </div>
                                  <!-- thumnails in a row -->
                                  <div class="tumble">
                                    <div class="column">
                                      <img class="slide-thumbnail" src="{{ asset('images/Asset%2015-100.jpg') }}"
                                        onclick="currentSlide(1)" alt="Caption One">
                                    </div>
                                    <div class="column">
                                      <img class="slide-thumbnail" src="{{ asset('images/Asset%2016-100.jpg') }}"
                                        onclick="currentSlide(2)" alt="Caption Two">
                                    </div>
                                    <div class="column">
                                      <img class="slide-thumbnail" src="{{ asset('images/Asset%2019-100.jpg') }}"
                                        onclick="currentSlide(3)" alt="Caption Three">
                                    </div>
                                    <div class="column">
                                      <img class="slide-thumbnail" src="{{ asset('images/bedroom-5664221_1920.jpg') }}"
                                        onclick="currentSlide(4)" alt="Caption Four">
                                    </div>
                                    <div class="column">
                                      <img class="slide-thumbnail" src="{{ asset('images/restaurant-1837150_1920.jpg') }}"
                                        onclick="currentSlide(5)" alt="Caption Five">
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="chhos-room-all-box-price">
                    <div class="rmp-rate">RM 98
                      <em>! Per night</em>
                      <a href="#">$ Check rate</a>
                    </div>
                    <div class="qunty">
                      <button type="button" id="sub" class="sub">-</button>
                      <input class="count" type="text" id="1" value="1" min="1" max="100" />
                      <button type="button" id="add" class="add">+</button>
                    </div>
                    <div class="slect-btn"><a href="#">Select</a></div>
                  </div>
                </div>
              </div>
              <div class="paginaction">
                <ul>
                  <li><i class="fa fa-angle-left" aria-hidden="true"></i></li>
                  <li><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-5">
          <div class="single-feclty-box-right">
            <div class="chekin-out--in">
              <div class="elem-group inlined">
                <label for="checkin-date">Check-in</label>
                <input type="date" id="checkin-date" name="checkin" required>
              </div>
              <div class="elem-group inlined">
                <label for="checkout-date">Check-out</label>
                <input type="date" id="checkout-date" name="checkout" required>
              </div>
            </div>
            <div class="room-choose-list">
              <div class="room-ltilte">
                <h5>Superior Twin</h5>
                <p>1 room x 3 nights<br>
                  RM96 per night</p>
              </div>
              <div class="room-ltilte-right">
                <img src="{{ asset('images/crose-btn.png') }}">
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
                <img src="{{ asset('images/crose-btn.png') }}">
                <p>RM 288.00</p>
              </div>
            </div>
            <div class="totle-box-price">
              <div class="totle-hadding">Total</div>
              <div class="totle-price">RM 576.00</div>
            </div>
            <div class="reservebt"><a href="{{ route('home.book') }}" style="background-color:#5fb578;">Conform</a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
@once
@push('scripts')
<script src="{{asset('js/listing-single-cart.js')}}"></script>
@endpush
@endonce

@endsection