

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="X-UA-Compatible" content="IE=7" /><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><title>
	Página sin título
</title><link href="../Global/Estilos/SISPER.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript">
            function DoHourglass() {
                document.body.style.cursor = 'wait';
                document.onkeydown = function () { return false; };
                document.onclick = function () { return false; };
            }

            function DoTAB(keypress) {
                var e = event.srcElement;
                if (event.keyCode == 13) {
                    switch (e.type) {
                        case "text": event.keyCode = 9; break;
                        case "select-one": event.keyCode = 9; break;
                        case "radio": event.keyCode = 9; break;
                        case "checkbox": event.keyCode = 9; break;
                        case "dropdownlist": event.keyCode = 9; break;
                    }
                }
            }
            window.document.onkeydown = DoTAB;
        </script>  
</head>
<body onbeforeunload="DoHourglass();" onunload="DoHourglass();" topmargin="0" bottommargin="0" leftmargin="0" rightmargin="0" scroll="no" bgproperties="fixed" style="BACKGROUND-REPEAT:no-repeat">
		<form method="post" action="RTALOGIN.aspx" id="form1">
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="Mzj9y9fWX+L6S87YwxqAX2QeTwoYlvoufgnAd9yRBRt7SOUTnx0VAJNasdeHCmLHp68CSM+vfTGLFJaSJ1wMIlzHK4JGkQicsCuzIU2AoAUslF1zrULicxJTxJqHT0VQKF7iSZWzWyfHEzgMlDyuTD/oRuKqkAuJtONHCVnh/QggFGKQ+yheEAUN/OrQp1NU3K/+YdF0XhWaJo/2dt4/By8qc9vjDK2o5Zs/r8OWULytvvnXHVeuMSIYk2BzbXK//I+gStU+mNc59O1T7iyJNeilsghBo2U6XNEzaMJGE/7tPD37euhTCEbpJ7pxRphqEsaROvNNP3yNTm3FhBurNhkayAiOzO94HjdxMIPzfxqF9Je6AmK+J/dNfjxXBGDu80NeigeJwmu9KcqZbqyCvlwewMpCSM3tbZrTNIvjTk0NklHhch51Bbxzuii0kQ/BY5QjErxojDL/Rw8nD0Id+9S7z1dk12JmGY2aDwUt307X9258PXP3GXsLIVSvOELexaAg4cNf4EP6N42l/PwLfWib9f2XEu5ys65gWsKfBl8UYZxVztt5GFU4Gvbp3brUEMUTxFhtrMh9sG/f/abBlkSpLvo=" />

<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="8E04198F" />
<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="V21I8oFe4aj7djlhX4DeNCTLkElt662e2J2CgE/kTZQD/MUL56RkGl9teFyHi/4h1uzLF5TImBcyfZ8Y9Y7BohBc8JpzUAH+nuZXrSDD32G3Cw12pX+EhAblN2RHgKTAQTYIi6wl8+V0BX1F0EJPaAK3Ow6puyNnS3HUG6BIPgvOKW9tlLpgX6o7CH0bX9GY5xn0Daon5S4pZXUkQtQu6cHY8Vw+GCWW4JSsn97T7Ho9zWL1ZbgCvB3JmWj83zVFgrmd1w==" />
			<img src="../Global/Imagenes/LogoSISPER.jpg" style="Z-INDEX:100; LEFT:0px; POSITION:absolute; TOP:0px;" />
		    <img src="../Global/Imagenes/Linea.jpg" style="z-index: 101; POSITION:absolute; HEIGHT:2px; left: 160px; top: 287px;" width="530" />
            <table border="0" cellpadding="0" cellspacing="0" style="z-index: 102; left: 235px; position: absolute; top: 320px;">
                <tr align="center">
                    <td>
                        <div id="pnl_Logueo" style="position: relative">
	
		                    <table id="tbl_Logueo" border="0" cellpadding="3" cellspacing="0" style="WIDTH: 260px" visible="false" >
			                    <tr>
					                <td style="WIDTH: 90px" align="left">
					                    <span id="Label3" class="Campo">Usuario:</span></td>
					                <td>
						                <input name="txt_Usuario" type="text" maxlength="25" id="txt_Usuario" tabindex="1" class="Valor" />
				                    </td>
				                </tr>
				                <tr>
					                <td style="WIDTH: 90px" align="left">
						                <span id="Label4" class="Campo">Contraseña:</span></td>
					                <td>
						                <input name="txt_Contraseña" type="password" maxlength="25" id="txt_Contraseña" tabindex="2" class="Valor" />
				                    </td>
				                </tr>
				                <tr>
					                <td style="WIDTH: 90px" align="left">
						                <span id="Label5" class="Campo">Región:</span></td>
					                <td>
						                <select name="ddl_Dominio" id="ddl_Dominio" tabindex="3" class="Valor">
		<option selected="selected" value="148.226.12.13">XALAPA</option>
		<option value="148.226.223.5">VERACRUZ</option>
		<option value="148.226.220.4">CORDOBA-ORIZABA</option>
		<option value="148.226.210.8">POZA RICA-TUXPAN</option>
		<option value="148.226.200.221">COATZA-MINA</option>

	</select>
					                </td>
				                </tr>
				                <tr>
					                <td style="width: 90px"></td>
					                <td style="height: 15px"></td>
				                </tr>
				                <tr align="center">
					                <td align="center" style="width: 90px"></td>
					                <td align="center"><input type="image" name="imb_IniSesion" id="imb_IniSesion" tabindex="4" OnMouseOut="this.src=&#39;../Global/Imagenes/Botones/IniSesionA.jpg&#39;" OnMouseOver="this.src=&#39;../Global/Imagenes/Botones/IniSesionE.jpg&#39;" src="../Global/Imagenes/Botones/IniSesionA.jpg" />
				                </td>
				                </tr>
			                </table>
                        
</div>
                    </td>
                </tr>
                <tr height="90px" valign="bottom">
                    <td>
                        
                    </td>
                </tr>
            </table>
		
<script>wmAtributos = 'dialogWidth:330px; dialogHeight:170px; resizable=no; center=yes; scrollbars=no; status=no; minimize=no; edge=raised; help=no;'</script></form>
	</body>
</html>

