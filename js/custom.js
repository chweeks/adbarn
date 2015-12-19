$("#yesterday").hide();
$("#month").hide();
// $("#today").hide();

$('a[href="#today').click(function(){
	$("#today").show("slow");
	$("#yesterday").hide();
	$("#month").hide();
});
$('a[href=#yesterday]').click(function(){
	$("#yesterday").show("slow");
	$("#today").hide("slow");
	$("#month").hide();
});
$('a[href="#month"]').click(function(){
	$("#month").show("slow");
	$("#yesterday").hide("slow");
	$("#today").hide("slow");
});