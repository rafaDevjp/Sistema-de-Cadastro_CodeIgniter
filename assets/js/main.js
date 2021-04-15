

    /**** Animação do Scroll Suave *******/
$('.nav-item a[href^="#"]').on('click', function (e) {
    e.preventDefault();
    var id = $(this).attr('href'),
        targetOffset = $(id).offset().top;

    $('html, body').animate({
        scrollTop: targetOffset - 71
    }, 700);
});

/********Animaçao de Scroll da SETA  */
$('#seta a[href^="#"]').on('click', function (e) {
    e.preventDefault();
    var id = $(this).attr('href'),
        targetOffset = $(id).offset().top;

    $('html, body').animate({
        scrollTop: targetOffset - 71
    }, 700);
});

/******************Aminação da NAVBAR******************** */
$(window).on('scroll', function () {

    if ($(window).scrollTop() > 10) {
        $('#navegar').addClass('efeito');
    } else {
        $('#navegar').removeClass('efeito');
    }
});

// ativa o botão deletar quando check box estiver selecionado 
$("[name='check_deleta[]']").click(function () {
    var cont = $("[name='check_deleta[]']:checked").length;
    $("#aplica").prop("disabled", cont ? false : true);
});


// Fução seleciona todos os CheckBox
function marcarTodos(marcardesmarcar) {
    $('.marcar').each(function () {
        this.checked = marcardesmarcar;
    });
};








