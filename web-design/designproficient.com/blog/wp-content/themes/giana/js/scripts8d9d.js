( function( $ ) {
"use strict";

/*----------------------------------*/
/*		  Document ready
/*----------------------------------*/

$( document ).ready( function() {

/*----------------------------------*/
/*		    Navigation
/*----------------------------------*/

	function gianaNavInit() {

		// Mobile menu trigger
		$( '.mt-mobile-nav-trigger' ).on( 'click', function() {
			$( '.mobile-nav-wrapper' ).find( '.mt-menu-mobile' ).toggleClass( 'opened' );
			$( this ).toggleClass( 'opened' );
		});

		// Append submenu trigger if menu item has child
		$( '.mt-menu-mobile' ).find( 'li.menu-item-has-children' ).append( '<a class="mt-submenu-trigger mt-anim"></a>' );

		// Show submenu after trigger is clicked
		$( '.mt-menu-mobile' ).on( 'click', 'li.menu-item-has-children > a', function() {
			// Define submenu
			var submenu = $( this ).parent().find( '> ul.sub-menu' ),
				submenuTrigger = $( this ).parent().find( '.mt-submenu-trigger' );

			// Show submenu on click
			submenu.toggleClass( 'opened' );
			submenuTrigger.toggleClass( 'opened' );
		});

		// Double click for touch devices
		gianaTouchClick( '.mt-menu li:has(ul) > a' );
		gianaTouchClick( '.mt-menu-mobile li:has(ul) > a' );

	}

	gianaNavInit();

/*----------------------------------*/
/*		    Post slider
/*----------------------------------*/

	function gianaSliders() {
		if( $().slick ) {

			// define vars
			var relatedItems = $( '.related-items' ),
				postsCarousel = $( '.mt-pcar' );

			/**
			*	Related items carousel
			**/
			relatedItems.slick({
				infinite: true,
				slidesToShow: 3,
				slidesToScroll: 1,
				appendArrows: $( '.related-arrows' ),
				prevArrow: '<a class="related-prev"><i class="mt-icon-arrow-left"></i></a>',
				nextArrow: '<a class="related-next"><i class="mt-icon-arrow-right"></i></a>',
				responsive: [
					{
						breakpoint: 769,
						settings: {
							slidesToShow: 2
						}
					},
					{
						breakpoint: 479,
						settings: {
							slidesToShow: 1
						}
					},
				],
			});

			/**
			*	Posts carousel
			**/
			postsCarousel.slick({
				centerPadding: 0,
				prevArrow: '<a class="slick-prev"><i class="mt-icon-arrow-left"></i></a>',
				nextArrow: '<a class="slick-next"><i class="mt-icon-arrow-right"></i></a>',
				customPaging: function( slider, i ) {
					return '<a class="slick-dot" tabindex="0"></a>';
				},
				responsive: [
					{
						breakpoint: 1025,
						settings: {
							slidesToShow: 1,
							centerPadding: '200px',
						}
					},
					{
						breakpoint: 769,
						settings: {
							slidesToShow: 1,
							centerPadding: '120px',
						}
					},
					{
						breakpoint: 600,
						settings: {
							slidesToShow: 1,
						}
					},
				]
			});

		}

	}

	gianaSliders();

/*----------------------------------*/
/*		   Back to top
/*----------------------------------*/

	function gianaBackToTop() {
		var toTop = $( '.mt-to-top' );

		// Add proper classes on specific breakpoints
		$( window ).scroll( function() {
			( $( this ).scrollTop() > 300 ) ? toTop.addClass( 'tt-is-visible' ) : toTop.removeClass( 'tt-is-visible' );
		});

		// Scroll to top on click
		$( document ).on( 'click', '.mt-to-top', function( e ) {
			e.preventDefault();
			$( 'body, html' ).animate( { scrollTop: 0 }, 400 );
		});		
	}

	gianaBackToTop();

/*----------------------------------*/
/*		     Morph
/*----------------------------------*/

	function gianaToggleSidebar() {
		
		// Open toggle sidebar
		$( document ).on( 'click', '.toggle-sidebar-init', function( e ) {
			e.preventDefault();
			var dataLink = $( this ).data( 'tsi' );
			$( '.toggle-sidebar-' + dataLink ).addClass( 'opened' );
			$( 'body' ).addClass( 'toggle-opened' );
		});

		// Close toggle sidebar
		$( document ).on( 'click', '.toggle-sidebar-close', function( e ) {
			e.preventDefault();
			$( '.toggle-sidebar' ).removeClass( 'opened' );
			$( 'body' ).removeClass( 'toggle-opened' );
		});

		// Close when clicked outside sidebar
		$( document ).mouseup( function ( e ) {
			var tsContainer = $( '.toggle-sidebar' );

			if ( ! tsContainer.is( e.target ) && tsContainer.has( e.target ).length === 0) {
				$( '.toggle-sidebar' ).removeClass( 'opened' );
				$( 'body' ).removeClass( 'toggle-opened' );
			}
		});

		// Open search
		$( document ).on( 'click', '.mt-search-init', function( e ) {
			e.preventDefault();
			$( '.mt-header-search, .mt-search-init' ).toggleClass( 'opened' );
		});

	}

	gianaToggleSidebar();

/*----------------------------------*/
/*		    Gallery
/*----------------------------------*/

	function gianaGalleryInit( container, target ) {
		$( container ).each( function() {
			$( this ).find( target ).magnificPopup({
				type: 'image',
				mainClass: 'mfp-img-mobile',
				tLoading: '',
				gallery: {
					enabled: true,
					preload: [0,2],
					tCounter: '<span class="mfp-counter">%curr% / %total%</span>'
				},
			});
		});
	}
	gianaGalleryInit( '.gallery', '.gallery-icon a' );
	gianaGalleryInit( '.tiled-gallery', '.tiled-gallery-item a' );

/*----------------------------------*/
/*		 WooCommerce related
/*----------------------------------*/
	
	function gianaWooCommerce() {
		$( '.plus' ).on( 'click', function( e ) {
			var val = parseInt( $( this ).prev( 'input' ).val() );
			$( this ).prev( 'input' ).val( val+1 );
		});

		$( '.minus' ).on( 'click', function( e ) {
		var val = parseInt( $( this ).next( 'input' ).val() );
			if( val !== 0 ) {
				$( this ).next( 'input' ).val( val-1 );
			}
		});
	}
	gianaWooCommerce();

/*----------------------------------*/
/*		    General scripts
/*----------------------------------*/

	// add double click support on touch devices
	function gianaTouchClick( selector ) {
		// if is prevent click on item from redirecting to URL on first click
		if( typeof window.ontouchstart !== 'undefined' ) {
			$( selector ).on( 'click', function( event ) {
				$( selector ).not( this ).removeClass( 'clicked' );
				$( this ).toggleClass( 'clicked' );
				if ( $( this ).hasClass( 'clicked' ) ) {
					event.preventDefault();
				}
			});
		}
	}
	gianaTouchClick( '.mt-imgboxes-column a' );

	function gianaGeneralScriptsInit() {

		// media responsive
		$( 'video' ).attr( 'width', '2000px' );
		$( 'video' ).attr( 'height', '100%' );
		$( '.wp-video' ).css( 'width', '940px' ).css( 'max-width', '100%' ).css( 'height', '' );
		$( '.site-content' ).fitVids();

		// lightbox and gallery
		$( '.image-lightbox' ).magnificPopup({
			type: 'image',
			mainClass: 'mfp-with-zoom mfp-img-mobile',
		});

		// Image fit for IE
		if ( ! Modernizr.objectfit ) {
			$( '.objf-image' ).each( function () {
				var tptContainer = $( this ),
					imgUrl = tptContainer.find( 'img' ).prop( 'data-src' );

				if ( imgUrl ) {
					tptContainer.css( 'backgroundImage', 'url(' + imgUrl + ')' ).addClass( 'compat-object-fit' );
				}
			});
		}

		// Show gallery when page is loaded
		$( window ).load( function () {
			$( '.format-gallery .entry-hero > div' ).fadeIn();
		});

	}
	gianaGeneralScriptsInit();

	// Rerun general script when Infinite Scroll from Jetpack is added
	$( document.body ).on( 'post-load', function () {
		gianaGeneralScriptsInit();
		gianaGalleryInit( '.gallery', '.gallery-icon a' );
		gianaGalleryInit( '.tiled-gallery', '.tiled-gallery-item a' );

		$( '.format-gallery .entry-hero > div' ).fadeIn();
		
	} );

});

})(jQuery);