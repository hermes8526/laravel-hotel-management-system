jQuery(document).ready(function() {
    $('.date-picker').datepicker({
        rtl: App.isRTL(),
        autoclose: true
    });

  new Datatable().init({
        src: $("#datatable-people-staff"),
        loadingMessage: 'Loading...',
        dataTable: {
            "processing" : true,
            "serverside" : true,
            "dom": "t<'row'<'col-sm-12 pull-right'p>>",
            "pageLength": 10,
            "ajax": ({
                "url": $("#datatable-people-staff").data('url'),
            }),
            "bStateSave": false,
            "order": [],
            columns: [
                {
                    name: 'id',
                    render: function (data, type, full, meta) {
                        return meta.settings._iDisplayStart + meta.row + 1;
                    }
                },
                {data: 'firstname', name: 'firstname'},
                {data: 'lastname', name: 'lastname'},
                {data: 'group', name: 'group'},
                {data: 'email', name: 'email'},
                {data: 'contact', name: 'contact'},
                {data: 'status', name: 'status'},
                {data: 'action', name: 'action', orderable: false, searchable: false}
            ],
            columnDefs: [
                  {
                     targets: '_all',
                     defaultContent: '-'
                  }
               ],
            "pagingType": "bootstrap_full_number",
        }
    });

    // $('.filter-firstName').keyup( function(){
    //   var table = $("#datatable-people-staff").DataTable();
    //     table.column( 2 )
    //       .search( $(this).val() )
    //       .draw();

    // });
    // $('.filter-lastName').keyup( function(){
    //   var table = $("#datatable-people-staff").DataTable();
    //     table.column( 1 )
    //       .search( $(this).val() )
    //       .draw();

    // });
    // $('.filter-phone').keyup( function(){
    //   var table = $("#datatable-people-staff").DataTable();
    //     table.column( 3 )
    //       .search( $(this).val() )
    //       .draw();

    // });
    // $('.filter-email').keyup( function(){
    //   var table = $("#datatable-people-staff").DataTable();
    //     table.column( 4 )
    //       .search( $(this).val() )
    //       .draw();
    // });
    // $('.filter-status').keyup( function(){
    //   var table = $("#datatable-people-staff").DataTable();
    //     table.column( 5 )
    //       .search( $(this).val() )
    //       .draw();
    // });
});
