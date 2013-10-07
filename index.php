<?php
/**
 ** Theme Name: Wedy
 ** Theme URI: http://www.drinkentrepreneurs.org/
 ** Description: The 2013 default theme for Drinkentrepreneurs.
 ** Author: Antoine Angot
 ** Author URI: http://antoine.angot.me
 ** Version: 1.0
 ** Tags: black, blue, white
 ** License:
 ** License URI:
 **/
?>
<?php get_header(); ?>
  <div id="tagline_overlay">
    <img alt="" src="/wp-content/themes/wedy/images/bullehome2.png"/>
  </div><!-- #tagline_overlay -->
  <?php if ( function_exists( 'meteor_slideshow' ) ) { meteor_slideshow(); } ?>
 
  <div id="main_content" > 
    <div id="actions_wrap" style="height:356px;">
    <ul>
      <li class="actions_facebook" style="padding:15px 10px;height:298px;">
        <iframe width="503" height="283" src="//www.youtube.com/embed/aeeYpbGVeFc" frameborder="0" allowfullscreen></iframe>

<!--
        <iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Faperoentrepreneurs&amp;width=523&amp;height=258&amp;show_faces=true&amp;colorscheme=light&amp;stream=false&amp;show_border=false&amp;header=false&amp;appId=424706350978789" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:523px; height:150px;" allowTransparency="true"></iframe>
    -->     
      </li>
      <li class="actions_entrepreneur">
        <p style="margin-top:18px;"> Tous les premiers jeudis du mois, DrinkEntrepreneurs vous invite à vous retrouver dans un cadre informel, ouvert et convivial, pour se rencontrer, échanger, et pourquoi pas se filer un coup de pouce. DrinkEntrepreneurs est une association à but non lucratif.</p>
        <a id="mail_subscribe" href="https://www.facebook.com/events/230140580476720" style="margin-left:4px;text-decoration:none;color:white;font-size:16px;font-weight:bold;padding:12px 30px;position: relative;top: 6px;">Inscrivez vous</a>
      </li>
  </ul>
  </div><!-- #actions_wrap -->
 
  <div>
    <?php print get_page_by_title('Where')->post_content;?>
  </div>

  <div style="margin-top:20px;">
    <?php print get_page_by_title('FAQ')->post_content;?>
  </div>

  <div style="margin-top:20px;">
    <?php print get_page_by_title('TEAM')->post_content;?>
  </div>

  <?php
/*
         $mypages = get_pages( array( 'include' => '22,20', sort_order => 'desc') );
  foreach ($mypages as $page ) {
    $content = $page->post_content;
    if ( ! $content ) // Check for empty page
      continue;

    $content = apply_filters( 'the_content', $content );

    echo $content;

  }
*/
  ?>
  </div><!-- #main_content -->
<?php get_footer(); ?>

