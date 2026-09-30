<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Portfolio website for a product designer and full-stack developer.">

        <title>{{ config('app.name', 'Portfolio') }}</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-stone-50 text-slate-900 antialiased selection:bg-sky-200 selection:text-slate-900">
        <div class="min-h-screen bg-[radial-gradient(circle_at_top,_rgba(96,165,250,0.18),_transparent_28%),radial-gradient(circle_at_right,_rgba(16,185,129,0.12),_transparent_22%),#f8fafc]">
            <header class="sticky top-0 z-50 border-b border-slate-200/80 bg-white/80 backdrop-blur-xl">
                <nav class="mx-auto flex max-w-6xl items-center justify-between px-4 py-4 sm:px-6 lg:px-8">
                    <a href="#top" class="flex items-center gap-3" aria-label="Home">
                        <span class="flex h-10 w-10 items-center justify-center rounded-xl bg-slate-900 text-sm font-bold text-white shadow-lg shadow-slate-900/15">JD</span>
                        <span class="text-lg font-semibold tracking-tight text-slate-900">Jordan Doe</span>
                    </a>

                    <div class="hidden items-center gap-8 text-sm font-medium text-slate-600 md:flex">
                        <a href="#about" class="transition hover:text-slate-900">About</a>
                        <a href="#projects" class="transition hover:text-slate-900">Projects</a>
                        <a href="#skills" class="transition hover:text-slate-900">Skills</a>
                        <a href="#contact" class="transition hover:text-slate-900">Contact</a>
                    </div>

                    <div class="flex items-center gap-3">
                        <a href="#contact" class="hidden rounded-full border border-slate-200 bg-white px-4 py-2 text-sm font-semibold text-slate-900 shadow-sm transition hover:-translate-y-0.5 hover:border-sky-300 hover:text-sky-700 sm:inline-flex">Resume</a>
                        <a href="#contact" class="inline-flex rounded-full bg-slate-900 px-4 py-2 text-sm font-semibold text-white shadow-lg shadow-slate-900/20 transition hover:-translate-y-0.5 hover:bg-sky-600">Get in touch</a>
                    </div>
                </nav>
            </header>

            <main id="top">
                <section class="mx-auto max-w-6xl px-4 pb-20 pt-16 sm:px-6 lg:px-8 lg:pb-24 lg:pt-20">
                    <div class="grid items-center gap-10 lg:grid-cols-[1.2fr_0.8fr]">
                        <div>
                            <div class="mb-5 inline-flex items-center gap-2 rounded-full border border-sky-200 bg-sky-50 px-3 py-1.5 text-sm font-medium text-sky-700">
                                <span class="h-2 w-2 rounded-full bg-emerald-500"></span>
                                Available for product and web work
                            </div>

                            <h1 class="max-w-xl text-4xl font-black tracking-[-0.06em] text-slate-900 sm:text-5xl lg:text-7xl">
                                I design and build digital products that feel effortless.
                            </h1>

                            <p class="mt-6 max-w-xl text-lg leading-8 text-slate-600">
                                I’m Jordan, a product designer and Laravel developer helping startups and growing teams turn complex ideas into intuitive, high-converting experiences.
                            </p>

                            <div class="mt-8 flex flex-col gap-4 sm:flex-row">
                                <a href="#projects" class="inline-flex items-center justify-center rounded-full bg-slate-900 px-6 py-3.5 text-sm font-semibold text-white shadow-xl shadow-slate-900/20 transition hover:-translate-y-0.5 hover:bg-sky-600">View work</a>
                                <a href="#contact" class="inline-flex items-center justify-center rounded-full border border-slate-200 bg-white px-6 py-3.5 text-sm font-semibold text-slate-800 shadow-sm transition hover:-translate-y-0.5 hover:border-sky-300 hover:text-sky-700">Contact me</a>
                            </div>

                            <div class="mt-10 flex flex-wrap items-center gap-6 text-sm text-slate-500">
                                <div>
                                    <span class="block text-2xl font-extrabold text-slate-900">6+</span>
                                    years experience
                                </div>
                                <div>
                                    <span class="block text-2xl font-extrabold text-slate-900">28</span>
                                    shipped products
                                </div>
                                <div>
                                    <span class="block text-2xl font-extrabold text-slate-900">12k+</span>
                                    users reached
                                </div>
                            </div>
                        </div>

                        <div class="relative">
                            <div class="absolute -inset-10 rounded-[2rem] bg-gradient-to-br from-sky-200/50 via-transparent to-emerald-200/50 blur-3xl"></div>

                            <div class="relative overflow-hidden rounded-[2rem] border border-slate-200 bg-white p-4 shadow-[0_25px_80px_rgba(15,23,42,0.12)]">
                                <div class="rounded-[1.5rem] bg-slate-950 p-5 text-white">
                                    <div class="flex items-center justify-between border-b border-white/10 pb-4">
                                        <div>
                                            <p class="text-xs uppercase tracking-[0.24em] text-slate-400">Current focus</p>
                                            <h2 class="mt-2 text-xl font-semibold">Product design + dev</h2>
                                        </div>
                                        <span class="rounded-full border border-emerald-400/30 bg-emerald-500/10 px-2.5 py-1 text-xs font-medium text-emerald-300">Open to work</span>
                                    </div>

                                    <div class="mt-6 space-y-4">
                                        <div class="rounded-2xl bg-white/5 p-4">
                                            <div class="flex items-center justify-between text-sm text-slate-300">
                                                <span>Revenue dashboard</span>
                                                <span>Q3 launch</span>
                                            </div>
                                            <div class="mt-4 h-2.5 w-full overflow-hidden rounded-full bg-white/10">
                                                <div class="h-full w-[78%] rounded-full bg-gradient-to-r from-sky-400 to-emerald-400"></div>
                                            </div>
                                        </div>

                                        <div class="grid grid-cols-2 gap-4">
                                            <div class="rounded-2xl bg-sky-500/10 p-4">
                                                <p class="text-sm text-sky-200">UX performance</p>
                                                <p class="mt-3 text-3xl font-bold text-white">+38%</p>
                                            </div>
                                            <div class="rounded-2xl bg-emerald-500/10 p-4">
                                                <p class="text-sm text-emerald-200">Conversion lift</p>
                                                <p class="mt-3 text-3xl font-bold text-white">+24%</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="skills" class="border-y border-slate-200 bg-white/70 py-10 backdrop-blur-sm">
                    <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
                        <div class="mb-8 flex items-end justify-between gap-4">
                            <div>
                                <p class="text-sm font-semibold uppercase tracking-[0.22em] text-sky-700">Core stack</p>
                                <h2 class="mt-2 text-3xl font-bold tracking-tight text-slate-900">Tools I use to build ideas into working products.</h2>
                            </div>
                        </div>

                        <div class="marquee-wrap overflow-hidden rounded-3xl border border-slate-200 bg-slate-50">
                            <div class="marquee-track flex min-w-max gap-4 py-4 pl-4 text-sm font-medium text-slate-700">
                                <span class="skill-pill">PHP</span>
                                <span class="skill-pill">Laravel</span>
                                <span class="skill-pill">Tailwind CSS</span>
                                <span class="skill-pill">JavaScript</span>
                                <span class="skill-pill">Vue</span>
                                <span class="skill-pill">Figma</span>
                                <span class="skill-pill">Shopify</span>
                                <span class="skill-pill">MySQL</span>
                                <span class="skill-pill">REST APIs</span>
                                <span class="skill-pill">SEO</span>
                                <span class="skill-pill">Design Systems</span>
                                <span class="skill-pill">UI/UX</span>
                                <span class="skill-pill">PHP</span>
                                <span class="skill-pill">Laravel</span>
                                <span class="skill-pill">Tailwind CSS</span>
                                <span class="skill-pill">JavaScript</span>
                                <span class="skill-pill">Vue</span>
                                <span class="skill-pill">Figma</span>
                                <span class="skill-pill">Shopify</span>
                                <span class="skill-pill">MySQL</span>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="projects" class="mx-auto max-w-6xl px-4 py-20 sm:px-6 lg:px-8">
                    <div class="mb-10 max-w-2xl">
                        <p class="text-sm font-semibold uppercase tracking-[0.22em] text-sky-700">Selected work</p>
                        <h2 class="mt-2 text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl">Featured projects built for clarity, speed, and measurable outcomes.</h2>
                    </div>

                    <div class="grid gap-6 lg:grid-cols-3">
                        <article class="project-card group rounded-[1.75rem] border border-slate-200 bg-white p-6 shadow-[0_10px_30px_rgba(15,23,42,0.04)] transition duration-300 hover:-translate-y-1 hover:shadow-[0_25px_50px_rgba(59,130,246,0.12)]">
                            <div class="mb-5 flex items-center justify-between">
                                <span class="rounded-full bg-sky-50 px-2.5 py-1 text-xs font-semibold uppercase tracking-[0.14em] text-sky-700">SaaS</span>
                                <span class="text-sm text-slate-400">2025</span>
                            </div>
                            <h3 class="text-2xl font-bold text-slate-900">Northstar Analytics</h3>
                            <p class="mt-4 text-justify text-base leading-7 text-slate-600">Designed and built a reporting dashboard that simplified KPI tracking for marketing teams and significantly reduced reporting time.</p>
                            <div class="mt-6 flex flex-wrap gap-2">
                                <span class="tag">Laravel</span>
                                <span class="tag">Tailwind</span>
                                <span class="tag">MySQL</span>
                            </div>
                            <a href="#" class="mt-8 inline-flex items-center gap-2 text-sm font-semibold text-slate-900 transition group-hover:text-sky-700">View case study <span aria-hidden="true">→</span></a>
                        </article>

                        <article class="project-card group rounded-[1.75rem] border border-slate-200 bg-white p-6 shadow-[0_10px_30px_rgba(15,23,42,0.04)] transition duration-300 hover:-translate-y-1 hover:shadow-[0_25px_50px_rgba(59,130,246,0.12)]">
                            <div class="mb-5 flex items-center justify-between">
                                <span class="rounded-full bg-emerald-50 px-2.5 py-1 text-xs font-semibold uppercase tracking-[0.14em] text-emerald-700">E-commerce</span>
                                <span class="text-sm text-slate-400">2024</span>
                            </div>
                            <h3 class="text-2xl font-bold text-slate-900">Moss & Co.</h3>
                            <p class="mt-4 text-justify text-base leading-7 text-slate-600">Created a premium storefront experience with a conversion-first UX strategy and inventory tooling tailored to the brand.</p>
                            <div class="mt-6 flex flex-wrap gap-2">
                                <span class="tag">Shopify</span>
                                <span class="tag">UX Design</span>
                                <span class="tag">A/B Testing</span>
                            </div>
                            <a href="#" class="mt-8 inline-flex items-center gap-2 text-sm font-semibold text-slate-900 transition group-hover:text-sky-700">Live demo <span aria-hidden="true">→</span></a>
                        </article>

                        <article class="project-card group rounded-[1.75rem] border border-slate-200 bg-white p-6 shadow-[0_10px_30px_rgba(15,23,42,0.04)] transition duration-300 hover:-translate-y-1 hover:shadow-[0_25px_50px_rgba(59,130,246,0.12)]">
                            <div class="mb-5 flex items-center justify-between">
                                <span class="rounded-full bg-violet-50 px-2.5 py-1 text-xs font-semibold uppercase tracking-[0.14em] text-violet-700">Marketplace</span>
                                <span class="text-sm text-slate-400">2023</span>
                            </div>
                            <h3 class="text-2xl font-bold text-slate-900">Crest Collective</h3>
                            <p class="mt-4 text-justify text-base leading-7 text-slate-600">Spearheaded a user-centered marketplace redesign that improved trust, engagement, and onboarding for a growing creator community.</p>
                            <div class="mt-6 flex flex-wrap gap-2">
                                <span class="tag">Vue</span>
                                <span class="tag">API</span>
                                <span class="tag">Figma</span>
                            </div>
                            <a href="#" class="mt-8 inline-flex items-center gap-2 text-sm font-semibold text-slate-900 transition group-hover:text-sky-700">See details <span aria-hidden="true">→</span></a>
                        </article>
                    </div>
                </section>

                <section id="about" class="bg-slate-900 py-20 text-white">
                    <div class="mx-auto grid max-w-6xl gap-12 px-4 sm:px-6 lg:grid-cols-[1.1fr_0.9fr] lg:px-8">
                        <div>
                            <p class="text-sm font-semibold uppercase tracking-[0.22em] text-sky-300">About me</p>
                            <h2 class="mt-3 text-3xl font-bold tracking-tight sm:text-4xl">I blend design thinking with product execution.</h2>

                            <div class="mt-7 space-y-5 text-lg leading-8 text-slate-300">
                                <p>My work sits at the intersection of product strategy, user experience, and technical implementation. I enjoy turning fuzzy business goals into clear, human-centered digital experiences.</p>
                                <p>Over the past six years, I’ve partnered with founders, marketing teams, and internal product squads to build interfaces that are not only attractive, but also intuitive, performant, and measurable.</p>
                            </div>

                            <div class="mt-8 grid gap-4 sm:grid-cols-3">
                                <div class="rounded-2xl border border-white/10 bg-white/5 p-4">
                                    <p class="text-3xl font-black text-white">6</p>
                                    <p class="mt-1 text-sm text-slate-300">Years experience</p>
                                </div>
                                <div class="rounded-2xl border border-white/10 bg-white/5 p-4">
                                    <p class="text-3xl font-black text-white">14</p>
                                    <p class="mt-1 text-sm text-slate-300">Teams collaborated</p>
                                </div>
                                <div class="rounded-2xl border border-white/10 bg-white/5 p-4">
                                    <p class="text-3xl font-black text-white">24/7</p>
                                    <p class="mt-1 text-sm text-slate-300">Curiosity level</p>
                                </div>
                            </div>
                        </div>

                        <div class="relative">
                            <div class="absolute inset-5 rounded-[2rem] bg-gradient-to-br from-sky-500/20 via-transparent to-emerald-400/20 blur-2xl"></div>
                            <div class="relative overflow-hidden rounded-[2rem] border border-white/10 bg-gradient-to-br from-slate-800 to-slate-900 p-6 shadow-[0_35px_80px_rgba(15,23,42,0.4)]">
                                <div class="flex items-center gap-4">
                                    <div class="flex h-16 w-16 items-center justify-center rounded-2xl bg-gradient-to-br from-sky-400 to-emerald-400 text-2xl font-black text-slate-900">JD</div>
                                    <div>
                                        <p class="text-sm text-slate-400">Based in</p>
                                        <p class="text-xl font-semibold text-white">New York, NY</p>
                                    </div>
                                </div>

                                <div class="mt-8 space-y-4">
                                    <div class="rounded-2xl border border-white/10 bg-white/5 p-4">
                                        <p class="text-xs uppercase tracking-[0.2em] text-slate-400">Current role</p>
                                        <p class="mt-2 text-lg font-semibold text-white">Senior Product Designer</p>
                                    </div>
                                    <div class="rounded-2xl border border-white/10 bg-white/5 p-4">
                                        <p class="text-xs uppercase tracking-[0.2em] text-slate-400">Focus</p>
                                        <p class="mt-2 text-lg font-semibold text-white">UX systems, onboarding, dashboards</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="contact" class="mx-auto max-w-6xl px-4 py-20 sm:px-6 lg:px-8">
                    <div class="grid gap-8 rounded-[2rem] border border-slate-200 bg-white p-6 shadow-[0_20px_60px_rgba(15,23,42,0.06)] lg:grid-cols-[1.1fr_0.9fr] lg:p-8">
                        <div>
                            <p class="text-sm font-semibold uppercase tracking-[0.22em] text-sky-700">Let’s talk</p>
                            <h2 class="mt-3 text-3xl font-bold tracking-tight text-slate-900">Need a polished, purposeful digital experience?</h2>
                            <p class="mt-4 max-w-xl text-justify text-lg leading-8 text-slate-600">I partner with founders and teams who want thoughtful design, efficient delivery, and a product experience that people actually enjoy using.</p>

                            <form class="mt-8 space-y-4">
                                <div class="grid gap-4 sm:grid-cols-2">
                                    <label class="block text-sm font-medium text-slate-700">
                                        Name
                                        <input type="text" placeholder="Your name" class="mt-2 w-full rounded-2xl border border-slate-200 bg-slate-50 px-4 py-3 text-slate-900 outline-none transition focus:border-sky-400 focus:bg-white focus:ring-4 focus:ring-sky-100">
                                    </label>
                                    <label class="block text-sm font-medium text-slate-700">
                                        Email
                                        <input type="email" placeholder="you@example.com" class="mt-2 w-full rounded-2xl border border-slate-200 bg-slate-50 px-4 py-3 text-slate-900 outline-none transition focus:border-sky-400 focus:bg-white focus:ring-4 focus:ring-sky-100">
                                    </label>
                                </div>
                                <label class="block text-sm font-medium text-slate-700">
                                    Message
                                    <textarea rows="5" placeholder="Tell me about your project" class="mt-2 w-full rounded-2xl border border-slate-200 bg-slate-50 px-4 py-3 text-slate-900 outline-none transition focus:border-sky-400 focus:bg-white focus:ring-4 focus:ring-sky-100"></textarea>
                                </label>
                                <button type="submit" class="inline-flex rounded-full bg-slate-900 px-5 py-3 text-sm font-semibold text-white shadow-lg shadow-slate-900/20 transition hover:-translate-y-0.5 hover:bg-sky-600">Send message</button>
                            </form>
                        </div>

                        <aside class="rounded-[1.75rem] bg-slate-900 p-6 text-white lg:p-8">
                            <p class="text-sm font-semibold uppercase tracking-[0.22em] text-sky-300">Connect</p>
                            <div class="mt-6 space-y-4">
                                <a href="https://www.linkedin.com" target="_blank" class="social-link">
                                    <span>LinkedIn</span>
                                    <span aria-hidden="true">→</span>
                                </a>
                                <a href="https://github.com" target="_blank" class="social-link">
                                    <span>GitHub</span>
                                    <span aria-hidden="true">→</span>
                                </a>
                                <a href="https://x.com" target="_blank" class="social-link">
                                    <span>Twitter / X</span>
                                    <span aria-hidden="true">→</span>
                                </a>
                                <a href="https://dribbble.com" target="_blank" class="social-link">
                                    <span>Dribbble</span>
                                    <span aria-hidden="true">→</span>
                                </a>
                            </div>

                            <div class="mt-8 rounded-2xl border border-white/10 bg-white/5 p-4">
                                <p class="text-sm text-slate-300">Email</p>
                                <a href="mailto:jordan@example.com" class="mt-2 block text-lg font-semibold text-white hover:text-sky-300">jordan@example.com</a>
                            </div>
                        </aside>
                    </div>
                </section>
            </main>

            <footer class="border-t border-slate-200 bg-white/70">
                <div class="mx-auto flex max-w-6xl flex-col items-center justify-center gap-4 px-4 py-6 text-center text-sm text-slate-500 sm:flex-row sm:px-6 lg:px-8">
                    <p>© 2026 Jordan Doe</p>
                    <p>Designed and developed with Laravel + Tailwind CSS.</p>
                </div>
            </footer>
        </div>
    </body>
</html>
