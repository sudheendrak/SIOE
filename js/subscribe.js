$(document).ready(function() {
    $('#subscribe').on('click', function() {
        $("#subscribe").attr("disabled", "disabled");
        var email = $('#email').val();
        if(email!=""){
            $.ajax({
                url: "newsletter.php",
                type: "POST",
                data: {
                    email: email				
                },
                cache: false,
                success: function(dataResult){
                    var dataResult = JSON.parse(dataResult);
                    if(dataResult.statusCode==200){
                        $("#success").show();
                        $('#success').html('Successfully Subscribed to Email News Letters!');
                        $("#subscribe").removeAttr("disabled");
                        $('#email').val('');
                        console.log(`${email} Successfully submitted`); 						
                    }
                    else if(dataResult.statusCode==201){
                        alert("Error occured !");
                        $("#subscribe").removeAttr("disabled");
                        $('#email').val('');
                    }
                    else if(dataResult.statusCode==202){
                        alert(email + " is already Exists!");
                        $("#subscribe").removeAttr("disabled");
                        $('#email').val('');
                    }
                    
                },
                error:function(data){
                    if(data.statusCode==202){
                        alert(email + " is already Exists!");
                        $("#subscribe").removeAttr("disabled");
                        $('#email').val('');
                    }
                    else {
                        alert(email + " Not Submitted"); //===Show Error Message====
                        $("#subscribe").removeAttr("disabled");
                        $('#email').val('');
                    }
                    //$('#fupForm').find('#email').removeAttr('value');
                }
            });
        }
        else{
            alert('Please provide the Email ID !');
        }
    });
});