<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-12">
      <div class="bg position-relative pt-5 pb-5">
            <div class="container container-custom h-100 ">
                  <div class="row m-0 d-flex justify-content-center align-items-center">
                        <div class="col-md-3 col-12 ">
                              <h3 class="text-uppercase title">POSITION "PROMO-LEFT"</h3>
                              <p>This is a sample module in position <strong> “promo-left” </strong>. All modules in
                                    this position will be
                                    arranged in <strong>vertical column</strong>. The whole position will be collapsed,
                                    if there are no
                                    modules
                                    published.</p>
                        </div>
                        <div class="col-md-6 col-12 ">
                              <div class="w-100 image"></div>
                        </div>
                        <div class="col-md-3 col-12 mt-3 mt-md-0">
                              <h3 class="text-uppercase title">POSITION "PROMO-RIGHT"</h3>
                              <p>This is a sample module in position <strong>“promo-right” </strong>. All modules in
                                    this position will be
                                    arranged in <strong>vertical column</strong>. The whole position will be collapsed,
                                    if there are no
                                    modules
                                    published.</p>
                        </div>
                  </div>
            </div>
      </div>
      <div class="bg-white position-relative pt-3">
            <div class="container container-custom">
                  <div class="pt-5">
                        <h3 class="text-uppercase title">POSITION "CONTENT-TOP"</h3>
                        <p>This is a sample module in position <strong>“content-top”</strong>. All modules in this
                              position will be arranged in <strong>horizontal row</strong>. The whole position will be
                              collapsed, if there are no modules published.</p>
                  </div>
                  <div class="pt-5">
                        <div class="row">
                              <div class="col-md-3">
                                    <h3 class="text-uppercase title">Position "left"</h3>
                                    <p>
                                          This is a sample module in position <strong>left</strong>. All modules in this
                                          position will be arranged in <strong>vertical column</strong>. The whole
                                                position will be collapsed, if there are no modules published.
                                    </p>
                                    <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc varius nisl id lectus ultricies ut elementum nulla ornare. Nulla sed mi massa, at tincidunt felis.
                                    </p>
                              </div>
                              <div class="col-md-6">
                                    <h2 class="text-uppercase mt-2 title2">LAYOUT VARIATION LEFT | CENTER | RIGHT</h2>
                                    <div class="date">
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                    Created: 01 April 2011 
                                    </div>
                                    <p>This is pretty “old-fashioned” 3 columns layout with content presented at center. On side columns you can present modules with equal importance. The width of side columns can be adjusted conveniently via template parameters.</p>

                                    <div class="text-center mb-3">
                                          <a href="#" class="see-more">See all module positions outline</a>
                                    </div>
                              </div>
                              <div class="col-md-3">
                                    <div class="d-flex align-items-center mb-2">
                                    <i class="fa fa-paper-plane mr-2 " aria-hidden="true"></i>
                                    <h3 class="text-uppercase title mb-0">Position "right"</h3>
                                    </div>
                             
                                    <p>
                                    This is sample module in position <strong>right</strong>. All modules in this position will be arranged in <strong>vertical column</strong>. The whole position will be collapsed, if there are no modules published.
                                    </p>
                                    <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc varius nisl id lectus ultricies ut elementum nulla ornare. Nulla sed mi massa, at tincidunt felis.
                                    </p>
                              </div>
                        </div>
                  </div>
                  <div class="pt-5">
                        <h3 class="text-uppercase title">POSITION "CONTENT-BOTTOM"</h3>
                        <p>This is a sample module in position <strong>“content-bottom”</strong>. All modules in this position will be arranged in <strong>horizontal row</strong>. The whole position will be collapsed, if there are no modules published.</p>
                  </div>
                  <div class="pt-5"> 
      <div class="row">
            <div class="col-md-4">
            <h3 class="text-uppercase title">POSITION "USER5"</h3>
            <p>This is a sample module in position <strong>“user5”</strong>. All modules in this position will be arranged in <strong>vertical column</strong>. The whole position will be collapsed, if there are no modules published.</p>
            </div>
            <div class="col-md-4">
            <h3 class="text-uppercase title">POSITION "USER6"</h3>
            <p>This is a sample module in position <strong>“user6”</strong>. All modules in this position will be arranged in <strong>vertical column</strong>. The whole position will be collapsed, if there are no modules published.</p>
            </div>
            <div class="col-md-4">
            <h3 class="text-uppercase title">POSITION "USER7"</h3>
            <p>This is a sample module in position <strong>“user7”</strong>. All modules in this position will be arranged in <strong>vertical column</strong>. The whole position will be collapsed, if there are no modules published.</p>
            </div>
           
      </div>
                  </div>
            </div>
      </div>
</div>