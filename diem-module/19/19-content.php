<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-19 pt-5 pb-5">
      <div class="bg position-relative">
            <div class="container container-custom h-100">
                  <div class="pt-4 pb-4">
                        <h2 class="text-uppercase ml-3 title mb-0">explore</h2>
                        <nav aria-label="breadcrumb">
                              <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item text-capitalize"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item bc-item text-capitalize"><a href="#">Library</a></li>
                                    <li class="breadcrumb-item bc-item active text-capitalize">Data</li>
                              </ol>
                        </nav>
                  </div>
            </div>
      </div>
      <div class="bg-white">
            <div class="container container-custom pt-4 pt-lg-5 pb-4 pb-lg-5">
                  <h2 class="text-uppercase title-content">Top menu</h2>
                  <div class="d-flex align-items-center date">
                        <i class="fa fa-calendar mr-1" aria-hidden="true"></i>
                        <span>Created: 01 April 2011</span>
                  </div>
                  <div>
                        <p class="position-relative ml-3">At the top of this page, you can see live demonstration of Top
                              Menu.
                              <img src="./images/19-arrow.png" class="position-absolute">
                        </p>

                        <div>
                              <p class="mb-2">Top Menu allows you to arrange menu items in horizontal line and assign
                                    icons to
                                    them. All icons are configured directly in menu item settings page which is very
                                    convenient.</p>
                              <p class="mb-2">You can choose up to <strong> 500+ Font Awesome icons </strong> to menu
                                    item.</p>
                              <p class="mb-2">To set up icons, you need to go to menu item settings and add symbol
                                    combination <strong>fa
                                          fa-xxx </strong> to menu item's parameter <strong>Link CSS Style</strong>,
                                    where <strong> xxx </strong> is the icon name.</p>
                        </div>
                        <li class="ml-3 mb-3 ">
                              <a href="#" class="see-more">See preview of all icons</a>
                        </li>
                  </div>
            </div>
      </div>

</div>