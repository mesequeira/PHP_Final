<?php 
    include('inc/header.php');

    $id = $_GET['edit'];

    include('productoDatabase/obtenerProductoPorId.php');
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-4">
            <br>
            <h1>Editar Producto</h1>
            <form method="POST" action="productoDatabase/modificarProducto.php?edit=<?php echo $id ?>" enctype="multipart/form-data">
                <label for="titulo">Titulo:</label>
                <input class="form-control" name="titulo" value=<?php echo $row['Titulo'] ?> required type="text" id="titulo" placeholder="Escribe el titulo">
        
                <label for="descripcion">Descripción:</label>
                <textarea required id="descripcion" name="descripcion" cols="30" rows="5" class="form-control"><?php echo $row['Descripcion'] ?></textarea>
        
                <label for="categoria">Categoria:</label>
                <input class="form-control" name="categoria" value=<?php echo $row['Categoria'] ?> required type="text" id="categoria" placeholder="Seleccione la categoria">
        
                <label for="precioUnitario">Precio de venta:</label>
                <input class="form-control" name="precioUnitario" value=<?php echo $row['Precio_Unitario'] ?> required type="number" id="precioUnitario" placeholder="Precio de venta">
        
                <label for="imagen">Imagen:</label>
                <input class="form-control" name="imagen" value=<?php echo $row['Imagen'] ?> required type="file" id="imagen" accept="image/*">
        
                <label for="cantidad">Cantidad:</label>
                <input class="form-control" name="cantidad" value=<?php echo $row['Cantidad'] ?> min=0 required type="number" id="cantidad" placeholder="Cantidad o existencia">
        
                <br>
                <a role="button" href="index.php" class="btn btn-primary">Volver</a>
                <input class="btn btn-warning" type="submit" value="Editar">
            </form>
        </div>
    </div>
</div>

<?php 
    include('inc/footer.php');
?>