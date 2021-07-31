<form id="formSearchHotel" action="{{ route('home.list') }}" method="GET">
    @csrf
    <div class="fro-row">
        <div class="elem-group">
            <label for="room-selection"><img src="{{ asset('images/locaction.png') }}">Hotels/cities</label>
            <div class="drop-down">
                <div class="selected">
                    <span>Hotels/cities</span>
                </div>
                <div class="options">
                    <ul>
                        <div class="type">
                            <input class="form-control" type="text" name="name" placeholder=" Tpye Hear Location">
                        </div>
                        <li><a href="#"><img src="{{ asset('images/locaction.png') }}">Hilton Head Island<br>
                                <span>South California, Unted State</span></a></li>
                        <li><a href="#"><img src="{{ asset('images/locaction.png') }}">Hilton Adelaide<br>
                                <span>Adelaid, South Austrlia, Austin</span></a></li>
                        <li><a href="#"><img src="{{ asset('images/locaction.png') }}">Hilton Ameterdas<br>
                                <span>Ameterdas, South Australia, Austin</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="elem-group inlined">
            <label for="checkin-date"><img src="{{ asset('images/clander.png') }}">Check-in</label>
            <input type="date" id="checkin-date" name="checkin" required>
        </div>
        <div class="elem-group inlined">
            <label for="checkout-date"><img src="{{ asset('images/clander.png') }}">Check-out</label>
            <input type="date" id="checkout-date" name="checkout" required>
        </div>
        <div class="elem-group">
            <label for="room-selection"><img src="{{ asset('images/bedroom.png') }}">Room(S)</label>
            <div class="wrap-drop" id="noble-gases">
                <span>Room(S)</span>
                <ul class="drop">
                    <li><a><img src="{{ asset('images/bed.png') }}">1 Room(S)</a></li>
                    <li><a><img src="{{ asset('images/bed.png') }}">2 Room(S)</a></li>
                    <li><a><img src="{{ asset('images/bed.png') }}">3 Room(S)</a></li>
                    <li><a><img src="{{ asset('images/bed.png') }}">4 Room(S)</a></li>
                    <li><a><img src="{{ asset('images/bed.png') }}">5 Room(S)</a></li>
                    <li><a><img src="{{ asset('images/bed.png') }}">6 Room(S)</a></li>
                </ul>
            </div>
        </div>
        <button type="submit" href="hotel-listing.html" class="btn-search"><img src="{{ asset('images/search.png') }}"></button>
    </div>
</form>

@once
@push('scripts')
<script>
    var hotel_id = -1,
        checkIn = "",
        checkOut = "",
        roomCount = 1;
</script>

@if ( isset( $search))
<script>
    hotel_id = "{{ $search['hotel_id'] }}";
    checkIn = "{{ $search['checkIn'] }}";
    checkOut = "{{ $search['checkOut'] }}";
    roomCount = "{{ $search['roomCount'] }}";
</script>
@endif

<script>
// $('#searchCheckin').val(checkIn);
// $('#searchCheckout').val(checkOut);
// $('#searchRoomCount').val(roomCount);

$(document).ready(function() {

    // $("#searchHotel").select2();

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    function getHotels() {
        $.ajax({
            url: "{{ route('home.getHotels') }}",
            type: "GET",
            dataType: 'json',
            success: function(data) {
                var hotels = data;
                var option = '<option value="-1">Select a hotel</option>';

                for (var i = 0; i < hotels.length; i++) {

                    option += '<option value="' + hotels[i]['id'] + '">' + hotels[i]['name'];
                    if (hotels[i]['city'] != null)
                        option += ' / ' + hotels[i]['city']['name'];
                    option += '</option>';
                }
                $('#searchHotel').html(option);
                $('#searchHotel').val(hotel_id);
            },
            error: function(reject) {}
        });
    }
    // getHotels();
});
</script>
<script src="{{asset('js/searchbar.js')}}"></script>
@endpush
@endonce