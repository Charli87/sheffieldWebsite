<script type="text/javascript" src="https:/assets/js/jquery.min.js"></script>

<script type="text/javascript">

$(function(){
//get all tr elements in the table table forms and bind a function
// to their click event.
$('#tableForms').find('tr').bind('click',function(e){
//getall of this rows sibblings and hide their forms.
$(this).siblings().not(this).find('td.rowForm form').hide();
//now show the current row's form
$(this).find('td.rowForm form').show();
});
//now that the click is bound, hide all of the forms in the table
find('td.rowForm form').hide();

});

</script>