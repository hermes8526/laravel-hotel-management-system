jQuery(document).ready(function() {
    $('.date-picker').datepicker({
        rtl: App.isRTL(),
        autoclose: true
    });

    var is_saved = $('input[name=is_saved]').val();

    if (is_saved == 1){
        toastr.success('Saved Successfully');        
    }

    new Datatable().init({
        src: $("#datatable-people-agent"),
        loadingMessage: 'Loading...',
        dataTable: {
            "dom": "t<'row'<'col-sm-12 pull-right'p>>",
            "pageLength": 10,
            "ajax": {
                "url": $("#datatable-people-agent").data('url')
            },
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
                {data: 'city_id', name: 'city_id'},
                {data: 'credit_limit', name: 'credit_limit'},
                {data: 'commission', name: 'commission'},
                {data: 'status', name: 'status'},
                {data: 'action', name: 'action', orderable: false, searchable: false}
            ],
            "pagingType": "bootstrap_full_number",
        }
    });
});

function deleteAgent(c, code) {
    bootbox.confirm("Are you sure to delete this item '"+ code +"'?", function(result) {
        if (result)
        { 
            var control = $(c);
            App.blockUI({boxed: true});
            $.ajax({
                type: "POST",
                url: control.data('url'),
                data: {},
                dataType: 'json',
                success: function (data) {
                    if (data.success) {
                        App.unblockUI();
                        $("#datatable-people-agent").dataTable()._fnAjaxUpdate();
                    }
                }
            });
        }
    });
};