import React, { useEffect } from 'react';
import { useParams, Link } from 'react-router-dom';
import { getProjectBySlug } from '../data/projects';

export default function ProjectDetail() {
  const { slug } = useParams();
  const project = getProjectBySlug(slug);

  useEffect(() => {
    window.scrollTo(0, 0);
  }, [slug]);

  if (!project) {
    return (
      <div className="flex min-h-screen flex-col items-center justify-center bg-slate-50 px-4 text-center">
        <h1 className="text-4xl font-extrabold text-slate-900">Project Not Found</h1>
        <p className="mt-4 text-slate-600">The project you are looking for does not exist.</p>
        <Link
          to="/"
          className="mt-6 inline-flex items-center rounded-full bg-slate-900 px-6 py-3 text-sm font-semibold text-white shadow-lg transition hover:bg-sky-600"
        >
          ← Return to portfolio
        </Link>
      </div>
    );
  }

  return (
    <div className="min-h-screen bg-slate-50 text-slate-900">
      <header className="border-b border-slate-200 bg-white/80 backdrop-blur-xl">
        <nav className="mx-auto flex max-w-6xl items-center justify-between px-4 py-4 sm:px-6 lg:px-8">
          <Link to="/" className="flex items-center gap-3" aria-label="Home">
            <span className="flex h-10 w-10 items-center justify-center rounded-xl bg-slate-900 text-sm font-bold text-white">
              LG
            </span>
            <span className="text-lg font-semibold tracking-tight text-slate-900">
              Louisse Gabrielle
            </span>
          </Link>

          <Link
            to="/"
            className="inline-flex items-center rounded-full border border-slate-200 bg-white px-4 py-2 text-sm font-semibold text-slate-900 shadow-sm transition hover:border-sky-300 hover:text-sky-700"
          >
            ← Back to portfolio
          </Link>
        </nav>
      </header>

      <main className="mx-auto max-w-6xl px-4 py-12 sm:px-6 lg:px-8">
        <div className="mb-8 flex flex-wrap items-center justify-between gap-4">
          <div>
            <p className="text-sm font-semibold uppercase tracking-[0.22em] text-sky-700">
              Project detail
            </p>
            <h1 className="mt-2 text-4xl font-black tracking-tight text-slate-900 sm:text-5xl">
              {project.title}
            </h1>
          </div>
          <span className="rounded-full border border-amber-200 bg-amber-50 px-3 py-1 text-sm font-medium text-amber-700">
            {project.status}
          </span>
        </div>

        <div className="overflow-hidden rounded-[2rem] border border-slate-200 bg-slate-100 shadow-[0_20px_60px_rgba(15,23,42,0.06)]">
          <img
            src={project.hero}
            alt={`${project.title} preview`}
            className="h-[300px] w-full object-cover sm:h-[420px]"
          />
        </div>

        <div className="mt-10 grid gap-8 lg:grid-cols-[1.1fr_0.9fr]">
          <section className="rounded-[2rem] border border-slate-200 bg-white p-6 shadow-[0_20px_60px_rgba(15,23,42,0.04)] sm:p-8">
            <div className="mb-5 flex items-center justify-between gap-3">
              <p className="text-sm font-semibold uppercase tracking-[0.22em] text-sky-700">
                Overview
              </p>
              <span className="rounded-full bg-slate-100 px-2.5 py-1 text-xs font-semibold uppercase tracking-[0.12em] text-slate-700">
                {project.category}
              </span>
            </div>

            <p className="text-base leading-8 text-slate-600">
              {project.summary}
            </p>

            <div className="mt-6 flex flex-wrap gap-2">
              {project.tags.map((tag, i) => (
                <span key={i} className="tag">
                  {tag}
                </span>
              ))}
            </div>

            <div className="mt-8">
              <p className="text-lg font-semibold text-slate-900">My role</p>
              <p className="mt-3 text-base leading-8 text-slate-600">
                {project.role}
              </p>
            </div>
          </section>

          <aside className="rounded-[2rem] border border-slate-200 bg-slate-900 p-6 text-white shadow-[0_20px_60px_rgba(15,23,42,0.08)] sm:p-8">
            <p className="text-sm font-semibold uppercase tracking-[0.22em] text-sky-300">
              Project details
            </p>

            <div className="mt-6 space-y-5">
              <div>
                <p className="text-xs uppercase tracking-[0.2em] text-slate-400">
                  Status
                </p>
                <p className="mt-2 text-lg font-semibold text-white">
                  {project.status}
                </p>
              </div>
              <div>
                <p className="text-xs uppercase tracking-[0.2em] text-slate-400">
                  Date
                </p>
                <p className="mt-2 text-lg font-semibold text-white">
                  {project.date}
                </p>
              </div>
              <div>
                <p className="text-xs uppercase tracking-[0.2em] text-slate-400">
                  Key responsibilities & contributions
                </p>
                <ul className="mt-3 list-disc space-y-2.5 pl-5 text-base leading-7 text-slate-300">
                  {project.responsibilities.map((resp, i) => (
                    <li key={i}>{resp}</li>
                  ))}
                </ul>
              </div>
            </div>
          </aside>
        </div>
      </main>
    </div>
  );
}


