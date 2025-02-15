@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="row align-items-center min-vh-75">
    <div class="col-lg-6">
        <div class="mb-5">
            <span class="badge bg-primary mb-2">Backend Developer</span>
            <h1 class="display-4 mb-3">Hi, I'm Deep</h1>
            <p class="lead text-muted mb-4">
                Proficient in designing and developing scalable backend systems using Laravel and Django. Experienced in building RESTful APIs, managing relational databases with MySQL and PostgreSQL, and implementing secure authentication using OAuth and JWT. Skilled in optimizing queries for better performance and deploying applications with Docker and cloud platforms.
            </p>

            <div class="d-flex gap-3">
                <a href="{{ route('contact') }}" class="btn btn-primary px-4 py-2">
                    <i class="bi bi-envelope-fill me-2"></i>Get in Touch
                </a>
                <a href="{{ route('work') }}" class="btn btn-outline-primary px-4 py-2">
                    <i class="bi bi-eye-fill me-2"></i>View Projects
                </a>
            </div>
        </div>

        <div class="row g-4 mt-2">
            <div class="col-md-6">
                <div class="card border-0 bg-light">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-2">
                            <i class="bi bi-database-lock text-primary h4 mb-0 me-2"></i>
                            <h3 class="h5 mb-0">Scalable Database Architecture</h3>
                        </div>
                        <p class="text-muted mb-0">
                            Designing normalized database schemas, optimizing queries for high performance, and ensuring secure data handling with PostgreSQL and MySQL. Experienced in integrating databases with Laravel and Django ORM.
                        </p>
                    </div>
                </div>
            </div>

            <!-- <div class="col-md-6">
                <div class="card border-0 bg-light">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-2">
                            <i class="bi bi-cloud-arrow-up-fill text-primary h4 mb-0 me-2"></i>
                            <h3 class="h5 mb-0">Efficient API Integration</h3>
                        </div>
                        <p class="text-muted mb-0">
                            Developing high-performance RESTful and GraphQL APIs with authentication, rate limiting, and caching for scalability. Experienced in Laravel, Django, and third-party API integrations.
                        </p>
                    </div>
                </div>
            </div> -->

            <div class="col-md-6">
                <div class="card border-0 bg-light">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-2">
                            <i class="bi bi-lock-fill text-primary h4 mb-0 me-2"></i>
                            <h3 class="h5 mb-0">Advanced Security Practices</h3>
                        </div>
                        <p class="text-muted mb-0">
                            Implementing secure authentication (OAuth, JWT), role-based access control (RBAC), CSRF protection, and data encryption to safeguard applications. Experienced in Laravel security best practices and OWASP guidelines.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card border-0 bg-light">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-2">
                            <i class="bi bi-rocket-takeoff text-primary h4 mb-0 me-2"></i>
                            <h3 class="h5 mb-0">High-Performance Optimization</h3>
                        </div>
                        <p class="text-muted mb-0">
                            Enhancing application speed through database indexing, query optimization, caching (Redis, Memcached), and efficient code practices to ensure scalability and smooth user experience.
                        </p>
                    </div>
                </div>
            </div>

        </div>

        <div class="mt-5">
            <h3 class="h5 mb-4">Tech Stack</h3>
            <div class="d-flex flex-wrap gap-3">
                <span class="badge bg-light text-dark p-2">
                    <i class="bi bi-filetype-php text-primary me-1"></i> PHP / Laravel
                </span>
                <span class="badge bg-light text-dark p-2">
                    <i class="bi bi-filetype-py text-primary me-1"></i> Python / Django
                </span>
                <span class="badge bg-light text-dark p-2">
                    <i class="bi bi-database-fill text-primary me-1"></i> MySQL / PostgreSQL (Neon)
                </span>
                <span class="badge bg-light text-dark p-2">
                    <i class="bi bi-git text-primary me-1"></i> Git / GitHub Actions
                </span>
                <span class="badge bg-light text-dark p-2">
                    <i class="bi bi-filetype-html text-primary me-1"></i> HTML / Blade Templates
                </span>
                <span class="badge bg-light text-dark p-2">
                    <i class="bi bi-filetype-css text-primary me-1"></i> CSS / Tailwind CSS / Bootstrap
                </span>
                <span class="badge bg-light text-dark p-2">
                    <i class="bi bi-filetype-js text-primary me-1"></i> JavaScript / React
                </span>
                <span class="badge bg-light text-dark p-2">
                    <i class="bi bi-box text-primary me-1"></i> Docker
                </span>
                <span class="badge bg-light text-dark p-2">
                    <i class="bi bi-cloud text-primary me-1"></i> Google OAuth / Django AllAuth
                </span>
                <span class="badge bg-light text-dark p-2">
                    <i class="bi bi-cpu text-primary me-1"></i> Ollama AI
                </span>
            </div>
        </div>

    </div>
    <div class="col-lg-6 mt-5 mt-lg-0">
        <!-- <div class="position-relative">
            <img src="/images/profile.jpg" alt="Profile Image" class="img-fluid rounded-3 shadow-lg">
            <!-- <div class="position-absolute top-0 start-0 translate-middle bg-primary rounded-circle p-3 d-flex align-items-center justify-content-center" style="width: 100px; height: 100px;">
                <span class="text-white fw-bold">5+</span>
                <span class="text-white fs-6 ms-1">Years<br>Exp.</span>
            </div> -->
    </div>
</div>
</div>

<!-- Latest Projects Preview -->
<!-- <div class="mt-6">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="h3 mb-0">Latest Backend Projects</h2>
        <a href="{{ route('work') }}" class="text-decoration-none">View All Projects <i class="bi bi-arrow-right"></i></a>
    </div>
    <div class="row g-4">
        <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body">
                    <span class="badge bg-primary mb-2">API Development</span>
                    <h5 class="card-title">REST API for E-commerce</h5>
                    <p class="card-text text-muted">Developed a scalable RESTful API with authentication, rate limiting, and caching.</p>
                    <div class="mt-3">
                        <span class="badge bg-light text-dark">Laravel</span>
                        <span class="badge bg-light text-dark">MySQL</span>
                        <span class="badge bg-light text-dark">Redis</span>
                    </div>
                </div>
                <div class="card-footer bg-transparent border-0">
                    <a href="#" class="btn btn-outline-primary btn-sm">View Details</a>
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection