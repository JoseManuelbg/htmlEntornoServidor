<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario seguro</title>
</head>
<body>
    <form action="formProcess.php" method="get">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" required placeholder="Name" maxlength="10" size="10">
        <label for="age">Age</label>
        <input type="number" name="age" id="age" required placeholder="Age" min="1" max="100">
        <button type="submit">Submit</button>
    </form>
</body>
</html>