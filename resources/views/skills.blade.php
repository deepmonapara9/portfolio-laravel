@extends('layouts.app')

@section('title', 'Skills')

@section('content')
<h2 class="section-title">Technical Skills</h2>

<div class="row">
    @foreach($skills as $category => $skillList)
    <div class="col-md-4 mb-4">
        <div class="card h-100">
            <div class="card-header bg-primary text-white">
                <h3 class="h5 mb-0">{{ $category }}</h3>
            </div>
            <div class="card-body">
                <ul class="list-unstyled">
                    @foreach($skillList as $skill)
                    <li class="mb-2">
                        <div class="d-flex align-items-center">
                            <span class="me-2">⚡</span>
                            {{ $skill }}
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection