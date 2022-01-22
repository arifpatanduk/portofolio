@extends('template.layout')

@section('page_content')

<!-- Card -->
<div class="card border-0">
    <!-- Card header -->
    <div class="card-header">
        <h4 class="mb-0">
            My Portofolio <span class="text-muted fs-6">(5)</span>
        </h4>
    </div>
    <!-- Card body -->
    <div class="card-body">
        <!-- List group -->
        <ul class="list-group list-group-flush">
            <!-- List group item -->
            <li class="list-group-item px-0 pb-3 pt-0">
                <div class="d-flex align-items-center justify-content-between">
                    <a href="https://gandewalana.id/" target="_blank">
                        <div class="d-lg-flex align-items-center">
                            <div>
                                <img src="../assets/images/projects/gandewalana.png" alt=""
                                    class="rounded img-4by3-lg" />
                            </div>
                            <div class="ms-lg-3 mt-2 mt-lg-0">
                                <h4 class="text-primary-hover">
                                    Gandewalana
                                    <span class="badge bg-light-success text-success">New</span>
                                </h4>
                                <ul class="list-inline fs-6 mb-0 text-inherit">
                                    <li class="list-inline-item">
                                        <i class="fas fa-code me-1"></i>Laravel-livewire, Bootstrap 5, AlpineJS
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="far fa-calendar me-1"></i>December 2021
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </a>
                </div>
            </li>
            <!-- List group item -->
            <li class="list-group-item px-0 py-3">
                <div class="d-flex align-items-center justify-content-between">
                    <a href="#">
                        <div class="d-lg-flex align-items-center">
                            <div>
                                <img src="../assets/images/projects/wiyata.svg" alt="" class="rounded img-4by3-lg" />
                            </div>
                            <div class="ms-lg-3 mt-2 mt-lg-0">
                                <h4 class="text-primary-hover">
                                    WIYATA ACADEMY
                                </h4>
                                <ul class="list-inline fs-6 mb-0 text-inherit">
                                    <li class="list-inline-item">
                                        <i class="far fa-clock me-1"></i>Laravel-livewire, Svelte, Bootstrap 5, AlpineJS
                                    </li>
                                    <li class="list-inline-item">
                                        <svg class="mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE"></rect>
                                            <rect x="7" y="5" width="2" height="9" rx="1" fill="#754FFE"></rect>
                                            <rect x="11" y="2" width="2" height="12" rx="1" fill="#754FFE"></rect>
                                        </svg>
                                        Advance
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="mdi mdi-star me-n1 text-warning"></i>
                                        <i class="mdi mdi-star me-n1 text-warning"></i>
                                        <i class="mdi mdi-star me-n1 text-warning"></i>
                                        <i class="mdi mdi-star me-n1 text-warning"></i>
                                        <i class="mdi mdi-star text-light"></i>
                                        <span class="text-warning">4</span>
                                        <span class="text-muted">(1,000)</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </a>
                    <div>
                        <!-- Dropdown -->
                        <span class="dropdown dropstart">
                            <a class="text-muted text-decoration-none" href="#" role="button" id="courseDropdown1"
                                data-bs-toggle="dropdown" data-bs-offset="-20,20" aria-expanded="true">
                                <i class="fe fe-more-vertical"></i>
                            </a>
                            <span class="dropdown-menu" aria-labelledby="courseDropdown1">
                                <span class="dropdown-header">Share</span>
                                <a class="dropdown-item" href="#"><i
                                        class="fab fa-facebook dropdown-item-icon"></i>Facebook</a>
                                <a class="dropdown-item" href="#"><i
                                        class="fab fa-twitter dropdown-item-icon"></i>Twitter</a>
                                <a class="dropdown-item" href="#"><i
                                        class="fab fa-linkedin dropdown-item-icon"></i>Linked
                                    In</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-copy dropdown-item-icon"></i>Copy
                                    Link</a>
                            </span>
                        </span>
                    </div>
                </div>
            </li>
            <!-- List group item -->
            <li class="list-group-item px-0 py-3">
                <div class="d-flex align-items-center justify-content-between">
                    <a href="#">
                        <div class="d-lg-flex align-items-center">
                            <div>
                                <img src="../assets/images/course/course-angular.jpg" alt=""
                                    class="rounded img-4by3-lg" />
                            </div>
                            <div class="ms-lg-3 mt-2 mt-lg-0">
                                <h4 class="text-primary-hover">
                                    PKM UNS
                                </h4>
                                <ul class="list-inline fs-6 mb-0 text-inherit">
                                    <li class="list-inline-item">
                                        <i class="far fa-clock me-1"></i>2h 30m
                                    </li>
                                    <li class="list-inline-item">
                                        <svg class="mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE"></rect>
                                            <rect x="7" y="5" width="2" height="9" rx="1" fill="#DBD8E9"></rect>
                                            <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9"></rect>
                                        </svg>
                                        Beginner
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="mdi mdi-star me-n1 text-warning"></i>
                                        <i class="mdi mdi-star me-n1 text-warning"></i>
                                        <i class="mdi mdi-star me-n1 text-warning"></i>
                                        <i class="mdi mdi-star me-n1 text-warning"></i>
                                        <i class="mdi mdi-star text-warning"></i>
                                        <span class="text-warning">4.5</span>
                                        <span class="text-muted">(900)</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </a>
                    <div>
                        <!-- Dropdown -->
                        <span class="dropdown dropstart">
                            <a class="text-muted text-decoration-none" href="#" role="button" id="courseDropdown2"
                                data-bs-toggle="dropdown" data-bs-offset="-20,20" aria-expanded="true">
                                <i class="fe fe-more-vertical"></i>
                            </a>
                            <span class="dropdown-menu" aria-labelledby="courseDropdown2">
                                <span class="dropdown-header">Share</span>
                                <a class="dropdown-item" href="#"><i
                                        class="fab fa-facebook dropdown-item-icon"></i>Facebook</a>
                                <a class="dropdown-item" href="#"><i
                                        class="fab fa-twitter dropdown-item-icon"></i>Twitter</a>
                                <a class="dropdown-item" href="#"><i
                                        class="fab fa-linkedin dropdown-item-icon"></i>Linked
                                    In</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-copy dropdown-item-icon"></i>Copy
                                    Link</a>
                            </span>
                        </span>
                    </div>
                </div>
            </li>
            <!-- List group item -->
            <li class="list-group-item px-0 py-3">
                <div class="d-flex align-items-center justify-content-between">
                    <a href="#">
                        <div class="d-lg-flex align-items-center">
                            <div>
                                <img src="../assets/images/course/course-python.jpg" alt=""
                                    class="rounded img-4by3-lg" />
                            </div>
                            <div class="ms-lg-3 mt-2 mt-lg-0">
                                <h4 class="text-primary-hover">
                                    Sistem Manajemen Arsip
                                </h4>
                                <ul class="list-inline fs-6 mb-0 text-inherit">
                                    <li class="list-inline-item">
                                        <i class="far fa-clock me-1"></i>1h
                                    </li>
                                    <li class="list-inline-item">
                                        <svg class="mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE"></rect>
                                            <rect x="7" y="5" width="2" height="9" rx="1" fill="#754FFE"></rect>
                                            <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9"></rect>
                                        </svg>
                                        Intermediate
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="mdi mdi-star me-n1 text-warning"></i>
                                        <i class="mdi mdi-star me-n1 text-warning"></i>
                                        <i class="mdi mdi-star me-n1 text-warning"></i>
                                        <i class="mdi mdi-star me-n1 text-warning"></i>
                                        <i class="mdi mdi-star text-warning"></i>
                                        <span class="text-warning">4.5</span>
                                        <span class="text-muted">(1,900)</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </a>
                    <div>
                        <!-- Dropdown -->
                        <span class="dropdown dropstart">
                            <a class="text-muted text-decoration-none" href="#" role="button" id="courseDropdown3"
                                data-bs-toggle="dropdown" data-bs-offset="-20,20" aria-expanded="true">
                                <i class="fe fe-more-vertical"></i>
                            </a>
                            <span class="dropdown-menu" aria-labelledby="courseDropdown3">
                                <span class="dropdown-header">Share</span>
                                <a class="dropdown-item" href="#"><i
                                        class="fab fa-facebook dropdown-item-icon"></i>Facebook</a>
                                <a class="dropdown-item" href="#"><i
                                        class="fab fa-twitter dropdown-item-icon"></i>Twitter</a>
                                <a class="dropdown-item" href="#"><i
                                        class="fab fa-linkedin dropdown-item-icon"></i>Linked
                                    In</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-copy dropdown-item-icon"></i>Copy
                                    Link</a>
                            </span>
                        </span>
                    </div>
                </div>
            </li>
            <!-- List group item -->
            <li class="list-group-item px-0 py-3">
                <div class="d-flex align-items-center justify-content-between">
                    <a href="#">
                        <div class="d-lg-flex align-items-center">
                            <div>
                                <img src="../assets/images/course/course-laravel.jpg" alt=""
                                    class="rounded img-4by3-lg" />
                            </div>
                            <div class="ms-lg-3 mt-2 mt-lg-0">
                                <h4 class="text-primary-hover">
                                    Todo List App
                                </h4>
                                <ul class="list-inline fs-6 mb-0 text-inherit">
                                    <li class="list-inline-item">
                                        <i class="far fa-clock me-1"></i>2h 30m
                                    </li>
                                    <li class="list-inline-item">
                                        <svg class="mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE"></rect>
                                            <rect x="7" y="5" width="2" height="9" rx="1" fill="#754FFE"></rect>
                                            <rect x="11" y="2" width="2" height="12" rx="1" fill="#754FFE"></rect>
                                        </svg>
                                        Advance
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="mdi mdi-star me-n1 text-warning"></i>
                                        <i class="mdi mdi-star me-n1 text-warning"></i>
                                        <i class="mdi mdi-star me-n1 text-warning"></i>
                                        <i class="mdi mdi-star me-n1 text-warning"></i>
                                        <i class="mdi mdi-star text-warning"></i>
                                        <span class="text-warning">4.5</span>
                                        <span class="text-muted">(1,900)</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </a>
                    <div>
                        <!-- Dropdown -->
                        <span class="dropdown dropstart">
                            <a class="text-muted text-decoration-none" href="#" role="button" id="courseDropdown4"
                                data-bs-toggle="dropdown" data-bs-offset="-20,20" aria-expanded="true">
                                <i class="fe fe-more-vertical"></i>
                            </a>
                            <span class="dropdown-menu" aria-labelledby="courseDropdown4">
                                <span class="dropdown-header">Share</span>
                                <a class="dropdown-item" href="#"><i
                                        class="fab fa-facebook dropdown-item-icon"></i>Facebook</a>
                                <a class="dropdown-item" href="#"><i
                                        class="fab fa-twitter dropdown-item-icon"></i>Twitter</a>
                                <a class="dropdown-item" href="#"><i
                                        class="fab fa-linkedin dropdown-item-icon"></i>Linked
                                    In</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-copy dropdown-item-icon"></i>Copy
                                    Link</a>
                            </span>
                        </span>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>
@endsection