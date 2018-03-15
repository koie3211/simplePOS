$(document).on('ready',function(){
  //建立退貨資料
  $('.export_form').on('submit',function(){
    $.ajax({
      type:'POST',
      url:'product.php',
      data:{
        kind:'export',
        p_id:$('#p_id').val(),
        amount:$('#amount').val(),
      },
      dataType:'html'
    }).done(function(data){
      console.log(data);
    });
    return false;
  });
});
