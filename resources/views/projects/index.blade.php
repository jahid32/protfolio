@extends('layouts.app')
@section('content')
<h1 class="text-3xl font-bold mb-8">My Projects</h1>

<section class="mb-12">
    <h2 class="text-2xl font-bold mb-4">Featured Project</h2>
    @foreach($projects->take(1) as $project)
    <div class="bg-white shadow-md rounded-lg overflow-hidden">
        <img src="{{ $project['featureImage'] }}" alt="{{ $project['name'] }}" class="w-full h-64 object-cover">
        <div class="p-6">
            <h3 class="text-xl font-bold mb-2">{{ $project['name'] }}</h3>
            <p class="text-gray-700 mb-4"> {{ $project['shortDescription'] }} </p>
            <a href="/projects/{{ $project['id'] }}" class="text-blue-500 hover:text-blue-600">Learn More</a>
        </div>
    </div>
    @endforeach
</section>
<section>
    <h2 class="text-2xl font-bold mb-4">Other Projects</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($projects->skip(1) as $project)
         <div class="bg-white shadow-md rounded-lg overflow-hidden">
        <img src="{{ $project['image'] }}" alt="{{ $project['name'] }}" class="w-full h-64 object-cover">
        <div class="p-6">
            <h3 class="text-xl font-bold mb-2">{{ $project['name'] }}</h3>
            <p class="text-gray-700 mb-4"> {{ $project['shortDescription'] }} </p>
            <a href="/projects/{{ $project['id'] }}" class="text-blue-500 hover:text-blue-600">Learn More</a>
        </div>
    </div>
        @endforeach
     
    </div>
</section>
@endsection
