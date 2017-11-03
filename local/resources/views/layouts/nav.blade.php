       <li class="header">MAIN NAVIGATION</li>
       <li class="@if(\Request::is('homes')) active @endif ">
              <a href="{{url('/homes')}}">
                     <i class="fa fa-dashboard"></i> <span>Dashboard</span>
              </a>
       </li>

              <li class="@if(\Request::is('beritas') || \Request::is('beritas/*')) active @endif treeview">
                     <a href="{{url('/beritas')}}">
                      <i class="fa fa-newspaper-o"></i>
                      <span>Berita</span>
                    </a>
                    <ul class="treeview-menu">
                      <li class="@if(\Request::is('beritas/create')) active @endif"><a href="{!! route('beritas.create') !!}"><i class="fa fa-plus-circle"></i> Tambah Berita</a></li>
                      <li class="@if(\Request::is('beritas')) active @endif"><a href="{{url('beritas')}}"><i class="fa fa-table"></i> Data Berita</a></li>
                    </ul>
              </li>
              {{-- <li class="@if(\Request::is('slideshows') || \Request::is('slideshows/*')) active @endif treeview">
                     <a href="{{url('/slideshows')}}">
                      <i class="fa fa-picture-o"></i>
                      <span>Slideshow</span>
                    </a>
                    <ul class="treeview-menu">
                      <li class="@if(\Request::is('slideshows/create')) active @endif"><a href="{!! route('slideshows.create') !!}"><i class="fa fa-plus-circle"></i> Tambah Slideshow</a></li>
                      <li class="@if(\Request::is('slideshows')) active @endif"><a href="{{url('slideshows')}}"><i class="fa fa-table"></i> Data Slideshow</a></li>
                    </ul>
              </li>
              <li class="@if(\Request::is('galleries') || \Request::is('galleries/*')) active @endif treeview">
                     <a href="{{url('/galleries')}}">
                      <i class="fa fa-file-picture-o"></i>
                      <span>Gallery</span>
                    </a>
                    <ul class="treeview-menu">
                      <li class="@if(\Request::is('galleries/create')) active @endif"><a href="{!! route('galleries.create') !!}"><i class="fa fa-plus-circle"></i> Tambah Gallery</a></li>
                      <li class="@if(\Request::is('galleries')) active @endif"><a href="{{url('galleries')}}"><i class="fa fa-table"></i> Data Gallery</a></li>
                    </ul>
              </li> --}}
              <li class="@if(\Request::is('katalogs') || \Request::is('katalogs/*')) active @endif treeview">
                     <a href="{{url('/katalogs')}}">
                      <i class="fa fa-book"></i>
                      <span>Data Katalog</span>
                    </a>
                    <ul class="treeview-menu">
                      <li class="@if(\Request::is('katalogs/create')) active @endif"><a href="{!! route('katalogs.create') !!}"><i class="fa fa-plus-circle"></i> Tambah Katalog</a></li>
                      <li class="@if(\Request::is('katalogs')) active @endif"><a href="{{url('katalogs')}}"><i class="fa fa-table"></i> Data Katalog </a></li>
                    </ul>
              </li>
              <li class="@if(\Request::is('kategoris') || \Request::is('kategoris/*')) active @endif treeview">
                     <a href="{{url('/kategoris')}}">
                      <i class="fa fa-list-ul"></i>
                      <span>Data Kategori Buku</span>
                    </a>
                    <ul class="treeview-menu">
                      <li class="@if(\Request::is('kategoris/create')) active @endif"><a href="{!! route('kategoris.create') !!}"><i class="fa fa-plus-circle"></i> Tambah Kategori Buku</a></li>
                      <li class="@if(\Request::is('kategoris')) active @endif"><a href="{{url('kategoris')}}"><i class="fa fa-table"></i> Data Kategori Buku</a></li>
                    </ul>
              </li>
              <li class="@if(\Request::is('authors') || \Request::is('authors/*')) active @endif treeview">
                     <a href="{{url('/authors')}}">
                      <i class="fa fa-user-circle-o"></i>
                      <span>Data Author Buku</span>
                    </a>
                    <ul class="treeview-menu">
                      <li class="@if(\Request::is('authors/create')) active @endif"><a href="{!! route('authors.create') !!}"><i class="fa fa-plus-circle"></i> Tambah Author</a></li>
                      <li class="@if(\Request::is('authors')) active @endif"><a href="{{url('authors')}}"><i class="fa fa-table"></i> Data Author</a></li>
                    </ul>
              </li>
       @if (Auth::user()->role == 'admin')
              <li class="@if(\Request::is('user/librarian') || \Request::is('user/librarian/*')) active @endif treeview">
                     <a href="{{url('user/librarian')}}">
                            <i class="fa fa-user"></i>
                            <span>Admin librarian</span>
                     </a>
                     <ul class="treeview-menu">
                            <li class="@if(\Request::is('user/librarian/create')) active @endif"><a href="{!! route('user.create',['librarian']) !!}"><i class="fa fa-plus-circle"></i> Tambah librarian</a></li>
                            <li class="@if(\Request::is('user/librarian')) active @endif"><a href="{{url('user/librarian')}}"><i class="fa fa-table"></i> Data librarian</a></li>
                     </ul>
              </li>
       @endif
       {{-- <li class="treeview">
         <a href="#">
           <i class="fa fa-dashboard"></i> <span>Dashboard</span>
           <span class="pull-right-container">
             <i class="fa fa-angle-left pull-right"></i>
           </span>
         </a>
         <ul class="treeview-menu">
           <li class="active"><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
           <li><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
         </ul>
       </li> --}}
       {{-- <li class="treeview">
         <a href="#">
           <i class="fa fa-files-o"></i>
           <span>Layout Options</span>
           <span class="pull-right-container">
             <span class="label label-primary pull-right">4</span>
           </span>
         </a>
         <ul class="treeview-menu">
           <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
           <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
           <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
           <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
         </ul>
       </li>
       <li class="treeview">
         <a href="#">
           <i class="fa fa-pie-chart"></i>
           <span>Charts</span>
           <span class="pull-right-container">
             <i class="fa fa-angle-left pull-right"></i>
           </span>
         </a>
         <ul class="treeview-menu">
           <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> ChartJS</a></li>
           <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>
           <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
           <li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>
         </ul>
       </li>
       <li class="treeview">
         <a href="#">
           <i class="fa fa-laptop"></i>
           <span>UI Elements</span>
           <span class="pull-right-container">
             <i class="fa fa-angle-left pull-right"></i>
           </span>
         </a>
         <ul class="treeview-menu">
           <li><a href="pages/UI/general.html"><i class="fa fa-circle-o"></i> General</a></li>
           <li><a href="pages/UI/icons.html"><i class="fa fa-circle-o"></i> Icons</a></li>
           <li><a href="pages/UI/buttons.html"><i class="fa fa-circle-o"></i> Buttons</a></li>
           <li><a href="pages/UI/sliders.html"><i class="fa fa-circle-o"></i> Sliders</a></li>
           <li><a href="pages/UI/timeline.html"><i class="fa fa-circle-o"></i> Timeline</a></li>
           <li><a href="pages/UI/modals.html"><i class="fa fa-circle-o"></i> Modals</a></li>
         </ul>
       </li>
       <li class="treeview">
         <a href="#">
           <i class="fa fa-edit"></i> <span>Forms</span>
           <span class="pull-right-container">
             <i class="fa fa-angle-left pull-right"></i>
           </span>
         </a>
         <ul class="treeview-menu">
           <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i> General Elements</a></li>
           <li><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
           <li><a href="pages/forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>
         </ul>
       </li>
       <li class="treeview">
         <a href="#">
           <i class="fa fa-table"></i> <span>Tables</span>
           <span class="pull-right-container">
             <i class="fa fa-angle-left pull-right"></i>
           </span>
         </a>
         <ul class="treeview-menu">
           <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>
           <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>
         </ul>
       </li>
       <li>
         <a href="pages/calendar.html">
           <i class="fa fa-calendar"></i> <span>Calendar</span>
           <span class="pull-right-container">
             <small class="label pull-right bg-red">3</small>
             <small class="label pull-right bg-blue">17</small>
           </span>
         </a>
       </li>
       <li>
         <a href="pages/mailbox/mailbox.html">
           <i class="fa fa-envelope"></i> <span>Mailbox</span>
           <span class="pull-right-container">
             <small class="label pull-right bg-yellow">12</small>
             <small class="label pull-right bg-green">16</small>
             <small class="label pull-right bg-red">5</small>
           </span>
         </a>
       </li>
       <li class="treeview">
         <a href="#">
           <i class="fa fa-folder"></i> <span>Examples</span>
           <span class="pull-right-container">
             <i class="fa fa-angle-left pull-right"></i>
           </span>
         </a>
         <ul class="treeview-menu">
           <li><a href="pages/examples/invoice.html"><i class="fa fa-circle-o"></i> Invoice</a></li>
           <li><a href="pages/examples/profile.html"><i class="fa fa-circle-o"></i> Profile</a></li>
           <li><a href="pages/examples/login.html"><i class="fa fa-circle-o"></i> Login</a></li>
           <li><a href="pages/examples/register.html"><i class="fa fa-circle-o"></i> Register</a></li>
           <li><a href="pages/examples/lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
           <li><a href="pages/examples/404.html"><i class="fa fa-circle-o"></i> 404 Error</a></li>
           <li><a href="pages/examples/500.html"><i class="fa fa-circle-o"></i> 500 Error</a></li>
           <li><a href="pages/examples/blank.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>
           <li><a href="pages/examples/pace.html"><i class="fa fa-circle-o"></i> Pace Page</a></li>
         </ul>
       </li>
       <li class="treeview">
         <a href="#">
           <i class="fa fa-share"></i> <span>Multilevel</span>
           <span class="pull-right-container">
             <i class="fa fa-angle-left pull-right"></i>
           </span>
         </a>
         <ul class="treeview-menu">
           <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
           <li class="treeview">
             <a href="#"><i class="fa fa-circle-o"></i> Level One
               <span class="pull-right-container">
                 <i class="fa fa-angle-left pull-right"></i>
               </span>
             </a>
             <ul class="treeview-menu">
               <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
               <li class="treeview">
                 <a href="#"><i class="fa fa-circle-o"></i> Level Two
                   <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                   </span>
                 </a>
                 <ul class="treeview-menu">
                   <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                   <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                 </ul>
               </li>
             </ul>
           </li>
           <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
         </ul>
       </li>
       <li><a href="https://adminlte.io/docs"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
       <li class="header">LABELS</li>
       <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
       <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
       <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li> --}}
