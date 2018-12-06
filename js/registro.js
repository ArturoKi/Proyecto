$('#btn_guardar').hide();
$('#pass2').keyup(function (e) {
    if ($('#pass1').val() == $('#pass2').val()) {
        $('#btn_guardar').show();
    } else {
        $('#btn_guardar').hide();
    }
})