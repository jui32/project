 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="utf-8">
     <title>Restaurant - Bootstrap Restaurant Template</title>
     <meta content="width=device-width, initial-scale=1.0" name="viewport">
     <meta content name="keywords">
     <meta content name="description">

     <link href="img/favicon.ico" rel="icon">

     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link
         href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap"
         rel="stylesheet">

     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

     <link href="https://demo.htmlcodex.com/2098/bootstrap-restaurant-template/lib/animate/animate.min.css"
         rel="stylesheet">
     <link
         href="https://demo.htmlcodex.com/2098/bootstrap-restaurant-template/lib/owlcarousel/assets/owl.carousel.min.css"
         rel="stylesheet">
     <link
         href="https://demo.htmlcodex.com/2098/bootstrap-restaurant-template/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css"
         rel="stylesheet" />

     <link href="https://demo.htmlcodex.com/2098/bootstrap-restaurant-template/css/bootstrap.min.css" rel="stylesheet">

     <link href="https://demo.htmlcodex.com/2098/bootstrap-restaurant-template/css/style.css" rel="stylesheet">

     <style>
         div.gallery {
             margin: 5px;
             border: 1px solid #ccc;
             float: left;
             width: 250px !important;
             height: 400px !important;
         }

         div.gallery:hover {
             border: 1px solid #777;
         }

         div.gallery img {
             width: 100%;
             height: auto;
         }

         div.desc {
             padding: 15px;
             text-align: center;
         }
     </style>


 </head>

 <body>
     <div class="container-xxl bg-white p-0">

         {{-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
<div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
<span class="sr-only">Loading...</span>
</div>
</div> --}}

         <!-- Header-->


         @include('frontend.front_includes.header')

         <!-- End Header-->



         <!-- main-->

     
         @yield('content')

     <!-- end main-->


     <!-- footer-->

     @include('frontend.front_includes.footer')

     <!-- End footer-->

     <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
     </div>

     <script data-cfasync="false"
         src="https://demo.htmlcodex.com/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
     <script src="https://code.jquery.com/jquery-3.4.1.min.js" type="b60ffd3d09ef56297ef866dd-text/javascript"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" type="b60ffd3d09ef56297ef866dd-text/javascript"></script>
     <script src="https://demo.htmlcodex.com/2098/bootstrap-restaurant-template/lib/wow/wow.min.js" type="b60ffd3d09ef56297ef866dd-text/javascript"></script>
     <script src="https://demo.htmlcodex.com/2098/bootstrap-restaurant-template/lib/easing/easing.min.js" type="b60ffd3d09ef56297ef866dd-text/javascript"></script>
     <script src="https://demo.htmlcodex.com/2098/bootstrap-restaurant-template/lib/waypoints/waypoints.min.js" type="b60ffd3d09ef56297ef866dd-text/javascript"></script>
     <script src="https://demo.htmlcodex.com/2098/bootstrap-restaurant-template/lib/counterup/counterup.min.js" type="b60ffd3d09ef56297ef866dd-text/javascript"></script>
     <script src="https://demo.htmlcodex.com/2098/bootstrap-restaurant-template/lib/owlcarousel/owl.carousel.min.js" type="b60ffd3d09ef56297ef866dd-text/javascript"></script>
     <script src="https://demo.htmlcodex.com/2098/bootstrap-restaurant-template/lib/tempusdominus/js/moment.min.js" type="b60ffd3d09ef56297ef866dd-text/javascript"></script>
     <script src="https://demo.htmlcodex.com/2098/bootstrap-restaurant-template/lib/tempusdominus/js/moment-timezone.min.js" type="b60ffd3d09ef56297ef866dd-text/javascript"></script>
     <script src="https://demo.htmlcodex.com/2098/bootstrap-restaurant-template/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js" type="b60ffd3d09ef56297ef866dd-text/javascript"></script>

     <script src="https://demo.htmlcodex.com/2098/bootstrap-restaurant-template/js/main.js" type="b60ffd3d09ef56297ef866dd-text/javascript"></script>
     <script src="https://demo.htmlcodex.com/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
         data-cf-settings="b60ffd3d09ef56297ef866dd-|49" defer></script>

 </body>

 </html>
