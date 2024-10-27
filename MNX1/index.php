<?php
// URL do feed RSS
$rssFeedUrl = "http://agenciabrasil.ebc.com.br/rss/ultimasnoticias/feed.xml";

// Função para carregar e exibir as notícias do feed RSS
function carregarNoticias($url) {
    $rss = simplexml_load_file($url);
    
    // Verifica se o feed foi carregado corretamente
    if (!$rss) {
        echo "Erro ao carregar o feed RSS.";
        return;
    }

    // Exibe o título do feed
    echo "<div class='container'>";
    echo "<h1>{$rss->channel->title}</h1>";
    echo "<p>{$rss->channel->description}</p>";

    // Percorre os itens (notícias) no feed
    foreach ($rss->channel->item as $item) {
        echo "<div class='noticia'>";
        echo "<h2><a href='{$item->link}' target='_blank'>{$item->title}</a></h2>";
        echo "<p><span class='data'>" . date('d/m/Y H:i', strtotime($item->pubDate)) . "</span></p>";
        echo "<p>{$item->description}</p>";
        echo "</div>";
    }
    echo "</div>";
}

// Chama a função para exibir as notícias
carregarNoticias($rssFeedUrl);
?>

<!-- Estilos CSS mais detalhados -->
<style>
    /* Body e configurações gerais */
    body {
        font-family: Arial, sans-serif;
        background-color: #f0f2f5;
        color: #333;
        margin: 0;
        padding: 0;
    }

    /* Container da aplicação */
    .container {
        max-width: 800px;
        margin: 40px auto;
        padding: 20px;
        background-color: #ffffff;
        border-radius: 12px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        text-align: center;
    }

    /* Título principal */
    h1 {
        font-size: 2em;
        color: darkblue;
        margin-bottom: 10px;
    }

    /* Descrição do feed */
    .container p {
        color: black;
        font-size: 1.1em;
        margin-bottom: 30px;
    }

    /* Estilo das notícias */
    .noticia {
        border-bottom: 1px solid #ddd;
        padding: 20px;
        text-align: left;
    }

    /* Títulos das notícias */
    .noticia h2 {
        font-size: 1.6em;
        margin: 0 0 10px;
    }

    /* Links de título */
    .noticia h2 a {
        color: darkblue;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    /* Efeito hover nos links */
    .noticia h2 a:hover {
        color: red;
        text-decoration: underline;
    }

    /* Data de publicação */
    .data {
        font-size: 0.9em;
        color: #888;
        font-style: italic;
        margin-bottom: 10px;
    }

    /* Parágrafos de descrição das notícias */
    .noticia p {
        line-height: 1.6;
        color: #444;
        font-size: 1.1em;
        margin: 0;
    }

    /* Efeito de hover para cada bloco de notícia */
    .noticia:hover {
        background-color: #f9f9ff;
        border-radius: 8px;
        padding: 25px;
        transition: background-color 0.3s ease, padding 0.3s ease;
    }
</style>
