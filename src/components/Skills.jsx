import React from 'react';

const skills = [
  { icon: '</>', label: 'HTML5' },
  { icon: '🎨', label: 'CSS3' },
  { icon: 'JS', label: 'JavaScript' },
  { icon: 'TS', label: 'TypeScript' },
  { icon: '⚛️', label: 'React' },
  { icon: '▲', label: 'Next.js' },
  { icon: '🐘', label: 'PHP' },
  { icon: '🧰', label: 'Laravel' },
  { icon: '🧵', label: 'Tailwind' },
  { icon: '🗄️', label: 'MySQL' },
  { icon: '⬢', label: 'Node.js' },
  { icon: '📡', label: 'APIs' },
];

export default function Skills() {
  // Duplicate array for infinite seamless marquee
  const marqueeItems = [...skills, ...skills];

  return (
    <section id="skills" className="border-y border-slate-200 bg-white/70 py-10 backdrop-blur-sm">
      <div className="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
        <div className="mb-8 flex items-end justify-between gap-4">
          <div>
            <p className="text-sm font-semibold uppercase tracking-[0.22em] text-sky-700">
              Core stack
            </p>
            <h2 className="mt-2 text-3xl font-bold tracking-tight text-slate-900">
              Technologies I use to design and build practical digital systems.
            </h2>
          </div>
        </div>

        <div className="marquee-wrap overflow-hidden rounded-3xl border border-slate-200 bg-slate-50">
          <div className="marquee-track flex min-w-max gap-4 py-4 pl-4 text-sm font-medium text-slate-700">
            {marqueeItems.map((skill, index) => (
              <span key={index} className="skill-pill">
                <span aria-hidden="true" className="mr-2">
                  {skill.icon}
                </span>
                {skill.label}
              </span>
            ))}
          </div>
        </div>
      </div>
    </section>
  );
}
