@extends('layouts.site')

@section('title', $project['title'] . ' | Portfolio')

@section('content')
    <div class="min-h-screen bg-slate-50 text-slate-900">
        <header class="border-b border-slate-200 bg-white/80 backdrop-blur-xl">
            <nav class="mx-auto flex max-w-6xl items-center justify-between px-4 py-4 sm:px-6 lg:px-8">
                <a href="{{ route('home') }}" class="flex items-center gap-3" aria-label="Home">
                    <span class="flex h-10 w-10 items-center justify-center rounded-xl bg-slate-900 text-sm font-bold text-white">LG</span>
                    <span class="text-lg font-semibold tracking-tight text-slate-900">Louisse Gabrielle</span>
                </a>

                <a href="{{ route('home') }}" class="inline-flex items-center rounded-full border border-slate-200 bg-white px-4 py-2 text-sm font-semibold text-slate-900 shadow-sm transition hover:border-sky-300 hover:text-sky-700">
                    ← Back to portfolio
                </a>
            </nav>
        </header>

        <main class="mx-auto max-w-6xl px-4 py-12 sm:px-6 lg:px-8">
            <div class="mb-8 flex flex-wrap items-center justify-between gap-4">
                <div>
                    <p class="text-sm font-semibold uppercase tracking-[0.22em] text-sky-700">Project detail</p>
                    <h1 class="mt-2 text-4xl font-black tracking-tight text-slate-900 sm:text-5xl">{{ $project['title'] }}</h1>
                </div>
                <span class="rounded-full border border-amber-200 bg-amber-50 px-3 py-1 text-sm font-medium text-amber-700">{{ $project['status'] }}</span>
            </div>

            <div class="overflow-hidden rounded-[2rem] border border-slate-200 bg-slate-100 shadow-[0_20px_60px_rgba(15,23,42,0.06)]">
                <img src="{{ $project['hero'] }}" alt="{{ $project['title'] }} preview" class="h-[300px] w-full object-cover sm:h-[420px]">
            </div>

            <div class="mt-10 grid gap-8 lg:grid-cols-[1.1fr_0.9fr]">
                <section class="rounded-[2rem] border border-slate-200 bg-white p-6 shadow-[0_20px_60px_rgba(15,23,42,0.04)]">
                    <div class="mb-5 flex items-center justify-between gap-3">
                        <p class="text-sm font-semibold uppercase tracking-[0.22em] text-sky-700">Overview</p>
                        <span class="rounded-full bg-slate-100 px-2.5 py-1 text-xs font-semibold uppercase tracking-[0.12em] text-slate-700">{{ $project['category'] }}</span>
                    </div>

                    <p class="text-base leading-8 text-slate-600">{{ $project['summary'] }}</p>

                    <div class="mt-6 flex flex-wrap gap-2">
                        @foreach ($project['tags'] as $tag)
                            <span class="tag">{{ $tag }}</span>
                        @endforeach
                    </div>

                    <div class="mt-8">
                        <p class="text-lg font-semibold text-slate-900">My role</p>
                        <p class="mt-3 text-base leading-8 text-slate-600">{{ $project['role'] }}</p>
                    </div>
                </section>

                <aside class="rounded-[2rem] border border-slate-200 bg-slate-900 p-6 text-white shadow-[0_20px_60px_rgba(15,23,42,0.08)]">
                    <p class="text-sm font-semibold uppercase tracking-[0.22em] text-sky-300">Project details</p>

                    <div class="mt-6 space-y-5">
                        <div>
                            <p class="text-xs uppercase tracking-[0.2em] text-slate-400">Status</p>
                            <p class="mt-2 text-lg font-semibold text-white">{{ $project['status'] }}</p>
                        </div>
                        <div>
                            <p class="text-xs uppercase tracking-[0.2em] text-slate-400">Date</p>
                            <p class="mt-2 text-lg font-semibold text-white">{{ $project['date'] }}</p>
                        </div>
                        <div>
                            <p class="text-xs uppercase tracking-[0.2em] text-slate-400">Key responsibilities</p>
                            <ul class="mt-3 list-disc space-y-2 pl-5 text-base leading-7 text-slate-300">
                                @foreach ($project['responsibilities'] as $responsibility)
                                    <li>{{ $responsibility }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </aside>
            </div>
        </main>
    </div>
@endsection
