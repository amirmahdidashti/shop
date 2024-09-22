@extends('layout.auth')
@section("title")ثبت نام@endsection
@section('content')
<form dir="rtl" action="" method="post" class="form-signin text-center" enctype="multipart/form-data">
    @csrf
    <h1 class="h3 mb-3 font-weight-normal">لطفا اطلاعات را وارد کنید</h1>
    @error('name')
        <p>{{ $message }}</p>
    @enderror
    <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{old("name")}}"  name="name" placeholder="نام" >
    @error('email')
        <p>{{ $message }}</p>
    @enderror
    <input type="text" class="form-control @error('email') is-invalid @enderror" value="{{old("email")}}"  name="email" placeholder="ایمیل" >
    @error('password')
        <p>{{ $message }}</p>
    @enderror
    <input type="password" class="form-control @error('password') is-invalid @enderror" value="{{old("password")}}"  name="password" placeholder="پسورد" >
    @error('img')
        <p>{{ $message }}</p>
    @enderror
    <input type="file" class="form-control @error('img') is-invalid @enderror" name="img" accept=".png,.jpg,.jpeg,.gif,.bmp,.ico">
    <button class="btn btn-lg btn-primary btn-block" type="submit">ذخیره</button>
</form>
@endsection