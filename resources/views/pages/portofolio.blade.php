@extends('template.layout')
@section('title', 'Portofolio - Arif Patanduk')
@section('page_content')

<div class="card mb-3">
    <div class="card-body py-3">
        <h3 class="mb-0">
            My Portofolio
        </h3>
    </div>
</div>

<div class="row">

    {{-- gandewalana --}}
    <div class="col-xl-4 col-lg-4 col-md-6 col-12 mb-3">
        <!-- Card -->
        <div class="card card-hover ">
            <a href="https://gandewalana.id/" target="_blank">
                <img src="{{ asset('images/portofolio/gandewalana.jpg') }}" class="img-fluid  rounded-top-md"
                    alt=""></a>
            <!-- Card Body -->
            <div class="card-body">
                <a href="https://gandewalana.id/" target="_blank" class="badge bg-primary mb-3">Web Application</a>

                <div class="accordion" id="accordion1">
                    <div id="heading1">
                        <a href="#" class="d-flex align-items-center text-inherit text-decoration-none active"
                            data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true"
                            aria-controls="collapse1">

                            <div class="me-auto">
                                <h3>
                                    Gandewalana
                                </h3>
                            </div>
                        </a>

                    </div>
                    <div id="collapse1" class="collapse" aria-labelledby="heading1" data-bs-parent="#accordion1">
                        <p>
                            Develop an information system for the management of the Gandewalana tourist area which
                            includes
                            article
                            post, advertisements, product information, and sales.
                        </p>

                    </div>
                </div>

                <p class="mb-1">
                    <i class="fe fe-calendar"></i> Nov 2021 - Jan 2022
                </p>

                <div class="align-items-center g-0 mt-4">
                    <span class="badge bg-danger ">Laravel-livewire</span>
                    <span class="badge bg-info ">Bootstrap 5</span>
                    <span class="badge bg-dark ">AWS S3</span>
                </div>
            </div>
        </div>
    </div>

    {{-- wiyata --}}
    <div class="col-xl-4 col-lg-4 col-md-6 col-12 mb-3">
        <!-- Card -->
        <div class="card card-hover ">
            <a href="https://wiyata.id/" target="_blank">
                <img src="{{ asset('images/portofolio/wiyata.jpg') }}" class="img-fluid  rounded-top-md" alt=""></a>
            <!-- Card Body -->
            <div class="card-body">
                <a href="https://wiyata.id/" target="_blank" class="badge bg-primary mb-3">Web Application</a>

                <div class="accordion" id="accordion2">
                    <div id="heading2">
                        <a href="#" class="d-flex align-items-center text-inherit text-decoration-none active"
                            data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="true"
                            aria-controls="collapse2">

                            <div class="me-auto">
                                <h3>
                                    WIYATA ACADEMY
                                </h3>
                            </div>
                        </a>

                    </div>
                    <div id="collapse2" class="collapse" aria-labelledby="heading2" data-bs-parent="#accordion2">
                        <p>
                            Creating web applications with the main features of large video uploads, streaming, live
                            chat, and integration with payment gateways.
                        </p>

                    </div>
                </div>

                <p class="mb-1">
                    <i class="fe fe-calendar"></i> June - Dec 2021
                </p>

                <div class="align-items-center g-0 mt-4">
                    <span class="badge bg-danger ">Laravel-livewire</span>
                    <span class="badge bg-success">SvelteJS</span>
                    <span class="badge bg-info ">Bootstrap 5</span>
                    <span class="badge bg-dark ">AWS S3</span>
                </div>
            </div>
        </div>
    </div>

    {{-- pkm --}}
    <div class="col-xl-4 col-lg-4 col-md-6 col-12 mb-3">
        <!-- Card -->
        <div class="card card-hover ">
            <a href="https://pkm.integrasi.uns.ac.id/" target="_blank">
                <img src="{{ asset('images/portofolio/pkm.jpg') }}" class="img-fluid  rounded-top-md" alt=""></a>
            <!-- Card Body -->
            <div class="card-body">
                <a href="https://pkm.integrasi.uns.ac.id/" target="_blank" class="badge bg-primary mb-3">Web
                    Application</a>

                <div class="accordion" id="accordion3">
                    <div id="heading3">
                        <a href="#" class="d-flex align-items-center text-inherit text-decoration-none active"
                            data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="true"
                            aria-controls="collapse3">

                            <div class="me-auto">
                                <h3>
                                    PKM UNS
                                </h3>
                            </div>
                        </a>

                    </div>
                    <div id="collapse3" class="collapse" aria-labelledby="heading3" data-bs-parent="#accordion3">
                        <p>
                            An information system that manages the Program Kreativitas Mahasiswa at the UNS level which
                            includes the registration process, plotting reviewers, assessments, selections and
                            announcements, and is integrated with single sign at UNS.
                        </p>

                    </div>
                </div>

                <p class="mb-1">
                    <i class="fe fe-calendar"></i> March - Dec 2021
                </p>

                <div class="align-items-center g-0 mt-4">
                    <span class="badge bg-danger ">Laravel-livewire</span>
                    <span class="badge bg-info ">Bootstrap 5</span>
                    <span class="badge bg-dark ">AWS S3</span>
                    <span class="badge bg-secondary">Single sign on</span>
                </div>
            </div>
        </div>
    </div>


</div>

@endsection