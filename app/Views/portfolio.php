<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <style>
        html {
            scroll-behavior: smooth;
        }
        body {
            background: #eff6ff;
        }
        section[id] {
            scroll-margin-top: 6rem;
        }
        .text-gradient {
            background: linear-gradient(135deg, #4338ca, #7c3aed);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .card-glow {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .card-glow:hover {
            transform: translateY(-6px);
            box-shadow: 0 16px 40px rgba(79, 70, 229, 0.15);
        }
        .hero-illustration {
            background: radial-gradient(circle at top left, rgba(59,130,246,0.12), transparent 35%),
                        radial-gradient(circle at bottom right, rgba(168,85,247,0.12), transparent 30%),
                        linear-gradient(180deg, #eef2ff, #ffffff);
        }
        .hero-section {
            background:
                radial-gradient(circle at top left, rgba(99, 102, 241, 0.16), transparent 30%),
                radial-gradient(circle at 85% 20%, rgba(236, 72, 153, 0.12), transparent 24%),
                linear-gradient(135deg, #eef4ff 0%, #ffffff 48%, #f5f3ff 100%);
        }
    </style>
</head>
<body class="text-slate-800 font-sans">

    <nav class="fixed inset-x-0 top-0 z-20 bg-white/95 backdrop-blur-md border-b border-slate-200 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 py-4 flex items-center justify-between">
            <a href="#hero" class="text-lg font-semibold text-slate-900">Umairah Sabri</a>
            <button
                type="button"
                class="md:hidden inline-flex h-11 w-11 items-center justify-center rounded-2xl border border-slate-200 text-slate-700 hover:bg-slate-50 transition"
                aria-label="Open navigation menu"
                aria-expanded="false"
                aria-controls="mobile-menu"
                data-mobile-menu-button
            >
                <i class="bi bi-list text-2xl" data-menu-icon></i>
            </button>
            <div class="hidden md:flex items-center space-x-8 text-slate-700">
                <a href="#hero" class="hover:text-indigo-600 transition">Home</a>
                <a href="#about" class="hover:text-indigo-600 transition">About Me</a>
                <a href="#skills" class="hover:text-indigo-600 transition">Skills</a>
                <a href="#credentials" class="hover:text-indigo-600 transition">Credentials</a>
                <a href="#projects" class="hover:text-indigo-600 transition">Projects</a>
                <a href="#contact" class="hover:text-indigo-600 transition">Contact</a>
            </div>
        </div>
        <div id="mobile-menu" class="hidden md:hidden border-t border-slate-100 bg-white/95" data-mobile-menu>
            <div class="max-w-7xl mx-auto px-4 py-4 flex flex-col gap-2 text-sm font-medium text-slate-700">
                <a href="#hero" class="rounded-2xl px-4 py-3 hover:bg-slate-50 hover:text-indigo-600 transition" data-mobile-link>Home</a>
                <a href="#about" class="rounded-2xl px-4 py-3 hover:bg-slate-50 hover:text-indigo-600 transition" data-mobile-link>About Me</a>
                <a href="#skills" class="rounded-2xl px-4 py-3 hover:bg-slate-50 hover:text-indigo-600 transition" data-mobile-link>Skills</a>
                <a href="#credentials" class="rounded-2xl px-4 py-3 hover:bg-slate-50 hover:text-indigo-600 transition" data-mobile-link>Credentials</a>
                <a href="#projects" class="rounded-2xl px-4 py-3 hover:bg-slate-50 hover:text-indigo-600 transition" data-mobile-link>Projects</a>
                <a href="#contact" class="rounded-2xl px-4 py-3 hover:bg-slate-50 hover:text-indigo-600 transition" data-mobile-link>Contact</a>
            </div>
        </div>
    </nav>

    <main>
        <section id="hero" class="hero-section min-h-screen">
            <div class="max-w-7xl mx-auto px-4 pt-24 pb-16 sm:pt-28 sm:pb-20 flex items-center min-h-screen">
            <div class="grid gap-10 md:gap-12 lg:gap-2 lg:grid-cols-[1.15fr_0.85fr] lg:items-center w-full">
                <div class="order-2 lg:order-1 text-center lg:text-left">
                    <p class="text-xs uppercase tracking-[0.3em] text-indigo-600 font-semibold">Welcome To My Portfolio</p>
                    <h1 class="mt-5 text-3xl font-extrabold tracking-tight text-slate-900 sm:text-5xl lg:text-[3.35rem] lg:whitespace-nowrap">
                        Hi, I’m <span class="text-gradient"><?= $name ?></span>
                    </h1>
                    <p class="mt-4 text-lg sm:text-xl text-slate-600 font-medium"><?= $subtitle ?></p>
                    <p class="mt-6 text-slate-600 leading-7 sm:leading-8 max-w-2xl mx-auto lg:mx-0 text-base sm:text-lg text-justify">
                        <?= $heroText ?>
                    </p>
                    <a href="#about" class="inline-flex items-center justify-center rounded-full bg-gradient-to-r from-indigo-600 to-violet-600 px-8 sm:px-10 py-3.5 sm:py-4 text-sm font-semibold text-white shadow-lg shadow-indigo-500/20 hover:brightness-110 transition mt-8">
                        Discover More
                    </a>
                </div>

                <div class="order-1 lg:order-2 relative flex justify-center lg:justify-center">
                    <div class="relative w-full max-w-[240px] sm:max-w-[280px] lg:max-w-[330px]">
                        <img src="<?= base_url('images/womanwithlaptop.png') ?>" alt="Woman with laptop" class="aspect-[3/4] w-full object-contain object-center" />
                    </div>
                </div>
            </div>
            </div>
        </section>

        <section id="about" class="bg-slate-50 min-h-screen pt-16 pb-12 px-4 flex items-start">
            <div class="max-w-6xl mx-auto w-full flex flex-col justify-start">
                <div class="mb-8 text-center">
                    <p class="text-xs font-semibold uppercase tracking-[0.3em] text-indigo-600">About Me</p>
                    <h2 class="mt-3 text-3xl font-bold text-slate-900 sm:text-4xl">&lt;/Get to Know Me&gt;</h2>
                </div>
                <div class="grid gap-8 lg:grid-cols-[380px_minmax(0,1fr)] lg:items-stretch">
                    <div class="mx-auto w-full max-w-[380px] rounded-[28px] border border-slate-200 shadow-md shadow-slate-200/20 overflow-hidden h-full">
                        <img src="<?= base_url('images/umairahsabri.jpg') ?>" alt="Umairah Sabri" class="h-full min-h-[320px] sm:min-h-[420px] lg:min-h-[520px] w-full object-cover object-center" />
                    </div>
                    <div class="rounded-[34px] bg-gradient-to-br from-indigo-200 via-violet-100 to-sky-100 p-[3px] shadow-md shadow-slate-200/20 lg:min-h-[520px]">
                        <div class="rounded-[32px] bg-white p-6 sm:p-8 md:p-10 lg:min-h-[520px] flex flex-col justify-between">
                        <div class="space-y-5 text-slate-700 text-base sm:text-lg leading-relaxed">
                            <p><span class="font-bold text-slate-900 block text-sm uppercase tracking-wider">Full Name:</span> <?= $about['fullName'] ?></p>
                            <p><span class="font-bold text-slate-900 block text-sm uppercase tracking-wider">Education:</span> <?= $about['education'] ?></p>
                            <p><span class="font-bold text-slate-900 block text-sm uppercase tracking-wider">Institution:</span> <?= $about['institution'] ?></p>
                            <p><span class="font-bold text-slate-900 block text-sm uppercase tracking-wider">CGPA:</span> <span class="text-indigo-600 font-bold"><?= $about['cgpa'] ?></span></p>
                            <p><span class="font-bold text-slate-900 block text-sm uppercase tracking-wider">Academic Achievements:</span> <?= $about['achievement'] ?></p>
                        </div>
                        <div class="mt-8 flex items-center gap-4">
                            <a href="https://linkedin.com/in/umairah-sabri" target="_blank" class="inline-flex h-12 w-12 items-center justify-center rounded-2xl bg-indigo-600 text-white shadow-lg shadow-indigo-500/20 hover:-translate-y-1 transition">
                                <i class="bi bi-linkedin text-xl"></i>
                            </a>
                            <a href="https://github.com/ouumai" target="_blank" class="inline-flex h-12 w-12 items-center justify-center rounded-2xl bg-slate-900 text-white shadow-lg shadow-slate-900/20 hover:-translate-y-1 transition">
                                <i class="bi bi-github text-xl"></i>
                            </a>
                            <a href="https://www.credly.com/users/umairah-sabri" target="_blank" class="inline-flex h-12 w-12 items-center justify-center rounded-2xl bg-white border border-slate-100 shadow-lg shadow-violet-500/10 hover:-translate-y-1 transition">
                                <img src="<?= base_url('images/credlyicon.svg') ?>" alt="Credly" class="h-8 w-8 object-contain" />
                            </a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="skills" class="min-h-[calc(100vh-6rem)] py-20 sm:py-24 lg:py-28 px-4 flex items-center">
            <div class="max-w-7xl mx-auto w-full">
                <div class="text-center mb-12 sm:mb-16">
                    <p class="text-xs font-semibold uppercase tracking-[0.3em] text-indigo-600">My Skills</p>
                    <h2 class="mt-3 text-3xl font-bold text-slate-900 sm:text-4xl">&lt;/What I Can Do&gt;</h2>
                </div>
                <div class="grid gap-6 sm:gap-8 md:grid-cols-2 xl:grid-cols-3">
                    <?php foreach ($skills as $skill): ?>
                    <div class="card-glow rounded-[32px] border border-slate-200 bg-white p-8 shadow-sm">
                        <h3 class="text-base font-bold uppercase tracking-[0.2em] text-indigo-600 mb-4 flex items-center gap-3">
                            <?php
                            $icon = '';
                            switch (strtolower($skill['title'])) {
                                case 'programming': $icon = '<i class="bi bi-braces text-xl"></i>'; break;
                                case 'database': $icon = '<i class="bi bi-database text-xl"></i>'; break;
                                case 'data & software': $icon = '<i class="bi bi-pc-display text-xl"></i>'; break;
                                case 'network': $icon = '<i class="bi bi-hdd-stack text-xl"></i>'; break;
                                case 'multimedia & design': $icon = '<i class="bi bi-palette text-xl"></i>'; break;
                                case 'productivity': $icon = '<i class="bi bi-microsoft text-xl"></i>'; break;
                            }
                            echo $icon . ' ' . $skill['title'];
                            ?>
                        </h3>
                        <p class="text-base leading-8 text-slate-600"><?= $skill['items'] ?></p>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section id="credentials" class="bg-slate-50 min-h-screen px-4 pt-24 sm:pt-28 pb-16">
            <div class="max-w-7xl mx-auto w-full">
                <div class="text-center mb-10">
                    <p class="text-xs font-semibold uppercase tracking-[0.3em] text-indigo-600">My Credentials</p>
                    <h2 class="mt-3 text-3xl font-bold text-slate-900 sm:text-4xl">&lt;/Certificates & Courses&gt;</h2>
                </div>
                <div class="grid gap-6 sm:grid-cols-2 xl:grid-cols-3">
                    <?php foreach ($credentials as $index => $credential): ?>
                    <?php $cardClass = ''; ?>
                    <div class="<?= $cardClass ?> rounded-[28px] border border-slate-200 bg-white p-5 shadow-sm card-glow">
                        <?php
                        $imageName = '';
                        switch ($credential) {
                            case 'IBM SkillsBuild Data Analytics Certificate': $imageName = 'IBMdataanalytics'; break;
                            case 'Artificial Intelligence Fundamentals': $imageName = 'IBMaifundamentals'; break;
                            case 'Cloud Computing Fundamentals': $imageName = 'IBMcloudcomputing'; break;
                            case 'Cybersecurity Fundamentals': $imageName = 'IBMcybersecurityfundamentals'; break;
                            case 'Explore Emerging Tech': $imageName = 'IBMemergingtech'; break;
                        }
                        ?>
                        <div class="flex flex-col gap-4 sm:flex-row sm:items-center">
                            <div class="flex-shrink-0 rounded-3xl bg-slate-100 p-2.5">
                                <img src="<?= base_url('images/' . $imageName . '.png') ?>" alt="<?= $credential ?>" class="h-24 w-24 rounded-2xl object-cover" />
                            </div>
                            <div class="space-y-1">
                                <p class="text-[10px] font-bold uppercase tracking-[0.2em] text-indigo-600">IBM Certificate</p>
                                <h3 class="text-base sm:text-[1.05rem] font-semibold text-slate-900 leading-snug"><?= $credential ?></h3>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section id="projects" class="py-20 px-4">
            <div class="max-w-7xl mx-auto text-center mb-12">
                <p class="text-xs font-semibold uppercase tracking-[0.3em] text-indigo-600">My Big Projects</p>
                <h2 class="mt-3 text-3xl font-bold text-slate-900 sm:text-4xl">&lt;/Selected Work&gt;</h2>
            </div>
            <div class="space-y-10 max-w-7xl mx-auto">
                <?php foreach ($projects as $project): ?>
                <div class="rounded-[32px] border border-slate-200 bg-white p-6 md:p-10 shadow-sm card-glow">
                    <div class="mb-8 grid gap-10 lg:grid-cols-[1fr_1fr] lg:items-center">
                        <div>
                            <?php if (!empty($project['subtitle'])): ?>
                            <p class="text-xs uppercase tracking-[0.3em] text-indigo-600 font-bold"><?= $project['subtitle'] ?></p>
                            <?php endif; ?>
                            <h3 class="mt-4 text-3xl font-bold text-slate-900"><?= $project['title'] ?></h3>
                            <?php if ($project['title'] === 'SECURE LICENSE ACTIVATION VIA ID DEVICE SYSTEM'): ?>
                            <p class="mt-3 text-sm text-emerald-600 font-medium flex items-center gap-2">
                                <i class="bi bi-award-fill"></i> Gold Medal - ISDIG2025
                            </p>
                            <?php endif; ?>
                            <p class="mt-4 text-slate-600 leading-relaxed"><?= $project['highlight'] ?? '' ?></p>
                        </div>
                        
                        <?php
                        $projectImage = '';
                        switch ($project['title']) {
                            case 'SECURE LICENSE ACTIVATION VIA ID DEVICE SYSTEM': $projectImage = 'securelicenseactivaction'; break;
                            case 'SISTEM PERKHIDMATAN ICT (ICT4U)': $projectImage = 'ict4u'; break;
                        }
                        ?>
                        <div class="rounded-[28px] bg-slate-50 border border-slate-100 p-4 flex items-center justify-center min-h-[300px]">
                            <?php if ($projectImage): ?>
                            <div class="h-full w-full overflow-hidden rounded-[24px]">
                                <img src="<?= base_url('images/' . $projectImage . '.png') ?>" alt="<?= $project['title'] ?>" class="w-full h-full object-contain hover:scale-105 transition duration-500" />
                            </div>
                            <?php else: ?>
                            <div class="h-[300px] w-full rounded-[24px] bg-gradient-to-br from-indigo-50 to-violet-50"></div>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="grid gap-6 md:grid-cols-3">
                        <div class="rounded-3xl bg-slate-50 p-6 border border-slate-100">
                            <p class="text-xs uppercase tracking-[0.2em] text-slate-400 mb-3 font-bold">Overview</p>
                            <p class="text-sm leading-7 text-slate-600"><?= $project['overview'] ?></p>
                        </div>
                        
                        <div class="rounded-3xl bg-slate-50 p-6 border border-slate-100">
                            <p class="text-xs uppercase tracking-[0.2em] text-slate-400 mb-4 font-bold">Technical Stack</p>
                            <div class="flex flex-wrap gap-2">
                                <?php 
                                $techStack = explode(',', $project['tech']); 
                                foreach ($techStack as $tech): 
                                ?>
                                    <span class="px-3 py-1 bg-white border border-indigo-100 text-indigo-600 rounded-full text-[11px] font-bold shadow-sm">
                                        <?= trim($tech) ?>
                                    </span>
                                <?php endforeach; ?>
                            </div>
                        </div>

                        <div class="rounded-3xl bg-slate-50 p-6 border border-slate-100">
                            <p class="text-xs uppercase tracking-[0.2em] text-slate-400 mb-3 font-bold">Key Contribution</p>
                            <p class="text-sm leading-7 text-slate-600"><?= $project['notes'] ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </section>

        <section id="contact" class="bg-slate-50 min-h-[calc(100vh-6rem)] py-12 px-4 flex items-center">
            <div class="max-w-7xl mx-auto w-full flex flex-col justify-center">
                <div class="mb-12 text-center">
                    <p class="text-xs font-semibold uppercase tracking-[0.3em] text-indigo-600">Let’s Get In Touch!</p>
                    <h2 class="mt-3 text-3xl font-bold text-slate-900 sm:text-4xl">&lt;/Feel free to reach me out&gt;</h2>
                </div>

                <div class="mx-auto grid w-full max-w-6xl gap-6 sm:gap-8 lg:grid-cols-[320px_minmax(0,680px)] lg:justify-center">
                    <div class="space-y-6 rounded-[32px] bg-white p-8 shadow-sm border border-slate-200 h-full">
                        <div class="flex items-start gap-4">
                            <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-blue-50 text-blue-600 shrink-0"><i class="bi bi-envelope-fill text-lg"></i></div>
                            <div>
                                <p class="text-[10px] uppercase tracking-widest text-slate-400 font-bold">Email</p>
                                <p class="mt-1 text-slate-800 font-semibold"><?= $contact['email'] ?></p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-green-50 text-green-600 shrink-0"><i class="bi bi-telephone-fill text-lg"></i></div>
                            <div>
                                <p class="text-[10px] uppercase tracking-widest text-slate-400 font-bold">Phone</p>
                                <p class="mt-1 text-slate-800 font-semibold"><?= $contact['phone'] ?></p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-red-50 text-red-600 shrink-0"><i class="bi bi-geo-alt-fill text-lg"></i></div>
                            <div>
                                <p class="text-[10px] uppercase tracking-widest text-slate-400 font-bold">Location</p>
                                <p class="mt-1 text-slate-800 font-semibold"><?= $contact['location'] ?></p>
                            </div>
                        </div>
                        <div class="pt-4 border-t border-slate-200">
                            <div class="flex items-center gap-3">
                                <a href="https://linkedin.com/in/umairah-sabri" target="_blank" class="inline-flex h-11 w-11 items-center justify-center rounded-2xl bg-indigo-600 text-white shadow-lg shadow-indigo-500/10">
                                    <i class="bi bi-linkedin text-xl"></i>
                                </a>
                                <a href="https://github.com/ouumai" target="_blank" class="inline-flex h-11 w-11 items-center justify-center rounded-2xl bg-slate-900 text-white shadow-lg shadow-slate-900/10">
                                    <i class="bi bi-github text-xl"></i>
                                </a>
                                <a href="https://www.credly.com/users/umairah-sabri" target="_blank" class="inline-flex h-11 w-11 items-center justify-center rounded-2xl bg-white shadow-lg shadow-violet-500/10">
                                <img src="<?= base_url('images/credlyicon.svg') ?>" alt="Credly" class="h-8 w-8 object-contain" />
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-[32px] bg-white p-6 sm:p-8 md:p-10 shadow-sm border border-slate-200 h-full">
                        <form action="<?= site_url('contact/send') ?>" method="post" class="space-y-6">
                            <div class="grid gap-6 md:grid-cols-2">
                                <div>
                                    <label class="text-xs font-bold text-slate-500 uppercase tracking-wider">Name</label>
                                    <input type="text" name="name" value="<?= esc(old('name')) ?>" placeholder="Your name" class="mt-2 w-full rounded-2xl border border-slate-100 bg-slate-50 px-4 py-3 text-slate-700 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-100 outline-none transition" />
                                </div>
                                <div>
                                    <label class="text-xs font-bold text-slate-500 uppercase tracking-wider">Email</label>
                                    <input type="email" name="email" value="<?= esc(old('email')) ?>" placeholder="Your email" class="mt-2 w-full rounded-2xl border border-slate-100 bg-slate-50 px-4 py-3 text-slate-700 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-100 outline-none transition" />
                                </div>
                            </div>
                            <div>
                                <label class="text-xs font-bold text-slate-500 uppercase tracking-wider">Subject</label>
                                <input type="text" name="subject" value="<?= esc(old('subject')) ?>" placeholder="What is this message about?" class="mt-2 w-full rounded-2xl border border-slate-100 bg-slate-50 px-4 py-3 text-slate-700 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-100 outline-none transition" />
                            </div>
                            <div>
                                <label class="text-xs font-bold text-slate-500 uppercase tracking-wider">Message</label>
                                <textarea name="message" rows="4" placeholder="How can I help you?" class="mt-2 w-full rounded-2xl border border-slate-100 bg-slate-50 px-4 py-3 text-slate-700 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-100 outline-none transition"><?= esc(old('message')) ?></textarea>
                            </div>
                            <button type="submit" class="w-full md:w-auto inline-flex items-center justify-center rounded-full bg-indigo-600 px-8 sm:px-10 py-3.5 sm:py-4 text-sm font-bold text-white shadow-lg shadow-indigo-500/30 hover:bg-indigo-700 hover:-translate-y-0.5 transition active:scale-95">
                                Send Message
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="border-t border-slate-200 bg-white py-8 text-center text-sm text-slate-400 font-medium">
        © 2026 Umairah Sabri. All Rights Reserved.
    </footer>

    <script>
        // Smooth scroll logic remains the same
        const scrollToSection = (targetId) => {
            const targetSection = document.querySelector(targetId);
            if (!targetSection) return;

            const nav = document.querySelector('nav');
            const navHeight = nav ? nav.offsetHeight : 80;
            const absoluteTop = window.scrollY + targetSection.getBoundingClientRect().top;
            
            window.scrollTo({
                top: absoluteTop - navHeight,
                behavior: 'smooth'
            });
        };

        document.querySelectorAll('a[href^="#"]').forEach((link) => {
            link.addEventListener('click', (event) => {
                const targetId = link.getAttribute('href');
                if (!targetId || targetId === '#') return;
                event.preventDefault();
                scrollToSection(targetId);
            });
        });

        const mobileMenuButton = document.querySelector('[data-mobile-menu-button]');
        const mobileMenu = document.querySelector('[data-mobile-menu]');
        const menuIcon = document.querySelector('[data-menu-icon]');
        const mobileLinks = document.querySelectorAll('[data-mobile-link]');

        if (mobileMenuButton && mobileMenu && menuIcon) {
            const setMobileMenuState = (isOpen) => {
                mobileMenu.classList.toggle('hidden', !isOpen);
                mobileMenuButton.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
                menuIcon.className = isOpen ? 'bi bi-x text-2xl' : 'bi bi-list text-2xl';
            };

            setMobileMenuState(false);

            mobileMenuButton.addEventListener('click', () => {
                const isOpen = mobileMenu.classList.contains('hidden');
                setMobileMenuState(isOpen);
            });

            mobileLinks.forEach((link) => {
                link.addEventListener('click', () => setMobileMenuState(false));
            });
        }
    </script>
</body>
</html>
