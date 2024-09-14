<div class="widget-content widget-content-area">
    <div class="table-responsive mb-4">

        <table id="style-3" class="table style-3  table-hover">
            <thead>
            <tr>
                <th class="checkbox-column text-center"> نام محصول </th>
                <th class="text-center">تصویر</th>
                <th>تاریخ ثبت</th>
                <th class="text-center">وضیعت</th>
                <th class="text-center">ویرایش</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <td class="checkbox-column text-center">{{$product->title}}</td>
                    <td class="text-center">
                        <span><img src="{{asset('products/'. $product->image)}}" width="90px" height="90px" class="profile-img" alt="avatar"></span>
                    </td>
                    <td>{{$product->created_at}}</td>
                    <td class="text-center"><span class="shadow-none badge {{($product->is_active==1)?'badge-primary':'badge-warning'}}">{{($product->is_active==1)? 'منتخب':'نیاز به تایید'}}</span></td>
                    <form action="{{route('product.delete',$product)}}" method="post">
                        @method('DELETE')
                        @csrf
                        <td><button type="submit"  class="btn btn-danger">حذف</button></td>
                    </form>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

