<?php

class ListView {

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
                <?php foreach($list as $item) { ?>      
                    <tr>
                        <td><?php echo $item->codigo; ?></td>
                        <td><?php echo $item->nombre; ?></td>
                        <td><?php echo $item->Apellido; ?></td>
                        <td><?php echo $item->Edad; ?></td>
                        <td><?php echo $item->Sexo; ?></td>
                        
                        <td><a href="listId/<?php echo $childen->idNiño; ?>" class="btn btn-primary">Ver niño</a></td>
                    </tr>      
                <?php } ?>
            </tbody>
        </table>
        <?php
        require 'templates/footer.php';
    }
    
    public function showChildenListById($list) {
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
                    <th>Residencia</th>
                    <th>Ciudad</th>
                    <th>Situacion Parental</th>
                    <th>Salud</th>
                    <th>Imagen</th>
                    <th>Otros</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php foreach($list as $item) { ?>      
                    <tr>
                        <td><?php echo $item->idCodigo; ?></td>
                        <td><?php echo $item->nombre; ?></td>
                        <td><?php echo $item->apellido; ?></td>
                        <td><?php echo $item->edad; ?></td>
                        <td><?php echo $item->sexo; ?></td>
                        <td><?php echo $item->residecia; ?></td>
                        <td><?php echo $item->ciudad; ?></td>
                        <td><?php echo $item->situacionParental; ?></td>
                        <td><?php echo $item->salud; ?></td>
                        <td><?php echo $item->img; ?></td>
                        <td><?php echo $item->otros; ?></td>

                        <td><img src="<?php echo $childen->img; ?>"class="imagen"></td>
                        <td><a href="list" class="btn btn-primary">Volver</a></td>
                    </tr>      
                <?php } ?>
            </tbody>
        </table>
        <?php
        require 'templates/footer.php';
    }

    public function showError($error) {
        require 'templates/header.php';
        
        echo "
            <div class='alert alert-danger' role='alert'>
                $error
            </div> 
        ";
        require 'templates/footer.php';
    }
}
