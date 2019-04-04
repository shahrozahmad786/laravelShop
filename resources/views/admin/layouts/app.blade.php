<!DOCTYPE html>
<html lang="en">
<head>

    @yield('admin_css')

    @include('admin.layouts.head')



<!--Ajax must be add herer--->
<script type="text/javascript">
	
	    <script>
    $(document).ready(function(){
        $('#Dtable').DataTable();
        $('.select2').select2();
    });

</script>
=



</head>
<body>


   <div class="wrapper">
       @yield('content')

          @show
            
          @include('admin.layouts.navbar')
          
          @include('admin.layouts.sidebar')

          @include('admin.layouts.footer')

        @yield('section-footer')
        </div>


   

</body>

  

</html>