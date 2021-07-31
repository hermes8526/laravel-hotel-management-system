jQuery(document).ready(function () {
    $('.date-picker').datepicker({
        rtl: App.isRTL(),
        autoclose: true
    });

    $("#add-user").click(function () {
        showInputFirstMessage();
    });

    function showInputFirstMessage() {
        toastr.error('First, You have to save all agent information.', 'Error!');
    }
});