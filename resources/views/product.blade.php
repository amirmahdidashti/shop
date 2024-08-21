@extends("layout.master")
@section("title") اسم محصول @endsection
@section("content")
<h2 dir="rtl" class="text-center text-right">نام محصول: {{$product->name}}</h2>
@endsection