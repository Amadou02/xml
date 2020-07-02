<?php 
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'https://rmcsport.bfmtv.com/rss/info/flux-rss/flux-toutes-les-actualites/');
// $content = $curl('https://rmcsport.bfmtv.com/rss/info/flux-rss/flux-toutes-les-actualites/');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$content = curl_exec($curl);
var_dump($content);

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.0/slate/bootstrap.min.css"
        integrity="sha384-idNH3UIOiZbCf8jxqu4iExnH34y5UovfW/Mg8T5WfNvoJolDvknoNqR69V2OexgF" crossorigin="anonymous">
    <title>Actu sport</title>
</head>

<body>
    <div class="container">
        <h1>Actu sport</h1>

    </div>

</body>

</html>