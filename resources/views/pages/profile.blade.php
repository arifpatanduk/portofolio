@extends('template.layout')

@section('page_content')

<!-- Card -->
<div class="card">
    <!-- Card header -->
    <div class="card-header">
        <h3 class="mb-0">Profile</h3>
    </div>
    <!-- Card body -->
    <div class="card-body">

        <!-- Form -->
        <form class="row">
            <!-- First name -->
            <div class="mb-3 col-12 col-md-6">
                <label class="form-label" for="fname">First Name</label>
                <h4>Arif Wiranata</h4>
            </div>
            <!-- Last name -->
            <div class="mb-3 col-12 col-md-6">
                <label class="form-label" for="lname">Last Name</label>
                <h4>Patanduk</h4>
            </div>
            <!-- Phone -->
            <div class="mb-3 col-12 col-md-6">
                <label class="form-label" for="phone">Email</label>
                <h4><a class="text-dark" target="_blank"
                        href="mailto:arifpatanduk1@gmail.com">arifpatanduk1@gmail.com</a></h4>
            </div>
            <!-- Address -->
            <div class="mb-3 col-12 col-md-6">
                <label class="form-label" for="address">Address</label>
                <h4>Makamhaji, Kartasura, Sukoharjo, Jawa Tengah 57161</h4>
            </div>
        </form>
    </div>
</div>
</div>

@endsection