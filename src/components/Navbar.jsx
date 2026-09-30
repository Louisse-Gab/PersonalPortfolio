import React from 'react';
import { Link } from 'react-router-dom';

export default function Navbar() {
  return (
    <header className="sticky top-0 z-50 border-b border-slate-200/80 bg-white/80 backdrop-blur-xl">
      <nav className="mx-auto flex max-w-6xl items-center justify-between px-4 py-3 sm:px-6 lg:px-8">
        <Link to="/#top" className="flex items-center gap-3" aria-label="Home">
          <span className="flex h-10 w-10 items-center justify-center rounded-xl bg-slate-900 text-sm font-bold text-white shadow-lg shadow-slate-900/15">
            LG
          </span>
          <span className="text-lg font-semibold tracking-tight text-slate-900">
            Louisse Gabrielle
          </span>
        </Link>

        <div className="hidden items-center gap-8 text-sm font-medium text-slate-600 md:flex">
          <a href="#about" className="transition hover:text-slate-900">About</a>
          <a href="#projects" className="transition hover:text-slate-900">Projects</a>
          <a href="#education" className="transition hover:text-slate-900">Education</a>
          <a href="#skills" className="transition hover:text-slate-900">Skills</a>
          <a href="#contact" className="transition hover:text-slate-900">Contact</a>
        </div>

        <div className="flex items-center gap-3">
          {/* Social Links */}
          <div className="hidden items-center gap-2 sm:flex">
            <a
              href="https://www.linkedin.com/in/louisse-gabrielle-lizen-688938370"
              target="_blank"
              rel="noreferrer"
              aria-label="LinkedIn"
              className="inline-flex items-center justify-center text-slate-700 transition hover:text-sky-700"
              style={{ width: '34px', height: '34px' }}
            >
              <svg
                aria-hidden="true"
                viewBox="0 0 24 24"
                fill="currentColor"
                style={{ width: '34px', height: '34px', display: 'block' }}
              >
                <path d="M6.94 8.5A1.56 1.56 0 1 1 6.94 5.38a1.56 1.56 0 0 1 0 3.12ZM5.5 9.88h2.88V18H5.5V9.88Zm4.7 0h2.76v1.13h.04c.38-.72 1.32-1.48 2.72-1.48 2.9 0 3.43 1.9 3.43 4.38V18h-2.88v-10.2c0-1.36-.03-3.11-1.9-3.11-1.9 0-2.19 1.48-2.19 3V18h-2.88V9.88Z" />
              </svg>
            </a>

            <a
              href="https://github.com/Louisse-Gab"
              target="_blank"
              rel="noreferrer"
              aria-label="GitHub"
              className="inline-flex items-center justify-center text-slate-700 transition hover:text-slate-900"
              style={{ width: '34px', height: '34px' }}
            >
              <svg
                aria-hidden="true"
                viewBox="0 0 24 24"
                fill="currentColor"
                style={{ width: '34px', height: '34px', display: 'block' }}
              >
                <path d="M12 2A10 10 0 0 0 8.23 21.38c.5.1.68-.22.68-.48v-1.7c-2.78.6-3.37-1.15-3.37-1.15-.46-1.15-1.12-1.46-1.12-1.46-.9-.62.07-.6.07-.6 1 .07 1.52 1.02 1.52 1.02.9 1.53 2.35 1.09 2.93.83.09-.64.35-1.1.63-1.35-2.22-.26-4.56-1.12-4.56-4.96 0-1.1.39-2 .99-2.7-.1-.26-.43-1.3.1-2.7 0 0 .83-.27 2.73 1.02A9.2 9.2 0 0 1 12 7.2c.84 0 1.68.11 2.47.33 1.9-1.29 2.73-1.02 2.73-1.02.53 1.4.2 2.44.1 2.7.61.7 1 1.6 1 2.7 0 3.87-2.35 4.69-4.58 4.95.37.32.7.96.7 1.94v2.88c0 .26.17.59.69.48A10 10 0 0 0 12 2Z" />
              </svg>
            </a>
          </div>

          <a
            href="mailto:eljilizenn@gmail.com"
            className="hidden rounded-full border border-slate-200 bg-white px-4 py-2 text-sm font-semibold text-slate-900 shadow-sm transition hover:-translate-y-0.5 hover:border-sky-300 hover:text-sky-700 sm:inline-flex"
          >
            Email me
          </a>

          <a
            href="#contact"
            className="inline-flex rounded-full bg-slate-900 px-4 py-2 text-sm font-semibold text-white shadow-lg shadow-slate-900/20 transition hover:-translate-y-0.5 hover:bg-sky-600"
          >
            Get in touch
          </a>
        </div>
      </nav>
    </header>
  );
}
