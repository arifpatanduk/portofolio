@extends('template.base')

@section('content')

<!-- Bg -->
<div class="py-10" style="
background: url(../assets/images/background/profile-bg.jpg) no-repeat;
background-position: center;
">
</div>
<!-- User info -->
<div class="card p-lg-2 pt-2 pt-lg-0 rounded-0 border-0">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 col-md-8 col-12">
                <div class="d-flex align-items-center">
                    <div class="position-relative mt-n9">
                        <img src="../assets/images/avatar/arif-01.jpg" alt=""
                            class="rounded-circle avatar-xxl border-white border border-4 position-relative">
                        <a href="#" class="position-absolute top-0 end-0 me-2" data-bs-toggle="tooltip"
                            data-placement="top" title="Verified">
                            <img src="../assets/images/svg/checked-mark.svg" alt="" height="30" width="30" />
                        </a>
                    </div>
                    <div class="ms-3">
                        <div class="d-flex align-items-center">
                            <h3 class="mb-0 fw-bold me-2">Arif Wiranata Patanduk</h3>
                        </div>
                        <span class="fs-6">Web Developer</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                {{-- <li class="px-3 d-grid">
                </li> --}}
                <div class="fs-4 mt-4 mt-lg-0 pb-2 pb-lg-0 d-lg-flex justify-content-end">
                    <a href="../pages/dashboard/admin-dashboard.html" class="btn btn-sm btn-outline-primary">
                        Download Resume
                    </a>
                    {{-- <a href="#" class="mdi mdi-youtube text-muted me-2"></a>
                    <a href="#" class="mdi mdi-link-variant text-muted me-2"></a>
                    <a href="#" class="mdi mdi-instagram text-muted me-2"></a>
                    <a href="#" class="mdi mdi-facebook text-muted me-2"></a>
                    <a href="#" class="mdi mdi-twitter text-muted"></a> --}}
                </div>
            </div>
        </div>
    </div>
</div>

<div class="py-5 py-md-5">
    <div class="container">
        <div class="row">

            @include('template.sidebar')

            <div class="col-lg-9 col-md-8 col-12">
                @yield('page_content')
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<div class="footer">
    <div class="container">
        <div class="row align-items-center g-0 border-top py-2">
            <!-- Desc -->
            <div class="col-md-6 col-12 text-center text-md-start">
                <span>© 2021 Arif Wiranata Patanduk. All Rights Reserved.</span>
            </div>
        </div>
    </div>
</div>
@endsection