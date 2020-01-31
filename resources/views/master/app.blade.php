<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from coderthemes.com/ubold/layouts/light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Jun 2019 17:54:17 GMT -->
<head>
        <meta charset="utf-8" />
        <title>UBold - Responsive Admin Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('')}}assets/images/favicon.ico">

        <!-- Plugins css -->
        <link href="{{asset('')}}assets/libs/flatpickr/flatpickr.min.css" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <link href="{{asset('')}}assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="{{asset('')}}assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="{{asset('')}}assets/css/app.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet" />

        <meta name="csrf-token" content="{{ csrf_token() }}" />

        @stack('css')
        @notifyCss

    </head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Topbar Start -->
            @include('master.navbar')
            <!-- end Topbar -->

            <!-- ========== Left Sidebar Start ========== -->
            @include('master.leftbar')
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    @yield('content') <!-- container -->

                </div> <!-- content -->

                <!-- Footer Start -->
                @include('master.footer')
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        <!-- Right Sidebar -->
        @include('master.rightbar')
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- Vendor js -->
        <script src="{{asset('')}}assets/js/vendor.min.js"></script>

        <!-- Plugins js-->
        <script src="{{asset('')}}assets/libs/flatpickr/flatpickr.min.js"></script>
        <script src="{{asset('')}}assets/libs/jquery-knob/jquery.knob.min.js"></script>
        <script src="{{asset('')}}assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>
        <script src="{{asset('')}}assets/libs/flot-charts/jquery.flot.js"></script>
        <script src="{{asset('')}}assets/libs/flot-charts/jquery.flot.time.js"></script>
        <script src="{{asset('')}}assets/libs/flot-charts/jquery.flot.tooltip.min.js"></script>
        <script src="{{asset('')}}assets/libs/flot-charts/jquery.flot.selection.js"></script>
        <script src="{{asset('')}}assets/libs/flot-charts/jquery.flot.crosshair.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

        <!-- Dashboar 1 init js-->
        <script src="{{asset('')}}assets/js/pages/dashboard-1.init.js"></script>

        <!-- App js-->
        <script src="{{asset('')}}assets/js/app.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
         <script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>

        @stack('jquery')
        @notifyJs
        <script type="text/javascript">
            $(document).on('click','.delete',function(e){
                e.preventDefault();
                var id=$(this).data("id");
                Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                if (id) {
                    $.ajax({
                    type:"get",
                    url:"{{URL('user/delete')}}/"+id,
                    data:{id:id},
                    success:function(data)
                    {
                        if(data){
                            Swal.fire(
                                'Deleted!',
                                'Your file has been deleted.',
                                'success'
                                )
                        }
                        else
                        {
                        Swal.fire(
                        'your file is safe'
                        )
                        }
                       location.reload();
                    }
                });
                
            }
            
        });
    });                
</script>
<script type="text/javascript">
$(function(){
    $('#datepicker-2').datepicker({
        //changeYear:true,
        changeMonth:true,
    })
});
$(document).ready(function(){
    $('.jsmultiple').select2();
})

</script>
</body>

<!-- Mirrored from coderthemes.com/ubold/layouts/light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Jun 2019 17:54:51 GMT -->
</html>