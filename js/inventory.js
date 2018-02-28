$(document).on('ready',function(){
  //查詢總庫存
    $.ajax({
      type:'POST',
      url:'search.php',
      data:{
        kind:'inventory'
      },
      dataType:'json'
    }).done(function(data){
      //console.log(data);
      $.each(data,function(id,value){
        td_id = $('<td>').text(value.p_id);
        td_name = $('<td>').text(value.p_name);
        td_s_name = $('<td>').text(value.s_name);
        td_s_id = $('<td>').text(value.s_id);
        td_inventory = $('<td>').text(value.inventory);
        td_price = $('<td>').text(value.price);
        tr_data = $('<tr>').append(td_id,td_name,td_s_name,td_s_id,td_inventory,td_price);
        $('.tbody').append(tr_data);
      });
    });
    return false;
});
