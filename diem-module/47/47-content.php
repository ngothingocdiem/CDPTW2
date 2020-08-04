<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-47">
      <div class="bg position-relative">
            <div class="container container-custom h-100">
                  <div class="pt-4 pb-4">
                        <h2 class="text-uppercase ml-md-3 title mb-0">EXT. STYLES</h2>
                        <nav aria-label="breadcrumb" class="fs-14">
                              <ol class="breadcrumb mb-0 pl-0 pl-md-3 pr-0 pr-md-3">
                                    <li class="breadcrumb-item text-capitalize"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item bc-item text-capitalize"><a href="#">Ext. Styles</a></li>
                                    <li class="breadcrumb-item bc-item text-capitalize"><a href="#">Kunena Forum</a>
                                    </li>
                                    <li class="breadcrumb-item bc-item active text-capitalize">Search Topics </li>
                                    </li>
                              </ol>
                        </nav>
                  </div>
            </div>
      </div>
      <div class="bg-white">
            <div class="container container-custom pt-4 pt-lg-5 pb-4 pb-lg-5">
                  <div class="jumbotron p-3 mb-0">
                        <div class="d-flex justify-content-between">
                              <h4 class="text-uppercase fs-14">warning</h4>
                              <i class="fa fa-times icon-close" aria-hidden="true"></i>
                        </div>
                        <p class="lead mb-0 fs-14">Joomla\CMS\Filesystem\Folder::create: Could not create folder.Path:
                              /var/www_demojsn/joomla-templates/jsn_reta_2/pro/cache/kunena</p>
                  </div>
                  <div class="mt-4">
                        <div class="d-flex justify-content-between align-items-center tab-custom">
                              <nav class="d-none d-lg-block">
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                          <a class="nav-item nav-link fs-14" id="nav-category-tab"
                                                data-toggle="tab" href="#nav-category" role="tab"
                                                aria-controls="nav-category" aria-selected="true">Kunena Category</a>
                                          <a class="nav-item nav-link fs-14" id="nav-topic-recent-tab" data-toggle="tab"
                                                href="#nav-topic-recent" role="tab" aria-controls="nav-topic-recent"
                                                aria-selected="false">Recent Topics</a>
                                          <a class="nav-item nav-link fs-14" id="nav-general-tab" data-toggle="tab"
                                                href="#nav-general" role="tab" aria-controls="nav-general"
                                                aria-selected="false">General Statistics</a>
                                          <a class="nav-item nav-link active fs-14" id="nav-topic-search-tab" data-toggle="tab"
                                                href="#nav-topic-search" role="tab" aria-controls="nav-topic-search"
                                                aria-selected="false">Search Topics</a>
                                    </div>
                              </nav>
                              <div class="d-lg-none d-block">

                                    <nav class="navbar navbar-dark bg-transparent">
                                          <button class="navbar-toggler p-0 border-0" type="button"
                                                data-toggle="collapse" data-target="#navbarToggleMobile"
                                                aria-controls="navbarToggleMobile" aria-expanded="false"
                                                aria-label="Toggle navigation">
                                                <i class="fa fa-list text-dark fs-14" aria-hidden="true"></i>
                                                <i class="fa fa-caret-down text-dark fs-14" aria-hidden="true"></i>
                                          </button>
                                    </nav>
                                    <div class="collapse" id="navbarToggleMobile">
                                          <div class="nav nav-tabs d-block" id="nav-tab" role="tablist">
                                                <a class="nav-item nav-link  fs-14" id="nav-category-tab"
                                                      data-toggle="tab" href="#nav-category" role="tab"
                                                      aria-controls="nav-category" aria-selected="true">Kunena
                                                      Category</a>
                                                <a class="nav-item nav-link fs-14" id="nav-topic-recent-tab"
                                                      data-toggle="tab" href="#nav-topic-recent" role="tab"
                                                      aria-controls="nav-topic-recent" aria-selected="false">Recent
                                                      Topics</a>
                                                <a class="nav-item nav-link fs-14" id="nav-general-tab"
                                                      data-toggle="tab" href="#nav-general" role="tab"
                                                      aria-controls="nav-general" aria-selected="false">General
                                                      Statistics</a>
                                                <a class="nav-item nav-link active fs-14" id="nav-topic-search-tab"
                                                      data-toggle="tab" href="#nav-topic-search" role="tab"
                                                      aria-controls="nav-topic-search" aria-selected="false">Search
                                                      Topics</a>
                                          </div>
                                    </div>
                              </div>
                              <div class="login">
                                    <div class="d-flex align-items-center">
                                          <div class="dropdown">
                                                <button class="btn dropdown-toggle" type="button"
                                                      id="dropdownMenuButton" data-toggle="dropdown"
                                                      aria-haspopup="true" aria-expanded="false">
                                                      <i class="fa fa-user-circle mr-1" aria-hidden="true"></i>
                                                      <span class="fs-14">Log in</span>
                                                </button>
                                                <div class="dropdown-menu p-3"
                                                            aria-labelledby="dropdownMenuButton">
                                                            <div class="d-flex justify-content-center ">
                                                                  <a class="icon-user" href="#"><i
                                                                              class="fa fa-users p-2 fa-2x"
                                                                              aria-hidden="true"></i></a>
                                                            </div>
                                                            <form class="mt-3">
                                                                  <div class="form-group">
                                                                        <input type="text" class="form-control fs-14"
                                                                              id="name" placeholder="Username">
                                                                  </div>
                                                                  <div class="form-group">
                                                                        <input type="password"
                                                                              class="form-control fs-14" id="password"
                                                                              placeholder="Password">
                                                                  </div>
                                                                  <div class="form-group form-check">
                                                                        <input type="checkbox"
                                                                              class="form-check-input fs-14"
                                                                              id="exampleCheck1">
                                                                        <label class="form-check-label fs-14"
                                                                              for="exampleCheck1">Remember me</label>
                                                                  </div>
                                                                  <button type="submit"
                                                                        class="btn-submit text-white text-uppercase fs-14">sign
                                                                        in</button>

                                                                  <div class="mt-3 fs-14">
                                                                        <a href="#" class="text-forgot">Forgot your
                                                                              password?</a>
                                                                        <a href="#" class="text-forgot d-block">Forgot
                                                                              your
                                                                              username?</a>
                                                                  </div>
                                                            </form>
                                                      </div>
                                          </div>
                                    </div>
                              </div>

                        </div>
                        <div class="tab-content" id="nav-tabContent">
                              <div class="tab-pane fade mt-3" id="nav-category" role="tabpanel"
                                    aria-labelledby="nav-category-tab">
                                    test 1
                              </div>
                              <div class="tab-pane fade mt-3" id="nav-topic-recent" role="tabpanel"
                                    aria-labelledby="nav-topic-recent-tab">
                                    test 2
                              </div>
                              <div class="tab-pane fade mt-3" id="nav-general" role="tabpanel"
                                    aria-labelledby="nav-general-tab">test 3</div>
                              <div class="tab-pane fade show active" id="nav-topic-search" role="tabpanel"
                                    aria-labelledby="nav-topic-search-tab">
                                    <nav aria-label="breadcrumb" class="d-md-block d-none">
                                          <ol class="breadcrumb breadcrumb2 pl-0 mb-0 fs-14">
                                                <li class="breadcrumb-item text-capitalize">
                                                      <a href="#"><i class="fa fa-home" aria-hidden="true"></i>
                                                      </a></li>
                                                <li class="breadcrumb-item bc-item text-capitalize"><a href="#">Ext.
                                                            Styles</a></li>
                                                <li class="breadcrumb-item bc-item text-capitalize"><a href="#">Kunena
                                                            Forum</a>
                                                </li>
                                                <li class="breadcrumb-item bc-item active text-capitalize">Search Topics 
                                                </li>
                                          </ol>
                                    </nav>
                                    <div class="mt-3 d-flex align-items-end">
                                          <h1 class="text-uppercase mb-0 name-topic">ADVANCED SEARCH</h1>
                                    </div>
                                   
                                    <nav aria-label="breadcrumb" class="d-md-block d-none">
                                          <ol class="breadcrumb breadcrumb2 pl-0 mb-0 fs-14">
                                                <li class="breadcrumb-item text-capitalize">
                                                      <a href="#"><i class="fa fa-home" aria-hidden="true"></i>
                                                      </a></li>
                                                <li class="breadcrumb-item bc-item text-capitalize"><a href="#">Ext.
                                                            Styles</a></li>
                                                <li class="breadcrumb-item bc-item text-capitalize"><a href="#">Kunena
                                                            Forum</a>
                                                </li>
                                                <li class="breadcrumb-item bc-item active text-capitalize">Search Topics 
                                                </li>
                                          </ol>
                                    </nav>
                                    <div>
                                          <div class="text-right">
                                                <a href="#" class="text-hover"><i class="fa fa-wifi fa-rotate-45"
                                                            aria-hidden="true"></i>
                                                </a>
                                          </div>
                                          <div class="text-center fs-14">
                                                <span>
                                                      Time to create page: 0.196 seconds</span>
                                                <span class="d-block"><a class="text-hover" href="#">Powered by Kunena
                                                            Forum</a></span>
                                          </div>
                                    </div>
                                    </div>
                        </div>
                  </div>

            </div>
      </div>
</div>