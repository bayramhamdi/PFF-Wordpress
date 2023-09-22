<?php
/*
Template Name: Formation page

*/
?>
<?php 
 

get_header();
?>


 <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5"><span class="px-2">NOS FORMATIONS</span></p>
            </div>
            <div class="row">
            <?php if( have_rows('nos_formations') ): ?>
    <?php while( have_rows('nos_formations') ): the_row(); 

        // Get sub field values.
        $image = get_sub_field('image_formation');
        $title= get_sub_field('formation_title');
        $description= get_sub_field('formation_description');
        $duration = get_sub_field('duree');
        $fees = get_sub_field('tarif');
        $link = get_sub_field('sinscrire');

        ?>
                <div class="col-lg-4 mb-5">
                    <div class="card border-0 bg-light shadow-sm pb-2">
                        <img class="card-img-top mb-2" src="<?php echo $image['url'];?>" alt="">
                        <div class="card-body text-center">
                            <h4 class="card-title"><?php echo $title;?></h4>
                            <p class="card-text"><?php echo $description;?></p>
                        </div>
                        <div class="card-footer bg-transparent py-4 px-5">
                            <div class="row border-bottom">
                                <div class="col-6 py-1 text-right border-right"><strong>Durée</strong></div>
                                <div class="col-6 py-1"><?php echo $duration;?></div>
                            </div>
                            <div class="row">
                                <div class="col-6 py-1 text-right border-right"><strong>Tarifs</strong></div>
                                <div class="col-6 py-1"><?php echo $fees;?></div>
                            </div>
                        </div>
                        <a href="<?php echo $link;?>" class="btn btn-primary px-4 mx-auto mb-4">S'inscrire</a>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php
get_footer();
?>