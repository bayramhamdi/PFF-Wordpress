<?php
/*
Template Name: Contactez-nous

*/
?>
<?php 
 

get_header();
?>

    <!-- Contact Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5"><span class="px-2">CONTACTEZ-NOUS</span></p>
            </div>
            <div class="row">
                <div class="col-lg-7 mb-5">
                    <div class="contact-form">
                        <div id="success"></div>
                        <?php echo apply_shortcodes( '[contact-form-7 id="132" title="Formulaire de contact 1"]' ); ?>
                    </div>
                </div>
                <div class="col-lg-5 mb-5">
                    <div class="d-flex">
                        <i class="fa fa-map-marker-alt d-inline-flex align-items-center justify-content-center bg-primary text-secondary rounded-circle" style="width: 45px; height: 45px;"></i>
                        <div class="pl-3">
                            <h5>Addresse</h5>
                            <p><?php the_field('adresse' , 'options');?></p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <i class="fa fa-envelope d-inline-flex align-items-center justify-content-center bg-primary text-secondary rounded-circle" style="width: 45px; height: 45px;"></i>
                        <div class="pl-3">
                            <h5>Email</h5>
                            <p><?php the_field('email' , 'options');?></p>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

 
<?php
get_footer();
?>