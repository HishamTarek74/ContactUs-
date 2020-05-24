
<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if IE 9]>         <html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        @include('admin.include.header')
    </head>
    <!-- In the PHP version you can set the following options from inc/config file -->
    <!--
        Available body classes:

        'page-loading'      enables page preloader
    -->
    <body class="page-loading">
        <!-- Preloader -->
          @include('admin.include.preloader')
        <!-- END Preloader -->

        <!-- Page Container -->
        <!-- In the PHP version you can set the following options from inc/config file -->
        <!--
            Available #page-container classes:

            '' (None)                                       for a full main and alternative sidebar hidden by default (> 991px)

            'sidebar-visible-lg'                            for a full main sidebar visible by default (> 991px)
            'sidebar-partial'                               for a partial main sidebar which opens on mouse hover, hidden by default (> 991px)
            'sidebar-partial sidebar-visible-lg'            for a partial main sidebar which opens on mouse hover, visible by default (> 991px)

            'sidebar-alt-visible-lg'                        for a full alternative sidebar visible by default (> 991px)
            'sidebar-alt-partial'                           for a partial alternative sidebar which opens on mouse hover, hidden by default (> 991px)
            'sidebar-alt-partial sidebar-alt-visible-lg'    for a partial alternative sidebar which opens on mouse hover, visible by default (> 991px)

            'sidebar-partial sidebar-alt-partial'           for both sidebars partial which open on mouse hover, hidden by default (> 991px)

            'sidebar-no-animations'                         add this as extra for disabling sidebar animations on large screens (> 991px) - Better performance with heavy pages!

            'style-alt'                                     for an alternative main style (without it: the default style)
            'footer-fixed'                                  for a fixed footer (without it: a static footer)

            'disable-menu-autoscroll'                       add this to disable the main menu auto scrolling when opening a submenu

            'header-fixed-top'                              has to be added only if the class 'navbar-fixed-top' was added on header.navbar
            'header-fixed-bottom'                           has to be added only if the class 'navbar-fixed-bottom' was added on header.navbar
        -->
        <div id="page-container" class="sidebar-partial sidebar-visible-lg sidebar-no-animations">
                <!-- Alternative Sidebar -->
                @include('admin.include.leftsidebar')
                    <!-- END Alternative Sidebar -->

                    <!-- Main Sidebar -->
                    @include('admin.include.sidebar')
                    <!-- END Main Sidebar -->

                    <!-- Main Container -->

            <!-- Main Container -->
            <div id="main-container">
                <!-- Header -->
                <!-- In the PHP version you can set the following options from inc/config file -->
                <!--
                    Available header.navbar classes:

                    'navbar-default'            for the default light header
                    'navbar-inverse'            for an alternative dark header

                    'navbar-fixed-top'          for a top fixed header (fixed sidebars with scroll will be auto initialized, functionality can be found in js/app.js - handleSidebar())
                        'header-fixed-top'      has to be added on #page-container only if the class 'navbar-fixed-top' was added

                    'navbar-fixed-bottom'       for a bottom fixed header (fixed sidebars with scroll will be auto initialized, functionality can be found in js/app.js - handleSidebar()))
                        'header-fixed-bottom'   has to be added on #page-container only if the class 'navbar-fixed-bottom' was added
                -->
                <header class="navbar navbar-default">
                    <!-- Left Header Navigation -->
                    <ul class="nav navbar-nav-custom">
                        <!-- Main Sidebar Toggle Button -->
                        <li>
                            <a href="javascript:void(0)" onclick="App.sidebar('toggle-sidebar');">
                                <i class="fa fa-bars fa-fw"></i>
                            </a>
                        </li>
                        <!-- END Main Sidebar Toggle Button -->

                        <!-- Template Options -->
                        <!-- Change Options functionality can be found in js/app.js - templateOptions() -->
                       
                        <!-- END Template Options -->
                    </ul>
                    <!-- END Left Header Navigation -->

                    <!-- Search Form -->
                    <form action="page_ready_search_results.html" method="post" class="navbar-form-custom" role="search">
                        <div class="form-group">
                            <input type="text" id="top-search" name="top-search" class="form-control" placeholder="Search..">
                        </div>
                    </form>
                    <!-- END Search Form -->

                    <!-- Right Header Navigation -->
                    
                    <!-- END Right Header Navigation -->
                </header>
                <!-- END Header -->

                <!-- Page content -->
                <div id="page-content">
                    <!-- Datatables Header -->
                    
                    <ul class="breadcrumb breadcrumb-top">
                        <li>Tables</li>
                        <li><a href="">Datatables</a></li>
                    </ul>
                    <!-- END Datatables Header -->

                    <!-- Datatables Content -->
                    <div class="block full">
                        <div class="block-title">
                            <h2><strong>Datatables</strong> Of Contacts</h2>
                        </div>
                        <div  style="direction:rtl; margin-bottom: 15px;">
                        
                        <button type="button" name="add" id="add_data" class="btn btn-success btn-md">
                       
                        Add
                        <i class="fa fa-plus fa-x"></i>
                        </button>
                        <div style="margin-top: 15px;" id="UpdateMSGAlter" class=" text-center"></div>
                        </div>
                        <div class="table-responsive">
                            <table id="student_table" class="table table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                         <th>Message</th>
                                         <th>Date</th>
                                         <th>Action</th>
                                        </tr>
                                    </thead>
                                </table>
                        </div>
                    </div>
                    <!-- END Datatables Content -->
                </div>
                <!-- END Page Content -->

                <!-- Footer -->
                <footer class="clearfix">
                  @include('admin.include.footer')
                </footer>
                <!-- END Footer -->
            </div>
            <!-- END Main Container -->
        </div>
        <!-- END Page Container -->

        <!-- Scroll to top link, initialized in js/app.js - scrollToTop() -->
        <a href="#" id="to-top"><i class="fa fa-angle-double-up"></i></a>

            <!-- User Settings, modal which opens from Settings link (found in top right user menu) and the Cog link (found in sidebar user info) -->
            @include('admin.include.usersetting')
            <!-- END User Settings -->

            <!-- Include Jquery library from Google's CDN but if something goes wrong get Jquery from local file (Remove 'http:' if you have SSL) -->
                @include('admin.include.appjs')

        <!-- Load and execute javascript code used only in this page -->
        <script src="{{asset('admin/js/pages/tablesDatatables.js')}}"></script>
        <script>$(function(){ TablesDatatables.init(); });</script>

      <div id="studentModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="POST" id="student_form">
                <div class="modal-header">
                   <button type="button" class="close" data-dismiss="modal">&times;</button>
                   <h4 class="modal-title">Add Data</h4>
                </div>
                <div class="modal-body">
                    {{csrf_field()}}
                    <span id="form_output"></span>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" id="name" class="form-control" />
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" id="email" class="form-control" />
                    </div>

                    <div class="form-group">
                        <label>Message</label>
                        <input type="text" name="message" id="message" class="form-control" />
                    </div>
                </div>
                <div class="modal-footer">
                    <!-- input Hidden to Select ID Student -->
                    <input type="hidden" name="student_id" id="student_id" value="" />

                    <input type="hidden" name="button_action" id="button_action" value="insert" />
                    <input type="submit" name="submit" id="action" value="Add" class="btn btn-info" />
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- delete from confirm -->
<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Confirm Delete</h4>
                </div>
            
                <div class="modal-body">
                   Are You Sure Deleted?
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-danger btn-ok delete" >Delete</a>
                </div>
            </div>
        </div>
    </div>

<script type="text/javascript">
$(document).ready(function() {
     $('#student_table').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": "{{ route('ContactUs.getdata') }}",
        "columns":[
            { "data": "name" },
            { "data": "email" },
            { "data": "message" },
            { "data": "created_at" },
            { "data": "action", orderable:false, searchable: false}
        ]
     });

    $('#add_data').click(function(){
        $('#studentModal').modal('show');
        $('#student_form')[0].reset();
        $('#form_output').html('');
        $('#button_action').val('insert');
        $('#action').val('Add');
    });

    $('#student_form').on('submit', function(event){
        
        event.preventDefault();
        var form_data = $(this).serialize();
        $.ajax({
            url:"{{ route('ContactUs.postdata') }}",
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
                    
                    if($('#button_action').val()=='update')
                        {

                            $('#studentModal').modal('hide');
                            $('#UpdateMSGAlter').html(data.success);
                            $('#action').val('Add');
                            $('#button_action').val('insert');
                            $('#student_table').DataTable().ajax.reload();
                        }
                    else
                        {
                            $('#form_output').html(data.success);
                            $('#student_form')[0].reset();
                            $('#action').val('Add');
                            $('.modal-title').text('Add Data');
                            $('#button_action').val('insert');
                            $('#student_table').DataTable().ajax.reload();
                        }

                }
            }
        })
    });

    // Edit Data Code By Ajax
     $(document).on('click', '.edit', function(){
        var id = $(this).attr("id");
        $('#form_output').html('');
        $.ajax({
            url:"{{route('ContactUs.fetchdata')}}",
            method:'get',
            data:{id:id},
            dataType:'json',
            success:function(data)
            {
                //$('#action').prop('disabled', true);
                $('#name').val(data.name);
                $('#email').val(data.email);
                $('#message').val(data.message);
                $('#student_id').val(id); // input hidden
                $('#studentModal').modal('show');
                $('#action').val('Edit');
                $('.modal-title').text('Edit Data');
                $('#button_action').val('update');
               
            }
        })
    });

        
         
        // Delete Data 
        $(document).on('click', '.deleteModal', function(){
               $('#confirm-delete').modal('show');
               $('.delete').attr("id",$(this).attr('id'));
         });

    // Delete Data Code By Ajax 
        $(document).on('click', '.delete', function(){
        var id = $(this).attr('id');
       
            $.ajax({
                url:"{{route('ContactUs.removedata')}}",
                mehtod:"get",
                data:{id:id},
                success:function(data)
                {
                    $('#confirm-delete').modal('hide');
                    $('#UpdateMSGAlter').html(data);
                    $('#student_table').DataTable().ajax.reload(); // to remove from table
                }
            })
        
       
    });


 
        
});
</script>
    </body>
</html>