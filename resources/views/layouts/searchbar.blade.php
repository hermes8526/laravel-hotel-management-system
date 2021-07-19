<form id="formSearchHotel" action="{{ route('home.list') }}" method="POST">
    @csrf
    <div class="fro-row">
        <div class="elem-group">
            <label for="searchHotel"><img src="{{ asset('images/locaction.png') }}">Hotels/cities</label>
            <select id='searchHotel' name="searchHotel">
                <option>Select a hotel</option>
            </select>
        </div>
        <div class="elem-group inlined">
            <label for="searchCheckin"><img src="{{ asset('images/clander.png') }}">Check-in</label>
            <input type="date" id="searchCheckin" name="searchCheckin" required>
        </div>
        <div class="elem-group inlined">
            <label for="searchCheckout"><img src="{{ asset('images/clander.png') }}">Check-out</label>
            <input type="date" id="searchCheckout" name="searchCheckout" required>
        </div>
        <div class="elem-group">
            <label for="searchRoomCount"><img src="{{ asset('images/bedroom.png') }}">Room(S)</label>
            <select id="searchRoomCount" name="searchRoomCount" required>
                <option value="1"> 1 Room</option>
                <option value="2"> 2 Room</option>
                <option value="3"> 3 Room</option>
                <option value="4"> 4 Room</option>
            </select>
        </div>
        <button type="submit" class="btn-search"><img src="{{ asset('images/search.png') }}"></button>
    </div>
</form>

@once
@push('scripts')
    <script>
        var hotel_id = -1, checkIn = "", checkOut = "", roomCount = 1;
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
        $('#searchCheckin').val(checkIn);
        $('#searchCheckout').val(checkOut);
        $('#searchRoomCount').val(roomCount);

        $(document).ready(function(){

            $("#searchHotel").select2();

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

                        for (var i = 0; i < hotels.length; i ++) {

                            option += '<option value="'+ hotels[i]['id'] +'">' + hotels[i]['name'];
                            if (hotels[i]['city'] != null) 
                                option += ' / '+ hotels[i]['city']['name'];
                            option += '</option>';
                        }
                        $('#searchHotel').html(option);
                        $('#searchHotel').val(hotel_id);
                    },
                    error: function(reject) {
                    }
                });
            }
            getHotels();
        });
    </script>
    <script src="{{asset('js/select2.min.js')}}"></script>
@endpush
@endonce