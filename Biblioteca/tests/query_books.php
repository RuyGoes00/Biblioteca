<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?= $_SERVER['PHP_SELF']?>" method="post">
        <input type="text" name="search">
        <button type="submit">Enviar</button>
    </form>
    <div style="display: flex; flex-wrap: wrap; margin: 30px;">

    <?php 
        $pesquisa = "Diario de um banana";
        function getBookBySearch($search){
            $url = file_get_contents("https://www.googleapis.com/books/v1/volumes?q=$search&key=AIzaSyDipEexZymPc2FvmqFCT9gbUcbHBp0TwbE");
            $result = file_get_contents($url);
            $result = json_decode($result,true);
            return $result;
        }
        getBookBySearch($pesquisa);
        function getInfoLivro($arr, $id){
            $dados = $arr['items'][$id];
            return $dados;
        }    
        getInfoLivro($result, 1);
    ?>
</div>
</body>
</html>














