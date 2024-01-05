<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Citas | Health-First</title>
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
                                <i class="fa fa-exclamation-circle me-2"></i>{{ session()->get('message') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>

                        @endif

                        <div class="bg-secondary rounded h-100 p-4">

                            <table class="table table-hover">

                                <thead>

                                    <tr align="center">
                                        <th>ID</th>
                                        <th>Paciente</th>
                                        <th>Email</th>
                                        <th>Mensaje</th>
                                        <th>Doctor</th>
                                        <th>Fecha</th>
                                        <th>Estatus</th>
                                        <th>Acciones</th>
                                    </tr>

                                </thead>

                                <tbody>

                                    @foreach ($data as $appoint)

                                        <tr align="center">
                                            <td>{{ $appoint->id }}</td>
                                            <td>{{ $appoint->name }}</td>
                                            <td>{{ $appoint->email }}</td>
                                            <td>{{ $appoint->message }}</td>
                                            <td>{{ $appoint->doctor }}</td>
                                            <td>{{ $appoint->date }}</td>
                                            <td>{{ $appoint->status }}</td>
                                            <td><a class="btn btn-success" onclick="return confirm('¿Está seguro que desea aceptar esta cita?')" href="{{ url('approve_appointment', $appoint->id) }}">Aprobar</a> | 
                                                <a class="btn btn-danger" onclick="return confirm('¿Está seguro que desea cancelar esta cita?')" href="{{ url('cancel_appointment', $appoint->id) }}">Cancelar</a>
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