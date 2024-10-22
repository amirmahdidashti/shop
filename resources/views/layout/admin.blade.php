<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/gh/rastikerdar/vazirmatn@v33.003/Vazirmatn-Variable-font-face.css"
        rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <title>@yield("title")</title>
    <style>
        * {
            font-family: Vazirmatn;

        }
        .table{
            overflow-x: auto;
        }
        body{
            background-color: #f5f5f5;
        }
        @yield("style")
    </style>
    
</head>

<body>
    <a class="btn btn-primary" href="/">برگشت به سایت</a>
    <div class="text-center my-2">
        <a class="btn btn-primary" href="/admin/products">محصولات</a>
        <a class="btn btn-primary" href="/admin/users">کاربران</a>
        <a class="btn btn-primary" href="/admin/categories">دسته بندی</a>
    </div>
    <div class="text-center"><span>وارد شده به نام: </span><a  href="/profile" >{{ auth()->user()->name }}</a></div>
    @yield("content")
    <script>
        $(".btn").click(function(){
            $(".btn").hide(); 
            setTimeout(showbtn, 2000);
        });
       function showbtn(){
        $(".btn").show();
        }
    </script>
</body>

</html>