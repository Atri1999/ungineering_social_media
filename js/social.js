$(document).ready(function (){
    $(".da").mouseover(function(){
        $(this).css("color","black");
        
    });
    $(".da").mouseout(function(){
        $(this).css("color","#373737");    
    });
    $(".lo").mouseover(function(){
        $(this).css("color","red");
    });
    $(".lo").mouseout(function(){
        $(this).css("color","#EF4C4D");    
    });
    $(".pr").mouseover(function(){
        $(this).css("color","red");
    });
    $(".pr").mouseout(function(){
        $(this).css("color","#EF4C4D");    
    });
    $("input").mouseover(function(){
        $(this).css("border","solid 1px red");
    });
    $("input").mouseout(function(){
        $(this).css("border","solid 1px #EF4C4D");    
    });
    
    $('.web_editprofile').submit(function() {
        var url = "web_edit_submit.php";
        var data = $('.web_editprofile').serialize();
        $.ajax({
            url: url,
            type: "POST",
            data: data,
            success: edit_success,
            error: on_error
        });
        return false;
    });
      

});

var edit_success = function (response) {
    response = JSON.parse(response);

    if (response.success) {
        alert(response.message);
    } 
};

var on_error = function () {
    alert("something went wrong");
};
