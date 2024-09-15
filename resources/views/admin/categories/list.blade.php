@extends("layout.admin")
@section("title")  دسته بندی ها @endsection
@section("table")categories
@endsection
@section("content") 
<div class="text-center my-2">
<a class="text-center btn btn-primary" href="/admin/categories/insert">اضافه کردن</a>
</div>
<table dir="rtl" class="table text-right table-striped">
  <thead>
    <tr>
      <th scope="col">ایدی</th>
      <th scope="col">نام دسته بندی</th>
      <th scope="col">عملیات</th>
    </tr>
  </thead>
  <tbody>
    @foreach($Categories as $Category)
    <tr >
      <th scope="row">{{$Category->id}}</th>
      <td>{{$Category->name}}</td>
      <td>
        <a href="/admin/categories/delete/{{$Category->id}}" class="btn-danger btn">حذف</a>
        <a href="/admin/categories/{{$Category->id}}" class="btn-primary btn">ویرایش</a>
        @if($Category->img!= "files/categories/default.jpg")
          <a href="{{asset($Category->img)}}" class="btn-primary btn">مشاهده تصویر</a>
          <a href="/admin/categories/delete/img/{{$Category->id}}" class="btn-danger btn">حذف عکس</a>
        @endif
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection