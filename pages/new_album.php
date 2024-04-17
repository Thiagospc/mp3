<a href="?page=albums">Voltar para os Álbums</a>
<h1>cadastrar novo Álbum</h1>

<form action="#" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <input type="text" name="name" placeholder="Nome:" class="form-control">
    </div>
    <br />
    <div class="form-group">
        <input type="file" name="image" class="form-control">
    </div>
    <br />
    <br />

    <button type="submit" class="btn btn-success">Cadastrar</button>
</form>

<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $album = $_POST['name'];
        $album = str_replace(' ', '_', $album);
        $path = "albums/{$album}";

        if (!is_dir($path)){
            mkdir($path);
        }

        $file = $_FILES['image']['name'];
        $file_extension = pathinfo($file, PATHINFO_EXTENSION);
        $file = "$album.$file_extension";
        $temp_file = $_FILES['image']['tmp_name']; 
    
        $destination = $path . '/' . $file; 
        
        if (move_uploaded_file($temp_file, $destination)) {
            header('Location: ?page=albums');
        } else {
            echo "Houve um erro ao enviar o arquivo.";
        }   
    }
?>

