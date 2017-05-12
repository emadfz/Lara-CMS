@section('header')
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from projects.hwpl.in/asiatic/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Jan 2017 11:15:19 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>ASIATIC</title>
<link rel="shortcut icon" type="image/png" href="fevicon.html"/>
<link rel="shortcut icon" type="image/png" href="fevicon.html"/>
<!-- Bootstrap -->
<link href="{{asset('public')}}/css/bootstrap.min.css" rel="stylesheet">
<link href="{{asset('public')}}/css/style.css" rel="stylesheet">
<link href="{{asset('public')}}/css/font-awesome.min.css" rel="stylesheet">
<link href="{{asset('public')}}/css/menumaker.css" media="screen, projection" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="{{asset('public')}}/css/screen.css">
<link rel="stylesheet" href="{{asset('public')}}/css/lightbox.css">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<!--pdf scrolling css -->
<link rel="stylesheet" href="{{asset('public')}}/css/scrolling-buttons.css">

<body>

<!-- Top Bar Start-->
<div class="top-bar">
 <div class="container">
  <div class="col-md-8" style="padding-right;0px;">
   <p class="myp"><i class="fa fa-envelope-o" aria-hidden="true"></i> &nbsp;<a href="mailto:ragrawal@asiaticind.com" style="color:#fff;">ragrawal@asiaticind.com</a>&nbsp; | &nbsp; </p>
   <p class="myp"><i class="fa fa-phone" aria-hidden="true"></i> &nbsp;  (079) 40054178 </p>
  </div>

  <div class="col-md-4" style="padding-left:0px;">
   <p class="myp">
  @if (App::getLocale() !== 'zh')
   <a href="https://www.facebook.com/Asiatic-Industries-744668722317147/?fref=ts">
   <i class="fa fa-facebook-square" aria-hidden="true"></i></a>
   <a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a> 
   <a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a> 
   <a href="#"><i class="fa fa-youtube-square" aria-hidden="true"></i></a> </p>
  @endif
   <p class="flags"><a href="#"><img src="{{asset('public')}}/images/flags.png"></a> 
   </p>
  </div>
 </div>
</div>
<!-- Top Bar End-->
<div class="clear"></div>
<!-- CSS Menu Start-->
<header>
 <div class="container">
  <div class="col-md-3 logo"> <a href="index.html"> <img src="{{asset('public')}}/images/logo.png"> </a> </div>
  <div class="col-md-9">
   <div id="cssmenu">
    
    <ul >
     <li ><a href="{{route('frontend.home.get')}}"class="current no-img" >Home</a></li>
     <li><a href="{{route('frontend.about.get')}}">About Us</a> 
      <!-- <ul>
          <li><a href="#">Infrastructure</a></li>
        </ul>--> 
     </li>
     <li><a href="#">Products</a>
      <ul>
       <li><a href="leather.html">LEATHER-FUR-WOOL & NYLON DYES</a></li>
       <li><a href="textile.html">TEXTILE DYES</a></li>
       <li><a href="paper_dyes.html">PAPER DYES</a></li>
      </ul>
     </li>
     
     <li><a href="applications.html">Applications</a>           </li>
     
     <li><a href="customer.html" >Customer care</a> </li>
     <li><a href="{{route('frontend.contact.get')}}" >Contact us</a></li>
    </ul>
    
   </div>
  </div>
 </div>
</header>

@stop