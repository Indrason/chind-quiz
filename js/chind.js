		$("#detLog").hide();
		$("#detSign").hide();
		$("#butLog").click(function() {
			$("#LogSign").hide();
			$("#detSign").hide();
			$("#detLog").show();
	
		});
		$("#butSig").click(function() {
			$("#LogSign").hide();
			$("#detLog").hide();
			$("#detSign").show();
		});
		$(".closels").click(function() {
			$("#detLog").hide();
			$("#detSign").hide();
			$("#LogSign").show();
		});

setInterval(sliding, 3000);

var pics = ["1.jpg","2.jpg","3.jpg","4.jpg","5.jpg","6.jpg","7.jpg","8.jpg","9.jpg"];
var nums = 0;

function sliding() {
	var loc = document.getElementById("img");
	nums++;
	if(nums >= pics.length) {
		nums = 0;
	}
	loc.src = "images/"+pics[nums];
}

function validLog() {
	var u1 = document.getElementById('unamel');
	var p1 = document.getElementById('passl');

	if(u1.value == NULL || p1.value == NULL) {
		alert('Please enter complete details');
		u1.value = "";
		p1.value = "";
		u1.focus();
		return false;
	} 
	else {
		return true;
	}
}