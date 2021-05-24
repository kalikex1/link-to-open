<?php
require_once "functions.inc.php";
if (isset($_POST["submit"])) {
    $links = $_POST["links"];
    $links = preg_replace('/\s+/',';',str_replace(array("\r\n","\r","\n"),' ',trim($links)));
    $lines = explode(";", $links);
    $total_line = count($lines);
    for ($i=0; $i < $total_line; $i++) {
        $link = $lines[$i];
        echo "<script>window.open('$link');</script>";
    }
    $data["tabs_opened"] = $total_line;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Link to Open</title>
</head>
<body class="bg-light">
    <div class="container py-5">
        <div class="row">
            <div class="mx-auto border rounded bg-white col-md-8 shadow p-4">
                <h1 class="fw-bold text-center mb-3">Link to Open</h1>
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="links" class="form-label">Enter Links Here</label>
                        <textarea class="form-control" id="links" rows="10" name="links"></textarea>
                        <?php if (isset($data)) { ?>
                        <p>Tabs Opened: <?php echo $data["tabs_opened"]; ?></p>
                        <?php } ?>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">OPEN NOW!</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>