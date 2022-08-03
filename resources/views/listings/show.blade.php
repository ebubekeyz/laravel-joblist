<x-layout>


<p class="mt-4">
<a href="/" class="mx-4 text-decoration-none text-dark"><b><i class="bi bi-arrow-left"></i>Back</b></a>
</p>
<div class="card mt-2 mx-4 mb-5 border border-0" style="background-color:rgb(241, 239, 239);">
    <div class="row">
        <div class="col-sm-12">
            <div class="text-center">
                <img class="w-25 mt-5"  src="{{$listing->logo ? asset('storage/' . $listing->logo) : asset('/images/no-image.png')}}" alt=""/>
        


<h4 class="mt-5">{{$listing->title}}</h4>
<h4 class="mt-3"><b>{{$listing->company}}</b></h4>

<p class="mt-4">
<x-listing-tags :tagsCsv="$listing->tags" />
</p>
         


<p class="fs-5"><i class="bi bi-geo-alt-fill"></i> {{$listing->location}}</p>

<p style="border-bottom:2px solid rgb(184, 181, 181)" class=""></p>


<h2 class="mt-5"><b>Job Description</b></h2>
<div class="w-75 m-auto mb-4">{{$listing->description}}</div>
<p><a href="{{$listing->email}}" class="btn btn-danger text-decoration-none text-white w-25"><i class="bi bi-envelope-fill"></i> &nbsp;Contact Employer</a></p>

<p class="mb-4"><a href="{{$listing->website}}" class="btn btn-dark text-decoration-none text-white w-25"><i class="bi bi-globe"></i>&nbsp;        Visit Website</a></p>

            

<!--
    <div class="mt-4 mb-1 m-auto text-center">
        <a class="text-decoration-none btn btn-danger text-white w-25" href="/listings/{{$listing->id}}/edit">
            <i class="bi bi-pen-fill"></i> Edit
        </a>



        <form method="post" action="/listings/{{$listing->id}}">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger text-white mt-3 w-25"><i class="bi bi-trash-fill"></i>&nbsp; Delete</button>
        </form>-->
    
    </div>
   



</div>
        </div>
    </div>
</div>


</x-layout>