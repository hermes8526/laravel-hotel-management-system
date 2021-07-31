jQuery(document).ready(function () {
    $('.date-picker').datepicker({
        rtl: App.isRTL(),
        autoclose: true
    });

    var is_saved = $('input[name=is_saved]').val();

    if (is_saved == 1){
        toastr.success('Saved Successfully');        
    }

    $("#add-user").click(function (e) {
        e.preventDefault();

        $("#user-modal").modal('show');
    });

    $("#save-user").click(function () {
        if ($('#user-form').valid()) {
            $("#user-modal").modal('hide');
            App.blockUI({boxed: true});
            $.ajax({
                type: "POST",
                url: $('#user-form').data('url'),
                data: $('#user-form').serialize(),
                dataType: 'json',
                success: function (data) {
                    if (data.success) {
                        App.unblockUI();
                        $('#user-form')[0].reset();
                        $("#datatable-agent-user").dataTable()._fnAjaxUpdate();
                        toastr.success('Saved Successfully');       
                    }
                }
            });
        }
    });

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
                {data: 'agent_user_code', name: 'agent_user_code'},
                {data: 'actions', name: 'actions', orderable: false, searchable: false}
            ],
            "pagingType": "bootstrap_full_number",
        }
    });
});

function deleteAgentUser(c, name) {
    bootbox.confirm("Are you sure to delete this item '"+ name +"'?", function(result) {
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
                        $("#datatable-agent-user").dataTable()._fnAjaxUpdate();
                    }
                }
            });
        }
    });
};