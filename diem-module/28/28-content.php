<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-28 pt-5 pb-5">
      <div class="bg position-relative">
            <div class="container container-custom h-100">
                  <div class="pt-4 pb-4">
                        <h2 class="text-uppercase ml-3 title mb-0">PROPERTY</h2>
                        <nav aria-label="breadcrumb">
                              <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item text-capitalize"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item bc-item text-capitalize"><a href="#">Property</a></li>
                                    <li class="breadcrumb-item bc-item active text-capitalize">Property Listing</li>
                              </ol>
                        </nav>
                  </div>
            </div>
      </div>
      <div class="bg-white">
            <div class="container container-custom pt-4 pt-lg-5 pb-4 pb-lg-5">
                  <div class="group-form p-lg-5 p-4">
                        <form>
                              <div class="row">
                                    <div class="col-lg-3 col-12">
                                          <input type="text" class="form-control" placeholder="Key words..."
                                                id="keyword" name="keyword">
                                    </div>
                                    <div class="col-lg-3 col-12 mt-3 mt-lg-0">
                                          <div class="form-group">
                                                <select id="any" class="form-control ">
                                                      <option value="0">Any</option>
                                                      <option value="1">For lease</option>
                                                      <option value="2">For rent</option>
                                                      <option value="3">For sale</option>
                                                      <option value="4">For sale or lease</option>
                                                      <option value="5">Pending</option>
                                                      <option value="6">Sold</option>

                                                </select>
                                          </div>
                                    </div>
                                    <div class="col-lg-3 col-12">
                                          <div class="form-group">
                                                <select class="form-control">
                                                      <option value="0">Type or select some options</option>
                                                      <option value="1">Country house</option>
                                                      <option value="2">Villa</option>
                                                      <option value="3">Apartment</option>
                                                      <option value="4">Office</option>
                                                      <option value="5">House</option>
                                                      <option value="6">Building</option>
                                                      <option value="7">Shop</option>
                                                      <option value="8">Acreage</option>
                                                </select>
                                          </div>
                                    </div>
                                    <div class="col-lg-3 col-12">
                                          <input type="text" class="form-control" placeholder="Address...">
                                    </div>
                              </div>
                              <div class="row">
                                    <div class="col-lg-3 col-12">
                                          <div id="slider-range" class="w-100"></div>
                                    </div>
                                    <div class="col-lg-3 col-12 mt-3 mt-lg-0">
                                          <div class="d-flex">
                                                <a class="btn btn-search text-white w-100 text-uppercase p-2"
                                                      href="#">Search</a>
                                          </div>
                                    </div>
                              </div>
                        </form>

                  </div>

                  <div class="d-md-flex justify-content-end mt-3">
                        <div class="form-group">
                              <select id="orderby" class="form-control ">
                                    <option value="0">Title</option>
                                    <option value="1">Ref #</option>
                                    <option value="2">List date</option>
                                    <option value="3">Modified</option>
                                    <option value="4">Price</option>
                                    <option value="5">Featured</option>
                              </select>
                        </div>
                        <div class="form-group ml-lg-3">
                              <select id="ordertype" class="form-control ">
                                    <option value="0">Descending</option>
                                    <option value="1">Ascending</option>
                              </select>
                        </div>
                        <div class="d-flex justify-content-end mb-3">
                              <div class="ml-3">
                                    <button class="btn btn-filter text-white w-100 pt-2 pb-2 pl-3 pr-3"
                                          href="#">Filter</button>
                              </div>
                              <div class="ml-3">
                                    <button class="btn btn-reset text-white w-100 pt-2 pb-2 pl-3 pr-3"
                                          href="#">Reset</button>
                              </div>
                        </div>

                  </div>

                  <div class="d-flex justify-content-end">
                        <div>
                              <button class="btn btn-custom">
                                    <i class="fa fa-list icon-list" aria-hidden="true"></i>
                              </button>
                        </div>
                        <div class="ml-2">
                              <button class="btn btn-custom" onclick="clickList()">
                                    <i class="fa fa-bars icon-list" aria-hidden="true"></i>
                              </button>
                        </div>
                  </div>

                  <div class="row pt-4">
                        <div class="col-12">
                              <div class="card mb-3">
                                    <div class="row no-gutters d-md-flex align-items-center">
                                          <div class="col-md-4">
                                                <img src="./images/28-img1.png" class="card-img w-100"
                                                      alt="Hình 1 module 28 ">
                                          </div>
                                          <div class="col-md-8">
                                                <div class="card-body pl-0 pr-0 pl-md-4 pr-md-4">
                                                      <div class="d-flex justify-content-between">
                                                            <a href="#">
                                                                  <h5 class="card-title text-dark mb-0">45243, Ciputra
                                                                        A1
                                                                  </h5>
                                                            </a>
                                                            <span class="price">€ 500.000</span>
                                                      </div>
                                                      <p class="card-text mb-0"><small class="text-muted">180 West
                                                                  College
                                                                  Street, Abbeville, AL.</small></p>
                                                      <p class="card-text">Typi non habent claritatem insitam; est usus
                                                            legentis in iis qui facit eorum claritatem.</p>
                                                      <hr>
                                                      <div class="d-flex justify-content-between content-icon">
                                                            <div class="d-flex align-items-center">
                                                                  <i class="fa fa-plus-square-o mr-2"
                                                                        aria-hidden="true"></i>
                                                                  <span>80 sqmt</span>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                  <div class="mr-2">
                                                                        <i class="fa fa-shower mr-1"
                                                                              aria-hidden="true"></i>
                                                                        <span>2</span>
                                                                  </div>
                                                                  <div class="ml-3">
                                                                        <i class="fa fa-bed mr-1"
                                                                              aria-hidden="true"></i>
                                                                        <span>4</span>
                                                                  </div>
                                                            </div>
                                                      </div>
                                                      <hr>
                                                      <div class="d-flex justify-content-between mt-2 mb-2">
                                                            <span
                                                                  class="text-capitalize font-italic text-category">villa</span>
                                                            <div class="d-flex">
                                                                  <a class="btn btn-addlist text-white w-100"
                                                                        href="#">Add to compare list</a>
                                                            </div>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </div>
                        <div class="col-12">
                              <div class="card mb-3">
                                    <div class="row no-gutters d-md-flex align-items-center">
                                          <div class="col-md-4">
                                                <img src="./images/28-img1.png" class="card-img w-100"
                                                      alt="Hình 1 module 28 ">
                                          </div>
                                          <div class="col-md-8">
                                                <div class="card-body pl-0 pr-0 pl-md-4 pr-md-4">
                                                      <div class="d-flex justify-content-between">
                                                            <a href="#">
                                                                  <h5 class="card-title text-dark mb-0">45243, Ciputra
                                                                        A1
                                                                  </h5>
                                                            </a>
                                                            <span class="price">€ 500.000</span>
                                                      </div>
                                                      <p class="card-text mb-0"><small class="text-muted">180 West
                                                                  College
                                                                  Street, Abbeville, AL.</small></p>
                                                      <p class="card-text">Typi non habent claritatem insitam; est usus
                                                            legentis in iis qui facit eorum claritatem.</p>
                                                      <hr>
                                                      <div class="d-flex justify-content-between content-icon">
                                                            <div class="d-flex align-items-center">
                                                                  <i class="fa fa-plus-square-o mr-2"
                                                                        aria-hidden="true"></i>
                                                                  <span>80 sqmt</span>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                  <div class="mr-2">
                                                                        <i class="fa fa-shower mr-1"
                                                                              aria-hidden="true"></i>
                                                                        <span>2</span>
                                                                  </div>
                                                                  <div class="ml-3">
                                                                        <i class="fa fa-bed mr-1"
                                                                              aria-hidden="true"></i>
                                                                        <span>4</span>
                                                                  </div>
                                                            </div>
                                                      </div>
                                                      <hr>
                                                      <div class="d-flex justify-content-between mt-2 mb-2">
                                                            <span
                                                                  class="text-capitalize font-italic text-category">villa</span>
                                                            <div class="d-flex">
                                                                  <a class="btn btn-addlist text-white w-100"
                                                                        href="#">Add to compare list</a>
                                                            </div>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>

                  <!-- <div class="row" id="list-items">
                        <div class="col-12 col-md-6 col-lg-4">
                              <div class="card mb-3">
                                    <img src="./images/28-img1.png" class="card-img w-100" alt="Hình 1 module 28 ">
                                    <div class="card-body pl-0 pr-0">
                                          <div class="d-flex justify-content-between">
                                                <a href="#">
                                                      <h5 class="card-title text-dark mb-0">45243, Ciputra
                                                            A1
                                                      </h5>
                                                </a>
                                                <span class="price">€ 500.000</span>
                                          </div>
                                          <p class="card-text mb-0"><small class="text-muted">180 West
                                                      College
                                                      Street, Abbeville, AL.</small></p>
                                          <p class="card-text">Typi non habent claritatem insitam; est usus
                                                legentis in iis qui facit eorum claritatem.</p>
                                          <hr>
                                          <div class="d-flex justify-content-between content-icon">
                                                <div class="d-flex align-items-center">
                                                      <i class="fa fa-plus-square-o mr-2" aria-hidden="true"></i>
                                                      <span>80 sqmt</span>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                      <div class="mr-2">
                                                            <i class="fa fa-shower mr-1" aria-hidden="true"></i>
                                                            <span>2</span>
                                                      </div>
                                                      <div class="ml-3">
                                                            <i class="fa fa-bed mr-1" aria-hidden="true"></i>
                                                            <span>4</span>
                                                      </div>
                                                </div>
                                          </div>
                                          <hr>
                                          <div class="d-flex justify-content-between mt-2 mb-2">
                                                <span class="text-capitalize font-italic text-category">villa</span>
                                                <div class="d-flex">
                                                      <a class="btn btn-addlist text-white w-100" href="#">Add to
                                                            compare list</a>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div> -->
            </div>
      </div>

</div>
