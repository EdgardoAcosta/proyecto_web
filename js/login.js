/**
 * Created by edgardoacosta on 14/04/17.
 */

$(document).ready(function () {


    toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": true,
        "progressBar": false,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "2000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }

    $('.enter').click(function () {
        toastr.success("Welcome");
    });
    $('#add-new-admin').click(function () {
        toastr.success("User added");
    });


    $('#signup').click(function () {
        $('#sign-in').hide();
        $('#sign-up').show('200');
    });
    $('#singin').click(function () {
        $('#sign-up').hide();
        $('#sign-in').show('200');
    });

});