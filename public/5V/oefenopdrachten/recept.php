<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Recept</title> <style>
        :root {
            --primary: #2c3e50;
            --accent: #d35400;
            --bg: #f8f9fa;
            --card-bg: #ffffff;
            --text: #333333;
            --text-muted: #666666;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: var(--bg);
            color: var(--text);
            margin: 0;
            padding: 40px 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            box-sizing: border-box;
        }

        .recipe-card {
            background: var(--card-bg);
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            overflow: hidden;
            width: 100%;
            max-width: 480px;
            transition: transform 0.2s ease;
        }

        .recipe-card:hover {
            transform: translateY(-4px);
        }

        .recipe-image {
            width: 100%;
            height: 250px;
            object-fit: cover;
            background-color: #eaeaea; /* Fallback als afbeelding mist */
        }

        .recipe-content {
            padding: 30px;
        }

        .recipe-type {
            display: inline-block;
            text-transform: uppercase;
            font-size: 0.75rem;
            font-weight: 600;
            letter-spacing: 1px;
            color: var(--accent);
            margin-bottom: 8px;
        }

        .recipe-title {
            font-family: 'Playfair Display', serif;
            font-size: 2rem;
            font-weight: 800;
            color: var(--primary);
            margin: 0 0 20px 0;
            line-height: 1.2;
        }

        .recipe-meta {
            display: flex;
            justify-content: space-between;
            border-top: 1px solid #eeeeee;
            padding-top: 20px;
        }

        .meta-item {
            display: flex;
            flex-direction: column;
            gap: 4px;
        }

        .meta-label {
            font-size: 0.8rem;
            color: var(--text-muted);
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .meta-value {
            font-size: 1rem;
            font-weight: 600;
            color: var(--primary);
        }
    </style>
</head>
<body>

<?php 
// Jouw PHP data array
$recept = array(
    "naam" => "Beef and Guinness pie",
    "type" => "hoofdgerecht",
    "personen" => 4,
    "tijd" => 180,
    "afbeelding" => "beef-and-guinness-pie.jpg"
); 

// Berekening voor uren/minuten weergave
$uren = floor($recept["tijd"] / 60);
$minuten = $recept["tijd"] % 60;
$tijd_weergave = $uren > 0 ? "{$uren} u" . ($minuten > 0 ? " {$minuten} min" : "") : "{$minuten} min";
?>

<article class="recipe-card">
    <!-- De afbeelding uit de array -->
    <img class="recipe-image" src="<?= htmlspecialchars($recept["afbeelding"]) ?>" alt="<?= htmlspecialchars($recept["naam"]) ?>">
    
    <div class="recipe-content">
        <span class="recipe-type"><?= htmlspecialchars($recept["type"]) ?></span>
        <h1 class="recipe-title"><?= htmlspecialchars($recept["naam"]) ?></h1>
        
        <div class="recipe-meta">
            <div class="meta-item">
                <span class="meta-label">Porties</span>
                <span class="meta-value">👥 <?= htmlspecialchars($recept["personen"]) ?> personen</span>
            </div>
            <div class="meta-item">
                <span class="meta-label">Tijd</span>
                <span class="meta-value">⏱️ <?= $tijd_weergave ?></span>
            </div>
        </div>
    </div>
</article>

</body>
</html>