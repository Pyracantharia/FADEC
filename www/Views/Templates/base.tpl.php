<!DOCTYPE html>
<html lang="fr">
   <head>
        <meta charset="UTF-8">
        <title>Back</title>
        <script src="https://cdn.jsdelivr.net/gh/Pyracantharia/CDN-FADEC@master/src/js/main.js" type="module" defer></script>
        <link href="https://cdn.jsdelivr.net/gh/Pyracantharia/CDN-FADEC@master/dist/main.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/signature_pad/1.3.4/signature_pad.js"></script>
        <script src="../js/functions.js"></script>
        <script src="/js/functions.js"></script>

    </head>

<body>
    <?php include "header.tpl.php"; ?>

    <?php include $this->view; ?>

    <?php include "footer.tpl.php"; ?>

</body>

</html>