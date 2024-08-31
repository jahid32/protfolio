@extends('layouts.app')
@section('content')
<h1 class="text-3xl font-bold mb-8">My Projects</h1>

<section class="mb-12">
    <h2 class="text-2xl font-bold mb-4">Featured Project</h2>
    <div class="bg-white shadow-md rounded-lg overflow-hidden">
        <img src="/api/placeholder/800/400" alt="Featured Project" class="w-full h-64 object-cover">
        <div class="p-6">
            <h3 class="text-xl font-bold mb-2">Project Name</h3>
            <p class="text-gray-700 mb-4">A brief description of the featured project and its key features.</p>
            <a href="/projects/featured" class="text-blue-500 hover:text-blue-600">Learn More</a>
        </div>
    </div>
</section>
<section>
    <h2 class="text-2xl font-bold mb-4">Other Projects</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <img src="/api/placeholder/400/300" alt="Project 1" class="w-full h-48 object-cover">
            <div class="p-4">
                <h3 class="text-lg font-bold mb-2">Project 1</h3>
                <p class="text-gray-700 mb-2">Brief description of Project 1.</p>
                <a href="/projects/1" class="text-blue-500 hover:text-blue-600">Learn More</a>
            </div>
        </div>
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <img src="/api/placeholder/400/300" alt="Project 2" class="w-full h-48 object-cover">
            <div class="p-4">
                <h3 class="text-lg font-bold mb-2">Project 2</h3>
                <p class="text-gray-700 mb-2">Brief description of Project 2.</p>
                <a href="/projects/2" class="text-blue-500 hover:text-blue-600">Learn More</a>
            </div>
        </div>
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <img src="/api/placeholder/400/300" alt="Project 3" class="w-full h-48 object-cover">
            <div class="p-4">
                <h3 class="text-lg font-bold mb-2">Project 3</h3>
                <p class="text-gray-700 mb-2">Brief description of Project 3.</p>
                <a href="/projects/3" class="text-blue-500 hover:text-blue-600">Learn More</a>
            </div>
        </div>
    </div>
</section>
@endsection
