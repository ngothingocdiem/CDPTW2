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
                                          <a class="nav-item nav-link fs-14" id="nav-category-tab" data-toggle="tab"
                                                href="#nav-category" role="tab" aria-controls="nav-category"
                                                aria-selected="true">Kunena Category</a>
                                          <a class="nav-item nav-link fs-14" id="nav-topic-recent-tab" data-toggle="tab"
                                                href="#nav-topic-recent" role="tab" aria-controls="nav-topic-recent"
                                                aria-selected="false">Recent Topics</a>
                                          <a class="nav-item nav-link fs-14" id="nav-general-tab" data-toggle="tab"
                                                href="#nav-general" role="tab" aria-controls="nav-general"
                                                aria-selected="false">General Statistics</a>
                                          <a class="nav-item nav-link active fs-14" id="nav-topic-search-tab"
                                                data-toggle="tab" href="#nav-topic-search" role="tab"
                                                aria-controls="nav-topic-search" aria-selected="false">Search Topics</a>
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
                                                <div class="dropdown-menu p-3" aria-labelledby="dropdownMenuButton">
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
                                                                  <input type="password" class="form-control fs-14"
                                                                        id="password" placeholder="Password">
                                                            </div>
                                                            <div class="form-group form-check">
                                                                  <input type="checkbox" class="form-check-input fs-14"
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

                                    <div class="d-flex justify-content-between align-items-center mt-3 ">
                                          <h1 class="text-uppercase mb-0 name-topic">ADVANCED SEARCH</h1>
                                          <div class="d-flex border-icon  align-items-center justify-content-center">
                                                <i class="fa fa-compress" aria-hidden="true"></i>
                                          </div>
                                    </div>

                                    <div class="mt-3 box-search p-3">
                                          <div class="row">
                                                <div class="col-md-6 col-12">
                                                      <strong class="text-capitalize">search by keyword</strong>
                                                      <hr class="mt-2 mb-2">
                                                      <div class="d-lg-flex justify-content-between">
                                                            <div>
                                                                  <form>
                                                                        <div class="form-group">
                                                                              <label
                                                                                    for="keyword"><b>Keywords:</b></label>
                                                                              <input type="text"
                                                                                    class="form-control bg-transparent"
                                                                                    id="keyword">
                                                                        </div>
                                                                  </form>
                                                            </div>
                                                            <div>
                                                                  <div class="text-white mb-2">test</div>
                                                                  <select class="form-control">
                                                                        <option selected value="0">Search entire posts
                                                                        </option>
                                                                        <option value="1">Search titles only</option>
                                                                  </select>
                                                            </div>
                                                      </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                      <strong class="text-capitalize">search by username</strong>
                                                      <hr class="mt-2 mb-2">
                                                      <div class="d-lg-flex">
                                                            <form>
                                                                  <div class="form-group">
                                                                        <label for="name"><b>User Name:</b></label>
                                                                        <input type="text"
                                                                              class="form-control bg-transparent"
                                                                              id="name">
                                                                  </div>
                                                                  <div
                                                                        class="form-group form-check form-check-custom pl-0 mb-0">
                                                                        <label class="form-check-label fs-14"
                                                                              for="check-name"><b>Exact
                                                                                    Name:</b></label>
                                                                        <input type="checkbox" class="form-check-input"
                                                                              id="check-name">
                                                                  </div>
                                                            </form>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>

                                    <div class="d-flex justify-content-between align-items-center mt-3 ">
                                          <h2 class="text-uppercase mb-0 name-topic2">SEARCH OPTIONS</h2>
                                          <div class="d-flex border-icon  align-items-center justify-content-center">
                                                <i class="fa fa-compress" aria-hidden="true"></i>
                                          </div>
                                    </div>

                                    <div class="mt-3 box-search p-3">
                                          <div class="row">
                                                <div class="col-md-6 col-12">
                                                      <strong class="text-capitalize">Find Posts From</strong>
                                                      <hr class="mt-2 mb-2">
                                                      <div class="d-lg-flex justify-content-between mt-3">
                                                            <div>
                                                                  <select class="form-control">
                                                                        <option selected value="0">Sort Results By
                                                                        </option>
                                                                        <option value="1">Search titles only</option>
                                                                  </select>
                                                            </div>
                                                            <div>
                                                                  <select class="form-control">
                                                                        <option selected value="0">Sort Results By
                                                                        </option>
                                                                        <option value="1">Search titles only</option>
                                                                  </select>
                                                            </div>
                                                      </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                      <strong class="text-capitalize">search by username</strong>
                                                      <hr class="mt-2 mb-2">
                                                      <div class="d-lg-flex justify-content-between mt-3">
                                                            <div>
                                                                  <select class="form-control">
                                                                        <option selected value="0">Sort Results By
                                                                        </option>
                                                                        <option value="1">Search titles only</option>
                                                                  </select>
                                                            </div>
                                                            <div>
                                                                  <select class="form-control">
                                                                        <option selected value="0">Sort Results By
                                                                        </option>
                                                                        <option value="1">Search titles only</option>
                                                                  </select>
                                                            </div>
                                                      </div>
                                                </div>
                                          </div>
                                          <div class="row mt-4">
                                                <div class="col-md-6 col-12">
                                                      <strong class="text-capitalize">search by keyword</strong>
                                                      <hr class="mt-2 mb-2">
                                                      <div class="d-lg-flex justify-content-between mt-2">
                                                            <div>
                                                                  <form>
                                                                        <div class="form-group">
                                                                              <label
                                                                                    for="keyword"><b>Keywords:</b></label>
                                                                              <input type="text"
                                                                                    class="form-control bg-transparent"
                                                                                    id="keyword">
                                                                        </div>
                                                                  </form>
                                                            </div>
                                                            <div>
                                                                  <div class="text-white mb-2">test</div>
                                                                  <select class="form-control">
                                                                        <option selected value="0">Search entire posts
                                                                        </option>
                                                                        <option value="1">Search titles only</option>
                                                                  </select>
                                                            </div>
                                                      </div>

                                                </div>
                                                <div class="col-md-6 col-12">
                                                      <strong class="text-capitalize">search by keyword</strong>
                                                      <hr class="mt-2 mb-2">

                                                      <select class="custom-select mt-2 fs-14 p-0" size="10" multiple>
                                                            <option selected>Open this select menu</option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                      </select>
                                                      <div class="form-group form-check mt-3">
                                                            <input type="checkbox" class="form-check-input"
                                                                  id="all-search" checked>
                                                            <label class="form-check-label fs-14"
                                                                  for="all-search"><b>Also search in
                                                                        sub-categories</b></label>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>

                                    <div class="d-flex justify-content-center align-items-center mt-4">
                                          <a type="search" class="btn btn-primary text-uppercase fs-14 text-white"
                                                href="#">
                                                <i class="fa fa-search text-white" aria-hidden="true"></i>
                                                search

                                          </a>
                                          <a type="cancel" class="btn btn-outline-secondary text-uppercase fs-14 ml-2"
                                                href="#">
                                                <i class="fa fa-times text-dark" aria-hidden="true"></i>
                                                cancel

                                          </a>
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
                                                <li class="breadcrumb-item bc-item active text-capitalize">Search
                                                      Topics
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
                                                <span class="d-block"><a class="text-hover" href="#">Powered by
                                                            Kunena
                                                            Forum</a></span>
                                          </div>
                                    </div>

                              </div>
                        </div>

                  </div>
            </div>
      </div>
</div>