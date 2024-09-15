@extends("layout.admin")
@section("title")  محصولات @endsection
@section("table")products
@endsection
@section("content") 
<div class="text-center my-2">
<a class="text-center btn btn-primary" href="/admin/products/insert">اضافه کردن</a>
</div>
<table dir="rtl" class="table text-right table-striped">
  <thead>
    <tr>
      <th scope="col">ایدی</th>
      <th scope="col">نام محصول</th>
      <th scope="col">قیمت</th>
      <th scope="col">نام و ایدی دسته بندی</th>
      <th scope="col">عملیات</th>
    </tr>
  </thead>
  <tbody>
    @foreach($products as $product)
    <tr >
      <th scope="row">{{$product->id}}</th>
      <td>{{$product->name}}</td>
      <td>{{$product->price}}</td>
      <td>{{$product->cat_id}}{{$product->cat_name}}</td>
      <td><a href="/admin/products/{{$product->id}}" class="btn-primary btn">ویرایش</a>
      <a href="/admin/products/delete/{{$product->id}}" class="btn-danger btn">حذف</a>
      @if($product->img!= "files/products/default.jpg")
      <a href="{{asset($product->img)}}" class="btn-primary btn">مشاهده تصویر</a>
      <a href="/admin/products/delete/img/{{$product->id}}" class="btn-danger btn">حذف عکس</a>
      @endif
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection