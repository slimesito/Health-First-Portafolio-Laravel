<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Doctores | Health-First</title>
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

                    <div class="container" align="center" style="padding-top: 100px">

                        @if (session()->has('message'))

                            <div class="alert alert-secondary alert-dismissible fade show" role="alert">
                                <i class="fa-solid fa-check me-2"></i>{{ session()->get('message') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>

                        @endif

                        <div class="bg-secondary rounded h-100 p-4">

                            {{-- <form action="{{ route('admin.all_doctors') }}" method="GET" class="d-none d-md-flex ms-4">
                                <input name="search" class="form-control bg-dark border-0" type="text" placeholder="Search">
                            </form> --}}

                            <table class="table table-hover">
                                <thead>
                                    <tr align="center">
                                        <th>ID</th>
                                        <th>Doctor</th>
                                        <th>Teléfono</th>
                                        <th>Email</th>
                                        <th>Especialidad</th>
                                        <th>Foto</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $doctor)
                                        <tr align="center">
                                            <td>{{ $doctor->id }}</td>
                                            <td>{{ $doctor->name }}</td>
                                            <td>{{ $doctor->phone }}</td>
                                            <td>{{ $doctor->email }}</td>
                                            <td>{{ $doctor->specialty }}</td>
                                            <td><img height="100" width="100" src="{{ asset($doctor->image) }}"></td>
                                            <td><a class="btn btn" href="{{ url('update_doctor', $doctor->id) }}">Editar</a> | 
                                                <a class="btn btn-danger" onclick="return confirm('¿Está seguro que desea eliminar este doctor?')" href="{{ url('delete_doctor', $doctor->id) }}">Eliminar</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

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