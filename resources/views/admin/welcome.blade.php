<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{asset('css/admin.css')}}">
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> --}}

</head>
<body>
  <div id="app">
        @include('partials.header')
        <div class="container-fluid">

            <div class="row">
                    <div id="side-menu" class="col-sm-3">

                            <div class="profile-block">
                                    <img src="{{asset('storage/images/logo.png')}}" alt="" class="rounded d-none d-sm-block">

                                    </div>

                                    <ul class="nav nav-pills flex-column" id="navbarNavAltMarkup">
                                            <li class="nav-item">

                                            <a class="nav-link" href="#teacher-opts" data-toggle="collapse" role="button" >

                                            <i class="fa fa-user"></i>
                                                Teachers
                                                <i class="fa fa-chevron-right float-right"></i>

                                            </a>

                                            <ul class="collapse" id="teacher-opts">
                                               <li>
                                                   <a href="/teachers/create">Add Teacher</a>
                                               </li>
                                               <li>
                                                   <a href="/duties/create">Assign Duties</a>
                                               </li>
                                            </ul>

                                            </li>
                                            <li class="nav-item">

                                            <a class="nav-link transition" href="/p/create">
                                                <span class="fa fa-users"></span>
                                                Student
                                            </a>
                                            </li>
                                            <li class="nav-item">

                                            <a class="nav-link"  href="#finance-opts" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="finance-opts">
                                                <i class="fa fa-euro-sign" ></i> Finance
                                                <i class="fa fa-chevron-right float-right"></i>

                                            </a>
                                            <ul class="collapse" id="finance-opts">
                                                <li>
                                                    <a href="#" class="transition">Add Payment</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="transition">View Ledger</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="transition">Batch Processing</a>
                                                    </li>


                                                </ul>
                                            </li>

                                            <li class="nav-item">
                                            <a class="nav-link" href="#results-opts" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="results-opts">
                                                <i class="fa fa-book"></i>
                                                Exams
                                            </a>

                                            <ul class="collapse" id="results-opts">
                                                <li>
                                                    <a href="#" class="transition">Upload Results</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="transition">Edit Results</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="transition">View Marksheet</a>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link" href="#class-opts" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="class-opts">
                                                    <i class="fa fa-building"></i>
                                               School Management
                                                <i class="fa fa-chevron-right float-right"></i>
                                                </a>
                                                <ul class="collapse" id="class-opts">
                                                    <li>
                                                    <a href="/classes/create" class="transition">Manage Class</a>
                                                    </li>
                                                    <li>
                                                    <a href="/sections/create" class="transition">Manage section</a>
                                                    </li>

                                                    <li>
                                                        <a href="/subjects/create" class="transition">Manage subject</a>
                                                    </li>



                                                </ul>
                                            </li>

                                        </ul>


                                </div>

            <div id="main" class="offset-sm-3 col-sm-9">
                @yield('content')
        </div>
  </div>
  </div>
         </div>
         </div>
  </div>

  <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" ></script>
    <script src="{{ asset('js/main.js') }}" ></script>


    @stack('scripts')

    @if(Route::currentRouteName() === "admin")
        {!! $chart->script() !!}
        {!! $cherry->script() !!}
        {!! $bar->script() !!}
    @endif



</body>


</html>
