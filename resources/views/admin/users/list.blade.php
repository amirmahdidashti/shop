@extends("layout.admin")
@section("title")  کاربران @endsection
@section("table")users
@endsection
@section("content") 
<table dir="rtl" class="table text-right table-striped">
  <thead>
    <tr>
      <th scope="col">ایدی</th>
      <th scope="col">نام</th>
      <th scope="col">ایمیل</th>
      <th scope="col">عملیات</th>
    </tr>
  </thead>
  <tbody>
    @foreach($Users as $User)
    <tr >
      <th scope="row">{{$User->id}}</th>
      <td>{{$User->name}}</td>
      <td>{{$User->email}}</td>
      <td>بزودی</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection