<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currículum Vitae</title>
    <link rel="stylesheet" href="{{ public_path('css/app.css') }}">
    
</head>
<style>
    body{
    background-image: url("data:image/png;base64,{{ base64_encode(file_get_contents(public_path('imagenes/fondod.png'))) }}");
    background-repeat: no-repeat;
    }
</style>
<body>
   

        <div id="header">
            <div class="bqclog">
                <img class="imgd" src="{{ public_path('imagenes/bqc.png') }}">
            </div>
       </div>
       <div id="footer">
        <div class="bqcbajo">
            <img class="abajo" src="{{ public_path('imagenes/abajo.png') }}">
        </div>
    </div>
       <div class="contenido">
        <div class="encabezado">
            <div class="nombre">
                <a>Gilson Quito</a>
            </div>
            <div class="titulos">
                <a>Ing en sistemas</a>
            </div>
        </div>
        <div class="conta">
            <div class="left-div">
                <a>DATOS PERSONALES</a><br/>
                <a class="iz">E-MAIL</a><br/>
                <a>sdasdasdasdas@gmail.com</a><br/>
                <a class="iz">TELEFONO</a><br/>
                <a>0994406371</a><br/><br/>
                <a class="iz">N.U.I. </a>dadasdasdasd
            </div>
            <div class="right-div">
                Contenido del segundo div
            </div>
    
        </div>
        
            <div class="perfil-cont">
                <h2>PEFIL: </h2>
                <a>Ingeniero en Software con más de dos años de experiencia en desarrollo de software en PHD y más de un año trabajando con el framework Laravel. Experto en la gestión e implementación de metodologías para las etapas del ciclo de vida del desarrollo de software, así como la respectiva creación de documentación y recopilación de requisitos. Reconocido por desarrollar soluciones a medida que optimizan el negocio. Trabajo bajo estándares para generar opiniones positivas para los clientes. Autodidacta. Experto en el manejo de hardware y soporte técnico para equipos de cómputo con gran facilidad de palabra, fácil acoplamiento a grupos de trabajo cordial, respetuoso y puntual.</a>
            </div>
            <div class="experiencia">
                <h2>EXPERIENCIA ACADEMICA EN JYS</h2>
                <div>
                    <table>
                        <thead>
                            <tr>
                                <th>Columna 1</th>
                                <th>Columna 2</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Fila 1, Columna 1</td>
                                <td>Fila 1, Columna 2</td>
                            </tr>
                            <tr>
                                <td>Fila 2, Columna 1</td>
                                <td>Fila 2, Columna 2</td>
                            </tr>
                            <tr>
                                <td>Fila 3, Columna 1</td>
                                <td>Fila 3, Columna 2</td>
                            </tr>
                            <tr>
                                <td>Fila 4, Columna 1</td>
                                <td>Fila 4, Columna 2</td>
                            </tr>
                            <tr>
                                <td>Fila 5, Columna 1</td>
                                <td>Fila 5, Columna 2</td>
                            </tr>
                            <tr>
                                <td>Fila 6, Columna 1</td>
                                <td>Fila 6, Columna 2</td>
                            </tr>
                        </tbody>
                    </table>
    
                </div>
                
    
                <div>
                    <table>
                        <thead>
                            <tr>
                                <th>Columna 1</th>
                                <th>Columna 2</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Fila 1, Columna 1</td>
                                <td>Fila 1, Columna 2</td>
                            </tr>
                            <tr>
                                <td>Fila 2, Columna 1</td>
                                <td>Fila 2, Columna 2</td>
                            </tr>
                            <tr>
                                <td>Fila 3, Columna 1</td>
                                <td>Fila 3, Columna 2</td>
                            </tr>
                            <tr>
                                <td>Fila 4, Columna 1</td>
                                <td>Fila 4, Columna 2</td>
                            </tr>
                            <tr>
                                <td>Fila 5, Columna 1</td>
                                <td>Fila 5, Columna 2</td>
                            </tr>
                            <tr>
                                <td>Fila 6, Columna 1</td>
                                <td>Fila 6, Columna 2</td>
                            </tr>
                        </tbody>
                    </table>
    
                </div>
    
    
    
                <div>
                    <table>
                        <thead>
                            <tr>
                                <th>Columna 1</th>
                                <th>Columna 2</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Fila 1, Columna 1</td>
                                <td>Fila 1, Columna 2</td>
                            </tr>
                            <tr>
                                <td>Fila 2, Columna 1</td>
                                <td>Fila 2, Columna 2</td>
                            </tr>
                            <tr>
                                <td>Fila 3, Columna 1</td>
                                <td>Fila 3, Columna 2</td>
                            </tr>
                            <tr>
                                <td>Fila 4, Columna 1</td>
                                <td>Fila 4, Columna 2</td>
                            </tr>
                            <tr>
                                <td>Fila 5, Columna 1</td>
                                <td>Fila 5, Columna 2</td>
                            </tr>
                            <tr>
                                <td>Fila 6, Columna 1</td>
                                <td>Fila 6, Columna 2</td>
                            </tr>
                        </tbody>
                    </table>
    
                </div>
            </div>
    
       </div>
      
    
   
</body>
</html>