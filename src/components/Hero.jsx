import React from 'react';

export default function Hero() {
  return (
    <section className="mx-auto max-w-6xl px-4 pb-20 pt-16 sm:px-6 lg:px-8 lg:pb-24 lg:pt-20">
      <div className="grid items-center gap-10 lg:grid-cols-[1.2fr_0.8fr]">
        <div>
          <h1 className="max-w-xl text-4xl font-black tracking-[-0.06em] text-slate-900 sm:text-5xl lg:text-7xl">
            I build modern web experiences that are clean, useful, and human-centered.
          </h1>

          <p className="mt-6 max-w-xl text-justify text-lg leading-8 text-slate-600">
            I’m Louisse Gabrielle Lizen, a fourth-year BS Information Technology student specializing in Web and Mobile Development. I enjoy turning ideas into responsive interfaces and full-stack solutions with a strong focus on usability, design clarity, and real-world impact.
          </p>

          <div className="mt-8 flex flex-col gap-4 sm:flex-row">
            <a
              href="#projects"
              className="inline-flex items-center justify-center rounded-full bg-slate-900 px-6 py-3.5 text-sm font-semibold text-white shadow-xl shadow-slate-900/20 transition hover:-translate-y-0.5 hover:bg-sky-600"
            >
              View projects
            </a>

            <a
              href="#contact"
              className="inline-flex items-center justify-center rounded-full border border-slate-200 bg-white px-6 py-3.5 text-sm font-semibold text-slate-800 shadow-sm transition hover:-translate-y-0.5 hover:border-sky-300 hover:text-sky-700"
            >
              Contact me
            </a>

            <a
              href="/Louisse_Lizen_Resume.pdf"
              download
              className="inline-flex items-center justify-center rounded-full border border-sky-200 bg-sky-50 px-6 py-3.5 text-sm font-semibold text-sky-700 shadow-sm transition hover:-translate-y-0.5 hover:border-sky-300 hover:bg-sky-100"
            >
              Download Resume
            </a>
          </div>
        </div>

        {/* Hero Image */}
        <div className="relative">
          <div className="absolute -inset-10 rounded-[2rem] bg-gradient-to-br from-sky-200/50 via-transparent to-emerald-200/50 blur-3xl"></div>

          <div className="relative overflow-hidden rounded-[2rem] border border-slate-200 bg-white p-4 shadow-[0_25px_80px_rgba(15,23,42,0.12)]">
            <div className="rounded-[1.75rem] bg-gradient-to-br from-slate-100 via-white to-sky-50 p-4 text-slate-900">
              <div className="mx-auto flex h-[420px] w-full max-w-[360px] items-center justify-center overflow-hidden rounded-[2rem] border border-slate-200 bg-slate-200/80 p-3 shadow-inner shadow-slate-300/40">
                <img
                  src="/Lizen_pic.jpg"
                  alt="Louisse Gabrielle Lizen portrait"
                  className="h-full w-full rounded-[1.5rem] object-cover object-center shadow-[0_20px_45px_rgba(15,23,42,0.12)]"
                />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
}
