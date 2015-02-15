
var $j = jQuery.noConflict();
$j(document).ready(function(event){

		//add placeholder for modern browsers
		$j("form span input").each(function() {
			$j(this).attr("placeholder", $j(this).attr("title"));       
		});  

		$j("form span textarea").each(function() {
			$j(this).attr("placeholder", $j(this).text());
			$j(this).text("")   
		});

		//liens reseaux sociaux
		$j("#footer p  a img").hover(
			function () {
				$j(this).css("opacity", "1");
			},
			function () {
				$j(this).css("opacity", "0.65");
			}

			);   


		$j("a.print").click(
			function () {
				window.print();
			}
		);


		//liens reseaux sociaux
		$j(".share a img").hover(
			function () {
				$j(this).css("opacity", "0.65");
			},
			function () {
				$j(this).css("opacity", "1");
			}

			);   

		//back to top
		$j('.pull-right [href^=#]').click(function (e) {
			e.preventDefault();
			$j('html, body').animate({scrollTop: '0px'}, 300);
		})


	    //hack location href
	    if (window.location.pathname.indexOf("/fr") != -1){
	    	$j(".select-language").val("fr");
	    }
	    else if (window.location.pathname.indexOf("/de") != -1){
	    	$j(".select-language").val("de");
	    }
	    else if (window.location.pathname.indexOf("/en") != -1){
	    	$j(".select-language").val("en");
	    }

	    $j(".dk_options_inner li").each(function(){

	    	$j(this).removeAttr('class');
	    	if (window.location.pathname.indexOf("/fr") != -1){
	    		$j(this).attr('class', 'dk_option_current');
	    		$j(".select-language").val("fr");
	    	}
	    	else if (window.location.pathname.indexOf("/de") != -1){
	    		$j(this).attr('class', 'dk_option_current');
	    	}
	    	else if (window.location.pathname.indexOf("/en") != -1){
	    		$j(this).attr('class', 'dk_option_current');
	    	}
	    });

	    //version mobile
	        // TODO IMPROVE
	//change language
	$j("#select-language-mobile").change(function (){
		var oldLocale;
		if (window.location.pathname.indexOf("/fr/") != -1){
			oldLocale = "fr";
		}
		else if (window.location.pathname.indexOf("/en/") != -1){
			oldLocale = "en";
		}
		else if (window.location.pathname.indexOf("/de/") != -1){
			oldLocale = "de";
		}
		else {
			oldLocale = "fr";

		}
		var host = "";
		if (oldLocale == "fr"){
			host = window.location.href.split(oldLocale)[1];
		} else {
			host = window.location.href.split(oldLocale)[0];
		}
		var locale = $j("#select-language-mobile").val();
		var query = "";
		if (oldLocale == "fr"){
			query = window.location.href.split(oldLocale)[2];
		} else {
			query = window.location.href.split(oldLocale)[1];
		}


		if (query != null) {
			window.location.href = host+locale+query;
		}
		else {
			window.location.href = host+locale+"/";
		}

	});
	    //fin version mobile

		//liens externes
		$j("#footer a.external, #footer a.notexternal").hover(
			function () {
				$j(this).css("background-color", "#EA8916");
			}, 
			function () {
				$j(this).css("background-color", "inherit");
			}
			);

		$j("#main a.external").hover(
			function () {
				$j(this).append($j("<img style='opacity:0.6;margin-left:5px' class='external' src='/wp-content/themes/path-proust-traduction/img/fleche_b.png'>"));
			}, 
			function () {
				$j(this).find("img:last").remove();
			}
			);


		$j("a.external").click(
			function () {
				$j(this).attr('target','_blank');
			}
			);

		// carousel HP
		var firstItem = $j('.carousel-item:first');
		
		firstItem.addClass('carousel-item-active');
		var firstImage = firstItem.find('.carousel-photo');
		
		firstImage.clone().prependTo($j('.carousel-photo-pane'));

		$j('.carousel-item').bind('mouseenter click', function(event) {

			var item = $j(this);

			if( item.hasClass('carousel-item-active') )
				return;

			$j('.carousel-item').removeClass('carousel-item-active');
			item.addClass('carousel-item-active');

			$j('.carousel-photo-pane').html('');
			var image = item.find('.carousel-photo');
			image.clone().prependTo($j('.carousel-photo-pane'));

		});

		$j('.default').dropkick({
			change: function (value, label) {
				var oldLocale;
				if (window.location.pathname.indexOf("/fr/") != -1){
					oldLocale = "fr";
				}
				else if (window.location.pathname.indexOf("/en/") != -1){
					oldLocale = "en";
				}
				else if (window.location.pathname.indexOf("/de/") != -1){
					oldLocale = "de";
				}
				else {
					oldLocale = "fr";

				}
				var host = "";
				if (oldLocale == "fr"){
					host = window.location.href.split(oldLocale)[1];
				} else {
					host = window.location.href.split(oldLocale)[0];
				}
				var locale =  value;
				var query = "";
				if (oldLocale == "fr"){
					query = window.location.href.split(oldLocale)[2];
				} else {
					query = window.location.href.split(oldLocale)[1];
				}


				if (query != null) {
					window.location.href = host+locale+query;
				}
				else {
					window.location.href = host+locale+"/";
				}


			}
		});

	}); 