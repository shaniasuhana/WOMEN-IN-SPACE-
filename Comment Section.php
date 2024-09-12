<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comments</title>
    <link rel="stylesheet" href="styles.css" type="text/css"/>
</head>
<body>
   

    <?php 
// Handle form submission
if (isset($_POST['submit'])) {
    $name = htmlspecialchars($_POST['name']);
    $comment = htmlspecialchars($_POST['comment']);
    
    // Open the file to get the old comments
    $old = fopen("comments.txt", "r");
    $old_comments = fread($old, filesize("comments.txt"));
    fclose($old);

    // Create the new comment string
    $new_comment = "<div class='comment'><span>" . $name . "</span><br />" .
        "<span>" . date("Y/m/d") . " | " . date("h:i A") . "</span><br />" .
        "<span>" . $comment . "</span></div>\n";

    // Write the new comment along with the old ones
    $write = fopen("comments.txt", "w");
    fwrite($write, $new_comment . $old_comments);
    fclose($write);

    echo "<h2>Your comment has been submitted!</h2>";
}

// Display the comments on the page
if (file_exists("comments.txt")) {
    $comments = file_get_contents("comments.txt");
    echo "<h3>Comments:</h3>";
    echo $comments;
} else {
    echo "<h3>No comments yet. Be the first to comment!</h3>";
}
?>


</body>
</html>
