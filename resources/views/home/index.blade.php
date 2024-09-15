<x-home.master.master :categories="$categories"
                      :products="$products">
    <x-slot name="title">فروشگاه</x-slot>
    <main id="main-body-one-col" class="main-body">
        <x-home.slide-show/>
        <x-home.view-products :products="$products"/>

        <section class="mb-3">
            <section class="container-xxl">
                <!-- one column -->
                <section class="row py-4">
                    <section class="col"><img class="d-block rounded-2 w-100" src="{{asset('app/assets/images/ads/one-col-1.jpg')}}" alt=""></section>
                </section>

            </section>
        </section>

    </main>
</x-home.master.master>
