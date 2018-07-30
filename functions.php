<?php
add_action( 'wp_enqueue_scripts', 'mond_ou_child_enqueue_styles' );
add_action( 'tha_head_top', 'mond_ou_child_head', 1001 );
//add_action( 'wp_footer', 'mond_ou_child_footer', 1001 );
add_action( 'tha_content_after', 'mond_ou_child_footer', 1001 );

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
<div class="footer">
    <div class="container-fluid">    
    
        <div class="footeripar parsys iparsys"><div class="iparsys_inherited"><div class="footeripar parsys iparsys">
</div>
</div><!-- /iparsys_inherited --><div class="section"><div class="footer2012 parbase">
    <div class="row-fluid">
        <div class="footerColumn span4">
            <div class="footerlogo"><img alt="OU" src="<?php echo get_stylesheet_directory_uri() ;?>/footerlogo.png"></div>
            <div class="footeraddress"><a href="/">College of Architecture</a><br>Gould Hall<br>
830 Van Vleet Oval<br>
Norman, OK 73019<br>
405.325.2444<br></div>       
        </div>
        <div class="footerColumn span4"><div class="parbase text">


      













<div class="text"><ul class="2columns unstyled"><div class="first column" style="width:50%; float: left;">
<li><a href="http://www.ou.edu/publicaffairs/WebPolicies/accessstatement">Accessibility</a></li>
<li><a href="http://www.ou.edu/sustainability">Sustainability</a></li>
<li><a href="http://ouhsc.edu/hipaa/">HIPAA</a></li>
<li><a href="http://hr.ou.edu/jobs/">OU Job Search</a></li></div><div class="last column" style="width:50%; float: left;">
<li><a href="http://www.ou.edu/web/landing/policy">Policies</a></li>
<li><a href="http://www.ou.edu/web/landing/legalnotices">Legal Notices</a></li>
<li><a href="http://www.ou.edu/publicaffairs/WebPolicies/copyright">Copyright</a></li>
<li><a href="http://www.ou.edu/web/resources_offices">Resources &amp; Offices</a></li>
</div><br style="clear:both;"></ul>
</div>

</div>

        </div>
        <div class="footerColumn span4">
            <div class="parbase text col3">


<div id="footer_social_icons">      





<h3>COA Social Media</h3>







<div class="text"><ul>
<li><a target="_blank" href="https://www.facebook.com/OUCollegeofArch" class="facebook" adhocenable="false">facebook</a></li>
<li><a target="_blank" href="https://twitter.com/OUCollegeofArch" class="twitter" adhocenable="false">twitter</a></li>
<li><a target="_blank" href="http://www.linkedin.com/groups/OU-College-Architecture-Alumni-Friends-4123860?gid=4123860&amp;trk=hb_side_g" class="linkedin" adhocenable="false">linkedin</a></li>
<li><a href="http://www.ou.edu/web/socialmediadirectory" class="more">more</a></li>
</ul>
</div>
</div>
</div>

        </div>
    </div>
    <div class="row-fluid">
        <div class="footerBottom span12"><div class="parbase text_0 text">


      















</div>

            Updated
<?php the_modified_date();?>
 by <a href="/">College of Architecture</a>: <a href="mailto:coa-communications@ou.edu ">coa-communications@ou.edu </a>
        </div>
    </div>

</div>
</div>
    <div class="section"><div class="new"></div>
</div>
</div>
 
    
        
    </div><!-- /container-fluid -->
</div>
<?php
}
?>
