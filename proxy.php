<?php
  // La URL original que quieres ocultar
  $url = "https://warzss.github.io/test-instagram/";

  // Configuración de la solicitud para obtener el contenido de la URL
  $context = stream_context_create([
      "http" => [
          "header" => "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36"
      ]
  ]);

  // Obtener el contenido de la URL
  $contenido = file_get_contents($url, false, $context);

  // Mostrar el contenido para que se vea en el iframe
  echo $contenido;
?>
