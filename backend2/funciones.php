
<?php
function navbar() {
    $barra = [
        "Inicio",
        "Nosotros",
        "Parcelas",
        "Solo terreno",
        "Preguntas Frecuentes",
        "Casa en parcela",
        "Contacto"
    ];

    $lista2 = '<ul class="navbar-nav mx-auto mb-2 mb-md-0">'; // Inicializa

    for ($i = 0; $i < count($barra); $i++) {
        $lista = '<li class="nav-item">' . '<a class="nav-link" href="#' . $barra[$i] . '">' . $barra[$i] . '</a></li>';
        $lista2 .= $lista; // Agrega cada elemento a $lista2
    }
    $lista2 .= '</ul>';
    return $lista2;
}


function mostrarParcelas($numero){

    // descripcion y valor
    $propiedad1 = ["Es un buen lugar, con vista al mar y buena ubicación", 1500000];
    $propiedad2 = ["Amplio apartamento en el centro de la ciudad", 1200000];
    $propiedad3 = ["Terreno con jardín y piscina", 2500000];

    $array = [$propiedad1, $propiedad2, $propiedad3];
    $mostrar = $array[$numero];

    // Formatear el valor con separadores de miles
    $valorFormateado = number_format($mostrar[1], 0, '', '.');

        $lista = '<div class="col-md-4">
        <div class="card mb-4 box-shadow">
          <img class="card-img-top" src="assets\img\img-parcelas-y-terreno\parcela'. $numero + 1 .'.jpg" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">'. $mostrar[0] . '</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
              </div>
              <small class="text-muted">$ ' . $valorFormateado . '</small>
            </div>
          </div>
        </div>
      </div>';
    return $lista;
}

function mostrarTerreno($numero){

    // descripcion y valor
    $terreno1 = ["Es un buen lugar para vivir en familia", 1560070];
    $terreno2 = ["Es un lugar amplio para disfrutar del ambiente", 1900100];
    $terreno3 = ["El terreno es muy acogedor", 2200020];

    $array = [$terreno1, $terreno2, $terreno3];
    $mostrar = $array[$numero];

        // Formatear el valor con separadores de miles
        $valorFormateado = number_format($mostrar[1], 0, '', '.');

        $lista = '<div class="col-md-4">
        <div class="card mb-4 box-shadow">
          <img class="card-img-top" src="assets\img\img-parcelas-y-terreno\terreno'. $numero + 1 .'.jpg" alt="Card image cap" style="height: 200px; object-fit: cover;">
          <div class="card-body">
            <p class="card-text">'. $mostrar[0] . '</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
              </div>
              <small class="text-muted">$ ' . $valorFormateado . '</small>
            </div>
          </div>
        </div>
      </div>';
    return $lista;
}


function mostrarTarjetaApi(){

// URL de la API
$apiUrl = "http://localhost/backendFinal/v2/parcela";
// Clave de autenticación
$claveAutenticacion = "get";

// Configurar opciones de la solicitud
$options = array(
    'http' => array(
        'header' => "Authorization: Bearer $claveAutenticacion"
    )
);
$context = stream_context_create($options);

// Realizar la solicitud GET a la API
$response = file_get_contents($apiUrl, false, $context);

// Verificar si la respuesta fue exitosa
if ($response === false) {
    die('Error al conectarse a la API');
}

// Decodificar la respuesta JSON
$data = json_decode($response, true);

// Verificar si hay datos en el array 'data'
if (isset($data['data']) && is_array($data['data'])) {
    // Mostrar los datos obtenidos
    foreach ($data['data'] as $item) {
        // Mostrar el elemento solo si está activo
        if ($item['activo']) {
          
          $nombre= "Nombre: " . $item['nombre'] . "<br>";
          $numeracion= "Numeración Interna: " . $item['numeracion_interna'] . "<br>";
          $terrenoAncho= "Terreno Ancho: " . $item['terreno_ancho'] . "<br>";
          $terrenoLargo= "Terreno Largo: " . $item['terreno_largo'] . "<br>";
          $ubicaciónLat= "Ubicación Latitud GM: " . $item['ubicacion_latitud_gm'] . "<br>";
          $ubicacionLon= "Ubicación Longitud GM: " . $item['ubicacion_longitud_gm'] . "<br>";
          $pie= "Pie: " . number_format($item['pie'], 0, ',', '.') . "<br>";
          $valor = "Valor: $" . number_format($item['valor'], 0, ',', '.') . "<br>";
          echo "<br>";
                    #tarjeta (no habia imagenes en la base para la parcela)
                    echo '<div class="col-md-4">
                    <div class="card mb-4 box-shadow text-center">
                      <img class="card-img-top" src="assets\img\img-parcelas-y-terreno\parcela1.jpg" alt="Card image cap"> 
                      <div class="card-body">
                        <p class="card-text">'. $nombre . $numeracion . $terrenoAncho . $terrenoLargo .  $ubicaciónLat . $ubicacionLon . $pie .'</p>
                        <button class="btn-primary" onclick="redirigirYllenar()">Me interesa</button>
                        <div class="d-flex justify-content-between align-items-center">
                          <div class="btn-group">
                          </div>
                          <small class="text-muted">$ ' . $valor . '</small>
                        </div>
                      </div>
                    </div>
                  </div>';
        }
    }
} else {
    echo "No se encontraron datos.";
}
}

function mostrarNosotros(){

// URL de la API
$apiUrl = "http://localhost/backendFinal/v2/historia";
// Clave de autenticación
$claveAutenticacion = "get";

// Configurar opciones de la solicitud
$options = array(
    'http' => array(
        'header' => "Authorization: Bearer $claveAutenticacion"
    )
);
$context = stream_context_create($options);

// Realizar la solicitud GET a la API
$response = file_get_contents($apiUrl, false, $context);

// Verificar si la respuesta fue exitosa
if ($response === false) {
    die('Error al conectarse a la API');
}

// Decodificar la respuesta JSON
$data = json_decode($response, true);

// Verificar si hay datos en el array 'data'
if (isset($data['data']) && is_array($data['data'])) {
    // Mostrar los datos obtenidos
    foreach ($data['data'] as $item) {
        // Mostrar el elemento solo si está activo
        if ($item['activo']) {
            
            echo $item['texto'] . "<br>";
            echo "<br>";
        }
    }
} else {
    echo "No se encontraron datos.";
}

}

function mostrarPreguntas1(){

    // URL de la API
$apiUrl = "http://localhost/backendFinal/v2/pregunta_frecuente";
// Clave de autenticación
$claveAutenticacion = "get";

// Configurar opciones de la solicitud
$options = array(
    'http' => array(
        'header' => "Authorization: Bearer $claveAutenticacion"
    )
);
$context = stream_context_create($options);

// Realizar la solicitud GET a la API
$response = file_get_contents($apiUrl, false, $context);

// Verificar si la respuesta fue exitosa
if ($response === false) {
    die('Error al conectarse a la API');
}

// Decodificar la respuesta JSON
$data = json_decode($response, true);

// Verificar si hay datos en el array 'data'
if (isset($data['data']) && is_array($data['data'])) {
    // Mostrar los datos obtenidos
    foreach ($data['data'] as $item) {
        // Mostrar el elemento solo si está activo
        if ($item['activo']) {
            echo $item['pregunta'] . "<br>";
            echo $item['respuesta'] . "<br>";
            echo "<br>";
        }
    }
} else {
    echo "No se encontraron datos.";
}


}

?>


