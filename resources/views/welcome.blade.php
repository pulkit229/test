<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>
<body>
   
   
   
  <div class="lotto_sec">
  <div class="header">
  <div class="header_top">
  <div class="container">
  
  <div class="row">
  <div class="logo">
  <a href=""><img src="images/LOTTOLOGO.png"></a>
  </div>
  
  
  <section class="accountheader">
   <ul class="menu">
      <li>
         <a href='{{ url("register") }}' class="join"><span>SIGN UP</span></a><!--anchor-->
      </li>
      <li>
         <a role="button" class="login " data-toggle="modal" data-target="#myModal" ><span>Login</span></a><!--anchor-->
      </li>
      <!--anchor-->
     

      <li><a href=""><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>   <li>

      <!--anchor-->
   </ul>
</section>
  
  </div>
  </div>
  
 
  </div>
  </div>
  
  
  <div class="content_bottom">
  <div class="container">
  <div class="header_bottom">
  
   <nav class="navbar navbar-expand-sm   navbar-light ">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
           
            <li class="nav-item dropdown dmenu">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
              Play
            </a>
            <div class="dropdown-menu sm-menu">
              <a class="dropdown-item" href="#">service2</a>
              <a class="dropdown-item" href="#">service 2</a>
              <a class="dropdown-item" href="#">service 3</a>
            </div>
          </li>
          
             <li class="nav-item">
            <a class="nav-link" href="#">How it works</a>
          </li>
          
         
              <li class="nav-item">
            <a class="nav-link" href="#">Success rates</a>
          </li>
          
          
                 <li class="nav-item dropdown dmenu">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
              More
            </a>
            <div class="dropdown-menu sm-menu">
              <a class="dropdown-item" href="#">service2</a>
              <a class="dropdown-item" href="#">service 2</a>
              <a class="dropdown-item" href="#">service 3</a>
            </div>
          </li>
         
         
          </ul>
          <div class="social-part">
            <li  class="help-info">Need a hand? Visit our<a href="#">Help Centre</a></li>
          </div>
        </div>
      </nav>
  
        </div>
        
      <div class="banner_sec">

        <img src="{{asset('images/course-details.jpg')}}">
        
        </div>
        
       <div class="bottom_sec">

        <div class="row">
        <div class="col-md-12">

        <div class="section_title">
     <div class="bc_overlay"></div>
        <h3 >How we work</h3>
        <p>Function information without cross action media value.</p>
         <p >Efficiently unleash cross-media tour function information without cross action media value. Quickly maximize timely deliverables for real-time schemas.</p>
        </div>

        </div>
        
       </div>
        </div>
        
        <div class="table_sec">
        <div class="container">
        <h1 class="">Lottery Prediction Results</h1>
    <div class="row">
    <div class="col-md-6 no_left_padding">
        <div class="table-responsive  movie-table">
 <table class="table movie-table">
                  <thead>
                  <tr><h1>Overall Lottery Prediction Statistics</h1></tr>
                  <tr class= "movie-table-head">
                      <th>Lottery Predictions</th>
                      <th>Successfull Predictions</th>
                      <th>Winnings</th>   
                    
                  </tr>
              </thead>   
              <tbody>
                  
                <!--row-->
                <tr class= "dark-row">
                    <td >Advanced Predictions</td>
                    <td> 28</td>
                    <td>~$1689.00</td>
                                                         
                </tr>
              <tr class="light-row">
                    <td>Users Predictions</td>
                    <td> 159</td>
                    <td>~$6630.00</td>
                                                          
                </tr>
                <tr class = "dark-row">
                    <td>Wisdom of Crowd</td>
                    <td> 33</td>
                    <td>~$4676.00</td>
                                                       
                </tr>
              <tr class="light-row">
                    <td>Algorithm Predictions</td>
                    <td> 43 </td>
                    <td>~$2851.00</td>
                                                         
                </tr>
              </tbody>
            </table>
            </div>
            </div>
            <div class="col-md-6 no_left_padding">
        <div class="table-responsive  movie-table">
            <table class="table movie-table">
                  <thead>
                  <tr><h1>Statistics for the Last 7 Days</h1></tr>
                  <tr class= "movie-table-head">
                      <th>Lottery Predictions</th>
                      <th>Successfull Predictions</th>
                      <th>Winnings</th>   
                    
                  </tr>
              </thead>   
              <tbody>
               <tr class= "dark-row">
                    <td >Advanced Predictions</td>
                    <td> 27223</td>
                    <td>90856</td>
                                                         
                </tr>
               <tr class="light-row">
                    <td>Users Predictions</td>
                    <td> 159</td>
                    <td>~$6630.00</td>
                                                          
                </tr>
               <tr class = "dark-row">
                    <td>Wisdom of Crowd</td>
                    <td> 18325</td>
                    <td>~$1,432,462</td>
                                                       
                </tr>
               <tr class="light-row">
                    <td>Algorithm Predictions</td>
                    <td> 34402 </td>
                    <td>~$1,303,934</td>
                                                         
                </tr>
                <!--/.row-->
             </tbody>
            </table>
            </div>
            </div>
            
            </div>
  </div>
  </div>
  </div>
  </div>
  
     <div class="footer">
        
        <div class="container">
        <div class="row">
        <div class="col-md-3">
        <div class="nav_footer">
        <div class="logo">
 <a href=""><img src="{{asset('images/LOTTOLOGO.png')}}"></a>
  </div>
     <span>Location: 6735 Salt Cedar Way,<br> Frisco, TX 75034, USA</span>
            <span>Email: hello@gamil.com</span>
            <span>Phone: (111) 365-2622</span>
            <span>Fax: (111) 365-2622</span>
        
        </div>
        </div>
         <div class="col-md-2">
        <div class="nav_footer">
        <h1>quick links</h1>
        <ul>
        <li><a href="" title="Home">Play Games</a></li>
        <li><a href="" title="Coupons">Latest Draw Results</a></li>
        <li><a href="" title="Reviews">Ways 2 Play</a></li>
        <li><a href="" title="Gallery">Community</a></li>
        <li><a href="" title="Blog">About Us</a></li>
       </ul>
        
        </div>
        </div>
        
           <div class="col-md-2">
        <div class="nav_footer nv_foot">

        <ul>
        
        <li><a href="" >Game Rules</a></li>
        <li><a href="" >Responsible Play</a></li>
        <li><a href="">Media Centre</a></li>
        <li><a href="" >Become a Retailer</a></li>
        <li><a href="" >Help Centre</a></li>
        <li><a href="" >Contact Us</a></li>
        </ul>
        
        </div>
        </div>
          <div class="col-md-5">
        <div class="nav_footer last">
    <img src="images/img-2019ftr-wla@2x.png">
        <div class="social">
        <div class="text-security"><img src="{{asset('images/ico--security.svg')}}"><strong>Safe and Secure</strong><br>All transactions 128bit SSL encrypted.</div>             
                            
                    
</div>
        
        </div>
        </div>
        </div>
        
        
      </div>
      </div>
 
  </div>
  
  
    <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
    <div class="container h-100 dk">
        <div class="d-flex justify-content-center h-100">
            <div class="user_card">
                <div class="d-flex justify-content-center">
                    <div class="brand_logo_container">
                        <img src="{{asset('images/LOTTOLOGO_1.png')}}" class="brand_logo" alt="Logo">
                    </div>
                </div>
                <div class="d-flex justify-content-center form_container">
                    <form  method="POST" action="{{ route('login') }}">
                          @csrf
                        <div class="input-group mb-3">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fa fa-user"></i></span>
                            </div>
                            
                              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                               @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="input-group mb-2">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fa fa-key"></i></span>
                            </div>
                            <input type="password" name="password" class="form-control input_pass @error('password') is-invalid @enderror" value="" placeholder="password">
                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                               
                                <input id="customControlInline" class="form-check-input custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="custom-control-label" for="customControlInline"> {{ __('Remember Me') }}</label>
                            </div>
                        </div>
                            <div class="d-flex justify-content-center mt-3 login_container">
                   <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                   </div>
                    </form>
                </div>
        
                <div class="mt-4">
                    <div class="d-flex justify-content-center links">
                        Don't have an account? <a href='{{ url("register") }}' class="ml-2">Sign Up</a>
                    </div>
                    <div class="d-flex justify-content-center links">
                        @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

   
      </div>
      
    </div>
  </div>
  
    <script type="text/javascript">
$(document).ready(function () {
$('.navbar-light .dmenu').hover(function () {
        $(this).find('.sm-menu').first().stop(true, true).slideDown(150);
    }, function () {
        $(this).find('.sm-menu').first().stop(true, true).slideUp(105)
    });
});
</script>   
</body>


</html>
