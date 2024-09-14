<nav class="top-nav">
    <section class="container-xxl ">
        <nav class="">
            <section class="d-none d-md-flex justify-content-md-start position-relative">

                <section class="super-navbar-item me-4">
                    <section class="super-navbar-item-toggle">
                        <i class="fa fa-bars me-1"></i>
                        دسته بندی کالاها
                    </section>
                    <section class="sublist-wrapper position-absolute w-100">
                        <section class="position-relative sublist-area">
                            @foreach($categories as $category)
                                <section class="sublist-item">
                                <section class="sublist-item-toggle">{{$category->title}}</section>
                                <section class="sublist-item-sublist">
                                    <section class="sublist-item-sublist-wrapper d-flex justify-content-around align-items-center">
                                        <section class="sublist-column col">
                                            @foreach($products as $product)
                                                @if($product->category_id == $category->id)
                                                <a href="#" class="sub-category">{{$product->title}}</a>
                                                @endif
                                            @endforeach
                                        </section>

                                    </section>
                                </section>
                            </section>
                            @endforeach
                        </section>
                    </section>
                </section>
                <section class="navbar-item"><a href="#">سوپرمارکت</a></section>
                <section class="navbar-item"><a href="#">تخفیف ها و پیشنهادها</a></section>
            </section>

            <section class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel" style="z-index: 9999999;">
                <section class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasExampleLabel"><a class="text-decoration-none" href="index.html"><img src="assets/images/logo/8.png" alt="logo"></a></h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </section>
                <section class="offcanvas-body">

                    <section class="navbar-item"><a href="#">سوپرمارکت</a></section>
                    <section class="navbar-item"><a href="#">تخفیف ها و پیشنهادها</a></section>
                    <hr class="border-bottom">
                    <section class="navbar-item"><a href="javascript:void(0)">دسته بندی</a></section>
                    <section class="sidebar-nav mt-2 px-3">
                    @foreach($categories as $category)
                        <section class="sidebar-nav-item">
                            <span class="sidebar-nav-item-title">{{$category->title}}<i class="fa fa-angle-left"></i></span>
                            <section class="sidebar-nav-sub-wrapper">
                                <section class="sidebar-nav-sub-item">
                                    @foreach($products as $product)
                                        @if($product->category_id == $category->id)
                                    <span class="sidebar-nav-sub-item-title"><a href="">{{$product->title}}</a></span>
                                        @endif
                                    @endforeach
                                </section>
                            </section>
                        </section>
                        @endforeach
                    </section>
                </section>
            </section>
            
        </nav>
    </section>
</nav>
