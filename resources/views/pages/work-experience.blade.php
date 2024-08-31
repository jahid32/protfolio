@extends('layouts.app')
@section('content')
<!-- Replace the main content in the base layout with this -->

<h1 class="text-3xl font-bold mb-8">Work Experience</h1>

<div class="relative border-l border-gray-200 dark:border-gray-700">
    <!-- Job 1 -->
    @foreach ($data['experiences'] as $experience)
    <div class="mb-10 ml-4">
        <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -left-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
        <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">{{ $experience['duration'] }}</time>
        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">{{ $experience['position'] }} at <a href="{{ $experience['web'] }}" class="text-blue-500 hover:text-blue-600">{{ $experience['company'] }}</a></h3>
        <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">{{ $experience['description'] }}</p>
        <ul class="list-disc list-inside text-base font-normal text-gray-500 dark:text-gray-400">
            @foreach ($experience['responsibilities'] as $responsibility)
                <li>{{ $responsibility }}</li>
            @endforeach
        </ul>
    </div>
    @endforeach
    
</div>

<section class="mt-12">
    <h2 class="text-2xl font-bold mb-4">Skills & Technologies</h2>
    <div class="flex flex-wrap gap-2">
        @foreach ($data['skills_technologies'] as $technology)
             <span class="bg-blue-100 text-blue-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">{{ $technology }}</span>
        @endforeach
    </div>
</section>

@endsection
