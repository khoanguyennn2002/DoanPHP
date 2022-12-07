
@extends('front.layout.master')
  


  @section('title','Product')
  
  @section('body')
      <!-- Breadcrumb Section begin-->
      <div class="breacrumb-section">
          <div class="container">
              <div class="row">
                  <div class="col-lg-12">
                      <div class="breadcrumb-text">
                          <a href="index.html"><i class="fa fa-home"></i> Home</a>
                          <a href="shop.html">Shop</a>
                          <span>Detail</span>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- Breadcrumb Section end-->
  
      <!-- product shop Section begin -->
      <section class="product -shop spad page-details">
          <div class="container">
              <div class="row">
                  <div class="col-lg-3">
                      <div class="filter-widget">
                          <h4 class="fw-title">Categories</h4>
                          <ul class="filter-catagories">
                              <li><a href="#">Men</a></li>
                              <li><a href="#">Women</a></li>
                              <li><a href="#">Couple</a></li>
                          </ul>
                      </div>
                      <div class="filter-widget">
                          <h4 class="fw-title">Brand</h4>
                          <div class="fw-brand-check">
                              <div class="bc-item">
                                  <label for="bc-calvin">
                                    G-SHOCK
                                      <input type="checkbox" id="bc-calvin">
                                      <span class="checkmark"></span>
                                  </label>
                              </div>
                              <div class="bc-item">
                                  <label for="bc-diesel">
                                 Orther
                                      <input type="checkbox" id="bc-diesel">
                                      <span class="checkmark"></span>
                                  </label>
                              </div>
                              
                          </div>
                      </div>
                      <div class="filter-widget">
                          <h4 class="fw-title">Price</h4>
                          <div class="filter-range-wrap">
                              <div class="range-slider">
                                  <div class="price-input">
                                      <input type="text" id="minamount">
                                      <input type="text" id="maxamount">
                                  </div>
                              </div>
                              <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"
                                  data-min="0" data-max="10000000">
                                  <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                                  <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                  <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                              </div>
                          </div>
                          <a href="#" class="filter-btn">Filter</a>
                      </div>
                      <div class="filter-widget">
                          <h4 class="fw-title">Color</h4>
                          <div class="fw-color-choose">
                              <div class="cs-item">
                                  <input type="radio" id="cs-black">
                                  <label class="cs-black" for="cs-black">black</label>
                              </div>
                              <div class="cs-item">
                                  <input type="radio" id="cs-violet">
                                  <label class="cs-violet" for="cs-violet">violet</label>
                              </div>
                              <div class="cs-item">
                                  <input type="radio" id="cs-blue">
                                  <label class="cs-blue" for="cs-blue">blue</label>
                              </div>
                              <div class="cs-item">
                                  <input type="radio" id="cs-yellow">
                                  <label class="cs-yellow" for="cs-yellow">yellow</label>
                              </div>
                              <div class="cs-item">
                                  <input type="radio" id="cs-red">
                                  <label class="cs-red" for="cs-red">red</label>
                              </div>
                              <div class="cs-item">
                                  <input type="radio" id="cs-green">
                                  <label class="cs-green" for="cs-green">green</label>
                              </div>
  
                          </div>
                      </div>
                      <div class="filter-widget">
                          <h4 class="fw-title">Size</h4>
                          <div class="fw-size-choose">
                              <div class="sc-item">
                                  <input type="radio" id="s-size">
                                  <label for="s-size">55mm</label>
                              </div>
                              <div class="sc-item">
                                  <input type="radio" id="m-size">
                                  <label for="m-size">51mm</label>
                              </div>
                              <div class="sc-item">
                                  <input type="radio" id="m-size">
                                  <label for="m-size">45mm</label>
                              </div>   <div class="sc-item">
                                  <input type="radio" id="m-size">
                                  <label for="m-size"> &lt 45mm </label>
                              </div>
  
                           
                             
                          </div>
                      </div>
                      <div class="filter-widget">
                          <h4 class="fw-title">Tags</h4>
                          <div class="fw-tags">
                              <a href="#">Watch</a>
                             
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-9">
                      <div class="row">
                          <div class="col-lg-6">
                              <div class="product-pic-zoom">
                                  <img class="product-big-img" src="front/img/products/{{$product->productImages[0]->path}}" alt="">
                                  <div class="zoom-icon">
                                      <i class="fa fa-search-plus"></i>
                                  </div>
                              </div>
                              <div class="product-thumbs">
                                  <div class="product-thumbs-track ps-slider owl-carousel">
  
                                  @foreach($product->productImages as $productImages)
                                      <div class="pt active" data-imgbigurl="front/img/products/{{$productImages->path}}">
                                          <img src="front/img/products/{{$productImages->path}}" alt="">
                                      </div>
                                      @endforeach
              
                                      </div>
                                  </div>
                          </div>
                          <div class="col-lg-6">
                              <div class="product-details">
                                  <div class="pd-title">
                                      <span>oranges</span>
                                      <h3>Pure Pineapple</h3>
                                      <a href="#" class="heart-icon"><i class="icon_heart_alt"></i></a>
                                  </div>
                              
                                  <div class="pd-desc">
                                      <p>
                                          thong tin san pham
                                      </p>
                                      <h4 class="money">{{$product->price}} </h4>
                                  </div>
                                  <div class="pd-color">
                                      <h6>WatchFace</h6>
                                      <div class="pd-size-choose">
                                          @foreach(array_unique(array_column($product->productDetails->toArray(),'watchFace')) as $productWatchface)
                                          <div class="sc-item">
                                              <input type="radio" id="sm-face">
                                              <label for="sm-face">{{$productWatchface}}</label>
                                          </div>
                                          @endforeach
                                     
                                      
                                      </div>
                                      
                                  </div>
                                  <div class="pd-color">  <h6> Size</h6>
                                  <div class="pd-face-choose">
                                      <div class="sc-item">
                                          <input type="radio" id="sm-size">
                                          <label for="sm-size">{{$product->size}}</label>
                                      </div>
                                      
                                  </div>
                                  </div>
                                  <div class="pd-color" >  
                                      <h6> Strap</h6>
                                          <div class="pd-size-choose">
                                          @foreach(array_unique(array_column($product->productDetails->toArray(),'strap')) as $productStrap)
                                      <div class="sc-item">
  
                                          <input type="radio" id="sm-size">
                                          <label for="sm-size">{{$productStrap}}</label>
                                      </div>
                                      @endforeach
                                  </div>
                              </div>
  
                           
                                  <div class="quantity">
                                      <div class="quantity">
                                          <div class="pro-qty">
                                              <input type="text" value="1">
                                          </div>
                                          <a href="#" class="primary-btn pd-cart">Add To Cart</a>
                                      </div>
                                  </div>
                          
                                  <div class="pd-share">
                                      <div class="p-core">Sku: {{$product->sku}}</div>
                                      <div class="pd-social">
                                          <a href="#"><i class="ti-facebook"></i></a>
                                          <a href="#"><i class="ti-twitter-alt"></i></a>
                                          <a href="#"><i class="ti-linkedin"></i></a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="product-tab">
                          <div class="tab-item">
                              <ul class="nav" role="tablist">
                                  <li><a class="active" href="#tab-1"data-toggle="tab">DESCRIPTION</a></li>
                                  <li><a href="#tab-2"data-toggle="tab">SPECIFICATIONS</a></li>
  
                              </ul>
                          </div>
                          <div class="tab-item-context">
                             <div class="tab-content">
                              <div class="tab-pane fade-in active" id="tab-1" role="tabpanel">
                                  <div class="product-content">
                                      {!! $product->description !!}
                                  </div>
                              </div>
                              <div class="tab-pane fade" id="tab-2" role="tabpanel">
                                  <div class="specification-table">
                                      <table>
                                          <tr>
                                              <td class="p-catagory">Price</td>
                                              <td>
                                                  <div class="p-price">
                                                     {{$product->price}}
                                                 
                                                  </div>
                                              </td>
                                          </tr>
                                          <tr>
                                              <td class="p-catagory">Add To Cart</td>
                                              <td>
                                                  <div class="cart-add">+ add to card</div>
                                              </td>
                                          </tr>
                                          <tr>
                                              <td class="p-catagory">Availability</td>
                                              <td>
                                                  <div class="p-stock">22 in stock</div>
                                              </td>
                                          </tr>
                                          <tr>
                                              <td class="p-catagory">WatchFace</td>
                                              <td>
                                              @foreach(array_unique(array_column($product->productDetails->toArray(),'watchFace')) as $productWatchface)
                                                  <div class="p-weight"> {{$productWatchface}}</div>
                                              @endforeach
                                              </td>
                                          </tr>
                                          <tr>
                                              <td class="p-catagory">Size</td>
                                              <td>
                                                  <div class="p-size"> {{$product->size}}</div>
                                              </td>
                                          </tr>
                                          <tr>
                                              <td class="p-catagory">Color</td>
                                              <td> <div class="p-size">{{$product->color}}</div></td>
                                             
                                          </tr>
                                          <tr>
                                              <td class="p-catagory">Sku</td>
                                              <td>
                                                  <div class="p-code">{{$product->sku}}</div>
                                              </td>
                                          </tr>
      
                                      </table>
                                  </div>
                              </div>
                             
                             </div>
                          </div>
                          
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- product shop Section begin -->
  @endsection
     