@extends('layout.auth')
@section("title")ورود@endsection
@section('content')
<form dir="rtl" action="" method="post" class="form-signin text-center" enctype="multipart/form-data">
  @csrf
  <h1 class="h3 mb-3 font-weight-normal">لطفا اطلاعات را وارد کنید</h1>
  @error('email')
    <p>{{ $message }}</p>
  @enderror
  <input type="text" class="form-control @error('email') is-invalid @enderror" value="{{old("email")}}"  name="email" placeholder="ایمیل" >
  @error('password')
    <p>{{ $message }}</p>
  @enderror
  <input type="password" class="form-control @error('password') is-invalid @enderror" value="{{old("password")}}"  name="password" placeholder="پسورد" >
  <button class="btn btn-lg btn-primary btn-block" type="submit">ذخیره</button>
</form>
@endsection