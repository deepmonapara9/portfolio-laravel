@extends('layouts.app')

@section('title', 'Work')

@section('content')
<h2 class="section-title">My Projects</h2>

<div class="row g-4">
   <!-- SaaS-Foundation Project -->
   <div class="col-md-6">
      <div class="card h-100 border-0 shadow-sm">
         <div class="card-body">
            <span class="badge bg-primary mb-2">SaaS</span>
            <h3 class="h5">SaaS-Foundation (Django)</h3>
            <p class="text-muted">
               A robust foundation for building scalable SaaS applications with Django, TailwindCSS, HTMX, and Redis.
            </p>

            <h6 class="mb-2">Key Features:</h6>
            <ul class="list-unstyled">
               <li><i class="bi bi-check2 text-primary me-2"></i>Multi-Tenant Architecture</li>
               <li><i class="bi bi-check2 text-primary me-2"></i>Role-Based Access Control (RBAC)</li>
               <li><i class="bi bi-check2 text-primary me-2"></i>Subscription Management</li>
               <li><i class="bi bi-check2 text-primary me-2"></i>Stripe Integration for Payments</li>
               <li><i class="bi bi-check2 text-primary me-2"></i>HTMX-powered Interactive UI</li>
            </ul>

            <div class="mt-3 mb-3">
               <span class="badge bg-light text-dark">Django</span>
               <span class="badge bg-light text-dark">PostgreSQL</span>
               <span class="badge bg-light text-dark">HTMX</span>
               <span class="badge bg-light text-dark">Redis</span>
               <span class="badge bg-light text-dark">TailwindCSS</span>
            </div>

            <a href="https://github.com/deepmonapara9/SaaS-Foundation" class="btn btn-primary btn-sm" target="_blank">
               <i class="bi bi-github me-2"></i>View Source
            </a>
         </div>
      </div>
   </div>


   <!-- Corona Vaccine Registration Project -->
   <div class="col-md-6">
      <div class="card h-100 border-0 shadow-sm">
         <div class="card-body">
            <span class="badge bg-primary mb-2">Web App</span>
            <h3 class="h5">Corona Vaccine Registration</h3>
            <p class="text-muted">
               A web application developed for users to register for COVID-19 vaccinations, manage their appointments, and track their vaccination status.
            </p>

            <h6 class="mb-2">Key Features:</h6>
            <ul class="list-unstyled">
               <li><i class="bi bi-check2 text-primary me-2"></i>User Registration & Authentication</li>
               <li><i class="bi bi-check2 text-primary me-2"></i>Appointment Scheduling</li>
               <li><i class="bi bi-check2 text-primary me-2"></i>Vaccination Status Tracking</li>
               <li><i class="bi bi-check2 text-primary me-2"></i>Admin Dashboard for Managing Appointments</li>
            </ul>

            <div class="mt-3 mb-3">
               <span class="badge bg-light text-dark">PHP</span>
               <span class="badge bg-light text-dark">MySQL</span>
               <span class="badge bg-light text-dark">Bootstrap</span>
            </div>

            <a href="https://github.com/deepmonapara9/Corona-Vaccine-Registration" class="btn btn-primary btn-sm" target="_blank">
               <i class="bi bi-github me-2"></i>View Source
            </a>
         </div>
      </div>
   </div>


   <!-- Blog Generator using OpenAI & AssemblyAI -->
   <div class="col-md-6">
      <div class="card h-100 border-0 shadow-sm">
         <div class="card-body">
            <span class="badge bg-primary mb-2">AI-Powered App</span>
            <h3 class="h5">AI Blog Generator</h3>
            <p class="text-muted">
               A web application that leverages OpenAI's API for AI-generated blog content and AssemblyAI for speech-to-text transcription, enabling seamless content creation.
            </p>

            <h6 class="mb-2">Key Features:</h6>
            <ul class="list-unstyled">
               <li><i class="bi bi-check2 text-primary me-2"></i>AI-generated blog content</li>
               <li><i class="bi bi-check2 text-primary me-2"></i>Speech-to-text transcription for blog input</li>
               <li><i class="bi bi-check2 text-primary me-2"></i>Customizable topics & tone</li>
               <li><i class="bi bi-check2 text-primary me-2"></i>SEO-friendly content creation</li>
               <li><i class="bi bi-check2 text-primary me-2"></i>Simple & intuitive UI</li>
            </ul>

            <div class="mt-3 mb-3">
               <span class="badge bg-light text-dark">Django</span>
               <span class="badge bg-light text-dark">OpenAI API</span>
               <span class="badge bg-light text-dark">AssemblyAI</span>
               <span class="badge bg-light text-dark">Bootstrap</span>
            </div>

            <a href="https://github.com/deepmonapara9/blog-generator" class="btn btn-primary btn-sm" target="_blank">
               <i class="bi bi-github me-2"></i>View Source
            </a>
         </div>
      </div>
   </div>

   <!-- StudyBud - Language Learning Community -->
   <div class="col-md-6">
      <div class="card h-100 border-0 shadow-sm">
         <div class="card-body">
            <span class="badge bg-primary mb-2">Community Learning</span>
            <h3 class="h5">StudyBud - Language Learning App</h3>
            <p class="text-muted">
               A Django-powered web application that allows users to create and join chat rooms for learning different languages. Features user authentication, real-time discussions, and profile management.
            </p>

            <h6 class="mb-2">Key Features:</h6>
            <ul class="list-unstyled">
               <li><i class="bi bi-check2 text-primary me-2"></i>Host and join language learning rooms</li>
               <li><i class="bi bi-check2 text-primary me-2"></i>Real-time discussions</li>
               <li><i class="bi bi-check2 text-primary me-2"></i>User authentication (Google OAuth)</li>
               <li><i class="bi bi-check2 text-primary me-2"></i>Profile customization</li>
               <li><i class="bi bi-check2 text-primary me-2"></i>PostgreSQL database integration</li>
            </ul>

            <div class="mt-3 mb-3">
               <span class="badge bg-light text-dark">Django</span>
               <span class="badge bg-light text-dark">PostgreSQL</span>
               <span class="badge bg-light text-dark">Google OAuth</span>
               <span class="badge bg-light text-dark">Bootstrap</span>
            </div>

            <a href="https://github.com/deepmonapara9/studybud" class="btn btn-primary btn-sm" target="_blank">
               <i class="bi bi-github me-2"></i>View Source
            </a>
         </div>
      </div>
   </div>

   <!-- Employee Management System -->
   <div class="col-md-6">
      <div class="card h-100 border-0 shadow-sm">
         <div class="card-body">
            <span class="badge bg-primary mb-2">Web Application</span>
            <h3 class="h5">Employee Management System</h3>
            <p class="text-muted">
               A React-based web application designed to manage employee tasks efficiently. It features distinct dashboards for admins and employees, facilitating seamless task assignment and tracking.
            </p>

            <h6 class="mb-2">Key Features:</h6>
            <ul class="list-unstyled">
               <li><i class="bi bi-check2 text-primary me-2"></i>Admin and Employee login</li>
               <li><i class="bi bi-check2 text-primary me-2"></i>Admin dashboard for employee overview and task assignment</li>
               <li><i class="bi bi-check2 text-primary me-2"></i>Employee dashboard for task management</li>
               <li><i class="bi bi-check2 text-primary me-2"></i>Data persistence using localStorage</li>
               <li><i class="bi bi-check2 text-primary me-2"></i>Responsive design for various devices</li>
            </ul>

            <div class="mt-3 mb-3">
               <span class="badge bg-light text-dark">React</span>
               <span class="badge bg-light text-dark">JavaScript</span>
               <span class="badge bg-light text-dark">Bootstrap</span>
               <span class="badge bg-light text-dark">Vite</span>
            </div>

            <a href="https://github.com/deepmonapara9/ems" class="btn btn-primary btn-sm" target="_blank">
               <i class="bi bi-github me-2"></i>View Source
            </a>
         </div>
      </div>
   </div>

</div>

<!-- Skills Summary -->
<div class="mt-5">
   <h3 class="h4 mb-4">Technologies Used Across Projects</h3>
   <div class="card border-0 bg-light">
      <div class="card-body">
         <div class="row">
            <div class="col-md-4">
               <h5 class="h6 mb-3">Backend</h5>
               <ul class="list-unstyled">
                  <li><i class="bi bi-check2-circle text-primary me-2"></i>Python</li>
                  <li><i class="bi bi-check2-circle text-primary me-2"></i>PHP 7.4+</li>
                  <li><i class="bi bi-check2-circle text-primary me-2"></i>Node.js</li>
                  <li><i class="bi bi-check2-circle text-primary me-2"></i>FastAPI</li>
                  <li><i class="bi bi-check2-circle text-primary me-2"></i>MySQL & PostgreSQL</li>
                  <li><i class="bi bi-check2-circle text-primary me-2"></i>RESTful APIs & GraphQL</li>
               </ul>
            </div>
            <div class="col-md-4">
               <h5 class="h6 mb-3">Frameworks</h5>
               <ul class="list-unstyled">
                  <li><i class="bi bi-check2-circle text-primary me-2"></i>Django</li>
                  <li><i class="bi bi-check2-circle text-primary me-2"></i>React.js</li>
                  <li><i class="bi bi-check2-circle text-primary me-2"></i>Laravel</li>
                  <li><i class="bi bi-check2-circle text-primary me-2"></i>Express.js</li>
               </ul>
            </div>
            <div class="col-md-4">
               <h5 class="h6 mb-3">Frontend</h5>
               <ul class="list-unstyled">
                  <li><i class="bi bi-check2-circle text-primary me-2"></i>HTML5 / CSS3</li>
                  <li><i class="bi bi-check2-circle text-primary me-2"></i>JavaScript (ES6+)</li>
                  <li><i class="bi bi-check2-circle text-primary me-2"></i>Bootstrap</li>
                  <li><i class="bi bi-check2-circle text-primary me-2"></i>Tailwind CSS</li>
               </ul>
            </div>
            <div class="col-md-4">
               <h5 class="h6 mb-3">Tools & DevOps</h5>
               <ul class="list-unstyled">
                  <li><i class="bi bi-check2-circle text-primary me-2"></i>Git & GitHub</li>
                  <li><i class="bi bi-check2-circle text-primary me-2"></i>GitHub Actions</li>
                  <li><i class="bi bi-check2-circle text-primary me-2"></i>Docker & Docker Compose</li>
                  <li><i class="bi bi-check2-circle text-primary me-2"></i>Postman</li>
                  <li><i class="bi bi-check2-circle text-primary me-2"></i>VS Code</li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</div>

@endsection