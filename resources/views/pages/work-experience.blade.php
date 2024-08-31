@extends('layouts.app')
@section('content')
<!-- Replace the main content in the base layout with this -->

<h1 class="text-3xl font-bold mb-8">Work Experience</h1>

<div class="relative border-l border-gray-200 dark:border-gray-700">
    <!-- Job 1 -->
    <div class="mb-10 ml-4">
        <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -left-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
        <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">February 2016 - Present</time>
        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Senior Software Engineer at <a href="https://sourcetop.com" class="text-blue-500 hover:text-blue-600">Sourcetop Inc.</a></h3>
        <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">Led a team of developers in creating responsive web applications using React and Node.js.
            Implemented CI/CD pipelines and improved overall code quality.</p>
        <ul class="list-disc list-inside text-base font-normal text-gray-500 dark:text-gray-400">
            <li>Increased website performance by 40% through optimization techniques</li>
            <li>Mentored junior developers and conducted code reviews</li>
            <li>Collaborated with UX team to implement new design system</li>
        </ul>
    </div>

    <div class="mb-10 ml-4">
        <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -left-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
        <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">March 2015 - January 2016</time>
        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Web Developer at <a href="#" class="text-blue-500 hover:text-blue-600">Metatude Asia Ltd</a>
        </h3>
        <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">Developed and maintained multiple client websites using JavaScript, PHP, and MySQL. Worked in an
            Agile environment and participated in sprint planning and retrospectives.</p>
        <ul class="list-disc list-inside text-base font-normal text-gray-500 dark:text-gray-400">
            <li>Implemented responsive designs for mobile-first approach</li>
            <li>Integrated third-party APIs for enhanced functionality</li>
            <li>Optimized database queries, improving load times by 25%</li>
        </ul>
    </div>

    <div class="mb-10 ml-4">
        <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -left-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
        <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">June 2012 - February 2015</time>
        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Web Developer at <a href="https://sourcetop.com" class="text-blue-500 hover:text-blue-600">Sourcetop Inc.</a></h3>
        <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">Developed and maintained multiple client websites using JavaScript, PHP, and MySQL. Worked in an
            Agile environment and participated in sprint planning and retrospectives.</p>
        <ul class="list-disc list-inside text-base font-normal text-gray-500 dark:text-gray-400">
            <li>Implemented responsive designs for mobile-first approach</li>
            <li>Integrated third-party APIs for enhanced functionality</li>
            <li>Optimized database queries, improving load times by 25%</li>
        </ul>
    </div>


    <div class="mb-10 ml-4">
        <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -left-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
        <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">May 2010 - September 2021</time>
        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">UI developer at <a href="https://esoftarena.com" class="text-blue-500 hover:text-blue-600"> eSoftArena</a></h3>
        <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">Assisted in the development of a SaaS platform using Vue.js and Laravel. Gained experience in
            version control with Git and collaborative development practices.</p>
        <ul class="list-disc list-inside text-base font-normal text-gray-500 dark:text-gray-400">
            <li>Contributed to front-end development using Vue.js components</li>
            <li>Assisted in writing unit tests to ensure code quality</li>
            <li>Participated in code reviews and improved coding skills</li>
        </ul>
    </div>
</div>

<section class="mt-12">
    <h2 class="text-2xl font-bold mb-4">Skills & Technologies</h2>
    <div class="flex flex-wrap gap-2">
        <span class="bg-blue-100 text-blue-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">JavaScript</span>
        <span class="bg-blue-100 text-blue-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">React</span>
        <span class="bg-blue-100 text-blue-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">PHP</span>
        <span class="bg-blue-100 text-blue-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">MySQL</span>
        <span class="bg-blue-100 text-blue-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">Git</span>
        <span class="bg-blue-100 text-blue-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">Vue.js</span>
        <span class="bg-blue-100 text-blue-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">Laravel</span>
    </div>
</section>

@endsection
