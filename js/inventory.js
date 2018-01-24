$(document).on('ready',function(){
  //查詢總庫存
    $.ajax({
      type:'POST',
      url:'search.php',
      data:{
        kind:'inventory'
      },
      dataType:'html'
    }).done(function(data){
      //console.log(data);
      $('#inventory_result').html(data);
    });
    return false;
});
