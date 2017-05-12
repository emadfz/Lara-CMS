@section('footer')
 <footer>
 <div class="container"> 
  <!--<div class="col-md-3 git">
   <h3 class="widget-title2">ABOUT US</h3>
   <p style="text-align:justify;">ASIATIC INDUSTRIES has been successfully catering to the widespread requirements of our customers in industries like Leather, Textile, Paper and Wood. We have kept our product range in such a way that ASIATIC INDUSTRIES is a one stop</p>
   <p><a href="about_us.html">READ MORE <i class="fa fa-arrow-right"></i></a></p>
  </div>-->
  <div class="col-md-3 ql">
   <h3 class="widget-title2">QUICK LINKS</h3>
   <ul>
    <li style="color:#ff0000"><a href="index.html"><span style="color:#898a8a">HOME</span></a></li>
    <li style="color:#ff0000"><a href="about_us.html"><span style="color:#898a8a">ABOUT US</span></a></li>
    <li style="color:#ff0000"><a href="leather.html"><span style="color:#898a8a">PRODUCTS</span></a></li>
    <li style="color:#ff0000"><a href="customer.html"><span style="color:#898a8a">CUSTOMER CARE</span></a></li>
    <li style="color:#ff0000"><a href="contact.html"><span style="color:#898a8a">CONTACT US</span></a></li>
   </ul>
  </div>
  <div class="col-md-3 ql">
   <h3 class="widget-title2">OUR PRODUCTS</h3>
   <ul>
    <li style="color:#ff0000"><a href="leather.html"><span style="color:#898a8a">LEATHER-FUR-WOOL & NYLON DYES </span></a></li>
    <li style="color:#ff0000"><a href="testile.html"><span style="color:#898a8a">TEXTILE DYES </span></a></li>
    <li style="color:#ff0000"><a href="#"><span style="color:#898a8a">PAPER DYES</span></a></li>
   </ul>
   <div class="social"> <a href="https://www.facebook.com/Asiatic-Industries-744668722317147/?fref=ts" target="_blank"><img src="{{asset('public')}}/images/fb%2b.png"></a> <a href="#" target="_blank"><img src="{{asset('public')}}/images/tw.png"></a> <a href="#" target="_blank"><img src="{{asset('public')}}/images/gp.png"></a> <a href="#" target="_blank"><img src="{{asset('public')}}/images/ln.png"></a> <a href="#" target="_blank"><img src="{{asset('public')}}/images/yt.png"></a> <a href="#" target="_blank"><img src="{{asset('public')}}/images/vm.png"></a> </div>
  </div>
  <div class="col-md-6 ql">
   <h3 class="widget-title2">OUR CERTIFICATE </h3>
   <div class="certificat_main">
    <div class="images"> <a class="example-image-link" href="{{asset('public')}}/images/cer-1.jpg" data-lightbox="example-set" data-title="Asiatic Certificate"><img class="example-image" src="{{asset('public')}}/images/cer-1.jpg" alt=""/></a> </div>
    <div class="images"> <a class="example-image-link" href="{{asset('public')}}/images/cer-2.jpg" data-lightbox="example-set" data-title="Asiatic Certificate"><img class="example-image" src="{{asset('public')}}/images/cer-2.jpg" alt=""/></a> </div>
    <div class="images"> <a class="example-image-link" href="{{asset('public')}}/images/cer-3.jpg" data-lightbox="example-set" data-title="Asiatic Certificate"><img class="example-image" src="{{asset('public')}}/images/cer-3.jpg" alt=""/></a> </div>
   </div>
  </div>
 </div>
</footer>
<div class="clear"></div>
<div class="footer-bot">
 <div class="container">
  <div class="col-md-6">
   <p>COPYRIGHT 2016 ASIATIC. ALL RIGHTS RESERVED</p>
  </div>
  <div class="col-md-6">
   <p class="flr">DESIGNED & DEVELOPED BY <a href="http://www.horizonwebinfo.com/">HWPL</a></p>
  </div>
 </div>
</div>
<!-- Footer End --> 

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
{{-- <script src="../../ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>  --}}
<script
  src="https://code.jquery.com/jquery-1.12.4.js"
  integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU="
  crossorigin="anonymous"></script>
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="{{asset('public')}}/js/bootstrap.min.js"></script> 
<script src="{{asset('public')}}/js/menumaker.js"></script> 
<script type="text/javascript">
    $("#cssmenu").menumaker({
        title: "Menu",
        format: "multitoggle"
    });
</script> 
<script type="text/javascript" src="{{asset('public')}}/js/jssor.slider.mini.js"></script> 
<script src="{{asset('public')}}/js/lightbox.js"></script> 
<script>
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-2196019-1']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
    </script> 

<!-- use jssor.slider.debug.js instead for debug --> 
<script>
        jQuery(document).ready(function ($) {
            
            var jssor_1_SlideoTransitions = [
              [{b:5500,d:3000,o:-1,r:240,e:{r:2}}],
              [{b:-1,d:1,o:-1,c:{x:51.0,t:-51.0}},{b:0,d:1000,o:1,c:{x:-51.0,t:51.0},e:{o:7,c:{x:7,t:7}}}],
              [{b:-1,d:1,o:-1,sX:9,sY:9},{b:1000,d:1000,o:1,sX:-9,sY:-9,e:{sX:2,sY:2}}],
              [{b:-1,d:1,o:-1,r:-180,sX:9,sY:9},{b:2000,d:1000,o:1,r:180,sX:-9,sY:-9,e:{r:2,sX:2,sY:2}}],
              [{b:-1,d:1,o:-1},{b:3000,d:2000,y:180,o:1,e:{y:16}}],
              [{b:-1,d:1,o:-1,r:-150},{b:7500,d:1600,o:1,r:150,e:{r:3}}],
              [{b:10000,d:2000,x:-379,e:{x:7}}],
              [{b:10000,d:2000,x:-379,e:{x:7}}],
              [{b:-1,d:1,o:-1,r:288,sX:9,sY:9},{b:9100,d:900,x:-1400,y:-660,o:1,r:-288,sX:-9,sY:-9,e:{r:6}},{b:10000,d:1600,x:-200,o:-1,e:{x:16}}]
            ];
            
            var jssor_1_options = {
              $AutoPlay: true,
              $SlideDuration: 800,
              $SlideEasing: $Jease$.$OutQuint,
              $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_1_SlideoTransitions
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };
            
            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
            
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 1920);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
    </script> 

<!--SCROLLING PDF JS CODE START HERE--> 
<!-- <script src="js/jquery.scrolling-buttons.js"></script>
<script type='text/javascript'>
// Google Fonts
WebFontConfig = {
  google: { families: [ 'Lato:400,700,300:latin' ] }
};
(function() {
  var wf = document.createElement('script');
  wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
    '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
  wf.type = 'text/javascript';
  wf.async = 'true';
  var s = document.getElementsByTagName('script')[0];
  s.parentNode.insertBefore(wf, s);
})();

// Initialize Share-Buttons
$.contactButtons({
  effect  : 'slide-on-scroll',
  buttons : {
    'facebook':   { class: 'pdf', use: true, link: '', extras: 'target="_blank"' },
   
  }
});
</script>  -->

@stop