<div class="col-lg-3 col-md-4 col-12">
    <!-- Card -->
    <div class="card border-0 mb-4">
        <!-- Card body -->
        <div class="card-body">
            <h4>About me</h4>
            <p>
                I am a software developer focused on web application development living in Surakarta, Indonesia. As a
                developer, I
                always
                try to make each of my work responsive, powerful, and easy to use.
            </p>
        </div>
    </div>
    <!-- Card -->
    <div class="card border-0 mb-4 mb-lg-0">

        <!-- Side navbar -->
        <nav class="navbar navbar-expand-md navbar-light shadow-sm mb-4 mb-lg-0 sidenav">
            <!-- Menu -->
            <a class="d-xl-none d-lg-none d-md-none text-inherit fw-bold" href="#">Menu</a>
            <!-- Button -->
            <button class="navbar-toggler d-md-none icon-shape icon-sm rounded bg-primary text-light" type="button"
                data-bs-toggle="collapse" data-bs-target="#sidenav" aria-controls="sidenav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="fe fe-menu"></span>
            </button>
            <!-- Collapse navbar -->
            <div class="collapse navbar-collapse" id="sidenav">
                <div class="navbar-nav flex-column">
                    {{-- <span class="navbar-header">Account Settings</span> --}}
                    <!-- List -->
                    <ul class="list-unstyled ms-n2 mb-0">
                        <li class="nav-item {{ $active == 'portofolio' ? 'active' : '' }}">
                            <a class="nav-link " href="{{ route('portofolio') }}"><i
                                    class="fe fe-activity nav-icon"></i>Portofolio</a>
                        </li>
                        <li class="nav-item {{ $active == 'profile' ? 'active' : '' }}">
                            <a class="nav-link " href="{{ route('profile') }}"><i class="fe fe-user nav-icon"></i>
                                Profile
                            </a>
                        </li>
                        <li class="nav-item {{ $active == 'social' ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('social') }}"><i class="fe fe-refresh-cw nav-icon"></i>
                                Social Profiles
                            </a>
                        </li>
                        <li class="nav-item {{ $active == 'achievement' ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('achievement') }}"><i class="fe fe-award nav-icon"></i>
                                Achievements
                            </a>
                        </li>
                        <li class="nav-item {{ $active == 'skills' ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('skills') }}"><i
                                    class="fe fe-bar-chart-2 nav-icon"></i>Skills</a>
                        </li>
                        <li class="nav-item {{ $active == 'educations' ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('educations') }}">
                                <i class="fe fe-clipboard nav-icon"></i>Educations</a>
                        </li>
                        <li class="nav-item {{ $active == 'experiences' ? 'active' : '' }} ">
                            <a class="nav-link" href="{{ route('experiences') }}"><i
                                    class="fe fe-archive nav-icon"></i>Work Experiences</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>