<x-layout>
    <div class="row">
        <div class="col-lg-6 m-auto">
            <div class="card"style="background-color:#F8F0E3;">
                <div class="card-title mt-5 text-center text-dark">
                <h3 class="py-3 "><b>Edit Gig</b></h3>
                <h6><b>Edit: {{$listing->title}}</b></h6>
                    
                     <!--<h3 class="py-3 "><b>Register</b></h3>-->
                </div>
                <div class="card-body">
                    <form  action="/listings/{{$listing->id}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <p><label for="company"><b>Comapany Name</b></label></p>
                        <input type="text" name="company" placeholder=""  class="form-control mb-3" value="{{$listing->company}}">
                        @error('company')
                        <p class="text-danger mt-1">{{$message}}</p>
                        @enderror


                        <p><label for="title"><b>Job Title</b></label></p>
                        <input type="text" name="title" placeholder="Example: Senior Larava Developer" class="form-control mb-3" value="{{$listing->title}}">
                        @error('title')
                        <p class="text-danger mt-1">{{$message}}</p>
                        @enderror
                        
                        <p><label for="location"><b>Job Location</b></label></p>
                        <input type="text" name="location" placeholder="Job Location" class="form-control mb-3" value="{{$listing->location}}">
                        @error('location')
                        <p class="text-danger mt-1">{{$message}}</p>
                        @enderror
                        

                        <p><label for="email"><b>Contact Email</b></label></p>
                        <input type="text" name="email" placeholder="" class="form-control mb-3" value="{{$listing->email}}">
                        @error('email')
                        <p class="text-danger mt-1">{{$message}}</p>
                        @enderror


                        <p><label for="website"><b>Website/Application URL</b></label></p>
                        <input type="text" name="website" placeholder="" class="form-control mb-3" value="{{$listing->website}}">
                        @error('website')
                        <p class="text-danger mt-1">{{$message}}</p>
                        @enderror
                        
                        
                        
                        <p><label for=""><b>Tags/Comma Seperated</b></label></p>
                        <input type="text" name="tags" placeholder="Example: Larava, Backend, Api" class="form-control mb-3" value="{{$listing->tags}}">
                        @error('tags')
                        <p class="text-danger mt-1">{{$message}}</p>
                        @enderror
                        
                        <p><label for="logo"><b>Comapny Logo</b></label></p>
                        <input type="file" name="logo" placeholder="Company Logo"  accept= "image/jpg, image/png, image/jpeg" class="form-control mb-3">

                        <img class="w-25 mt-5" src="{{$listing->logo ? asset('storage/' . $listing->logo) : asset('/images/no-image.png')}}">

                        @error('logo')
                        <p class="text-danger mt-1">{{$message}}</p>
                        @enderror
                        

                        <p><label for="description"><b>Job Description</b></label></p>
                        <textarea name="description" placeholder="Example: Includes Task, requirements and Salaries" id="comment" class="form-control mb-3" rows="5">{{$listing->description}}</textarea>
                        @error('description')
                        <p class="text-danger mt-1">{{$message}}</p>
                        @enderror
                        

                        <div class="text-center mt-3"><button class="btn btn-danger w-100" name="post">Update GIG</button></div>
                        <P class="mt-2"><a class="text-decoration-none text-dark" href="/"><i class="bi bi-arrow-left"></i>Back</a></P>
      
                        
                    </form>
                   
                </div>
            </div>
        </div>
    </div>
</x-layout>
