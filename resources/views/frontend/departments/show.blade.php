@extends('frontend.layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="offcanvas offcanvas-start" id="offcanvasExample">
            <div class="offcanvas-header">
                <!-- Offcanvas Logo Start -->
                <div class="offcanvas-logo">
                    <a href="index.html"><img src="/assets/images/black logo.jpg" alt=""></a>
                </div>
                <!-- Offcanvas Logo End -->
                <button type="button" class="close-btn" data-bs-dismiss="offcanvas"><i class="flaticon-close"></i></button>
            </div>

            <!-- Offcanvas Body Start -->
            <div class="offcanvas-body">
                <div class="offcanvas-menu">
                    <ul class="main-menu">
                        <li class="active-menu">
                            <a href="#">Home</a>
                        </li>
                        <li>
                            <a href="#about-us">About Us</a>
                        </li>
                        <li>
                            <a href="#choose-us">Service</a>
                        </li>
                        <li>
                            <a href="index-ar" lang="ar">عربي</a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Offcanvas Body End -->
        </div>



        <div class="container my-5">
            <h1 class="text-center mt-5">
                {{ $department->name }}
            </h1>

            <p class="m-5">
                {!! $department->description !!}
            </p>
            {{ $projects->links() }}
            <div class="row">
                @forelse ($projects as $project)
                    <div class="col-4">
                        <div class="card mt-3">
                            <div class="card-body">
                                <h5 class="card-title text-center">
                                    {{ $project->name }}
                                </h5>
                                <img src="{{ asset($project->image) }}" class="w-100" alt="project image">

                                <p class="card-text">
                                    {!! $project->content !!}
                                </p>
                                <a href="{{ $project->link }}" target="_blank"
                                    class="btn btn-primary btn-sm">{{ __('homePage.visit') }}</a>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse
            </div>

        </div>
    </div>
@endsection
