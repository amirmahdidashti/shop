@extends("layout.admin")
@section("title")  دسته بندی ها @endsection
@section("content") 
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
      <td>بزودی</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection