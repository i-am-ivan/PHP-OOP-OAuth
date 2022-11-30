<?php
// Display the data from the records file

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
    </head>
    <body>
        <div class="containter">
            <a href="submit.php"> Add New </a>
        </div>
        <div class="container">
            <table border="1">
                <thead>
                    <th>Book ID</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Year</th>
                    <th>Journal</th>
                    <th>DOI</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <?php
                    // Fetch Data from file
                    $books = file_get_contents('records.php');
                    // Decode inot array

                    index = 0;
                    // Align into rows
                    foreach($books as $row){
                        echo "
                            <tr>
                                <td>"$row->id."</td>
                                <td>"$row->title."</td>
                                <td>"$row->author."</td>
                                <td>"$row->year."</td>
                                <td>"$row->journal."</td>
                                <td>"$row->doi."</td>
                                <td>
                                    <a href=''></a>
                                    <a href=''></a>
                                </td>
                            </tr>
                        ";
                        // Increment based on number of rows
                        $index++:
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </body>
</html>