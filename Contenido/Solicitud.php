<!DOCTYPE html>
<html lang="en">
<head>
<!--<meta http-equiv="refresh" content="30">-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/propio.css">
    <script src="../js/jquery.min.js"></script>

    <title>Ticket Nuevo</title>
</head>
<body class="bodyindex">
    <div class="row container-fluid titulo1">
    <div class="col-4">
     
     <h4>
     <span>   
    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-3d-cube-sphere" width="40" height="40" viewBox="0 0 24 24" stroke-width="2" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
        <path d="M6 17.6l-2 -1.1v-2.5" />
        <path d="M4 10v-2.5l2 -1.1" />
        <path d="M10 4.1l2 -1.1l2 1.1" />
        <path d="M18 6.4l2 1.1v2.5" />
        <path d="M20 14v2.5l-2 1.12" />
        <path d="M14 19.9l-2 1.1l-2 -1.1" />
        <line x1="12" y1="12" x2="14" y2="10.9" />
        <line x1="18" y1="8.6" x2="20" y2="7.5" />
        <line x1="12" y1="12" x2="12" y2="14.5" />
        <line x1="12" y1="18.5" x2="12" y2="21" />
        <path d="M12 12l-2 -1.12" />
        <line x1="6" y1="8.6" x2="4" y2="7.5" />
    </svg>
     </span>    
     Soporte Técnico</h4>
    </div>
    <div class="col-4">
        
    </div>
    <div class="col-2">
        <p><span>
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-building-skyscraper" width="32" height="32" viewBox="0 0 24 24" stroke-width="2" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
        <line x1="3" y1="21" x2="21" y2="21" />
        <path d="M5 21v-14l8 -4v18" />
        <path d="M19 21v-10l-6 -4" />
        <line x1="9" y1="9" x2="9" y2="9.01" />
        <line x1="9" y1="12" x2="9" y2="12.01" />
        <line x1="9" y1="15" x2="9" y2="15.01" />
     <line x1="9" y1="18" x2="9" y2="18.01" />
        </svg> 
        </span>Empresa</p>
    </div>
    <div class="col-2">
       
        <p> <span>
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="32" height="32" viewBox="0 0 24 24" stroke-width="2" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
        <circle cx="12" cy="7" r="4" />
        <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
        </svg></span>  Usuario</p>
    </div>
    </div>
    <br>
    <div class="row container-fluid " >
        <div class="col-8 formulario">
            <form action="#" method="POST" enctype="multipart/form-data">
                <fieldset>
                    <legend><h2>Generar Nuevo Ticket</h2></legend>
                    <br>
                    <input type="email" class="form-control" name="correo"  placeholder="Correo Electrónico">
                    <br>
                    <input type="number" class="form-control" name="tel"  placeholder="Telefono De Contacto">
                    <br>
                    <input type="text" class="form-control" name="asunto"  placeholder="Asunto">
                    <br>
                    <textarea class="form-control" name="comentarios" rows="3" placeholder="Comentarios"></textarea>
                    <br>
                    
                    <select class="form-select" aria-label="select example">
                    <option selected>Selecciona Tipo De Prioridad</option>
                    <option value="1">Alta</option>
                    <option value="2">Media</option>
                    <option value="3">Baja</option>
                    </select>
                    <br>
                    <label for="archivo">Cargar Imágen Del Problema</label>
                    <input type="file" name="captura">
                    <br>
                    <br>
                    <input type="submit" name="enviar" value="Enviar Ticket" class="btn btn-primary">
                </fieldset>
            </form>

        </div>
    </div>
    <br>
    <footer class="titulo1">
        <div class="row container-fluid">
            <div class="col-2">
                <h6 class="text center">Servicio Mesa De Ayuda</h6>
            </div>
        </div>
    </footer>
</body>
</html>