<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Dream
 */

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Dream Formation</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

  <?php wp_head();?>
 

</head>

<body>
    <!-- Navbar Start -->
    <div class="container-fluid bg-light position-relative shadow">
        <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0 px-lg-5">
            <a href="" class="navbar-brand font-weight-bold text-secondary" style="font-size: 50px;">
                <img src="<?php bloginfo('template_directory');?>/img/logo.png" >
            </a>
            <?php if ( function_exists( 'groovy_menu' ) ) { groovy_menu(); } ?>


            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav font-weight-bold mx-auto py-0">
                    <?php 
                    wp_nav_menu (
                        array (
                            
                            'menu' => 'primary menu',
                            'menu_class'=> 'menu-font',
                        )
                        ); ?>
                </div>
                <a href="<?php echo site_url('/inscription-etudiant'); ?>" class="btn btn-primary px-4">Pré-inscription</a>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->
    <script src="js/main.js"></script>
