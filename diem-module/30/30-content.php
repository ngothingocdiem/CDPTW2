<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-30 pt-5 pb-5">
      <div class="container container-custom">
            <div id="map" class="w-100 maps p-4 ">
                  <h4 class="text-uppercase mb-3">location</h4>
                  <iframe
                        src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3918.4618901358263!2d106.75673206472686!3d10.852430842269989!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1zY2FvIMSR4bqzbmcgY8O0bmcgbmdo4buHIHRo4bunIMSR4bupYw!5e0!3m2!1sen!2s!4v1596052383956!5m2!1sen!2s"
                         allowfullscreen=""
                        aria-hidden="false" tabindex="0"></iframe>
            </div>

            <div class="d-lg-flex p-3 info-contact mt-4 mb-4">
                  <a class="" href="#">
                        <div class="mb-2 mb-lg-0 mr-lg-3 d-flex align-items-center">
                              <i class="fa fa-share-alt mr-1" aria-hidden="true"></i>
                              <span class="text-capitalize">share</span>
                        </div>
                  </a>
                  <a class="" href="#">
                        <div class="mb-2 mb-lg-0 mr-lg-3 d-flex align-items-center">
                              <i class="fa fa-facebook mr-1" aria-hidden="true"></i>
                              <span class="text-capitalize">facebook</span>
                        </div>
                  </a>
                  <a class="" href="#">
                        <div class="mb-lg-0 d-flex align-items-center">
                              <i class="fa fa-twitter mr-1" aria-hidden="true"></i>
                              <span class="text-capitalize">tweet</span>
                        </div>
                  </a>
            </div>
      </div>

</div>