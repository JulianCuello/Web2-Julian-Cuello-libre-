<?php

    class recordView{


    function showRecord($records){
        require 'templates/header.php';

        ?>
        <table class="table">
            <thead>
                <tr>
                    <th>Residencia</th>
                    <th>Ciudad</th>
                    <th>Situacion Parental</th>
                    <th>Salud</th>
                    <th>Imagen</th>
                    <th>Otros</th>

                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($records as $Childen) { ?>      
                    <tr>
                        <td><?php echo $childen->residencia; ?></td>
                        <td><?php echo $childen->ciudad; ?></td>
                        <td><?php echo $$childen->situacionParental; ?></td>
                        <td><?php echo $childen->salud; ?></td>
                        <td><?php echo $childen->img; ?></td>
                        <td><?php echo $childen->otros; ?></td>

                        <td><img src="<?php echo $childen->img; ?>"class="imagen"></td>
                        <td><a href="recordId/<?php echo $childen->idRecord; ?>" class="btn btn-primary">niños relacionados</a></td>
                    </tr>      
                <?php } ?>
            </tbody>
        </table>
        <?php
        require 'templates/footer.php';
    }

    function showchildensRecordById($categorias){
        require 'templates/header.php';

        ?>
        <table class="table">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Edad</th>
                    <th>Sexo</th>
                   
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($categorias as $childen) { ?>      
                    <tr>
                        <td><?php echo $childen->codigo; ?></td>
                        <td><?php echo $childen->nombre; ?></td>
                        <td><?php echo $childen->apellido; ?></td>
                        <td><?php echo $childen->edad; ?></td>
                        <td><?php echo $childen->sexo; ?></td>
                        
                        <td><a href="record" class="btn btn-primary">Volver</a></td>   
                    </tr>      
                <?php } ?>
            </tbody>
        </table>
        <?php
        require 'templates/footer.php';
    }
        // gestion categorias
    function showRecordsAdmin ($categorias){
        require 'templates/header.php';

        ?>
        <table class="table">
            <thead>
                <tr>
                    <th>Residencia</th>
                    <th>Ciudad</th>
                    <th>Situacion Parental</th>
                    <th>Salud</th>
                    <th>Imagen</th>
                    <th>Otros</th>

                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($categorias as $childen) { ?>      
                    <tr>
                        
                        <td><?php echo $childen->residencia; ?></td>
                        <td><?php echo $childen->ciudad; ?></td>
                        
                        <td><img src="<?php echo $childen->imagenCategoria; ?>"class="imagen"></td>

                        <td><a href="recordId/<?php echo $childen->idCategoria; ?>" class="btn btn-primary">PChicos relacionados relacionados</a>
                            <a href="removeRecord/<?php echo $childen->idCategoria; ?>" type="button" class='btn btn-danger ml-auto'>Eliminar</a>
                            <a href="formRecordUpdate/<?php echo $childen->idCategoria; ?>" type="button" class='btn btn-success ml-auto'>Modificar</a>
                        </td>
                    </tr>      
                <?php } ?>
            </tbody>
        </table>
        <?php
        require 'templates/footer.php';
    }
 }
