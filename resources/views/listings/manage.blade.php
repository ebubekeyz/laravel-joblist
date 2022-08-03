<x-layout>
    
  <div class="mt-3" style="background-color:rgb(241, 239, 239);">
   <div class="col-sm-12 text-center mb-3" style="border-bottom:2px solid rgb(184, 181, 181)"><h3 class="py-3">Manage GIGS</h3></div>
   
   @unless($listings->isEmpty())
   @foreach($listings as $listing)
   <div class="row text-center" style="border-bottom:2px solid rgb(184, 181, 181)">
     <div class="col-sm-4 text-uppercase mt-2"><b>{{$listing->title}}</b></div>
     <div class="col-sm-4 mt-2">  <a class="text-decoration-none text-primary" href="/listings/{{$listing->id}}/edit">
           <i class="bi bi-pen-fill"></i> Edit
       </a></div>
     <div class="col-sm-4"><form method="post" action="/listings/{{$listing->id}}">
       @csrf
       @method('DELETE')
       <button class="btn btn-white text-danger w-25"><i class="bi bi-trash-fill"></i>&nbsp; Delete</button>
   </form></div>
 
 </div>
 @endforeach
 @else

 <div class="text-center py-3">No Listings Found</div>

 @endunless
</div>
  



</x-layout>
