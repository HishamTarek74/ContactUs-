<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>!window.jQuery && document.write(decodeURI('%3Cscript src="js/vendor/jquery-1.11.1.min.js"%3E%3C/script%3E'));</script>

  <!-- Main Sidebar -->
  <div id="sidebar">
                <!-- Wrapper for scrolling functionality -->
                <div class="sidebar-scroll">
                    <!-- Sidebar Content -->
                    <div class="sidebar-content">
                        <!-- Brand -->
                        <a href="#" class="sidebar-brand">
                           <img src="{{asset('admin/img/placeholders/photos/photo10.jpg')}}" style="background:white;
                               ;width:40%;margin-top: 2px; border-radius: 10px;" />
                           <strong>Contact </strong>
                        </a>
                        <!-- END Brand -->

                        <!-- User Info -->
                        <div class="sidebar-section sidebar-user clearfix">
                            <div class="sidebar-user-avatar">
                                <a href="#">
                                    <img src="{{asset('admin/img/placeholders/avatars/avatar2.jpg')}}" alt="avatar">
                                </a>
                            </div>
                             @if (!Auth::guest()) 
                            <div class="sidebar-user-name">{{ Auth::user()->name }}</div>
                             @endif
                            <div class="sidebar-user-links">
                                <a href="#modal-user-profile" data-toggle="modal" class="enable-tooltip profile_set" data-placement="bottom" title="Chage Profile"><i class="gi gi-user"></i></a>
                               
                                <!-- Opens the user settings modal that can be found at the bottom of each page (page_footer.html in PHP version) -->
                                <a href="#" class="site_set enable-tooltip" data-placement="bottom" title="Chage Site Setting "><i class="gi gi-cogwheel"></i></a>
                                <a href="#"
                                    onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();" data-toggle="tooltip" data-placement="bottom" title="Logout"><i class="gi gi-exit"></i></a>
                                           <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    {{ csrf_field() }}
                                                </form>
                            </div>
                        </div>
                        <!-- END User Info -->

                        <!-- Theme Colors -->
                        <!-- Change Color Theme functionality can be found in js/app.js - templateOptions() -->
                        <ul class="sidebar-section sidebar-themes clearfix">
                            <li class="active">
                                <a href="javascript:void(0)" class="themed-background-dark-default themed-border-default" data-theme="default" data-toggle="tooltip" title="Default Blue"></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="themed-background-dark-night themed-border-night" data-theme="{{asset('admin/css/themes/night.css')}}" data-toggle="tooltip" title="Night"></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="themed-background-dark-amethyst themed-border-amethyst" data-theme="{{asset('admin/css/themes/amethyst.css')}}" data-toggle="tooltip" title="Amethyst"></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="themed-background-dark-modern themed-border-modern" data-theme="{{asset('admin/css/themes/modern.css')}}" data-toggle="tooltip" title="Modern"></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="themed-background-dark-autumn themed-border-autumn" data-theme="{{asset('admin/css/themes/autumn.css')}}" data-toggle="tooltip" title="Autumn"></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="themed-background-dark-flatie themed-border-flatie" data-theme="{{asset('admin/css/themes/flatie.css')}}" data-toggle="tooltip" title="Flatie"></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="themed-background-dark-spring themed-border-spring" data-theme="{{asset('admin/css/themes/spring.css')}}" data-toggle="tooltip" title="Spring"></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="themed-background-dark-fancy themed-border-fancy" data-theme="{{asset('admin/css/themes/fancy.css')}}" data-toggle="tooltip" title="Fancy"></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="themed-background-dark-fire themed-border-fire" data-theme="{{asset('admin/css/themes/fire.css')}}" data-toggle="tooltip" title="Fire"></a>
                            </li>
                        </ul>
                        <!-- END Theme Colors -->

                        <!-- Sidebar Navigation -->
                        <ul class="sidebar-nav">
                            <li>
                                <a href="/admin/home" class=" active"><i class="gi gi-stopwatch sidebar-nav-icon"></i>Dashboard</a>
                            </li>
                            <li class="sidebar-header">
                                <span class="sidebar-header-options clearfix"><a href="javascript:void(0)" data-toggle="tooltip" title="Quick Settings"><i class="gi gi-settings"></i></a><a href="javascript:void(0)" data-toggle="tooltip" title="Create the most amazing pages with the widget kit!"><i class="gi gi-lightbulb"></i></a></span>
                                <span class="sidebar-header-title">Setting Site</span>
                            </li>
                            <li>
                                <a href="#modal-user-profile" data-toggle="modal" class="enable-tooltip profile_set" data-placement="bottom" title="Chage Profile"><i class="gi gi-charts sidebar-nav-icon"></i>Profile</a>
                            </li>
                            <li>
                                <a href="#"  class="enable-tooltip site_set" data-placement="bottom" title="Chage Site Setting "><i class="gi gi-share_alt sidebar-nav-icon"></i>Setting</a>
                            </li>
                            <li>
                            <a href="#modal-user-pass" data-toggle="modal" class="enable-tooltip" data-placement="bottom" title="Chage Password"><i class="fa fa-key sidebar-nav-icon"></i> Chage Password</a>
                              
                            </li>
                            <li>
                                <a href="#"><i class="gi gi-user sidebar-nav-icon"></i>Users</a>
                            </li>
                            <li class="sidebar-header">
                                <span class="sidebar-header-options clearfix"><a href="javascript:void(0)" data-toggle="tooltip" title="Quick Settings"><i class="gi gi-settings"></i></a></span>
                                <span class="sidebar-header-title">Operatoin</span>
                            </li>
                            
                                  <li>
                                        <a href="/admin/contacts"><i class="fa fa-tasks"></i>  Contacts</a>
                                    </li>



                                  
                       
                        </ul>
                        <!-- END Sidebar Navigation -->

                      
                    </div>
                    <!-- END Sidebar Content -->
                </div>
                <!-- END Wrapper for scrolling functionality -->
            </div>
            <!-- END Main Sidebar -->


<!-- form change password-->

   <!-- User Settings, modal which opens from Settings link (found in top right user menu) and the Cog link (found in sidebar user info) -->
   <div id="modal-user-pass" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header text-center">
                        <h2 class="modal-title"><i class="fa fa-pencil"></i> Change Password</h2>
                    </div>
                    <!-- END Modal Header -->

                    <!-- Modal Body -->
                    <div class="modal-body">
                     <div id="UpdateMSGAlterPass"></div> 
                       <form  method="post" id="pass_form"   enctype="multipart/form-data" class="form-horizontal form-bordered" >
                       {{csrf_field()}}     
                       <fieldset>
                                <legend>Password Update</legend>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="user-settings-password">New Password</label>
                                    <div class="col-md-8">
                                        <input type="password" id="user-settings-password" name="new-password" class="form-control" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="user-settings-repassword">Confirm New Password</label>
                                    <div class="col-md-8">
                                        <input type="password" id="user-settings-repassword" name="new-repassword" class="form-control" >
                                    </div>
                                </div>
                            </fieldset>
                            <div class="form-group form-actions">
                                <div class="col-xs-12 text-right">
                                    <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-sm btn-primary" >Save Changes</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- END Modal Body -->
                </div>
            </div>
        </div>
        <!-- END User Password -->
      

      <!--  Profile Form -->
   <div id="modal-user-profile" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header text-center">
                        <h2 class="modal-title"><i class="fa fa-pencil"></i> Change Profile</h2>
                    </div>
                    <!-- END Modal Header -->

                    <!-- Modal Body -->
                    <div class="modal-body">
                     <div id="UpdateMSGAlterProfile"></div>
                       <form  method="post" id="profile_form"   enctype="multipart/form-data" class="form-horizontal form-bordered" >
                       {{csrf_field()}}
                       <span id="form_output"></span>
                       <fieldset>
                                <legend>Password Update</legend>
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Name</label>
                                    <div class="col-md-8">
                                        <input type="text" id="name" name="name" class="form-control" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" >Email</label>
                                    <div class="col-md-8">
                                        <input type="email" id="email" name="email" class="form-control" >
                                    </div>
                                </div>
                            </fieldset>
                            <div class="form-group form-actions">
                                <div class="col-xs-12 text-right">
                                    <button type="button" class="btn btn-sm btn-default edit" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-sm btn-primary" >Save Changes</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- END Modal Body -->
                </div>
            </div>
        </div>
<!-- End Profile Form -->

<!-- Form Site Setting -->
   <div id="modal-site-setting" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header text-center">
                        <h2 class="modal-title"><i class="fa fa-pencil"></i> Change Site Setting</h2>
                    </div>
                    <!-- END Modal Header -->

                    <!-- Modal Body -->
                    <div class="modal-body">
                     <div id="UpdateMSGAlterSetting"></div>
                       <form  method="post" id="setting_form"  enctype="multipart/form-data" class="form-horizontal form-bordered" >
                       {{csrf_field()}}
                       <span id="form_output"></span>
                       <fieldset>
                                <legend>Site Setting Update</legend>
                                <div class="form-group ">
                                    <label class="col-md-2 control-label" for="Title">Title </label>
                                    <div class="col-md-10">
                                        <input type="text" id="STitle" name="STitle" class="form-control" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label"  >Description</label>
                                    <div class="col-md-10">
                                        <textarea  id="SDesc" name="SDesc" class="form-control textarea-editor"></textarea>
                                    </div>
                                </div>
                                   <div class="form-group ">
                                    <label class="col-md-2 control-label">Logo</label>
                                    <div class="col-md-10">
                                        <input type="file" id="SLogo" name="SLogo" class="form-control" />
                                         <img src=""  height="42" width="42" id="SImage" >
                                    </div>
                                </div>
                                 <div class="form-group col-md-6">
                                    <label class="col-md-4 control-label" for="Phone1">Phone1</label>
                                    <div class="col-md-8">
                                        <input type="text" id="SPhone1" name="SPhone1" class="form-control" />
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="col-md-4 control-label" for="Phone2">Phone2</label>
                                    <div class="col-md-8">
                                        <input type="text" id="SPhone2" name="SPhone2" class="form-control" />
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="col-md-4 control-label" for="mail">Email</label>
                                    <div class="col-md-8">
                                        <input type="email" id="Smail" name="Smail" class="form-control" />
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="col-md-4 control-label" for="Adress">Adress  </label>
                                    <div class="col-md-8">
                                        <input type="text" id="SAdress" name="SAdress" class="form-control" />
                                    </div>
                                </div>

                                <div class="form-group col-md-6">
                                    <label class="col-md-4 control-label" for="Adress">Adress2 </label>
                                    <div class="col-md-8">
                                        <input type="text" id="SAdress2" name="SAdress2" class="form-control" />
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="col-md-4 control-label" for="FaceBook">FaceBook</label>
                                    <div class="col-md-8">
                                        <input type="text" id="SFaceBook" name="SFaceBook" class="form-control" />
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="col-md-4 control-label" for="Instagram">Instagram</label>
                                    <div class="col-md-8">
                                        <input type="text" id="SInstagram" name="SInstagram" class="form-control" />
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="col-md-4 control-label" for="Twitter">Twitter</label>
                                    <div class="col-md-8">
                                        <input type="text" id="STwitter" name="STwitter" class="form-control" />
                                    </div>
                                </div>
                                 <div class="form-group col-md-6">
                                    <label class="col-md-4 control-label" for="Skype">Skype</label>
                                    <div class="col-md-8">
                                        <input type="text" id="SSkype" name="SSkype" class="form-control" />
                                    </div>
                                </div>
                            </fieldset>
                            <div class="form-group form-actions">
                                <div class="col-xs-12 text-right">
                                    <button type="button" class="btn btn-sm btn-default edit" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-sm btn-primary" >Save Changes</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- END Modal Body -->
                </div>
            </div>
        </div>
<!-- End Site Setting -->
<script>

 </script>



