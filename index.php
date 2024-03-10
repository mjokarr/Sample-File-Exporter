<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Exporter</title>
</head>
<body>

    <div class="main">
        <h1 class="head-h1">File Exporter</h1>
        <form action="./Process.php" method="post">

            <input type="text" name="title" id="" placeholder="Title Here">
            <br>
            <textarea name="content" id="" placeholder="Content Here" style="height: 100px;"></textarea>
            <br>
            <select name="format">
                <option value="Text">Text File</option>
                <option value="Pdf">PDF File</option>
                <option value="Json">Json File</option>
            </select>
            <br>
            <button type="submit">Export</button>
        </form>
    </div>
</body>
</html>