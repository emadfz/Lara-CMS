
@extends('layouts.master')


@section('content')


<!-- CSS Menu Start-->
<div class="clear"></div>

<!-- Hero Element Strat -->
<div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden; visibility: hidden;"> 
 <!-- Loading Screen -->
 <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
  <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
  <div style="position:absolute;display:block;background:url('{{asset('public')}}/img/loading.html') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
 </div>
 <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden;">
  <div data-p="225.00" style="display: none;"> <img data-u="image" src="{{asset('public')}}/images/red2-2.jpg" />
   <div style="position: absolute; top: 160px; left: 10%; width: 1000px;; height: 120px; font-size: 45px; color: #ffffff; line-height: 60px;font-family:rr;text-transform:uppercase;font-weight:bold;">Welcome To ASIATIC </div>
   <div style="position: absolute; top: 230px; left: 10%; width: 900px; height: 120px; font-size: 22px; color: #ffffff; line-height: 28px;font-family:rr;text-transform:uppercase;font-weight:600;">It's nice to Meet you</div>
   <div style="position: absolute; top: 300px; left: 10%; width: 480px; height: 120px; font-size: 30px; color: #ffffff; line-height: 38px;font-family:rr;text-transform:uppercase;" class="re-mr"><a href="about_us.html">READ MORE</a></div>
   <!-- <div data-t="0" style="position: absolute; top: 160px; left: 60%; width: 445px; height: 300px;text-transform:uppercase;colo:#fff;" class="slidercap">
    <p><i class="fa fa-diamond" aria-hidden="true"></i> &nbsp; multi purpose  instruments</p>
    <p><i class="fa fa-pencil" aria-hidden="true"></i> &nbsp; unique design</p>
    <p><i class="fa fa-gift" aria-hidden="true"></i> &nbsp; unlimited designs</p>
    <p><i class="fa fa-umbrella" aria-hidden="true"></i> &nbsp; full machinery support</p>
    <p><i class="fa fa-desktop" aria-hidden="true"></i> &nbsp; PERFECT STRUCTURE</p>
   </div>--> 
  </div>
  
  <div data-p="225.00" style="display: none;"> <img data-u="image" src="{{asset('public')}}/images/textile-inner.jpg" />
   <div style="position: absolute; top: 160px; left: 10%; width: 1000px;; height: 120px; font-size: 45px; color: #ffffff; line-height: 60px;font-family:rr;text-transform:uppercase;font-weight:bold;">Welcome To ASIATIC </div>
   <div style="position: absolute; top: 230px; left: 10%; width: 900px; height: 120px; font-size: 22px; color: #ffffff; line-height: 28px;font-family:rr;text-transform:uppercase;font-weight:600;">TEXTILE DYES </div>
   <div style="position: absolute; top: 300px; left: 10%; width: 480px; height: 120px; font-size: 30px; color: #ffffff; line-height: 38px;font-family:rr;text-transform:uppercase;" class="re-mr"><a href="about_us.html">READ MORE</a></div>
   <!-- <div data-t="0" style="position: absolute; top: 160px; left: 60%; width: 445px; height: 300px;text-transform:uppercase;colo:#fff;" class="slidercap">
    <p><i class="fa fa-diamond" aria-hidden="true"></i> &nbsp; multi purpose  instruments</p>
    <p><i class="fa fa-pencil" aria-hidden="true"></i> &nbsp; unique design</p>
    <p><i class="fa fa-gift" aria-hidden="true"></i> &nbsp; unlimited designs</p>
    <p><i class="fa fa-umbrella" aria-hidden="true"></i> &nbsp; full machinery support</p>
    <p><i class="fa fa-desktop" aria-hidden="true"></i> &nbsp; PERFECT STRUCTURE</p>
   </div>--> 
  </div>
  <div data-p="225.00" style="display: none;"> <img data-u="image" src="{{asset('public')}}/images/papper2.jpg" />
   <div style="position: absolute; top: 160px; left: 10%; width: 1000px;; height: 120px; font-size: 45px; color: #ffffff; line-height: 60px;font-family:rr;text-transform:uppercase;font-weight:bold;">Welcome To ASIATIC </div>
   <div style="position: absolute; top: 230px; left: 10%; width: 900px; height: 120px; font-size: 22px; color: #ffffff; line-height: 28px;font-family:rr;text-transform:uppercase;font-weight:600;">PAPER DYES</div>
   <div style="position: absolute; top: 300px; left: 10%; width: 480px; height: 120px; font-size: 30px; color: #ffffff; line-height: 38px;font-family:rr;text-transform:uppercase;" class="re-mr"><a href="about_us.html">READ MORE</a></div>
   <!-- <div data-t="0" style="position: absolute; top: 160px; left: 60%; width: 445px; height: 300px;text-transform:uppercase;colo:#fff;" class="slidercap">
    <p><i class="fa fa-diamond" aria-hidden="true"></i> &nbsp; multi purpose  instruments</p>
    <p><i class="fa fa-pencil" aria-hidden="true"></i> &nbsp; unique design</p>
    <p><i class="fa fa-gift" aria-hidden="true"></i> &nbsp; unlimited designs</p>
    <p><i class="fa fa-umbrella" aria-hidden="true"></i> &nbsp; full machinery support</p>
    <p><i class="fa fa-desktop" aria-hidden="true"></i> &nbsp; PERFECT STRUCTURE</p>
   </div>--> 
  </div>
  
  <div data-p="225.00" style="display: none;"> <img data-u="image" src="{{asset('public')}}/images/red2-5.jpg" />
   <div style="position: absolute; top: 160px; left: 10%; width: 1000px;; height: 120px; font-size: 45px; color: #ffffff; line-height: 60px;font-family:rr;text-transform:uppercase;font-weight:bold;">Welcome To ASIATIC </div>
   <div style="position: absolute; top: 230px; left: 10%; width: 900px; height: 120px; font-size: 22px; color: #ffffff; line-height: 28px;font-family:rr;text-transform:uppercase;font-weight:600;">NYLON DYES</div>
   <div style="position: absolute; top: 300px; left: 10%; width: 480px; height: 120px; font-size: 30px; color: #ffffff; line-height: 38px;font-family:rr;text-transform:uppercase;" class="re-mr"><a href="about_us.html">READ MORE</a></div>
   <!-- <div data-t="0" style="position: absolute; top: 160px; left: 60%; width: 445px; height: 300px;text-transform:uppercase;colo:#fff;" class="slidercap">
    <p><i class="fa fa-diamond" aria-hidden="true"></i> &nbsp; multi purpose  instruments</p>
    <p><i class="fa fa-pencil" aria-hidden="true"></i> &nbsp; unique design</p>
    <p><i class="fa fa-gift" aria-hidden="true"></i> &nbsp; unlimited designs</p>
    <p><i class="fa fa-umbrella" aria-hidden="true"></i> &nbsp; full machinery support</p>
    <p><i class="fa fa-desktop" aria-hidden="true"></i> &nbsp; PERFECT STRUCTURE</p>
   </div>--> 
  </div>
  <a data-u="ad" href="http://www.jssor.com/" style="display:none">Bootstrap Slider</a> </div>
 <!-- Bullet Navigator -->
 <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1"> 
  <!-- bullet navigator item prototype -->
  <div data-u="prototype" style="width:16px;height:16px;"></div>
 </div>
 <!-- Arrow Navigator --> 
 <span data-u="arrowleft" class="jssora22l" style="top:0px;left:12px;width:40px;height:58px;" data-autocenter="2"></span> <span data-u="arrowright" class="jssora22r" style="top:0px;right:12px;width:40px;height:58px;" data-autocenter="2"></span> </div>
<!-- Hero Element End -->
<div class="clear"></div>
<!-- Hero Devider Start -->
<div class="devider"></div>
<!-- Hero Devider End -->
<div class="clear"></div>
<!-- About Start -->
<about>
 <div class="container">
  <div class="col-md-12">
   <div class="heading">
    <h2>ABOUT <span>US</span></h2>
    <p><img src="{{asset('public')}}/images/border.png"></p>
   </div>
   <div class="par">
    <p> {{$about}} </p>
    <a href="{{route('frontend.about.get')}}">READ MORE</a> </div>
  </div>
 </div>
</about>

<!-- About End --> 
<!-- Featurs Start -->
<div class="clear"></div>
<featurs class="featurs">
 <div class="container">
  <div class="heading">
   <h2 style="color:#fff;">OUR <span>PRODUCTS</span></h2>
   <p><img src="{{asset('public')}}/images/border2.png"></p>
  </div>
  <div class="padd20">
   <div class="col-md-3 td-center fea-part1">
    <p><img src="{{asset('public')}}/images/icon1.png"></p>
    <h4>LEATHER-FUR-WOOL &
     NYLON DYES</h4>
    <p>Proin iaculis purus consequat sem cure 
     digni ssim. Donec porttitora entum suscipit 
     aenean rhoncus posuere odio in tincidunt. </p>
    <a href="leather.html" class="f">READ MORE</a> </div>
   <div class="col-md-3 td-center fea-part2">
    <p><img src="{{asset('public')}}/images/icon2.png"></p>
    <h4>TEXTILE DYES </h4>
    <p>Proin iaculis purus consequat sem cure 
     digni ssim. Donec porttitora entum suscipit 
     aenean rhoncus posuere odio in tincidunt.<br>
    </p>
    <a href="textile.html" class="f">READ MORE</a> </div>
   <div class="col-md-3 td-center fea-part3">
    <p><img src="{{asset('public')}}/images/icon3.png"></p>
    <h4>PAPER DYES</h4>
    <p>Proin iaculis purus consequat sem cure 
     digni ssim. Donec porttitora entum suscipit 
     aenean rhoncus posuere odio in tincidunt. </p>
    <a href="#" class="f">READ MORE</a> </div>
  </div>
 </div>
</featurs>
<!-- Featurs End -->
<div class="clear"></div>
<!-- Gallery Start -->
<div class="gallery">
 <div class="container">
  <div class="col-md-12"> 
   <!--<div class="heading">
    <h2>OUR <span>PRODUCTS</span></h2>
    <p><img src="{{asset('public')}}/images/border.png"></p>
   </div>-->
   <div class="padd10">
    <div class="col-md-5">
     <div class="contact_section">
      <h4 class="widget-title"> Contact Us </h4>
      <div class="contact_address">
       <h5>ADDRESS</h5>
       <p><strong>Asiatic Industries</strong><br>
        Plot No. 1505, Phase I, GIDC, Naroda, Ahmedabad 
        382330 , Gujarat, India </p>
      </div>
      <div class="contact_email">
       <h5>EMAIL</h5>
       <p> <a href="mailto: ragrawal@asiaticind.com">ragrawal@asiaticind.com</a><br>
       </p>
      </div>
      <div class="contact_call">
       <h5>CALL US</h5>
       <p> ( 079 ) 40054178 </p>
      </div>
     </div>
    </div>
    <div class="col-md-1">&nbsp;</div>
    <div class="col-sm-6 contact-block">
     <div class="contact_form">
      <h4 class="widget-title"> GET IN TOUCH </h4>
      <form id="contact-form" class="my_contact_form">
       <div class="form-group col-sm-6">
        <input type="text" class="form-control" name="name" id="name" required="" placeholder="First Name">
       </div>
       <div class="form-group col-sm-6">
        <input type="email" class="form-control" name="mail" id="mail" required="" placeholder="Last Name">
       </div>
       <div class="form-group col-sm-6">
        <input type="text" class="form-control" name="Designation" id="name" required="" placeholder="Email">
       </div>
       <div class="form-group col-sm-6">
        <input type="email" class="form-control" name="Company Name" id="mail" required="" placeholder="Write Subject">
       </div>
       <div class="form-group col-sm-12 ">
        <textarea class="form-control" name="comment" id="comment" placeholder="Message..."></textarea>
       </div>
       <div class="col-sm-12 button">
        <p>
         <button type="button" class="btn btn-info btn-block">submit</button>
        </p>
        <div id="msg" class="message"></div>
       </div>
      </form>
     </div>
    </div>
   </div>
  </div>
 </div>
</div>

<!-- Gallery End -->

<div class="clear"></div>
<!-- Footer Start -->
<div class="devider"></div>

    @stop