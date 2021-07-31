jQuery(document).ready(function () {
    $('.date-picker').datepicker({
        rtl: App.isRTL(),
        autoclose: true
    });

    var is_saved = $('input[name=is_saved]').val();

    if (is_saved == 1){
        toastr.success('Saved Successfully');        
    }

    new Datatable().init({
        src: $("#datatable-agent-user"),
        loadingMessage: 'Loading...',
        dataTable: {
            "dom": "t<'row'<'col-sm-12 pull-right'p>>",
            "pageLength": 10,
            "ajax": {
                "url": $("#datatable-agent-user").data('url')
            },
            "bStateSave": false,
            "order": [],
            columns: [
                {
                    name: 'no',
                    render: function (data, type, full, meta) {
                        return meta.settings._iDisplayStart + meta.row + 1;
                    }
                },
                {data: 'name', name: 'name'},
                {data: 'username', name: 'username'},
                {data: 'password', name: 'password'},
                {data: 'email', name: 'email'},
                {data: 'agent_user_code', name: 'agent_user_code'}
            ],
            "pagingType": "bootstrap_full_number",
        }
    });
});
