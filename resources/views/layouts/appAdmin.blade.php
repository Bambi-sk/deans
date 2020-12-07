<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>{{config('app.name', 'Deans')}}</title>
        
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" /> 
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">  
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        @include('inc.adminNav')
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="/indexAdmin">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Home
                            </a>

                            <a class="nav-link" href="/cerfType">
                                <div class="sb-nav-link-icon"><i class="icon-certificate"></i></div>
                                 Certification Type
                            </a>

                            <a class="nav-link" href="/cerf">
                                <div class="sb-nav-link-icon"><i class="fas fa-tablet"></i></div>
                                Certification
                            </a>

                            <a class="nav-link" href="{{ route('faq.index') }}">
                                <div class="sb-nav-link-icon"><i class="fa fa-question-circle" aria-hidden="true"></i></div>
                                FAQ
                            </a>
                            <a class="nav-link" href="/listRequest">
                                <div class="sb-nav-link-icon"><i class="fas fa-list"></i></div>
                                List Request From Students
                            </a>
            
                         
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Deans</div>
                        
                    </div>
                </nav>
            </div>
            
            <div id="layoutSidenav_content">
                <main>
                
                    <div class="container-fluid">
                        <h1 class="mt-4">@yield('breadcumbText')</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item">@yield('breadcumbText')</li>
                
                        </ol>
                        @yield('card')
                    </div>
                    @yield('addButton')
                    <div class="container-fluid">
                        @yield('cardBody')
                    
                    </div>
               
                </main>
               @include('inc.footer')
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
    </body>
</html>
