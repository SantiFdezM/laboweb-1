<?php
    include_once("../header.php");
if(!empty($_POST)){
$error = 0;
if(empty($_POST['nombre']))
{
$error = 1;
}
else{
$nombre = $_POST['nombre'];
}
if(empty($_POST['descripcion']))
{
$error = 1;
}
else{
$descripcion = $_POST['descripcion'];
}
if($error == 1){
echo '<div class="alert alert-danger">ERROR se deben de llenar todos los campos de la forma.</div>';}
else{
$query = "INSERT INTO categoria(`id`,`nombre`,`descripcion`) VALUES ('1QQ','1QQ','1QQ')";
$result = $db->squery_rows($query, array(NULL,$nombre,$descripcion));
if($result == 1){
header('Location: categoria.php');
}
}
}
?>
<div class='col-sm-12' style='margin-top: 70px; text-align: center;'>
<h2 style='margin-top: 0px; font-weight: bold; font-size: 35px;color: #E42B22;'>Añadir categoria</h2>
</div>
<div class='col-lg-10 col-lg-offset-1'>
<form action='addcategoria.php' method='post'>
<div class='form-group'>
<input class='form-control text-box single-line input-validation-error' data-val='true' data-val-required='Campo requerido' name='nombre' placeholder='Nombre' type='text' value=''>
</div>
<div class='form-group'>
<input class='form-control text-box single-line input-validation-error' data-val='true' data-val-required='Campo requerido' name='descripcion' placeholder='descripcion' type='text' value=''>
</div>
<div class='form-group' style='width: 100%; margin-bottom: 0px;'>
<div class='col-sm-6 col-sm-offset-3' style='text-align: center;'>
<input type='submit' value='Guardar' class='btn btn-primary btn-lg' style='padding: 7px 0px !important; width: 100%; text-align: center;'>
</div>
<div class='col-sm-6 col-sm-offset-3' style='text-align: center; margin-top:10px;'>
<a class='btn btn-default btn-lg' href='categoria.php' style='padding: 7px 0px !important; width: 100%; text-align: center;'>Cancelar</a>
</div>
</div>
</form>
</div>
<?php
    include_once("../footer.php");
?>
