@extends('layouts.layout')

@section('content')

    @if(session()->has('success'))

        <div class="alert alert-success">

            <button type="button" class="close" data-dismiss="alert">x</button>

            {{session()->get('success')}}

        </div>

    @endif
    
    <div class="contact-form-main">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-xl-7 col-lg-7">
                    <div class="form-wrapper">

                        <!--Section Tittle  -->
                        <div class="form-tittle">
                            <div class="row ">
                                <div class="col-xl-12">
                                    <div class="section-tittle section-tittle2">
                                        <span>Formulario de solicitud de cita</span>
                                        <h2>Agenda tu cita</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Section Tittle  -->

                        <form id="contact-form" action="{{ url('upload_appointment') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-box user-icon mb-30">
                                        <input type="text" name="name" placeholder="Nombre Completo">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-box mb-30">
                                        <input type="text" name="phone" placeholder="Teléfono">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 mb-30">
                                    <div class="select-itms">
                                        <select name="doctor" id="select2">

                                            <option style="">Seleccionar Doctor</option>

                                            @foreach ($doctor as $doctors)
                                                
                                                <option value="{{$doctors->name}}"> {{$doctors->name}} — {{$doctors->specialty}} </option>

                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-box subject-icon mb-30">
                                        <input type="email" name="email" placeholder="Correo electrónico">
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-6 mb-30" data-wow-delay="300ms">
                                    <input type="date" name="date" class="form-control">
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-box message-icon mb-65">
                                        <textarea name="message" id="message" placeholder="Mensaje"></textarea>
                                    </div>
                                    <div class="submit-info">
                                        <button class="btn" type="submit">Enviar <i class="ti-arrow-right"></i> </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- contact left Img-->

        <div class="from-left d-none d-lg-block">
            <img src="assets/img/gallery/contact_form.png" alt="">
        </div>
    </div>

@endsection