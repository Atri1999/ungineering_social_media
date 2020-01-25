$(document).ready(function(){
    $('.second').mouseenter(function(){
        $(this).css('background-color','#ff0000');
    }); 
    $('.second').mouseleave(function(){
        $(this).css('background-color','#C9341C');
    });
     
    $('.first').mouseenter(function(){
        $(this).css('background-color','#FF0000').css('color','#FFFFFF');
    }); 
    $('.first').mouseleave(function(){
        $(this).css('background-color','#FFFFFF').css('color','#C9341C');
    }); 
    
    $('.smt').mouseenter(function(){
        $(this).css('background-color','#ff0000');
    }); 
    $('.smt').mouseleave(function(){
        $(this).css('background-color','#C9341C');
    });
    
      
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
