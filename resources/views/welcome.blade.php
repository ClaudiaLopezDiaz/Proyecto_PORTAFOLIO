@extends('layouts.template')

@section('content')

@foreach ($rpyectos as $rpyecto)
                                        <tr>
											<td>{{ $rpyecto->nombre }}</td>
											<td>{{ $rpyecto->imagen }}</td>
											<td>{{ $rpyecto->descripcion }}</td>
											<td>{{ $rpyecto->url }}</td>
                                        </tr>
                                    @endforeach
@endsection

