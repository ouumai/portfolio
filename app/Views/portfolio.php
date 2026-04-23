<!DOCTYPE html>
<html lang="<?= esc($currentLocale) ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title) ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <style>
        :root {
            --nav-offset: 80px;
        }

        body {
            background: #eff6ff;
        }

        section[id] {
            scroll-margin-top: 0 !important;
        }

        @media (max-width: 767px) {
            section[id] {
                scroll-margin-top: calc(var(--nav-offset) - 0.5rem);
            }
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

        .hero-section {
            background:
                radial-gradient(circle at top left, rgba(99, 102, 241, 0.16), transparent 30%),
                radial-gradient(circle at 85% 20%, rgba(236, 72, 153, 0.12), transparent 24%),
                linear-gradient(135deg, #eef4ff 0%, #ffffff 48%, #f5f3ff 100%);
        }
    </style>
</head>
<body class="font-sans text-slate-800">
    <?php
    $languageButtonClass = static fn (string $locale): string => $currentLocale === $locale
        ? 'bg-indigo-600 text-white shadow-sm'
        : 'text-slate-600 hover:bg-slate-100';
    ?>

    <nav class="fixed inset-x-0 top-0 z-20 border-b border-slate-200 bg-white/95 shadow-sm backdrop-blur-md" data-site-nav>
        <div class="mx-auto flex max-w-7xl items-center justify-between px-4 py-4" data-nav-bar>
            <a href="#hero" class="text-lg font-semibold text-slate-900">Umairah Sabri</a>

            <button
                type="button"
                class="inline-flex h-11 w-11 items-center justify-center rounded-2xl border border-slate-200 text-slate-700 transition hover:bg-slate-50 md:hidden"
                aria-label="<?= esc(lang('Portfolio.nav.language')) ?>"
                aria-expanded="false"
                aria-controls="mobile-menu"
                data-mobile-menu-button
            >
                <i class="bi bi-list text-2xl" data-menu-icon></i>
            </button>

            <div class="hidden items-center gap-6 text-slate-700 md:flex">
                <a href="#hero" class="transition hover:text-indigo-600"><?= esc(lang('Portfolio.nav.home')) ?></a>
                <a href="#about" class="transition hover:text-indigo-600"><?= esc(lang('Portfolio.nav.about')) ?></a>
                <a href="#skills" class="transition hover:text-indigo-600"><?= esc(lang('Portfolio.nav.skills')) ?></a>
                <a href="#credentials" class="transition hover:text-indigo-600"><?= esc(lang('Portfolio.nav.credentials')) ?></a>
                <a href="#projects" class="transition hover:text-indigo-600"><?= esc(lang('Portfolio.nav.projects')) ?></a>
                <a href="#contact" class="transition hover:text-indigo-600"><?= esc(lang('Portfolio.nav.contact')) ?></a>
                <div class="flex items-center gap-1 rounded-full border border-slate-200 bg-slate-50 p-1 text-xs font-bold uppercase tracking-[0.2em]">
                    <a href="./language/en" class="rounded-full px-3 py-2 transition <?= $languageButtonClass('en') ?>"><?= esc(lang('Portfolio.nav.english')) ?></a>
                    <a href="./language/ms" class="rounded-full px-3 py-2 transition <?= $languageButtonClass('ms') ?>"><?= esc(lang('Portfolio.nav.malay')) ?></a>
                </div>
            </div>
        </div>

        <div id="mobile-menu" class="hidden border-t border-slate-100 bg-white/95 md:hidden" data-mobile-menu>
            <div class="mx-auto flex max-w-7xl flex-col gap-2 px-4 py-4 text-sm font-medium text-slate-700">
                <div class="mb-2 flex items-center justify-between rounded-2xl border border-slate-100 bg-slate-50 px-4 py-3">
                    <span class="text-xs font-bold uppercase tracking-[0.2em] text-slate-500"><?= esc(lang('Portfolio.nav.language')) ?></span>
                    <div class="flex items-center gap-2">
                        <a href="./language/en" class="rounded-full px-3 py-2 text-xs font-bold uppercase transition <?= $languageButtonClass('en') ?>"><?= esc(lang('Portfolio.nav.english')) ?></a>
                        <a href="./language/ms" class="rounded-full px-3 py-2 text-xs font-bold uppercase transition <?= $languageButtonClass('ms') ?>"><?= esc(lang('Portfolio.nav.malay')) ?></a>
                    </div>
                </div>
                <a href="#hero" class="rounded-2xl px-4 py-3 transition hover:bg-slate-50 hover:text-indigo-600" data-mobile-link><?= esc(lang('Portfolio.nav.home')) ?></a>
                <a href="#about" class="rounded-2xl px-4 py-3 transition hover:bg-slate-50 hover:text-indigo-600" data-mobile-link><?= esc(lang('Portfolio.nav.about')) ?></a>
                <a href="#skills" class="rounded-2xl px-4 py-3 transition hover:bg-slate-50 hover:text-indigo-600" data-mobile-link><?= esc(lang('Portfolio.nav.skills')) ?></a>
                <a href="#credentials" class="rounded-2xl px-4 py-3 transition hover:bg-slate-50 hover:text-indigo-600" data-mobile-link><?= esc(lang('Portfolio.nav.credentials')) ?></a>
                <a href="#projects" class="rounded-2xl px-4 py-3 transition hover:bg-slate-50 hover:text-indigo-600" data-mobile-link><?= esc(lang('Portfolio.nav.projects')) ?></a>
                <a href="#contact" class="rounded-2xl px-4 py-3 transition hover:bg-slate-50 hover:text-indigo-600" data-mobile-link><?= esc(lang('Portfolio.nav.contact')) ?></a>
            </div>
        </div>
    </nav>

    <main>
        <section id="hero" class="hero-section min-h-screen">
            <div class="mx-auto flex min-h-screen max-w-7xl items-center px-4 pb-16 pt-24 sm:pb-20 sm:pt-28">
                <div class="grid w-full gap-10 md:gap-12 lg:grid-cols-[1.15fr_0.85fr] lg:items-center lg:gap-2">
                    <div class="order-2 text-center lg:order-1 lg:text-left">
                        <p class="text-xs font-semibold uppercase tracking-[0.3em] text-indigo-600"><?= esc(lang('Portfolio.hero.welcome')) ?></p>
                        <h1 class="mt-5 text-3xl font-extrabold tracking-tight text-slate-900 sm:text-5xl lg:whitespace-nowrap lg:text-[3.35rem]">
                            <?= esc(lang('Portfolio.hero.greeting')) ?> <span class="text-gradient"><?= esc($name) ?></span>
                        </h1>
                        <p class="mt-4 text-lg font-medium text-slate-600 sm:text-xl"><?= esc($subtitle) ?></p>
                        <p class="mx-auto mt-6 max-w-2xl text-justify text-base leading-7 text-slate-600 sm:text-lg sm:leading-8 lg:mx-0">
                            <?= esc($heroText) ?>
                        </p>
                        <a href="#about" class="mt-8 inline-flex items-center justify-center rounded-full bg-gradient-to-r from-indigo-600 to-violet-600 px-8 py-3.5 text-sm font-semibold text-white shadow-lg shadow-indigo-500/20 transition hover:brightness-110 sm:px-10 sm:py-4">
                            <?= esc(lang('Portfolio.hero.discover')) ?>
                        </a>
                    </div>

                    <div class="order-1 flex justify-center lg:order-2 lg:justify-center">
                        <div class="relative w-full max-w-[240px] sm:max-w-[280px] lg:max-w-[330px]">
                            <img src="images/womanwithlaptop.png" alt="Woman with laptop" class="aspect-[3/4] w-full object-contain object-center">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="about" class="flex min-h-screen items-start bg-slate-50 px-4 pb-12 pt-16">
            <div class="mx-auto flex w-full max-w-6xl flex-col justify-start">
                <div class="mb-8 text-center">
                    <p class="text-xs font-semibold uppercase tracking-[0.3em] text-indigo-600"><?= esc(lang('Portfolio.about.eyebrow')) ?></p>
                    <h2 class="mt-3 text-3xl font-bold text-slate-900 sm:text-4xl"><?= esc(lang('Portfolio.about.title')) ?></h2>
                </div>
                <div class="grid gap-8 lg:grid-cols-[380px_minmax(0,1fr)] lg:items-stretch">
                    <div class="mx-auto h-full w-full max-w-[380px] overflow-hidden rounded-[28px] border border-slate-200 shadow-md shadow-slate-200/20">
                        <img src="images/umairahsabri.png" alt="Umairah Sabri" class="h-full min-h-[320px] w-full object-cover object-center sm:min-h-[420px] lg:min-h-[520px]">
                    </div>
                    <div class="rounded-[34px] bg-gradient-to-br from-indigo-200 via-violet-100 to-sky-100 p-[3px] shadow-md shadow-slate-200/20 lg:min-h-[520px]">
                        <div class="flex flex-col justify-between rounded-[32px] bg-white p-6 sm:p-8 md:p-10 lg:min-h-[520px]">
                            <div class="space-y-5 text-base leading-relaxed text-slate-700 sm:text-lg">
                                <p><span class="block text-sm font-bold uppercase tracking-wider text-slate-900"><?= esc(lang('Portfolio.about.fullName')) ?>:</span> <?= esc($about['fullName']) ?></p>
                                <p><span class="block text-sm font-bold uppercase tracking-wider text-slate-900"><?= esc(lang('Portfolio.about.education')) ?>:</span> <?= esc($about['education']) ?></p>
                                <p><span class="block text-sm font-bold uppercase tracking-wider text-slate-900"><?= esc(lang('Portfolio.about.track')) ?>:</span> <?= esc($about['track']) ?></p>
                                <p><span class="block text-sm font-bold uppercase tracking-wider text-slate-900"><?= esc(lang('Portfolio.about.institution')) ?>:</span> <?= esc($about['institution']) ?></p>
                                <p><span class="block text-sm font-bold uppercase tracking-wider text-slate-900"><?= esc(lang('Portfolio.about.cgpa')) ?>:</span> <span class="font-bold text-indigo-600"><?= esc($about['cgpa']) ?></span></p>
                                <p><span class="block text-sm font-bold uppercase tracking-wider text-slate-900"><?= esc(lang('Portfolio.about.internship')) ?>:</span> <?= esc($about['internship']) ?></p>
                                <p><span class="block text-sm font-bold uppercase tracking-wider text-slate-900"><?= esc(lang('Portfolio.about.achievement')) ?>:</span> <?= esc($about['achievement']) ?></p>
                                <p><span class="block text-sm font-bold uppercase tracking-wider text-slate-900"><?= esc(lang('Portfolio.about.vision')) ?>:</span> <?= esc($about['vision']) ?></p>
                            </div>
                            <div class="mt-8 flex items-center gap-4">
                                <a href="https://linkedin.com/in/umairah-sabri" target="_blank" class="inline-flex h-12 w-12 items-center justify-center rounded-2xl bg-indigo-600 text-white shadow-lg shadow-indigo-500/20 transition hover:-translate-y-1" rel="noreferrer">
                                    <i class="bi bi-linkedin text-xl"></i>
                                </a>
                                <a href="https://github.com/ouumai" target="_blank" class="inline-flex h-12 w-12 items-center justify-center rounded-2xl bg-slate-900 text-white shadow-lg shadow-slate-900/20 transition hover:-translate-y-1" rel="noreferrer">
                                    <i class="bi bi-github text-xl"></i>
                                </a>
                                <a href="https://www.credly.com/users/umairah-sabri" target="_blank" class="inline-flex h-12 w-12 items-center justify-center rounded-2xl border border-slate-100 bg-white shadow-lg shadow-violet-500/10 transition hover:-translate-y-1" rel="noreferrer">
                                    <img src="images/credlyicon.svg" alt="Credly" class="h-8 w-8 object-contain">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="skills" class="flex min-h-[calc(100vh-6rem)] items-center px-4 py-20 sm:py-24 lg:py-28">
            <div class="mx-auto w-full max-w-7xl">
                <div class="mb-12 text-center sm:mb-16">
                    <p class="text-xs font-semibold uppercase tracking-[0.3em] text-indigo-600"><?= esc(lang('Portfolio.skills.eyebrow')) ?></p>
                    <h2 class="mt-3 text-3xl font-bold text-slate-900 sm:text-4xl"><?= esc(lang('Portfolio.skills.title')) ?></h2>
                </div>
                <div class="grid gap-6 sm:gap-8 md:grid-cols-2 xl:grid-cols-3">
                    <?php foreach ($skills as $skill): ?>
                        <div class="card-glow rounded-[32px] border border-slate-200 bg-white p-8 shadow-sm">
                            <h3 class="mb-4 flex items-center gap-3 text-base font-bold uppercase tracking-[0.2em] text-indigo-600">
                                <?php
                                $icon = '';
                                switch ($skill['key']) {
                                    case 'programming':
                                        $icon = '<i class="bi bi-braces text-xl"></i>';
                                        break;
                                    case 'database':
                                        $icon = '<i class="bi bi-database text-xl"></i>';
                                        break;
                                    case 'data-software':
                                        $icon = '<i class="bi bi-pc-display text-xl"></i>';
                                        break;
                                    case 'network':
                                        $icon = '<i class="bi bi-hdd-stack text-xl"></i>';
                                        break;
                                    case 'multimedia-design':
                                        $icon = '<i class="bi bi-palette text-xl"></i>';
                                        break;
                                    case 'productivity':
                                        $icon = '<i class="bi bi-microsoft text-xl"></i>';
                                        break;
                                }
                                echo $icon . ' ' . esc($skill['title']);
                                ?>
                            </h3>
                            <p class="text-base leading-8 text-slate-600"><?= esc($skill['items']) ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section id="credentials" class="min-h-screen bg-slate-50 px-4 pb-16 pt-24 sm:pt-28">
            <div class="mx-auto w-full max-w-7xl">
                <div class="mb-10 text-center">
                    <p class="text-xs font-semibold uppercase tracking-[0.3em] text-indigo-600"><?= esc(lang('Portfolio.credentials.eyebrow')) ?></p>
                    <h2 class="mt-3 text-3xl font-bold text-slate-900 sm:text-4xl"><?= esc(lang('Portfolio.credentials.title')) ?></h2>
                </div>
                <div class="grid gap-6 sm:grid-cols-2 xl:grid-cols-3">
                    <?php foreach ($credentials as $credential): ?>
                        <div class="card-glow flex flex-col justify-between rounded-[28px] border border-slate-200 bg-white p-5 shadow-sm">
                            <div>
                                <div class="flex flex-col gap-4 sm:flex-row sm:items-center">
                                    <div class="flex-shrink-0 rounded-3xl bg-slate-100 p-2.5">
                                        <img src="<?= esc('images/' . $credential['image'] . '.png', 'attr') ?>" alt="<?= esc($credential['title']) ?>" class="h-24 w-24 rounded-2xl object-cover">
                                    </div>
                                    <div class="space-y-1">
                                        <p class="text-[10px] font-bold uppercase tracking-[0.2em] text-indigo-600"><?= esc($credential['provider']) ?></p>
                                        <h3 class="text-base font-semibold leading-snug text-slate-900 sm:text-[1.05rem]"><?= esc($credential['title']) ?></h3>
                                    </div>
                                </div>
                                <p class="mt-4 border-t border-slate-50 pt-3 text-[11px] font-medium italic leading-relaxed text-slate-500">
                                    <i class="bi bi-info-circle-fill mr-1 text-indigo-300"></i> <?= esc($credential['description']) ?>
                                </p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section id="projects" class="px-4 py-20">
            <div class="mx-auto mb-12 max-w-7xl text-center">
                <p class="text-xs font-semibold uppercase tracking-[0.3em] text-indigo-600"><?= esc(lang('Portfolio.projects.eyebrow')) ?></p>
                <h2 class="mt-3 text-3xl font-bold text-slate-900 sm:text-4xl"><?= esc(lang('Portfolio.projects.title')) ?></h2>
            </div>
            <div class="mx-auto max-w-7xl space-y-10">
                <?php foreach ($projects as $project): ?>
                    <div class="card-glow rounded-[32px] border border-slate-200 bg-white p-6 shadow-sm md:p-10">
                        <div class="mb-8 grid gap-10 lg:grid-cols-[1fr_1fr] lg:items-center">
                            <div>
                                <?php if (! empty($project['subtitle'])): ?>
                                    <p class="text-xs font-bold uppercase tracking-[0.3em] text-indigo-600"><?= esc($project['subtitle']) ?></p>
                                <?php endif; ?>

                                <h3 class="mt-4 text-3xl font-bold text-slate-900"><?= esc($project['title']) ?></h3>

                                <?php if (stripos($project['title'], 'LICENSE') !== false): ?>
                                    <p class="mt-3 flex items-center gap-2 text-sm font-medium text-emerald-600">
                                        <i class="bi bi-award-fill"></i> <?= esc(lang('Portfolio.projects.goldMedal')) ?>
                                    </p>
                                <?php endif; ?>

                                <?php if (! empty($project['highlight'])): ?>
                                    <p class="mt-6 leading-relaxed text-slate-600"><?= esc($project['highlight']) ?></p>
                                <?php endif; ?>

                                <div class="mt-5">
                                    <a href="<?= esc($project['github_link'] ?? '#') ?>" target="_blank" class="group inline-flex items-center gap-2.5 rounded-2xl bg-slate-900 px-5 py-2.5 text-white shadow-md transition-all duration-300 hover:bg-gray-600" rel="noreferrer">
                                        <i class="bi bi-github text-xl"></i>
                                        <span class="text-sm font-bold"><?= esc(lang('Portfolio.projects.viewGithub')) ?></span>
                                        <i class="bi bi-chevron-right text-xs transition-transform group-hover:translate-x-1"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="flex min-h-[300px] items-center justify-center rounded-[28px] border border-slate-100 bg-slate-50 p-4">
                                <?php $projectImage = stripos($project['title'], 'ICT4U') !== false ? 'ict4u' : 'securelicenseactivaction'; ?>
                                <img src="<?= esc('images/' . $projectImage . '.png', 'attr') ?>" alt="<?= esc($project['title']) ?>" class="h-full w-full rounded-[24px] object-contain transition duration-500 hover:scale-105">
                            </div>
                        </div>

                        <div class="grid gap-6 md:grid-cols-3">
                            <div class="rounded-3xl border border-slate-100 bg-slate-50 p-6">
                                <p class="mb-3 text-xs font-bold uppercase tracking-[0.2em] text-slate-400"><?= esc(lang('Portfolio.projects.overview')) ?></p>
                                <p class="text-sm leading-7 text-slate-600"><?= esc($project['overview']) ?></p>
                            </div>
                            <div class="rounded-3xl border border-slate-100 bg-slate-50 p-6">
                                <p class="mb-4 text-xs font-bold uppercase tracking-[0.2em] text-slate-400"><?= esc(lang('Portfolio.projects.technicalStack')) ?></p>
                                <div class="flex flex-wrap gap-2">
                                    <?php foreach (explode(',', $project['tech']) as $tech): ?>
                                        <span class="rounded-full border border-indigo-100 bg-white px-3 py-1 text-[11px] font-bold text-indigo-600 shadow-sm"><?= esc(trim($tech)) ?></span>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <div class="rounded-3xl border border-slate-100 bg-slate-50 p-6">
                                <p class="mb-3 text-xs font-bold uppercase tracking-[0.2em] text-slate-400"><?= esc(lang('Portfolio.projects.keyContribution')) ?></p>
                                <p class="text-sm leading-7 text-slate-600"><?= esc($project['notes']) ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <section id="contact" class="flex min-h-[calc(100vh-6rem)] items-center bg-slate-50 px-4 py-12">
            <div class="mx-auto flex w-full max-w-7xl flex-col justify-center">
                <div class="mb-12 text-center">
                    <p class="text-xs font-semibold uppercase tracking-[0.3em] text-indigo-600"><?= esc(lang('Portfolio.contact.eyebrow')) ?></p>
                    <h2 class="mt-3 text-3xl font-bold text-slate-900 sm:text-4xl"><?= esc(lang('Portfolio.contact.title')) ?></h2>
                </div>

                <div class="mx-auto mb-6 w-full max-w-3xl space-y-3">
                    <?php if (session()->getFlashdata('contact_success')): ?>
                        <div class="rounded-2xl border border-emerald-200 bg-emerald-50 px-5 py-4 text-sm font-medium text-emerald-700">
                            <?= esc(session()->getFlashdata('contact_success')) ?>
                        </div>
                    <?php endif; ?>

                    <?php if (session()->getFlashdata('contact_error')): ?>
                        <div class="rounded-2xl border border-rose-200 bg-rose-50 px-5 py-4 text-sm font-medium text-rose-700">
                            <?= esc(session()->getFlashdata('contact_error')) ?>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="mx-auto grid w-full max-w-6xl gap-6 sm:gap-8 lg:grid-cols-[320px_minmax(0,680px)] lg:justify-center">
                    <div class="h-full space-y-6 rounded-[32px] border border-slate-200 bg-white p-8 shadow-sm">
                        <div class="flex items-start gap-4">
                            <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl bg-blue-50 text-blue-600"><i class="bi bi-envelope-fill text-lg"></i></div>
                            <div>
                                <p class="text-[10px] font-bold uppercase tracking-widest text-slate-400"><?= esc(lang('Portfolio.contact.email')) ?></p>
                                <p class="mt-1 font-semibold text-slate-800"><?= esc($contact['email']) ?></p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl bg-green-50 text-green-600"><i class="bi bi-telephone-fill text-lg"></i></div>
                            <div>
                                <p class="text-[10px] font-bold uppercase tracking-widest text-slate-400"><?= esc(lang('Portfolio.contact.phone')) ?></p>
                                <p class="mt-1 font-semibold text-slate-800"><?= esc($contact['phone']) ?></p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl bg-red-50 text-red-600"><i class="bi bi-geo-alt-fill text-lg"></i></div>
                            <div>
                                <p class="text-[10px] font-bold uppercase tracking-widest text-slate-400"><?= esc(lang('Portfolio.contact.location')) ?></p>
                                <p class="mt-1 font-semibold text-slate-800"><?= esc($contact['location']) ?></p>
                            </div>
                        </div>
                        <div class="border-t border-slate-200 pt-4">
                            <div class="flex items-center gap-3">
                                <a href="https://linkedin.com/in/umairah-sabri" target="_blank" class="inline-flex h-11 w-11 items-center justify-center rounded-2xl bg-indigo-600 text-white shadow-lg shadow-indigo-500/10" rel="noreferrer">
                                    <i class="bi bi-linkedin text-xl"></i>
                                </a>
                                <a href="https://github.com/ouumai" target="_blank" class="inline-flex h-11 w-11 items-center justify-center rounded-2xl bg-slate-900 text-white shadow-lg shadow-slate-900/10" rel="noreferrer">
                                    <i class="bi bi-github text-xl"></i>
                                </a>
                                <a href="https://www.credly.com/users/umairah-sabri" target="_blank" class="inline-flex h-11 w-11 items-center justify-center rounded-2xl bg-white shadow-lg shadow-violet-500/10" rel="noreferrer">
                                    <img src="images/credlyicon.svg" alt="Credly" class="h-8 w-8 object-contain">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="h-full rounded-[32px] border border-slate-200 bg-white p-6 shadow-sm sm:p-8 md:p-10">
                        <form action="contact/send" method="post" class="space-y-6">
                            <div class="grid gap-6 md:grid-cols-2">
                                <div>
                                    <label class="text-xs font-bold uppercase tracking-wider text-slate-500"><?= esc(lang('Portfolio.contact.name')) ?></label>
                                    <input type="text" name="name" value="<?= esc(old('name')) ?>" placeholder="<?= esc(lang('Portfolio.contact.namePlaceholder')) ?>" class="mt-2 w-full rounded-2xl border border-slate-100 bg-slate-50 px-4 py-3 text-slate-700 outline-none transition focus:border-indigo-500 focus:ring-2 focus:ring-indigo-100">
                                </div>
                                <div>
                                    <label class="text-xs font-bold uppercase tracking-wider text-slate-500"><?= esc(lang('Portfolio.contact.email')) ?></label>
                                    <input type="email" name="email" value="<?= esc(old('email')) ?>" placeholder="<?= esc(lang('Portfolio.contact.emailPlaceholder')) ?>" class="mt-2 w-full rounded-2xl border border-slate-100 bg-slate-50 px-4 py-3 text-slate-700 outline-none transition focus:border-indigo-500 focus:ring-2 focus:ring-indigo-100">
                                </div>
                            </div>
                            <div>
                                <label class="text-xs font-bold uppercase tracking-wider text-slate-500"><?= esc(lang('Portfolio.contact.subject')) ?></label>
                                <input type="text" name="subject" value="<?= esc(old('subject')) ?>" placeholder="<?= esc(lang('Portfolio.contact.subjectPlaceholder')) ?>" class="mt-2 w-full rounded-2xl border border-slate-100 bg-slate-50 px-4 py-3 text-slate-700 outline-none transition focus:border-indigo-500 focus:ring-2 focus:ring-indigo-100">
                            </div>
                            <div>
                                <label class="text-xs font-bold uppercase tracking-wider text-slate-500"><?= esc(lang('Portfolio.contact.message')) ?></label>
                                <textarea name="message" rows="4" placeholder="<?= esc(lang('Portfolio.contact.messagePlaceholder')) ?>" class="mt-2 w-full rounded-2xl border border-slate-100 bg-slate-50 px-4 py-3 text-slate-700 outline-none transition focus:border-indigo-500 focus:ring-2 focus:ring-indigo-100"><?= esc(old('message')) ?></textarea>
                            </div>
                            <button type="submit" class="inline-flex w-full items-center justify-center rounded-full bg-indigo-600 px-8 py-3.5 text-sm font-bold text-white shadow-lg shadow-indigo-500/30 transition hover:-translate-y-0.5 hover:bg-indigo-700 active:scale-95 md:w-auto sm:px-10 sm:py-4">
                                <?= esc(lang('Portfolio.contact.send')) ?>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="border-t border-slate-200 bg-white py-8 text-center text-sm font-medium text-slate-400">
        &copy; 2026 Umairah Sabri. <?= esc(lang('Portfolio.footer.rights')) ?>
    </footer>

    <script>
        const mobileMenuButton = document.querySelector('[data-mobile-menu-button]');
        const mobileMenu = document.querySelector('[data-mobile-menu]');
        const menuIcon = document.querySelector('[data-menu-icon]');
        const mobileLinks = document.querySelectorAll('[data-mobile-link]');

        const updateNavOffset = () => {
            const siteNav = document.querySelector('[data-site-nav]');
            const navHeight = siteNav ? siteNav.getBoundingClientRect().height : 74;
            document.documentElement.style.setProperty('--nav-offset', `${navHeight}px`);
            return navHeight;
        };

        const setMobileMenuState = (isOpen) => {
            if (!mobileMenuButton || !mobileMenu || !menuIcon) {
                return;
            }

            mobileMenu.classList.toggle('hidden', !isOpen);
            mobileMenuButton.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
            menuIcon.className = isOpen ? 'bi bi-x text-2xl' : 'bi bi-list text-2xl';
            requestAnimationFrame(updateNavOffset);
        };

        const scrollToSection = (targetId) => {
            const targetSection = document.querySelector(targetId);

            if (!targetSection) {
                return;
            }

            const navHeight = updateNavOffset();
            const sectionTop = targetSection.getBoundingClientRect().top + window.pageYOffset;
            let scrollToPos;

            if (targetId === '#skills') {
                if (window.innerWidth < 768) {
                    scrollToPos = sectionTop - navHeight + 10;
                } else {
                    const sectionHeight = targetSection.offsetHeight;
                    const viewportHeight = window.innerHeight;
                    scrollToPos = sectionTop - (viewportHeight - sectionHeight) / 2;
                }
            } else if (targetId === '#credentials') {
                scrollToPos = sectionTop - navHeight + 32;
            } else {
                scrollToPos = sectionTop - navHeight + 10;
            }

            window.scrollTo({
                top: scrollToPos,
                behavior: 'smooth'
            });
        };

        document.querySelectorAll('a[href^="#"]').forEach((link) => {
            link.addEventListener('click', (event) => {
                const targetId = link.getAttribute('href');

                if (!targetId || targetId === '#') {
                    return;
                }

                event.preventDefault();
                setMobileMenuState(false);
                requestAnimationFrame(() => scrollToSection(targetId));
            });
        });

        if (mobileMenuButton && mobileMenu && menuIcon) {
            setMobileMenuState(false);

            mobileMenuButton.addEventListener('click', () => {
                const isOpen = mobileMenu.classList.contains('hidden');
                setMobileMenuState(isOpen);
            });

            mobileLinks.forEach((link) => {
                link.addEventListener('click', () => setMobileMenuState(false));
            });
        }

        const scrollTarget = '<?= esc(session()->getFlashdata('scroll_to') ?? '', 'js') ?>';

        updateNavOffset();
        window.addEventListener('resize', updateNavOffset);

        if (scrollTarget) {
            window.addEventListener('load', () => {
                requestAnimationFrame(() => scrollToSection(`#${scrollTarget}`));
            });
        }
    </script>
</body>
</html>
