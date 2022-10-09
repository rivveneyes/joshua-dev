$(document).ready(function() {
    $('#form').on('submit',function(){
    // Add text 'loading...' right after clicking on the submit button. 
    $('.form-notification').text('Loading...'); 
    var form = $(this);
    console.log(form.serialize());
    $.ajax({
         url: 'email.php',
         method: form.attr('method'),
         data: form.serialize(),
         success: function(result){
     if (result == 'success'){
         $('.form-notification').text('Message Sent!')}
     else {
        console.log(result)
         $('.form-notification').text('Error Sending email!');
     }
 }
});
// Prevents default submission of the form after clicking on the submit button. 
return false;   
});
});
