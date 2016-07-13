<h1>Título desde la respuesta ajax fancybox</h1>
<hr style="width: 500px;" />
<table class="table table-bordered table-striped table-hover">
    <thead>
        <tr>
            <td>ID</td>
            <td>Nombre</td>
            <td>E-Mail</td>
        </tr>
    </thead>
    <tbody>
        <?php
        for($i=1;$i<10;$i++)
        {
            ?>
            <tr>
                <td><?php echo $i?></td>
                <td>Nombre_<?php echo $i?></td>
                <td>correo_<?php echo $i?>@gmail.com</td>    
            </tr>
            <?php
        }
        ?>
        
    </tbody>
</table>
