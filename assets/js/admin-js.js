$(function(){
  $('form#add-product').submit(function(e){
    e.preventDefault();
    if( $('#product-image').val() == '')
    {
      $('.alert.alert-danger').html('<p>Please upload image</p>').fadeIn();
    }
    else
    {
      $.ajax({
        url: base_url+"admin/products/add_product",
        method: "POST",
        data: new FormData(this),
        contentType: false,
        cache: false,
        processData: false,
        success:function(data){
          data = JSON.parse(data);
          html='';
          if(data.success){
            $.each( data, function( key, value ) {
              html += '<p>'+value+'</p>';
              $('.alert.alert-success').html(html).fadeIn();
            });
          }else{
            $.each( data, function( key, value ) {
              html += '<p>'+value+'</p>';
              $('.alert.alert-danger').html(html).fadeIn();
            });
          }



        }
      });
    }

  });


  $('.custom-file-input').on('change',function(){
    var fileName = $(this).val();
    $('.custom-file-label').text( fileName.split("\\").pop() );
  });
  $(".select-all-clr").click(function () {
      $(".form-check-input").prop('checked', $(this).prop('checked'));
  });

});
