<?php

namespace App\Controllers;

use Config\Services;

class Home extends BaseController
{
    public function index()
    {
        return view('portfolio', $this->portfolioData());
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
            return redirect()->to(site_url('/'))
                ->withInput()
                ->with('contact_error', 'Please complete the form correctly before sending your message.')
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
        $email->setSubject('Portfolio Contact: ' . $subject);
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

            return redirect()->to(site_url('/'))
                ->withInput()
                ->with('contact_error', 'Your message could not be sent right now. Please check the SMTP settings and try again.')
                ->with('scroll_to', 'contact');
        }

        return redirect()->to(site_url('/'))
            ->with('contact_success', 'Your message has been sent successfully.')
            ->with('scroll_to', 'contact');
    }

    private function portfolioData(): array
    {
        return [
            'title' => 'Portfolio | Umairah Sabri',
            'name'  => 'Umairah Sabri',
            'subtitle' => 'Information Technology Student',
            'heroText' => 'An IT student who enjoys coding, with a strong passion for designing user-friendly interfaces and a keen interest in the world of data. I am particularly interested in how data can be transformed into meaningful insights while creating clean and intuitive designs. I have been developing my skills through academic projects, mainly working as a full stack developer, building both front-end and back-end applications. I am eager to continue learning and growing in the tech field.',
            'about' => [
                'fullName' => 'Nur Umairah Binti Mohd Sabri',
                'education' => 'Diploma Teknologi Maklumat (Teknologi Digital)',
                'institution' => 'Politeknik Balik Pulau',
                'cgpa' => '3.84',
                'achievement' => 'Receive Anugerah Ketua Jabatan (AKJ) Every Semester',
                'photo' => 'https://images.unsplash.com/photo-1524504388940-b1c1722653e1?auto=format&fit=crop&w=640&q=80'
            ],
            'skills' => [
                [
                    'title' => 'Programming',
                    'items' => 'C++, Java, Python, HTML, CSS, JavaScript & PHP (CodeIgniter 4)'
                ],
                [
                    'title' => 'Database',
                    'items' => 'MySQL & Microsoft Access'
                ],
                [
                    'title' => 'Data & Software',
                    'items' => 'Power BI, XAMPP, Visual Studio .NET & Android Studio'
                ],
                [
                    'title' => 'Network',
                    'items' => 'Cisco Packet Tracer'
                ],
                [
                    'title' => 'Multimedia & Design',
                    'items' => 'Adobe Illustrator, Photoshop, Animate, Premiere Pro, Audition, Capcut & Canva'
                ],
                [
                    'title' => 'Productivity',
                    'items' => 'Microsoft Office (Word, Excel, PowerPoint)'
                ]
            ],
            'credentials' => [
                'IBM SkillsBuild Data Analytics Certificate',
                'Artificial Intelligence Fundamentals',
                'Cloud Computing Fundamentals',
                'Cybersecurity Fundamentals',
                'Explore Emerging Tech'
            ],
            'projects' => [
                [
                    'title' => 'SECURE LICENSE ACTIVATION VIA ID DEVICE SYSTEM',
                    'subtitle' => 'FYP Project',
                    'overview' => 'A hardware-locked licensing system designed for small-scale software developers to prevent software piracy without requiring an internet connection.',
                    'tech' => 'Python, custom Tkinter, SQLite',
                    'notes' => 'Utilizes AES encryption to bind license keys to hardware identifiers such as motherboard serial numbers or MAC addresses.'
                ],
                [
                    'title' => 'SISTEM PERKHIDMATAN ICT (ICT4U)',
                    'subtitle' => 'Internship Project',
                    'highlight' => 'Completed under the supervision of Encik Noorulfaiz from department of Pengurusan Projek Aplikasi (PMO Aplikasi) at Pusat Teknologi Digital (DigitalUKM).',
                    'overview' => 'An ICT service system developed for Pusat Teknologi Digital (DigitalUKM) to manage current application workflows, documentation and service information links.',
                    'tech' => 'PHP 8.4, CodeIgniter 4.7, MVC Architecture & MySQL',
                    'notes' => 'Improved a legacy system by implementing secure authentication with CodeIgniter Shield, interactive asynchronous workflows using AJAX and SweetAlert, and an analytical dashboard for real-time monitoring.'
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
