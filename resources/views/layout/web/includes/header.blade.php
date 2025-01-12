<header>
    <div class="header-container">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <!-- Header Language -->
                    <div class="col-xs-12 col-sm-6">
                        <div class="welcome-msg">Welcome to Bigstart! </div>
                        <div class="dropdown jtv-language-box"> <a role="button" data-toggle="dropdown" data-target="#"
                                class="block-language dropdown-toggle" href="#"> <img
                                    src="{{ asset('web/images/flag-english.jpg') }}" alt="language"> English <span
                                    class="caret"></span> </a>
                            <ul class="dropdown-menu" role="menu">
                                <li> <a class="selected" href="#"> <img src="images/flag-english.jpg" alt="flag">
                                        <span>English</span> </a> </li>
                                <li> <a href="#"> <img src="{{ asset('web/images/flag-default.jpg') }}" alt="flag">
                                        <span>French</span> </a> </li>
                                <li> <a href="#"> <img src="{{ asset('web/images/flag-german.jpg') }}" alt="flag">
                                        <span>German</span> </a> </li>
                                <li> <a href="#"> <img src="{{ asset('web/images/flag-brazil.jpg') }}" alt="flag">
                                        <span>Brazil</span> </a> </li>
                                <li> <a href="#"> <img src="{{ asset('web/images/flag-chile.jpg') }}" alt="flag">
                                        <span>Chile</span> </a> </li>
                                <li> <a href="#"> <img src="{{ asset('web/images/flag-spain.jpg') }}" alt="flag">
                                        <span>Spain</span> </a> </li>
                            </ul>
                        </div>
                        <!-- End Header Language -->

                        <!-- Header Currency -->
                        <div class="dropdown jtv-currency-box"> <a role="button" data-toggle="dropdown" data-target="#"
                                class="block-currency dropdown-toggle" href="#"> USD <span
                                    class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#"> $ - Dollar </a> </li>
                                <li><a href="#"> � - Pound </a> </li>
                                <li><a href="#"> � - Euro </a> </li>
                            </ul>
                        </div>
                        <!-- End Header Currency -->

                    </div>
                    <div class="col-xs-6 hidden-xs">
                        <!-- Header Top Links -->
                        <div class="jtv-top-links">
                            <div class="links">
                                <ul>
                                    <li> <a title="My Account" href="account_page.html"><span class="hidden-xs">My
                                                Account</span></a> </li>
                                    <li> <a title="Wishlist" href="wishlist.html">Wishlist</a> </li>
                                    <li> <a title="Checkout" href="checkout.html"><span
                                                class="hidden-xs">Checkout</span></a> </li>
                                    <li>
                                        <div class="dropdown block-company-wrapper hidden-xs"> <a role="button"
                                                data-toggle="dropdown" data-target="#"
                                                class="block-company dropdown-toggle" href="#"> More <span
                                                    class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="about_us.html"> About Us </a> </li>
                                                <li><a href="#"> Customer Service </a> </li>
                                                <li><a href="#"> Privacy Policy </a> </li>
                                                <li><a href="sitemap.html">Site Map </a> </li>
                                                <li><a href="#">Search Terms </a> </li>
                                                <li><a href="#">Advanced Search </a> </li>
                                            </ul>
                                        </div>
                                    </li>
                                    @auth
                                        <li> <a href=""
                                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><span
                                                    class="hidden-xs">Log out</span></a> </li>
                                    @else
                                        <li> <a href="{{ route('login') }}"><span class="hidden-xs">Log in</span></a>
                                        </li>
                                    @endauth
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>
                                </ul>
                            </div>
                        </div>
                        <!-- End Header Top Links -->
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <div class="jtv-top-cart-box">
                        <!-- Top Cart -->
                        <div class="mini-cart">
                            <div data-toggle="dropdown" data-hover="dropdown" class="basket dropdown-toggle"> <a
                                    href="shopping_cart.html"> <span class="cart_count">2</span><span
                                        class="price">My Bag / $259.00</span> </a> </div>
                            <div>
                                <div class="jtv-top-cart-content">

                                    <!--block-subtitle-->
                                    <ul class="mini-products-list" id="cart-sidebar">
                                        <li class="item first">
                                            <div class="item-inner"> <a class="product-image"
                                                    title="Product Title Here ref=" #"><img
                                                        alt="Product Title Here"" src="
                                                        {{ asset('web/images/products/img01.jpg') }}"> </a>
                                                <div class="product-details">
                                                    <div class="access"><a class="jtv-btn-remove"
                                                            title="Remove This Item" href="#">Remove</a> <a
                                                            class="btn-edit" title="Edit item" href="#"><i
                                                                class="icon-pencil"></i><span
                                                                class="hidden">Edit item</span></a> </div>
                                                    <p class="product-name"><a href="#">Product Title Here</a> </p>
                                                    <strong>1</strong> x <span class="price">$79.99</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item">
                                            <div class="item-inner"> <a class="product-image"
                                                    title="Product Title Here ref=" single_product.html"><img
                                                        alt="Product Title Here"" src="
                                                        {{ asset('web/images/products/img02.jpg') }}"> </a>
                                                <div class="product-details">
                                                    <div class="access"><a class="jtv-btn-remove"
                                                            title="Remove This Item" href="#">Remove</a> <a
                                                            class="btn-edit" title="Edit item" href="#"><i
                                                                class="icon-pencil"></i><span
                                                                class="hidden">Edit item</span></a> </div>
                                                    <p class="product-name"><a href="#">Product Title Here</a> </p>
                                                    <strong>1</strong> x <span class="price">$88.89</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item last">
                                            <div class="item-inner"> <a class="product-image"
                                                    title="Product Title Here ref=" single_product.html"><img
                                                        alt="Product Title Here"" src="
                                                        {{ asset('web/images/products/img04.jpg') }}"> </a>
                                                <div class="product-details">
                                                    <div class="access"><a class="jtv-btn-remove"
                                                            title="Remove This Item" href="#">Remove</a> <a
                                                            class="btn-edit" title="Edit item" href="#"><i
                                                                class="icon-pencil"></i><span
                                                                class="hidden">Edit item</span></a> </div>
                                                    <p class="product-name"><a href="#">Product Title Here</a> </p>
                                                    <strong>1</strong> x <span class="price">$85.99</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>

                                    <!--actions-->
                                    <div class="actions">
                                        <button class="btn-checkout" title="Checkout" type="button"
                                            onClick="checkout.html"><span>Checkout</span> </button>
                                        <a href="shopping_cart.html" class="view-cart"><span>View Cart</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-4 col-sm-4 col-xs-12 jtv-logo-box">
                    <!-- Header Logo -->
                    <div class="logo"> <a title="eCommerce" href="index.html"><img alt="eCommerce"
                                src="images/logo.png"> </a> </div>
                    <!-- End Header Logo -->
                </div>
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 hidden-xs">
                    <div class="search-box">
                        <form action="https://htmlbigstart.justthemevalley.com/Version1/cat" method="POST"
                            id="search_mini_form" name="Categories">
                            <input type="text" placeholder="Search entire store here..." value="Search" maxlength="70"
                                name="search" id="search">
                            <button type="button" class="search-btn-bg"><span
                                    class="glyphicon glyphicon-search"></span>&nbsp;</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
