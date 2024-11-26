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
        /*
        $books = [];
        function getBook($pesquisa){
    $livro_url = strtolower(urlencode($pesquisa));
    $page = file_get_contents("https://www.googleapis.com/books/v1/volumes?q=$livro_url");
    $data = json_decode($page, true);
    if (isset($data)){
        $quant_livros = count($data["items"]);
        #var_dump($data);
        for ($i=0; $i < $quant_livros; $i++) { 
            if (isset($data['items'][$i]['volumeInfo']['imageLinks']['thumbnail'])){
                $capa = $data['items'][$i]['volumeInfo']['imageLinks']['thumbnail'];
                $id = $data['items'][$i]['id'];
                return $books = [
                    'capa' => $capa,
                    'id' => $id
                ];
            }
            
        }}
    };
        #echo $capa;
        echo "<a href='livro.php?id=".$books['capa']."><img src=".$books['id']." alt='Capa do Livro'></a>";
        if ($_POST){

            $pesquisa = $_POST['search'];
            
            if (isset($pesquisa)){
    
    $toUrl = strtolower(urldecode($pesquisa));
    $require = file_get_contents("https://www.googleapis.com/books/v1/volumes?q=$toUrl");
    $biblioteca = json_decode($require, true);
    $livro_url = strtolower(urlencode($pesquisa));
    $page = file_get_contents("https://www.googleapis.com/books/v1/volumes?q=$livro_url");
    $data = json_decode($page, true);
    if (isset($data)){
        $quant_livros = count($data["items"]);
        #var_dump($data);
        for ($i=0; $i < $quant_livros; $i++) { 
            
            if (isset($data['items'][$i]['volumeInfo']['imageLinks']['thumbnail'])){
                $capa = $data['items'][$i]['volumeInfo']['imageLinks']['thumbnail'];
                $id = $data['items'][$i]['id'];
                echo $id;
                #echo $capa;
                echo "<a href='livro.php?id=$id'><img src='$capa' alt='Capa do Livro'></a>";
            }
        }
    }
}
}*/
        if (isset($_GET['error'])){
          if ($_GET['error'] = "id-não-fornecido"){
            echo "<script>alert('Não foi pssivel encontrar esse id!! Tente novamente!!')</script>";
          }
        }
          $json = json_decode(file_get_contents("destaque.json"), true);
        for ($i = 0; $i < count($json["romance"]); $i++) {
          $codigo = $json["romance"][$i];
          $page = file_get_contents("https://www.googleapis.com/books/v1/volumes/$codigo");
          if (isset($page)) {

            $dados = json_decode($page, true);
            if (isset($dados)) {
              if (isset($dados['id'])) {
                $id = $dados['id'];
              } else {
                $id = "indefinida";
              }
              if (isset($dados['volumeInfo']['title'])) {
                $nome = $dados['volumeInfo']['title'];
              } else {
                $nome = "indefinida";
              }
              if (isset($dados['volumeInfo']['publishedDate'])) {
                $dataLançamento = $dados['volumeInfo']['publishedDate'];
              } else {
                $dataLançamento = "indefinida";
              }

              if (isset($dados['volumeInfo']['authors'][0])) {
                $autor = $dados['volumeInfo']['authors'][0];
              } else {
                $autor = "indefinida";
              }

              if (isset($dados['volumeInfo']['industryIdentifiers'][0]['identifier'])) {
                $isbn = $dados['volumeInfo']['industryIdentifiers'][0]['identifier'];
              } else {
                $isbn = "indefinida";
              }
              if (isset($dados['volumeInfo']['imageLinks'])) {
                $capa = $dados['volumeInfo']['imageLinks']['thumbnail'];
                $objeto = "{
                    \"id\": \"$id\",
                    \"nome\": \"$nome\",
                    \"autor\": \"$autor\",
                    \"ISBN\": \"$isbn\",
                    \"dataLançamento\": \"$dataLançamento\",
                    \"capa\": \"$capa\"
                }<br>";
                
                echo $objeto;   
              }
            }
          } else {
          }
        }
?>
</div>
</body>
</html>














