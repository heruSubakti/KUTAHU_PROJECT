<!doctype html>
<html lang="en">
  <head>
    @include('layouts.Dashboard.head')
  </head>
  <body> 
      {{-- @include('layouts.Dashboard.sidebar') --}}
      
     
        {{-- @include('layouts.Dashboard.navbar') --}}
        <div class="page-wrapper mini-sidebar" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="mini-sidebar" data-sidebar-position="fixed" data-header-position="fixed">
            @include('layouts.Dashboard.sidebar')
            <div class="body-wrapper">
                @include('layouts.Dashboard.navbar')
            @yield('content')
        </div>
        </div>
        {{-- @include('layouts.Dashboard.footer') --}}
    

    @include('layouts.Dashboard.script')
  </body>
</html>