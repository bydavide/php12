<?php include ("header.php"); ?>
<br>
<form action="registroUsuario.php" method="post">
    <div class="form-floating mb-3">
        <input type="twxt" class="form-control" id="nombre"  name="nombres"  placeholder="Nombres">
        <label for="nombres">Nombres</label>
    </div>

    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="apellido" name="apellidos"  placeholder="Apellidos">
        <label for="apellidos" >Apellidos</label>
    </div>

    <div>
        <label for="tipoDocumento" class="form-label"></label>
        <select id="tipoDocumento"  name="tipoDocumento"  class="form-select">
            <option selected>Tipo de Documento</option>
            <option>Cedula de Ciudadania</option>
            <option>Ceula extragera</option>
            <option>NIT</option>
        </select>
    </div>
    <br>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="numeroDocumento"  name="numeroDocumento" placeholder="122345677890">
        <label for="numeroDocumento" >Numero de Documento</label>
    </div>

    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="telefonoo" name="telefono"  placeholder="123456234">
        <label for="telefono" >Numeo de Contacto</label>
    </div>


    <div class="form-floating mb-3">
        <input type="email" class="form-control" id="correo" name="correo" placeholder="name@example.com">
        <label for="correo" >Correo Electronico</label>
    </div>

    <div class="form-floating">
        <input type="password" class="form-control" id="contraseña" name="contraseña" placeholder="Password">
        <label for="contraseña" >Contraseña</label>
    </div>



    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button  type="submit" class="btn " name="btnRegistrar" style="background-color: #7BDEF9  ;">Registrarse</button>
    </div>
    </div>

</form>


<?php include ("fother.php"); ?>
