$(document).ready(function (e){
    $("#uploadForm").on('submit',(function(e){
    e.preventDefault();
    $.ajax({
    url: "add_student.php",
    type: "POST",
    data:  new FormData(this),
    contentType: false,
    cache: false,
    processData:false,
    success: function(data){
    $("#targetLayer").html(data);
    },
    error: function(){} 	        
    });
    }));
    });