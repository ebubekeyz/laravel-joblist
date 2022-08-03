<x-layout>

    <div class="row">
        <div class="col-lg-6 m-auto">
            <div class="card"style="background-color:#F8F0E3">
                <div class="card-title mt-5 text-center text-dark">
                <h3 class="py-3 "><b>Subscribe to our NewsLetters</b></h3>
                <h6><b>Get updates on our latest Post</b></h6>
                    
                     <!--<h3 class="py-3 "><b>Register</b></h3>-->
                </div>
                <div class="card-body">
                    <form  action="{{route('email.store')}}" method="post">
                        @csrf
                       
                       
                        <input type="text" name="email" placeholder="Type your Email Address" class="form-control mb-3" value="{{old('email')}}">
                        @error('email')
                        <p class="text-danger mt-1">{{$message}}</p>
                        @enderror
                                         <div class="text-center mt-3"><button class="btn btn-danger w-100" name="subscribe">Subscribe To Our NewsLetter</button></div>
                       
                    </form>
                   
                </div>
            </div>
        </div>
    </div>



</x-layout>