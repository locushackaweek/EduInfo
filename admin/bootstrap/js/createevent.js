
  // date picker
 $(document).ready(function(){
      var date_input=$('input[name="date"]'); //our date input has the name "date"
      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
      var options={
        format: 'mm/dd/yyyy',
        container: container,
        todayHighlight: true,
        autoclose: true,
      };
      date_input.datepicker(options);
    })
 

 //popover for the reserve room 
 $(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
});


// for dismiss popover
$('.popover-dismiss').popover({
  trigger: 'focus'
})
