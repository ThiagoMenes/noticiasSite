<html>
    <head>
        <meta charset="utf-8">
        
        <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Sonsie+One" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>
        <header>
            <h1>Inserir No Firebase</h1>
            <img src="./img/sp.jpg">
        </header>


        <form method="post" name="adiciona" action="addNoticiaBanco.php" autocomplete="off">
            <hr />
            <div class="form-group col-md-6">
            <label for="inputlg" for="name"><p>Título</p></label>
            <input type="text" class="form-control" name="titulo" required="required" placeholder="Titulo da noticia">
    
            <label for="inputlg" for="name"><p>Corpo</p></label>
            <input type="text" class="form-control" name="corpo" required="required" placeholder="Corpo da Notícia">
           
            <label for="inputlg" for="name"><p>Fonte</p></label>
            <input type="text" class="form-control" name="fonte" required="required" placeholder="Fonte">
           
            <br>
            <br>
            
            <input type="submit" value="Adicionar Notícia">
            </div>
        </form>
            