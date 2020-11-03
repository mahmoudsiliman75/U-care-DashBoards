$(document).ready(function () {

  // SELECT PROFILE IMG
  $(".image").on('change',function() {
    if (this.files && this.files[0]) {
      var reader = new FileReader();

      reader.onload = function(e) {
        $('.image-preview').attr('src', e.target.result);
      }

      reader.readAsDataURL(this.files[0]);
    }
});

  // SHOW AND HIDE HUSDEND NAME FIELD IN RESERVATION PAGE
  $('#reservation-husbend-name').css('display' , 'none');

  $("#marital-status").on('change' , function() {
    let optionValue = $("#marital-status").children('option:checked').val();
    if(optionValue == 0) {
      $('#reservation-husbend-name').css('display' , "block");
    } else if (optionValue == 1) {
      $('#reservation-husbend-name').css('display' , "none");
    }
  }); 

  // SHOW AND HIDE PREGNANCY DETAILS FIELDS IN ADD NEW PATIENT PAGE
  // $('#gravida-container').css('display' , 'none');
  // $('#para-container').css('display' , 'none');
  // $('#abortion-container').css('display' , 'none');
  // $('#vaginal-container').css('display' , 'none');
  // $('#cs-container').css('display' , 'none');

  $('#pregnancy-status').on('change' , function(){
    let pregnancyOptionValue = $('#pregnancy-status').children('option:checked').val();
    // console.log(pregnancyOptionValue)
    if ( pregnancyOptionValue == 0 ) {
      $('#gravida-container').css('display' , 'block');
      $('#para-container').css('display' , 'block');
      $('#abortion-container').css('display' , 'block');
      $('#vaginal-container').css('display' , 'block');
      $('#cs-container').css('display' , 'block');
    } else if (pregnancyOptionValue == 1) {
      $('#gravida-container').css('display' , 'none');
      $('#para-container').css('display' , 'none');
      $('#abortion-container').css('display' , 'none');
      $('#vaginal-container').css('display' , 'none');
      $('#cs-container').css('display' , 'none');
    }

  });
});

