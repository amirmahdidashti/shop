@extends("layout.admin")
@section("title")ویرایش محصول @endsection
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
  <input type="text" class="form-control" name="name" value="{{ $product->name }}" placeholder="نام محصول" required>
  <input type="number" class="form-control" name="price" value="{{ $product->price }}" placeholder="قیمت محصول" required>
  
  <select  class="form-control" name="cat_id">
    <option value="">بدون دسته بندی</option>
    @foreach ($cats as $cat)
    <option
    @if ($product->cat_id == $cat->id)
    selected 
    @endif
    value="{{ $cat->id }}">{{ $cat->name }}</option>
    @endforeach
  </select>
  <input type="file" name="img" class="form-control">
  <textarea name="desc" class="form-control" placeholder="توضیحات محصول" required cols="30" rows="10">{{ $product->desc }}</textarea>
  <button class="btn btn-lg btn-primary btn-block" type="submit">ذخیره</button>
</form>
@endsection