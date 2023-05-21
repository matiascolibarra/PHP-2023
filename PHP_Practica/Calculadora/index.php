<!DOCTYPE html>
<html lang="es">
<head>
    <title>Calculadora</title>
</head>
<body>
    <h1>Calculadora</h1>
    <form action="function.php" method="post">
        <label for="n1">Numero 1</label>
        <input id="n1" type="text" name="num1" placeholder="Ingrese un numero" required><br><br>
        <label for="n2">Numero 2</label>
        <input id="n2" type="text" name="num2" placeholder="Ingrese un numero" required><br><br>
        <select name="operator">
            <option value="Suma">Suma (+)</option>
            <option value="Resta">Resta (-)</option>
            <option value="Multiplicacion">Multiplicacion (*)</option>
            <option value="Division">Division (/)</option>
        </select><br><br>
        <input type="submit" value="calcular">
    </form>
  
</body>

</html>