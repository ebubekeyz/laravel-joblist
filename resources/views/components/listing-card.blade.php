
@props(['listing'])

<x-card>
    <div class="row">
        <div class="col-lg-5 mt-3">
      
            <img class="w-75"  src="{{$listing->logo ? asset('storage/' . $listing->logo) : asset('/images/no-image.png')}}" alt=""/>
        
        
        </div>
        <div class="col-lg-7 mt-5">
            <span class="fs-5"><a class="text-decoration-none text-dark" href="/listings/{{$listing->id}}">{{$listing->title}}</a></span>
            <p class="fs-5"><b>{{$listing->company}}</b></p>
           
           
         
            <p class="fs-5"><i class="bi bi-geo-alt-fill"></i> <span>{{$listing->location}}</span></p>
           
        </div>
    </div>

</x-card>
    
