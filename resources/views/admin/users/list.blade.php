@extends("layout.admin")
@section("title")  کاربران @endsection
@section("table")users
@endsection
@section("content") 
<div class="text-center my-2">
<a class="text-center btn btn-primary" href="/admin/users/insert">اضافه کردن</a>
</div>
<div class="table">
<table dir="rtl" class="table text-right table-striped">
  <thead>
    <tr>
      <th scope="col">ایدی</th>
      <th scope="col">عکس پروفایل</th>
      <th scope="col">نام</th>
      <th scope="col">ایمیل</th>
      <th scope="col">عملیات</th>
    </tr>
  </thead>
  <tbody>
    @foreach($Users as $User)
    <tr >
      <th scope="row">{{$User->id}}</th>
      <td><img src="{{asset($User->img.'?d=mp')}}"  style="border-radius: 50%;width:35px;height:35px;object-fit:cover;" class="rounded-circle img-fluid"></td>
      <td>{{$User->name}}</td>
      <td>{{$User->email}}</td>
      <td><a href="/admin/users/delete/{{$User->id}}" class="btn-danger btn">حذف</a>
      <a href="/admin/users/{{$User->id}}" class="btn-primary btn">ویرایش</a>
      @if($User->img != 'https://www.gravatar.com/avatar/'.hash( 'sha256', strtolower( trim( $User->email ) )) )
      <a href="/admin/users/delete/img/{{$User->id}}" class="btn-danger btn">بر اساس سایت gravatar</a>
      @endif
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection