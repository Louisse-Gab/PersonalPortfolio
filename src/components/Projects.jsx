import React from 'react';
import { Link } from 'react-router-dom';
import { projects } from '../data/projects';

export default function Projects() {
  const getBadgeClass = (category) => {
    switch (category) {
      case 'Capstone':
        return 'bg-sky-50 text-sky-700';
      case 'Web App':
        return 'bg-emerald-50 text-emerald-700';
      case 'System':
        return 'bg-violet-50 text-violet-700';
      case 'Operations System':
        return 'bg-amber-50 text-amber-700';
      default:
        return 'bg-slate-100 text-slate-700';
    }
  };

  return (
    <section id="projects" className="mx-auto max-w-6xl px-4 py-20 sm:px-6 lg:px-8">
      <div className="mb-10 max-w-2xl">
        <p className="text-sm font-semibold uppercase tracking-[0.22em] text-sky-700">
          Selected work
        </p>
        <h2 className="mt-2 text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl">
          Projects that reflect my frontend, UI/UX, and full-stack development growth.
        </h2>
      </div>

      <div className="grid gap-6 md:grid-cols-2">
        {projects.map((project) => (
          <article
            key={project.slug}
            className="project-card group flex h-full flex-col rounded-[1.75rem] border border-slate-200 bg-white p-5 shadow-[0_10px_30px_rgba(15,23,42,0.04)] transition duration-300 hover:-translate-y-1 hover:shadow-[0_25px_50px_rgba(59,130,246,0.12)]"
          >
            <div className="flex flex-1 flex-col">
              <Link
                to={`/projects/${project.slug}`}
                className="block h-52 overflow-hidden rounded-[1.5rem] border border-slate-200 bg-slate-100 p-0"
              >
                <img
                  src={project.previewImage}
                  alt={`${project.title} preview`}
                  className={`h-full w-full object-cover transition duration-300 ${
                    project.slug === 'pennywise'
                      ? 'group-hover:scale-[1.02]'
                      : 'group-hover:scale-105'
                  }`}
                />
              </Link>

              <div className="mt-5 flex items-center justify-between">
                <span
                  className={`rounded-full px-2.5 py-1 text-xs font-semibold uppercase tracking-[0.14em] ${getBadgeClass(
                    project.category
                  )}`}
                >
                  {project.category}
                </span>

                <span className="text-sm text-slate-400">{project.date}</span>
              </div>

              <h3 className="mt-4 text-2xl font-bold text-slate-900">
                {project.title}
              </h3>

              <p className="mt-4 flex-1 text-justify text-base leading-7 text-slate-600">
                {project.summary}
              </p>

              <div className="mt-6 flex flex-wrap gap-2">
                {project.tags.map((tag, i) => (
                  <span key={i} className="tag">
                    {tag}
                  </span>
                ))}
              </div>
            </div>

            <Link
              to={`/projects/${project.slug}`}
              className="mt-6 inline-flex w-full items-center justify-center gap-2 rounded-xl bg-slate-900 px-4 py-3 text-sm font-semibold text-white transition hover:bg-sky-600"
            >
              View Project
              <span aria-hidden="true">→</span>
            </Link>
          </article>
        ))}
      </div>
    </section>
  );
}
