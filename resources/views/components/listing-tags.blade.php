@props(['tagsCsv'])

@php  
$tags = explode(',', $tagsCsv);

@endphp


    
    @foreach($tags as $tag)
    <span class="btn btn-dark mb-3 border rounded-pill border-0"> <a class="text-decoration-none text-white" href="/?tag={{$tag}}">{{$tag}}</a>
    </span>

@endforeach