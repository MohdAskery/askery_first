<?php
echo ' <form action="get-data-first-1-form.php" method="post">
    <div class="form-group">
        <label for="category_name">Category Name</label>
        <input type="text" name="category_name" class="form-control" id="category_name" aria-describedby="emailHelp" placeholder="category name">
    </div>
     <div class="form-group">
    <label for="category_description">Categoryescription</label>
    <textarea class="form-control" name="category_description" id="category_description" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Upload</button>
    </form>';

?>