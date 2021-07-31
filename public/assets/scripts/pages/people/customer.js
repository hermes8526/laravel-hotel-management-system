jQuery(document).ready(function() {
    $('.date-picker').datepicker({
        rtl: App.isRTL(),
        autoclose: true
    });

  new Datatable().init({
    
        src: $("#datatable-people-customer"),
        loadingMessage: 'Loading...',
        dataTable: {
            "processing" : true,
            "serverside" : true,
            "dom": "t<'row'<'col-sm-12 pull-right'p>>",
            "pageLength": 10,
            "ajax": ({
                "url": $("#datatable-people-customer").data('url'),
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
                {data: 'code', name: 'code'},
                {data: 'name', name: 'name'},
                {data: 'mobile1', name: 'mobile1'},
                {data: 'email', name: 'email'},
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

    $('.filter-name').keyup( function(){
      var table = $("#datatable-people-customer").DataTable();
        table.column( 2 )
          .search( $(this).val() )
          .draw();

    });
    $('.filter-code').keyup( function(){
      var table = $("#datatable-people-customer").DataTable();
        table.column( 1 )
          .search( $(this).val() )
          .draw();

    });
    $('.filter-phone').keyup( function(){
      var table = $("#datatable-people-customer").DataTable();
        table.column( 3 )
          .search( $(this).val() )
          .draw();

    });
    $('.filter-email').keyup( function(){
      var table = $("#datatable-people-customer").DataTable();
        table.column( 4 )
          .search( $(this).val() )
          .draw();
    });
    $('.filter-status').keyup( function(){
      var table = $("#datatable-people-customer").DataTable();
        table.column( 5 )
          .search( $(this).val() )
          .draw();
    });
});
