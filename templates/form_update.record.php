<?php function showFormRecordUpdate($idRecord){
    
    require_once 'templates/header.php';  ?>
    <body>
    <div class="container mt-5">

        <h2>Modificacion de Historial</h2>
        <form action="updateRecord" method="POST">
            
        <div class="mb-3">
                <label for="historial" class="form-label">Historial</label>
                    <input type="text" class="form-control" id="historial" name="historial">
            </div>
            <div class="mb-3">
                <label for="residencia" class="form-label">residencia</label>
                <input type="text" class="form-control" id="residencia" name="residencia">
            </div>
            <div class="mb-3">
                <label for="ciudad" class="form-label">ciudad</label>
                <input type="number" class="form-control" id="ciudad" name="ciudad">
            </div>
            <div class="mb-3">
                <label for="situacionParental" class="form-label">situacion Parental
                <input type="text" class="form-control" id="situacionParental" name="situacionParental">
            </div>
            <div class="mb-3">
                <label for="img" class="form-label">Imagen</label>
                <input type="text" class="form-control" id="img" name="img">
            </div>
            <button type="submit" class="btn btn-primary">Modificar</button>
        </form>
    </div>

    <?php

    require_once 'templates/footer.php'; 

 }