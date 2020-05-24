  <!-- Remember to include excanvas for IE8 chart support -->
        <!--[if IE 8]><script src="js/helpers/excanvas.min.js"></script><![endif]-->

        <!-- Include Jquery library from Google's CDN but if something goes wrong get Jquery from local file (Remove 'http:' if you have SSL) -->
       
        <!-- Bootstrap.js, Jquery plugins and Custom JS code -->
        <script src="{{asset('admin/js/vendor/bootstrap.min.js')}}"></script>
        <script src="{{asset('admin/js/plugins.js')}}"></script>
        <script src="{{asset('admin/js/app.js')}}"></script>

        <!-- Google Maps API + Gmaps Plugin, must be loaded in the page you would like to use maps (Remove 'http:' if you have SSL) -->
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script src="{{asset('admin/js/helpers/gmaps.min.js')}}"></script>

        <!-- Load and execute javascript code used only in this page -->
        <!--<script src="js/pages/index.js"></script>
        <script>$(function(){ Index.init(); });</script>-->