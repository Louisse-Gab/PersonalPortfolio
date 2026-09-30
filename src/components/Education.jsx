import React from 'react';

export default function Education() {
  return (
    <section id="education" className="bg-slate-900 py-20 text-white">
      <div className="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
        <p className="text-sm font-semibold uppercase tracking-[0.22em] text-sky-300">
          Education
        </p>

        <h2 className="mt-3 text-3xl font-bold tracking-tight text-white">
          University of Santo Tomas
        </h2>

        <div className="mt-8 grid gap-6 lg:grid-cols-[1.15fr_0.85fr]">
          <div className="rounded-[1.5rem] border border-white/10 bg-white/5 p-6">
            <p className="text-lg font-semibold text-white">
              Bachelor of Science in Information Technology
            </p>

            <p className="mt-2 text-slate-300">
              Major in Web and Mobile Development
            </p>

            <p className="mt-2 text-sm text-slate-400">
              Aug 2023 – Jun 2027
            </p>

            <div className="mt-5 text-sm text-slate-200">
              <p>
                Focused on building practical, user-centered technology solutions through frontend development, UI/UX thinking, and product-oriented learning.
              </p>
            </div>
          </div>

          <div className="rounded-[1.5rem] border border-white/10 bg-gradient-to-br from-sky-500/15 to-emerald-500/10 p-6">
            <p className="text-sm uppercase tracking-[0.2em] text-sky-200">
              Certifications
            </p>

            <ul className="mt-4 list-disc space-y-3 pl-5 text-sm text-slate-200">
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
  );
}
