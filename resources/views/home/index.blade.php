<x-home.master.master :categories="$categories"
                      :products="$products">
    <x-slot name="title">فروشگاه</x-slot>
    <main id="main-body-one-col" class="main-body">
        <x-home.slide-show/>
    </main>
</x-home.master.master>
