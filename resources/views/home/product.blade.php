<x-home.master.master :products="$products"
                      :categories="$categories">
    <x-slot name="title"> صفحه کالا {{$product->title }} AM-{{$product->id}}</x-slot>
    <main id="main-body-one-col" class="main-body">

        <!-- start cart -->
        <section class="mb-4">
            <section class="container-xxl" >
                <section class="row">
                    <section class="col">
                        <!-- start vontent header -->
                        <section class="content-header">
                            <section class="d-flex justify-content-between align-items-center">
                                <h2 class="content-header-title">
                                    <span>{{$product->title}}</span>
                                </h2>
                                <section class="content-header-link">
                                    <!--<a href="#">مشاهده همه</a>-->
                                </section>
                            </section>
                        </section>

                        <section class="row mt-4">
                            <!-- start image gallery -->
                            <section class="col-md-4">
                                <section class="content-wrapper bg-white p-3 rounded-2 mb-4">
                                    <section class="product-gallery">
                                        <section class="product-gallery-selected-image mb-3">
                                            <img src="{{asset('products/' . $product->image)}}" alt="">
                                        </section>
                                    </section>
                                </section>
                            </section>
                            <!-- end image gallery -->

                            <!-- start product info -->
                            <x-home.product.product-info :product="$product"/>
                            <!-- end product info -->

                            <x-home.product.product-price :product="$product"/>
                        </section>
                    </section>
                </section>

            </section>
        </section>
        <!-- end cart -->

        <!-- start description, features and comments -->
        <section class="mb-4">
            <section class="container-xxl" >
                <section class="row">
                    <section class="col">
                        <section class="content-wrapper bg-white p-3 rounded-2">
                            <!-- start content header -->
                            <section id="introduction-features-comments" class="introduction-features-comments">
                                <section class="content-header">
                                    <section class="d-flex justify-content-between align-items-center">
                                        <h2 class="content-header-title">
                                            <span class="me-2"><a class="text-decoration-none text-dark" href="#introduction">معرفی</a></span>
                                            <span class="me-2"><a class="text-decoration-none text-dark" href="#features">ویژگی ها</a></span>
                                            <span class="me-2"><a class="text-decoration-none text-dark" href="#comments">دیدگاه ها</a></span>
                                        </h2>
                                        <section class="content-header-link">
                                            <!--<a href="#">مشاهده همه</a>-->
                                        </section>
                                    </section>
                                </section>
                            </section>
                            <!-- start content header -->

                            <section class="py-4">

                                <!-- start vontent header -->
                                <x-home.product.product-description :product="$product"/>

                                <!-- start vontent header -->
                                <section id="comments" class="content-header mt-2 mb-4">
                                    <section class="d-flex justify-content-between align-items-center">
                                        <h2 class="content-header-title content-header-title-small">
                                            دیدگاه ها
                                        </h2>
                                        <section class="content-header-link">
                                            <!--<a href="#">مشاهده همه</a>-->
                                        </section>
                                    </section>
                                </section>
                                <section class="product-comments mb-4">

                                    <section class="comment-add-wrapper">
                                        <button class="comment-add-button" type="button" data-bs-toggle="modal" data-bs-target="#add-comment" ><i class="fa fa-plus"></i> افزودن دیدگاه</button>
                                        <!-- start add comment Modal -->
                                        <section class="modal fade" id="add-comment" tabindex="-1" aria-labelledby="add-comment-label" aria-hidden="true">
                                            <section class="modal-dialog">
                                                <section class="modal-content">
                                                    <section class="modal-header">
                                                        <h5 class="modal-title" id="add-comment-label"><i class="fa fa-plus"></i> افزودن دیدگاه</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </section>
                                                    <section class="modal-body">
                                                        <form class="row" action="#">

                                                            <section class="col-6 mb-2">
                                                                <label for="first_name" class="form-label mb-1">نام</label>
                                                                <input type="text" class="form-control form-control-sm" id="first_name" placeholder="نام ...">
                                                            </section>

                                                            <section class="col-6 mb-2">
                                                                <label for="last_name" class="form-label mb-1">نام خانوادگی</label>
                                                                <input type="text" class="form-control form-control-sm" id="last_name" placeholder="نام خانوادگی ...">
                                                            </section>

                                                            <section class="col-12 mb-2">
                                                                <label for="comment" class="form-label mb-1">دیدگاه شما</label>
                                                                <textarea class="form-control form-control-sm" id="comment" placeholder="دیدگاه شما ..." rows="4"></textarea>
                                                            </section>

                                                        </form>
                                                    </section>
                                                    <section class="modal-footer py-1">
                                                        <button type="button" class="btn btn-sm btn-primary">ثبت دیدگاه</button>
                                                        <button type="button" class="btn btn-sm btn-danger" data-bs-dismiss="modal">بستن</button>
                                                    </section>
                                                </section>
                                            </section>
                                        </section>
                                    </section>

                                    <section class="product-comment">
                                        <section class="product-comment-header d-flex justify-content-start">
                                            <section class="product-comment-date">۲۱ مرداد ۱۴۰۰</section>
                                            <section class="product-comment-title">مجتبی مجدی</section>
                                        </section>
                                        <section class="product-comment-body">
                                            با این تخفیف قیمت خیلی خوبه
                                        </section>
                                    </section>

                                    <section class="product-comment">
                                        <section class="product-comment-header d-flex justify-content-start">
                                            <section class="product-comment-date">۲۱ مرداد ۱۴۰۰</section>
                                            <section class="product-comment-title">هدیه سادات هاشمی نژاد</section>
                                        </section>
                                        <section class="product-comment-body">
                                            پیشنهاد میشه، کتاب مفیدیه
                                        </section>
                                    </section>

                                    <section class="product-comment">
                                        <section class="product-comment-header d-flex justify-content-start">
                                            <section class="product-comment-date">۲۱ مرداد ۱۴۰۰</section>
                                            <section class="product-comment-title">علی محمدی</section>
                                        </section>
                                        <section class="product-comment-body">
                                            هنوز مطالعه نکردم ولی از نظر چاپ و نشر و قيمت مناسب عالیه، کیفیت چاپ و جنسش عالیه با تخفیفی که خورده قیمت ۱۳ تومن واقعا براش فوق العاده هست محتوای کتابم که اصلا نیاز به تعریف نداره
                                        </section>
                                    </section>

                                    <section class="product-comment">
                                        <section class="product-comment-header d-flex justify-content-start">
                                            <section class="product-comment-date">۲۱ مرداد ۱۴۰۰</section>
                                            <section class="product-comment-title">حسین رحیمی دهنوی</section>
                                        </section>
                                        <section class="product-comment-body">
                                            این کتاب رو هر کسی باید حداقل یکبار تو زندگیش بخونه واقعا کتاب خوبیه
                                        </section>

                                        <section class="product-comment ms-5 border-bottom-0">
                                            <section class="product-comment-header d-flex justify-content-start">
                                                <section class="product-comment-date">۲۱ مرداد ۱۴۰۰</section>
                                                <section class="product-comment-title">ادمین</section>
                                            </section>
                                            <section class="product-comment-body">
                                                این کتاب برای همه مفیده
                                            </section>
                                        </section>

                                    </section>


                                </section>
                            </section>

                        </section>
                    </section>
                </section>
            </section>
        </section>
        <!-- end description, features and comments -->

    </main>
</x-home.master.master>
