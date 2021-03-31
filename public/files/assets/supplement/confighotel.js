
//jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches

// evenements pour next
$(".next").on('click',function() {
	//if(animating) return false;
	animating = true;

	/* var errors = [];
	var error = []; */

	current_fs = $(this).parent();
	next_fs = $(this).parent().next();

	/* current_fs.find("input")
        .each(function() {
			console.log("--"+$(this).attr("name"));
		});*/
		// console.log($(".contacts").tagsinput('items'));

		 // console.log($(".contacts").val());
		// console.log($('.typech').find(":selected").text());
		 // console.log($(".typech").val().length);
		 //console.log($(".typech").val());
		 // console.log($(".typech").val()[0]);
        // console.log(errors.length);
	//quand tout est ok
		
			//activate next step on progressbar using the index of next_fs
			$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

			//show the next fieldset
			next_fs.show();
			//hide the current fieldset with style
			current_fs.animate({opacity: 0}, {
				step: function(now, mx) {
					//as the opacity of current_fs reduces to 0 - stored in "now"
					//1. scale current_fs down to 80%
					scale = 1 - (1 - now) * 0.2;
					//2. bring next_fs from the right(50%)
					left = (now * 50)+"%";
					//3. increase opacity of next_fs to 1 as it moves in
					opacity = 1 - now;
					current_fs.css({
						'transform': 'scale('+scale+')',
						'position': 'absolute'
					});
					next_fs.css({'left': left, 'opacity': opacity});
				},
				duration: 800,
				complete: function(){
					current_fs.hide();
					animating = false;
				},
				//this comes from the custom easing plugin
				//easing: 'easeInOutBack'
			});
		
});


$(".next1").on('click',function() {
	//if(animating) return false;
	animating = true;

	var errors = [];
	var error = []; 

	current_fs = $(this).parent();
	next_fs = $(this).parent().next();

	/* current_fs.find("input")
	.each(function() {
		console.log("--"+$(this).attr("name"));
	});*/
	// console.log($(".contacts").tagsinput('items'));

		/* console.log($(".typech").val());
		console.log($(".qualitech").val());*/
	// console.log($('.typech').find(":selected").text());
		// console.log($(".typech").val().length);
		// console.log($(".typech").val());

		// gestion des erreurs ppour les multi input et select

		if($(".contacts").val() == "") {
		errors.push($(".contacts").val());
		}

		if (errors.length > 0) {
		new PNotify({
			title: 'Champs vides',
			text: 'Erreur remplissez le champ contacts',
			icon: 'icofont icofont-info-square',
			type: 'error'
		});
		return;
		}
	// console.log(errors.length);
	//quand tout est ok
	// mettre tous les 5 select la en required
		//activate next step on progressbar using the index of next_fs
	$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

		//show the next fieldset
		next_fs.show();
		//hide the current fieldset with style
		current_fs.animate({opacity: 0}, {
			step: function(now, mx) {
				//as the opacity of current_fs reduces to 0 - stored in "now"
				//1. scale current_fs down to 80%
				scale = 1 - (1 - now) * 0.2;
				//2. bring next_fs from the right(50%)
				left = (now * 50)+"%";
				//3. increase opacity of next_fs to 1 as it moves in
				opacity = 1 - now;
				current_fs.css({
					'transform': 'scale('+scale+')',
					'position': 'absolute'
				});
				next_fs.css({'left': left, 'opacity': opacity});
			},
			duration: 800,
			complete: function(){
				current_fs.hide();
				animating = false;
			},
			//this comes from the custom easing plugin
			//easing: 'easeInOutBack'
		});

});

				
$(".next2").on('click',function() {
	//if(animating) return false;
	animating = true;

	var errors = [];
	var error = []; 

	current_fs = $(this).parent();
	next_fs = $(this).parent().next();

	/* current_fs.find("input")
	.each(function() {
		 console.log("--"+$(this).attr("name"));
	}); */
	// console.log($(".contacts").tagsinput('items'));

		// console.log($(".typech").val());
		// console.log($(".qualitech").val());
	// console.log($('.typech').find(":selected").text());
		// console.log($(".typech").val().length);
		// console.log($(".typech").val());

		// gestion des erreurs ppour les multi input et select

		if($(".typech").val().length == 0) {
		errors.push($(".typech").val());
		}

		if($(".qualitech").val().length == 0) {
		errors.push($(".qualitech").val());
		}

		if (errors.length > 0) {
		new PNotify({
			title: 'Champs vides',
			text: 'Erreur remplissez le type et qualite de chambres',
			icon: 'icofont icofont-info-square',
			type: 'error'
		});
		return;
		}
	// console.log(errors.length);
	//quand tout est ok
	// mettre tous les 5 select la en required
		//activate next step on progressbar using the index of next_fs
	$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

		//show the next fieldset
		next_fs.show();
		//hide the current fieldset with style
		current_fs.animate({opacity: 0}, {
			step: function(now, mx) {
				//as the opacity of current_fs reduces to 0 - stored in "now"
				//1. scale current_fs down to 80%
				scale = 1 - (1 - now) * 0.2;
				//2. bring next_fs from the right(50%)
				left = (now * 50)+"%";
				//3. increase opacity of next_fs to 1 as it moves in
				opacity = 1 - now;
				current_fs.css({
					'transform': 'scale('+scale+')',
					'position': 'absolute'
				});
				next_fs.css({'left': left, 'opacity': opacity});
			},
			duration: 800,
			complete: function(){
				current_fs.hide();
				animating = false;
			},
			//this comes from the custom easing plugin
			//easing: 'easeInOutBack'
		});

});

						
$(".next3").on('click',function() {
	//if(animating) return false;
	animating = true;

	var errors = [];
	var error = []; 

	current_fs = $(this).parent();
	next_fs = $(this).parent().next();

	current_fs.find("input")
	.each(function() {
	// console.log("--"+$(this).attr("name"));
	});
	// console.log($(".contacts").tagsinput('items'));

	// console.log($(".typech").val());
	// console.log($(".qualitech").val());
	// console.log($('.typech').find(":selected").text());
	// console.log($(".typech").val().length);
	// console.log($(".typech").val());

	// gestion des erreurs ppour les multi input et select

	if($(".modepaiement").val().length == 0) {
	errors.push($(".modepaiement").val());
	}

	if($(".typereser").val().length == 0) {
	errors.push($(".typereser").val());
	}

	console.log("cc "+ errors.length);
	if (errors.length > 0) {
	new PNotify({
	title: 'Champs vides',
	text: 'Erreur remplissez le mode de paiement et le type de reservation',
	icon: 'icofont icofont-info-square',
	type: 'error'
	});
	return;
	}
	// console.log(errors.length);
	//quand tout est ok
	// mettre tous les 5 select la en required
	//activate next step on progressbar using the index of next_fs
	$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

	//show the next fieldset
	next_fs.show();
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
	step: function(now, mx) {
		//as the opacity of current_fs reduces to 0 - stored in "now"
		//1. scale current_fs down to 80%
		scale = 1 - (1 - now) * 0.2;
		//2. bring next_fs from the right(50%)
		left = (now * 50)+"%";
		//3. increase opacity of next_fs to 1 as it moves in
		opacity = 1 - now;
		current_fs.css({
			'transform': 'scale('+scale+')',
			'position': 'absolute'
		});
		next_fs.css({'left': left, 'opacity': opacity});
	},
	duration: 800,
	complete: function(){
		current_fs.hide();
		animating = false;
	},
	//this comes from the custom easing plugin
	//easing: 'easeInOutBack'
	});

});
									
//evenements pour submit
	$(".submit").on('click', function() {
		//if(animating) return false;
		animating = true;
		var errors = [];
		var error = [];
		var pwd1 = [];
		var pwd2 = [];

		current_fs = $(this).parent();
		next_fs = $(this).parent().next();

		current_fs.find("input[type='password']")
			.each(function() {
			if ($(this).attr("name")=="password") {
				pwd1.push($(this).val());
			}
			if ($(this).attr("name")=="cpassword") {
				pwd2.push($(this).val());
			}
			});

			if (pwd1[0] != pwd2[0]) {
			new PNotify({
				title: 'Passwords différents',
				text: 'Erreur vos deux champs passwords ne sont pas identiques',
				icon: 'icofont icofont-info-square',
				type: 'error'
			});
			errors.push($(this).attr("name"));
			return;
			}
			
		current_fs.find("input")
			.each(function() {
			if ($(this).val() == "" || $(this).val() == null) {
				errors.push($(this).attr("name"));
			}
			});

			if (errors.length > 0) {
			new PNotify({
				title: 'Champs vides',
				text: 'Erreur remplissez tous vos champs importants',
				icon: 'icofont icofont-info-square',
				type: 'error'
			});
			return;
			}

		//quand tout est ok
		if(errors.length == 0) {
			// console.log("gg");
			return SignUp();
		}
	});

$(".previous").on('click',function() {
	if(animating) return false;
	animating = true;

	current_fs = $(this).parent();
	previous_fs = $(this).parent().prev();

	//de-activate current step on progressbar
	$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

	//show the previous fieldset
	previous_fs.show();
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale previous_fs from 80% to 100%
			scale = 0.8 + (1 - now) * 0.2;
			//2. take current_fs to the right(50%) - from 0%
			left = ((1-now) * 50)+"%";
			//3. increase opacity of previous_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'left': left});
			previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
		},
		duration: 800,
		complete: function(){
			current_fs.hide();
			animating = false;
		},
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});


