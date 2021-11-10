<!doctype html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h1>Forum</a>
</h1>
<h4>Community for users!</h4>
<form action="write_ok.php" method="post" enctype="multipart/form-data">
    <textarea
        name="title"
        rows="1"
        cols="40"
        placeholder="Title"
        maxlength="100"
        required="required"></textarea><br>
    <textarea name="content" cols="40" placeholder="Content" required="required"></textarea><br>
    <input type="file" name="imgfile">
   <br> <button type="submit">Write</button>
</form>
</body>
</html>
