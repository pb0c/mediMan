<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir Empleado</title>
</head>
<body>
    <h1>Hola soy un H1</h1>
    <div>
        <div>
            <form action="/agEmp" method="POST" >
            {{ csrf_field() }}
                <label>RUT</label>
                <input type="text" name="rut" id="rutEmp" placeholder="xx.xxx.xxx-x"></br>
                <label>Nombre</label>
                <input type="text" name="nombre" id="nomEmp" placeholder="Ingrese Nombre"></br>
                <label>Apellido</label>
                <input type="text" name="apellido" id="apEmp" placeholder="Ingrese Apellido"></br>
                <label>Rol Empleado</label>
                <select name="rol">
                    <option value="">Seleccione Rol</option>
                    <option value="admin">Administrador</option>
                    <option value="recep">Recepcionista</option>
                    <option value="kine">Kinesiólogo</option>
                </select></br>
                <label>Teléfono</label>
                <input type="text" name="telefono" id="telEmp" placeholder="+569xxxxxxxx"></br>
                <label>Contraseña</label>
                <input type="text" name="password" id="passEmp" placeholder="Ingrese Contraseña"></br>
                <input type="text" name="password" id="passEmp2" placeholder="Repita Contraseña"></br>
                <input type="submit" name="agregar" value="Añadir Usuario">
            </form>
        </div>
    </div>
</body>
</html>