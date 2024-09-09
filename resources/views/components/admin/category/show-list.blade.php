                <div class="widget-content widget-content-area">
                    <div class="table-responsive mb-4">

                        <table id="style-3" class="table style-3  table-hover">
                            <thead>
                            <tr>
                                <th class="checkbox-column text-center"> نام دسته بندی </th>
                                <th class="text-center">تصویر</th>
                                <th>تاریخ ثبت</th>
                                <th class="text-center">وضیعت</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                            <tr>
                                <td class="checkbox-column text-center">{{$category->title}}</td>
                                <td class="text-center">
                                    <span><img src="{{asset('category/'. $category->image)}}" width="90px" height="90px" class="profile-img" alt="avatar"></span>
                                </td>
                                <td>{{$category->created_at}}</td>
                                <td class="text-center"><span class="shadow-none badge {{($category->status==1)?'badge-primary':'badge-warning'}}">{{($category->status==1)? 'منتخب':'نیاز به تایید'}}</span></td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

