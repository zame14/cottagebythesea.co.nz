<div class="container">
    <div class="row">
        <div class="feature-testimonial-wrapper">
            <?=displayTestimonials()?>
        </div>
    </div>
</div>
<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 footer-col-wrapper">
                <h3>Cottage by the Sea</h3>
                <address>
                    Di and Maurice Simpson<br />
                    66 Lower Turangi Road,<br />
                    RD 43 Waitara,<br />
                    Taranaki
                </address>
                <ul>
                    <li><span class="fa fa-phone"></span><a href="tel:067544548">+64-6-754 4548</a></li>
                    <li><span class="fa fa-phone"></span><a href="tel:0276300737">+64 27 6300 737</a></li>
                </ul>
                <ul>
                    <li><span class="fa fa-envelope"></span><a href="mailto:relax@cottagebythesea.co.nz">relax@cottagebythesea.co.nz</a></li>
                </ul>
                <ul>
                    <li><span class="fa fa-sitemap"></span><a href="<?=get_page_link(317)?>">Sitemap</a></li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 footer-col-wrapper">
                <h3>Accommodation</h3>
                <ul>
                    <li><a href="/accommodation#seacliff-villa">Seacliff Villa</a></li>
                    <li><a href="/accommodation#cottage-by-the-sea">Cottage by the Sea</a></li>
                    <li><a href="/accommodation#reef-and-sandpiper">Reef and Sandpiper</a></li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <h3>Activities</h3>
                <ul>
                    <li><a href="<?=get_page_link(80)?>">Swimming</a></li>
                    <li><a href="<?=get_page_link(80)?>">Kayaking</a></li>
                    <li><a href="<?=get_page_link(80)?>">Snorkeling</a></li>
                    <li><a href="<?=get_page_link(80)?>">Fishing</a></li>
                    <li><a href="<?=get_page_link(80)?>">Outdoor Baths</a></li>
                    <li><a href="<?=get_page_link(80)?>">Rest and Relaxation</a></li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-6 hide-md col-lg-3">
                <div class="footer-logo-wrapper">
                    <a href="<?=get_home_url()?>" class="logo"><img src="<?=get_stylesheet_directory_uri()?>/images/logo.png" alt="Cottage by the Sea" /></a>
                </div>
            </div>
        </div>
    </div>
    <a class="top">
        <span class="fa fa-chevron-up"></span>
    </a>
</footer>
<section id="copyright">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                &copy; Copyright <?=date('Y')?> Cottage by the Sea <i>-</i> <span>Website by: <a href="https://www.azwebsolutions.co.nz" target="_blank">A-Z Web Solutions Ltd</a></span>
            </div>
        </div>
    </div>
</section>
<?php wp_footer(); ?>
</body>
</html>