<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-10">
      <div class="bg-footer position-relative pt-5 pb-5">
            <div class="container container-custom h-100">
                  <div class="row">
                        <div class="col-md-4 col-12">
                              <div class="d-flex mb-4">
                                    <div class="img-logo">
                                          <img src="./images/10-logo.png" class="w-100 h-100">
                                    </div>

                              </div>
                              <div class="d-flex align-items-center">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <span class="text-capitalize text-contact ml-3"> 81 Gordon Rd, Mandurah WA
                                          6210</span>
                              </div>
                              <div class="d-flex align-items-center mt-3">
                                    <i class="fa fa-paper-plane-o mr-1" aria-hidden="true"></i>
                                    <span class="text-capitalize text-contact ml-1"> Demo@Jsnreta2.Com</span>
                              </div>
                              <div class="d-flex align-items-center mt-3">
                                    <i class="fa fa-phone " aria-hidden="true"></i>
                                    <span class="text-capitalize text-contact ml-2"> (00) 123 456 789</span>
                              </div>
                        </div>
                        <div class="col-md-4 col-12">
                              <div class="row">
                                    <div class="col-md-6 col-12">
                                          <h3 class="text-uppercase text-white mb-4">MY ACCOUNT</h3>
                                          <a href="#">
                                                <div class="text-capitalize mb-2">My Order</div>
                                          </a>
                                          <a href="#">
                                                <div class="text-capitalize mb-2">My Wishlist</div>
                                          </a>
                                          <a href="#">
                                                <div class="text-capitalize mb-2">My Credit Slip</div>
                                          </a>
                                          <a href="#">
                                                <div class="text-capitalize mb-2">My Addresses</div>
                                          </a>
                                    </div>
                                    <div class="col-md-6 col-12">
                                          <h3 class="text-uppercase text-white mb-4">INFORMATION</h3>
                                          <a href="#">
                                                <div class="text-capitalize mb-2">About</div>
                                          </a>
                                          <a href="#">
                                                <div class="text-capitalize mb-2">Terms & Conditions</div>
                                          </a>
                                          <a href="#">
                                                <div class="text-capitalize mb-2">Privacy Policy</div>
                                          </a>
                                          <a href="#">
                                                <div class="text-capitalize mb-2">Contact</div>
                                          </a>
                                    </div>
                              </div>
                        </div>
                        <div class="col-md-4 col-12">
                              <h3 class="text-uppercase text-white">NEWSLETTER</h3>
                              <form class="mt-3">
                                    <div class="form-group">
                                          <input type="email" class="form-control email" id="exampleFormControlInput1"
                                                placeholder="Type your email and press Enter">
                                    </div>
                              </form>
                              <div class="d-flex align-items-center mt-4">
                                    <div class="rounded-circle icon d-flex align-items-center justify-content-center">
                                          <i class="fa fa-facebook" aria-hidden="true"></i>
                                    </div>
                                    <div
                                          class="rounded-circle icon d-flex align-items-center justify-content-center ml-3">
                                          <i class="fa fa-twitter" aria-hidden="true"></i>
                                    </div>
                                    <div
                                          class="rounded-circle icon d-flex align-items-center justify-content-center ml-3">
                                          <i class="fa fa-youtube" aria-hidden="true"></i>
                                    </div>
                                    <div
                                          class="rounded-circle icon d-flex align-items-center justify-content-center ml-3">
                                          <i class="fa fa-pinterest" aria-hidden="true"></i>
                                    </div>
                              </div>
                        </div>
                  </div>
                  <div class="text-center mt-5"><span>Copyright © 2016 – 2018. Joomla template made by JoomlaShine.com.
                              All Rights Reserved.</span></div>
            </div>
      </div>

</div>