<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    {{-- Font awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('css/general-css.css')}}">
    <link rel="stylesheet" href="{{asset('css/admin-styles.css')}}">
    @yield('css')

    <title>@yield('page-title') - {{ config('app.name') }} </title>
</head>

<body>
    <div id="root" class="h-100">
        <!-- top-nav -->
        @include('admin.layouts._top-nav')
        <!-- ./top-nav -->

        <!-- side-bar menu -->
        @include('admin.layouts._side-bar')
        <!-- ./side-bar -->

        <!-- main-contents -->
        <main class="main-contents">
            <div class="container-fluid">
                <div class="card wrapper">
                    <div class="card-header">
                       <h3 class="mb-0">
                        @yield('page-title')
                       </h3>
                    </div>
                    <div class="card-body" id="root">
                        @yield('main-contents')
                    </div>
                </div>

            </div>
        </main>
        <!-- ./main-contents -->

        <!-- footer -->
        @include('admin.layouts._footer')
        <!-- ./end of footer -->
    </div>

    <!-- JAVASCRIPT FILES -->
    <script src="https://unpkg.com/@popperjs/core@2"></script>

    <script src="/js/admin-sidebar.js"></script>
    {{-- Page related JS --}}
    @yield('js')
    
</body>

</html>