function update_newsletter_input(input_val,object,default_val) {
	if (input_val == ' First Name' || input_val == ' Last Name' ||input_val == ' Email adress' ||input_val == ' Phone Number (optional)') {
		$(object).val('');
	}
	if (input_val == '') {
		$(object).val(default_val);
	}
}
function update_subscriber_name() {
	$('.name').val( $('.first_name').val() + ' ' + $('.last_name').val());
}
function switch_article_showcase_image(image_url) {
	$('#article .showcase .images .image img:visible').hide('slide', {direction:'right'}, 500, function() {
		$('#article .showcase .images .image img').attr('src', image_url);
		setTimeout(function() {
			$('#article .showcase .images .image img:hidden').show('slide', {direction:'right'}, 500);
		}, 500);
	});
}

function switch_article_showcase_thumb(mode, index, image_url, youtube_code) {
	$('#'+mode+'__thumb_'+index+':visible').hide('slide', {direction:'right'}, 200, function() {
		$('#'+mode+'__thumb_'+index).attr('src', image_url);
		setTimeout(function() {
			$('#'+mode+'__thumb_'+index+':hidden').show('slide', {direction:'right'}, 200);
			$('#'+mode+'__thumb_'+index).unbind('click');
			if (mode == 'images' && !/spacer_gray/.test(image_url)) {
				$('#'+mode+'__thumb_'+index).bind('click', function() {
					switch_article_showcase_image(image_url);
				});
			}
			if (mode == 'videos' && !/spacer_gray/.test(image_url)) {
				$('#'+mode+'__thumb_'+index).bind('click', function() {
					switch_article_showcase_video(youtube_code);
				});
			}
		}, 100);
	});
}

function switch_article_showcase_video(youtube_code) {
	//$('#article .showcase .videos .video:visible').hide('slide', {direction:'right'}, 500, function() {
		$('#article_showcase_youtube').html('');
		$('#article_showcase_youtube').flash(
	        { src:'http://www.youtube.com/v/'+youtube_code, width:398, height:290 },
	        { version:8 }
	    );
		//setTimeout(function() {
		//	$('#article .showcase .videos .video:hidden').show('slide', {direction:'right'}, 500);
		//}, 200);
	//});
}

function switch_article_showcase_file(file_url, file_name) {
	$('#'+mode+'__file_'+index+':visible').hide('slide', {direction:'right'}, 200, function() {
		$('#'+mode+'__file_'+index).html('<div class="file"><a href="'+file_url+'" target="_blank">'+file_name+'</a></div>');
		setTimeout(function() {
			$('#'+mode+'__file_'+index+':hidden').show('slide', {direction:'right'}, 200);
		}, 100);
	});
}




function article_showcase_page(href_url, mode, doc_id, lang_prefix, page_number, max_page) {
	
	if (mode == 'images') {
		if (page_number > 0 && page_number <= max_page) {
			
			if (page_number <= 1) {
				//$('.arrow_right').addClass('disabled_by_opacity');
				$('.arrow_right').addClass('disabled');
			} else {
				//$('.arrow_right').removeClass('disabled_by_opacity');
				$('.arrow_right').removeClass('disabled');
			}
			if (page_number >= max_page) {
				//$('.arrow_left').addClass('disabled_by_opacity');
				$('.arrow_left').addClass('disabled');
			} else {
				//$('.arrow_left').removeClass('disabled_by_opacity');
				$('.arrow_left').removeClass('disabled');
			}
			
			current_page = page_number;
			
			$.get(href_url, {'action':'get-article-showcase-media', 'mode':mode, 'doc-id':doc_id, 'lang-prefix':lang_prefix, 'page':page_number, 'limit':limit},
				function(data) {
					$.each(data, function(i, val) {
							// "data" is a JSON object where each cell holds the src of the image
							if (i == 0) {
								switch_article_showcase_image(href_url+val);
							}
							setTimeout(
								function() {
									//$('#debug').html('Index: '+i+' Val: '+val);
									switch_article_showcase_thumb(mode, i, href_url+val, '');
								}, i*100
							);
						}
					);
				},
				'json'
			);
		}
	}
	
	if (mode == 'videos') {
		if (page_number > 0 && page_number <= max_page) {
			
			if (page_number <= 1) {
				//$('.arrow_right').addClass('disabled_by_opacity');
				$('.arrow_right').addClass('disabled');
			} else {
				//$('.arrow_right').removeClass('disabled_by_opacity');
				$('.arrow_right').removeClass('disabled');
			}
			if (page_number >= max_page) {
				//$('.arrow_left').addClass('disabled_by_opacity');
				$('.arrow_left').addClass('disabled');
			} else {
				//$('.arrow_left').removeClass('disabled_by_opacity');
				$('.arrow_left').removeClass('disabled');
			}
			
			current_page = page_number;
			
			$.get(href_url, {'action':'get-article-showcase-media', 'mode':mode, 'doc-id':doc_id, 'lang-prefix':lang_prefix, 'page':page_number, 'limit':limit},
				function(data) {
					$.each(data, function(i, val) {
							if (i == 0) {
								switch_article_showcase_video(val.code);
							}
							setTimeout(
								function() {
									//$('#debug').html('Index: '+i+' Val: '+val);
									if (/spacer_gray/.test(val.thumb)) {
										switch_article_showcase_thumb(mode, i, href_url+val.thumb, '');
									} else {
										switch_article_showcase_thumb(mode, i, val.thumb, val.code);
									}
								}, i*100
							);
						}
					);
				},
				'json'
			);
		}
	}
	
	if (mode == 'audios') {
		if (page_number > 0 && page_number <= max_page) {
			
			if (page_number <= 1) {
				//$('.arrow_right').addClass('disabled_by_opacity');
				$('.arrow_right').addClass('disabled');
			} else {
				//$('.arrow_right').removeClass('disabled_by_opacity');
				$('.arrow_right').removeClass('disabled');
			}
			if (page_number >= max_page) {
				//$('.arrow_left').addClass('disabled_by_opacity');
				$('.arrow_left').addClass('disabled');
			} else {
				//$('.arrow_left').removeClass('disabled_by_opacity');
				$('.arrow_left').removeClass('disabled');
			}
			
			current_page = page_number;
			
			$.get(href_url, {'action':'get-article-showcase-media', 'mode':mode, 'doc-id':doc_id, 'lang-prefix':lang_prefix, 'page':page_number, 'limit':limit},
				function(data) {
					$.each(data, function(i, val) {
							setTimeout(
								function() {
									switch_article_showcase_file(mode, i, val);
								}, i*100
							);
						}
					);
				},
				'json'
			);
			
		}	
	}
	
	
}

function article_showcase_media(href_url, mode, doc_id, lang_prefix, page_number, max_page_local) {
	$('#article_showcase_youtube').html('');
	$('#article .showcase .button').removeClass('selected');
	if (current_mode != mode) {
		if (current_mode) {
			$('#article .showcase .'+current_mode+':visible').hide('slide', {direction:'up'}, 500);
		}
		setTimeout(function () {
			$('#article .showcase .'+mode+':hidden').show('slide', {direction:'up'}, 500, function() {
				article_showcase_page(href_url, mode, doc_id, lang_prefix, page_number, max_page_local);
				max_page = max_page_local;
				current_mode = mode;
				current_page = page_number;
				$('#button__'+mode).addClass('selected');
			});
		}, 500);
	}
}
var current_test = 0;
function switch_slidehosw_image(image_url) {
    $('.spot_box .slideshow_img:visible').hide();
    $('.spot_box .slideshow_img:hidden').attr('src', image_url);
    $('.spot_box img').show();	
}

var current_test = 0;

function switch_testemonial_text(old_test,new_test){
	$('#test__'+old_test).hide();
	$('#test__'+new_test).show();
}
/*
function switch_slidehosw_image_stopped(image_url) {
    $('.spot_box img:visible').hide('fast',  function() {
        $('.spot_box img:hidden').attr('src', image_url);
        setTimeout(function() {
            $('.spot_box img').show('fast');
        }, 1000);
    });
	
}
*/
var href_url = '';
function slideshow() {
	var old_test;
	var new_test;
	$.each(images, function(i, val) {
            // "data" is a JSON object where each cell holds the src of the image
			setTimeout(
				function() {
					if (i > 0 && (i%2) == 0) { 
						old_test = current_test;
						current_test++;
						if (current_test == test_counter) {
							current_test=0;
						}
						new_test = current_test;
						switch_testemonial_text(old_test,new_test);
					}
					switch_slidehosw_image(href_url+val);
					
					if (i == images.length-1) {
						setTimeout(function() {
							slideshow();
						},4000);
					}
					
				}, i*5000
			);
			
				
					
				
			
		}
    );
}

function testemonaial_handler() {
	var i = 0 ;
	while ( i <= test_counter) {
		var old_test = i;
		i++;
		if (i == test_counter) {
			i=0;
		}
		var new_test = i;
		setTimeout(
				function() {
				}, i*10000
			);
	}
}
function display_text(current_text_id) {
	$(' .current_displayed').hide();
	$(' .current_displayed').removeClass('current_displayed');
	$(current_text_id).show();
	$(current_text_id).addClass('current_displayed');
}
function set_selected(object){
	$(' .submenubar .selected').removeClass('selected');
	$(object).addClass('selected');
}
function handle_question(quest_id) { 
	if ( $('#question_'+quest_id).hasClass('opened') ) {
		$('#question_'+quest_id).removeClass('opened');
		$('#answer_'+quest_id).hide();
		$('#question_'+quest_id).addClass('closed');
	} else {
		$('#question_'+quest_id).removeClass('closed');
		$('#answer_'+quest_id).show();
		$('#question_'+quest_id).addClass('opened');
	}
	 
}
function display_results(new_page_id_to_display) {
	//alert('id to hide:' + $('.current_page_displayed').attr('id')); 
	$(' .current_page_displayed').hide();
	$(' .current_page_displayed').removeClass('current_page_displayed');
	$(new_page_id_to_display).show();
	$(new_page_id_to_display).addClass('current_page_displayed');
	//alert('new page to display: ' + new_page_id_to_display);
	//alert('id to hide take2:' + $('.current_page_displayed').attr('id')); 
}