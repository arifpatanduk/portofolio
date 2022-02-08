@extends('template.layout')
@section('title', 'Achievements - Arif Patanduk')
@section('page_content')

<div class="card mb-3">
    <div class="card-body py-3">
        <h3 class="mb-0">
            Achievements
        </h3>
    </div>
</div>

<div class="col-12 pb-4">


    <!-- Card -->
    <div class="card mb-4 card-hover">
        <div class="row g-0">
            <a class="col-12 col-md-12 col-xl-3 col-lg-3 bg-cover img-left-rounded"
                style="background-image: url({{ asset('images/achievement/fintech.jpg') }});" href="#">
                <img src="{{ asset('images/achievement/fintech.jpg') }}" alt="..."
                    class="img-fluid d-lg-none invisible">
            </a>
            <div class="col-lg-9 col-md-12 col-12">
                <!-- Card body -->
                <div class="card-body">
                    <h3 class="mb-2 text-truncate-line-2 "><a href="#" class="text-inherit">Finalist Kompetisi Inovasi
                            Digital 2020</a>
                    </h3>
                    <!-- List inline -->
                    <ul class="mb-5 list-inline">
                        <li class="list-inline-item"><i class="far fa-clock me-1"></i>November 2020
                        </li>
                        <li class="list-inline-item"><i class="far fa-flag me-1"></i>National Level
                        </li>
                    </ul>
                    <!-- Row -->
                    <div class="row align-items-center g-0">
                        <h5>UNS Fintech Center</h5>
                        <p>Sebelas Maret University</p>
                    </div>
                    <div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-4 card-hover">
        <div class="row g-0">
            <a class="col-12 col-md-12 col-xl-3 col-lg-3 bg-cover img-left-rounded"
                style="background-image: url({{ asset('images/achievement/technoporia.jpg') }});" href="#">
                <img src="{{ asset('images/achievement/technoporia.jpg') }}" alt="..."
                    class="img-fluid d-lg-none invisible">
            </a>
            <div class="col-lg-9 col-md-12 col-12">
                <!-- Card body -->
                <div class="card-body">
                    <h3 class="mb-2 text-truncate-line-2 "><a href="#" class="text-inherit">3rd Winner Business Plan</a>
                    </h3>
                    <!-- List inline -->
                    <ul class="mb-5 list-inline">
                        <li class="list-inline-item"><i class="far fa-clock me-1"></i>October 2020
                        </li>
                        <li class="list-inline-item"><i class="far fa-flag me-1"></i>National Level
                        </li>
                    </ul>
                    <!-- Row -->
                    <div class="row align-items-center g-0">
                        <h5>Technology Euphoria 2020</h5>
                        <p>Sriwjaya University</p>
                    </div>
                    <div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-4 card-hover">
        <div class="row g-0">
            <a class="col-12 col-md-12 col-xl-3 col-lg-3 bg-cover img-left-rounded"
                style="background-image: url({{ asset('images/achievement/jbc.jpg') }});" href="#">
                <img src="{{ asset('images/achievement/jbc.jpg') }}" alt="..." class="img-fluid d-lg-none invisible">
            </a>
            <div class="col-lg-9 col-md-12 col-12">
                <!-- Card body -->
                <div class="card-body">
                    <h3 class="mb-2 text-truncate-line-2 "><a href="#" class="text-inherit">3rd Winner Infographic</a>
                    </h3>
                    <!-- List inline -->
                    <ul class="mb-5 list-inline">
                        <li class="list-inline-item"><i class="far fa-clock me-1"></i>August 2020
                        </li>
                        <li class="list-inline-item"><i class="far fa-flag me-1"></i>National Level
                        </li>
                    </ul>
                    <!-- Row -->
                    <div class="row align-items-center g-0">
                        <h5>Java Business Competition</h5>
                        <p>Telkom University</p>
                    </div>
                    <div>
                    </div>
                </div>
            </div>
        </div>
    </div>




</div>

@endsection