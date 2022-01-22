@extends('template.layout')

@section('page_content')

<!-- Card -->
<div class="card">
    <!-- Card header -->
    <div class="card-header">
        <h3 class="mb-0">Skills</h3>
    </div>
    <!-- Card body -->
    <div class="card-body">
        <ul class="list-group list-group-flush">

            <!-- List group item -->
            <li class="list-group-item px-0 pb-3 pt-0">
                <div class="row">
                    <div class="col-2 col-md-1">
                        <img alt="avatar" src="{{ asset('images/skills/php.svg') }}" class="rounded" />
                    </div>
                    <div class="col-8 col-md-9">
                        <div>
                            <h4 class="mb-0 fw-bold">PHP</h4>
                            <p class="mb-0 ">
                                Laravel,
                                laravel-livewire,
                                CodeIgniter
                            </p>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="d-flex justify-content-end"><span class="badge bg-gray-900 me-4">Advanced</span>
                        </div>
                    </div>
                </div>
            </li>

            <li class="list-group-item px-0 py-3">
                <div class="row">
                    <div class="col-2 col-md-1">
                        <img alt="avatar" src="{{ asset('images/skills/html.svg') }}" class="rounded" />
                    </div>
                    <div class="col-8 col-md-9">
                        <div>
                            <h4 class="mb-0 fw-bold">HTML & CSS</h4>
                            <p class="mb-0 ">
                                Bootstrap 5
                            </p>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="d-flex justify-content-end"><span class="badge bg-gray-700 me-4">Intermediate</span>
                        </div>
                    </div>
                </div>
            </li>

            <li class="list-group-item px-0 py-3">
                <div class="row">
                    <div class="col-2 col-md-1">
                        <img alt="avatar" src="{{ asset('images/skills/js.svg') }}" class="rounded" />
                    </div>
                    <div class="col-8 col-md-9">
                        <div>
                            <h4 class="mb-0 fw-bold">Javascript</h4>
                            <p class="mb-0 ">
                                ReactJS, AlpineJS
                            </p>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="d-flex justify-content-end"><span class="badge bg-gray-500 me-4">Beginner</span>
                        </div>
                    </div>
                </div>
            </li>

            <li class="list-group-item px-0 py-3">
                <div class="row">
                    <div class="col-2 col-md-1">
                        <img alt="avatar" src="{{ asset('images/skills/ai.svg') }}" class="rounded" />
                    </div>
                    <div class="col-8 col-md-9">
                        <div>
                            <h4 class="mb-0 fw-bold">Illustrator</h4>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="d-flex justify-content-end"><span class="badge bg-gray-700 me-4">Intermediate</span>
                        </div>
                    </div>
                </div>
            </li>

            <li class="list-group-item px-0 py-3">
                <div class="row">
                    <div class="col-2 col-md-1">
                        <img alt="avatar" src="{{ asset('images/skills/ae.svg') }}" class="rounded" />
                    </div>
                    <div class="col-8 col-md-9">
                        <div>
                            <h4 class="mb-0 fw-bold">After Effects</h4>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="d-flex justify-content-end"><span class="badge bg-gray-700 me-4">Intermediate</span>
                        </div>
                    </div>
                </div>
            </li>

        </ul>
    </div>
</div>

@endsection