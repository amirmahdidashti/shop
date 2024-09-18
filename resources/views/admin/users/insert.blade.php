@extends("layout.admin")
@section("title")ثبت محصول @endsection
@section("style")
.form-signin {
  width: 100%;
  max-width: 330px;
  padding: 15px;
  margin: 0 auto;
}

.form-signin .form-control {
  position: relative;
  box-sizing: border-box;
  height: auto;
  padding: 10px;
  font-size: 16px;
  margin-bottom: 10px;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.insert{
  display:none;
}
@endsection
@section("content") 
<form dir="rtl" action="" method="post" class="form-signin text-center" enctype="multipart/form-data">
  
  @csrf
  <h1 class="h3 mb-3 font-weight-normal">لطفا اطلاعات را وارد کنید</h1>
  @error('name')
    <p >{{ $message }}</p>
  @enderror
  <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{old("name")}}"  name="name"  placeholder="نام کاربر" >
  @error('email')
    <p >{{ $message }}</p>
  @enderror
  <input type="email" class="form-control  @error('email') is-invalid @enderror" value="{{old("email")}}"  name="email" placeholder="ایمیل کاربر" >
  @error('password')
    <p >{{ $message }}</p>
  @enderror
  <input type="password" class="form-control  @error('password') is-invalid @enderror" value="{{old(key: "password")}}"  name="password" placeholder="پسورد کاربر" >
  @error('img')
    <p >{{ $message }}</p>
  @enderror
  <input type="file" class="form-control" name="img" accept=".png,.jpg,.jpeg,.gif,.bmp,.ico">
  <button class="btn btn-lg btn-primary btn-block" type="submit">ذخیره</button>

</form>
@endsection