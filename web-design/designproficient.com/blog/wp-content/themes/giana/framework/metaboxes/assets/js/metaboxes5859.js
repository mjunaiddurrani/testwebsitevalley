( function( $ ) {
	"use strict";

	// Tabs
	$( 'div#mthemes-metabox ul.wp-tab-bar a').on('click', function() {
		var navLi = $( '#mthemes-metabox ul.wp-tab-bar li' ),
			data = $( this ).data( 'tab' ),
			panels = $( '#mthemes-metabox div.wp-tab-panel');
		$( navLi ).removeClass( 'wp-tab-active' );
		$( panels ).hide();
		$( data ).show();
		$( this ).parent( 'li' ).addClass( 'wp-tab-active' );
		return false;
	} );

	// Color picker
	$('div#mthemes-metabox .mthemes-mb-color-field').wpColorPicker();

	// Upload button
	if ( typeof wp.media !== 'undefined' ) {
		var _custom_media = true,
		_orig_send_attachment = wp.media.editor.send.attachment;
		$('.mt-mb-upload-media').on('click', function(e) {
			var send_attachment_bkp = wp.media.editor.send.attachment;
			var button = $(this);
			var id = button.attr('id').replace('_button', '');
			_custom_media = true;
				wp.media.editor.send.attachment = function(props, attachment){
				if ( _custom_media ) {
					$("#"+id).val(attachment.url);
				} else {
					return _orig_send_attachment.apply( this, [props, attachment] );
				};
			}
			wp.media.editor.open(button);
			return false;
		});
		$('.add_media').on('click', function() {
			_custom_media = false;
		});
	}

	// Gallery
	jQuery(document).ready(function( $ ){

		// Uploading files
		var image_gallery_frame;
		var $image_gallery_ids = $('#mt_gallery_images_container').find('.mt_gallery_images_ids');
		var $gallery_images = $('#mt_gallery_images_container ul.mt_gallery_images');

		$('.add_gallery_images').on( 'click', 'a', function( event ) {

			var $el = $(this);
			var attachment_ids = $image_gallery_ids.val();

			event.preventDefault();

			// If the media frame already exists, reopen it.
			if ( image_gallery_frame ) {
				image_gallery_frame.open();
				return;
			}

			// Create the media frame.
			image_gallery_frame = wp.media.frames.downloadable_file = wp.media({
				// Set the title of the modal.
				title: $( this ).text(),
				button: {
					text: $( this ).attr( 'data-btn-text' ),
				},
				multiple: true
			});

			// When an image is selected, run a callback.
			image_gallery_frame.on( 'select', function() {

				var selection = image_gallery_frame.state().get('selection');

				selection.map( function( attachment ) {

					attachment = attachment.toJSON();

					if ( attachment.id ) {
						attachment_ids = attachment_ids ? attachment_ids + "," + attachment.id : attachment.id;

						 $gallery_images.append('\
							<li class="image" data-attachment_id="' + attachment.id + '">\
								<div class="attachment-preview">\
									<div class="thumbnail">\
										<img src="' + attachment.url + '" />\
									</div>\
								   <a href="#" class="delete" title="Remove image">&times;</a>\
								</div>\
							</li>');

					}

				} );

				$image_gallery_ids.val( attachment_ids );
			});

			// Finally, open the modal.
			image_gallery_frame.open();
		});

		// Image ordering
		$gallery_images.sortable({
			items: 'li.image',
			cursor: 'move',
			scrollSensitivity:40,
			forcePlaceholderSize: true,
			forceHelperSize: false,
			helper: 'clone',
			opacity: 0.65,
			placeholder: 'mt-metabox-sortable-placeholder',
			start:function(event,ui){
				ui.item.css('background-color','#eee');
			},
			stop:function(event,ui){
				ui.item.removeAttr('style');
			},
			update: function(event, ui) {
				var attachment_ids = '';

				$('#mt_gallery_images_container ul li.image').css('cursor','default').each(function() {
					var attachment_id = jQuery(this).attr( 'data-attachment_id' );
					attachment_ids = attachment_ids + attachment_id + ',';
				});

				$image_gallery_ids.val( attachment_ids );
			}
		});

		// Remove images
		$('#mt_gallery_images_container').on( 'click', 'a.delete', function() {

			$(this).closest('li.image').remove();

			var attachment_ids = '';

			$('#mt_gallery_images_container ul li.image').css('cursor','default').each(function() {
				var attachment_id = jQuery(this).attr( 'data-attachment_id' );
				attachment_ids = attachment_ids + attachment_id + ',';
			});

			$image_gallery_ids.val( attachment_ids );

			return false;
		});

	});

} ) ( jQuery );  