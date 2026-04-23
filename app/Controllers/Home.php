<?php

namespace App\Controllers;

use Config\Services;

class Home extends BaseController
{
    private const FALLBACK_PATH = '/';

    public function index()
    {
        return view('portfolio', $this->portfolioData());
    }

    public function setLanguage(string $locale)
    {
        $supportedLocales = config('App')->supportedLocales;
        $locale = strtolower($locale);

        if (! in_array($locale, $supportedLocales, true)) {
            $locale = config('App')->defaultLocale;
        }

        session()->set('site_locale', $locale);

        $referer = previous_url();

        if (is_string($referer) && $referer !== '') {
            return redirect()->to($referer)->withCookies();
        }

        return redirect()->to(self::FALLBACK_PATH)->withCookies();
    }

    public function sendMessage()
    {
        $rules = [
            'name'    => 'required|min_length[2]|max_length[100]',
            'email'   => 'required|valid_email|max_length[150]',
            'subject' => 'required|min_length[3]|max_length[150]',
            'message' => 'required|min_length[10]|max_length[2000]',
        ];

        if (! $this->validate($rules)) {
            return redirect()->to($this->resolveReturnUrl())
                ->withInput()
                ->with('contact_error', lang('Portfolio.contactError'))
                ->with('scroll_to', 'contact');
        }

        $email = Services::email();
        $config = config('Email');
        $portfolio = $this->portfolioData();
        $recipient = $config->recipients !== '' ? $config->recipients : $portfolio['contact']['email'];

        $name = trim((string) $this->request->getPost('name'));
        $senderEmail = trim((string) $this->request->getPost('email'));
        $subject = trim((string) $this->request->getPost('subject'));
        $message = trim((string) $this->request->getPost('message'));

        $email->setFrom($config->fromEmail, $config->fromName ?: 'Portfolio Contact Form');
        $email->setTo($recipient);
        $email->setReplyTo($senderEmail, $name);
        $email->setSubject(lang('Portfolio.email.subjectPrefix') . ': ' . $subject);
        $email->setMessage(view('emails/contact_message', [
            'name'        => $name,
            'email'       => $senderEmail,
            'subjectLine' => $subject,
            'messageBody' => $message,
        ]));

        if (! $email->send()) {
            log_message('error', 'Portfolio contact email failed: {error}', [
                'error' => print_r($email->printDebugger(['headers']), true),
            ]);

            return redirect()->to($this->resolveReturnUrl())
                ->withInput()
                ->with('contact_error', lang('Portfolio.contactSendError'))
                ->with('scroll_to', 'contact');
        }

        return redirect()->to($this->resolveReturnUrl())
            ->with('contact_success', lang('Portfolio.contactSuccess'))
            ->with('scroll_to', 'contact');
    }

    private function resolveReturnUrl(): string
    {
        $previousUrl = previous_url();

        if (is_string($previousUrl) && $previousUrl !== '') {
            return $previousUrl;
        }

        return self::FALLBACK_PATH;
    }

    private function portfolioData(): array
    {
        $locale = service('request')->getLocale();
        $isMalay = $locale === 'ms';

        return [
            'title' => 'Portfolio | Umairah Sabri',
            'currentLocale' => $locale,
            'name'  => 'Umairah Sabri',
            'subtitle' => $isMalay ? 'Pelajar Teknologi Maklumat' : 'Information Technology Student',
            'heroText' => $isMalay
                ? 'Seorang pelajar IT yang meminati pengaturcaraan, dengan minat yang mendalam dalam mereka bentuk antara muka yang mesra pengguna dan minat yang mendalam dalam dunia data. Saya amat berminat dengan bagaimana data boleh diubah menjadi wawasan yang bermakna sambil mencipta reka bentuk yang bersih dan intuitif. Saya telah membangunkan kemahiran saya melalui projek akademik, terutamanya bekerja sebagai pembangun full stack, membina kedua-dua aplikasi front-end dan back-end. Saya bersemangat untuk terus belajar dan berkembang dalam bidang teknologi.'
                : 'An IT student who enjoys coding, with a strong passion for designing user-friendly interfaces and a keen interest in the world of data. I am particularly interested in how data can be transformed into meaningful insights while creating clean and intuitive designs. I have been developing my skills through academic projects, mainly working as a full stack developer, building both front-end and back-end applications. I am eager to continue learning and growing in the tech field.',
            'about' => [
                'fullName' => 'Nur Umairah Binti Mohd Sabri',
                'education' => $isMalay ? 'Diploma Teknologi Maklumat (Teknologi Digital)' : 'Diploma in Teknologi Maklumat (Teknologi Digital)',
                'track' => $isMalay ? 'Pembangunan Perisian & Aplikasi (SAD)' : 'Software & Application Development (SAD)',
                'institution' => 'Politeknik Balik Pulau',
                'cgpa' => '3.84',
                'achievement' => $isMalay ? 'Menerima Anugerah Ketua Jabatan (AKJ) pada setiap semester' : 'Receive Anugerah Ketua Jabatan (AKJ) Every Semester',
                'internship' => 'Pusat Teknologi Digital (DigitalUKM), Universiti Kebangsaan Malaysia (UKM)',
                'vision' => $isMalay ? 'Memahami Makna Dunia Binari' : 'Making Sense of the Binary World',
                'photo' => 'https://images.unsplash.com/photo-1524504388940-b1c1722653e1?auto=format&fit=crop&w=640&q=80'
            ],
            'skills' => [
                [
                    'key' => 'programming',
                    'title' => $isMalay ? 'Pengaturcaraan' : 'Programming',
                    'items' => 'C++, Java, Python, HTML, CSS, JavaScript & PHP (CodeIgniter 4)'
                ],
                [
                    'key' => 'database',
                    'title' => 'Database',
                    'items' => 'MySQL & Microsoft Access'
                ],
                [
                    'key' => 'data-software',
                    'title' => $isMalay ? 'Data & Perisian' : 'Data & Software',
                    'items' => 'Power BI, XAMPP, Visual Studio .NET & Android Studio'
                ],
                [
                    'key' => 'network',
                    'title' => $isMalay ? 'Rangkaian' : 'Network',
                    'items' => 'Cisco Packet Tracer'
                ],
                [
                    'key' => 'multimedia-design',
                    'title' => $isMalay ? 'Multimedia & Reka Bentuk' : 'Multimedia & Design',
                    'items' => 'Adobe Illustrator, Photoshop, Animate, Premiere Pro, Audition, CapCut & Canva'
                ],
                [
                    'key' => 'productivity',
                    'title' => $isMalay ? 'Produktiviti' : 'Productivity',
                    'items' => $isMalay ? 'Microsoft Office (Word, Excel, PowerPoint)' : 'Microsoft Office (Word, Excel, PowerPoint)'
                ]
            ],
            'credentials' => [
                [
                    'title' => 'IBM SkillsBuild Data Analytics Certificate',
                    'image' => 'IBMdataanalytics',
                    'provider' => lang('Portfolio.credentials.ibmProvider'),
                    'description' => lang('Portfolio.credentials.diplomaDescription'),
                ],
                [
                    'title' => 'Artificial Intelligence Fundamentals',
                    'image' => 'IBMaifundamentals',
                    'provider' => lang('Portfolio.credentials.ibmProvider'),
                    'description' => lang('Portfolio.credentials.diplomaDescription'),
                ],
                [
                    'title' => 'Cloud Computing Fundamentals',
                    'image' => 'IBMcloudcomputing',
                    'provider' => lang('Portfolio.credentials.ibmProvider'),
                    'description' => lang('Portfolio.credentials.diplomaDescription'),
                ],
                [
                    'title' => 'Cybersecurity Fundamentals',
                    'image' => 'IBMcybersecurityfundamentals',
                    'provider' => lang('Portfolio.credentials.ibmProvider'),
                    'description' => lang('Portfolio.credentials.diplomaDescription'),
                ],
                [
                    'title' => 'Explore Emerging Tech',
                    'image' => 'IBMemergingtech',
                    'provider' => lang('Portfolio.credentials.ibmProvider'),
                    'description' => lang('Portfolio.credentials.diplomaDescription'),
                ],
                [
                    'title' => 'The Comprehensive SQL Course',
                    'image' => 'udemy',
                    'provider' => lang('Portfolio.credentials.udemyProvider'),
                    'description' => lang('Portfolio.credentials.internshipDescription'),
                ],
                [
                    'title' => 'CodeIgniter for Beginners: Build a Complete Web Application',
                    'image' => 'udemy',
                    'provider' => lang('Portfolio.credentials.udemyProvider'),
                    'description' => lang('Portfolio.credentials.internshipDescription'),
                ],
                [
                    'title' => 'CodeIgniter 4 - Beginner to Expert. The Best PHP Framework',
                    'image' => 'udemy',
                    'provider' => lang('Portfolio.credentials.udemyProvider'),
                    'description' => lang('Portfolio.credentials.internshipDescription'),
                ],
                [
                    'title' => 'The Git & GitHub Bootcamp',
                    'image' => 'udemy',
                    'provider' => lang('Portfolio.credentials.udemyProvider'),
                    'description' => lang('Portfolio.credentials.internshipDescription'),
                ],
                [
                    'title' => 'How To Elicit, Write & Analyze Requirements in The AI Era',
                    'image' => 'udemy',
                    'provider' => lang('Portfolio.credentials.udemyProvider'),
                    'description' => lang('Portfolio.credentials.internshipDescription'),
                ]
            ],
            'projects' => [
                [
                    'title' => 'SECURE LICENSE ACTIVATION VIA ID DEVICE SYSTEM',
                    'subtitle' => $isMalay ? 'Projek FYP' : 'FYP Project',
                    'github_link' => 'https://github.com/ouumai/FYP-Secure-License-Activation-System.git',
                    'overview' => $isMalay ? 'Sistem pelesenan berkunci perkakasan yang direka untuk pembangun perisian berskala kecil bagi mengelakkan cetak rompak perisian tanpa memerlukan sambungan internet.' : 'A hardware-locked licensing system designed for small-scale software developers to prevent software piracy without requiring an internet connection.',
                    'tech' => 'Python, custom Tkinter, SQLite',
                    'notes' => $isMalay ? 'Menggunakan penyulitan AES untuk mengikat kunci lesen kepada pengenal perkakasan seperti nombor siri motherboard atau alamat MAC.' : 'Utilizes AES encryption to bind license keys to hardware identifiers such as motherboard serial numbers or MAC addresses.'
                ],
                [
                    'title' => 'SISTEM PERKHIDMATAN ICT (ICT4U)',
                    'subtitle' => $isMalay ? 'Projek Latihan Industri' : 'Internship Project',
                    'github_link' => 'https://github.com/ouumai/ICT4U.git',
                    'highlight' => $isMalay ? 'Disiapkan di bawah penyeliaan Encik Noorulfaiz daripada jabatan Pengurusan Projek Aplikasi (PMO Aplikasi) di Pusat Teknologi Digital (DigitalUKM).' : 'Completed under the supervision of Encik Noorulfaiz from department of Pengurusan Projek Aplikasi (PMO Aplikasi) at Pusat Teknologi Digital (DigitalUKM).',
                    'overview' => $isMalay ? 'Sistem perkhidmatan ICT yang dibangunkan untuk Pusat Teknologi Digital (DigitalUKM) bagi mengurus aliran kerja aplikasi semasa, dokumentasi dan pautan maklumat perkhidmatan.' : 'An ICT service system developed for Pusat Teknologi Digital (DigitalUKM) to manage current application workflows, documentation and service information links.',
                    'tech' => 'PHP 8.4, CodeIgniter 4.7, MVC Architecture, MySQL',
                    'notes' => $isMalay ? 'Menambah baik sistem legasi dengan melaksanakan autentikasi selamat menggunakan CodeIgniter Shield, aliran kerja tak segerak interaktif menggunakan AJAX dan SweetAlert, serta papan pemuka analitik untuk pemantauan masa nyata.' : 'Improved a legacy system by implementing secure authentication with CodeIgniter Shield, interactive asynchronous workflows using AJAX and SweetAlert, and an analytical dashboard for real-time monitoring.'
                ]
            ],
            'contact' => [
                'email' => 'n.umairahsabri@gmail.com',
                'phone' => '010-845 3088',
                'location' => 'Beranang, Selangor'
            ],
            'socials' => [
                [
                    'name' => 'LinkedIn',
                    'url' => 'https://linkedin.com/in/umairah',
                    'icon' => 'linkedin'
                ],
                [
                    'name' => 'GitHub',
                    'url' => 'https://github.com/umairah',
                    'icon' => 'github'
                ],
                [
                    'name' => 'Kaggle',
                    'url' => 'https://kaggle.com',
                    'icon' => 'sparkles'
                ]
            ]
        ];
    }
}
