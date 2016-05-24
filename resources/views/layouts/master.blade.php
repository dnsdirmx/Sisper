<!-- Stored in resources/views/layouts/master.blade.php -->

<html>
    <head>
        <title>Sisper</title>
        <link href="Global/Estilos/SISPER.css" rel="stylesheet" type="text/css" />
        <link href="css/hector.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
    
    
    
    
    <div id="top">
    <div id="Layer1" style="LEFT: 0px; POSITION: absolute; TOP: 0px">
            <img src="Global/Imagenes/Pleca/PlecaSup.jpg" width="719" height="82" border="0" usemap="#Map" /> 
            <map name="Map">
                <area shape="rect" coords="677,50,695,72" href="Publico/infContactos.aspx" target="fraMainSISPER" alt="Contactos de Apoyo" />
			</map>
		</div>
		<div id="Layer2" style="LEFT: 715px; POSITION: absolute; TOP: 0px; width: 220px;">
		    <img src="Global/Imagenes/Pleca/PlecaBorde.jpg" width="350" height="82" />
		</div>

    </div>
    
    <div class="main">
        @yield('content')
    </div>
    
    <div class="left">
        <ul id="menu">
            <div id="Layer1" style="Z-INDEX:1; LEFT:0px; POSITION:absolute; TOP:0px" align="center">
				<table width="146" border="0" cellspacing="0" cellpadding="0">
					<tbody>
						<tr>
							<td height="77" valign="top">
							    <img height="62" src="Global/Imagenes/Pleca/PlecaInf.jpg" width="146" border="0"/>
							</td>
						</tr>
						<tr>
							<td width="34"></td>
						</tr>
						<tr>
							<td height="50">
							    <a href="fraInformacion.aspx?mnu=Reg" target="fraMainSISPER">
							        <img src="Global/Imagenes/BtnMenu/RegistroA.jpg" name="imgRegistro" width="142" height="40" border="0" id="imgRegistro" onClick="MM_swapImage('imgRegistro','','Global/Imagenes/BtnMenu/RegistroE.jpg','imgReporte','','Global/Imagenes/BtnMenu/ReportesA.jpg','ImgRpts','','Global/Imagenes/BtnMenu/CatalogosA.jpg','imgBuzon','','Global/Imagenes/BtnMenu/BuzonA.jpg','ImgModif','','Global/Imagenes/BtnMenu/ModificacionA.jpg','imgConsultas','','Global/Imagenes/BtnMenu/ConsultasA.jpg',1)"/>
							    </a>
							</td>
						</tr>
						<tr>
							<td height="50">
							    <a href="fraInformacion.aspx?mnu=Rep" target="fraMainSISPER">
							        <img src="Global/Imagenes/BtnMenu/ReportesA.jpg" name="imgReporte" width="142" height="40" border="0" id="imgReporte" onClick="MM_swapImage('imgRegistro','','Global/Imagenes/BtnMenu/RegistroA.jpg','imgReporte','','Global/Imagenes/BtnMenu/ReportesE.jpg','ImgRpts','','Global/Imagenes/BtnMenu/CatalogosA.jpg','imgBuzon','','Global/Imagenes/BtnMenu/BuzonA.jpg','ImgModif','','Global/Imagenes/BtnMenu/ModificacionA.jpg','imgConsultas','','Global/Imagenes/BtnMenu/ConsultasA.jpg',1)"/>
							    </a>
							</td>
						</tr>
					    <tr>
							<td height="50">
							    <a href="fraInformacion.aspx?mnu=Buz" target="fraMainSISPER">
							        <img src="Global/Imagenes/BtnMenu/BuzonA.jpg" name="imgBuzon" width="142" height="40" border="0" id="imgBuzon" onClick="MM_swapImage('imgRegistro','','Global/Imagenes/BtnMenu/RegistroA.jpg','imgReporte','','Global/Imagenes/BtnMenu/ReportesA.jpg','ImgRpts','','Global/Imagenes/BtnMenu/CatalogosA.jpg','imgBuzon','','Global/Imagenes/BtnMenu/BuzonE.jpg','ImgModif','','Global/Imagenes/BtnMenu/ModificacionA.jpg','imgConsultas','','Global/Imagenes/BtnMenu/ConsultasA.jpg',1)"/>
							    </a>
							</td>
						</tr>
                        <tr>
                            <td>
                                <a href="Publico/fraInformacion.aspx" target="fraMainSISPER" onClick="MM_swapImage('imgLogin','','Global/Imagenes/BtnMenu/LogueoA.jpg','imgInfo','','Global/Imagenes/BtnMenu/InformacionE.jpg','imgGuia','','Global/Imagenes/BtnMenu/GuiaA.jpg',1)"><img src="Global/Imagenes/BtnMenu/InformacionA.jpg" name="imgInfo" width="142" height="40" border="0"/></a>
                            </td>
							<td height="20"></td>
						</tr>
						<tr>
							<td></td>
							<td height="25"></td>
						</tr>
						<tr>
		                    <!-- <td height="22"><a href="Guia/Guia-POA06.pdf" target="fraMainSISPER" onClick="MM_swapImage('imgLogin','','Global/Imagenes/BtnMenu/LogueoA.jpg','imgInfo','','Global/Imagenes/BtnMenu/InformacionA.jpg','imgGuia','','Global/Imagenes/BtnMenu/GuiaE.jpg',1)"><img src="Global/Imagenes/BtnMenu/GuiaA.jpg" alt="Gu&iacute;a de usuario" name="imgGuia" width="142" height="40" border="0"></a></td>  -->					
                            <td height="22">
                                <a href="Publico/lnkGuias.aspx" target="fraMainSISPER" onClick="MM_swapImage('imgLogin','','Global/Imagenes/BtnMenu/LogueoA.jpg','imgInfo','','Global/Imagenes/BtnMenu/InformacionA.jpg','imgGuia','','Global/Imagenes/BtnMenu/GuiaE.jpg',1)"><img src="Global/Imagenes/BtnMenu/GuiaA.jpg" alt="Gu&iacute;a de usuario" name="imgGuia" width="142" height="40" border="0"/></a>
                            </td>
							<td height="22"></td>
						</tr>
						<tr>
							<td height="35"></td>
						</tr>
						<tr>
							<td height="20"></td>
						</tr>
					</tbody>
				</table>
				<input type="image" name="imb_FinSesion" id="imb_FinSesion" src="Global/Imagenes/Botones/FinSesionA.jpg" onclick="cerrar();" />
			</div>

        </ul>
    </div>
    
    </body>
</html>
