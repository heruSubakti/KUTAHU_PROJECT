<!doctype html>
<html lang="en">
  <head>
    @include('layouts.landingpage.head')
  </head>
  <body> 
      @include('layouts.landingpage.sidebar')
      
      <main class="content">
        @include('layouts.landingpage.navbar')
    
        @yield('content')

        @include('layouts.landingpage.footer')
      </main>

    @include('layouts.landingpage.script')
  </body>
</html>