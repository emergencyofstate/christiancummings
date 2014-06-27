<?php montreal_header($page); global $root;?>
    
<div class="container bigtoppadding bigbottompadding" style="background:url(<?php echo $root;?>/img/bg-45.png);">
  <section class="row bigtoppadding smallbottommargin">
    <h3 class="whitetext bold center">RECENT ARTICLES</h3>
  </section>
        
  <div class="row">
    <div id ="main_content_wrap" class="twelve columns">
      <div id="main_content">
        <?php print render($title_prefix); ?>
        <?php print render($title_suffix); ?>
        <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
        <?php print render($page['content']); ?>
      </div>
    </div>   
  </div>
</div>
  
<?php montreal_footer($page);?>