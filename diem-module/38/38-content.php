<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-38 pt-5 pb-5">
      <div class="bg position-relative">
            <div class="container container-custom h-100">
                  <div class="pt-4 pb-4">
                        <h2 class="text-uppercase ml-3 title mb-0">explore</h2>
                        <nav aria-label="breadcrumb">
                              <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item text-capitalize"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item bc-item text-capitalize"><a href="#">pages</a></li>
                                    <li class="breadcrumb-item bc-item active text-capitalize">contact</li>
                              </ol>
                        </nav>
                  </div>
            </div>
      </div>
      <div class="bg-white">
            <div class="container container-custom pt-4 pt-lg-5 pb-4 pb-lg-5">
                  <div class="row d-md-flex align-items-center">
                        <div class="col-md-4 col-12">
                              <h3 class="text-uppercase mb-3 title">CONTACT US BY EMAIL</h3>
                              <p class="mt-4 mb-4">
                                    At vero eos et accusamus et iusto odios un dignissimos ducimus qui blan ditiis
                                    prasixer esentium voluptatum.
                              </p>
                              <form>
                                    <div class="form-group">
                                          <input type="text" class="form-control border-0 pl-0" id="name"
                                                placeholder="Your name">
                                    </div>
                                    <div class="form-group">
                                          <input type="email" class="form-control border-0 pl-0" id="exampleInputEmail1"
                                                placeholder="Your mail">
                                    </div>
                                    <div class="form-group">
                                          <input type="text" class="form-control border-0 pl-0" placeholder="Your site">
                                    </div>
                                    <div class="form-group">
                                          <textarea class="form-control border-0 pl-0" id="exampleFormControlTextarea1"
                                                rows="1" placeholder="Your message"></textarea>
                                    </div>
                                    <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn btn-submit text-uppercase text-white">Submit Form</button>
                                    </div>
                              </form>
                        </div>
                        <div class="col-md-8 col-12">
                              <div id="map" class="w-100 p-lg-4 ">

                                    <iframe
                                          src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3918.4618901358263!2d106.75673206472686!3d10.852430842269989!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1zY2FvIMSR4bqzbmcgY8O0bmcgbmdo4buHIHRo4bunIMSR4bupYw!5e0!3m2!1sen!2s!4v1596052383956!5m2!1sen!2s"
                                           allowfullscreen=""
                                          aria-hidden="false" tabindex="0"></iframe>
                              </div>
                        </div>
                  </div>

            </div>
      </div>
</div>