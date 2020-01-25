$(document).ready(function(){
    $('#status_post').submit(function(){
        var url="status.php";
        var data=$('#status_post').serialize();
        $.ajax({
            url:url,
            type:'POST',
            data:data,
            success:status_submitted,
            error:error_status,
        });
        return false;
    });              
});

var status_submitted=function(response){
    response=JSON.parse(response);
    
    if(response.success){
        var show="<div class='row'> <div class='r_nm' >"+response.name+"</div><div class='r_cnt'>"+response.status+"</div><div class='r_t'>"+response.time+"|"+response.date+"</div></div>";
        $('#show_status').append(show);
    }
    else{
        alert(response.messege);  
    }          
    
};

var error_status=function(){
    alert("something went wrong");
};
