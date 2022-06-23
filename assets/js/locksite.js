jQuery(document).ready(function($){ 
   // alert('hi');
    
   $('#pages').hide(); //initially dropdown is hidden
$('#checkbox').change(function() { //change click to hidden

  if ($(this).is(':checked')) { //check if checkbox is checked
    $('#pages').show(); //show if checked
  } else {
    $('#pages').hide(); //hide if unchecked
  }

})

 jQuery("#submit").on("click", function(){
      var checkboxValue = jQuery("#checkbox").is("checked") ? 1 : 0;
     //alert('chb');
      jQuery.ajax({
           url:   front_ajax_object.ajaxurl,
          type: 'POST',
          data: {
          action: 'save_checkbox', keyword: checkboxValue
          },
          success:function(data) {
                console.log(data)
            }
      })
          //NOTE that 'action' MUST be the same as PHP function name you want to fire
          //you can do whatever you want here with your response
      })
         
      });
        


 


