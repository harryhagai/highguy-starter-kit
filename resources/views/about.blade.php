@extends('layouts.app')

@section('title', 'About HighGuy Starter Kit')

@section('content')
    <div class="container py-5 mt-5">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h1 class="display-4 fw-bold mb-4">The Goal of <span class="text-primary">HighGuy</span></h1>
                <p class="lead text-muted mb-4">
                    HighGuy Starter Kit was created to fill the gap between complex Laravel frameworks and total beginners. It provides just enough code to be useful without overwhelming students.
                </p>
                <div class="d-flex align-items-center gap-3 mb-3">
                    <i class="bi bi-patch-check-fill text-primary h4"></i>
                    <span>Clean and readable Blade templates.</span>
                </div>
                <div class="d-flex align-items-center gap-3 mb-3">
                    <i class="bi bi-patch-check-fill text-primary h4"></i>
                    <span>Ready-to-use authentication workflow.</span>
                </div>
                <div class="d-flex align-items-center gap-3 mb-5">
                    <i class="bi bi-patch-check-fill text-primary h4"></i>
                    <span>Modern Dashboard with Sidebar navigation.</span>
                </div>
                <a href="/" class="btn btn-primary px-4 py-2">Back to Home</a>
            </div>
            <div class="col-lg-6 px-5 mt-5 mt-lg-0">
                <div class="bg-light p-5 rounded-4 shadow-sm border text-center">
                    <h3 class="fw-bold mb-3">Supporting IT Students</h3>
                    <p class="text-muted mb-0">
                        Our mission is to help students understand the real-world structure of Laravel applications so they can focus on building their unique features.
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
