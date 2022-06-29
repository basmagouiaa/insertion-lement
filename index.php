<!DOCTYPE html>
<html>
<head>
    <title>Insertion</title>
    <script>
        function addtolist()
        {
            document.getElementById('l').value = document.getElementById('l').value 
            + ' ' + document.getElementById('c').value 
        }
    
    </script>
</head>

<body>
    
    <form action="calcul.php" method="post">
        Inserer element: <input type="text" id="c" >
        <button type="button" onclick="addtolist()"> ADD </button> <br><br><br>
        Liste des entiers inseres: <input type="text" id="l" name="l">
        <br><br>
        <input type="submit">
    </form>

</body>
</html>
