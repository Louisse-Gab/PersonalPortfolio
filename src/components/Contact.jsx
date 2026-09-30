import React, { useState } from 'react';

export default function Contact() {
  const [copiedEmail, setCopiedEmail] = useState(false);

  const handleCopyEmail = async () => {
    try {
      await navigator.clipboard.writeText('eljilizenn@gmail.com');
      setCopiedEmail(true);
      setTimeout(() => setCopiedEmail(false), 2500);
    } catch {
      setCopiedEmail(true);
      setTimeout(() => setCopiedEmail(false), 2500);
    }
  };

  return (
    <section id="contact" className="relative mx-auto max-w-6xl px-4 py-24 sm:px-6 lg:px-8">
      {/* Background ambient accents */}
      <div className="pointer-events-none absolute -left-20 top-1/3 h-96 w-96 rounded-full bg-sky-200/40 blur-3xl" />
      <div className="pointer-events-none absolute -right-20 bottom-10 h-96 w-96 rounded-full bg-emerald-200/30 blur-3xl" />

      {/* Main Container Card */}
      <div className="relative overflow-hidden rounded-[2.5rem] border border-slate-200/90 bg-white/90 p-7 shadow-[0_25px_70px_rgba(15,23,42,0.06)] backdrop-blur-xl sm:p-10 lg:p-12">
        {/* Section Header */}
        <div className="mb-10 max-w-3xl">
          <div className="inline-flex items-center gap-2.5 rounded-full border border-emerald-200/80 bg-emerald-50/80 px-3.5 py-1.5 text-xs font-semibold uppercase tracking-[0.14em] text-emerald-800 shadow-xs">
            <span className="relative flex h-2 w-2">
              <span className="absolute inline-flex h-full w-full animate-ping rounded-full bg-emerald-400 opacity-75"></span>
              <span className="relative inline-flex h-2 w-2 rounded-full bg-emerald-500"></span>
            </span>
            Available for Roles & Internships • Graduating 2027
          </div>

          <h2 className="mt-4 text-3xl font-black tracking-tight text-slate-900 sm:text-4xl lg:text-5xl">
            Let's build something thoughtful together.
          </h2>

          <p className="mt-4 text-justify text-base leading-8 text-slate-600 sm:text-lg">
            Whether you have an entry-level frontend role, an internship opportunity, a project collaboration in mind, or simply want to talk tech and design—I'd love to connect with you.
          </p>
        </div>

        {/* Full-Width Developer Profile Terminal Card */}
        <div className="relative overflow-hidden rounded-3xl border border-slate-800 bg-slate-900 p-6 text-white shadow-2xl shadow-slate-950/20 sm:p-8 lg:p-10">
          {/* Window Controls Dot Accent */}
          <div className="mb-8 flex items-center justify-between border-b border-white/10 pb-4">
            <div className="flex items-center gap-2">
              <span className="h-3 w-3 rounded-full bg-rose-500/80" />
              <span className="h-3 w-3 rounded-full bg-amber-500/80" />
              <span className="h-3 w-3 rounded-full bg-emerald-500/80" />
            </div>
            <span className="font-mono text-xs text-slate-400">developer_info.ts</span>
          </div>

          <div className="grid gap-8 lg:grid-cols-[1.1fr_0.9fr] lg:items-center">
            <div>
              <p className="text-xs font-semibold uppercase tracking-[0.2em] text-sky-400">
                Profile Status
              </p>
              <h3 className="mt-1.5 text-2xl font-bold tracking-tight text-white sm:text-3xl lg:text-4xl">
                Louisse Gabrielle Lizen
              </h3>
              <p className="mt-2 text-base font-medium text-slate-300">
                4th-Year BS Information Technology Student
              </p>
              <p className="text-sm text-slate-400">
                University of Santo Tomas • Specializing in Web & Mobile Development
              </p>
            </div>

            {/* Direct Info Pills */}
            <div className="space-y-3 font-mono text-xs sm:text-sm">
              {/* Email with 1-click Copy */}
              <div className="flex items-center justify-between rounded-xl border border-white/10 bg-white/5 p-3.5 transition hover:border-sky-500/40 hover:bg-white/[0.08]">
                <div className="flex items-center gap-2.5 truncate">
                  <span className="text-base">✉</span>
                  <span className="truncate font-sans font-medium text-slate-200">
                    eljilizenn@gmail.com
                  </span>
                </div>
                <button
                  type="button"
                  onClick={handleCopyEmail}
                  className="inline-flex shrink-0 items-center gap-1 rounded-lg bg-sky-500/20 px-2.5 py-1 font-sans text-xs font-semibold text-sky-300 transition hover:bg-sky-500/30"
                  title="Click to copy email address"
                >
                  {copiedEmail ? 'Copied! ✓' : 'Copy'}
                </button>
              </div>

              {/* Phone */}
              <div className="flex items-center gap-2.5 rounded-xl border border-white/10 bg-white/5 p-3.5">
                <span className="text-base">📱</span>
                <span className="font-sans font-medium text-slate-200">
                  +63 9508511195
                </span>
              </div>

              {/* Location */}
              <div className="flex items-center gap-2.5 rounded-xl border border-white/10 bg-white/5 p-3.5">
                <span className="text-base">📍</span>
                <span className="font-sans font-medium text-slate-200">
                  Sampaloc, Manila, PH (Open to Remote / Hybrid / On-site)
                </span>
              </div>
            </div>
          </div>

          {/* Quick links & action buttons footer */}
          <div className="mt-8 flex flex-wrap items-center gap-3 border-t border-white/10 pt-6">
            <a
              href="mailto:eljilizenn@gmail.com"
              className="inline-flex items-center gap-2 rounded-xl bg-sky-500 px-5 py-3 text-xs font-bold text-slate-950 shadow-lg shadow-sky-500/20 transition hover:-translate-y-0.5 hover:bg-sky-400 sm:text-sm"
            >
              <span>✉ Email Me Directly</span>
              <span aria-hidden="true">→</span>
            </a>

            <a
              href="https://www.linkedin.com/in/louisse-gabrielle-lizen-688938370"
              target="_blank"
              rel="noreferrer"
              className="inline-flex items-center gap-2 rounded-xl border border-white/15 bg-white/10 px-4 py-3 text-xs font-semibold text-white transition hover:-translate-y-0.5 hover:bg-sky-600 sm:text-sm"
            >
              <svg className="h-4 w-4" fill="currentColor" viewBox="0 0 24 24">
                <path d="M6.94 8.5A1.56 1.56 0 1 1 6.94 5.38a1.56 1.56 0 0 1 0 3.12ZM5.5 9.88h2.88V18H5.5V9.88Zm4.7 0h2.76v1.13h.04c.38-.72 1.32-1.48 2.72-1.48 2.9 0 3.43 1.9 3.43 4.38V18h-2.88v-10.2c0-1.36-.03-3.11-1.9-3.11-1.9 0-2.19 1.48-2.19 3V18h-2.88V9.88Z" />
              </svg>
              LinkedIn
            </a>

            <a
              href="https://github.com/Louisse-Gab"
              target="_blank"
              rel="noreferrer"
              className="inline-flex items-center gap-2 rounded-xl border border-white/15 bg-white/10 px-4 py-3 text-xs font-semibold text-white transition hover:-translate-y-0.5 hover:bg-white/20 sm:text-sm"
            >
              <svg className="h-4 w-4" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 2A10 10 0 0 0 8.23 21.38c.5.1.68-.22.68-.48v-1.7c-2.78.6-3.37-1.15-3.37-1.15-.46-1.15-1.12-1.46-1.12-1.46-.9-.62.07-.6.07-.6 1 .07 1.52 1.02 1.52 1.02.9 1.53 2.35 1.09 2.93.83.09-.64.35-1.1.63-1.35-2.22-.26-4.56-1.12-4.56-4.96 0-1.1.39-2 .99-2.7-.1-.26-.43-1.3.1-2.7 0 0 .83-.27 2.73 1.02A9.2 9.2 0 0 1 12 7.2c.84 0 1.68.11 2.47.33 1.9-1.29 2.73-1.02 2.73-1.02.53 1.4.2 2.44.1 2.7.61.7 1 1.6 1 2.7 0 3.87-2.35 4.69-4.58 4.95.37.32.7.96.7 1.94v2.88c0 .26.17.59.69.48A10 10 0 0 0 12 2Z" />
              </svg>
              GitHub
            </a>

            <a
              href="/Louisse_Lizen_Resume.pdf"
              download
              className="inline-flex items-center gap-2 rounded-xl border border-emerald-400/40 bg-emerald-500/15 px-4 py-3 text-xs font-semibold text-emerald-300 transition hover:-translate-y-0.5 hover:bg-emerald-500/25 sm:text-sm"
            >
              📄 Download Resume (PDF)
            </a>
          </div>
        </div>
      </div>
    </section>
  );
}
