@extends("layout.admin")
@section("title")ثبت دسته بندی @endsection
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
<form dir="rtl" action="" method="post" class="form-signin text-center">
  @csrf
  <h1 class="h3 mb-3 font-weight-normal">لطفا اطلاعات را وارد کنید</h1>
  <input type="text" class="form-control"  name="name" placeholder="نام دسته بندی" required>
  <button class="btn btn-lg btn-primary btn-block" type="submit">ذخیره</button>
</form>
@endsection