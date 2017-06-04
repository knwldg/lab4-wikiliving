<?php

echo ('

<div id="editor_texto">

            <div class="col-lg-8 col-md-8 col-sd-8">
                <h1 class="page-header">Publicar um artigo</h1>
                <form action="../components/addArticle.php" method="post">
                    <div class="form-group">
                        <label>Nome do artigo</label><br>
                        <input class="form-control" type="text" placeholder="inserir texto aqui" name="plantName" id="plantName"><br>
                        <label>Nome do autor</label><br>
                        <input class="form-control" type="text" placeholder="inserir texto aqui" name="authorName" id="authorName"><br>
                        <label>Corpo do artigo</label><br>
                        <textarea class="form-control" rows="40" name="plantText" id="plantText"></textarea><br>
                        <button type="submit" class="btn btn-default">Publicar</button><br>
                    </div>

                </form>
            </div>
            
');

