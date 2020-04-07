
<div id="container">

  <header id="header"><?php print render($page['header']) ?></header>
    
  <nav id="main-menu">
      <?php 
        if (module_exists('i18n_menu')) {
         $main_menu_tree = i18n_menu_translated_tree(variable_get('menu_main_links_source', 'main-menu'));
        } else {
          $main_menu_tree = menu_tree(variable_get('menu_main_links_source', 'main-menu'));
        }
        print drupal_render($main_menu_tree);
      ?>       
  </nav>

  <main id="main">
  
    <?php print render($title_prefix); ?>
      <?php if ($title): ?><h1 class="page-title"><?php print $title; ?></h1><?php endif; ?>
    <?php print render($title_suffix); ?>
  
    <div id="content-wrapper">

      <?php if ($page['sidebar_first']): ?>
        <div id="sidebar">
          <?php print render($page['sidebar_first']); ?>
        </div>  
      <?php endif; ?>

      <div id="page-content">
        <?php print $messages; ?>    
        <?php if (!empty($tabs['#primary'])): ?><div class="tabs-wrapper"><?php print render($tabs); ?></div><?php endif; ?>
        <?php print render($page['help']); ?>     
        <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
        <?php print render($page['content']); ?>
      </div> 
    
    </div>

  </main> 
  
  <footer id="footer"><?php print render($page['footer']) ?></footer> 

</div>

<div id="mobile-panel">
  <?php print render($page['mobile_panel']) ?>
</div>
