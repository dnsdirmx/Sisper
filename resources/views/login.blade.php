<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>

		<link href="Global/Estilos/SISPER.css" rel="stylesheet" type="text/css" />
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

<script type="text/javascript">
//<![CDATA[
var theForm = document.forms['form1'];
if (!theForm) {
    theForm = document.form1;
}
function __doPostBack(eventTarget, eventArgument) {
    if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
        theForm.__EVENTTARGET.value = eventTarget;
        theForm.__EVENTARGUMENT.value = eventArgument;
        theForm.submit();
    }
}
//]]>
</script>


<script src="/SisPer/Registro/WebResource.axd?d=pynGkmcFUV13He1Qd6_TZHyQQ5AYaX8p5ijwxXDeweps2n2QOekvof0sy2uoqMWbLuydqg2&amp;t=635375059334701695" type="text/javascript"></script>


<script src="/SisPer/Registro/WebResource.axd?d=JoBkLzP19aTuxbWOhHobYg847eq3ObwLV5WWISBcagqjm9M8t-pn8CIlII6iqI1U_H-ZsQ2&amp;t=635375059334701695" type="text/javascript"></script>
<div class="aspNetHidden">

	<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="8E04198F" />
	<input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="" />
	<input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="" />
	<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="fkJmify8s9XDA4+xrpHGo/RhY1ETn67YvftHImAmiHjbN9hZ3WmZ8Xiocst6l9ylNj6xwdS8cjZaPPFFyd1AIeeysLxMUndHHJJEnAB2UitHTA4zk0EfqCESOEdW+rSeoh4IfRZEtuj0a7UWxLxwVmANKMTOPhryOH3dnZp9i3VEdCmzcuLGmJoWTXXqpLY/tUE0pnjYcfFTYlh93ucwv0B4hP5oG4qf6bBo/LLpG6AFGOY69wcRED8ZGMK1LoZfDWBuIg==" />
</div>
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
						                <input name="txt_Usuario" type="text" maxlength="25" id="txt_Usuario" tabindex="1" class="Valor" style="width:150px;" />
				                    </td>
				                </tr>
				                <tr>
					                <td style="WIDTH: 90px" align="left">
						                <span id="Label4" class="Campo">Contraseña:</span></td>
					                <td>
						                <input name="txt_Contraseña" type="password" maxlength="25" id="txt_Contraseña" tabindex="2" class="Valor" style="width:150px;" />
				                    </td>
				                </tr>
				                <tr>
					                <td style="WIDTH: 90px" align="left">
						                <span id="Label5" class="Campo">Región:</span></td>
					                <td>
										<select name="ddl_Dominio" id="ddl_Dominio" tabindex="3" class="Valor" style="width:156px;">
										<?php

										foreach($dominios as $dominio)
										{
											echo "<option value='".$dominio->ip."'>".$dominio->nombre."</option>".PHP_EOL;
										}
										?>


	</select>
					                </td>
				                </tr>
				                <tr>
					                <td style="width: 90px"></td>
					                <td style="height: 15px"></td>
								</tr>

								<tr align="center">
					                <td align="center" style="width: 90px"></td>
					                <td align="center"><input type="image" name="imb_IniSesion" id="imb_IniSesion" tabindex="4" OnMouseOut="this.src=&#39;Global/Imagenes/Botones/IniSesionA.jpg&#39;" OnMouseOver="this.src=&#39;Global/Imagenes/Botones/IniSesionE.jpg&#39;" src="../Global/Imagenes/Botones/IniSesionA.jpg" />
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
		
<script>wmAtributos = 'dialogWidth:330px; dialogHeight:170px; resizable=no; center=yes; scrollbars=no; status=no; minimize=no; edge=raised; help=no;'</script>
<script type="text/javascript">
//<![CDATA[
WebForm_AutoFocus('txt_Usuario');//]]>
</script>
</form>
	</body>
</html>

