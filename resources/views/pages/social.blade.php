@extends('template.layout')
@section('title', 'Social - Arif Patanduk')
@section('page_content')

<!-- Card -->
<div class="card">
    <!-- Card header -->
    <div class="card-header">
        <h3 class="mb-0">Social Profiles</h3>
    </div>
    <!-- Card body -->
    <div class="card-body">

        <!-- Instagram -->
        <div class="row mb-5">
            <div class="col-lg-3 col-md-4 col-12">
                <h5>
                    <i class="fe fe-instagram"></i>
                    Instagram
                </h5>
            </div>
            <div class="col-lg-9 col-md-8 col-12">
                <h4><a class="text-dark" target="_blank" href="https://www.instagram.com/arif.patanduk">
                        arif.patanduk
                    </a>
                </h4>
            </div>
        </div>
        <!-- LinkedIn -->
        <div class="row mb-5">
            <div class="col-lg-3 col-md-4 col-12">
                <h5>
                    <i class="fe fe-linkedin"></i>
                    LinkedIn
                </h5>
            </div>
            <div class="col-lg-9 col-md-8 col-12">
                <h4><a class="text-dark" target="_blank"
                        href="https://www.linkedin.com/in/arif-wiranata-patanduk-05b6471b0/">
                        Arif Wiranata Patanduk
                    </a>
                </h4>
                <small class="text-muted">linkedin.com/in/arif-wiranata-patanduk-05b6471b0</small>
            </div>
        </div>
        <!-- GitHub -->
        <div class="row mb-5">
            <div class="col-lg-3 col-md-4 col-12">
                <h5>
                    <i class="fe fe-github"></i>
                    GitHub
                </h5>
            </div>
            <div class="col-lg-9 col-md-8 col-12">
                <h4><a class="text-dark" target="_blank" href="https://github.com/arifpatanduk">
                        arifpatanduk
                    </a>
                </h4>
            </div>
        </div>
    </div>
</div>

@endsection