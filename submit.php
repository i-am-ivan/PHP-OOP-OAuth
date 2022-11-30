<?php

    // Save record to file
    if(isset($_POST['save'])){
        // Open JSON file
        $books = file_get_contents('records.json');
        $books = json_encode($books);

        // Get data from form
        $input = array(
                    'id' => $_POST['id'],
                    'title' => $_POST['title'],
                    'author' => $_POST['author'],
                    'year' => $_POST['year'],
                    'journal' => $_POST['journal'],
                    'doi' => $_POST['doi']
        );

        // Append data to array
        $books[] = $input;
        // Encode to data file
        $books = json_encode($books, JSON_PRETTY_PRINT);
        file_put_contents('records.json', $books);
        // Redirect to display records
        header('Location: list.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Post Data to data file</title>
    </head>
    <body>
        <form action="" method="post">
            <a href="index.php"> < Back</a>
            <div class="container">
                <label for="id"> Book ID </label>
                <input type="text" name="id" id="id">
            </div>
            <div class="container">
                <label for="title"> Title </label>
                <input type="text" name="title" id="title">
            </div>
            <div class="container">
                <label for="author"> Authors </label>
                <input type="text" name="author" id="author">
            </div>
            <div class="container">
                <label for="year">Year</label>
                <input type="text" name="year" id="year">
            </div>
            <div class="container">
                <label for="journal"> Journal </label>
                <input type="text" name="journal" id="journal">
            </div>
            <div class="container">
                <label for="doi">DOI</label>
                <input type="text" name="doi" id="doi">
            </div>
            <div class="container">
                <input type="submit" value="Save" name="save" id="save">
            </div>
        </form>
    </body>
</html>