@extends('index')
@section('content')
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>

    </head>
    <body> 
        @section('menu')
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="{{'home'}}">Home</a></li>
                <li class="active"><a href="{{'home'}}">Cerrar Sesion</a></li>                
            </ul>
        </div>
        @endsection('menu')


        <div class="container">
            <!-- Trigger the modal with a button -->
            @section('nab')
            <?php
            $_SESSION['user'];
            if (isset($_SESSION['user'])) {
                echo '<font size="5" color="white" ><b> Usuario:  ' . $_SESSION['user'] . '</b></font>';
            }
            ?>
            <div class="btn-group-vertical ">
               
                <div class="dropdown">
                    <button class="btn btn-info btn-lg dropdown-toggle" type="button" data-toggle="dropdown">Profesor<span class="caret"></span></button>
                    <ul class="dropdown-menu">
                        <li><a data-toggle="modal" data-target="#SaveProfesor">Agregar Profesor</a></li>
                        <li><a data-toggle="modal" data-target="#">Listar Profesores</a></li>
                        <li><a data-toggle="modal" data-target="#">Consultar Profesores</a></li>
                        <li><a data-toggle="modal" data-target="#">Despedir Profesores</a></li>
                    </ul>
                </div>
                <p></p>

                <div class="dropdown">
                    <button class="btn btn-info btn-lg dropdown-toggle" type="button" data-toggle="dropdown">Alumnos<span class="caret"></span></button>
                    <ul class="dropdown-menu">
                        <li><a data-toggle="modal" href="{{url('alum')}}">Listar Alumnos</a></li>
                        <li><a data-toggle="modal" data-target="#BuscarAlumno">Consultar Alumnos</a></li>
                       
                    </ul>
                </div>
                <p></p>
                <div class="dropdown">
                    <button class="btn btn-info btn-lg dropdown-toggle" type="button" data-toggle="dropdown">Tutorias<span class="caret"></span></button>
                    <ul class="dropdown-menu">
                        <li><a data-toggle="modal" href="{{url('Tuto')}}">Agendar Tutorias</a></li>
                        <li><a data-toggle="modal" href="{{url('tut')}}">Manipular Tutorias</a></li>
                        
                       
                    </ul>
                </div>
            </div>
        </div>
        
        <!--Tutorias -->

        <div class="modal fade" id="SaveTutorias" role="dialog">
            <div class="modal-dialog">

                <!--  Modal content-->
                <div class="modal-content" style="margin: 200px 100px;">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Modal Header</h4>
                    </div>

                    <table class="table tab-pane" style="text-align: center">
                        <tr>
                            <td> Nombre :</td>
                            <td> <input type="text" name="nombre" value="" /> </td>
                        </tr>
                    </table>


                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>

        <!--Alumnos Buscar-->

        <div class="modal fade" id="BuscarAlumno" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->

                <div class="modal-content" style="margin: 200px 100px;">
                    <div class="modal-header">
                        {!!   Form::open(['url' => 'alu']);!!}
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Buscar Alumno</h4>
                    </div>
                    <div class="modal-body" style="text-align: center">
                        <p> Rut                : <input type="number" name="rut" value="" placeholder="Ingresar rut sin puntos ni digito verificado" required> </p>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" value="Consultar" />

                    </div>
                    {!! Form::close() !!}

                </div>

            </div>
        </div>
            
    </div>
    @endsection('nab')
    
    @yield('form1')

</body>
</html>
@endsection