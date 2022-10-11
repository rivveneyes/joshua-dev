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
        $('.error').removeClass('error')
     switch(result){
        case "fail name":
            $('.form-notification').text('Name can only contain letters,numbers,space.')
            $('#first-name').toggleClass('error')
        break;
        case "fail email":
            $('.form-notification').text('invalid email.')
            $('#email').toggleClass('error')
            break;
        case "fail message":
            $('.form-notification').text('please add your message');
                        $('#message').toggleClass('error')
            break;
        case "fail":
            $('.form-notification').text('error sending message try agian.');
                        $('#form').toggleClass('error')
            break;
        case "success":
            $('.form-notification').text('Message Sent!');
            $('#form').css('visibility',"hidden");
        break;
     }

 }
});
// Prevents default submission of the form after clicking on the submit button. 
return false;   
});
});

