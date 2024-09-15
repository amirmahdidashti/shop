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
<form dir="rtl" action="" method="post" class="form-signin text-center " enctype="multipart/form-data">
  @csrf
  <h1 class="h3 mb-3 font-weight-normal">لطفا اطلاعات را وارد کنید</h1>
  @error('name')
    <p>{{ $message }}</p>
  @enderror
  <input type="text" class="form-control  @error('name') is-invalid @enderror" name="name" value="{{old('name',$product->name)}}" placeholder="نام محصول" required>
  @error('price')
    <p>{{ $message }}</p>
  @enderror
  <input type="number" class="form-control @error('price') is-invalid @enderror" name="price" value="{{old('price',$product->price)}}" placeholder="قیمت محصول" required>
  @error('cat_id')
    <p>{{ $message }}</p>
  @enderror
  <select  class="form-control @error('cat_id') is-invalid @enderror" name="cat_id">
    <option value="">بدون دسته بندی</option>
    @foreach ($cats as $cat)
    <option value="{{$cat->id}}" {{$cat->id == old('cat_id',$product->cat_id)?'selected':''}}>{{$cat->name}}</option>
    @endforeach
  </select>
  @error('img')
    <p>{{ $message }}</p>
  @enderror
  <input type="file" name="img" class="form-control @error('img') is-invalid @enderror" accept=".png,.jpg,.jpeg,.gif,.bmp,.ico">
  @error('desc')
    <p>{{ $message }}</p>
  @enderror
  <textarea name="desc" class="form-control @error('desc') is-invalid @enderror" placeholder="توضیحات محصول" required cols="30" rows="10">{{old('desc',$product->desc)}}</textarea>
  <button class="btn btn-lg btn-primary btn-block" type="submit">ذخیره</button>
</form>
@endsection