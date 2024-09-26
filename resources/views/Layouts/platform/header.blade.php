  <?php

    use App\Models\Famille;
    use App\Models\Produit;
    use App\Models\SousFamille;

    // $sous_familles = SousFamille::all();
    $ALL_produit = Produit::limit(6)->get();
    $Fmaille = SousFamille::limit(6)->get();

    $Products = Produit::latest()->get();

    ?>
  <!-- style for make contact simple -->

  <!-- HEADER -->
  <header>
      <!-- Begin Header Top Area -->
      <div class="header-top">
          <div class="container">
              <div class="row">
                  <!-- Begin Header Top Left Area -->
                  <div class="col-lg-3 col-md-4">
                      <div class="header-top-left">
                          <ul class="phone-wrap">
                              <li><span>Telephone:</span><a href="#">(+212) 123 321 345</a></li>
                          </ul>
                      </div>
                  </div>
                  <!-- Header Top Left Area End Here -->
                  <!-- Begin Header Top Right Area -->
                  <div class="col-lg-9 col-md-8">
                      <div class="header-top-right">
                          <ul class="ht-menu">


                              <!-- Begin Language Area -->
                              <li>
                                  <span class="language-selector-wrapper">Language :</span>
                                  <div class="ht-language-trigger"><span>English</span></div>
                                  <div class="language ht-language">
                                      <ul class="ht-setting-list">
                                          <li class="active"><a href="#"><img src="images/menu/flag-icon/1.jpg" alt="">English</a></li>
                                          <li><a href="#"><img src="images/menu/flag-icon/2.jpg" alt="">Français</a></li>
                                      </ul>
                                  </div>
                              </li>
                              <!-- Language Area End Here -->
                              <!-- Begin Setting Area -->
                              <!-- <li>
                                  <div class="ht-setting-trigger"><span><i class="fa fa-user-circle " style="font-size: 20px;"></i></span></div>
                                  <div class="setting ht-setting">
                                      <ul class="ht-setting-list">
                                          <li><a href="login-register.html">My Account</a></li>
                                          <li><a href="checkout.html">Checkout</a></li>
                                          <li><a href="{{route('login.show')}}">Sign In</a></li>
                                      </ul>
                                  </div>
                              </li> -->
                              <li>
                                  @if(auth()->check())
                                  <!-- <a href="{{route('login.logout')}}" class="dropdown-item has-icon text-danger"> <i class="fa fa-sign-out"></i>
                                  Logout
                                </a> -->
                                  @if(auth()->user()->isAdmin == 1 )
                                  <div class="ht-setting-trigger"><span><i class="fa fa-user-circle " style="font-size: 20px;"></i></span></div>
                                  <div class="setting ht-setting">
                                      <ul class="ht-setting-list">
                                          <li><a href="{{route('backend.dachboard')}}"><i class="fa fa-desktop mr-1 " style="font-size: 15px;"></i> Dachboard</a></li>
                                          <li><a href="{{route('login.logout')}}"><i class="fa fa-sign-out mr-1 " style="font-size: 15px;"></i> Log out</a></li>
                                      </ul>
                                  </div>
                                  @else
                                  <div class="ht-setting-trigger"><span><i class="fa fa-user-circle " style="font-size: 20px;"></i></span></div>
                                  <div class="setting ht-setting mt-4" style="width: 300px;">
                                      <center>
                                          <ul class="ht-setting-list">
                                              <span><i class="fa fa-user-circle mb-2" style="font-size: 60px;"></i></span>
                                              <h5>{{auth()->user()->nom}} {{auth()->user()->prenom}}</h5>
                                              <p>{{auth()->user()->email}}</p>
                                              <button class="mb-2 mt-2" style="border-radius:  20px; background-color: white"><a href="{{route('User.profile')}}" style="color: black;"> Account Infomation</a></button>
                                              <hr class="mb-1 mt-1">
                                              <!-- <li><a href=">My Account</a></li> -->
                                              <!-- <li><a href="checkout.html">Checkout</a></li> -->
                                              <li><a href="{{route('login.logout')}}" style="color: red;" class="mt-2"><i class="fa fa-sign-out mr-1 " style="font-size: 15px;"></i> Log out</a></li>
                                          </ul>
                                      </center>
                                  </div>
                                  @endif
                                  @else
                                  <i class="fa fa-user-circle mr-1 " style="font-size: 27px;"></i><a href="{{route('login.show')}}"><b class="mt-2">Account</b></a>
                              </li>
                              @endif
                              <!-- Setting Area End Here -->
                          </ul>
                      </div>
                  </div>
                  <!-- Header Top Right Area End Here -->
              </div>
          </div>
      </div>
      <!-- Header Top Area End Here -->
      <!-- Begin Header Middle Area -->
      <div class="header-middle pl-sm-0 pr-sm-0 pl-xs-0 pr-xs-0">
          <div class="container">
              <div class="row">
                  <!-- Begin Header Logo Area -->
                  <div class="col-lg-3">
                      <div class="logo pb-sm-30 pb-xs-30">
                          <a href="/">
                              <img src="{{asset('platform/assets/images/menu/logo/LOGO1.png')}}" class="mr-5" alt="" height="55px" width="215px">
                          </a>
                      </div>
                  </div>
                  <!-- Header Logo Area End Here -->
                  <!-- Begin Header Middle Right Area -->
                  <div class="col-lg-9">
                      <!-- Begin Header Middle Searchbox Area -->
                      <form action="#" class="hm-searchbox">
                          <select class="nice-select select-search-category">
                              <option value="0">All</option>
                              <option value="10">Laptops</option>
                              <option value="17">- - Prime Video</option>
                              <option value="20">- - - - All Videos</option>
                              <option value="21">- - - - Blouses</option>
                              <option value="22">- - - - Evening Dresses</option>
                              <option value="23">- - - - Summer Dresses</option>
                              <option value="24">- - - - T-shirts</option>
                              <option value="25">- - - - Rent or Buy</option>
                              <option value="26">- - - - Your Watchlist</option>
                              <option value="27">- - - - Watch Anywhere</option>
                              <option value="28">- - - - Getting Started</option>
                              <option value="18">- - - - Computers</option>
                              <option value="29">- - - - More to Explore</option>
                              <option value="30">- - - - TV &amp; Video</option>
                              <option value="31">- - - - Audio &amp; Theater</option>
                              <option value="32">- - - - Camera, Photo </option>
                              <option value="33">- - - - Cell Phones</option>
                              <option value="34">- - - - Headphones</option>
                              <option value="35">- - - - Video Games</option>
                              <option value="36">- - - - Wireless Speakers</option>
                              <option value="19">- - - - Electronics</option>
                              <option value="37">- - - - Amazon Home</option>
                              <option value="38">- - - - Kitchen &amp; Dining</option>
                              <option value="39">- - - - Furniture</option>
                              <option value="40">- - - - Bed &amp; Bath</option>
                              <option value="41">- - - - Appliances</option>
                              <option value="11">TV &amp; Audio</option>
                              <option value="42">- - Chamcham</option>
                              <option value="45">- - - - Office</option>
                              <option value="47">- - - - Gaming</option>
                              <option value="48">- - - - Chromebook</option>
                              <option value="49">- - - - Refurbished</option>
                              <option value="50">- - - - Touchscreen</option>
                              <option value="51">- - - - Ultrabooks</option>
                              <option value="52">- - - - Blouses</option>
                              <option value="43">- - Sanai</option>
                              <option value="53">- - - - Hard Drives</option>
                              <option value="54">- - - - Graphic Cards</option>
                              <option value="55">- - - - Processors (CPU)</option>
                              <option value="56">- - - - Memory</option>
                              <option value="57">- - - - Motherboards</option>
                              <option value="58">- - - - Fans &amp; Cooling</option>
                              <option value="59">- - - - CD/DVD Drives</option>
                              <option value="44">- - Meito</option>
                              <option value="60">- - - - Sound Cards</option>
                              <option value="61">- - - - Cases &amp; Towers</option>
                              <option value="62">- - - - Casual Dresses</option>
                              <option value="63">- - - - Evening Dresses</option>
                              <option value="64">- - - - T-shirts</option>
                              <option value="65">- - - - Tops</option>
                              <option value="12">Smartphone</option>
                              <option value="66">- - Camera Accessories</option>
                              <option value="68">- - - - Octa Core</option>
                              <option value="69">- - - - Quad Core</option>
                              <option value="70">- - - - Dual Core</option>
                              <option value="71">- - - - 7.0 Screen</option>
                              <option value="72">- - - - 9.0 Screen</option>
                              <option value="73">- - - - Bags &amp; Cases</option>
                              <option value="67">- - Meito</option>
                              <option value="74">- - - - Batteries</option>
                              <option value="75">- - - - Microphones</option>
                              <option value="76">- - - - Stabilizers</option>
                              <option value="77">- - - - Video Tapes</option>
                              <option value="78">- - - - Memory Card Readers</option>
                              <option value="79">- - - - Tripods</option>
                              <option value="13">Cameras</option>
                              <option value="14">headphone</option>
                              <option value="15">Smartwatch</option>
                              <option value="16">Accessories</option>
                          </select>
                          <input type="text" placeholder="Enter your search key ...">
                          <button class="li-btn" type="submit"><i class="fa fa-search"></i></button>
                      </form>
                      <!-- Header Middle Searchbox Area End Here -->
                      <!-- Begin Header Middle Right Area -->
                      <div class="header-middle-right">
                          <ul class="hm-menu">
                              <!-- Begin Header Middle Wishlist Area -->
                              <!-- <li class="hm-wishlist">
                                  <a href="wishlist.html">
                                      <span class="cart-item-count wishlist-item-count">0</span>
                                      <i class="fa fa-heart-o"></i>
                                  </a>
                              </li> -->
                              <!-- Header Middle Wishlist Area End Here -->
                              <!-- Begin Header Mini Cart Area -->
                              <li class="hm-minicart">
                                  <div class="hm-minicart-trigger">
                                      <span class="item-icon"></span>
                                      <span class="item-text">£80.00
                                          <span class="cart-item-count">2</span>
                                      </span>
                                  </div>
                                  <span></span>
                                  <div class="minicart">
                                      <ul class="minicart-product-list">
                                          <li>
                                              <a href="single-product.html" class="minicart-product-image">
                                                  <img src="images/product/small-size/1.jpg" alt="cart products">
                                              </a>
                                              <div class="minicart-product-details">
                                                  <h6><a href="single-product.html">Aenean eu tristique</a></h6>
                                                  <span>£40 x 1</span>
                                              </div>
                                              <button class="close">
                                                  <i class="fa fa-close"></i>
                                              </button>
                                          </li>
                                          <li>
                                              <a href="single-product.html" class="minicart-product-image">
                                                  <img src="images/product/small-size/2.jpg" alt="cart products">
                                              </a>
                                              <div class="minicart-product-details">
                                                  <h6><a href="single-product.html">Aenean eu tristique</a></h6>
                                                  <span>£40 x 1</span>
                                              </div>
                                              <button class="close">
                                                  <i class="fa fa-close"></i>
                                              </button>
                                          </li>
                                      </ul>
                                      <p class="minicart-total">SUBTOTAL: <span>£80.00</span></p>
                                      <div class="minicart-button">
                                          <a href="checkout.html" class="li-button li-button-dark li-button-fullwidth li-button-sm">
                                              <span>View Full Cart</span>
                                          </a>
                                          <a href="checkout.html" class="li-button li-button-fullwidth li-button-sm">
                                              <span>Checkout</span>
                                          </a>
                                      </div>
                                  </div>
                              </li>
                              <!-- Header Mini Cart Area End Here -->
                          </ul>
                      </div>
                      <!-- Header Middle Right Area End Here -->
                  </div>
                  <!-- Header Middle Right Area End Here -->
              </div>
          </div>
      </div>
      <!-- Header Middle Area End Here -->
      <!-- Begin Header Bottom Area -->
      <div class="header-bottom header-sticky stick d-none d-lg-block d-xl-block">
          <div class="container">
              <div class="row">
                  <div class="col-lg-12">
                      <!-- Begin Header Bottom Menu Area -->
                      <div class="hb-menu ">
                          <nav>
                              <ul>

                                  <li><a id="AK" href="/">Home</a></li>
                                  <li class="megamenu-holder"><a href="/Products">Product <i class="fa fa-chevron-down mt-2  ml-1"></i></a>
                                      <ul class="megamenu hb-megamenu">
                                          @php
                                          $newThreshold = \Carbon\Carbon::now()->subDays(3);
                                          @endphp

                                          @foreach ($Products as $time)
                                          @if ($time->created_at > $newThreshold)
                                          <li><a href="#">New Products 🔥</a>
                                              <ul>
                                                  @foreach ($Products as $item)
                                                  @if ($item->created_at > $newThreshold)
                                                  <li><a href="/Products/{{$item->id}}">{{$item->designation}}</a></li>
                                                  @endif
                                                  @endforeach
                                              </ul>
                                          </li>
                                          @endif
                                          @endforeach

                                          <li><a href="/Products">All Product</a>
                                              <ul>
                                                  @foreach ($ALL_produit as $a_pro)
                                                  <li><a href="/Products/{{$a_pro->id}}">{{$a_pro->designation}}</a></li>
                                                  @endforeach
                                              </ul>
                                          </li>
                                          <li><a href="single-product.html">Single Products</a>
                                              <ul>
                                                  <li><a href="single-product.html">Single Product</a></li>
                                                  <li><a href="single-product-sale.html">Single Product Sale</a></li>
                                                  <li><a href="single-product-group.html">Single Product Group</a></li>
                                                  <li><a href="single-product-normal.html">Single Product Normal</a></li>
                                                  <li><a href="single-product-affiliate.html">Single Product Affiliate</a></li>
                                              </ul>
                                          </li>
                                      </ul>
                                  </li>

                                  <li class="megamenu-static-holder"><a href="/categories">Categories 🌟</a>
                                      <ul class="megamenu hb-megamenu" style="width: 600px;">

                                          @php
                                          $newThreshold = \Carbon\Carbon::now()->subDays(3);
                                          @endphp
                                          @foreach ($Fmaille as $sous_fam)
                                          @if ($sous_fam->created_at > $newThreshold)
                                          <li>
                                              <a href="#">New categories 🔥</a>
                                              <ul>
                                                  @foreach ($Fmaille as $sub_f)
                                                  @if ($sub_f->created_at > $newThreshold)
                                                  <li><a href="/categories/{{$sub_f->id}}">{{$sub_f->libelle}}</a></li>
                                                  @endif
                                                  @endforeach
                                              </ul>
                                          </li>
                                          @endif
                                          @endforeach
                                      </ul>
                                  </li>

                                  <li><a id="AK" href="/contact-us">Contact</a></li>
                                  <!-- Begin Header Bottom Menu Information Area -->
                                  <li class="hb-info f-right p-0 d-sm-none d-lg-block">
                                      <span>3000 Fes,Av. in the red sea route,Morocco
                                      </span>
                                  </li>
                                  <!-- Header Bottom Menu Information Area End Here -->
                              </ul>
                          </nav>
                      </div>
                      <!-- Header Bottom Menu Area End Here -->
                  </div>
              </div>
          </div>
      </div>
      <!-- Header Bottom Area End Here -->
      <!-- Begin Mobile Menu Area -->
      <div class="mobile-menu-area d-lg-none d-xl-none col-12">
          <div class="container">
              <div class="row">
                  <div class="mobile-menu">
                  </div>
              </div>
          </div>
      </div>
      <!-- Mobile Menu Area End Here -->
  </header>