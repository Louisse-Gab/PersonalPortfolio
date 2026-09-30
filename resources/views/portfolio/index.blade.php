@extends('layouts.site')

@section('title', 'Louisse Gabrielle Lizen | Portfolio')

@section('content')
    <div class="min-h-screen bg-[radial-gradient(circle_at_top,_rgba(96,165,250,0.18),_transparent_28%),radial-gradient(circle_at_right,_rgba(16,185,129,0.12),_transparent_22%),#f8fafc]">

        {{-- ==================== NAVIGATION ==================== --}}
        <header class="sticky top-0 z-50 border-b border-slate-200/80 bg-white/80 backdrop-blur-xl">
            <nav class="mx-auto flex max-w-6xl items-center justify-between px-4 py-3 sm:px-6 lg:px-8">

                <a href="#top" class="flex items-center gap-3" aria-label="Home">
                    <span class="flex h-10 w-10 items-center justify-center rounded-xl bg-slate-900 text-sm font-bold text-white shadow-lg shadow-slate-900/15">
                        LG
                    </span>

                    <span class="text-lg font-semibold tracking-tight text-slate-900">
                        Louisse Gabrielle
                    </span>
                </a>

                <div class="hidden items-center gap-8 text-sm font-medium text-slate-600 md:flex">
                    <a href="#about" class="transition hover:text-slate-900">About</a>
                    <a href="#projects" class="transition hover:text-slate-900">Projects</a>
                    <a href="#education" class="transition hover:text-slate-900">Education</a>
                    <a href="#skills" class="transition hover:text-slate-900">Skills</a>
                    <a href="#contact" class="transition hover:text-slate-900">Contact</a>
                </div>

                <div class="flex items-center gap-3">

                    {{-- Social Links --}}
                    <div class="hidden items-center gap-2 sm:flex">

                        <a
                            href="https://www.linkedin.com/in/louisse-gabrielle-lizen-688938370"
                            target="_blank"
                            rel="noreferrer"
                            aria-label="LinkedIn"
                            class="inline-flex items-center justify-center text-slate-700 transition hover:text-sky-700"
                            style="width:34px; height:34px;"
                        >
                            <svg
                                aria-hidden="true"
                                viewBox="0 0 24 24"
                                fill="currentColor"
                                style="width:34px; height:34px; display:block;"
                            >
                                <path d="M6.94 8.5A1.56 1.56 0 1 1 6.94 5.38a1.56 1.56 0 0 1 0 3.12ZM5.5 9.88h2.88V18H5.5V9.88Zm4.7 0h2.76v1.13h.04c.38-.72 1.32-1.48 2.72-1.48 2.9 0 3.43 1.9 3.43 4.38V18h-2.88v-10.2c0-1.36-.03-3.11-1.9-3.11-1.9 0-2.19 1.48-2.19 3V18h-2.88V9.88Z"/>
                            </svg>
                        </a>

                        <a
                            href="https://github.com/Louisse-Gab"
                            target="_blank"
                            rel="noreferrer"
                            aria-label="GitHub"
                            class="inline-flex items-center justify-center text-slate-700 transition hover:text-slate-900"
                            style="width:34px; height:34px;"
                        >
                            <svg
                                aria-hidden="true"
                                viewBox="0 0 24 24"
                                fill="currentColor"
                                style="width:34px; height:34px; display:block;"
                            >
                                <path d="M12 2A10 10 0 0 0 8.23 21.38c.5.1.68-.22.68-.48v-1.7c-2.78.6-3.37-1.15-3.37-1.15-.46-1.15-1.12-1.46-1.12-1.46-.9-.62.07-.6.07-.6 1 .07 1.52 1.02 1.52 1.02.9 1.53 2.35 1.09 2.93.83.09-.64.35-1.1.63-1.35-2.22-.26-4.56-1.12-4.56-4.96 0-1.1.39-2 .99-2.7-.1-.26-.43-1.3.1-2.7 0 0 .83-.27 2.73 1.02A9.2 9.2 0 0 1 12 7.2c.84 0 1.68.11 2.47.33 1.9-1.29 2.73-1.02 2.73-1.02.53 1.4.2 2.44.1 2.7.61.7 1 1.6 1 2.7 0 3.87-2.35 4.69-4.58 4.95.37.32.7.96.7 1.94v2.88c0 .26.17.59.69.48A10 10 0 0 0 12 2Z"/>
                            </svg>
                        </a>

                    </div>

                    <a
                        href="mailto:eljilizenn@gmail.com"
                        class="hidden rounded-full border border-slate-200 bg-white px-4 py-2 text-sm font-semibold text-slate-900 shadow-sm transition hover:-translate-y-0.5 hover:border-sky-300 hover:text-sky-700 sm:inline-flex"
                    >
                        Email me
                    </a>

                    <a
                        href="#contact"
                        class="inline-flex rounded-full bg-slate-900 px-4 py-2 text-sm font-semibold text-white shadow-lg shadow-slate-900/20 transition hover:-translate-y-0.5 hover:bg-sky-600"
                    >
                        Get in touch
                    </a>

                </div>
            </nav>
        </header>


        {{-- ==================== MAIN ==================== --}}
        <main id="top">

            {{-- ==================== HERO ==================== --}}
            <section class="mx-auto max-w-6xl px-4 pb-20 pt-16 sm:px-6 lg:px-8 lg:pb-24 lg:pt-20">

                <div class="grid items-center gap-10 lg:grid-cols-[1.2fr_0.8fr]">

                    <div>

                        <h1 class="max-w-xl text-4xl font-black tracking-[-0.06em] text-slate-900 sm:text-5xl lg:text-7xl">
                            I build modern web experiences that are clean, useful, and human-centered.
                        </h1>

                        <p class="mt-6 max-w-xl text-justify text-lg leading-8 text-slate-600">
                            I’m Louisse Gabrielle Lizen, a fourth-year BS Information Technology student specializing in Web and Mobile Development. I enjoy turning ideas into responsive interfaces and full-stack solutions with a strong focus on usability, design clarity, and real-world impact.
                        </p>

                        <div class="mt-8 flex flex-col gap-4 sm:flex-row">

                            <a
                                href="#projects"
                                class="inline-flex items-center justify-center rounded-full bg-slate-900 px-6 py-3.5 text-sm font-semibold text-white shadow-xl shadow-slate-900/20 transition hover:-translate-y-0.5 hover:bg-sky-600"
                            >
                                View projects
                            </a>

                            <a
                                href="#contact"
                                class="inline-flex items-center justify-center rounded-full border border-slate-200 bg-white px-6 py-3.5 text-sm font-semibold text-slate-800 shadow-sm transition hover:-translate-y-0.5 hover:border-sky-300 hover:text-sky-700"
                            >
                                Contact me
                            </a>

                            <a
                                href="{{ asset('Louisse_Lizen_Resume.pdf') }}"
                                download
                                class="inline-flex items-center justify-center rounded-full border border-sky-200 bg-sky-50 px-6 py-3.5 text-sm font-semibold text-sky-700 shadow-sm transition hover:-translate-y-0.5 hover:border-sky-300 hover:bg-sky-100"
                            >
                                Download Resume
                            </a>

                        </div>

                    </div>


                    {{-- Hero Image --}}
                    <div class="relative">

                        <div class="absolute -inset-10 rounded-[2rem] bg-gradient-to-br from-sky-200/50 via-transparent to-emerald-200/50 blur-3xl"></div>

                        <div class="relative overflow-hidden rounded-[2rem] border border-slate-200 bg-white p-4 shadow-[0_25px_80px_rgba(15,23,42,0.12)]">

                            <div class="rounded-[1.75rem] bg-gradient-to-br from-slate-100 via-white to-sky-50 p-4 text-slate-900">

                                <div class="mx-auto flex h-[420px] w-full max-w-[360px] items-center justify-center overflow-hidden rounded-[2rem] border border-slate-200 bg-slate-200/80 p-3 shadow-inner shadow-slate-300/40">

                                    <img
                                        src="{{ asset('Lizen_pic.jpg') }}"
                                        alt="Louisse Gabrielle Lizen portrait"
                                        class="h-full w-full rounded-[1.5rem] object-cover object-center shadow-[0_20px_45px_rgba(15,23,42,0.12)]"
                                    >

                                </div>

                            </div>

                        </div>

                    </div>

                </div>
            </section>


            {{-- ==================== ABOUT ==================== --}}
            <section id="about" class="bg-slate-900 py-20 text-white">

                <div class="mx-auto grid max-w-6xl gap-12 px-4 sm:px-6 lg:grid-cols-[1.1fr_0.9fr] lg:px-8">

                    <div>

                        <p class="text-sm font-semibold uppercase tracking-[0.22em] text-sky-300">
                            About me
                        </p>

                        <h2 class="mt-3 text-3xl font-bold tracking-tight sm:text-4xl">
                            I’m a developer who enjoys building thoughtful, user-centered digital experiences.
                        </h2>

                        <div class="mt-7 space-y-5 text-justify text-lg leading-8 text-slate-300">

                            <p>
                                As a fourth-year BS Information Technology student specializing in Web and Mobile Development, I’ve grown through hands-on projects that combine frontend development, UI/UX design, and practical problem-solving.
                            </p>

                            <p>
                                I enjoy understanding how systems work end-to-end, from user flow and visual design to the technical implementation behind the interface. My goal is to keep learning, contributing, and improving as I build meaningful solutions.
                            </p>

                        </div>


                        <div class="mt-8 grid gap-4 sm:grid-cols-3">

                            <div class="rounded-2xl border border-white/10 bg-white/5 p-4">
                                <p class="text-3xl font-black text-white">4</p>
                                <p class="mt-1 text-sm text-slate-300">Years in IT</p>
                            </div>

                            <div class="rounded-2xl border border-white/10 bg-white/5 p-4">
                                <p class="text-3xl font-black text-white">8+</p>
                                <p class="mt-1 text-sm text-slate-300">Technologies</p>
                            </div>

                            <div class="rounded-2xl border border-white/10 bg-white/5 p-4">
                                <p class="text-3xl font-black text-white">3</p>
                                <p class="mt-1 text-sm text-slate-300">Major project roles</p>
                            </div>

                        </div>

                    </div>


                    <div class="relative">

                        <div class="absolute inset-5 rounded-[2rem] bg-gradient-to-br from-sky-500/20 via-transparent to-emerald-400/20 blur-2xl"></div>

                        <div class="relative overflow-hidden rounded-[2rem] border border-white/10 bg-gradient-to-br from-slate-800 to-slate-900 p-6 shadow-[0_35px_80px_rgba(15,23,42,0.4)]">

                            <div class="flex items-center gap-4">

                                <div class="flex h-16 w-16 items-center justify-center rounded-2xl bg-gradient-to-br from-sky-400 to-emerald-400 text-2xl font-black text-slate-900">
                                    LG
                                </div>

                                <div>
                                    <p class="text-sm text-slate-400">Based in</p>
                                    <p class="text-xl font-semibold text-white">
                                        Manila, Philippines
                                    </p>
                                </div>

                            </div>


                            <div class="mt-8 space-y-4">

                                <div class="rounded-2xl border border-white/10 bg-white/5 p-4">
                                    <p class="text-xs uppercase tracking-[0.2em] text-slate-400">
                                        Course:
                                    </p>

                                    <p class="mt-2 text-lg font-semibold text-white">
                                        BS Information Technology
                                    </p>
                                </div>

                                <div class="rounded-2xl border border-white/10 bg-white/5 p-4">
                                    <p class="text-xs uppercase tracking-[0.2em] text-slate-400">
                                        Specialization:
                                    </p>

                                    <p class="mt-2 text-lg font-semibold text-white">
                                        Web & Mobile Development
                                    </p>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>
            </section>


            {{-- ==================== SKILLS ==================== --}}
            <section id="skills" class="border-y border-slate-200 bg-white/70 py-10 backdrop-blur-sm">

                <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">

                    <div class="mb-8 flex items-end justify-between gap-4">

                        <div>

                            <p class="text-sm font-semibold uppercase tracking-[0.22em] text-sky-700">
                                Core stack
                            </p>

                            <h2 class="mt-2 text-3xl font-bold tracking-tight text-slate-900">
                                Technologies I use to design and build practical digital systems.
                            </h2>

                        </div>

                    </div>


                    <div class="marquee-wrap overflow-hidden rounded-3xl border border-slate-200 bg-slate-50">

                        <div class="marquee-track flex min-w-max gap-4 py-4 pl-4 text-sm font-medium text-slate-700">

                            <span class="skill-pill">
                                <span aria-hidden="true" class="mr-2">&lt;/&gt;</span>HTML5
                            </span>

                            <span class="skill-pill">
                                <span aria-hidden="true" class="mr-2">🎨</span>CSS3
                            </span>

                            <span class="skill-pill">
                                <span aria-hidden="true" class="mr-2">JS</span>JavaScript
                            </span>

                            <span class="skill-pill">
                                <span aria-hidden="true" class="mr-2">TS</span>TypeScript
                            </span>

                            <span class="skill-pill">
                                <span aria-hidden="true" class="mr-2">⚛️</span>React
                            </span>

                            <span class="skill-pill">
                                <span aria-hidden="true" class="mr-2">▲</span>Next.js
                            </span>

                            <span class="skill-pill">
                                <span aria-hidden="true" class="mr-2">🐘</span>PHP
                            </span>

                            <span class="skill-pill">
                                <span aria-hidden="true" class="mr-2">🧰</span>Laravel
                            </span>

                            <span class="skill-pill">
                                <span aria-hidden="true" class="mr-2">🧵</span>Tailwind
                            </span>

                            <span class="skill-pill">
                                <span aria-hidden="true" class="mr-2">🗄️</span>MySQL
                            </span>

                            <span class="skill-pill">
                                <span aria-hidden="true" class="mr-2">⬢</span>Node.js
                            </span>

                            <span class="skill-pill">
                                <span aria-hidden="true" class="mr-2">📡</span>APIs
                            </span>


                            {{-- Duplicate items for marquee animation --}}

                            <span class="skill-pill">
                                <span aria-hidden="true" class="mr-2">&lt;/&gt;</span>HTML5
                            </span>

                            <span class="skill-pill">
                                <span aria-hidden="true" class="mr-2">🎨</span>CSS3
                            </span>

                            <span class="skill-pill">
                                <span aria-hidden="true" class="mr-2">JS</span>JavaScript
                            </span>

                            <span class="skill-pill">
                                <span aria-hidden="true" class="mr-2">TS</span>TypeScript
                            </span>

                            <span class="skill-pill">
                                <span aria-hidden="true" class="mr-2">⚛️</span>React
                            </span>

                            <span class="skill-pill">
                                <span aria-hidden="true" class="mr-2">▲</span>Next.js
                            </span>

                            <span class="skill-pill">
                                <span aria-hidden="true" class="mr-2">🐘</span>PHP
                            </span>

                            <span class="skill-pill">
                                <span aria-hidden="true" class="mr-2">🧰</span>Laravel
                            </span>

                            <span class="skill-pill">
                                <span aria-hidden="true" class="mr-2">🧵</span>Tailwind
                            </span>

                            <span class="skill-pill">
                                <span aria-hidden="true" class="mr-2">🗄️</span>MySQL
                            </span>

                            <span class="skill-pill">
                                <span aria-hidden="true" class="mr-2">⬢</span>Node.js
                            </span>

                            <span class="skill-pill">
                                <span aria-hidden="true" class="mr-2">📡</span>APIs
                            </span>

                        </div>

                    </div>

                </div>
            </section>


            {{-- ==================== PROJECTS ==================== --}}
            <section id="projects" class="mx-auto max-w-6xl px-4 py-20 sm:px-6 lg:px-8">

                <div class="mb-10 max-w-2xl">

                    <p class="text-sm font-semibold uppercase tracking-[0.22em] text-sky-700">
                        Selected work
                    </p>

                    <h2 class="mt-2 text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl">
                        Projects that reflect my frontend, UI/UX, and full-stack development growth.
                    </h2>

                </div>


                <div class="grid gap-6 lg:grid-cols-3">

                    {{-- BALIKBAYAN --}}
                    <article class="project-card group flex h-full flex-col rounded-[1.75rem] border border-slate-200 bg-white p-5 shadow-[0_10px_30px_rgba(15,23,42,0.04)] transition duration-300 hover:-translate-y-1 hover:shadow-[0_25px_50px_rgba(59,130,246,0.12)]">

                        <div class="flex flex-1 flex-col">

                            <a
                                href="{{ route('projects.show', ['slug' => 'balikbayan']) }}"
                                class="block overflow-hidden rounded-2xl border border-slate-200 bg-slate-100"
                            >
                                <img
                                    src="https://placehold.co/800x600/0f172a/ffffff?text=BALIKBAYAN"
                                    alt="BALIKBAYAN project preview"
                                    class="h-52 w-full object-cover transition duration-300 group-hover:scale-105"
                                >
                            </a>

                            <div class="mt-5 flex items-center justify-between">

                                <span class="rounded-full bg-sky-50 px-2.5 py-1 text-xs font-semibold uppercase tracking-[0.14em] text-sky-700">
                                    Capstone
                                </span>

                                <span class="text-sm text-slate-400">
                                    2026 - Present
                                </span>

                            </div>

                            <h3 class="mt-4 text-2xl font-bold text-slate-900">
                                BALIKBAYAN
                            </h3>

                            <p class="mt-4 flex-1 text-justify text-base leading-7 text-slate-600">
                                Reintegration Decision Support and Beneficiary Monitoring Platform for OFWs, developed in partnership with OWWA.
                            </p>

                            <div class="mt-6 flex flex-wrap gap-2">
                                <span class="tag">React</span>
                                <span class="tag">TypeScript</span>
                                <span class="tag">Tailwind</span>
                                <span class="tag">Supabase</span>
                            </div>

                        </div>

                        <a
                            href="{{ route('projects.show', ['slug' => 'balikbayan']) }}"
                            class="mt-6 inline-flex w-full items-center justify-center gap-2 rounded-xl bg-slate-900 px-4 py-3 text-sm font-semibold text-white transition hover:bg-sky-600"
                        >
                            View Project
                            <span aria-hidden="true">→</span>
                        </a>

                    </article>


                    {{-- PENNYWISE --}}
                    <article class="project-card group flex h-full flex-col rounded-[1.75rem] border border-slate-200 bg-white p-5 shadow-[0_10px_30px_rgba(15,23,42,0.04)] transition duration-300 hover:-translate-y-1 hover:shadow-[0_25px_50px_rgba(59,130,246,0.12)]">

                        <div class="flex flex-1 flex-col">

                            <a
                                href="{{ route('projects.show', ['slug' => 'pennywise']) }}"
                                class="block h-52 overflow-hidden rounded-[1.5rem] border border-slate-200 bg-slate-100 p-0"
                            >
                                <img
                                    src="{{ asset('pennywise_logo.png') }}"
                                    alt="PENNYWISE logo"
                                    class="h-full w-full bg-slate-100 object-cover transition duration-300 group-hover:scale-[1.02]"
                                >
                            </a>

                            <div class="mt-5 flex items-center justify-between">

                                <span class="rounded-full bg-emerald-50 px-2.5 py-1 text-xs font-semibold uppercase tracking-[0.14em] text-emerald-700">
                                    Web App
                                </span>

                                <span class="text-sm text-slate-400">
                                    May 2026
                                </span>

                            </div>

                            <h3 class="mt-4 text-2xl font-bold text-slate-900">
                                PENNYWISE
                            </h3>

                            <p class="mt-4 flex-1 text-justify text-base leading-7 text-slate-600">
                                A React-based budget tracker built for students and individuals to monitor income, expenses, and spending habits.
                            </p>

                            <div class="mt-6 flex flex-wrap gap-2">
                                <span class="tag">React</span>
                                <span class="tag">MongoDB</span>
                                <span class="tag">Tailwind</span>
                            </div>

                        </div>

                        <a
                            href="{{ route('projects.show', ['slug' => 'pennywise']) }}"
                            class="mt-6 inline-flex w-full items-center justify-center gap-2 rounded-xl bg-slate-900 px-4 py-3 text-sm font-semibold text-white transition hover:bg-sky-600"
                        >
                            View Project
                            <span aria-hidden="true">→</span>
                        </a>

                    </article>


                    {{-- RMTY --}}
                    <article class="project-card group flex h-full flex-col rounded-[1.75rem] border border-slate-200 bg-white p-5 shadow-[0_10px_30px_rgba(15,23,42,0.04)] transition duration-300 hover:-translate-y-1 hover:shadow-[0_25px_50px_rgba(59,130,246,0.12)]">

                        <div class="flex flex-1 flex-col">

                            <a
                                href="{{ route('projects.show', ['slug' => 'rmty-architectural-website-system']) }}"
                                class="block h-52 overflow-hidden rounded-[1.5rem] border border-slate-200 bg-slate-100 p-0"
                            >
                                <img
                                    src="{{ asset('rmty_logo.jpg') }}"
                                    alt="RMTY logo"
                                    class="h-full w-full bg-slate-100 object-cover transition duration-300 group-hover:scale-105"
                                >
                            </a>

                            <div class="mt-5 flex items-center justify-between">

                                <span class="rounded-full bg-violet-50 px-2.5 py-1 text-xs font-semibold uppercase tracking-[0.14em] text-violet-700">
                                    System
                                </span>

                                <span class="text-sm text-slate-400">
                                    Jan - Jul 2026
                                </span>

                            </div>

                            <h3 class="mt-4 text-2xl font-bold text-slate-900">
                                RMTY Architectural Website System
                            </h3>

                            <p class="mt-4 flex-1 text-justify text-base leading-7 text-slate-600">
                                A Laravel-powered architectural website system that streamlined communication and project updates for the client.
                            </p>

                            <div class="mt-6 flex flex-wrap gap-2">
                                <span class="tag">Laravel</span>
                                <span class="tag">Tailwind</span>
                                <span class="tag">MySQL</span>
                            </div>

                        </div>

                        <a
                            href="{{ route('projects.show', ['slug' => 'rmty-architectural-website-system']) }}"
                            class="mt-6 inline-flex w-full items-center justify-center gap-2 rounded-xl bg-slate-900 px-4 py-3 text-sm font-semibold text-white transition hover:bg-sky-600"
                        >
                            View Project
                            <span aria-hidden="true">→</span>
                        </a>

                    </article>

                </div>
            </section>


            {{-- ==================== EDUCATION ==================== --}}
            <section id="education" class="bg-slate-900 py-20 text-white">

                <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">

                    <p class="text-sm font-semibold uppercase tracking-[0.22em] text-sky-300">
                        Education
                    </p>

                    <h2 class="mt-3 text-3xl font-bold tracking-tight text-white">
                        University of Santo Tomas
                    </h2>


                    <div class="mt-8 grid gap-6 lg:grid-cols-[1.15fr_0.85fr]">

                        <div class="rounded-[1.5rem] border border-white/10 bg-white/5 p-6">

                            <p class="text-lg font-semibold text-white">
                                Bachelor of Science in Information Technology
                            </p>

                            <p class="mt-2 text-slate-300">
                                Major in Web and Mobile Development
                            </p>

                            <p class="mt-2 text-sm text-slate-400">
                                Aug 2023 – Jun 2027
                            </p>

                            <div class="mt-5 text-sm text-slate-200">
                                <p>
                                    Focused on building practical, user-centered technology solutions through frontend development, UI/UX thinking, and product-oriented learning.
                                </p>
                            </div>

                        </div>


                        <div class="rounded-[1.5rem] border border-white/10 bg-gradient-to-br from-sky-500/15 to-emerald-500/10 p-6">

                            <p class="text-sm uppercase tracking-[0.2em] text-sky-200">
                                Certifications
                            </p>

                            <ul class="mt-4 list-disc space-y-3 pl-5 text-sm text-slate-200">

                                <li>
                                    CCNA: Enterprise Networking, Security, and Automation — Cisco Networking Academy (Jan 2026)
                                </li>

                                <li>
                                    CCNA: Introduction to Networks — Cisco Networking Academy (Feb 2025)
                                </li>

                                <li>
                                    IT Fundamentals+ (ITF+) — CompTIA (May 2024)
                                </li>

                            </ul>

                        </div>

                    </div>

                </div>
            </section>


            {{-- ==================== CONTACT ==================== --}}
            <section id="contact" class="mx-auto max-w-6xl px-4 py-20 sm:px-6 lg:px-8">

                <div class="rounded-[2rem] border border-slate-200 bg-white p-6 shadow-[0_20px_60px_rgba(15,23,42,0.06)] lg:p-8">

                    <div class="mb-8 max-w-3xl">

                        <p class="text-sm font-semibold uppercase tracking-[0.22em] text-sky-700">
                            Let’s connect
                        </p>

                        <h2 class="mt-3 text-3xl font-black tracking-[-0.04em] text-slate-900 sm:text-4xl">
                            I’m open to frontend, UI/UX, and web development opportunities.
                        </h2>

                        <p class="mt-4 text-justify text-lg leading-8 text-slate-600">
                            I enjoy building thoughtful digital experiences, collaborating with teams, and continuing to learn through meaningful projects and real-world product work.
                        </p>

                    </div>


                    <div class="grid gap-10 lg:grid-cols-[0.85fr_1.15fr] lg:items-start">

                        {{-- Contact Information --}}
                        <div class="lg:pr-8 lg:pt-2 lg:shadow-none">

                            <div class="grid gap-3 text-slate-700 sm:grid-cols-2">

                                <div class="flex items-center gap-3 rounded-2xl border border-slate-200 bg-slate-50 px-4 py-3">

                                    <span class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-slate-100 text-black">
                                        📍
                                    </span>

                                    <span class="font-medium">
                                        Sampaloc, Manila
                                    </span>

                                </div>


                                <div class="flex items-center gap-3 rounded-2xl border border-slate-200 bg-slate-50 px-4 py-3">

                                    <span class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-slate-100 text-black">
                                        ☎
                                    </span>

                                    <span class="font-medium text-slate-700">
                                        +63 9508511195
                                    </span>

                                </div>


                                <div class="flex items-center gap-3 rounded-2xl border border-slate-200 bg-slate-50 px-4 py-3 sm:col-span-2">

                                    <span class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-slate-100 text-black">
                                        ✉
                                    </span>

                                    <a
                                        href="mailto:eljilizenn@gmail.com"
                                        class="font-medium text-slate-700 transition hover:text-sky-700"
                                    >
                                        eljilizenn@gmail.com
                                    </a>

                                </div>

                            </div>

                        </div>


                        {{-- Contact Form --}}
                        <div class="flex items-center lg:border-l lg:border-slate-200 lg:pl-8">

                            <form
                                id="contact-form"
                                action="{{ route('contact.store') }}"
                                method="POST"
                                class="w-full rounded-[1.75rem] border border-slate-200 bg-slate-50 p-5 shadow-[0_18px_45px_rgba(15,23,42,0.04)] sm:p-6"
                            >

                                @csrf

                                <div class="mb-5">

                                    <p class="text-sm font-semibold uppercase tracking-[0.22em] text-sky-700">
                                        Email me
                                    </p>

                                    <h3 class="mt-2 text-2xl font-bold tracking-tight text-slate-900">
                                        Send a message
                                    </h3>

                                </div>


                                {{-- Validation Errors --}}
                                @if ($errors->any())

                                    <div class="mb-5 rounded-xl border border-red-200 bg-red-50 p-4 text-sm text-red-700">

                                        <p class="font-semibold">
                                            Please check the following:
                                        </p>

                                        <ul class="mt-2 list-disc space-y-1 pl-5">

                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach

                                        </ul>

                                    </div>

                                @endif


                                <div class="space-y-4">

                                    {{-- Name --}}
                                    <div>

                                        <label
                                            for="name"
                                            class="mb-2 block text-sm font-semibold text-slate-700"
                                        >
                                            Name
                                        </label>

                                        <input
                                            id="name"
                                            type="text"
                                            name="name"
                                            value="{{ old('name') }}"
                                            placeholder="Your name"
                                            required
                                            class="w-full rounded-xl border border-slate-200 bg-white px-4 py-3 text-slate-800 outline-none transition placeholder:text-slate-400 focus:border-sky-400 focus:ring-4 focus:ring-sky-100"
                                        >

                                    </div>


                                    {{-- Email --}}
                                    <div>

                                        <label
                                            for="email"
                                            class="mb-2 block text-sm font-semibold text-slate-700"
                                        >
                                            Email
                                        </label>

                                        <input
                                            id="email"
                                            type="email"
                                            name="email"
                                            value="{{ old('email') }}"
                                            placeholder="you@example.com"
                                            required
                                            class="w-full rounded-xl border border-slate-200 bg-white px-4 py-3 text-slate-800 outline-none transition placeholder:text-slate-400 focus:border-sky-400 focus:ring-4 focus:ring-sky-100"
                                        >

                                    </div>


                                    {{-- Message --}}
                                    <div>

                                        <label
                                            for="message"
                                            class="mb-2 block text-sm font-semibold text-slate-700"
                                        >
                                            Message
                                        </label>

                                        <textarea
                                            id="message"
                                            name="message"
                                            rows="5"
                                            placeholder="Write your message here..."
                                            required
                                            maxlength="2000"
                                            class="w-full rounded-xl border border-slate-200 bg-white px-4 py-3 text-slate-800 outline-none transition placeholder:text-slate-400 focus:border-sky-400 focus:ring-4 focus:ring-sky-100"
                                        >{{ old('message') }}</textarea>

                                    </div>


                                    {{-- Submit --}}
                                    <div class="flex justify-center pt-2">

                                        <button
                                            type="submit"
                                            class="inline-flex w-40 items-center justify-center rounded-xl bg-slate-900 px-5 py-3.5 text-sm font-semibold text-white shadow-lg shadow-slate-900/10 transition hover:bg-sky-600"
                                        >
                                            Submit
                                        </button>

                                    </div>

                                </div>

                            </form>

                        </div>

                    </div>

                </div>

            </section>

        </main>


        {{-- ==================== FOOTER ==================== --}}
        <footer class="border-t border-slate-200 bg-white/70">

            <div class="mx-auto flex max-w-6xl flex-col items-center justify-center gap-4 px-4 py-6 text-center text-sm text-slate-500 sm:flex-row sm:px-6 lg:px-8">

                <p>
                    © 2026 Louisse Gabrielle Lizen
                </p>

            </div>

        </footer>

{{-- ==================== SUCCESS POPUP ==================== --}}
@if (session('success'))
    <div
        id="contact-success-popup"
        class="fixed right-5 top-5 z-[9999] rounded-2xl border border-emerald-200 bg-white p-5 shadow-2xl"
        style="width: 380px;"
    >
        <div class="flex items-start gap-3">

            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-emerald-100 text-xl text-emerald-700">
                ✓
            </div>

            <div class="flex-1">
                <p class="font-bold text-slate-900">
                    Message Sent!
                </p>

                <p class="mt-1 text-sm text-slate-600">
                    {{ session('success') }}
                </p>
            </div>

            <button
                type="button"
                onclick="document.getElementById('contact-success-popup').remove()"
                class="text-xl text-slate-400 hover:text-slate-700"
            >
                ×
            </button>

        </div>
    </div>
@endif

</div>
@endsection