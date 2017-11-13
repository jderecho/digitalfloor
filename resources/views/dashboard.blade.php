<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dashboard : Digital Floor</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <!-- Bootstrap core CSS     -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
        <!--  Material Dashboard CSS    -->
        <link href="{{ asset('css/material-dashboard.css?v=1.2.0') }}" rel="stylesheet" />
        <!--  CSS for Demo Purpose, don't include it in your project     -->
        <link href="{{ asset('css/demo.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/colors.css') }}" rel="stylesheet" />
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    </head>
    <body>
       <div class="wrapper">
           <nav class="navbar navbar-gradient navbar-absolute">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse">

                    <h3 class="pull-left" style="margin: 5px !important;cursor: pointer;font-weight: 600"><a href="http://192.168.10.146/motrack/dashboard" style="color: #fff !important">SPMan</a></h3>
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <div class="dropdown">
                                <a href="#" class="btn dropdown-toggle" data-toggle="dropdown">
                                    SEATPLAN 01
                                    <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">SEATPLAN 01</a></li>
                                    <li><a href="#">SEATPLAN 02</a></li>
                                    <li><a href="#">SEATPLAN 03</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><button class="btn btn-success">VIEW SEATPLAN MAP</button></li>
                    </ul>
                </div>
            </div>
          </nav>
             <div class="col-lg-12 col-md-12 col-sm-12" style="z-index: 99; padding-top: 100px !important; position: absolute;">
              <div class="col-lg-7 col-md-7 col-sm-7" >
                <div class="card card-stats">
                    <div class="card-content table-responsive">
                       <ul class="nav navbar-nav navbar-left">
                        <li> 
                            <!-- Active employee-->
                            <span class="status-container">
                                <span class="circle circle-present"></span>
                                <span class="status-label">ACTIVE: </span>
                                <span class="status-number">100</span>
                            </span>
                        </li>
                         <li> 
                            <!-- Absent employee-->
                            <span class="status-container">
                                <span class="circle circle-absent"></span>
                                <span class="status-label">INACTIVE: </span>
                                <span class="status-number">100</span>
                            </span>
                        </li>

                         <li> 
                           <!-- IDLE employee-->
                            <span class="status-container">
                                <span class="circle circle-idle"></span>
                                <span class="status-label">IDLE: </span>
                                <span class="status-number">100</span>
                            </span>
                        </li>
                        <li>
                            <span class="status-label status-divider" ></span>
                        </li>
                        <li>
                            <span class="status-container">
                                <i class="fa fa-desktop purple" aria-hidden="true"></i>
                                &nbsp;&nbsp;
                                <span class="status-label">TOTAL PCs: </span>
                                <span class="status-number">50</span>
                            </span>
                        </li>
                         <li>
                            <span class="status-container">
                                &nbsp;&nbsp;&nbsp;
                                <i class="fa fa-phone purple" aria-hidden="true"></i>
                                &nbsp;&nbsp;
                                <span class="status-label">TOTAL AVAYA PHONEs: </span>
                                <span class="status-number">2</span>
                            </span>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a style="padding-top: 0px !important;padding-bottom: 0px !important;" href="#"><i class="fa fa-th purple" aria-hidden="true"></i></a></li>
                        <li><a style="padding-top: 0px !important;padding-bottom: 0px !important;" href="#"><i class="fa fa-list-ul purple" aria-hidden="true"></i></a></li>
                    </ul>
                    </div>
                </div>
              </div>
              <div class="col-lg-5 col-md-5 col-sm-5" >
                <div style="float: left; width: 100px;">
                     <div class="card card-stats">
                        <div class="card-content table-responsive">
                            <span class="status-label">SEARCH</span>
                        </div>
                    </div>
                </div>
                <div style="float: left; width: 80%;">
                     <input type="text" name="" style="width: 100%;margin: 25px 0px; vertical-align: middle; padding: 12px; border: 1px solid #ddd;">
                </div>
              </div>
          </div>
          <div class="col-lg-12 col-md-12 col-sm-12">
           <div class="col-lg-12 col-md-12 col-sm-12" style="z-index: 0; margin-top: 180px !important; position: absolute; overflow: scroll; height: 80vh;">
            <div class="card card-stats">
                <div class="floor-container">
                    <div class="legend-container">
                        <table class="mopro-team-table">
                            <tr>
                                <td><span class="status-label">TEAMS: </span></td>
                                <td><span class="team-label-icon team-design"></span> <span class="team-label">DESIGN</span></td>
                                <td><span class="team-label-icon team-builders"></span> <span class="team-label">BUILDERS</span></td>
                                <td><span class="team-label-icon team-cx"></span> <span class="team-label">CX</span></td>
                                <td><span class="team-label-icon team-social-media"></span> <span class="team-label">SOCIAL MEDIA</span></td>
                                <td><span class="team-label-icon team-video-editors"></span> <span class="team-label">VIDEO EDITORS</span></td>
                                <td><span class="team-label-icon team-das"></span> <span class="team-label">DAS</span></td>
                                <td><span class="team-label-icon team-dc"></span> <span class="team-label">DC</span></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><span class="team-label-icon team-seo"></span> <span class="team-label">SEO</span></td>
                                <td><span class="team-label-icon team-qc"></span> <span class="team-label">QC</span></td>
                                <td><span class="team-label-icon team-creative"></span> <span class="team-label">CREATIVE</span></td>
                                <td><span class="team-label-icon team-das2"></span> <span class="team-label">DAS</span></td>
                                <td><span class="team-label-icon team-dasb"></span> <span class="team-label">DAS - B</span></td>
                                <td><span class="team-label-icon team-dr"></span> <span class="team-label">DR</span></td>
                            </tr>
                        </table>
                    </div>
                    <div class="seats-container">
                        @for($j = 0; $j < 15 ; $j++)
                        <div class="row row{{$j}}">
                            @for ($i = 0; $i < 36; $i++)
                            <div class="column1 seat">
                                <div class="current-status"></div>
                                <div class="user-"></div>
                            </div>
                            @endfor
                        </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
      </div>
    </body>
    <!--   Core JS Files   -->
    <script src="{{ asset('js/jquery-3.2.1.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/material.min.js') }}" type="text/javascript"></script>
    <!--  Charts Plugin -->
    <script src="{{ asset('js/chartist.min.js') }}"></script>
    <!--  Dynamic Elements plugin -->
    <script src="{{ asset('js/arrive.min.js') }}"></script>
    <!--  PerfectScrollbar Library -->
    <script src="{{ asset('js/perfect-scrollbar.jquery.min.js') }}"></script>
    <!--  Notifications Plugin    -->
    <script src="{{ asset('js/bootstrap-notify.js') }}"></script>
    <!--  Google Maps Plugin    -->
    <!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script> -->
    <!-- Material Dashboard javascript methods -->
    <script src="{{ asset('js/material-dashboard.js?v=1.2.0') }}"></script>
    <!-- Material Dashboard DEMO methods, don't include it in your project! -->
    <script src="{{ asset('js/demo.js') }}"></script>
</html>
