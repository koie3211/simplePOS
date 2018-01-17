$(document).on('ready',function(){
  //新增產品
  $('.addproduct_form').on('submit',function(){
    $.ajax({
      type:'POST',
      url:'add.php',
      data:{
        kind:'product',
        p_name:$('#p_name').val(),
        inventory:$('#inventory').val(),
        amount:$('#amount').val(),
        price:$('#price').val(),
        safty_inventory:$('#safty_inventory').val(),
        sid:$('#s_id option:selected').val(),
        cid:$('#c_id option:selected').val()
      },
      dataType:'html'
    }).done(function(data){
      //console.log(data);
      if (data == 'yes') {
        alert("新增成功");
        window.location.href = 'welcome.php';
      }
    });
    return false;
  });
  //新增類別
  $('.addcategory_form').on('submit',function(){
    $.ajax({
      type:'POST',
      url:'add.php',
      data:{
        kind:'category',
        c_name:$('#c_name').val()
      },
      dataType:'html'
    }).done(function(data){
      //console.log(data);
      if (data == 'yes') {
        alert("新增成功");
        window.location.href = 'welcome.php';
      }
    });
    return false;
  });
  //新增供應商
  $('.addsupplier_form').on('submit',function(){
    $.ajax({
      type:'POST',
      url:'add.php',
      data:{
        kind:'supplier',
        s_name:$('#s_name').val(),
        s_tel:$('#s_tel').val()
      },
      dataType:'html'
    }).done(function(data){
      //console.log(data);
      if (data == 'yes') {
        alert("新增成功");
        window.location.href = 'welcome.php';
      }
    });
    return false;
  });
});
