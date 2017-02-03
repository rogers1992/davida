@extends('layouts.principal')
@section('content')

    <div class="r-col-9 r-col-m-9">
      <div class="r-container">
        <div class="r-container-card">
          <div class="r-card-header r-blue-light-1">
            <h3 class="r-text-white">Datos del Paciente</h3>
          </div>
          <div class="r-card-body">
            <img class="r-img-circle" src="images/img1.png" >
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

          <table>

            <tr>
              <th>Nombres:</th>
              <td>Roger</td>
            </tr>
            <tr>
              <th>Apellidos:</th>
              <td>Ulaque Colque</td>
            </tr>
            <tr>
              <th>Edad:</th>
              <td>13 Anios</td>
            </tr>
            <tr>
              <th>Fecha de Nacimiento:</th>
              <td>10 noviembre del 1992</td>
            </tr>
            <tr>
              <th>Sexo:</th>
              <td>Masculino</td>
            </tr>
            <tr>
              <th>Nro Telf:</th>
              <td>7991835</td>
            </tr>
            <tr>
              <th>Direccion:</th>
              <td>calle 31 de octubre, Barrio siglo XX.</td>
            </tr>
            <tr>
              <th>Ciudad:</th>
              <td>Quillacollo.</td>
            </tr>
            <tr>
              <th>Nacionalidad:</th>
              <td>Boliviana.</td>
            </tr>
            <tr>
              <th>Fecha:</th>
              <td>10/05/2016</td>
            </tr>
          </table>
          </div>
          <div class="r-card-footer r-blue-light-1">
            <a href="" class="r-button">Editar</a>
          </div>
        </div>
      </div>
    </div>

@endsection
