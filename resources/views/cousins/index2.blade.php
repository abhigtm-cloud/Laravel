<x-layouts>
    <h1>{{ $cousin["name"] }}</h1>
    <h1>{{ $cousin["Age"] }}</h1>    
    <h1>{{ $cousin["id"] }}</h1>    

@foreach ($cousin["experience"] as $user)
    <p>This is user {{ $user["title"] }}</p>
    <p>This is user {{ $user["company"] }}</p>
   
    <p>This is user {{ $user["description"] }}</p>
@endforeach
@foreach ($cousin["education"] as $user)
    <p>This is user {{ $user["degree"] }}</p>
@endforeach
</x-layouts>