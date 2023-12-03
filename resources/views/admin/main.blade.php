<!DOCTYPE html>
<html lang="en">


@include('admin.partials.header')

<body>
    <div class="wrapper">

        @include('admin.partials.sidebar')
        <div class="main">


            @include('admin.partials.navbar')

            <main class="content">
                <div class="container-fluid p-0">

                    {{-- <h1 class="h3 mb-3">
                        @yield('heading')
                    </h1> --}}
                       {{-- <div class="card"> --}}
                        <br><br>
                    <div class="row">




                        @yield('contact-section')
                        @yield('chef')




                    </div>
                    <br><br><br>

                    {{-- </div> --}}
                </div>
            </main>

            @include('admin.partials.footer')

        </div>
    </div>

    <script src="js/app.js"></script>

</body>

</html>
