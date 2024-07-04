

<div id="contacto" class="container-flex mt-5 mx-5 mb-5 pt-5 pb-5">
    <h3>Contacto</h3><br>
    <form action="contacto.php" method="POST">
        
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre" required>
        </div>

        <div class="mb-3">
            <label for="asunto" class="form-label">Asunto</label>
            <input type="text" name="asunto" class="form-control" id="asunto" placeholder="asunto" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Nombre@Ejemplo.com" required>
        </div>

        <div class="form-floating" >
        <textarea class="form-control" id="mensaje" name="mensaje" required style="height: 100px" rows="3" placeholder="Escriba aqui su motivo de contacto..." ></textarea>
        <label for="floatingTextarea2">motivo de contacto</label>
        </div>

        <button type="submit" class="btn btn-success mt-3">Enviar</button>
    </form>
</div>
<footer class="bd-footer py-4 py-md-5 mt-5 bd-body-tertiary">
<hr class=" text-white-50">