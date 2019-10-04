<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width-device-width" >
    <title><?php bloginfo('name'); ?> </title>

<!-- <link rel="stylesheet" href="style.css" />  -->
   <?php wp_head();?>
     
</head>
<body <?php body_class();?>>
<?php 
 
// Print the link 
//echo $link; 
// echo "-----".$link. "----";
?>
<!-- site header -->
<div class="">
<header class="site-header">
<!-- <h1><a href="<?php //echo home_url(); ?>"><?php //bloginfo('name'); ?></a></h1>
<h5><?php //bloginfo('description'); ?></h5> -->
<nav class="navbar navbar-light justify-content-between"> <a class="navbar-brand"><img src="<?php echo $link;?>wp-content/uploads/2019/10/d-a-logo.svg" width="100" class="img-fluid" alt="Digital & Analytics" /></a>
  <div class="form-inline" >
    <img src="<?php echo $link;?>wp-content/uploads/2019/10/hcl.png" class="img-fluid" alt="HCL Tech" />
  </div>
</nav>
</header>

