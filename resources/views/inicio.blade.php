@extends('layouts.master')

@section('content')
        <form method="post" action="imgProyecto.aspx" id="form1">

		    <div class="Bienvenida" id="Layer3" style="Z-INDEX: 102; LEFT: 456px; VISIBILITY: visible; WIDTH: 270px; POSITION: absolute; TOP: 181px; HEIGHT: 69px">
			    <p>Seleccione del menú de la izquierda la opción que corresponda a la actividad que 
				    desea realizar.</p>			    
				<span id="lbl_DB">Esta aplicación está accesando a la Base de Datos de PRODUCCIÓN</span>
		    </div>
		    <div class="BNombre" id="Layer2" style="Z-INDEX: 103; LEFT: 438px; VISIBILITY: visible; WIDTH: 272px; POSITION: absolute; TOP: 150px; HEIGHT: 25px">BIENVENIDO 
			    AL SISTEMA</div>
		    <div id="Layer1" style="Z-INDEX: 101; LEFT: 70px; WIDTH: 200px; POSITION: absolute; TOP: 72px; HEIGHT: 115px"><img alt="" height="347" src="Global/Imagenes/Bienvenida.jpg" width="680" />
		    </div>            
        </form>

@stop

