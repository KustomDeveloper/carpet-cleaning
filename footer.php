<footer>
    <div class="container">
        <div class="footer-cta cta">
            <!--PHONE NUMBER IS SET INSIDE WORDPRESS CUSTOMIZER-->
            <h3>Call Us Now To Get a Quote</h3> <a href="tel:<?php echo preg_replace('/[^0-9]/', '', get_theme_mod('bus_info_phone')); ?>"><button>Call Now For Quote</button></a>
        </div>

        <div class="row">

            <div class="col-md-3">
                <h3>Contact Us</h3>
                <ul class="ftr-location">
                    <!--ADDRESS AND PHONE IS SET INSIDE WORDPRESS CUSTOMIZER-->
                    <li class="ftr-phone"><a href="tel:<?php echo preg_replace('/[^0-9]/', '', get_theme_mod('bus_info_phone')); ?>"><?php echo get_theme_mod('bus_info_phone'); ?></a></li>
                    <li class="ftr-email"><?php echo get_theme_mod('bus_info_email'); ?></li>
                    <li class="ftr-address">
                        <span class="str-addr"><?php echo get_theme_mod('bus_info_street_address'); ?></span>
                        <span class="cty-addr"><?php echo get_theme_mod('bus_info_city_address'); ?></span>
                        <span class="st-addr"><?php echo get_theme_mod('bus_info_state_address'); ?></span>
                        <span class="zip-addr"><?php echo get_theme_mod('bus_info_zip_address'); ?></span>
                    </li>
                    <li></li>
                </ul>

            </div>

            <div class="col-md-3">
                <h3>Map</h3>
                <iframe id="footer-map" src="<?php echo get_theme_mod('bus_info_map_url'); ?>" style="border:0;" allowfullscreen=""></iframe>
            </div>

            <div class="col-md-3">
                <h3>Popular Topics</h3>
                <div class="popular-tags">
                    <?php $popular_tags = wp_tag_cloud(array(
                    'echo' => false, 
                    'orderby' => 'count', 
                    'order' => 'DESC', 
                    'number' => 5)); 
                    echo $popular_tags; ?>
                </div>
            </div>

            <div class="col-md-3 ftr-social">
                <h3>Stay Connected</h3>
                <!--SOCIAL ICONS ARE SET INSIDE WORDPRESS CUSTOMIZER-->
                <a href="<?php echo get_theme_mod('bus_info_facebook'); ?>"><img class="ftr-fb lazy" data-src="<?php bloginfo('stylesheet_directory'); ?>/img/fb-icon.png" /></a>
                <a href="<?php echo get_theme_mod('bus_info_twitter'); ?>"><img class="ftr-tw lazy" data-src="<?php bloginfo('stylesheet_directory'); ?>/img/tw-icon.png" /></a>
                <a href="<?php echo get_theme_mod('bus_info_youtube'); ?>"><img class="ftr-yt lazy" data-src="<?php bloginfo('stylesheet_directory'); ?>/img/yt-icon.png" /></a>
                <a href="<?php echo get_theme_mod('bus_info_linkedin'); ?>"><img class="ftr-li lazy" data-src="<?php bloginfo('stylesheet_directory'); ?>/img/li-icon.png" /></a>
                <a href="<?php echo get_theme_mod('bus_info_pinterest'); ?>"><img class="ftr-pi lazy" data-src="<?php bloginfo('stylesheet_directory'); ?>/img/pi-icon.png" /></a>
            </div>

        </div><!--.row-->

        <div class="row footer-extras">
            <div class="col-6">
                <div class="disclaimer"><b>DISCLAIMER:</b> The information you obtain from this site is not, nor is it intended to be, professional advice. “<?php bloginfo('name'); ?>” is not a kitchen remodeling company. You should consult a licensed contractor for advice regarding your individual kitchen remodeling plans. Viewing this Website or even contacting us does not create a contractor-customer relationship. Any information sent to <?php bloginfo('name'); ?> through email or contact form on the Site is not secure and is done so on a non-confidential basis. Kitchen Remodeling Company listings are paid advertisements and do not in any way constitute a referral or endorsement by <?php bloginfo('url'); ?>. All operators will only forward your information to our partners who advertises in your area.</div>
            </div>
            <div class="col-6">
            <div class="customer-review" itemscope="" itemtype="https://schema.org/Product"> 
                <span class="review-title">
                  <span>Reviews</span>
                  <span class="cr-stars">
                  <i class="lazy star"></i>
                  <i class="lazy star"></i>
                  <i class="lazy star"></i>
                  <i class="lazy star"></i>
                  <i class="lazy star"></i>
                </span><!--.review-title-->
                </span><br>
                <span class="review-name" itemprop="name"><?php bloginfo('name'); ?></span>
                <div itemprop="aggregateRating" itemscope="" itemtype="https://schema.org/AggregateRating">
                    <span itemprop="ratingValue"><strong>5</strong></span><strong>/<span itemprop="bestRating">5</span></strong> stars
                    based on <span itemprop="reviewCount">5</span> customer reviews
                </div>
                <span itemprop="description"><strong>The Best.</strong><br> <?php bloginfo('name'); ?> was professional, prompt, and supportive during our entire process. Thanks for all your help!</span>
                <p style="text-align:right;"><a style="color:#DDA318;" href="<?php bloginfo('url'); ?>/reviews/"><u>Leave a Review</u></a></p>
                </em></div>
            </div>
        </div>
    </div><!--.container-->
    <div class="copyright">
        &copy; <?php echo date('Y'); ?> <?php bloginfo('site_title'); ?> | <a href="<?php bloginfo('url'); ?>/sitemap_index.xml">Sitemap</a>
    </div>
</footer>

<?php wp_footer(); ?>

<script>
/*
*  Our Services Tabs
*/
function openTab(evt, tabName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";
}
      
document.getElementById("defaultOpen").click();
</script>

</body>
</html>