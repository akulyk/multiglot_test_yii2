$(function(){
    $('.datetimepicker').datetimepicker({
        format: 'DD.MM.YYYY HH:mm:ss',
        sideBySide: true
     //   defaultDate: new Date(),
    //    locale: 'ru'

    }).on('changeDate', function(e){
       console.log(e);
    });
});