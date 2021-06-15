
// Todays Date
$(function() {
	var interval = setInterval(function() {
		var momentNow = moment();
		$('#today-date').html(momentNow.format('DD') + ' ' + ' '
		+ momentNow.format('- dddd').substring(0, 12));
	}, 100);
});


$(function() {
	var interval = setInterval(function() {
		var momentNow = moment();
		$('#todays-date').html(momentNow.format('DD MMMM YYYY'));
	}, 100);
});




// Loading
$(function() {
	$("#loading-wrapper").fadeOut(3000);
});



// Textarea characters left
$(function() {
	$('#characterLeft').text('140 characters left');
	$('#message').keydown(function () {
		var max = 140;
		var len = $(this).val().length;
		if (len >= max) {
			$('#characterLeft').text('You have reached the limit');
			$('#characterLeft').addClass('red');
			$('#btnSubmit').addClass('disabled');            
		} 
		else {
			var ch = max - len;
			$('#characterLeft').text(ch + ' characters left');
			$('#btnSubmit').removeClass('disabled');
			$('#characterLeft').removeClass('red');            
		}
	});
});



// Todo list
$('.todo-body').on('click', 'li.todo-list', function() {
	$(this).toggleClass('done');
});



// Tasks
(function($) {
	var checkList = $('.task-checkbox'),
	toDoCheck = checkList.children('input[type="checkbox"]');
	toDoCheck.each(function(index, element) {
		var $this = $(element),
		taskItem = $this.closest('.task-block');
		$this.on('click', function(e) {
			taskItem.toggleClass('task-checked');
		});
	});
})(jQuery);



// Tasks Important Active
$('.task-actions').on('click', '.important', function() {
	$(this).toggleClass('active');
});



// Tasks Important Active
$('.task-actions').on('click', '.star', function() {
	$(this).toggleClass('active');
});



// Countdown
$(document).ready(function(){
  countdown();
  setInterval(countdown, 1000);
  function countdown () {
  var now = moment(), // get the current moment
    // May 28, 2013 @ 12:00AM
    then = moment([2020, 10, 7]),
    // get the difference from now to then in ms
    ms = then.diff(now, 'milliseconds', true);
    // If you need years, uncomment this line and make sure you add it to the concatonated phrase
    /*
    years = Math.floor(moment.duration(ms).asYears());
    then = then.subtract('years', years);
    */
    // update the duration in ms
    ms = then.diff(now, 'milliseconds', true);
    // get the duration as months and round down
    // months = Math.floor(moment.duration(ms).asMonths());
 
    // // subtract months from the original moment (not sure why I had to offset by 1 day)
    // then = then.subtract('months', months).subtract('days', 1);
    // update the duration in ms
    ms = then.diff(now, 'milliseconds', true);
    days = Math.floor(moment.duration(ms).asDays());
 
    then = then.subtract(days, 'days');
    // update the duration in ms
    ms = then.diff(now, 'milliseconds', true);
    hours = Math.floor(moment.duration(ms).asHours());
 
    then = then.subtract(hours, 'hours');
    // update the duration in ms
    ms = then.diff(now, 'milliseconds', true);
    minutes = Math.floor(moment.duration(ms).asMinutes());
 
    then = then.subtract(minutes, 'minutes');
    // update the duration in ms
    ms = then.diff(now, 'milliseconds', true);
    seconds = Math.floor(moment.duration(ms).asSeconds());
    
    // concatonate the variables
    diff = '<div class="num">' + days + ' <span class="text"> Days Left</span></div>';
    $('#daysLeft').html(diff);
  }
 
});






// Bootstrap JS ***********

// Tooltip
$(function () {
	$('[data-toggle="tooltip"]').tooltip()
})

$(function () {
	$('[data-toggle="popover"]').popover()
})









// Custom Sidebar JS
jQuery(function ($) {

	// Dropdown menu
	$(".sidebar-dropdown > a").click(function () {
		$(".sidebar-submenu").slideUp(200);
		if ($(this).parent().hasClass("active")) {
			$(".sidebar-dropdown").removeClass("active");
			$(this).parent().removeClass("active");
		} else {
			$(".sidebar-dropdown").removeClass("active");
			$(this).next(".sidebar-submenu").slideDown(200);
			$(this).parent().addClass("active");
		}
	});



	//toggle sidebar
	$("#toggle-sidebar").click(function () {
		$(".page-wrapper").toggleClass("toggled");
	});



	// Pin sidebar on click
	$("#pin-sidebar").click(function () {
		if ($(".page-wrapper").hasClass("pinned")) {
			// unpin sidebar when hovered
			$(".page-wrapper").removeClass("pinned");
			$("#sidebar").unbind( "hover");
		} else {
			$(".page-wrapper").addClass("pinned");
			$("#sidebar").hover(
				function () {
					console.log("mouseenter");
					$(".page-wrapper").addClass("sidebar-hovered");
				},
				function () {
					console.log("mouseout");
					$(".page-wrapper").removeClass("sidebar-hovered");
				}
			)
		}
	});



	// Pinned sidebar
	$(function() {
		$(".page-wrapper").hasClass("pinned");
		$("#sidebar").hover(
			function () {
				console.log("mouseenter");
				$(".page-wrapper").addClass("sidebar-hovered");
			},
			function () {
				console.log("mouseout");
				$(".page-wrapper").removeClass("sidebar-hovered");
			}
		)
	});




	// Toggle sidebar overlay
	$("#overlay").click(function () {
		$(".page-wrapper").toggleClass("toggled");
	});



	// Added by Srinu 
	$(function(){
		// When the window is resized, 
		$(window).resize(function(){
			// When the width and height meet your specific requirements or lower
			if ($(window).width() <= 768){
				$(".page-wrapper").removeClass("pinned");
			}
		});
		// When the window is resized, 
		$(window).resize(function(){
			// When the width and height meet your specific requirements or lower
			if ($(window).width() >= 768){
				$(".page-wrapper").removeClass("toggled");
			}
		});
	});


});



//Employees Master Validation

$(document).ready(function () {
    $('#employeecode_valid').hide();	
    let employeecodeerror = true;
    $('#employeecode').keyup(function () {			
        employeecode();
    });
    
    function employeecode() {
        let employeecodeValue = $('#employeecode').val();
        if (employeecodeValue == '') {
        $('#employeecode_valid').show();
        employeecodeerror = false;
            return false;
        }	
        else {
            $('#employeecode_valid').hide();
            employeecodeerror = true;	
        }
        }
// employeename
		$('#employeename_valid').hide();	
		let employeenameerror = true;
		$('#employeename').keyup(function () {			
			employeename();
		});
		function employeename() {
			let employeenameValue = $('#employeename').val();
			if (employeenameValue == '') {
			$('#employeename_valid').show();
			employeenameerror = false;
				return false;
			}	
			else {
				$('#employeename_valid').hide();
				employeenameerror = true;	
			}
			}
	// date of birth
	$('#dateofbirth_valid').hide();	
	let dateofbirtherror = true;
	$('#dateofbirth').keyup(function () {			
		dateofbirth();
	});
	function dateofbirth() {
		let dateofbirthValue = $('#dateofbirth').val();
		if (dateofbirthValue == '') {
		$('#dateofbirth_valid').show();
		dateofbirtherror = false;
			return false;
		}	
		else {
			$('#dateofbirth_valid').hide();
			dateofbirtherror = true;	
		}
		}


	// gender
	$('#gender_valid').hide();	
	let gendererror = true;
	$('#gender').keyup(function () {			
		gender();
	});
	function gender() {
		let genderValue = $('#gender').val();
		if (genderValue == '') {
		$('#gender_valid').show();
		gendererror = false;
			return false;
		}	
		else {
			$('#gender_valid').hide();
			gendererror = true;	
		}
		}


	// date of birth
	$('#emailid_valid').hide();	
	let emailiderror = true;
	$('#emailid').keyup(function () {			
		emailid();
	});
	function emailid() {
		let emailidValue = $('#emailid').val();
		if (emailidValue == '') {
		$('#emailid_valid').show();
		emailiderror = false;
			return false;
		}	
		else {
			$('#emailid_valid').hide();
			emailiderror = true;	
		}
		}


// designation
$('#designation_valid').hide();	
let designationerror = true;
$('#designation').keyup(function () {			
	designation();
});
function designation() {
	let designationValue = $('#designation').val();
	if (designationValue == '') {
	$('#designation_valid').show();
	designationerror = false;
		return false;
	}	
	else {
		$('#designation_valid').hide();
		designationerror = true;	
	}
	}


	
// employeenumber
$('#employeenumber_valid').hide();	
let employeenumbererror = true;
$('#employeenumber').keyup(function () {			
	employeenumber();
});
function employeenumber() {
	let employeenumberValue = $('#employeenumber').val();
	if (employeenumberValue == '') {
	$('#employeenumber_valid').show();
	employeenumbererror = false;
		return false;
	}	
	else {
		$('#employeenumber_valid').hide();
		employeenumbererror = true;	
	}
	}


	// dateofjoining
$('#dateofjoining_valid').hide();	
let dateofjoiningerror = true;
$('#dateofjoining').keyup(function () {			
	dateofjoining();
});
function dateofjoining() {
	let dateofjoiningValue = $('#dateofjoining').val();
	if (dateofjoiningValue == '') {
	$('#dateofjoining_valid').show();
	dateofjoiningerror = false;
		return false;
	}	
	else {
		$('#dateofjoining_valid').hide();
		dateofjoiningerror = true;	
	}
	}



		// contact
$('#contact_valid').hide();	
let contacterror = true;
$('#contact').keyup(function () {			
	contact();
});
function contact() {
	let contactValue = $('#contact').val();
	if (contactValue == '') {
	$('#contact_valid').show();
	contacterror = false;
		return false;
	}	
	else {
		$('#contact_valid').hide();
		contacterror = true;	
	}
	}




// contact
$('#contact_valid').hide();	
let contacterror = true;
$('#contact').keyup(function () {			
	contact();
});
function contact() {
	let contactValue = $('#contact').val();
	if (contactValue == '') {
	$('#contact_valid').show();
	contacterror = false;
		return false;
	}	
	else {
		$('#contact_valid').hide();
		contacterror = true;	
	}
	}

	


// expertise
$('#expertise_valid').hide();	
let expertiseerror = true;
$('#expertise').keyup(function () {			
	expertise();
});
function expertise() {
	let expertiseValue = $('#expertise').val();
	if (expertiseValue == '') {
	$('#expertise_valid').show();
	expertiseerror = false;
		return false;
	}	
	else {
		$('#expertise_valid').hide();
		expertiseerror = true;	
	}
	}

		


// starrating
$('#starrating_valid').hide();	
let starratingerror = true;
$('#starrating').keyup(function () {			
	starrating();
});
function starrating() {
	let starratingValue = $('#starrating').val();
	if (starratingValue == '') {
	$('#starrating_valid').show();
	starratingerror = false;
		return false;
	}	
	else {
		$('#starrating_valid').hide();
		starratingerror = true;	
	}
	}


			


// expertises
$('#expertises_valid').hide();	
let expertiseserror = true;
$('#expertises').keyup(function () {			
	expertises();
});
function expertises() {
	let expertisesValue = $('#expertises').val();
	if (expertisesValue == '') {
	$('#expertises_valid').show();
	expertiseserror = false;
		return false;
	}	
	else {
		$('#expertises_valid').hide();
		expertiseserror = true;	
	}
	}

	
			


// hra
$('#hra_valid').hide();	
let hraerror = true;
$('#hra').keyup(function () {			
	hra();
});
function hra() {
	let hraValue = $('#hra').val();
	if (hraValue == '') {
	$('#hra_valid').show();
	hraerror = false;
		return false;
	}	
	else {
		$('#hra_valid').hide();
		hraerror = true;	
	}
	}


	// conveyance
$('#conveyance_valid').hide();	
let conveyanceerror = true;
$('#conveyance').keyup(function () {			
	conveyance();
});
function conveyance() {
	let conveyanceValue = $('#conveyance').val();
	if (conveyanceValue == '') {
	$('#conveyance_valid').show();
	conveyanceerror = false;
		return false;
	}	
	else {
		$('#conveyance_valid').hide();
		conveyanceerror = true;	
	}
	}

	
	// allowance
$('#allowance_valid').hide();	
let allowanceerror = true;
$('#allowance').keyup(function () {			
	allowance();
});
function allowance() {
	let allowanceValue = $('#allowance').val();
	if (allowanceValue == '') {
	$('#allowance_valid').show();
	allowanceerror = false;
		return false;
	}	
	else {
		$('#allowance_valid').hide();
		allowanceerror = true;	
	}
	}



		// incentivepercent
$('#incentivepercent_valid').hide();	
let incentivepercenterror = true;
$('#incentivepercent').keyup(function () {			
	incentivepercent();
});
function incentivepercent() {
	let incentivepercentValue = $('#incentivepercent').val();
	if (incentivepercentValue == '') {
	$('#incentivepercent_valid').show();
	incentivepercenterror = false;
		return false;
	}	
	else {
		$('#incentivepercent_valid').hide();
		incentivepercenterror = true;	
	}
	}



	// grosspay
$('#grosspay_valid').hide();	
let grosspayerror = true;
$('#grosspay').keyup(function () {			
	grosspay();
});
function grosspay() {
	let grosspayValue = $('#grosspay').val();
	if (grosspayValue == '') {
	$('#grosspay_valid').show();
	grosspayerror = false;
		return false;
	}	
	else {
		$('#grosspay_valid').hide();
		grosspayerror = true;	
	}
	}



		// tds
$('#tds_valid').hide();	
let tdserror = true;
$('#tds').keyup(function () {			
	tds();
});
function tds() {
	let tdsValue = $('#tds').val();
	if (tdsValue == '') {
	$('#tds_valid').show();
	tdserror = false;
		return false;
	}	
	else {
		$('#tds_valid').hide();
		tdserror = true;	
	}
	}

			// pf
$('#pf_valid').hide();	
let pferror = true;
$('#pf').keyup(function () {			
	pf();
});
function pf() {
	let pfValue = $('#pf').val();
	if (pfValue == '') {
	$('#pf_valid').show();
	pferror = false;
		return false;
	}	
	else {
		$('#pf_valid').hide();
		pferror = true;	
	}
	}



	
			// esi
$('#esi_valid').hide();	
let esierror = true;
$('#esi').keyup(function () {			
	esi();
});
function esi() {
	let esiValue = $('#esi').val();
	if (esiValue == '') {
	$('#esi_valid').show();
	esierror = false;
		return false;
	}	
	else {
		$('#esi_valid').hide();
		esierror = true;	
	}
	}

			// lones
			$('#lones_valid').hide();	
			let loneserror = true;
			$('#lones').keyup(function () {			
				lones();
			});
			function lones() {
				let lonesValue = $('#lones').val();
				if (lonesValue == '') {
				$('#lones_valid').show();
				loneserror = false;
					return false;
				}	
				else {
					$('#lones_valid').hide();
					loneserror = true;	
				}
				}

		// salaryadvance
		$('#salaryadvance_valid').hide();	
		let salaryadvanceerror = true;
		$('#salaryadvance').keyup(function () {			
			salaryadvance();
		});
		function salaryadvance() {
			let salaryadvanceValue = $('#salaryadvance').val();
			if (salaryadvanceValue == '') {
			$('#salaryadvance_valid').show();
			salaryadvanceerror = false;
				return false;
			}	
			else {
				$('#salaryadvance_valid').hide();
				salaryadvanceerror = true;	
			}
			}

		// totaldeduction
		$('#totaldeduction_valid').hide();	
		let totaldeductionerror = true;
		$('#totaldeduction').keyup(function () {			
			totaldeduction();
		});
		function totaldeduction() {
			let totaldeductionValue = $('#totaldeduction').val();
			if (totaldeductionValue == '') {
			$('#totaldeduction_valid').show();
			totaldeductionerror = false;
				return false;
			}	
			else {
				$('#totaldeduction_valid').hide();
				totaldeductionerror = true;	
			}
			}
	
			// basic
		$('#basic_valid').hide();	
		let basicerror = true;
		$('#basic').keyup(function () {			
			basic();
		});
		function basic() {
			let basicValue = $('#basic').val();
			if (basicValue == '') {
			$('#basic_valid').show();
			basicerror = false;
				return false;
			}	
			else {
				$('#basic_valid').hide();
				basicerror = true;	
			}
			}

			$('#submit').click(function () {	
				employeecode();dateofjoining();
				employeename();contact();salaryadvance();
				dateofbirth();expertise();totaldeduction();
			    gender();starrating();lones();
				emailid();expertises();esi();
				designation();employeenumber();
				hra();conveyance();allowance();pf();
				incentivepercent();grosspay();tds();
				basic();
					if ( 
				totaldeductionerror == true &&  employeecodeerror==true &&  basicerror==true 
				&&  dateofjoiningerror==true  && employeenameerror==true
				&&  contacterror==true
				&&  salaryadvanceerror==true
				&&  dateofbirtherror==true
				&&  expertiseerror==true
				&&  gendererror==true
				&&  starratingerror==true
				&&  loneserror==true
				&&  emailiderror==true
				&&  expertiseserror==true
				&&  esierror==true
				&&  designationerror==true
				&&  employeenumbererror==true
				&&  hraerror==true
				&&  conveyanceerror==true
				&&  allowanceerror==true
				&&  pferror==true
				&&  incentivepercenterror==true
				&&  grosspayerror==true
				&&  tdserror==true

			 )
			  {
				return true;
			  } 
			  else 
			  {
				return false;
			  }
	
	});


	});
