<?php
/*
Template Name: Home page

*/
?>
<?php 
 

get_header();
?>
<?php if( have_rows('hero') ): ?>
    <?php while( have_rows('hero') ): the_row(); 

        // Get sub field values.
        $image = get_sub_field('hero_image');
        $title= get_sub_field('big_title');
        $title1= get_sub_field('small_title');
        $link = get_sub_field('buttom');

        ?>

    <!-- Header Start -->
    <div class="container-fluid bg-primary px-0 px-md-5 mb-5">
        <div class="row align-items-center px-3">
            <div class="col-lg-6 text-center text-lg-left">
                <h1 class="display-3 font-weight-bold text-white"><?php echo $title;?></h1>
                <p class="text-white mb-4"><?php echo $title1;?></p>
                <a href="<?php echo $link;?>" class="btn btn-secondary mt-1 py-3 px-5">En savoir plus</a>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <img class="img-fluid mt-5" src="<?php echo $image['url'];?>" alt="">
            </div>
        </div>
    </div>
    <?php endwhile; ?>
<?php endif; ?>
    <!-- Header End -->
    
<!-- About Start -->

<?php if( have_rows('decouvrez-nous') ): ?>
    <?php while( have_rows('decouvrez-nous') ): the_row(); 

        // Get sub field values.
        $leftimage = get_sub_field('left_image_');
        $centerimage= get_sub_field('center_image');
        $titlesection= get_sub_field('section_title');
        $section1 = get_sub_field('section_1');
        $section2 = get_sub_field('section_2');
        $section3 = get_sub_field('section_3');

        ?>
<div class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <img class="img-fluid rounded mb-5 mb-lg-0" src="<?php echo $leftimage['url'];?>" alt="">
                </div>
                <div class="col-lg-7">
                    <p class="section-title pr-5"><span class="pr-2">DÉCOUVREZ-NOUS</span></p>
                    <h1 class="mb-4"><?php echo $titlesection;?></h1>
    
                    <div class="row pt-2 pb-4">
                        <div class="col-6 col-md-4">
                            <img class="img-fluid rounded" src="<?php echo $centerimage['url'];?>" alt="">
                        </div>
                        <div class="col-6 col-md-8">
                            <ul class="list-inline m-0">
                                <li class="py-2 border-top border-bottom"><i class="fa fa-check text-primary mr-3"></i><?php echo $section1;?></li>
                                <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-3"></i><?php echo $section2;?></li>
                                <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-3"></i><?php echo $section3;?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endwhile; ?>
<?php endif; ?>
    <!-- About End -->

    <!-- Registration Start -->
    <?php if( have_rows('rejoignez-nous') ): ?>
    <?php while( have_rows('rejoignez-nous') ): the_row(); 

        // Get sub field values.
        $information = get_sub_field('information');
        $diplome1= get_sub_field('diplome_1');
        $diplome2= get_sub_field('diplome_2');
        $diplome3 = get_sub_field('diplome_3');
        $inscriptionurl = get_sub_field('inscription_url')


        ?>
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <p class="section-title pr-5"><span class="pr-2">Rejoignez-nous </span></p>
                    <p> <?php echo $information;?></p>
                    <ul class="list-inline m-0">
                        <li class="py-2"><i class="fa fa-check text-success mr-3"></i><?php echo $diplome1;?></li>
                        <li class="py-2"><i class="fa fa-check text-success mr-3"></i><?php echo $diplome2;?></li>
                        <li class="py-2"><i class="fa fa-check text-success mr-3"></i><?php echo $diplome3;?></li>
                    </ul>
                    <a href="<?php echo $inscriptionurl;?>" class="btn btn-primary mt-4 py-2 px-4">PRÉ-INSCRIPTION</a>
                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endwhile; ?>
    <?php endif; ?>
    <!-- Registration End -->

<?php
get_footer();
?>