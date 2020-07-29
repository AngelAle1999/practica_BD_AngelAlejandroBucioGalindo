<form action="{{route("recursos.store")}}" method="POST">
@csrf
<div class="form-group">
    <label for="nombre">Nombre</label>
    <input class="form-control" type="text" name="nombre">
<div>
<div class="form-group">
    <label for="Tipo">Tipo</label>
    <input class="form-control" type="text" name="Tipo">
<div>
<div class="form-group">
    <label for="descripcion">Descripcion</label>
    <input class="form-control" type="text" name="descripcion">
<div>
<div class="form-group">
    <label for="precio">Precio</label>
    <input class="form-control" type="number" name="precio">
<div>
<div class="form-group">
    <label for="cantidad">Cantidad</label>
    <input class="form-control" type="number" name="cantidad">
<div>
<div class="form-group">
    <label for="fEntrega">Fecha Entrega</label>
    <input class="form-control" type="number" name="fEntrega">
<div>
<input type="submit" value="Enviar" class="btn btn-prymary">
</form>