<?php





?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/lumen/bootstrap.min.css">
    <!-- Optional JavaScript -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>


    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</head>

<body>
    <div class="row">
        <div class="col-md-8">
            <form method="GET" class="row">
                <div class="col-md-6">
                    <label for="cliente" class="form-label"><h4>Vehículos</h4> </label>
                    <select class="form-control form-select" id="vehiculo" name="vehiculo">
                        <option <?php echo $vehiculoId=="" ? "selected" : "" ?> value="">----Selecciona un vehiculo----</option>
                        <?php
                            foreach ($vehiculos as $vehiculo) {
                                echo "<option value=".$vehiculo['id']." ". ($vehiculo['id']== $vehiculoId ? "selected" : "") ." >".$vehiculo['placa']."</option>";
                            }
                        ?>
                    </select>
                </div>
                <div class="col-md-3" style="align-self: flex-end;">
                    <input class="btn btn-success mt-2" type="submit" value="Buscar" />
                </div>

            </form>
        </div>

    </div>
    <br />

<?php
    if ($vehiculoId != "" && $vehiculoInfo != null) {
?>
    <h3>
        Vehículo: Id: <?= $vehiculoInfo["id"]?>, Placa: <?= $vehiculoInfo["placa"]?>
    </h3>
    <table class="table table-hover">

        <tr>
            <td width="100">ID</td>
            <td><?= $clienteInfo["id"]?> </td>
        </tr>
        <tr>
            <td>Nombre:</td>
            <td><?= $clienteInfo["name"] . " " . $clienteInfo["apellidos"]  ?> </td>
        </tr>
        <tr>
            <td>Teléfono:</td>
            <td><?= $clienteInfo["telefono"]?> </td>
        </tr>

    </table>

    <h3>
        Reparaciones
    </h3>
    <table class="table table-hover">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>FECHA</th>
                <th>OBSERVACIÓN</th>
                <th>VALOR</th>
            </tr>
        </thead>

        <tbody>

        <?php foreach ($reparacionesInfo as $reparacion) { ?>
            <tr>
                <td><?= $reparacion["id"]?></td>
                <td><?= $reparacion["fecha"]?></td>
                <td><?= $reparacion["observacion"]?></td>
                <td>$<?= $reparacion["costo"]?></td>
            </tr>
        <?php
        }?>


        </tbody>

    </table>
    <?php
   }
?>
</body>

</html>
