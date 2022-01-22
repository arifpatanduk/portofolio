<div class="col-lg-3 col-md-4 col-12">
    <!-- Card -->
    <div class="card border-0 mb-4">
        <!-- Card body -->
        <div class="card-body">
            <h4>About me</h4>
            <p>
                I am an Innovation designer focussing on UX/UI based in
                Berlin. As a creative resident at Figma explored the city of
                the future and how new technologies like AI, voice control,
                and augmented reality will change our interfaces.
            </p>
            <a href="#" class="btn-link"> Read more</a>
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
                        <!-- Nav item -->
                        <li class="nav-item {{ $active == 'profile' ? 'active' : '' }}">
                            <a class="nav-link " href="{{ route('profile') }}"><i class="fe fe-user nav-icon"></i>
                                Profile
                            </a>
                        </li>
                        <!-- Nav item -->
                        <li class="nav-item {{ $active == 'social' ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('social') }}"><i class="fe fe-refresh-cw nav-icon"></i>
                                Social Profiles
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="notifications.html"><i
                                    class="fe fe-settings nav-icon"></i>Skills</a>
                        </li>
                        <!-- Nav item -->
                        <li class="nav-item">
                            <a class="nav-link" href="profile-privacy.html">
                                <i class="fe fe-clipboard nav-icon"></i>Educations</a>
                        </li>
                        <!-- Nav item -->
                        <li class="nav-item">
                            <a class="nav-link" href="delete-profile.html"><i
                                    class="fe fe-archive nav-icon"></i>Experiences</a>
                        </li>
                        <!-- Nav item -->
                        <li class="nav-item">
                            <a class="nav-link " href="linked-accounts.html"><i
                                    class="fe fe-activity nav-icon"></i>Projects</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>