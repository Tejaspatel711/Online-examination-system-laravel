$(document).on('submit','.database_operation',function(){
    var url=$(this).attr('action');
    var data=$(this).serialize();
    $.post(url,data,function(fb){
        var resp = $.parseJSON(fb);
        if(resp.status=='true')
        {
            alert(resp.message);
            setTimeout(function(){
                window.location.href=resp.reload;
            },1000);
        }
    })
    return false;
});