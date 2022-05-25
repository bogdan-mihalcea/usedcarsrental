$(document).ready(function(){
 
  $('#datepicker').datepicker({
   format: "dd-mm-yyyy",
   startDate: new Date(),
   endDate: '+14d'
  });
});