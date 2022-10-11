$(document).ready(function() {
    $('#form').on('submit',function(){
    // Add text 'loading...' right after clicking on the submit button. 
    $('.form-notification').text('Loading...'); 
    var form = $(this);
    $.ajax({
         url: 'email.php',
         method: form.attr('method'),
         data: form.serialize(),
         success: function(result){
            console.log(result)
     switch(result){
        case "fail name":
            $('.form-notification').text('Name can only contain letters,numbers,space.')
        break;
        case "fail email":
            $('.form-notification').text('invalid email.')
            break;
        case "fail":
            $('.form-notification').text('error sending message try agian.')
            break;
        case "success":
            $('.form-notification').text('Message Sent!')
            $('#form').css('visibility',"hidden")
        break;
     }

 }
});
// Prevents default submission of the form after clicking on the submit button. 
return false;   
});
});
