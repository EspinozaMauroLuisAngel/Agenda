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
    
    <div class="modal-dialog">
      <form action="{{ route('empleados.store') }}" enctype="multipart/form-data" method="POST">
        {!! csrf_field() !!}
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal | Registro Nuevo</h5>
          </div>
          <div class="modal-body">
          
            <h6>*Clave de Empleado</h6>
            <input name="clave" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Ejemplo: EMP01" required>
            <br>
          
            <h6>*Nombre de Empleado</h6>
            <input name="nombre" type="text" placeholder="Nombre(s)" required><br>
            <input name="app" type="text" placeholder="Apellido Paterno" required><br>
            <input name="apm" type="text" placeholder="Apellido Materno" required>
            <br><br>
          
            <h6>*Sexo|Genero</h6>
            <input name="gen" type="radio" id="mujer" required>
            <label for="mujer">Femenino</label><br>
          
            <input type="radio" name="gen" id="hombre" required>
            <label for="hombre">Masculino</label>
            <br><br>
          
            <h6>*Fecha de Nacimiento</h6>
            <input name="fn" type="date" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Ejemplo: EMP01" placeholder="dd/mm/aaaa" required>
            <br>
          
            <h6>*Foto</h6>
            <input name="foto" type="file" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
            <br>

            <h6>*Sueldo</h6>
            <input name="sueldo" type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
            <br>

            <div class="input-group mb-3">
                <select class="form-select" name='areas' id="" required>
                    <option selected>*Selecciona una Área</option>
                    @foreach ($areas as $area)
                        <option class="form-control" value="{{$area->id}}">{{$area->id_area}}</option>
                    @endforeach
                </select>
            </div> 

            <div class="input-group mb-3">
                <select class="form-select" name='relacion_areas' id="" required>
                    <option selected>*Selecciona una Puesto</option>
                    @foreach ($areas as $area)
                        <option class="form-control" value="{{$area->id}}">{{$area->id_empleado}}</option>
                    @endforeach
                </select>
            </div>    
            <br>
          
            <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1">@</span>
              <input name="email" type="email" class="form-control" placeholder="Ejemplo: roberto.camacho@utvtol.edu.mx" aria-label="Username" aria-describedby="basic-addon1" required>
            </div>
            <br>
          
            *Password   <input type="password" name="pass" required> 
            <h6>Debe tener entre 8 y 20 caracters.</h6>
            <br>
          
            <input name="activo" type="radio" id="activo" required>
            <label for="activo">Activo</label>
            <br><br>
          
            <H6>Los campos con * son obligatorios.</H6>
          
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary m-3">Registrar</button>
          </div>
        </div>
      </form>
    </div>

</body>
</html>