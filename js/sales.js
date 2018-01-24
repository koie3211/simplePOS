$(document).on('ready',function(){
  //
  $('#p_id').on('keyup',function(){
    if ($(this).val() == "") {
      $('#p_name').val("");
      $('#price').val("");
      $('#inventory').val("");
      $('#subtotal').val("");
    }else {
      $.ajax({
        type:'POST',
        url:'sales.php',
        data:{
          kind:'getproduct',
          p_id:$(this).val(),
        },
        dataType:'html'
      }).done(function(data){
        if (data == "no") {
          $('#p_name').val("");
          $('#price').val("");
          $('#inventory').val("");
          $('#subtotal').val("");
        }else {
          data = JSON.parse(data);
          //console.log(data[0].p_name);
          $('#p_name').val(data[0].p_name);
          $('#price').val(data[0].price);
        }
        //$('#result').html(data);
      });
    }
    return false;
  });

  $('#inventory').on('keyup',function(){
    if ($('#price').val() == "") {
      $('#subtotal').val("");
      $('#inventory').val("");
    }else {
      $('#subtotal').val(parseInt($(this).val()) * parseInt($('#price').val()));
    }
  });

  $('.sales_form').on('submit',function(){
    $.ajax({
      type:'POST',
      url:'sales.php',
      data:{
        kind:'sales',
        p_id:$('#p_id').val(),
        inventory:$('#inventory').val(),
        subtotal:$('#subtotal').val()
      },
      dataType:'html'
    }).done(function(data){
      console.log(data);
      //$('#result').html(data);
    });
    return false;
  });
});
