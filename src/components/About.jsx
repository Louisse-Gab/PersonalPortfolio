import React from 'react';

export default function About() {
  return (
    <section id="about" className="bg-slate-900 py-20 text-white">
      <div className="mx-auto grid max-w-6xl gap-12 px-4 sm:px-6 lg:grid-cols-[1.1fr_0.9fr] lg:px-8">
        <div>
          <p className="text-sm font-semibold uppercase tracking-[0.22em] text-sky-300">
            About me
          </p>

          <h2 className="mt-3 text-3xl font-bold tracking-tight sm:text-4xl">
            I’m a developer who enjoys building thoughtful, user-centered digital experiences.
          </h2>

          <div className="mt-7 space-y-5 text-justify text-lg leading-8 text-slate-300">
            <p>
              As a fourth-year BS Information Technology student specializing in Web and Mobile Development, I’ve grown through hands-on projects that combine frontend development, UI/UX design, and practical problem-solving.
            </p>
            <p>
              I enjoy understanding how systems work end-to-end, from user flow and visual design to the technical implementation behind the interface. My goal is to keep learning, contributing, and improving as I build meaningful solutions.
            </p>
          </div>

          <div className="mt-8 grid gap-4 sm:grid-cols-3">
            <div className="rounded-2xl border border-white/10 bg-white/5 p-4">
              <p className="text-3xl font-black text-white">4</p>
              <p className="mt-1 text-sm text-slate-300">Years in IT</p>
            </div>

            <div className="rounded-2xl border border-white/10 bg-white/5 p-4">
              <p className="text-3xl font-black text-white">8+</p>
              <p className="mt-1 text-sm text-slate-300">Technologies</p>
            </div>

            <div className="rounded-2xl border border-white/10 bg-white/5 p-4">
              <p className="text-3xl font-black text-white">4</p>
              <p className="mt-1 text-sm text-slate-300">Major project roles</p>
            </div>
          </div>
        </div>

        <div className="relative">
          <div className="absolute inset-5 rounded-[2rem] bg-gradient-to-br from-sky-500/20 via-transparent to-emerald-400/20 blur-2xl"></div>

          <div className="relative overflow-hidden rounded-[2rem] border border-white/10 bg-gradient-to-br from-slate-800 to-slate-900 p-6 shadow-[0_35px_80px_rgba(15,23,42,0.4)]">
            <div className="flex items-center gap-4">
              <div className="flex h-16 w-16 items-center justify-center rounded-2xl bg-gradient-to-br from-sky-400 to-emerald-400 text-2xl font-black text-slate-900">
                LG
              </div>

              <div>
                <p className="text-sm text-slate-400">Based in</p>
                <p className="text-xl font-semibold text-white">
                  Manila, Philippines
                </p>
              </div>
            </div>

            <div className="mt-8 space-y-4">
              <div className="rounded-2xl border border-white/10 bg-white/5 p-4">
                <p className="text-xs uppercase tracking-[0.2em] text-slate-400">
                  Course:
                </p>
                <p className="mt-2 text-lg font-semibold text-white">
                  BS Information Technology
                </p>
              </div>

              <div className="rounded-2xl border border-white/10 bg-white/5 p-4">
                <p className="text-xs uppercase tracking-[0.2em] text-slate-400">
                  Specialization:
                </p>
                <p className="mt-2 text-lg font-semibold text-white">
                  Web & Mobile Development
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
}
