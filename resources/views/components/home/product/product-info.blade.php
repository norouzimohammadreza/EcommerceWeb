<section class="col-md-5">

    <section class="content-wrapper bg-white p-3 rounded-2 mb-4">

        <!-- start vontent header -->
        <section class="content-header mb-3">
            <section class="d-flex justify-content-between align-items-center">
                <h2 class="content-header-title content-header-title-small">
                    {{$product->title}}
                </h2>
                <section class="content-header-link">
                    <!--<a href="#">مشاهده همه</a>-->
                </section>
            </section>
        </section>
        <section class="product-info">

            <p><span>رنگ : قهوه ای</span></p>
            <p>
                <span style="background-color: #523e02;" class="product-info-colors me-1" data-bs-toggle="tooltip" data-bs-placement="bottom" title="قهوه ای تیره"></span>
                <span style="background-color: #0c4128;" class="product-info-colors me-1" data-bs-toggle="tooltip" data-bs-placement="bottom" title="سبز یشمی"></span>
                <span style="background-color: #fd7e14;" class="product-info-colors me-1" data-bs-toggle="tooltip" data-bs-placement="bottom" title="نارنجی پرتقالی"></span>
            </p>
            <p><i class="fa fa-shield-alt cart-product-selected-warranty me-1"></i> <span> گارانتی اصالت و سلامت فیزیکی کالا</span></p>
            <p><i class="fa fa-store-alt cart-product-selected-store me-1"></i> <span>{{($product->count>0)? 'کالا موجود در انبار' : 'کالا ناموجود است.' }}</span></p>
            <p><a class="btn btn-light  btn-sm text-decoration-none" href="#"><i class="fa fa-heart text-danger"></i> افزودن به علاقه مندی</a></p>
            <section>
                <section class="cart-product-number d-inline-block ">
                    <button class="cart-number-down" type="button">-</button>
                    <input class="" type="number" min="1" max="5" step="1" value="1" readonly="readonly">
                    <button class="cart-number-up" type="button">+</button>
                </section>
            </section>
            <p class="mb-3 mt-5">
                <i class="fa fa-info-circle me-1"></i>
                کاربر گرامی  خرید شما هنوز نهایی نشده است. برای ثبت سفارش و تکمیل خرید باید ابتدا آدرس خود را انتخاب کنید و سپس نحوه ارسال را انتخاب کنید. نحوه ارسال انتخابی شما محاسبه و به این مبلغ اضافه شده خواهد شد. و در نهایت پرداخت این سفارش صورت میگیرد. پس از ثبت سفارش کالا بر اساس نحوه ارسال که شما انتخاب کرده اید کالا برای شما در مدت زمان مذکور ارسال می گردد.
            </p>
        </section>
    </section>

</section>
