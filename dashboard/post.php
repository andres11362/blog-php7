<?php require "header.php"; ?>
<?php require "navbar.php"; ?>

<div class="container-fluid">
    <div class="row">
        <?php require "sidebar.php"; ?>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h1 class="page-header">Dashboard</h1>

            <h2 class="sub-header">New post</h2>
        </div>
        <div class="row">
            <div class="col-sm-9 col-sm-offset-3 col-md-7 col-md-offset-2 main">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="titulo">Title</label>
                        <input type="text" class="form-control" id="titulo" name="contenido" placeholder="New title">
                    </div>
                    <div class="form-group">
                        <label for="categ">Category</label>
                        <select name="categ" class="form-control" id="categ">
                            <option value="" disabled selected>Select your option</option>
                            <option value="volvo">Volvo</option>
                            <option value="saab">Saab</option>
                            <option value="mercedes">Mercedes</option>
                            <option value="audi">Audi</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="contenido">Content</label>
                        <textarea class="form-control" rows="3" id="contenido" name="contenido" placeholder="New content"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">File input</label>
                        <input type="file" id="exampleInputFile">
                        <p class="help-block">Example block-level help text here.</p>
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
            <div class="col-md-2 main">
                <form>
                    <div class="form-group">
                        <label for="new_category">New Category</label>
                        <input type="text" class="form-control" id="new_category" name="category" placeholder="New category">
                    </div>
                    <button type="submit" class="btn btn-default btn-block" id="category">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php require "footer.php" ?>



