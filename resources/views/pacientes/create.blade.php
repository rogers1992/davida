@extends('layouts.principal')
@section('content')
      
      <div class="r-col-6 r-col-m-6">
        <div class="r-container">
          <div class="r-container-card">
            <div class="r-card-header r-blue-light-1">
              <h2 class="r-text-white">Ingresar Paciente</h2>
            </div>
            <div class="r-card-body">
              <form  action="{{ url('admin/pacientes') }}" method="post">
                <div class="r-row">
                  <div class="r-col-6 r-col-m-6">
                    <div class="r-container-input">
                      <label for="nombre">Nombre:</label>
                      <input type="text" name="nombre" value="">
                    </div>
                  </div>
                  <div class="r-col-6 r-col-m-6">
                    <div class="r-container-input">
                      <label for="apellidos">Apellidos:</label>
                      <input  type="text" name="apellidos" value="">
                    </div>
                  </div>
                </div>
                <div class="r-row">
                  <div class="r-col-12 r-col-m-12">
                    <div class="r-container-input">
                      <label for="direccion">Direcci&oacute;n:</label>
                      <input  type="text" name="direccion" value="">
                    </div>
                  </div>
                </div>
                <div class="r-row">
                  <div class="r-col-3 r-col-m-3">
                    <div class="r-container-input">
                      <label for="edad">Edad:</label>
                      <input type="text" name="name" value="">
                    </div>
                  </div>
                  <div class="r-col-3 r-col-m-3">
                    <div class="r-container-input">
                      <label for="nacimiento">Fecha de Nacimiento:</label>
                      <input type="text" name="nacimiento" value="">
                    </div>
                  </div>
                  <div class="r-col-3 r-col-m-3">
                    <div class="r-container-input">
                      <label for="telefono">Telefono:</label>
                      <input type="text" name="telefono" value="">
                    </div>
                  </div>
                  <div class="r-col-3 r-col-m-3">
                    <div class="r-container-input">
                      <label for="edad">Sexo:</label>
                      <select class="" name="sexo">
                        <option value="" selected="selected">Seleccione..</option>
                        <option value="hombre">Hombre</option>
                        <option value="mujer">Mujer</option>
                      </select>
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <div class="r-card-footer r-blue-light-1">
              <input type="submit" class="r-button" value="Guardar Paciente">
            </div>
            </form>
          </div>
        </div>
      </div>


@endsection
