<section class="col-md-3">
    <section class="content-wrapper bg-white p-3 rounded-2 cart-total-price">
        <section class="d-flex justify-content-between align-items-center">
            <p class="text-muted">قیمت کالا</p>
            <p class="text-muted"> {{$product->price}} <span class="small">تومان</span></p>
        </section>

        <section class="d-flex justify-content-between align-items-center">
            <p class="text-muted">تخفیف کالا</p>
            <p class="text-danger fw-bolder"> 0 <span class="small">تومان</span></p>
        </section>

        <section class="border-bottom mb-3"></section>

        <section class="d-flex justify-content-end align-items-center">
            <p class="fw-bolder"> {{$product->price}} <span class="small">تومان</span></p>
        </section>

        <section class="">
            <a id="next-level" href="#" class="btn btn-danger d-block">افزودن به سبد خرید</a>
        </section>

    </section>
</section>
