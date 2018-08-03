function scroll_to_class(element_class, removed_height) {
	var scroll_to = $(element_class).offset().top - removed_height;
	if($(window).scrollTop() != scroll_to) {
		$('html, body').stop().animate({scrollTop: scroll_to}, 0);
	}
}
function ucfirst(field) {
    field.value = field.value.substr(0, 1).toUpperCase() + field.value.substr(1);
}

function bar_progress(progress_line_object, direction) {
	var number_of_steps = progress_line_object.data('number-of-steps');
	var now_value = progress_line_object.data('now-value');
	var new_value = 0;
	if(direction == 'right') {
		new_value = now_value + ( 100 / number_of_steps );
	}
	else if(direction == 'left') {
		new_value = now_value - ( 100 / number_of_steps );
	}
	progress_line_object.attr('style', 'width: ' + new_value + '%;').data('now-value', new_value);
}
jQuery(document).ready(function() {

    $('form fieldset:first').fadeIn('slow');
    
    $('form input[type="text"], form input[type="password"], form textarea').on('focus', function() {
    	$(this).removeClass('input-error');
    });
    
    $('form .btn-next').on('click', function() {
    	var parent_fieldset = $(this).parents('fieldset');
    	var next_step = true;
    	var current_active_step = $(this).parents('form').find('.form-wizard.active');
    	var progress_line = $(this).parents('form').find('.progress-line');
    	
    	parent_fieldset.find('input[type="text"], input[type="password"], input[type="username"], input[type="email"], input[type="tel"], input[type="url"], textarea').each(function() {
    		if( $(this).val() == "" ) {
    			$(this).addClass('input-error');
    			next_step = false;
    		}
    		else {
    			$(this).removeClass('input-error');
    		}
    	});
    	
    	parent_fieldset.find('input[type="checkbox"]').each(function() {
    		if( $(this).prop("checked") == false ) {
    			$('.form-check-label').css("color","red");
    			next_step = false;
    		}
    		else {
    			$('.form-check-label').css("color","black");
    		}
    	});
    	
    	if( next_step ) {
    		parent_fieldset.fadeOut(400, function() {
    			current_active_step.removeClass('active').addClass('activated').next().addClass('active');
    			bar_progress(progress_line, 'right');
	    		$(this).next().fadeIn();
    			scroll_to_class( $('form'), 20 );
	    	});
    	}
    	
    });
    
    // previous step
    $('form .btn-previous').on('click', function() {
    	var current_active_step = $(this).parents('form').find('.form-wizard.active');
    	var progress_line = $(this).parents('form').find('.progress-line');
    	
    	$(this).parents('fieldset').fadeOut(400, function() {
    		current_active_step.removeClass('active').prev().removeClass('activated').addClass('active');
    		bar_progress(progress_line, 'left');
    		$(this).prev().fadeIn();
			scroll_to_class( $('form'), 20 );
    	});
    });
    
    $('form').on('submit', function(e) {
    	$(this).find('input[type="text"], input[type="password"], input[type="username"], input[type="email"], input[type="tel"], input[type="url"], textarea').each(function() {
    		if( $(this).val() == "" ) {
    			e.preventDefault();
    			$(this).addClass('input-error');
    		}
    		else {
    			$(this).removeClass('input-error');
    		}
    	});
    });

    $(document).ready(function() {
      $('#submit_btn').click(function() {
        // Triggered when the element with id 'submit_btn' is clicked.

        // Get the value of the field with 'firstname' id.
        var firstname = $('#nama').val();
        var address = $('#alamat').val();
        var city = $('#kota').val();
        var kec = $('#kec').val();
        var zip = $('#kodepos').val();
        var phone = $('#phone').val();
        var pel = $('input[name=no_pel]:checked', '#WPForm').val();
        var copied = kec.concat(", ").concat(city).concat(", ").concat(zip);
        // Put it as text in the element with 'confirm_firstname' id.
        $('#confirm_firstname').text(firstname);
        $('#confirm_address').text(address);
        $('#confirm_city').text(copied);
        $('#confirm_phone').text(phone);
        $('#confirm_pel').text(pel);

        // Hide form tab and show confirmation tab
        // $('#pers_tab').removeClass('active');
        // $('#conf_tab').addClass('active');

        // Prevent the form from submitting
        return false;
      });
    });

    $(function() {
    // Input radio-group visual controls
    $('.radio-group label').on('click', function(){
        $(this).removeClass('not-active').siblings().addClass('not-active');
        });
    });

}):