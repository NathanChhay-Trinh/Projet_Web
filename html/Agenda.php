<!DOCTYPE html>
<html lang="fr">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/Agenda.css">
    <link rel="stylesheet" href="../css/Interface_de_base.css">

    <title>Agenda</title>

</head>

<body>

    

    <?php include("menu.php"); ?>
    <header class="agenda-header">
        <h1>Agenda des permanences</h1>
    </header>
    <div class="calendar">
        <button id="prev-week">◀</button>
        
        <script src="../js/Agenda.js" defer></script>
        <div class="calendar-header">
            
            
            
        </div>
    <button id="next-week">▶</button>
        <div class="calendar-grid">
            <!-- Les créneaux seront injectés ici en JS -->
        </div>
    </div>

    <?php include("Footer.php"); ?>

</body>

</html>