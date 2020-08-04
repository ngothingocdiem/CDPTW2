<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-15 pt-5 pb-5">
      <div class="container container-custom h-100 ">
            <div class="mb-3">
                  <h2 class="text-uppercase title">Menu Styles</h2>
                  <div class="d-flex align-items-center date">
                        <i class="fa fa-calendar" aria-hidden="true"></i>
                        <span class="ml-1 mb-0">Created: 01 April 2011</span>
                  </div>
                  <p>JSN Reta provides <strong> 5 menu styles </strong> to present your website navigation. The default
                        Joomla! built-in menu module <strong> (mod_mainmenu) </strong> is utilized, so you don't need to
                        install any external menu modules.</p>
            </div>
            <div class="mb-3">
                  <h3 class="text-uppercase title-content">Top menu</h3>
                  <div class="d-flex justify-content-center">
                        <div class="image">
                              <img src="./images/15-hinh1.png" alt="Hình 1" class="w-100 h-100">
                        </div>

                  </div>
                  <p class="mt-3 mb-0">
                        Top Menu allows you to arrange menu items in horizontal line and assign icons to them. All icons
                        are configured directly in menu item settings page which is very convenient.
                  </p>
                  <div class="text-center mb-3 ">
                        <a href="#" class="see-more">See all module positions outline</a>
                  </div>
                  <hr class="line-dots">
            </div>
            <div class="mb-3">
                  <h3 class="text-uppercase title-content">MAIN MENU</h3>
                  <div class="d-flex justify-content-center">
                        <div class="image">
                              <img src="./images/15-hinh2.png" alt="Hình 2" class="w-100 h-100">
                        </div>

                  </div>
                  <p class="mt-3 mb-0">
                  Main Menu is very powerful menu built with clean accessible XHTML code structure and effective drop-down submenu panels.
                  </p>
                  <h4 class="text-uppercase title-content2 mt-3">
                  MAIN MENU WITH ICONS AND RICH TEXT
                  </h4>
                  <div class="d-flex justify-content-center">
                        <div class="image">
                              <img src="./images/15-hinh3.png" alt="Hình 3" class="w-100 h-100">
                        </div>

                  </div>
                  <p class="mt-3 mb-0">
                  You can add icon and descriptive text to each menu item to make them much clearer and more appealing. Both descriptive text and icons are configured directly in menu item settings page, which is very convenient.
                  </p>
                  <div class="text-center mb-3 ">
                        <a href="#" class="see-more">See live demo of Main Menu</a>
                  </div>
                  <hr class="line-dots">
            </div>
            <div class="mb-3">
                  <h3 class="text-uppercase title-content">SIDE MENU</h3>
                  <div class="d-flex justify-content-center">
                        <div class="image">
                              <img src="./images/15-hinh4.png" alt="Hình 4" class="w-100 h-100">
                        </div>

                  </div>
                  <p class="mt-3 mb-0">
                  Side Menu is very unique vertical menu with slide-out panels. This menu is extremely efficient when you have complex navigation with a lot of menu items.
                  </p>
                  <div class="text-center mb-3 ">
                        <a href="#" class="see-more">See live demo of Side Menu</a>
                  </div>
                  <hr class="line-dots">
            </div>

            <div class="mb-3">
                  <h3 class="text-uppercase title-content">TREE MENU</h3>
                  <div class="d-flex justify-content-center">
                        <div class="image">
                              <img src="./images/15-hinh5.png" alt="Hình 5" class="w-100 h-100">
                        </div>

                  </div>
                  <p class="mt-3 mb-0">
                  Tree Menu represents menu items in clear tree-like hierarchy, which is very appropriate for indexing menu. By default all submenu items are collapsed until you select the parent menu item.
                  </p>
                  <div class="text-center mb-3 ">
                        <a href="#" class="see-more">See live demo of Tree Menu</a>
                  </div>
                  <hr class="line-dots">
            </div>
            
      </div>
</div>