const base_url = "http://localhost/ucapan-ultah/";

enter_button();
function get_input_value() {
	const value = $("#input").val();
	return value;
}

function show_spinner() {
	$("#next").hide();
	$("#spinner").show();
}

function hide_spinner() {
	$("#spinner").hide();
	$("#next").show();
}

function enter_button() {
	$("#input").keyup(function (e) {
		if (e.keyCode === 13) {
			$("#next").click();
		}
	});
}

function user() {
	const value = get_input_value();
	if (value == "") {
		$("#alert").show();
	} else {
		$.ajax({
			url: base_url + "home/whouser/",
			method: "GET",
			data: { value: value },
			dataType: "JSON",

			beforeSend: function () {
				show_spinner();
			},
			success: function (result) {
				$("#bungkus").html(result);
				enter_button();
			},
		});
	}
}

function ultah() {
	const value = get_input_value();
	if (value == "") {
		$("#alert").show();
	} else {
		$.ajax({
			url: base_url + "home/tanya/",
			dataType: "JSON",

			beforeSend: function () {
				show_spinner();
			},
			success: function (result) {
				$("#bungkus").html(result);
			},
		});
	}
}

let count = 0;
function engga() {
	$("#emoji").html(
		`<lottie-player src="` +
			base_url +
			`public/animation/10112-angry.json" background="transparent" speed="1" style="width: 80px;" loop autoplay></lottie-player>`,
	);
	$("#ultahMessage").html(
		`<h5 id="ultahMessage" class="card-title mb-4">bohong dosa lohh, udah bohong ` +
			++count +
			` kali nih <br><br> ayo jawab jujur</h5>`,
	);
}

function bener() {
	$.ajax({
		url: base_url + "home/wish/",
		dataType: "JSON",

		beforSend() {
			show_spinner();
		},
		success: function (result) {
			let nav = $("#nav");
			nav.css("font-family", "CherrySwash-Regular");
			nav.html("Surprise!!!");
			$("#bungkus").html(result);
		},
	});
}

function thanks() {
	const value = get_input_value();
	if (value == "") {
		$("#alert").show();
	} else {
		$.ajax({
			url: base_url + "home/thanks/",
			dataType: "JSON",
			method: "POST",
			data: { content: value },

			beforeSend: function () {
				show_spinner();
			},
			success: function (result) {
				$("#bungkus").html(result);
				enter_button();
			},
		});
	}
}

function ucapan() {
	const value = get_input_value();
	if (value == "") {
		$("#alert").show();
	} else {
		$.ajax({
			url: base_url + "home/ucapan/",
			data: { value: value },
			dataType: "JSON",
			method: "POST",

			beforeSend: function () {
				show_spinner();
			},
			success: function (result) {
				$("#selamat").show();
				$("#selamat").html(result);
				hide_spinner();
			},
		});
	}
}
