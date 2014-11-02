(function($) {

    // Given a jQuery collection containing at least 1 image, return true
    // if image wider than gallery box, false otherwise.
    function aspectRatio($image, $container) {
	var imageAspect = $image.width() / $image.height();
	var containerAspect = $container.width() / $container.height();
	if (imageAspect > containerAspect) {
	    return true;
	}
	return false;
    }
    
    $(function() {
	$('.gallery').each(function(i, defaultGallery) {
	    var $defaultGallery = $(defaultGallery);
	    var $images = $defaultGallery.find('img');
	    var $gallery = $('<div>').addClass('custom-gallery clearfix');
	    $gallery.css({
		'position': 'relative',
		'margin': '0 auto',
		'width': '500px',
		'height': '300px',
		'overflow': 'hidden'
	    });
	    var $slider = $('<div>').addClass('slider');
	    $images.each(function(i, image) {
		var $image = $(image);
		var $newImage = $('<img>').attr('src', $image.attr('src'));
		var newImageStyle = {
		    'position': 'absolute',
		    'top': '50%',
		    'left': '50%',
		    'transform': 'translateX(-50%) translateY(-50%)'
		};
		if (aspectRatio($image, $gallery)) {
		    newImageStyle['width'] = '100%';
		    newImageStyle['height'] = 'auto';
		} else {
		    newImageStyle['height'] = '100%';
		    newImageStyle['width'] = 'auto';
		}
		$newImage.css(newImageStyle);
		var $newLink = $('<a>').attr({
		    'href': $image.parent().attr('href'),
		    'target': '_blank'
		});
		$newLink.append($newImage);
		var $slide = $('<div>').addClass('slider-slide').append($newLink);
		$slide.css({
		    'float': 'left',
		    'position': 'relative',
		    'height': '100%',
		    'width': 100 / $images.length + '%'
		});
		$slider.append($slide);
		$slider.css({
		    'position': 'relative',
		    'left': '0',
		    'height': '100%',
		    'width': 100 * $images.length + '%',
		    'transition': 'left 0.5s cubic-bezier(.83,.08,.26,.89)'
		});
		$gallery.append($slider);
	    });
	    $defaultGallery.css({
		'display': 'none'
	    });

	    // slider left control
	    var $left = $('<div>').addClass('slider-control-left').html('<i class="fa fa-angle-left" style="display:block;position:absolute;top:50%;right:0;transform:translateY(-50%);font-size:8rem;cursor:pointer;"></i>');
	    $left.css({
		'position': 'absolute',
		'left': '0',
		'top': '0',
		'height': '100%',
		'width': '30px',
	    });

	    // slider right control
	    var $right = $('<div>').addClass('slider-control-right').html('<i class="fa fa-angle-right" style="display:block;position:absolute;top:50%;left:0;transform:translateY(-50%);font-size:8rem;cursor:pointer;"></i>');
	    $right.css({
		'position': 'absolute',
		'right': '0',
		'top': '0',
		'height': '100%',
		'width': '30px'
	    });

	    // add controls to slider
	    $gallery.append($left, $right);

	    // add slider to DOM
	    $defaultGallery.after($gallery);

	    $gallery = $defaultGallery.next();
	    $defaultGallery.remove();
	    $gallery.find('.fa-angle-right').on('click', function() {
		var $icon = $(this);
		var $container = $icon.closest('.custom-gallery');
		if (parseInt($container.find('.slider').css('left'), 10) > - $container.width() * ($images.length - 1)) {
		    $container.find('.slider').css({
			'left': '-=' + $container.width()
		    });
		}
	    });

	    $gallery.find('.fa-angle-left').on('click', function() {
		var $icon = $(this);
		var $container = $icon.closest('.custom-gallery');
		if (parseInt($container.find('.slider').css('left'), 10) < 0) {
		    $container.find('.slider').css({
			'left': '+=' + $container.width()
		    });
		}
	    });
	});
    });
})(jQuery);
