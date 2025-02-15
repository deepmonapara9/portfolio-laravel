<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        $education = [
            [
                'degree' => 'Bachelor of Computer Applications',
                'institution' => 'Atmiya University',
                'year' => '2021-2024',
                'score' => '8.0 CGPA'
            ],
            [
                'degree' => 'Master of Computer Applications',
                'institution' => 'Atmiya University',
                'year' => '2024 - Present',
                'score' => 'Current CGPA: 9.1'
            ],

        ];

        return view('about', compact('education'));
    }

    public function work()
    {
        $projects = [
            [
                'title' => 'E-commerce Platform',
                'description' => 'Built a full-stack e-commerce platform using Laravel and Vue.js',
                'image' => 'projects/ecommerce.jpg',
                'link' => 'https://github.com/username/project'
            ],
            // Add more projects
        ];

        return view('work', compact('projects'));
    }

    public function skills()
    {
        $skills = [
            'Frontend' => ['HTML', 'CSS', 'JavaScript', 'React'],
            'Backend' => ['PHP', 'Laravel', 'Python', 'Django', 'Node.js'],
            'Database' => ['MySQL', 'PostgreSQL', 'MongoDB'],
            'DevOps & Tools' => ['Docker', 'Git', 'GitHub Actions', 'Linux'],
        ];

        return view('skills', compact('skills'));
    }


    public function contact()
    {
        return view('contact');
    }
}
