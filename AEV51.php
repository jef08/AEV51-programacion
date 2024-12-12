<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <title>AEV51</title>
    </head>
    <body>
        <?php

$pomodoroHaters = [
    ['~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '0', '0', 'A', '0', 'A', '0', '0', 'A', '0', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '0', '0', '0', '0', '0', '0', 'A', '0', '0', '0', '0', 'A', '0', '~', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '0', '0', '0', '0', '0', 'A', 'A', '0', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '~', '0', '0', '0', '0', '0', 'A', '0', '0', 'A', 'A', 'A', '0', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '0', '0', '0', 'A', '0', 'A', 'A', '0', '0', '0', '0', '0', '0', '0', 'A', '0', '0', '0', 'A', '0', '0', '~'],
    ['~', '~', '~', '~', '~', '~', '0', '0', 'A', '0', '0', '0', 'A', '0', '0', '0', '0', '0', '0', 'A', '0', '0', '0', '~'],
    ['~', '~', '~', '~', '~', '~', '~', '~', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '~'],
    ['~', '~', '~', '~', '~', '0', '0', 'A', '0', '0', '0', '0', '0', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '0', '0', '0', '0', '0', 'A', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '~', '~', '~'],
    ['~', '~', '~', '0', '0', '0', '0', '0', '0', '0', 'A', '0', '0', '0', '0', '0', '0', '0', '0', '~', '~', '~', '~', '~'],
    ['~', '0', '0', '0', '0', '0', '0', '0', '0', 'A', '0', '0', '0', 'A', '0', '0', '0', '0', '0', 'A', '0', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '~', '~', '~', '~', '0', '0', '0', '0', 'A', '0', '0', '~', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '~', '~', '~', '~', '0', '0', '0', 'A', 'A', 'A', '0', '0', 'A', '0', '0', '0', '~', '~', '~'],
    ['~', '~', '~', '~', '0', 'A', 'A', '0', '0', 'A', '0', '0', '0', 'A', '0', '0', '0', '0', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '0', 'A', '0', '0', '0', '~', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '~', '~', '~', '0', '0', '0', 'A', '0', '0', '0', '0', '0', 'A', '0', 'A', '0', '0', '0', '~'],
    ['~', '~', '~', '0', 'A', '0', '0', '0', '0', '0', '0', '0', '0', 'A', '0', '0', '0', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '~', '~', '~', '~', '0', '0', '0', 'A', '0', '0', 'A', '0', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '0', '0', '0', '0', 'A', '0', '0', '0', '0', 'A', '0', '~', '~', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'A', '0', '0', '0', '0', '0', '0', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '0', '0', '0', '0', '0', 'A', '0', '0', '0', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~']
];

$impacts = [
    [20, 4],
    [2, 13],
    [13, 12],
    [3, 17],
    [2, 13],
    [5, 19],
    [6, 18],
    [5, 2],
    [20, 13],
    [9, 7],
    [5, 9],
    [15, 16],
    [16, 13],
    [16, 9],
    [16, 0],
    [3, 19],
    [19, 8],
    [1, 16],
    [18, 4],
    [21, 23],
    [7, 17],
    [22, 15],
    [21, 6],
    [14, 8],
    [12, 23],
    [7, 7],
    [22, 4],
    [3, 21],
    [2, 3],
    [8, 11],
    [0, 4],
    [7, 21],
    [11, 4],
    [7, 15],
    [6, 17],
    [5, 19],
    [4, 19],
    [4, 7],
    [23, 21],
    [15, 20],
    [2, 9],
    [21, 2],
    [1, 13],
    [7, 10],
    [21, 5],
    [13, 17],
    [2, 14],
    [11, 14],
    [22, 17],
    [18, 22],
    [2, 23],
    [3, 1],
    [18, 6],
    [17, 12],
    [18, 18],
    [20, 2],
    [3, 14],
    [11, 21],
    [6, 5],
    [6, 2],
    [12, 23],
    [18, 18],
    [21, 6],
    [10, 12],
    [5, 4],
    [16, 19],
    [8, 10],
    [12, 21],
    [15, 1],
    [20, 14],
    [3, 20],
    [6, 19],
    [20, 13],
    [15, 4],
    [10, 2],
    [5, 16],
    [20, 1],
    [12, 13],
    [11, 5],
    [12, 14],
    [8, 3],
    [6, 8],
    [19, 7],
    [16, 9],
    [13, 20],
    [3, 5],
    [1, 0],
    [20, 14],
    [12, 21],
    [12, 16],
    [15, 7],
    [9, 1],
    [1, 18],
    [20, 6],
    [8, 6],
    [22, 1],
    [10, 22],
    [19, 19],
    [7, 16],
    [8, 8]
];

echo "MAPA ORIGINAL";
function showMap($pomodoroHaters) {
    for ($i = 0; $i < count($pomodoroHaters); $i++) {
        echo "<br>";
        for ($j = 0; $j < count($pomodoroHaters[$i]); $j++) {
            echo $pomodoroHaters[$i][$j];
        }
    }
}
showMap($pomodoroHaters);

//Donde se guardará la versión de pomodoroHaters con nucleos urbanos impactados//
$pomodoroHatersImpacted;

//función para mapa de ciudades afectadas. Un loop del array PomodoroHaters dentro de un loop de Impacts para//
//poder comprarar el primer elemento en cada array de "impacts" con los indices de PomodoroHaters//
//y comparar el segundo elemento de los arrays "impacts" con el indice del array correspondiente de pomodoroHaters//
//Devolver "pomodoroHatersImpacted" para usar en próxima función//
echo "<br><br><br>MAPA DE CIUDADES AFECTADAS";
function showAffectedCities($pomodoroHaters, $impacts) {
    global $pomodoroHatersImpacted;
    for($i=0; $i<count($impacts); $i++) {
        for($j=0; $j<count($pomodoroHaters); $j++) {
            if ($impacts[$i][0] === $j && $pomodoroHaters[$j][$impacts[$i][1]] === "A") {
                array_splice($pomodoroHaters[$j], $impacts[$i][1], 1, "C");
            }  
        }  
    }
    showMap($pomodoroHaters);
    $pomodoroHatersImpacted = $pomodoroHaters;
    return $pomodoroHatersImpacted;
}
showAffectedCities($pomodoroHaters, $impacts);

//funcion para estimar cuanto colírio es necesario y cuantas personas necesitan//
//Un loop para identifar cuantos "C" existen en el array "pomodoroHatersImpacted//
//Poner cada "C" en nuevo array y usar count() para hacer los calculos//
function estimateColirio($pomodoroHatersImpacted) {
    $numImpactedCities = [];
    for($i=0; $i<count($pomodoroHatersImpacted); $i++) {
        for($j=0; $j<count($pomodoroHatersImpacted[$i]); $j++) {
            if ($pomodoroHatersImpacted[$i][$j] === "C") {
                array_push($numImpactedCities, "C");
            }
        }
    }
    echo "<br><br>" . count($numImpactedCities) * 5000 . " personas han sido afectadas.<br>";
    echo "Requieren " . ((count($numImpactedCities) * 5000) * 25)/1000 . " litros de colírio.";
}
estimateColirio($pomodoroHatersImpacted);

//Donde se guardará array con todos los impactos en ciudades, tierra, y mar//
$impactedAreasTotal;

//función para mostrar mapa de areas impactados en ciudades, tierra, y mar//
//Igual a la función "showAfectedCities" pero utilizando el array "pomodoroHatersImpacted"//
echo "<br><br><ber>MAPA DE TODAS LAS ZONAS AFECTADAS";
function showAffectedAreas($pomodoroHatersImpacted, $impacts) {
    global $impactedAreasTotal;
    for($i=0; $i<count($impacts); $i++) {
        for($j=0; $j<count($pomodoroHatersImpacted); $j++) {
            if ($impacts[$i][0] === $j && $pomodoroHatersImpacted[$j][$impacts[$i][1]] === "0") {
                array_splice($pomodoroHatersImpacted[$j], $impacts[$i][1], 1, "X");
            }  else if ($impacts[$i][0] === $j && $pomodoroHatersImpacted[$j][$impacts[$i][1]] === "~") {
                array_splice($pomodoroHatersImpacted[$j], $impacts[$i][1], 1, "S");
            }
        }  
    }
    showMap($pomodoroHatersImpacted);
    $impactedAreasTotal = $pomodoroHatersImpacted;
    return $impactedAreasTotal;
}
showAffectedAreas($pomodoroHatersImpacted, $impacts);

//Función para estimar el total de los daños//
function estimateTotalDamages($impactedAreasTotal) {
    $urbanDamages = [];
    $nonUrbanoDamages = [];
    for($i = 0; $i<count($impactedAreasTotal); $i++) {
        for($j=0; $j<count($impactedAreasTotal[$i]); $j++) {
            if($impactedAreasTotal[$i][$j] === "C") {
                array_push($urbanDamages, "C");
            } else if($impactedAreasTotal[$i][$j] === "X")  {
                array_push($nonUrbanoDamages, "X");
            }
        }
    }
    echo "<br><br> El coste total de los daños: <br>";
    echo count($urbanDamages) * 200000 + count($nonUrbanoDamages) * 50000 . " Euros.";
}
estimateTotalDamages($impactedAreasTotal);

//Arrays para las próximas dos funciones//
$oceanTotal = [];
$impactedOceanTotal = [];

//Función para ver total de mar que hay//
function getSizeOfOcean($pomodoroHaters) {
    global $oceanTotal;
    for($i=0; $i<count($pomodoroHaters); $i++) {
        for($j=0; $j<count($pomodoroHaters[$i]); $j++) {
            if($pomodoroHaters[$i][$j] === "~") {
                array_push($oceanTotal, "~");
            }
        }
    }
    return $oceanTotal;
}
getSizeOfOcean($pomodoroHaters);

//Función para ver total de mar afectado//
function getAffectedOcean($impactedAreasTotal) {
   global $impactedOceanTotal;
    for($i=0; $i<count($impactedAreasTotal); $i++) {
        for($j=0; $j<count($impactedAreasTotal[$i]); $j++) {
            if($impactedAreasTotal[$i][$j] === "S") {
                array_push($impactedOceanTotal, "S");
            }
        }
    }
    return $impactedOceanTotal;
}
getAffectedOcean($impactedAreasTotal);

//Imprimir información sobre el mar, bakalao, y ganancias//
echo "<br><br><br>BAKALAO";
echo "<br><br>Hay un total de " . count($oceanTotal) . "km cuadrados de mar.<br>";
echo count($impactedOceanTotal) . "km cuadrados del mar han sido afectados. <br>";
$totalBakalao = round((2000/count($oceanTotal)) * count($impactedOceanTotal));
echo "Hay " . $totalBakalao . " toneladas de bakalao disponible.";
echo "<br>Podemos ganar: " . $totalBakalao * 5 . " Euros.";
        ?>
    </body>
</html>