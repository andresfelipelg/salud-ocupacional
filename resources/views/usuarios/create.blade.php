@extends('layout.app')

@section('content')

    <form action="{{ route('usuarios.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">

            <title>Registro personal</title>
            <link rel="stylesheet" href="/style.css">
          </head>
          <body>

             <div class="col-5 pt-5 m-auto ">
              <div class="text-center mt-5 ">
              <form  action="">
                  <i class=" display-1 bi bi-file-text-fill "></i>
                  <h1 class= "mt-4 h2 font-weight-normal text-white" >Reclamacion</h1>
        
                  <div class="mb-3 mt-3 text-start">
                  <input class="form-control" type="text" placeholder="Ingrese la razon social">
                </div>
        
             
                <div class="mb-3  text-start">
                  <input class="form-control" type="text" placeholder="Contacto">
                </div>
                <div class="mb-3 mt-3 text-start">
                    <input class="form-control" type="text" placeholder="telefono">
                  </div>
          
               
                  <div class="mb-3  text-start">
                    <input class="form-control" type="number" placeholder="Numero de factura">
                  </div>
                  <div class="mb-3 mt-3 text-start">
                    <input class="form-control" type="text" placeholder="Codigo">
                  </div>
          
               
                  <div class="mb-3  text-start">
                    <input class="form-control" type="text" placeholder="Referencia">
                  </div>
                  <div class="mb-3 mt-3 text-start">
                    <input class="form-control" type="number" placeholder="cantidad">
                  </div>
          
               
                  <div class="mb-3  text-start">
                    <input class="form-control" type="file" placeholder="Contacto">
                  </div>
                <div class="d-grid ">
                <input class="mt-2 btn btn-dark btn" type="button" value="Iniciar sesion" >
              
              </form>
              </div>
              </div>
        















            <div class="col-4">
                <label for="nombre" class="form-label">Nombre del usuario</label>
                <input type="text" class="form-control" name="nombre" id="nombre"
                    placeholder="Ingrese el nombre del usuario">
                @if ($errors->has('nombre'))
                    <p class="text-danger">{{ $errors->first('nombre') }}</p>
                @endif
            </div>
            <div class="col-4">
                <label for="apellido" class="form-label">Apellido del usuario</label>
                <input type="text" class="form-control" name="apellido" id="apellido"
                    placeholder="Ingrese el apellido del usuario">
                @if ($errors->has('apellido'))
                    <p class="text-danger">{{ $errors->first('apellido') }}</p>
                @endif
            </div>
            <div class="col-4">
                <label for="email" class="form-label">Email del usuario</label>
                <input type="text" class="form-control" name="email" id="email"
                    placeholder="Ingrese el email del usuario">
                @if ($errors->has('email'))
                    <p class="text-danger">{{ $errors->first('email') }}</p>
                @endif
            </div>
            <div class="col-4">
                <label for="cedula" class="form-label">Cedula del usuario</label>
                <input type="text" class="form-control" name="cedula" id="cedula"
                    placeholder="Ingrese el cedula del usuario">
                @if ($errors->has('cedula'))
                    <p class="text-danger">{{ $errors->first('cedula') }}</p>
                @endif
            </div>

            <div class="col-4">
                <label for="telefono" class="form-label">Télefono del usuario</label>
                <input type="text" class="form-control" name="telefono" id="telefono"
                    placeholder="Ingrese el telefono del usuario">
                @if ($errors->has('telefono'))
                    <p class="text-danger">{{ $errors->first('telefono') }}</p>
                @endif
            </div>

            <div class="col-4">
                <label for="celular" class="form-label">Celular del usuario</label>
                <input type="text" class="form-control" name="celular" id="celular"
                    placeholder="Ingrese el celular del usuario">
                @if ($errors->has('celular'))
                    <p class="text-danger">{{ $errors->first('celular') }}</p>
                @endif
            </div>

            <div class="col-3">
                <label for="direccion" class="form-label">Dirección del usuario</label>
                <input type="text" class="form-control" name="direccion" id="direccion"
                    placeholder="Ingrese el direccion del usuario">
                @if ($errors->has('direccion'))
                    <p class="text-danger">{{ $errors->first('direccion') }}</p>
                @endif
            </div>
            <div class="col-3">
                <label for="password" class="form-label">Contraseña del usuario</label>
                <input type="password" class="form-control" name="password" id="password"
                    placeholder="Ingrese el password del usuario">
                @if ($errors->has('password'))
                    <p class="text-danger">{{ $errors->first('password') }}</p>
                @endif
            </div>
            <div class="col-3">
                <label for="rol_id" class="form-label">Rol del usuario</label>
                <select class="form-select" aria-label="Default select example" name="rol_id" id="rol_id">
                    <option value="">Seleccione el rol del usuario</option>
                    

                </select>
                @if ($errors->has('rol_id'))
                    <p class="text-danger">{{ $errors->first('rol_id') }}</p>
                @endif
            </div>
            <div class="col-3">
                <label for="foto" class="form-label">Foto del perfil</label>
                <input type="file" class="form-control" name="foto" id="foto" >
                @if ($errors->has('foto'))
                    <p class="text-danger">{{ $errors->first('foto') }}</p>
                @endif
            </div>

            <br><br><br><br>
            <button type="submit" class="btn btn-success">Enviar</button>

        </div>



    </form>

@endsection