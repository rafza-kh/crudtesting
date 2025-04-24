

@include('dashmain/include/head')

<body>
    <div class="wrapper">
        @include('dashmain/include/sidebar')

        <div class="main">
            @include('dashmain/include/navbar')
            <main class="content">
                <div class="container-fluid p-0">

                    @include('dashmain/include/alerts')

                    <div><h1 class="h2 mb-3"><strong>Crud Dashboard</strong></h1></div>
  @yield('main-container')


                </div>





            </main>
            @include('dashmain/include/footer')

        </div>
    </div>

    <script src="js/app.js"></script>



</body>

</html>
