<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Adding an article</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<div class="container my-5 ">
    <h1 class="text-center">Adding an article</h1>
    <div class="col-sm-6 mx-auto">
        <form action="/addArticle" method="post">
            @csrf
            <div class="mb-3">
                <input name="title" type="text" class="form-control" placeholder="Heading">
            </div>
            <div class="mb-3">
                <textarea class="form-control" name="article" placeholder="Text of the article"></textarea>
            </div>
            <div class="mb-3">
                <input name="author" type="text" class="form-control" placeholder="Author">
            </div>
            <div class="mb-3">
                <input  type="submit" class="form-control btn btn-primary" value="Add">
            </div>
        </form>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
