<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>
<?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
			</div><!-- .row -->
		</div><!-- .container -->
	</div><!-- #content -->
    <?php get_template_part( 'footer-widget' ); ?>
	<footer id="colophon" class="site-footer <?php echo wp_bootstrap_starter_bg_class(); ?>" role="contentinfo">
		<div class="container">
            <div class="site-info">
                <p class="left"><a href="javascript:;">About</a>
                <a href="javascript:;">Contact Us</a></p>
                <p>&copy; <?php echo date('Y'); ?> <?php echo '<a href="'.home_url().'">'.get_bloginfo('name').'</a>'; ?>. All rights reserved.</p>

            </div><!-- close .site-info -->
		</div>
	</footer><!-- #colophon -->
<?php endif; ?>
</div><!-- #page -->

<?php wp_footer(); ?>

<script type="text/javascript">
    jQuery(document).ready(function() {

        let info_1 = '<div class="vendor-details"><ul><li class="store">Store Name</li><li><span class="icon"><i class="fa-solid fa-star"></i></span>4.5 <span class="count">(128 Reviews)</span></li><li><span class="icon"><i class="fa-solid fa-eye"></i></span>838</li></ul></div>';

        let info_2 = '<div class="vendor-details"><ul><li><span class="icon"><i class="fa-solid fa-star"></i></span>4.5 <span class="count">(128 Reviews)</span></li><li><span class="icon"><i class="fa-solid fa-eye"></i></span>838</li></ul></div>';

        let info_2_before = '<div class="vendor-info"><div class="pic"><img src="<?=get_site_url()?>/wp-content/themes/CustomTheme/\images/thumb.png"><div class="status"></div></div><h4>James Oliver</h4><p>Store Name</p></div>';

        jQuery('.product_vendor_1 .woocommerce ul.products h2.woocommerce-loop-product__title').after(info_1);
        jQuery('.archive.woocommerce:not(.term-adds):not(.term-services) ul.products h2.woocommerce-loop-product__title').after(info_1);
        jQuery('.product_vendor_2 .woocommerce ul.products h2.woocommerce-loop-product__title').after(info_2);
        jQuery('.archive.term-adds.woocommerce ul.products h2.woocommerce-loop-product__title').after(info_2);
        jQuery('.archive.term-services.woocommerce ul.products h2.woocommerce-loop-product__title').after(info_2);
        jQuery('.product_vendor_2 .woocommerce ul.products h2.woocommerce-loop-product__title').before(info_2_before);
        jQuery('.archive.term-adds.woocommerce ul.products h2.woocommerce-loop-product__title').before(info_2_before);
        jQuery('.archive.term-services.woocommerce ul.products h2.woocommerce-loop-product__title').before(info_2_before);

        jQuery( ".product_vendor_4 ul.products li.product" ).each(function( index ) {
        let price_vendor_4 = jQuery(this).find('.price').text();
            jQuery(this).find('h2.woocommerce-loop-product__title').prepend(price_vendor_4); 
        });


        jQuery('img.attachment-woocommerce_thumbnail.size-woocommerce_thumbnail').wrap('<div class="f-img"></div>');
        jQuery('.woocommerce ul.products li.product-category img').wrap('<div class="ct-img"></div>');
        jQuery('.product_slider .woocommerce ul.products').addClass('owl-carousel owl-theme');
        jQuery('.product_slider .woocommerce ul.products').owlCarousel({
            items:5,
            loop:true,
            margin:25,
            autoplay: false,
            navText: ['<i class="fa-solid fa-chevron-left"></i>','<i class="fa-solid fa-chevron-right"></i>'],
            nav:true,
            responsive:{
                0:{
                    items:1
                },
                768:{
                    items:2
                },
                1000:{
                    items:5
                }
            }
        });

        let sort_by = jQuery('.woocommerce-ordering').html();
        jQuery('aside#secondary .widget_price_filter').before('<div class="widget-sortBy"><h3 class="widget-title">Sort By</h3>' + sort_by + '</div>');

        jQuery('.header-cat .select2-container--default .select2-selection--single .select2-selection__placeholder').text("All Categories");
    })
</script>

</body>
</html>