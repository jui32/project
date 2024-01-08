 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="utf-8">
     @notifyCss
     <style>
.notify{
    z-index: 1000000;
}


     </style>
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
             height: 466px !important;
         }

         div.gallery:hover {
             border: 1px solid #777;
         }

         div.gallery img {
             width: 100%;
             height: 220px;
         }

         div.desc {
             padding: 15px;
             text-align: center;
         }
     </style>


 </head>

 <body>


    <x-notify::notify/>
     <div class="container-xxl bg-white p-0">

         <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
<div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
<span class="sr-only">Loading...</span>
</div>
</div> 

         <!-- Header-->


         @include('frontend.front_includes.header')

         <!-- End Header-->

  <!-- Header-->
  <header class="bg-dark py-1">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display- fw-bolder">Search your product</h1>
            
            <form action="{{route('item.search')}}" method="get">
                <input type="text" class="form-control" placeholder="Search..." name="search">
                <button type="submit" class="btn btn-danger">Search</button>
            </form>
           
        </div>
    </div>
</header>

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
         @notifyJs<script>

            
            (function (window, document) {
                var loader = function () {
                    var script = document.createElement("script"), tag = document.getElementsByTagName("script")[0];
                    script.src = "https://sandbox.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(7);
                    tag.parentNode.insertBefore(script, tag);
                };
        
                window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload", loader);
            })(window, document);
        </script>



 </body>

 </html>
