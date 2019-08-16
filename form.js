const urlParams = new URLSearchParams(window.location.search);

var message;

if(urlParams.get('message')){
 message = urlParams.get('message');
    
};

if(message){
    if(message == 'error'){
        $('#error').show();
    } else {
        $('#messageShell').show();
        $('#contactForm').hide();
    }
}

$('#contactBtn').click(function(e){
    $('#contactForm').submit();
    e.preventDefault();
  });