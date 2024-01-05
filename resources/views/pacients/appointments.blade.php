@extends('layouts.layout')

@section('content')
    <div align="center" style="padding: 70px;">
        <div class="col-12">
            <div class="bg-secondary rounded h-100 p-4">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Doctor</th>
                                <th scope="col">Mensaje</th>
                                <th scope="col">Fecha</th>
                                <th scope="col">Estatus</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($appoint as $appoints)
                                <tr>
                                    <td>{{ $appoints->doctor }}</td>
                                    <td>{{ $appoints->message }}</td>
                                    <td>{{ $appoints->date }}</td>
                                    <td>{{ $appoints->status }}</td>
                                    <td><a class="bt btn-danger" onclick="return confirm('¿Estás seguro que quieres cancelar esta cita?')" href="{{ url('cancel_appoint', $appoints->id) }}">Cancelar</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection