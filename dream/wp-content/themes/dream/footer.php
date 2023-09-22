<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Dream
 */

?>

<div class="container-fluid bg-secondary text-white mt-5 py-5 px-sm-3 px-md-5">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <a href="" class="navbar-brand font-weight-bold text-primary m-0 mb-4 p-0" style="font-size: 40px; line-height: 40px;">
                    <img src="<?php bloginfo('template_directory');?>/img/logo-white.png" >

                </a>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h3 class="text-primary mb-4">Contacts</h3>
                <div class="d-flex">
                    <h4 class="fa fa-map-marker-alt text-primary"></h4>
                    <div class="pl-3">
                        <h5 class="text-white">Adresse</h5>
                        <p><?php the_field('adresse' , 'options');?></p>
                    </div>
                </div>
                <div class="d-flex">
                    <h4 class="fa fa-envelope text-primary"></h4>
                    <div class="pl-3">
                        <h5 class="text-white">Email</h5>
                        <p><?php the_field('email' , 'options');?></p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 mb-5">
                <h3 class="text-primary mb-4">Liens Rapides</h3>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white mb-2" href="<?php echo site_url('/a-propos'); ?>"><i class="fa fa-angle-right mr-2"></i>A propos</a>
                    <a class="text-white mb-2" href="<?php echo site_url('/contactez-nous'); ?>"><i class="fa fa-angle-right mr-2"></i>Contactez-nous</a>
                </div>
        </div>
        </div>
        <div class="container-fluid pt-5" style="border-top: 1px solid rgba(23, 162, 184, .2);;">
            <p class="m-0 text-center text-white">
                &copy; <a class="text-primary font-weight-bold" href="#">Tous droits réservés
                <a class="text-primary font-weight-bold" href="#">Dream Formation</a>
            </p>
        </div>
    </div>

<?php wp_footer(); ?>

</body>
</html>
