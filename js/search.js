$(document).on('ready',function(){
  //查詢產品
  $('.serchproduct_form').on('submit',function(){
    $.ajax({
      type:'POST',
      url:'search.php',
      data:{
        kind:'product',
        p_name:$('#p_name').val()
      },
      dataType:'json'
    }).done(function(data){
      console.log(data);
      $('.tbody').html("");
      if (data == "無資料!") {
        tr_data = $('<tr>').append("<td colspan='4'>"+data+"</td>");
        $('.tbody').append(tr_data);
      }else {
        $.each(data,function(id,value){
          td_id = $('<td>').text(value.p_id);
          td_name = $('<td>').text(value.p_name);
          td_inventory = $('<td>').text(value.inventory);
          td_price = $('<td>').text(value.price);
          tr_data = $('<tr>').append(td_id,td_name,td_inventory,td_price);
          $('.tbody').append(tr_data);
        });
      }
    });
    return false;
  });
  //查詢供應商
  $('.serchsupplier_form').on('submit',function(){
    $.ajax({
      type:'POST',
      url:'search.php',
      data:{
        kind:'supplier',
        s_name:$('#s_name').val()
      },
      dataType:'json'
    }).done(function(data){
      //console.log(data);
      $('.tbody').html("");
      if (data == "無資料!") {
        tr_data = $('<tr>').append("<td colspan='3'>"+data+"</td>");
        $('.tbody').append(tr_data);
      }else {
        $.each(data,function(id,value){
          td_id = $('<td>').text(value.s_id);
          td_name = $('<td>').text(value.s_name);
          td_tel = $('<td>').text(value.s_tel);
          tr_data = $('<tr>').append(td_id,td_name,td_tel);
          $('.tbody').append(tr_data);
        });
      }
    });
    return false;
  });
  //庫存查詢
  $('.serchamount_form').on('submit',function(){
    $.ajax({
      type:'POST',
      url:'search.php',
      data:{
        kind:'amount',
        p_name:$('#p_name').val()
      },
      dataType:'json'
    }).done(function(data){
      //console.log(data);
      $('#p_name').val("");
      $('.tbody').html("");
      if (data =="無資料!") {
        tr_data = $('<tr>').append("<td colspan='4'>"+data+"</td>");
        $('.tbody').append(tr_data);
      }else{
        $.each(data,function(id,value){
          td_id = $('<td>').text(value.p_id);
          td_name = $('<td>').text(value.p_name);
          td_inventory = $('<td>').text(value.inventory);
          td_price = $('<td>').text(value.price);
          tr_data = $('<tr>').append(td_id,td_name,td_inventory,td_price);
          $('.tbody').append(tr_data);
        });
      }
    });
    return false;
  });
});
