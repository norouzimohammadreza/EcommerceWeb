<x-home.master.master :categories="$categories"
                      :products="$products">
    <x-slot name="title">فروشگاه</x-slot>
    <main id="main-body-one-col" class="main-body">
        <x-home.slide-show/>
        <x-home.view-products :products="$products"/>
        <x-home.top-ads/>
        <x-home.main-ads/>
    </main>
</x-home.master.master>
