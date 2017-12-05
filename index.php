<?php
require_once './inc/page.php';

$page = new Page("index");
$page->print_title();
?><br><br>
<div class="container">
    <div class="jumbotron">
        <div style="text-align: center;">
          <img src="<?php echo $page->settings->logo_image; ?>"/>
            <h2 style="text-shadow:none; color:black; font-family: 'Raleway', sans-serif;"><h2><?php echo str_replace("{server}", $page->settings->name, $page->t("index_welcome")); ?></h2>
        </div>
<div style="text-align: center;"><p style="color:black; font-family: 'Raleway', sans-serif;"><?php echo $page->t("index_welcome2"); ?></p></div>
<?php if ($page->settings->show_main_page_search_button) : ?>
<?php $page->print_main_page_search_button(); ?>
<?php else : ?>
<?php endif; ?>
<div style="text-align: center;">
<a href="<?php echo $page->settings->contact_link; ?>">
<button type="button" class="btn btn-default"><?php echo $page->t("contact_button"); ?></button></a>

<a href="<?php echo $page->settings->appeal_link; ?>">
<button type="button" class="btn btn-default"><?php echo $page->t("ban_appeal"); ?></button></a></div>
<div style="text-align: center;">

<button type="button" class="btn btn-default" id="player-count-button" data-clipboard-text="<?php echo $page->settings->server_ip ?>" title="Click to Copy IP"><?php echo $page->t("join"); ?> <span class="player-count badge"></span> <?php echo $page->t("others"); ?> <span class="badge" style="margin-left: 5px;"><?php echo $page->settings->server_ip ?></span></button>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.7.1/clipboard.min.js"></script>
<script src="https://unpkg.com/tippy.js@1.2.1/dist/tippy.min.js"></script>
<script>
  var btn = document.getElementById('player-count-button');
  var clipboard = new Clipboard(btn);
  clipboard.on('success', function(e) {
      console.log(e);
  });
  clipboard.on('error', function(e) {
      console.log(e);
  });
</script>


<script>
tippy('#player-count-button', {
  animation: 'scale',
  position: 'bottom',
  duration: 500,
  arrow: true
})
</script>
<?php if ($page->settings->show_social) : ?>
<div class="conatiner">
    <div class="icon">
<a href="<?php echo $page->settings->youtube_link; ?>">
    	 <span class="fa-stack fa-2x" aria-hidden="true">
    	   <i class="fa fa-youtube-play fa-stack-1x fa-inverse"></i>
    	 </span></a>
<a href="<?php echo $page->settings->twitter_link; ?>">
    	  <span class="fa-stack fa-2x" aria-hidden="true">
    	   <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
    	 </span></a>
<a href="<?php echo $page->settings->facebook_link; ?>">
    	  <span class="fa-stack fa-2x" aria-hidden="true">
    	   <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
    	 </span></a>
<a href="<?php echo $page->settings->googleplus_link; ?>">
    	  <span class="fa-stack fa-2x" aria-hidden="true">
    	   <i class="fa fa-google-plus fa-stack-1x fa-inverse"></i>
    	 </span>
    </a>

</div>
    

    </div>
        <?php else : ?>
        <?php endif;?>
</div>
</div>
<?php $page->print_footer(false); ?>
