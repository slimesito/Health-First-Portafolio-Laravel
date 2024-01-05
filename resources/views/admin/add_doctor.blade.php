<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Nuevo Doctor | Health-First</title>
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

                    <div class="container" align="center" style="padding-top: 50px">

                        @if (session()->has('message'))

                            <div class="alert alert-secondary alert-dismissible fade show" role="alert">
                                <i class="fa-solid fa-check me-2"></i>{{ session()->get('message') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>

                        @endif

                        <form action="{{ url('upload_doctor') }}" method="POST" enctype="multipart/form-data">

                            @csrf

                            <div style="padding: 15px;" >

                                <label for="">Nombre: </label>
                                <input type="text" name="name" style="width: 300px" placeholder="Escribe el nombre...">

                            </div>

                            <div style="padding: 15px;">

                                <label for="">Teléfono: </label>
                                <input type="number" style="width: 300px" name="phone" placeholder="Escribe el número...">

                            </div>

                            <div style="padding: 15px;">

                                <label for="">Correo Electrónico: </label>
                                <input type="email" style="width: 300px" name="email" placeholder="Escribe el E-mail...">

                            </div>

                            <div style="padding: 15px;">

                                <label>Especialidad: </label>
                                
                                <select name="specialty" id="" style="width: 190px; padding:10px">

                                    <option>--Seleccionar--</option>
                                    <option value="Dermatología">Dermatología</option>
                                    <option value="Oftalmología">Oftalmología</option>
                                    <option value="Cardiología">Cardiología</option>
                                    <option value="Traumatología">Traumatología</option>
                                    <option value="Neurología">Neurología</option>

                                </select>

                            </div>

                            <div style="padding: 15px;">

                                <label for="">Foto: </label>
                                
                                <input type="file" style="width: 300px" name="image">

                            </div>

                            <div style="padding: 15px;">
                                
                                <input type="submit" style="width: 150px" value="Agregar" class="btn btn-success">

                            </div>

                        </form>

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