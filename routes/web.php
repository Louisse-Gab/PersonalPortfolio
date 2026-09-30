<?php

use App\Http\Controllers\ContactMessageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('portfolio.index');
})->name('home');

Route::post('/contact', [ContactMessageController::class, 'store'])->name('contact.store');

Route::get('/projects/{slug}', function (string $slug) {
    $projects = [
        'balikbayan' => [
            'title' => 'BALIKBAYAN',
            'category' => 'Capstone',
            'status' => 'Still ongoing',
            'date' => '2026 - Present',
            'summary' => 'Reintegration Decision Support and Beneficiary Monitoring Platform for OFWs, developed in partnership with OWWA.',
            'tags' => ['React', 'TypeScript', 'Tailwind', 'Supabase'],
            'hero' => 'https://placehold.co/1200x800/0f172a/ffffff?text=BALIKBAYAN',
            'role' => 'I work as a Frontend Developer on a four-person capstone team building a reintegration decision support and beneficiary monitoring platform for OFWs in partnership with OWWA.',
            'responsibilities' => [
                'Develop and implement responsive frontend features and interfaces based on system requirements and user workflows.',
                'Translate complex processes into clean, accessible, and understandable UX flows.',
                'Collaborate with the team using GitHub for version control and coordinated development.',
            ],
        ],
        'pennywise' => [
            'title' => 'PENNYWISE',
            'category' => 'Web App',
            'status' => 'Completed',
            'date' => 'May 2026',
            'summary' => 'A React-based budget tracker built for students and individuals to monitor income, expenses, and spending habits.',
            'tags' => ['React', 'MongoDB', 'Tailwind'],
            'hero' => asset('pennywise_proj.png'),
            'role' => 'I worked as a Frontend Developer in a five-person team building a React app for managing budgeting, expenses, and personal financial summaries.',
            'responsibilities' => [
                'Implemented full CRUD transaction tracking with category-based expense recording.',
                'Built budget monitoring features that calculate remaining balances and spending insights.',
                'Designed the dashboard to support the needs of students and everyday budget planners.',
            ],
        ],
        'rmty-architectural-website-system' => [
            'title' => 'RMTY Architectural Website System',
            'category' => 'System',
            'status' => 'Completed',
            'date' => 'Jan - Jul 2026',
            'summary' => 'A Laravel-powered architectural website system that streamlined communication and project updates for the client.',
            'tags' => ['Laravel', 'Tailwind', 'MySQL'],
            'hero' => asset('rmty_proj.png'),
            'role' => 'I served as UI/UX Designer and Frontend Developer, while also contributing to backend development for the project.',
            'responsibilities' => [
                'Designed a responsive and functional website experience aligned with client communication needs.',
                'Built frontend and backend components using Laravel and the LAMP stack.',
                'Integrated SMS and Gmail APIs to streamline automated notifications and client communication workflows.',
            ],
        ],
    ];

    abort_if(!isset($projects[$slug]), 404);

    return view('projects.show', ['project' => $projects[$slug]]);
})->name('projects.show');
