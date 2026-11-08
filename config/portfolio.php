<?php

/*
|--------------------------------------------------------------------------
| Portfolio content
|--------------------------------------------------------------------------
| Edit your personal details here. Anything set to null shows as a
| "coming soon" placeholder instead of a made-up value.
*/

return [
    'name' => 'Jude Arcinue',
    'logo' => 'JA.',

    'nav' => [
        ['label' => 'Home', 'id' => 'home'],
        ['label' => 'About', 'id' => 'about'],
        ['label' => 'Skills', 'id' => 'skills'],
        ['label' => 'Projects', 'id' => 'projects'],
        ['label' => 'Education', 'id' => 'education'],
        ['label' => 'Contact', 'id' => 'contact'],
    ],

    'social' => [
        'github' => 'https://github.com/juarcinue-afk',
        'linkedin' => null,  // e.g. 'https://www.linkedin.com/in/your-profile'
    ],

    // Shown on the site AND where contact-form messages are emailed. Null = not shown, not emailed.
    'email' => 'juarcinue@gmail.com',

    // Put your photo at public/images/profile.jpg (or change the path). Null/missing = placeholder.
    'profile_image' => 'images/profile.jpg',

    // Put your CV at public/cv/Jude-Arcinue-CV.pdf. Missing file = button shows "coming soon".
    'cv' => 'cv/Jude-Arcinue-CV.pdf',

    'titles' => [
        'Aspiring Web Developer',
        'BSIT Student',
        'Future Software Developer',
        'Tech Enthusiast',
    ],

    'about' => [
        'intro' => "Hi! I'm Jude Arcinue, a Bachelor of Science in Information Technology student interested in web development and programming. I enjoy exploring technologies, developing applications, and improving my technical skills through hands-on projects. My goal is to become a skilled developer and create systems that can provide practical solutions to real-world problems.",
        'details' => [
            ['icon' => 'fa-user', 'label' => 'Name', 'value' => 'Jude Arcinue'],
            ['icon' => 'fa-graduation-cap', 'label' => 'Course', 'value' => 'Bachelor of Science in Information Technology'],
            ['icon' => 'fa-laptop-code', 'label' => 'Role', 'value' => 'Aspiring Web Developer'],
            ['icon' => 'fa-lightbulb', 'label' => 'Interests', 'value' => 'Web Development, Programming, Database Management, and Technology'],
        ],
    ],

    // Skills are listed by name only (no proficiency percentages).
    'skills' => [
        'Frontend' => [
            ['name' => 'HTML', 'icon' => 'fa-brands fa-html5'],
            ['name' => 'CSS', 'icon' => 'fa-brands fa-css3-alt'],
            ['name' => 'JavaScript', 'icon' => 'fa-brands fa-js'],
            ['name' => 'Bootstrap', 'icon' => 'fa-brands fa-bootstrap'],
        ],
        'Backend' => [
            ['name' => 'PHP', 'icon' => 'fa-brands fa-php'],
            ['name' => 'Laravel', 'icon' => 'fa-brands fa-laravel'],
        ],
        'Database' => [
            ['name' => 'MySQL', 'icon' => 'fa-solid fa-database'],
        ],
        'Tools' => [
            ['name' => 'Visual Studio Code', 'icon' => 'fa-solid fa-code'],
            ['name' => 'Git and GitHub', 'icon' => 'fa-brands fa-github'],
            ['name' => 'XAMPP', 'icon' => 'fa-solid fa-server'],
            ['name' => 'Cisco Packet Tracer', 'icon' => 'fa-solid fa-network-wired'],
        ],
    ],

    // Projects. To add a screenshot, save it in public/images/projects/ and set 'image'
    // (e.g. 'images/projects/happy-bean.jpg'). Set 'github' only when a repository exists.
    'projects' => [
        [
            'title' => 'Happy Bean POS System',
            'icon' => 'fa-solid fa-mug-hot',
            'description' => 'A point-of-sale system designed to manage product ordering, transactions, receipts, and administrative operations for a coffee shop.',
            'tech' => ['PHP', 'MySQL', 'HTML', 'CSS', 'JavaScript'],
            'image' => 'images/projects/happy-bean.jpg',
            'github' => null,
        ],
        [
            'title' => 'QR Code-Based Attendance Monitoring System',
            'icon' => 'fa-solid fa-qrcode',
            'description' => 'A school-related project designed to simplify attendance monitoring through QR code technology.',
            'tech' => ['PHP', 'MySQL', 'HTML', 'CSS', 'JavaScript'],
            'image' => null,
            'github' => null,
        ],
        [
            'title' => 'School VLAN Network Design',
            'icon' => 'fa-solid fa-network-wired',
            'description' => 'A networking project involving VLAN configuration, DHCP services, IP addressing, and connectivity testing using Cisco Packet Tracer.',
            'tech' => ['Cisco Packet Tracer', 'Networking', 'VLAN', 'DHCP'],
            'image' => 'images/projects/vlan-network.png',
            'github' => null,
        ],
        [
            'title' => 'Emotion Registration System',
            'icon' => 'fa-regular fa-face-smile',
            'description' => 'A registration system that allows users to submit information and select emotions, with administrative management features.',
            'tech' => ['PHP', 'MySQL', 'HTML', 'CSS', 'JavaScript'],
            'image' => 'images/projects/emotion-registration.jpg',
            'github' => null,
        ],
    ],

    // Education timeline. Replace the bracketed placeholders with your real details.
    'education' => [
        [
            'course' => 'Bachelor of Science in Information Technology',
            'school' => 'Computer Communication Development Institute',
            'year' => '2023 – 2026',
        ],
    ],
];
