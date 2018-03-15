$(document).on('ready',function(){
  i = 0;
  //輸入編號查詢產品
  $('#p_id').on('keyup',function(){
    if ($(this).val() == "") {
      clear();
    }else {
      $.ajax({
        type:'POST',
        url:'sales.php',
        data:{
          kind:'getproduct',
          p_id:$(this).val(),
        },
        dataType:'json'
      }).done(function(data){
        if (data == "no") {
          clear();
        }else {
          //console.log(data);
          $('#p_name').val(data.p_name);
          $('#price').val(data.price);
        }
      }).fail(function ( jqXHR, textStatus, errorThrown){
        //console.log(jqXHR+"--"+textStatus+"--"+errorThrown);
        clear();
      });
    }
  });
  //輸入數量計算價格
  $('#amount').on('keyup',function(){
    if (parseInt($('#amount').val()) <= 0 || $('#amount').val() == "" || $('#price').val() == "") {
      $('#subtotal').val("");
      $('#amount').val("");
    }else {
      $('#subtotal').val(parseInt($(this).val()) * parseInt($('#price').val()));
    }
  });
  //加入購買清單
  $('.sales_form').on('submit',function(){
    if ($('#p_id').val() != "" && $('#amount').val() != "" && $('#p_name').val() != "") {
      $.ajax({
        type:'POST',
        url:'sales.php',
        data:{
          kind:'cart',
          i:i,
          p_id:$('#p_id').val(),
          p_name:$('#p_name').val(),
          price:$('#price').val(),
          amount:$('#amount').val(),
          subtotal:$('#subtotal').val()
        },
        dataType:'json'
      }).done(function(data){
        //console.log(data);
        $('.tbody').html("");
        insertList(data);
        getTotal();
        i++;
        $('#p_id').val("");
        clear();
        $('#sales_btn').attr('disabled',false);
      });
    }else {
      alert("請輸入完整");
    }
    return false;
  });
  //結帳
  $('#sales_btn').on('click',function(){
    //判斷
    $.ajax({
      type:'POST',
      url:'sales.php',
      data:{
        kind:'sales',
      },
      dataType:'html'
    }).done(function(data){
      //console.log(data);
      if (data =='交易成功!') {
        $('.tbody').html("");
        $('.total').text(0);
        i = 0;
        $('#sales_btn').attr('disabled',true);
      }
      alert(data);
    });
  });
});
//依id刪除一筆清單資料
function del(id){
  $.ajax({
    type:'POST',
    url:'sales.php',
    data:{
      kind:'del',
      id:id,
    },
    dataType:'json'
  }).done(function(data){
    //console.log(data);
    $('.tbody').html("");
    insertList(data);
    getTotal();
    });
}
//清空輸入欄位
function clear(){
  $('#p_name').val("");
  $('#price').val("");
  $('#amount').val("");
  $('#subtotal').val("");
}
//計算總額
function getTotal(){
  total = 0;
  $('.tbody > tr').each(function () {
      var subtotal = $.trim($(this).find("td:eq(4)").text());
      //console.log(mWord); //1是抓取第二欄的文字
      total += parseInt(subtotal);
    });
    $('.total').text(total);
}
function insertList(data){
  $.each(data,function(id,value){
    td_id = $('<td>').text(value.p_id);
    td_name = $('<td>').text(value.p_name);
    td_price = $('<td>').text(value.price);
    td_amount = $('<td>').text(value.amount);
    td_subtotal = $('<td>').text(value.subtotal);
    btn = $('<button>').attr('class','btn btn-danger').attr('onclick','del('+id+')').text('X');
    td_btn = $('<td>').append(btn);
    tr_data = $('<tr>').attr('id',id).append(td_id,td_name,td_price,td_amount,td_subtotal,td_btn);
    $('.tbody').append(tr_data);
  });
}
