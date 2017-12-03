$(function() {

$('.button_passo1').click(function() {
$('.passo1').show();
$('.passo2, .passo3').hide();
});

$('.button_passo2').click(function() {
$('.passo2').show();
$('.passo1, .passo3').hide();
});

$('.button_passo3').click(function() {
$('.passo3').show();
$('.passo1, .passo2').hide();
});


});