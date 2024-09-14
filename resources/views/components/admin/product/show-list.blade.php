<div class="widget-content widget-content-area">
    <div class="table-responsive mb-4">

        <table id="style-3" class="table style-3  table-hover">
            <thead>
            <tr>
                <th class="checkbox-column text-center"> نام محصول </th>
                <th class="text-center">تصویر</th>
                <th>تاریخ ثبت</th>
                <th class="text-center">وضیعت</th>
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
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

