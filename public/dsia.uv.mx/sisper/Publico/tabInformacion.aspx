

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><meta http-equiv="X-UA-Compatible" content="IE=7" /><title>
	Página sin título
</title><link href="../Global/Estilos/SISPER.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript">
            function MM_reloadPage(init) {  //reloads the window if Nav4 resized
                if (init == true) with (navigator) {
                    if ((appName == "Netscape") && (parseInt(appVersion) == 4)) {
                        document.MM_pgW = innerWidth;
                        document.MM_pgH = innerHeight;
                        onresize = MM_reloadPage;
                    }
                }
                else
                    if (innerWidth != document.MM_pgW || innerHeight != document.MM_pgH)
                        location.reload();
            }

            MM_reloadPage(true);

            function MM_preloadImages() { //v3.0
                var d = document;
                if (d.images) {
                    if (!d.MM_p)
                        d.MM_p = new Array();
                    var i, j = d.MM_p.length, a = MM_preloadImages.arguments;
                    for (i = 0; i < a.length; i++)
                        if (a[i].indexOf("#") != 0) {
                            d.MM_p[j] = new Image;
                            d.MM_p[j++].src = a[i];
                        }
                }
            }

            function MM_swapImage() { //v3.0
                var i, j = 0, x, a = MM_swapImage.arguments;
                document.MM_sr = new Array;
                for (i = 0; i < (a.length - 2) ; i += 3)
                    if ((x = MM_findObj(a[i])) != null) {
                        document.MM_sr[j++] = x;
                        if (!x.oSrc)
                            x.oSrc = x.src;
                        x.src = a[i + 2];
                    }
            }

            function MM_findObj(n, d) { //v4.01
                var p, i, x;
                if (!d)
                    d = document;
                if ((p = n.indexOf("?")) > 0 && parent.frames.length) {
                    d = parent.frames[n.substring(p + 1)].document;
                    n = n.substring(0, p);
                }
                if (!(x = d[n]) && d.all)
                    x = d.all[n];
                for (i = 0; !x && i < d.forms.length; i++)
                    x = d.forms[i][n];
                for (i = 0; !x && d.layers && i < d.layers.length; i++)
                    x = MM_findObj(n, d.layers[i].document);
                if (!x && d.getElementById)
                    x = d.getElementById(n);
                return x;
            }
        </script>
    </head>
    <body onload="MM_preloadImages('Imagenes/tab2.jpg','Imagenes/tab.jpg','Imagenes/BloquesE.jpg','/Imagenes/BloquesA.jpg')" bottommargin="0" topmargin="0" leftmargin="0" rightmargin="0">
        <form method="post" action="tabInformacion.aspx" id="form1">
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="eXim0qn8TgUYqIEH7qL9n6tdFnfviirbwPZKMMeU3EaaI2YiqkSEQsoXXSnHDD2yVixynD7pa6gX5EQdhG3wcB+mY/YbegmxQ5ag5NeYn/o=" />

<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="CDB6E3FC" />
              

		    <div id="LyTable" style="Z-INDEX: 102; VISIBILITY: visible;WIDTH: 312px; POSITION: absolute; TOP: 6px; height: 24px; left: -20px;">
			    <table cellspacing="0" cellpadding="0" align="left" border="0">
				    <tr align="left"> <!--Fila de Botones-->
                        
					    <td align="center" width="104" height="18"><!--Armar los botones a los que tiene permiso-->
						    <div id="LyBtN3" style="Z-INDEX: 2; WIDTH: 104px; POSITION: absolute;">
							    <IMG id="imgn3_0" src="../Global/Imagenes/tab.jpg" border="0" name="imgn3_0" />
						    </div>
						    <div id="LyTxN3" onclick="MM_swapImage('imgn3_0','','../Global/Imagenes/tab.jpg',1);
							    
								    MM_swapImage('imgn3_1','','../Global/Imagenes/tab2.jpg',1);
							    
						        " style="Z-INDEX: 3; WIDTH: 104px; POSITION: absolute; HEIGHT: 25px;">
							    <A class="TxtTabs" href="lnkDocumentos.aspx" target="fraInfoSISPER">
								    Doctos.
							    </A>
						    </div>
					    </td>
					    
					    <td align="center" width="104" height="18"><!--Armar los botones a los que tiene permiso-->
						    <div id="LyBtN3" style="Z-INDEX: 2; WIDTH: 104px; POSITION: absolute;">
							    <IMG id="imgn3_1" src="../Global/Imagenes/tab2.jpg" border="0" name="imgn3_1" />
						    </div>
						    <div id="LyTxN3" onclick="MM_swapImage('imgn3_1','','../Global/Imagenes/tab.jpg',1);
							    
								    MM_swapImage('imgn3_0','','../Global/Imagenes/tab2.jpg',1);
							    
						        " style="Z-INDEX: 3; WIDTH: 104px; POSITION: absolute; HEIGHT: 25px;">
							    <A class="TxtTabs" href="infPreguntas.aspx" target="fraInfoSISPER">
								    Preguntas
							    </A>
						    </div>
					    </td>
					    
					    </tr>
				    </table>
			    </div> <!--Termina tercer nivel-->
			    
				    <div id="LyLinea" style="Z-INDEX:103; LEFT:32px; POSITION:absolute; TOP:32px">
				        <img src="../Global/Imagenes/Linea.jpg" width="312 px" height="4" />
				    </div>
			    <span id="lblNombre" class="Nombre" style="Z-INDEX:100; LEFT:32px; POSITION:absolute; TOP:-3px"></span>		
        </form>
    </body>
</html>