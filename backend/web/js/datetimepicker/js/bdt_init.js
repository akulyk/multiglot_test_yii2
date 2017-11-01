$(function(){
    $('#datetimepicker').datetimepicker({
        format: 'dd.mm.yyyy hh:ii:ss',

    }).on('changeDate', function(e){
       console.log(e);
    });
});