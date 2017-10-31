
$(function () {
    $('.question').on('click',function () {
    $(this).next('.answer').toggle();
   })
});