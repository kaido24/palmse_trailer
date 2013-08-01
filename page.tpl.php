
<span class="header-bg"></span>
<div id="skip-link">
  <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  <?php if ($main_menu): ?>
    <a href="#navigation" class="element-invisible element-focusable"><?php print t('Skip to navigation'); ?></a>
  <?php endif; ?>
</div>
<header id="header" role="banner" class="clearfix">
  <?php print render($page['header']); ?>
     
    <?php // if ($breadcrumb): print $breadcrumb; endif;?>
</header> <!-- /#header -->
<?php if (!empty($page['navigation'])): ?>
  <nav id="navigation" role="navigation" class="clearfix">
    <div id="navbg">
      <div class="clearfix container">
        <a href="<?php echo base_path() . $language->language; ?>"><img id="logo" src="<?php echo base_path() ?>sites/all/themes/palmse_trailer/images/palmse_trailer_logo.png"></a>
        <?php print render($page['navigation']); ?>
      </div>
    </div>
  </nav> <!-- /#navigation -->
<?php endif; ?>
<section id="main" role="main" class="clearfix">
  <div class="content1">
    <div class="clearfix container">
      <?php print $messages; ?>
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php if (!empty($tabs['#primary'])): ?><div class="tabs-wrapper clearfix"><?php print render($tabs); ?></div><?php endif; ?>
      <?php print render($page['help']); ?>
      <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
      <?php print render($page['content']); ?>
    </div>
  </div>
  <?php if(!empty($page['content1'])) { ?>
    <div class="content2 clearfix">
      <div class="clearfix container">
        <?php print render($page['content1']); ?>
      </div>
  </div>
  <?php } ?>
  <?php if(!empty($page['content2'])) { ?>
  <div class="content3 clearfix">
    <div class="clearfix container">
      <?php print render($page['content2']); ?>
    </div>
  </div>
  <?php } ?>
</section> <!-- /#main -->

<footer id="footer" role="contentinfo" class="clearfix">
  <div class="clearfix container">
    <?php print render($page['footer']) ?>
    <?php print $feed_icons ?>
  </div>
</footer> <!-- /#footer -->

