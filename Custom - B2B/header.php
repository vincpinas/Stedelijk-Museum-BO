<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head class="navbar container" >
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php bloginfo( 'name' ); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="container nav">
<?php wp_page_menu($args = array(
        'menu' => 'hoofdmenu'
        ) 
    ) 
?>