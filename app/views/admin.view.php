<?php

class AdminView {

    public function showChildenList($list) {
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
                <?php foreach($list as $childen) { ?>      
                    <tr>
                        <td><?php echo $item->codigo; ?></td>
                        <td><?php echo $item->nombre; ?></td>
                        <td><?php echo $item->apellido; ?></td>
                        <td><?php echo $item->edad; ?></td>
                        <td><?php echo $item->sexo; ?></td>
                        

                            <a href="listId/<?php echo $childen->idniño; ?>" class="btn btn-primary">Ver niño</a>
                            <a href="removechild/<?php echo $childen->idniño; ?>" type="button" class='btn btn-danger ml-auto'>Eliminar</a>
                            <a href="updateChild/<?php echo $childen->idniño; ?>" type="button" class='btn btn-success ml-auto'>Modificar</a>

                        </td>
                        </tr>      
                <?php } ?>
            </tbody>
        </table>
        <?php
        require 'templates/footer.php';
    }

    public function showRecord($records) {
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
                <?php foreach($record as $records) { ?>      
                    <tr>
                        
                        <td><?php echo $item->residencia; ?></td>
                        <td><?php echo $item->ciudad; ?></td>
                        <td><?php echo $item->situacioParental; ?></td>
                        <td><?php echo $item->salud; ?></td>
                        <td><?php echo $item->img; ?></td>
                        <td><?php echo $item->otros; ?></td>

                       
                        <td>
                            <a href="recordId/<?php echo $childen->idRecord; ?>" class="btn btn-primary">Ver Producto</a>
                            <a href="removeRecord/<?php echo $childen->idRecord; ?>" type="button" class='btn btn-danger ml-auto'>Eliminar</a>
                            <a href="updateRecord/<?php echo $childen->idRecord; ?>" type="button" class='btn btn-success ml-auto'>Modificar</a>

                        </td>
                        </tr>      
                <?php } ?>
            </tbody>
        </table>
        <?php
        require 'templates/footer.php';
    }

}