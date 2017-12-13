
$(document).on('ready',function(){
  $('#username').on('keyup',function(){
    if ($('#username').val() == '') {
      $('#username').removeClass('is-invalid').removeClass("is-valid");
    }else {
      $.ajax({
        type :'post',
        url :'check_username.php',
        data : {
          username : $('#username').val()
        },
        dataType : 'html'
      }).done(function(data){
        if(data == 'yes'){
          $('#username').removeClass('is-invalid').addClass("is-valid");
        }else {
          $('#username').removeClass('is-valid').addClass("is-invalid");
        }
      });
    }

  });
});
