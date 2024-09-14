<x-admin.master.master>
    <x-slot name="title">Categories Management</x-slot>
    <div class="col-lg-12 col-12 layout-spacing">
        <div class="statbox widget box box-shadow">
            <div class="row layout-spacing">
                <div class="col-lg-12">
                    <div class="statbox widget box box-shadow">

                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>دسته بندی ها</h4>
                                </div>
                            </div>
                        </div>

                            <x-admin.category.show-list :categories="$categories"/>

                    </div>
                </div>
            </div>
        </div>
    </div>

</x-admin.master.master>
