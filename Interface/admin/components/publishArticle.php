<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Publicar um artigo</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>

<div class="col-lg-8 col-md-8 col-sd-8"">

<form action="../admin/components/addArticle.php" method="post">
    <div class="form-group">
        <label>Nome do artigo</label><br>
        <input class="form-control" type="text" placeholder="inserir texto aqui" name="plantName"><br>
        <label>Subtitulo do artigo</label><br>
        <input class="form-control" type="text" placeholder="inserir texto aqui" name="articleSubtitle"><br>
        <label>Corpo do artigo</label><br>

        <textarea title="Article text" name="plantText" placeholder="Escreva aqui" id="plantText"></textarea>

        <script>
            CKEDITOR.replace('plantText');
        </script>

        <br>
        <input type="submit" class="btn btn-default">
    </div>

</form>