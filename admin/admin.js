
$("#cat").hide();
$("#sub").hide();
$("#ques").hide();
$("#user").hide();
$("#feedback").hide();

$("#menu_cat").click(function() {
	$("#cat").show();
	$("#sub").hide();
	$("#ques").hide();
	$("#user").hide();
	$("#feedback").hide();

	$("#add_cat").hide();
});

$("#menu_sub").click(function() {
	$("#cat").hide();
	$("#sub").show();
	$("#ques").hide();
	$("#user").hide();
	$("#feedback").hide();

	$("#add_sub").hide();
});

$("#menu_ques").click(function() {
	$("#cat").hide();
	$("#sub").hide();
	$("#ques").show();
	$("#user").hide();
	$("#feedback").hide();

	$("#add_ques").hide();
});

$("#menu_user").click(function() {
	$("#cat").hide();
	$("#sub").hide();
	$("#ques").hide();
	$("#user").show();
	$("#feedback").hide();
});

$("#menu_feedback").click(function() {
	$("#cat").hide();
	$("#sub").hide();
	$("#ques").hide();
	$("#user").hide();
	$("#feedback").show();
});


$("#but_add_ques").click(function() {
	$("#add_ques").show();
});

$("#but_add_cat").click(function() {
	$("#add_cat").show();
});

$("#but_add_sub").click(function() {
	$("#add_sub").show();
});