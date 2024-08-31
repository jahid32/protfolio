@extends('layouts.app')
@section('content')

<div class="bg-white shadow-md rounded-lg overflow-hidden">
    <img src="{{ $project['featureImage'] }}" alt="{{ $project['name'] }}" class="w-full object-cover">
    <div class="p-6">
        <div class="flex items-center justify-between">
            <h3 class="text-xl font-bold mb-2">{{ $project['name'] }}</h3>
            <a href="/projects" class="text-blue-500 hover:text-blue-600">&larr; Back to projects</a>
        </div>
        <p class="text-gray-700 mb-4"> {{ $project['fullDescription'] }} </p>
    </div>
    <div class="p-6 bg-gray-100">
        <h3 class="text-xl font-bold mb-2">Achievements</h3>
        <ul class="list-disc list-inside">
            @foreach ($project['achievements'] as $achievement)
                <li>{{ $achievement }}</li>
            @endforeach
        </ul>
    </div>
    <section class="p-6">
        <h2 class="text-2xl font-bold mb-4"> Technologies</h2>
        <div class="flex flex-wrap gap-2">
            @foreach ($project['technologies'] as $technology)
                <span class="bg-blue-100 text-blue-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">{{ $technology }}</span>
            @endforeach
        </div>
    </section>
</div>
    
@endsection