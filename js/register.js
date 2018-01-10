
$(document).on('ready',function(){

  //檢查帳號
  $('#username').on('keyup',function(){
    if ($('#username').val() == '') {
      $('#username').removeClass('is-invalid').removeClass("is-valid");
      $('#check-username').val('false');
    }else {
      $.ajax({
        type :'post',
        url :'check_username.php',
        data : {
          username : $('#username').val()
        },
        dataType : 'html'
      }).done(function(data){
        //console.log(data);
        if(data == 'yes'){
          $('#username').removeClass('is-invalid').addClass("is-valid");
          $('#check-username').val('true');
        }else {
          $('#username').removeClass('is-valid').addClass("is-invalid");
          $('#check-username').val('false');
        }
      });
    }

  });

  //檢查身分證
    //來源 : http://jaichang2008.pixnet.net/blog/post/25344846-javascript-%E8%BA%AB%E4%BB%BD%E8%AD%89%E5%AD%97%E8%99%9F%E9%A9%97%E8%AD%89
  $('#ssd').on('keyup',function(){

    id = $(this).val().toUpperCase();
    tab = "ABCDEFGHJKLMNPQRSTUVXYWZIO";
    A1 = new Array (1,1,1,1,1,1,1,1,1,1,2,2,2,2,2,2,2,2,2,2,3,3,3,3,3,3 );
    A2 = new Array (0,1,2,3,4,5,6,7,8,9,0,1,2,3,4,5,6,7,8,9,0,1,2,3,4,5 );
    Mx = new Array (9,8,7,6,5,4,3,2,1,1);

    if ( id.length != 10 ) {
      $('#ssd').removeClass('is-valid').addClass("is-invalid");
      $('#check-ssd').val('false');
      return false;
    }
    i = tab.indexOf( id.charAt(0) );
    if ( i == -1 ) {
      $('#ssd').removeClass('is-valid').addClass("is-invalid");
      $('#check-ssd').val('false');
      return false;
    }
    sum = A1[i] + A2[i]*9;

    for ( i=1; i<10; i++ ) {
      v = parseInt( id.charAt(i) );
      if ( isNaN(v) ) {
        $('#ssd').removeClass('is-valid').addClass("is-invalid");
        $('#check-ssd').val('false');
        return false;
      }
      sum = sum + v * Mx[i];
    }
    if ( sum % 10 != 0 ){
      $('#ssd').removeClass('is-valid').addClass("is-invalid");
      $('#check-ssd').val('false');
      return false;
    }else {
      $('#ssd').removeClass('is-invalid').addClass("is-valid");
      $('#check-ssd').val('true');
      return true;
    }

  });


  //檢查email
    //來源 : http://www.webpage.idv.tw/maillist/maillist4/pro/05/email1.htm
  $('#email').on('keyup',function(){
    email = $(this).val();
    if (email.search(/^[\w-]+(\.[\w-]+)*@[\w-]+(\.[\w-]+)+$/)!=-1) {
      $('#email').removeClass('is-invalid').addClass("is-valid");
      $('#check-email').val('true');
    } else {
      $('#email').removeClass('is-valid').addClass("is-invalid");
      $('#check-email').val('false');
    }
  });



  //檢查密碼強度
    // 0~10分：不合格（弱）
    // 11~20分：一般
    // 21~30分：中
    // 31~40分：強
    // 41~50分：安全

    // 作者：helloleo
    // 链接：http://www.jianshu.com/p/85cf76daa9e8
    // 來源：简书
    // 著作权归作者所有。商业转载请联系作者获得授权，非商业转载请注明出处。
  $('#password').on('keyup',function(){

    pwd = $(this).val();
    score = 0;
    regexArr = ['[0-9]', '[a-z]', '[A-Z]', '[\\W_]'];
    repeatCount = 0;
    prevChar = '';

      //check length
    var len = pwd.length;
    score += len > 18 ? 18 : len;

    //check type
    for (var i = 0, num = regexArr.length; i < num; i++) { if (eval('/' + regexArr[i] + '/').test(pwd)) score += 4; }

    //bonus point
    for (var i = 0, num = regexArr.length; i < num; i++) {
      if (pwd.match(eval('/' + regexArr[i] + '/g')) && pwd.match(eval('/' + regexArr[i] + '/g')).length >= 2) score += 2;
      if (pwd.match(eval('/' + regexArr[i] + '/g')) && pwd.match(eval('/' + regexArr[i] + '/g')).length >= 5) score += 2;
    }

    //deduction
    for (var i = 0, num = pwd.length; i < num; i++) {
      if (pwd.charAt(i) == prevChar) repeatCount++;
      else prevChar = pwd.charAt(i);
    }
    score -= repeatCount * 1;
    $('#check-pass').val(score);
    if (score < 11) {
      $('#level').text('不合格（弱）');
    }else if (score < 21) {
      $('#level').text('一般');
    }else if (score < 31) {
      $('#level').text('中');
    }else if (score <41) {
      $('#level').text('強');
    }else {
      $('#level').text('安全');
    }
    return score;
  });

  //檢查密碼是否相同
  $('#repassword').on('keyup',function(){
    if($(this).val() != $('#password').val()){
      $('#repassword').removeClass('is-valid').addClass("is-invalid");
      $('#check-password').val('false');
    }else {
      $('#repassword').removeClass('is-invalid').addClass("is-valid");
      $('#check-password').val('true');
    }
  });

  //送出表單
  $('.register_form').on('submit',function(){

    if($('#name').val() != '' &&
       $('#check-ssd').val() == 'true' &&
       $('#birthday').val() != '' &&
       $('#check-email').val() == 'true' &&
       $('#check-username').val() == 'true' &&
       $('#check-pass').val() > 18 &&
       $('#check-password').val() == 'true'){
         $.ajax({
           type:'POST',
           url:'add_user.php',
           data:{
             name:$('#name').val(),
             ssd:$('#ssd').val(),
             birth:$('#birthday').val(),
             email:$('#email').val(),
             user:$('#username').val(),
             pass:$('#password').val()
           },
           dataType:'html'
         }).done(function(data){
            console.log(data);
            if(data =='yes'){
              alert('註冊成功!');
              window.location.href = 'login.php';
             }
         });

    }else{
      alert('資料不完整');
    }
    return false;
  });


});
