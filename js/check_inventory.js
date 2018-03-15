$(document).on('ready',function(){
  //查詢總庫存
    $.ajax({
      type:'POST',
      url:'search.php',
      data:{
        kind:'check_inventory'
      },
      dataType:'json'
    }).done(function(data){
      console.log(data);
      $.each(data,function(id,value){
        td_id = $('<td>').text(value.p_id);
        td_name = $('<td>').text(value.p_name);
        td_inventory = $('<td>').text(value.inventory);
        td_safty_inventory = $('<td>').text(value.safty_inventory);
        td_price = $('<td>').text(value.price);
        tr_data = $('<tr>').append(td_id,td_name,td_inventory,td_safty_inventory,td_price);
        $('.tbody').append(tr_data);
      });
    });
    return false;
});
