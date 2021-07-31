jQuery(document).ready(function () {
  $('.date-picker').datepicker({
    rtl: App.isRTL(),
    autoclose: true
  });

  new Datatable().init({
    src: $("#datatable-bookingNew"),
    loadingMessage: 'Loading...',
    dataTable: {
      "processing": true,
      "serverside": true,
      "dom": "t<'row'<'col-sm-12 pull-right'p>>",
      "pageLength": 10,
      "ajax": ({
        "url": $("#datatable-bookingNew").data('url'),
        "data": {
          "booking_type": 'new'
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
        {
          data: 'created_at', name: 'created_at', render: function (data) {
            return moment(data).format("DD/MM/YYYY ");
          }
        },
        { data: 'no', name: 'no' },
        { data: 'hotel_name', name: 'hotel_name' },
        { data: 'rooms', name: 'rooms' },
        {
          data: 'check_in', name: 'check_in', render: function (data) {
            return moment(data).format("DD/MM/YYYY ");
          }
        },
        {
          data: 'check_out', name: 'check_out', render: function (data) {
            return moment(data).format("DD/MM/YYYY ");
          }
        },
        { data: 'amount', name: 'amount' },
        { data: 'handle_by', name: 'handle_by' },
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
    var table = $("#datatable-bookingNew").DataTable();
    table.column(2)
      .search($(this).val())
      .draw();

  });
  $('.filter-code').keyup(function () {
    var table = $("#datatable-bookingNew").DataTable();
    table.column(1)
      .search($(this).val())
      .draw();

  });
  $('.filter-phone').keyup(function () {
    var table = $("#datatable-bookingNew").DataTable();
    table.column(3)
      .search($(this).val())
      .draw();

  });
  $('.filter-email').keyup(function () {
    var table = $("#datatable-bookingNew").DataTable();
    table.column(4)
      .search($(this).val())
      .draw();
  });
  $('.filter-status').keyup(function () {
    var table = $("#datatable-bookingNew").DataTable();
    table.column(5)
      .search($(this).val())
      .draw();
  });

  new Datatable().init({
    src: $("#datatable-bookingConfirmed"),
    loadingMessage: 'Loading...',
    dataTable: {
      "processing": true,
      "serverside": true,
      "dom": "t<'row'<'col-sm-12 pull-right'p>>",
      "pageLength": 10,
      "ajax": ({
        "url": $("#datatable-bookingConfirmed").data('url'),
        "data": {
          "booking_type": 'confirmed'
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
        {
          data: 'created_at', name: 'created_at', render: function (data) {
            return moment(data).format("DD/MM/YYYY ");
          }
        },
        { data: 'no', name: 'no' },
        { data: 'cfm_no', name: 'cfm_no' },
        { data: 'hotel_name', name: 'hotel_name'},
        { data: 'rooms', name: 'rooms' },
        {
          data: 'check_in', name: 'check_in', render: function (data) {
            return moment(data).format("DD/MM/YYYY ");
          }
        },
        {
          data: 'check_out', name: 'check_out', render: function (data) {
            return moment(data).format("DD/MM/YYYY ");
          }
        },
        { data: 'amount', name: 'amount' },
        { data: 'handle_by', name: 'handle_by' },
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

  new Datatable().init({
    src: $("#datatable-bookingCanceled"),
    loadingMessage: 'Loading...',
    dataTable: {
      "processing": true,
      "serverside": true,
      "dom": "t<'row'<'col-sm-12 pull-right'p>>",
      "pageLength": 10,
      "ajax": ({
        "url": $("#datatable-bookingCanceled").data('url'),
        "data": {
          "booking_type": 'canceled'
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
        {
          data: 'updated_at', name: 'updated_at', render: function (data) {
            return moment(data).format("DD/MM/YYYY ");
          }
        },
        { data: 'no', name: 'no' },
        { data: 'cfm_no', name: 'cfm_no' },
        { data: 'hotel_name', name: 'hotel_name'},
        { data: 'rooms', name: 'rooms' },
        {
          data: 'check_in', name: 'check_in', render: function (data) {
            return moment(data).format("DD/MM/YYYY ");
          }
        },
        {
          data: 'check_out', name: 'check_out', render: function (data) {
            return moment(data).format("DD/MM/YYYY ");
          }
        },
        { data: 'amount', name: 'amount' },
        { data: 'handle_by', name: 'handle_by' },
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

  new Datatable().init({
    src: $("#datatable-bookingQuotation"),
    loadingMessage: 'Loading...',
    dataTable: {
      "processing": true,
      "serverside": true,
      "dom": "t<'row'<'col-sm-12 pull-right'p>>",
      "pageLength": 10,
      "ajax": ({
        "url": $("#datatable-bookingQuotation").data('url'),
        "data": {
          "booking_type": 'quotation'
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
        {
          data: 'created_at', name: 'created_at', render: function (data) {
            return moment(data).format("DD/MM/YYYY ");
          }
        },
        { data: 'no', name: 'no' },
        { data: 'hotel_name', name: 'hotel_name' },
        { data: 'rooms', name: 'rooms' },
        {
          data: 'check_in', name: 'check_in', render: function (data) {
            return moment(data).format("DD/MM/YYYY ");
          }
        },
        {
          data: 'check_out', name: 'check_out', render: function (data) {
            return moment(data).format("DD/MM/YYYY ");
          }
        },
        { data: 'amount', name: 'amount' },
        { data: 'handle_by', name: 'handle_by' },
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
