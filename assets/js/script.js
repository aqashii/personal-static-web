// contact form

$("#contact-form").on("submit",function(event){
    event.preventDefault();

    $("#contact-btn").html('');
    var formData = new FormData(this);
    var spinner = '<i class="fa fa-spinner fa-spin"></i>';
    console.log("clicked submit btn");
    $("#contact-btn").html(spinner);
    setTimeout(function() {
        $.ajax({
            url:"/contact.php",
            type:"post",
            data:formData,
            contentType:false,
            processData:false,
            beforeSend:function(){
                console.log(formData);
            },
            success:function(res){
                console.log("sucess = "+ res)
                $("#contact-form").hide();
                $("#messagebox").addClass("text-success").html("Message was sented success").fadeIn(2000);

                    setTimeout(function(){
                        window.location.reload();
                    },3000);
            },
            error: function(xhr, status, error) {
                // Handle error
                console.error('Error:', error);
            }
        })
    },2000);

  });
  
  