@extends('layouts.app')
@section('content')
<section class="text-center py-20">
    <h1 class="text-4xl font-bold mb-4">Welcome to My Portfolio</h1>
    <p class="text-xl text-gray-600 mb-8">I'm a passionate developer creating amazing web experiences</p>
    <a href="/projects" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
        View My Projects
    </a>
</section>

<section class="py-12">
    <h2 class="text-2xl font-bold mb-6">About Me</h2>
    <p class="text-gray-700">
        I'm a skilled web developer with experience in front-end and back-end technologies.
        My passion lies in creating responsive, user-friendly websites and applications.
    </p>
</section>
<section class="py-12">
    <h2 class="text-2xl font-bold mb-6">Skills</h2>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
        <div class="bg-gray-100 p-4 rounded">HTML/CSS</div>
        <div class="bg-gray-100 p-4 rounded">JavaScript</div>
        <div class="bg-gray-100 p-4 rounded">React</div>
        <div class="bg-gray-100 p-4 rounded">PHP</div>
        <div class="bg-gray-100 p-4 rounded">WordPress</div>
        <div class="bg-gray-100 p-4 rounded">Drupal</div>
        <div class="bg-gray-100 p-4 rounded">Laravel</div>
    </div>
</section>
@endsection
