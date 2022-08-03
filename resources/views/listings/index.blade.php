<x-layout>
@include('partials._hero')
@include('partials._search')
<div class="mx-4">
    <div class="row">
        
@unless(count($listings)==0)


@foreach($listings as $listing)

<x-listing-card :listing="$listing" />


@endforeach

@else
<p>No Listings Found</p>
@endunless
</div>
</div>

<div class="mt-6 p-4 text-decoration-none">
    {{$listings->links()}}
</div>

</x-layout>