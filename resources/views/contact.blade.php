@extends('layouts.app')

@section('title', 'Contact')

@section('content')
<h2 class="section-title">Contact Me</h2>

<div class="row">
   <div class="col-lg-6 mb-4">
      <div class="card">
         <div class="card-body">
            <h3 class="h4 mb-4">Contact Information</h3>
            <p><strong>Email:</strong> monaparadeep@gmail.com</p>
            <p><strong>Phone:</strong> +91 9687637398</p>
            <p><strong>Location:</strong> Rajkot, India</p>
            <div class="mt-4">
               <h4 class="h5">Social Media:</h4>
               <div class="d-flex gap-3 mt-2">
                  <a href="https://linkedin.com/in/deepmonapara" class="text-dark text-decoration-none" target="_blank"><i class="bi bi-linkedin" ></i> LinkedIn</a>
                  <a href="https://github.com/deepmonapara9/" class="text-dark text-decoration-none" target="_blank"><i class="bi bi-github"></i> GitHub</a>
               </div>

            </div>
         </div>
      </div>
   </div>

   <div class="col-lg-6">
      <div class="card">
         <div class="card-body">
            <h3 class="h4 mb-4">Send Message</h3>
            <form>
               <div class="mb-3">
                  <label for="name" class="form-label">Name</label>
                  <input type="text" class="form-control" id="name" required>
               </div>
               <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control" id="email" required>
               </div>
               <div class="mb-3">
                  <label for="message" class="form-label">Message</label>
                  <textarea class="form-control" id="message" rows="5" required></textarea>
               </div>
               <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
         </div>
      </div>
   </div>
</div>
@endsection