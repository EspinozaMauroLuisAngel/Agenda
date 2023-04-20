<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-eq º uiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Empleados</title>
</head>
<body>
    <div class="card-header py-4">
        <h3 class="m-1 font-weight-bold text-black">Información y Registro de Empleados</h3>
    </div><br>
    <div class="d-flex justify-content-end">
        <a href="empleados/create">
          <button type="button" class="btn btn-success">Nuevo Registro</button>
        </a>
    </div><br>
    <div class="row">
        <div class="col-sm-12">
            @if ($mensaje = Session::get('success'))
                <div class="alert alert-success" role="alert">
                    {{ $mensaje }}
                </div>
            @endif
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Foto</th>
                        <th>Clave-Empleado</th>
                        <th>Empleado</th>
                        <th>Área</th>
                        <th>Puesto(tipo)</th>
                        <th>Sueldo</th>
                        <th>Otros</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($empleados as $empleado)
                        <tr>
                            <td>{{$empleado->id}}</td>
                            <td><img src="{{asset('img/' . $empleado->foto) }}" width="80" height="80"></td>   
                            <td>{{$empleado->clave}}</td>
                            <td>{{$empleado->nombre}}</td>
                            <td>{{$empleado->areas}}</td>
                            <td>{{$empleado->relacion_areas}}</td>
                            <td>${{$empleado->sueldo}}</td>  

                            <td>        
                                <div class="row col-12">
                                    <div class="col-4">
                                      <a href="{{route('empleados.edit',$empleado->id)}}">
                                        <button type="button" class="btn btn-outline-dark">Detalle</button>
                                      </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>            
        </div>
    </div>
</body>
</html>
