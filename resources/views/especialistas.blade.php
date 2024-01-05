@extends('layouts.layout')

@section('content')
    <div class="team-area section-padding30">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-tittle text-center mb-100">
                        <span>Doctores</span>
                        <h2>Nuestros Especialistas</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- single Tem -->
                @foreach ($doctor as $doctors)
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img width="280" height="500" src="{{ $doctors->image }}" alt="">
                            </div>
                            <div class="team-caption">
                                <h3><a href="#">{{ $doctors->name }}</a></h3>
                                <span>{{ $doctors->specialty }}</span>
                                <!-- Team social -->
                                <div class="team-social">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fas fa-globe"></i></a>
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{ $doctor->links() }}
        </div>
    </div>
@endsection