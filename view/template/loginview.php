<?php include ("header.php")?>
<br>

<form action=/view/template/inicio.php"; method="post" style="float: center">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="correoIn" name="correoIn"placeholder="name@example.com">
                            <label for="correoIn">Correo Electronico</label>
                        </div>
                        <div class="form-floating">
                            <input type="password" class="form-control" id="contraseña" name="contraseña" placeholder="Password">
                            <label for="contraseñaIn">Contraseña</label>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn " name="inicioSeion" style="background-color: #7BDEF9  ;">Iniciar</button>
                </div>
                </form>

<?php include "fother.php";