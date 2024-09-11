<x-admin.master.master>
    <x-slot name="title">Create New Product</x-slot>
    <div class="col-lg-12 col-12 layout-spacing">
        <div class="statbox widget box box-shadow">
        <form method="post" action="{{route('product.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-row mb-4">
                <div class="form-group col-md-6">
                    <label for="title">نام محصول</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="نام محصول">
                </div>
                <div class="form-group col-md-6">
                    <label for="price">قیمت محصول </label>
                    <input type="text" class="form-control" name="price" id="price" placeholder="قیمت محصول ">
                </div>
            </div>
            <div class="form-row mb-4">
                <div class="form-group col-md-6">
                    <label for="count"> تعداد موجودی</label>
                    <input type="number" class="form-control" id="count" name="count" placeholder=" تعداد موجودی">
                </div>
                <div class="form-group col-md-6">
                    <label for="category">دسته بندی  محصولات </label>

                    <select class="selectpicker form-control p-2" name="category_id">
                        @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->title}}</option>
                        @endforeach
                    </select>
                </div>
            </div>


            <div class="form-row mb-4">
                <label for="description">توضیحات محصول</label>
                <textarea  type="text" class="form-control" id="description" name="description"></textarea>
            </div>

            <div class="form-row mb-4">
                <label for="image" class="d-block">بارگذاری تصویر    </label>
                <input name="image" type="file" class="form-control" id="image" placeholder="">
            </div>

            <button type="submit" class="btn btn-primary mt-3">ثبت محصول</button>

        </form>
    </div>
    </div>

</x-admin.master.master>
