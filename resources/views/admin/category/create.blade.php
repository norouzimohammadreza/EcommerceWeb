<x-admin.master.master>
    <x-slot name="title">Create Category</x-slot>
                <div class="col-lg-12 col-12 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <form action="{{route('category.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-4">
                                <div class="col">
                                    <label for="title" class="d-block">نام دسته بندی </label>
                                    <input id="title" name="title" type="text" class="form-control" placeholder="نام دسته بندی " value="">
                                    <p class="text-danger">@error('title')
                                        {{ $message }}
                                        @enderror</p>
                                </div>
                                <div class="col">
                                    <label for="image" class="d-block">بارگذاری تصویر    </label>
                                    <input type="file" class="form-control" id="image" name="image">
                                    <p class="text-danger">@error('image')
                                        {{ $message }}
                                        @enderror</p>
                                </div>
                            </div>
                            <input type="submit" name="submit" class="btn btn-primary" value="ثبت دسته بندی">
                        </form>
                    </div>
                </div>

</x-admin.master.master>
