jQuery(document).ready(function(){
 
jQuery('.view-product-display-goods .field-name-field-images .field-items, .view-front .field-name-field-image .field-items').slideshow({playhover:true,playframe:false});
 jQuery.localScroll({
  duration: 1000,
  hash: false });


jQuery('.slider, .nav-slider').hover(function() {
 jQuery('.nav-slider').css({ opacity: 1 });
  }, function() {
 jQuery('.nav-slider').css({ opacity: 0 });
  }
);


	
   jQuery(".mail, .use-form").click(function(){
jQuery(".pop_form, .blackbg").fadeIn("500");
});

   jQuery("#product-image img").click(function(){
jQuery(".pop_form2, .blackbg").fadeIn("500");
});
   jQuery(".blackbg, .close-button").click(function(){
jQuery(".pop_form, .pop_form2, .blackbg").fadeOut("500");
});

jQuery(".component-title").html("ИТОГО:");

/* placeholders for checkout */
jQuery('#edit-customer-profile-billing-field-surname-und-0-value').attr('placeholder', 'Фамилия *');
jQuery('#edit-customer-profile-billing-field-name-und-0-value').attr('placeholder', 'Имя *');
jQuery('#commerce-checkout-form-checkout #edit-account-login-mail').attr('placeholder', 'E-mail *');
jQuery('#edit-customer-profile-billing-field-phone-und-0-value').attr('placeholder', 'Контактный телефон *');
jQuery('#edit-customer-profile-billing-field-second-phone-und-0-value').attr('placeholder', 'Дополнительный телефон');
jQuery('#edit-customer-profile-billing-field-adress-und-0-value').attr('placeholder', 'Адрес доставки *');
jQuery('#edit-customer-profile-billing-field-oplata-und > option:first-child').text('Выберите способ оплаты *');
jQuery('#edit-customer-profile-billing-field-comment-order-und-0-value').attr('placeholder', 'Комментарий к заказу *');
/* placeholders for checkout END */

/* placeholders for otzuvu */
jQuery('#edit-name').attr('placeholder', 'Ваше ФИО...');
jQuery('#edit-comment-body-und-0-value').attr('placeholder', 'Сообщение...');
jQuery('#edit-field-number-order-und-0-value').attr('placeholder', 'Номер заказа (если есть)...');
jQuery('#edit-field-e-mail-adr-und-0-email').attr('placeholder', 'Ваш E-mail...');

/* placeholders for otzuvu END */

jQuery('#views-exposed-form-product-display-goods-page-2 .form-text').attr('placeholder', 'Поиск по сайту...');

jQuery("<div class='important-fields'>Обязательные поля отмечены “ <span>*</span> ” </div>").insertAfter("#edit-customer-profile-billing legend");

jQuery("#edit-customer-profile-billing legend .fieldset-legend").html("Форма оформления заказа");

/*
jQuery('.slide-box').hover(function(e){
 jQuery(this).find(".slider-text").toggle("500");
})
*/


jQuery(".component-total:contains('руб.')").html(function(_, html) {
   return html.replace(/(руб.)/g, '<span class="smallcaps">руб.</span>');
});
jQuery(".field-name-commerce-price:contains('руб.')").html(function(_, html) {
   return html.replace(/(руб.)/g, '<span class="smallcaps">руб.</span>');
});
jQuery(".views-field-commerce-price:contains('руб.')").html(function(_, html) {
   return html.replace(/(руб.)/g, '<span class="smallcaps">руб.</span>');
});

jQuery('#block-commerce-cart-cart').click(function(){
  window.location = '/checkout';
});

jQuery('#edit-account-login').insertAfter("#edit-customer-profile-billing-field-name");


});

	function openItem( jQueryitem ) {
				jQueryitem.find( 'img[src*="-grey"]' ).stop().fadeTo( 1500, 0 );
				jQueryitem.addClass( 'selected' );
				jQueryitem.stop().animate({
					height: 400
				});
				jQuery('body').css( 'backgroundColor', jQueryitem.css( 'backgroundColor' ) );
			}

			jQuery(function() {
				jQuery('.view-slider-tovarov .view-content').carouFredSel({
					circular: true,
					infinite: true,
					
					width: '100%',
					height: 400,
					items: 3,
					auto: true,
					prev: '#prev',
					next: '#next',
					scroll: {
					    pauseOnHover: true,
						items: 1,
						duration: 1000,
						easing: 'quadratic',
						onBefore: function( data ) {
							data.items.old.find( 'img[src*="-grey"]' ).stop().fadeTo( 500, 1 );
							data.items.old.removeClass( 'selected' );
							data.items.old.stop().animate({
								height: 400
							});
							jQuery('body').css( 'backgroundColor', '#ddd' );
						},
						onAfter: function( data ) {
							openItem( data.items.visible.eq( 1 ) );
						}
					},
					onCreate: function( data ) {
						openItem( data.items.eq( 1 ) );
					}
				});
			});
			
(function($){
	$(document).ready( function() {
		$("#newyearcart").owlCarousel({ 
			items : 3,
			navigation : false,
			autoPlay: true,
			slideSpeed: 800
		});
		$('#banners-slider').slick({
			arrows: false,
			infinite: true,
			slidesToShow: 1,
			slidesToScroll: 1,
			fade: true,
			autoplay: true,
			autoplaySpeed: 3000
		});
	})
})(jQuery)
