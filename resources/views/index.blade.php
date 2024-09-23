@extends("layout.master")
@section("title")  خانه @endsection
@section("content")
<div dir="rtl" class="container pb-5 mb-sm-2">
    <!-- Categories grid-->
    <div class="row no-gutters">
        @foreach($cats as $cat)
        <!-- Category-->
        <div class="col-lg-3  col-sm-4 col-6 category-card border border-collapse">
            <div class="card border-0">
                <a class="d-block" href="/products/{{$cat->id}}"><img class="img  d-block"
                        src="{{asset($cat->img)}}" alt="{{$cat->name}}"></a>
                <div class="card-body pb-2">
                    <h2 class="h6 mb-2 text-right">{{$cat->name}}</h2>
                </div>
            </div>
        </div>
       @endforeach
    </div>
</div>
@endsection