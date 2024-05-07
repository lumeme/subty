<?php
include 'cors.php';

// Obtener el valor del parámetro lang de la petición GET
$lang = isset($_GET['lang']) ? $_GET['lang'] : 'en';

$json = [
    [
        "title" => [
            "es" => "Traducción",
            "en" => "Translation"
        ],
        "description" => [
            "es" => "Rompemos las barreras lingüísticas, permitiendo que tu contenido llegue a audiencias internacionales.",
            "en" => "We break down linguistic barriers, allowing your content to reach international audiences."
        ]
    ],
    [
        "title" => [
            "es" => "Subtitulación",
            "en" => "Subtitling"
        ],
        "description" => [
            "es" => "Transmitimos tu mensaje con precisión cultural, conectando con tu audiencia de manera efectiva.",
            "en" => "We convey your message with cultural accuracy, connecting with your audience effectively."
        ]
    ],
    [
        "title" => [
            "es" => "Transcripción",
            "en" => "Transcription"
        ],
        "description" => [
            "es" => "Nuestro enfoque en la excelencia asegura transcripciones precisas y confiables para tu éxito.",
            "en" => "Our focus on excellence ensures accurate and reliable transcriptions for your success."
        ],
    ],
    [
        "title" => [
            "es" => "Edición de video",
            "en" => "Video editing"
        ],
        "description" => [
            "es" => "Nuestros expertos en edición trabajan con precisión y creatividad para fusionar escenas, añadir efectos visuales y pulir cada detalle.",
            "en" => "Our editing experts work with precision and creativity to blend scenes, add visual effects, and polish every detail."
        ],
    ],
];

// Filtrar el contenido del JSON basado en el valor de lang
foreach ($json as &$item) {
    if (isset($item['title'][$lang])) {
        $item['title'] = $item['title'][$lang];
    }
    if (isset($item['description'][$lang])) {
        $item['description'] = $item['description'][$lang];
    }
}

echo json_encode($json);