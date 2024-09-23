@extends('layout.auth')
@section("title")پروفایل@endsection
@section('content')
<div dir="rtl" class="container text-right rounded profile mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5"
                    width="150px" height="150px" src="{{asset(auth()->user()->img . "?d=mp&s=150")}}"><span
                    class="font-weight-bold">{{auth()->user()->name}}</span><span
                    class="text-black-50">{{auth()->user()->email}}</span><span>
                </span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5 ">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">تغیرات</h4>
                </div>
                <form action="" method="post" class="form-signin text-center" enctype="multipart/form-data">
                <a class="btn btn-danger mb-3 btn-block btn-lg" href="/logout">خروج</a>
                @if (auth()->user()->img != "https://www.gravatar.com/avatar/" . hash('sha256', strtolower(trim(auth()->user()->email))))
                <a class="btn btn-danger mb-3 btn-block btn-lg" href="/profile/deleteimg">حذف عکس</a>
                @endif
                @csrf
                @error('name')
                    <p>{{ $message }}</p>
                @enderror
                <input type="text" class="form-control @error('name') is-invalid @enderror"
                    value="{{old("name", auth()->user()->name)}}" name="name" placeholder="نام">
                @error('email')
                    <p>{{ $message }}</p>
                @enderror
                <input type="text" class="form-control @error('email') is-invalid @enderror"
                    value="{{old("email", auth()->user()->email)}}" name="email" placeholder="ایمیل">
                @error('img')
                    <p>{{ $message }}</p>
                @enderror
                <input type="file" class="form-control @error('img') is-invalid @enderror" name="img">
                <button class="btn btn-lg btn-primary btn-block" type="submit">ذخیره</button>
            </form>
            </div>
            
        </div>
    </div>
</div>
@endsection