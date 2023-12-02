<!-- formulario de alta de tarea -->
<?php function showForm(){ 
    require_once 'templates/header.php';  ?>
    <body>
    <div class="container mt-5">
        <h2>Carga de niños</h2>
        <form action="addItem" method="POST">
            <div class="mb-3">
                <label for="categoria" class="form-label">Historial</label>
               
            </div>
            <div class="mb-3">
                <label for="codigo" class="form-label">Código</label>
                <input type="text" class="form-control" id="idCodigoProducto" name="codigo">
            </div>
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombreProducto" name="nombre">
            </div>
            <div class="mb-3">
                <label for="apellido" class="form-label">Apellido</label>
                <input type="number" class="form-control" id="precio" name="apellido">
            </div>
            <div class="mb-3">
                <label for="edad" class="form-label">Edad</label>
                <input type="text" class="form-control" id="marca" name="edad">
            </div>
            <div class="mb-3">
                <label for="sexo" class="form-label">Sexo</label>
                <input type="text" class="form-control" id="imagenProducto" name="sexo">
            </div>
            <button type="submit" class="btn btn-primary">Guardar Producto</button>
        </form>
    </div>

    <?php

    require_once 'templates/footer.php'; 

 }