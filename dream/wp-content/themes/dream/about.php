<?php
/*
Template Name: About

*/
?>
<?php 
 

get_header();
?>

   <!-- About Start -->
   <?php if( have_rows('a_propos') ): ?>
    <?php while( have_rows('a_propos') ): the_row(); 

        // Get sub field values.
        $information = get_sub_field('information_ecole');

        ?>

   <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5"><span class="px-2">A propos</span></p>
            </div>
            <div class="row">
                <div class="text-about">
                <p><?php echo $information;?></p>
               
               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3312.1018165414393!2d10.100986815062159!3d33.88703153386604!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12556fc757d5fe93%3A0xe5096c318cafc4b5!2sGab%C3%A9s%20Centre!5e0!3m2!1sfr!2stn!4v1655413261619!5m2!1sfr!2stn" width="600" height="450" style="border:0;height: 400px;width: 100%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                
            </div>
        </div>
    </div>
    <?php endwhile; ?>
    <?php endif; ?>
    <!-- About End -->
 
<?php
get_footer();
?>