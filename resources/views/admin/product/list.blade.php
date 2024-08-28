@extends("layout.admin")
@section("title")  محصولات @endsection
@section("table")products
@endsection
@section("content") 
<table dir="rtl" class="table text-right table-striped">
  <thead>
    <tr>
      <th scope="col">ایدی</th>
      <th scope="col">نام محصول</th>
      <th scope="col">قیمت</th>
      <th scope="col">ایدی دسته بندی</th>
      <th scope="col">عملیات</th>
    </tr>
  </thead>
  <tbody>
    @foreach($products as $product)
    <tr >
      <th scope="row">{{$product->id}}</th>
      <td>{{$product->name}}</td>
      <td>{{$product->price}}</td>
      <td>{{$product->cat_id}}</td>
      <td>بزودی</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection