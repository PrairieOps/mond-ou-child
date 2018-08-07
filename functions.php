<?php
add_action( 'wp_enqueue_scripts', 'mond_ou_child_enqueue_styles' );
add_action( 'tha_head_top', 'mond_ou_child_head', 1001 );
add_action( 'wp_footer', 'mond_ou_child_footer', 1001 );

function mond_ou_child_enqueue_styles() {
    wp_enqueue_style( 'mond-ou-child-style', get_stylesheet_directory_uri() . '/style.css' );
    wp_enqueue_style( 'mond-ou-child-ou-global-header', get_stylesheet_directory_uri() . '/ou-global-header.css' );
}

function mond_ou_child_head() {
?>
    <div class="globalheader">
     <div class="globalheader-wrapper" style="width: 100%">
        <ul>
            <li><a class="tip home" href="http://www.ou.edu/web.html" alt="OU Home link"><span>OU Homepage</span></a></li>
            <li><a class="tip search" href="http://www.ou.edu/content/ousearch.html" alt="OU Search link"><span>Search OU</span></a></li>
            <li><a class="tip social" href="http://www.ou.edu/web/socialmediadirectory.html" alt="OU Social Media link"><span>OU Social Media</span></a></li>
            <li class="wordmark">The University of Oklahoma</li>
        </ul>
        <div style="clear:both;"></div>
     </div>
    </div>
<?php
}

function mond_ou_child_footer() {
?>
Updated
<?php the_modified_date();?>
 by <a href="/">Gibbs College of Architecture</a>: <a href="mailto:coa-communications@ou.edu ">coa-communications@ou.edu </a>
<strong style="float:right">Home of the American School of Design</strong>
<?php
}
?>
