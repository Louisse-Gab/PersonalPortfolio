export const projects = [
  {
    slug: 'balikbayan',
    title: 'BALIKBAYAN',
    category: 'Capstone',
    status: 'Still ongoing',
    date: '2026 - Present',
    badgeColor: 'sky',
    summary:
      'Reintegration Decision Support and Beneficiary Monitoring Platform for OFWs, developed in partnership with OWWA.',
    tags: ['React', 'TypeScript', 'Tailwind', 'Supabase'],
    previewImage: '/Balikbayan_logo.png',
    hero: '/Balikbayan_Onboarding.png',
    role: 'I work as a Frontend Developer on a four-person capstone team building a reintegration decision support and beneficiary monitoring platform for OFWs in partnership with OWWA.',
    responsibilities: [
      'Develop and implement responsive frontend features and interfaces based on system requirements and user workflows.',
      'Translate complex processes into clean, accessible, and understandable UX flows.',
      'Collaborate with the team using GitHub for version control and coordinated development.',
    ],
  },
  {
    slug: 'pennywise',
    title: 'PENNYWISE',
    category: 'Web App',
    status: 'Completed',
    date: 'May 2026',
    badgeColor: 'emerald',
    summary:
      'A React-based budget tracker built for students and individuals to monitor income, expenses, and spending habits.',
    tags: ['React', 'MongoDB', 'Tailwind'],
    previewImage: '/pennywise_logo.png',
    hero: '/pennywise_proj.png',
    role: 'I worked as a Frontend Developer in a five-person team building a React app for managing budgeting, expenses, and personal financial summaries.',
    responsibilities: [
      'Implemented full CRUD transaction tracking with category-based expense recording.',
      'Built budget monitoring features that calculate remaining balances and spending insights.',
      'Designed the dashboard to support the needs of students and everyday budget planners.',
    ],
  },
  {
    slug: 'rmty-architectural-website-system',
    title: 'RMTY Architectural Website System',
    category: 'System',
    status: 'Completed',
    date: 'Jan - Jul 2026',
    badgeColor: 'violet',
    summary:
      'A Laravel-powered architectural website system that streamlined communication and project updates for the client.',
    tags: ['Laravel', 'Tailwind', 'MySQL'],
    previewImage: '/rmty_logo.jpg',
    hero: '/rmty_proj.png',
    role: 'I served as UI/UX Designer and Frontend Developer, while also contributing to backend development for the project.',
    responsibilities: [
      'Designed a responsive and functional website experience aligned with client communication needs.',
      'Built frontend and backend components using Laravel and the LAMP stack.',
      'Integrated SMS and Gmail APIs to streamline automated notifications and client communication workflows.',
    ],
  },
  {
    slug: '4-siblings-motorcycle-service',
    title: '4 Siblings Motorcycle Service',
    category: 'Operations System',
    status: 'Still ongoing',
    date: '2026 - Present',
    badgeColor: 'amber',
    summary:
      'An operations system design for a motorcycle repair shop, covering job orders, parts usage, and customer records.',
    tags: ['Full Stack', 'System Design', 'Operations', 'BI Dashboards', 'Database'],
    previewImage: 'https://placehold.co/800x600/0f172a/38bdf8?text=4+Siblings+Motorcycle+Service',
    hero: 'https://placehold.co/1200x800/0f172a/38bdf8?text=4+Siblings+Motorcycle+Service',
    role: 'I serve as a Full Stack Developer on the team, helping analyze operations workflows and contributing to system features.',
    responsibilities: [
      'Helped analyze business processes and translate findings into data requirements, KPIs, and system features.',
      'Contributed to the project charter, helping define scope, objectives, stakeholders, budget, and deliverables.',
    ],
  },
];


export const getProjectBySlug = (slug) => {
  return projects.find((p) => p.slug === slug);
};
