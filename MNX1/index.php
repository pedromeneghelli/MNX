<?php

$rssFeedUrl = "http://agenciabrasil.ebc.com.br/rss/ultimasnoticias/feed.xml";


function carregarNoticias($url) {
    $rss = simplexml_load_file($url);
    
    
    if (!$rss) {
        echo "Erro ao carregar o feed RSS.";
        return;
    }

    
    echo "<div class='container'>";
    echo "<h1>{$rss->channel->title}</h1>";
    echo "<p>{$rss->channel->description}</p>";

    
    foreach ($rss->channel->item as $item) {
        echo "<div class='noticia'>";
        echo "<h2><a href='{$item->link}' target='_blank'>{$item->title}</a></h2>";
        echo "<p><span class='data'>" . date('d/m/Y H:i', strtotime($item->pubDate)) . "</span></p>";
        echo "<p>{$item->description}</p>";
        echo "</div>";
    }
    echo "</div>";
}


carregarNoticias($rssFeedUrl);
?>


<style>
    
    body {
        font-family: Arial, sans-serif;
        background-color: #f0f2f5;
        color: #333;
        margin: 0;
        padding: 0;
    }

    
    .container {
        max-width: 800px;
        margin: 40px auto;
        padding: 20px;
        background-color: #ffffff;
        border-radius: 12px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        text-align: center;
    }

    
    h1 {
        font-size: 2em;
        color: darkblue;
        margin-bottom: 10px;
    }

    
    .container p {
        color: black;
        font-size: 1.1em;
        margin-bottom: 30px;
    }

    
    .noticia {
        border-bottom: 1px solid #ddd;
        padding: 20px;
        text-align: left;
    }

    
    .noticia h2 {
        font-size: 1.6em;
        margin: 0 0 10px;
    }

    
    .noticia h2 a {
        color: darkblue;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    
    .noticia h2 a:hover {
        color: red;
        text-decoration: underline;
    }

    
    .data {
        font-size: 0.9em;
        color: #888;
        font-style: italic;
        margin-bottom: 10px;
    }

    
    .noticia p {
        line-height: 1.6;
        color: #444;
        font-size: 1.1em;
        margin: 0;
    }

    
    .noticia:hover {
        background-color: #f9f9ff;
        border-radius: 8px;
        padding: 25px;
        transition: background-color 0.3s ease, padding 0.3s ease;
    }
</style>
