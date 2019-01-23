<?php

get_header();

?>
<center>
<div class="nav">
    <ul>
        <li> <a href="#">Home </a></li>
        <li> <a href="#">About </a></li>
        <li> <a href="#">Blog </a></li>
        <li> <a href="#">Contact </a></li>
    </ul>
</div>
</center>

<?php 
while(have_posts()){
the_post();?>

<h1> <a href="<?php the_permalink();?>"><?php the_title(); ?> </a></h1>
<p> <?php the_content(); ?> </p>

<?php
}
?>


<?php get_footer(); ?>