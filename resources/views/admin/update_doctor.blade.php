<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Editar Doctor | Health-First</title>
        <base href="/public">
        <link rel="stylesheet" href="{{asset('admin/css/newdoctorstyles.css')}}">
        @include('admin.layout.head-css')
    </head>

    <body>
        <div class="container-fluid position-relative d-flex p-0">
            
            <!-- Spinner Start -->

                @include('admin.layout.spinner')

            <!-- Spinner End -->


            <!-- Sidebar Start -->

                @include('admin.layout.sidebar')

            <!-- Sidebar End -->


            <!-- Content Start -->

            <div class="content">

                <!-- Navbar Start -->

                    @include('admin.layout.navbar')

                <!-- Navbar End -->

                {{-- CONTENIDO ⬇⬇⬇ --}}

                <div class="container-fluid page-body-wrapper">

                    <div class="container" style="padding-top: 100px">

                        @if (session()->has('message'))

                            <div class="alert alert-secondary alert-dismissible fade show" role="alert">
                                <i class="fa-solid fa-check me-2"></i>{{ session()->get('message') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>

                        @endif

                        <div class="bg-secondary rounded h-100 p-4">

                            <form action="{{url('edit_doctor', $data->id)}}" method="POST" enctype="multipart/form-data">

                                @csrf
                
                                <div style="padding:15px;">
                                    <label>Doctor</label>
                                    <input type="text" style="color: black;" name="name" value="{{$data->name}}">
                                </div>
                
                                <div style="padding:15px;">
                                    <label>Teléfono</label>
                                    <input type="number" style="color: black;" name="phone" value="{{$data->phone}}">
                                </div>
                
                                <div style="padding:15px;">
                                    <label>Email</label>
                                    <input type="text" style="color: black;" name="email" value="{{$data->email}}">
                                </div>
                
                                <div style="padding:15px;">
                                    <label>Especialidad</label>
                                    <select name="specialty" id="" style="width: 190px">

                                        <option>{{$data->specialty}}</option>
                                        <option value="Dermatología">Dermatología</option>
                                        <option value="Oftalmología">Oftalmología</option>
                                        <option value="Cardiología">Cardiología</option>
                                        <option value="Traumatología">Traumatología</option>
                                        <option value="Neurología">Neurología</option>

                                    </select>
                                </div>
                
                                <div style="padding:15px;">
                                    <label>Foto Actual</label>
                                    <img height="100" width="100" src="{{asset($data->image)}}">
                                </div>
                
                                <div style="padding:15px;">
                                    <label>Change Image</label>
                                    <input type="file" name="file">
                                </div>
                
                                <div style="padding:15px;">
                                    <input type="submit" value="Actualizar" class="btn btn-success">
                                </div>                
                
                            </form>

                        </div>

                    </div>

                </div>

                {{-- FIN CONTENIDO ⬆⬆⬆ --}}

                <!-- Footer Start -->

                @include('admin.layout.footer')

                <!-- Footer End -->

            </div>

            <!-- Content End -->


            <!-- Back to Top -->

            <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

        </div>

        <!-- JavaScript Libraries -->
        
        @include('admin.layout.js')

    </body>

</html>