<!DOCTYPE html5>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>smartGigs</title>
    <link rel="icon" type="image/png" href="{{asset('images/fav.png')}}">

<!-- Bootstrap icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

    <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">


<script src="//unpkg.com/alpinejs" defer></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<style type="text/css">

</style>

</head>

<body>

    <x-flash-message />
    <div class="row sticky-top bg-white">
        <div class="col-sm-12 ">
        <span><a class="text-decoration-none text-dark" href="/"><img  style="width:100px" src="{{asset('images/smartlogo.png')}}"></a>
            @auth
            <form  class="float-end py-2" method="post" action="/logout">
            @csrf
            <button class="btn" type="submit">
                <i class="bi bi-door-closed-fill"></i>&nbsp; Logout
            </button>
            </form>
            
            <span class="float-end py-3 mx-3"> <a class="text-decoration-none text-dark text-center" href="/listings/manage"><i class="bi bi-gear-fill"></i>&nbsp;Manage Listings</a></span></span>
            
            <span class="float-end py-3 mx-3"><b>Welcome {{auth()->user()->name}}</b></span>
            @else
            
            <span class="float-end py-3 mx-3"><a class="text-decoration-none text-dark" aria-current="page" href="/login"><i class="bi bi-box-arrow-in-right"></i>Login</a></span>
            <span class="float-end py-3 mx-3"> <a class="text-decoration-none text-dark" href="/register"><i class="bi bi-person-fill"></i>Register</a></span></span>
            @endauth
        
        
        </div>
        
        </div>
    <main>
        {{$slot}}
    </main>




      
    
   <br><br><br><br>
   
   <footer class="footer" style="bottom:0; position:fixed; opacity:0.8;width:100%">
    @auth
       <div style="background-color:#ED3237; height:100px; width:100%;" class="text-center py-3 ">
       <div class="m-auto py-3 text-white">Copyright @ <?php echo date('Y');?>. All Rights Reserved.<span class="btn btn-dark float-end mx-3"><a class="text-decoration-none text-white" href="/listings/create"> Post Jobs</a></span>
       </div>
       @else
       <div style="background-color:#ED3237; height:100px; width:100%;" class="text-center py-3 ">
        <div class="m-auto py-3 text-white">Copyright @ <?php echo date('Y');?>. All Rights Reserved.<span class="btn btn-dark float-end mx-3"><a class="text-decoration-none text-white" href="/newsletter/subscribe"> Subscribe to our NewsLetters</a></span></div>
       </div>
       @endauth
       </footer>

   

       
   
</body>
</html>