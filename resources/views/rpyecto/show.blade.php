@extends('layouts.app')

@section('template_title')
    {{ $rpyecto->name ?? 'Show Rpyecto' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Rpyecto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('rpyectos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $rpyecto->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Imagen:</strong>
                            {{ $rpyecto->imagen }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $rpyecto->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Url:</strong>
                            {{ $rpyecto->url }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
