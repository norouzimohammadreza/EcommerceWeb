<section class="mb-3">
    <section class="container-xxl" >
        <section class="row">
            <section class="col">
                <section class="content-wrapper bg-white p-3 rounded-2">

                    <section class="content-header">
                        <section class="d-flex justify-content-between align-items-center">
                            <h2 class="content-header-title">
                                <span>پربازدیدترین کالاها</span>
                            </h2>
                        </section>
                    </section>

                    <section class="lazyload-wrapper" >
                        <section class="lazyload light-owl-nav owl-carousel owl-theme">
                        @foreach($products as $product)
                            <section class="item">
                                <section class="lazyload-item-wrapper">
                                    <section class="product">
                                        <section class="product-add-to-cart"><a href="#" data-bs-toggle="tooltip" data-bs-placement="left" title="افزودن به سبد خرید"><i class="fa fa-cart-plus"></i></a></section>
                                        <section class="product-add-to-favorite"><a href="#" data-bs-toggle="tooltip" data-bs-placement="left" title="افزودن به علاقه مندی"><i class="fa fa-heart"></i></a></section>
                                        <a class="product-link" href="{{route('product',$product)}}">
                                            <section class="product-image">
                                                <img class="" src="{{asset('products/'.$product->image)}}" alt="">
                                            </section>
                                            <section class="product-colors"></section>
                                            <section class="product-name"><h3>{{$product->title}}</h3></section>
                                            <section class="product-price-wrapper">
                                                <section class="product-discount">
                                                    <span class="product-old-price">{{$product->price}}</span>
                                                    <span class="product-discount-amount">10%</span>
                                                </section>
                                                <section class="product-price">6,264،000 تومان</section>
                                            </section>
                                            <section class="product-colors">
                                                <section class="product-colors-item" style="background-color: white;"></section>
                                                <section class="product-colors-item" style="background-color: blue;"></section>
                                                <section class="product-colors-item" style="background-color: red;"></section>
                                            </section>
                                        </a>
                                    </section>
                                </section>
                            </section>
                            @endforeach
                        </section>
                    </section>
                </section>
            </section>
        </section>
    </section>
</section>
