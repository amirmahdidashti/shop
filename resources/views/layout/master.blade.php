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

        .footer {
            background-color: #189AB4;
        }

        img,
        figure {
            max-width: 100%;
            height: auto;
            vertical-align: middle;
        }
    </style>
    
</head>

<body>
    <!-- Navbar -->
    <div dir="rtl" style="background-color: #05445E;" class="sticky-top  navbar navbar-expand-sm navbar-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse " id="navbar">
            <ul class="navbar-nav" id="navbar">
                <li class="nav-item">
                    <a class="nav-link  " href="/">خانه</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/products">همه محصولات</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="/admin" data-toggle="dropdown"
                        aria-expanded="false">مدیریت</a>
                    <div class="dropdown-menu ">
                        <a class="dropdown-item" href="/admin/users">کاربران</a>
                        <a class="dropdown-item" href="/admin/products">محصولات</a>
                        <a class="dropdown-item" href="/admin/categories">دسته بندی ها</a>
                    </div>
                </li>
                
            </ul>
        </div>

    </div>
    <!-- Navbar -->

    <div class="container mt-2" style="min-height: 80vh;">
        @yield("content")
    </div>

    <!-- Footer -->
    <div class="container-fluid footer  ">
        <footer class="text-light py-3 mt-4">
            <ul class="nav justify-content-center pb-3 mb-3">
                <li class="nav-item"><a href="index.html" class="nav-link px-2 text-body-secondary text-light">خانه</a>
                </li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary text-light">محصولات برتر</a>
                </li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary text-light">تماس با ما</a>
                </li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary text-light">درباره ما</a></li>
            </ul>
            <ul class="nav justify-content-center   pb-3 mb-3">
                <li class="nav-item px-2 text-body-secondary">شماره تماس: 09100000000</li>
                <li class="nav-item px-2 text-body-secondary">info@example.com :ایمیل</li>

            </ul>
        </footer>
    </div>
    <!-- Footer -->

</body>

</html>