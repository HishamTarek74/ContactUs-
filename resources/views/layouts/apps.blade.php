<!doctype html>
<html class="no-js" lang="zxx">

<!-- Mirrored from demo.devitems.com/truemart/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 Mar 2019 13:57:09 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Contact ||Us</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicons -->
    <link rel="shortcut icon" href="{{asset('assets/img/favicon.ico')}}">
    <!-- Fontawesome css -->
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">

    </head>

<body>
        <!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->
   <div class="wrapper">

    <!-- Preloader -->
     @yield('contents')
     

 </div>  
<!--End pagewrapper-->
<!-- jquery 3.2.1 -->
<script src="{{asset('assets/js/jquery-3.2.1.min.js')}}"></script>
    <!-- Main activaion js -->
    <script src="{{asset('assets/js/main.js')}}"></script>
    <script>
                $(document).ready(function() {
                    $('#html5-watermark').hide();
                    $('#waterform').on('submit', function(event){
                            
                            event.preventDefault();
                            var form_data = $(this).serialize();
                            $.ajax({
                                url:"{{ route('sendMessage') }}",
                                method:"POST",
                                data:form_data,
                                dataType:"json",
                                success:function(data)
                                {
                                    
                                    if(data.error.length > 0)
                                    {
                                        var error_html = '';
                                        for(var count = 0; count < data.error.length; count++)
                                        {
                                            error_html += '<div class="alert alert-danger">'+data.error[count]+'</div>';
                                        }
                                        $('#form_output').html(error_html);
                                    }
                                    else
                                    {
                                      
                                     $('#form_output').html(data.success);
                                               
                                    }
                                }
                            })
                        });
                    });         
                </script>
</body>
</html>
    
