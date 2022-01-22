@extends('template.layout')

@section('title', 'Education - Arif Patanduk')

@section('page_content')

<!-- Card -->
<div class="card">
    <!-- Card header -->
    <div class="card-header">
        <h3 class="mb-0">Educations</h3>
    </div>
    <!-- Card body -->
    <div class="card-body">
        <ul class="timeline">
            <li>
                <div class="row">
                    <div class="col-md-10">
                        <a href="https://uns.ac.id/" target="_blank">
                            <h4 class="fw-bold text-primary">Sebelas Maret University (UNS)</h4>
                        </a>
                        <p class="mb-1"><i class="fe fe-map-pin"></i> Surakarta, Central Java, Indonesia</p>
                    </div>
                    <div class="col-md-2">
                        <p class="mb-1">2018 - now</p>
                    </div>
                </div>
                <p>
                    Majoring in
                    <a class="text-secondary" href="https://ptik.fkip.uns.ac.id/" target="_blank">
                        <b>Computer & Informatics
                            Engineering
                            Education
                        </b>
                    </a>
                </p>
            </li>
            <li>
                <div class="row">
                    <div class="col-md-10">
                        <a href="https://sma-adhi-luhur.sch.id/" target="_blank">
                            <h4 class="fw-bold text-primary">SMA YPPK Adhi Luhur (Le Cocq D'Armandville College)</h4>
                        </a>
                        <p class="mb-1"><i class="fe fe-map-pin"></i> Nabire, Papua, Indonesia</p>
                    </div>
                    <div class="col-md-2">
                        <p class="mb-1">2015 - 2018</p>
                    </div>
                </div>
                <p>
                    Majoring in
                    <b>Science</b>
                </p>
            </li>
            <li>
                <div class="row">
                    <div class="col-md-10">
                        <h4 class="fw-bold text-primary">SMP Negeri 5 Nabire</h4>
                        <p class="mb-1"><i class="fe fe-map-pin"></i> Nabire, Papua, Indonesia</p>
                    </div>
                    <div class="col-md-2">
                        <p class="mb-1">2012 - 2015</p>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>

@endsection