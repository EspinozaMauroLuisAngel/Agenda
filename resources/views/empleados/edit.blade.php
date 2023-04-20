<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<form action="{{route('empleados.update', $empleados->id)}}" method="POST">
    @csrf
    @method("PUT")
    
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal | Detalle de Empleado</h5>
            </div>
            <div class="modal-body">
                    <img src="{{ $empleados->foto }}" width="450" height="450" class="rounded mx-auto d-block"><br>

                    <h6>{{$empleados->clave}} - {{$empleados->nombre}}</h6> 

                    <h6>Fecha de Nacimiento: {{$empleados->fn}}</h6> 

                    @foreach ($areas as $area)
                        <h6>{{$area->id_area}} | {{$area->id_empleado}}</h6>
                    @endforeach

                    <h6>Sueldo: ${{$empleados->sueldo}}</h6>

                    <h6 class="text-danger">Email: {{$empleados->email}}  </h6>

                    <h6>Registrado: {{$empleados->fn}}</h6>
                                      
            </div>
            <div class="modal-footer">
                <button type="subnit" class="btn btn-info" data-bs-dismiss="modal">Regresar</button>
            </div>
        </div>
    </div>
</form>
</body>
</html>