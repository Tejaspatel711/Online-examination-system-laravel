$(document).on('submit','.database_operation',function(){
    var url=$(this).attr('action');
    var data=$(this).serialize();
    $.post(url,data,function(fb){
        alert(fb)
    });
    return false;
});