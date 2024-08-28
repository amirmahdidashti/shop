
@extends("layout.master")
@section("title")محصولات دسته بندی  {{$cat_name}} @endsection
@section("content")
<h2 dir="rtl" class="text-center">محصولات دسته بندی  {{$cat_name}}</h2>
<div dir="rtl" class="container pb- mb-sm-2">
    <!-- Categories grid-->
    <div class="row no-gutters">
        @foreach($products as $product)
        <!-- Category-->
        <div class="col-lg-3  col-sm-4 col-6 category-card border border-collapse">
            <div class="card border-0">
                <a class="d-block" href="/product/{{$product->id}}"><img class="d-block"
                        src="https://www.bootdey.com/image/340x232/FF8C00/000000" alt="{{$product->name}}"></a>
                <div class="card-body pb-2">
                    <h2 class="h6 mb-2">{{$product->name}}</h2>

                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection