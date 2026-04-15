/**
 * Portfolio copy — Indonesian (id) & English (en).
 * Edit strings here; index.html wires labels via data-* hooks.
 */
window.PORTFOLIO_I18N = {
  meta: {
    title: {
      id: "Muhammad Hasbi Habibi | Web Developer",
      en: "Muhammad Hasbi Habibi | Web Developer",
    },
    description: {
      id: "Web developer Yogyakarta — Laravel, Vue.js & WordPress. Company profile, dashboard & laporan; filter data, sorting, API, debugging.",
      en: "Web developer in Yogyakarta — Laravel, Vue.js & WordPress. Company profiles, dashboards & reporting; filtering, sorting, APIs, debugging.",
    },
  },
  ui: {
    nav_bio: { id: "Bio", en: "Bio" },
    nav_projects: { id: "Project", en: "Projects" },
    nav_career: { id: "Karier", en: "Career" },
    lang_switch: { id: "Bahasa", en: "Language" },
    lang_id: { id: "ID", en: "ID" },
    lang_en: { id: "EN", en: "EN" },
    theme_dark: { id: "Mode gelap", en: "Dark mode" },
    theme_light: { id: "Mode terang", en: "Light mode" },
    contact_section: { id: "Kontak", en: "Contact" },
    skills_heading: { id: "Skill", en: "Skills" },
    projects_heading: { id: "Project & Portofolio", en: "Projects & portfolio" },
    projects_subtitle: {
      id: "Berikut adalah beberapa project yang pernah saya kerjakan.",
      en: "A selection of projects I have worked on.",
    },
    project_click_hint: { id: "Klik untuk detail", en: "Click for details" },
    exp_section_title: { id: "Pengalaman & Pendidikan", en: "Experience & education" },
    exp_section_subtitle: {
      id: "Berikut adalah pengalaman karir professional dan pendidikan formal saya.",
      en: "Professional experience and formal education.",
    },
    exp_column: { id: "Pengalaman", en: "Experience" },
    edu_column: { id: "Pendidikan", en: "Education" },
    footer_contact_nav: { id: "Kontak", en: "Contact" },
    modal_close: { id: "Tutup detail project", en: "Close project details" },
  },
  bio: {
    greeting: { id: "Halo, perkenalkan saya", en: "Hi, I'm" },
    introHtml: {
      id: 'Seorang Web Developer berpengalaman dalam pengembangan, mendesain, dan pemeliharaan website interaktif. Biasa membangun website company profile dan website dashboard dinamis, laporan yang kompleks dengan teknologi terbaru seperti <strong class="font-medium text-stone-700 dark:text-stone-300">Laravel</strong>, <strong class="font-medium text-stone-700 dark:text-stone-300">Vue.js</strong>, <strong class="font-medium text-stone-700 dark:text-stone-300">WordPress</strong>, dll. Ahli dalam filtering data, sorting, API Integration, dan tracing &amp; solving bug. Kolaborasi untuk membuat project, kontak aja langsung hehe.',
      en: 'I am a Web Developer with experience building, designing, and maintaining interactive websites. I often ship company profile sites and dynamic dashboards with complex reporting using modern stacks such as <strong class="font-medium text-stone-700 dark:text-stone-300">Laravel</strong>, <strong class="font-medium text-stone-700 dark:text-stone-300">Vue.js</strong>, and <strong class="font-medium text-stone-700 dark:text-stone-300">WordPress</strong>. I am comfortable with data filtering, sorting, API integration, and tracing &amp; fixing bugs. If you want to collaborate on a project, feel free to reach out.',
    },
  },
  projects: {
    items: [
      {
        title: { id: "Tubestream", en: "Tubestream" },
        imageAlt: {
          id: "Pratinjau aplikasi Tubestream",
          en: "Tubestream app preview",
        },
        descriptionHtml: {
          id: '<p class="text-stone-600 dark:text-stone-400 text-sm leading-relaxed"><strong class="font-medium text-stone-700 dark:text-stone-300">Tubestream</strong> adalah aplikasi berbasis <strong class="font-medium text-stone-700 dark:text-stone-300">website dan Android</strong> dengan fitur yang kompleks. Sebagai developer saya ikut <strong class="font-medium text-stone-700 dark:text-stone-300">memelihara dan mengembangkan</strong> fitur: <strong class="font-medium text-stone-700 dark:text-stone-300">pencarian (search)</strong>, <strong class="font-medium text-stone-700 dark:text-stone-300">filter data ganda</strong>, <strong class="font-medium text-stone-700 dark:text-stone-300">sorting multi-kriteria</strong>, penambahan fitur baru, <strong class="font-medium text-stone-700 dark:text-stone-300">analisis &amp; perbaikan bug</strong>, serta <strong class="font-medium text-stone-700 dark:text-stone-300">deployment</strong> hingga lingkungan <strong class="font-medium text-stone-700 dark:text-stone-300">staging</strong>.</p>',
          en: '<p class="text-stone-600 dark:text-stone-400 text-sm leading-relaxed"><strong class="font-medium text-stone-700 dark:text-stone-300">Tubestream</strong> is a <strong class="font-medium text-stone-700 dark:text-stone-300">web and Android</strong> product with complex features. As a developer I helped <strong class="font-medium text-stone-700 dark:text-stone-300">maintain and extend</strong> capabilities such as <strong class="font-medium text-stone-700 dark:text-stone-300">search</strong>, <strong class="font-medium text-stone-700 dark:text-stone-300">multi-filtering</strong>, <strong class="font-medium text-stone-700 dark:text-stone-300">multi-criteria sorting</strong>, new feature work, <strong class="font-medium text-stone-700 dark:text-stone-300">bug analysis &amp; fixes</strong>, and <strong class="font-medium text-stone-700 dark:text-stone-300">deployments</strong> through <strong class="font-medium text-stone-700 dark:text-stone-300">staging</strong>.</p>',
        },
      },
      {
        title: { id: "PesanLokal", en: "PesanLokal" },
        imageAlt: {
          id: "Pratinjau dashboard aplikasi PesanLokal",
          en: "PesanLokal dashboard preview",
        },
        descriptionHtml: {
          id: '<p class="text-stone-600 dark:text-stone-400 text-sm leading-relaxed">Aplikasi <strong class="font-medium text-stone-700 dark:text-stone-300">PesanLokal</strong>: saya mengerjakan bagian <strong class="font-medium text-stone-700 dark:text-stone-300">dashboard</strong> untuk aplikasi Android yang diakses melalui website. Di dashboard tersedia laporan <strong class="font-medium text-stone-700 dark:text-stone-300">order</strong>, <strong class="font-medium text-stone-700 dark:text-stone-300">penjualan (sales)</strong>, <strong class="font-medium text-stone-700 dark:text-stone-300">pelanggan (customer)</strong>, dan <strong class="font-medium text-stone-700 dark:text-stone-300">produk</strong> dengan filter rentang waktu yang fleksibel, serta fitur <strong class="font-medium text-stone-700 dark:text-stone-300">rekap penjualan</strong> dengan berbagai periode waktu.</p>',
          en: '<p class="text-stone-600 dark:text-stone-400 text-sm leading-relaxed">For <strong class="font-medium text-stone-700 dark:text-stone-300">PesanLokal</strong> I built the <strong class="font-medium text-stone-700 dark:text-stone-300">dashboard</strong> used from the web for the Android app. It includes reporting for <strong class="font-medium text-stone-700 dark:text-stone-300">orders</strong>, <strong class="font-medium text-stone-700 dark:text-stone-300">sales</strong>, <strong class="font-medium text-stone-700 dark:text-stone-300">customers</strong>, and <strong class="font-medium text-stone-700 dark:text-stone-300">products</strong> with flexible date-range filters, plus <strong class="font-medium text-stone-700 dark:text-stone-300">sales summaries</strong> across multiple time periods.</p>',
        },
      },
      {
        title: {
          id: "Company profile BMT PAS · bmtpas.com",
          en: "Company profile BMT PAS · bmtpas.com",
        },
        imageAlt: {
          id: "Pratinjau website company profile BMT PAS (bmtpas.com)",
          en: "BMT PAS company profile website preview (bmtpas.com)",
        },
        descriptionHtml: {
          id: '<p class="text-stone-600 dark:text-stone-400 text-sm leading-relaxed">Website company profile yang awalnya dibangun dengan PHP native; karena kebutuhan klien untuk mengelola postingan dan konten, solusi dipindahkan ke WordPress. Di dalamnya tersedia <strong class="font-medium text-stone-700 dark:text-stone-300">kalkulator zakat</strong> dan <strong class="font-medium text-stone-700 dark:text-stone-300">simulasi perhitungan pembiayaan</strong>.</p>',
          en: '<p class="text-stone-600 dark:text-stone-400 text-sm leading-relaxed">The site started as native PHP; the client needed to manage posts and content, so it was moved to WordPress. It includes a <strong class="font-medium text-stone-700 dark:text-stone-300">zakat calculator</strong> and <strong class="font-medium text-stone-700 dark:text-stone-300">financing simulation</strong>.</p>',
        },
      },
      {
        title: {
          id: "Company Profile SMK Muhammadiyah Pakem · smkmuhpakem.sch.id",
          en: "Company profile SMK Muhammadiyah Pakem · smkmuhpakem.sch.id",
        },
        imageAlt: {
          id: "Pratinjau website company profile SMK Muhammadiyah Pakem (smkmuhpakem.sch.id)",
          en: "SMK Muhammadiyah Pakem company profile preview (smkmuhpakem.sch.id)",
        },
        descriptionHtml: {
          id: '<p class="text-stone-600 dark:text-stone-400 text-sm leading-relaxed">Website company profile berbasis WordPress dengan fitur halaman profil, berita, galeri, bursa kerja, alumni, serta chat WhatsApp untuk SPMB.</p>',
          en: '<p class="text-stone-600 dark:text-stone-400 text-sm leading-relaxed">A WordPress company profile with profile pages, news, gallery, job board, alumni section, and WhatsApp chat for new student admissions (SPMB).</p>',
        },
      },
      {
        title: {
          id: "Company profile Ibu Mengaji · ibumengaji.com",
          en: "Company profile Ibu Mengaji · ibumengaji.com",
        },
        imageAlt: {
          id: "Pratinjau website company profile Ibu Mengaji (ibumengaji.com)",
          en: "Ibu Mengaji company profile preview (ibumengaji.com)",
        },
        descriptionHtml: {
          id: '<p class="text-stone-600 dark:text-stone-400 text-sm leading-relaxed">Website company profile berbasis WordPress dengan fitur postingan, halaman produk, halaman profil, dan galeri. Tersedia <strong class="font-medium text-stone-700 dark:text-stone-300">kalkulator simulasi zakat</strong>. Sebelumnya memiliki fitur donasi yang sudah tidak dipakai lagi.</p>',
          en: '<p class="text-stone-600 dark:text-stone-400 text-sm leading-relaxed">A WordPress company profile with posts, product pages, profile pages, and a gallery. Includes a <strong class="font-medium text-stone-700 dark:text-stone-300">zakat simulation calculator</strong>. A donation feature existed previously but is no longer used.</p>',
        },
      },
      {
        title: {
          id: "Company profile SD Muhammadiyah Sapen · sdmuhsapen-yog.sch.id",
          en: "Company profile SD Muhammadiyah Sapen · sdmuhsapen-yog.sch.id",
        },
        imageAlt: {
          id: "Pratinjau website company profile SD Muhammadiyah Sapen Yogyakarta (sdmuhsapen-yog.sch.id)",
          en: "SD Muhammadiyah Sapen Yogyakarta school site preview (sdmuhsapen-yog.sch.id)",
        },
        descriptionHtml: {
          id: '<p class="text-stone-600 dark:text-stone-400 text-sm leading-relaxed">Website company profile berbasis <strong class="font-medium text-stone-700 dark:text-stone-300">Laravel</strong> dengan halaman profil sekolah (tentang kami, sambutan kepala sekolah, struktur, profil guru &amp; karyawan, dan informasi terkait), halaman fasilitas, program sekolah, serta berita. Dilengkapi alur <strong class="font-medium text-stone-700 dark:text-stone-300">PPDB via chat WhatsApp</strong> dan dukungan <strong class="font-medium text-stone-700 dark:text-stone-300">dua bahasa</strong> (Indonesia &amp; Inggris). Pada proyek ini kontribusi utama saya ada di sisi <strong class="font-medium text-stone-700 dark:text-stone-300">tampilan (front end)</strong>.</p>',
          en: '<p class="text-stone-600 dark:text-stone-400 text-sm leading-relaxed">A <strong class="font-medium text-stone-700 dark:text-stone-300">Laravel</strong> school profile with pages for about us, principal welcome, structure, staff profiles, facilities, programs, and news. Includes a <strong class="font-medium text-stone-700 dark:text-stone-300">WhatsApp-based admissions (PPDB)</strong> flow and <strong class="font-medium text-stone-700 dark:text-stone-300">bilingual</strong> support (Indonesian &amp; English). My main contribution was on the <strong class="font-medium text-stone-700 dark:text-stone-300">front end</strong>.</p>',
        },
      },
    ],
  },
  experience: {
    jobs: [
      {
        period: { id: "Jan 2020 — Sekarang", en: "Jan 2020 — Present" },
        title: { id: "Web Developer", en: "Web Developer" },
        company: { id: "PT. Inosoft Trans Sistem · Indonesia", en: "PT. Inosoft Trans Sistem · Indonesia" },
        body: {
          id: "Pengembangan dan pemeliharaan aplikasi web interaktif: fitur pencarian, filter data, sorting multi-kriteria, integrasi API, dan manajemen basis data relasional. Analisis &amp; perbaikan bug untuk stabilitas. Kolaborasi agile dengan Laravel, Vue.js, dan praktik Git.",
          en: "Building and maintaining interactive web apps: search, data filters, multi-criteria sorting, API integration, and relational data modeling. Bug analysis and fixes for stability. Agile collaboration with Laravel, Vue.js, and Git.",
        },
      },
      {
        period: { id: "Sep 2017 — Sekarang", en: "Sep 2017 — Present" },
        title: { id: "Web Developer · Freelance", en: "Web Developer · Freelance" },
        company: {
          id: "Self-employed · Yogyakarta &amp; sekitarnya",
          en: "Self-employed · Yogyakarta &amp; surrounding areas",
        },
        body: {
          id: "Desain &amp; pengembangan website serta aplikasi web responsif sesuai kebutuhan klien, integrasi API, deployment aman, dukungan teknis, dan perbaikan berkelanjutan pasca rilis.",
          en: "Design and development of responsive websites and web apps for clients, API integration, safe deployments, technical support, and ongoing post-release maintenance.",
        },
      },
      {
        period: { id: "Jul 2020 — Mei 2021", en: "Jul 2020 — May 2021" },
        title: { id: "Full-stack Developer", en: "Full-stack Developer" },
        company: { id: "PesanLokal", en: "PesanLokal" },
        body: {
          id: "Implementasi dashboard untuk pelanggan &amp; merchant (Vue.js &amp; Laravel), laporan berkala (mingguan/bulanan/tahunan), serta analisis bug untuk kestabilan fitur.",
          en: "Implemented customer and merchant dashboards (Vue.js &amp; Laravel), periodic reports (weekly/monthly/yearly), and bug analysis to keep features stable.",
        },
      },
      {
        period: { id: "Sep 2017 — Des 2018", en: "Sep 2017 — Dec 2018" },
        title: { id: "Web Programmer", en: "Web Programmer" },
        company: { id: "TechnoGIS Indonesia · Yogyakarta", en: "TechnoGIS Indonesia · Yogyakarta" },
        body: {
          id: "Pengembangan website berbasis peta dengan marker dan layer sesuai kebutuhan klien; analisis dan perbaikan bug pada fitur.",
          en: "Map-based websites with markers and layers tailored to client needs; feature bug analysis and fixes.",
        },
      },
    ],
    education: [
      {
        period: { id: "2016 — 2021", en: "2016 — 2021" },
        title: { id: "Sarjana (S1) · Informatika", en: "Bachelor (B.Sc.) · Informatics" },
        school: { id: "Universitas Amikom Yogyakarta", en: "Amikom University of Yogyakarta" },
        body: {
          id: "Fondasi kuat di pengembangan perangkat lunak dan aplikasi web sesuai kurikulum teknik informatika.",
          en: "Strong foundations in software engineering and web development through the informatics curriculum.",
        },
      },
      {
        period: { id: "2013 — 2016", en: "2013 — 2016" },
        title: { id: "Rekayasa Perangkat Lunak", en: "Software Engineering" },
        school: { id: "SMK Telekomunikasi Tunas Harapan", en: "SMK Telekomunikasi Tunas Harapan" },
        body: {
          id: "Pendidikan menengah kejuruan di bidang RPL sebagai dasar memasuki industri software.",
          en: "Vocational high school in software engineering as a foundation for entering the software industry.",
        },
      },
    ],
  },
};
