@extends('layouts.app')

@section('title', 'About')

@section('content')
<h2 class="section-title">About Me</h2>

<div class="row">
    <div class="col-lg-6">
        <h3>Personal Details</h3>
        <div class="card mb-4">
            <div class="card-body">
                <p><strong>Name:</strong> Deep Monapara</p>
                <p><strong>Location:</strong> Rajkot</p>
                <p><strong>Email:</strong> monaparadeep@gmail.com</p>
                <p><strong>Languages:</strong> English, Hindi, Gujarati</p>
            </div>
        </div>
    </div>
    
    <div class="col-lg-6">
        <h3>Education</h3>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>Degree</th>
                        <th>Institution</th>
                        <th>Year</th>
                        <th>Score</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($education as $edu)
                    <tr>
                        <td>{{ $edu['degree'] }}</td>
                        <td>{{ $edu['institution'] }}</td>
                        <td>{{ $edu['year'] }}</td>
                        <td>{{ $edu['score'] }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection