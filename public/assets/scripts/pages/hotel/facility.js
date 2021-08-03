jQuery(document).ready(function () {
  $('.date-picker').datepicker({
    rtl: App.isRTL(),
    autoclose: true
  });

  new Datatable().init({
    src: $("#datatable-hotel-facility"),
    loadingMessage: 'Loading...',
    dataTable: {
      "processing": true,
      "serverside": true,
      "dom": "t<'row'<'col-sm-12 pull-right'p>>",
      "pageLength": 10,
      "ajax": ({
        "url": $("#datatable-hotel-facility").data('url'),
        "data": {
          "facility_type": 'hotel'
        }
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
        { data: 'name', name: 'name' },
        { data: 'remark', name: 'remark' },
        { data: 'action', name: 'action', orderable: false, searchable: false }
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

  $('.filter-name').keyup(function () {
    var table = $("#datatable-hotel-facility").DataTable();
    table.column(2)
      .search($(this).val())
      .draw();

  });
  $('.filter-code').keyup(function () {
    var table = $("#datatable-hotel-facility").DataTable();
    table.column(1)
      .search($(this).val())
      .draw();

  });
  $('.filter-phone').keyup(function () {
    var table = $("#datatable-hotel-facility").DataTable();
    table.column(3)
      .search($(this).val())
      .draw();

  });
  $('.filter-email').keyup(function () {
    var table = $("#datatable-hotel-facility").DataTable();
    table.column(4)
      .search($(this).val())
      .draw();
  });
  $('.filter-status').keyup(function () {
    var table = $("#datatable-hotel-facility").DataTable();
    table.column(5)
      .search($(this).val())
      .draw();
  });

  new Datatable().init({
    src: $("#datatable-room-facility"),
    loadingMessage: 'Loading...',
    dataTable: {
      "processing": true,
      "serverside": true,
      "dom": "t<'row'<'col-sm-12 pull-right'p>>",
      "pageLength": 10,
      "ajax": ({
        "url": $("#datatable-room-facility").data('url'),
        "data": {
          "facility_type": 'room'
        }
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
        { data: 'name', name: 'name' },
        { data: 'remark', name: 'remark' },
        { data: 'action', name: 'action', orderable: false, searchable: false }
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
});
