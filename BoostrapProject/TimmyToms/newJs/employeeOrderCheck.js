$(document).ready(function () {
    $("#loadMenuContentEmployee").click(function(event) {

        $.get("php/employee_ajax_order.html", function(data){
            $('#moreMenuContent').append(data);
        });
        event.preventDefault();
        $(this).hide();
    }) ;
});
