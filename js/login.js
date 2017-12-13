$(document).on('ready',function(){

  //登入 檢查
  $('.login_form').on('submit',function(){
    $.ajax({
      type:'POST',
      url:'check_user.php',
      data:{
        user:$('#username').val(),
        pass:$('#password').val()
      },
      dataType:'html'
    }).done(function(data){
      //console.log(data);
        if(data =='yes'){
          window.location.href = 'index.php';
        }
    });
    return false;
  });

  //註冊頁面
  $('#register').on('click',function(){
    window.location.href = 'register.php';
  });
});
