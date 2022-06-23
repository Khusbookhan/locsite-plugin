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


 


