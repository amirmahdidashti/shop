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
        @media screen and (min-width: 480px) {
            .profile {
                background: rgba(255, 255, 255, 0.7);
            }
        }
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

        .insert {
            display: none;
        }

        body {
            background-color: #f5f5f5;
        }

        @yield("style")
    </style>

</head>

<body>
    <a class="btn btn-primary" href="/">برگشت به سایت</a>
    @yield("content")
    <script>
        $(".btn").click(function () {
            $(this).hide();
            setTimeout(showbtn, 2000);
        });
        function showbtn() {
            $(".btn").show();
        }
    </script>
</body>

</html>