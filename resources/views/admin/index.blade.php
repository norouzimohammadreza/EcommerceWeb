<x-admin.master.master>
<x-slot name="title">Admin Dashboard</x-slot>

    <div id="content" class="main-content">
        <div class="layout-px-spacing">
            <div class="row layout-top-spacing">
                <x-admin.dashboard.income/>
                <x-admin.dashboard.category-sale/>
                <x-admin.dashboard.daily-sale/>
                <x-admin.dashboard.summary/>
                <x-admin.dashboard.all-orders/>
                <x-admin.dashboard.transactions/>
                <x-admin.dashboard.recent-activities/>
                <x-admin.dashboard.account-information/>
                <x-admin.dashboard.recent-orders/>
                <x-admin.dashboard.selling-products/>
            </div>
        </div>
        <x-admin.master.footer/>
    </div>

</x-admin.master.master>
