<x-layout>
@include('.partials._hero')
@include('.partials._search')

<div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
@unless(count($listings) == 0)

 @foreach( $listings as $listing)
 <x-listing-card :listing="$listing"/>
 

 

     @endforeach

     @else
     <p> no listings found </p>

 @endunless
</div>
{{-- tdhahrelna 9adah 3ana nombre de page w nejmou nemchiw mel page 1 lel 2 ..--}}
<div class="mt-6 p-4"> 
    {{$listings->links()}}
</div>
</x-layout>