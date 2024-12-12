<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <title>AEV51</title>
        <link rel = "stylesheet" href = "styles.css">
        <script src = "script.js" defer></script>
    </head>
    <body>

    <div class = "intro-page">
        <div class = "bienvenido">¡Bienvenido!</div>
        <div class = "eres">Eres...</div>
        <div class = "intro-buttons">
            <button class = "servicios-bttn">Servicios de Emergencia</button>
            <button class = "seguro-bttn">Agente de Seguro</button>
            <button class = "ong-bttn">Cocineros Vascos Sin Fronteras</button>
        </div>
    </div>
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
?>


<div class = "servicios-emergencias">
    <div class = "header-servicios">Información para servicios de emergencias</div>
        <div class = "map-header">Mapa original</div>
            <div class = "map">
                <?php
                //función para mostrar mapa original//
                function showMap($pomodoroHaters) {
                    for ($i = 0; $i < count($pomodoroHaters); $i++) {
                        echo "<div class = 'map-rows'></div>";
                        for ($j = 0; $j < count($pomodoroHaters[$i]); $j++) {
                            if ($pomodoroHaters[$i][$j] === "A") {
                                echo "<div class = 'A'>" . $pomodoroHaters[$i][$j] . "</div>";
                            } elseif ($pomodoroHaters[$i][$j] === "0") {
                                echo "<div class = 'zero'>" . $pomodoroHaters[$i][$j] . "</div>";
                            } elseif ($pomodoroHaters[$i][$j] === "~") {
                                echo "<div class = 'squiggle'>" . $pomodoroHaters[$i][$j] . "</div>";
                            } elseif ($pomodoroHaters[$i][$j] === "C") {
                                echo "<div class = 'C'>" . $pomodoroHaters[$i][$j] . "</div>";
                            } elseif ($pomodoroHaters[$i][$j] === "X") {
                                echo "<div class = 'X'>" . $pomodoroHaters[$i][$j] . "</div>";
                            } elseif ($pomodoroHaters[$i][$j] === "S") {
                                echo "<div class = 'S'>" . $pomodoroHaters[$i][$j] . "</div>";
                            }
                        }
                    }
                }
                showMap($pomodoroHaters);
                ?>
            </div>
        <div class = "affected-map-header">Mapa de ciudades afectadas</div>
            <div class = "affected-map">
                <?php
                //Donde se guardará la versión de pomodoroHaters con nucleos urbanos impactados//
                $pomodoroHatersImpacted;

                //función para mapa de ciudades afectadas. Un loop del array PomodoroHaters dentro de un loop de Impacts para//
                //poder comprarar el primer elemento en cada array de "impacts" con los indices de PomodoroHaters//
                //y comparar el segundo elemento de los arrays "impacts" con el indice del array correspondiente de pomodoroHaters//
                //Devolver "pomodoroHatersImpacted" para usar en próxima función//
                function showAffectedCities($pomodoroHaters, $impacts) {
                    global $pomodoroHatersImpacted;
                    for($i=0; $i<count($impacts); $i++) {
                        for($j=0; $j<count($pomodoroHaters); $j++) {
                            if ($impacts[$i][0] === $j && $pomodoroHaters[$j][$impacts[$i][1]] === "A") {
                                array_splice($pomodoroHaters[$j], $impacts[$i][1], 1, "C");
                            }  
                        }  
                    }
                    echo "<br>";
                    showMap($pomodoroHaters);
                    $pomodoroHatersImpacted = $pomodoroHaters;
                    return $pomodoroHatersImpacted;
                }
                showAffectedCities($pomodoroHaters, $impacts);
                ?>
            </div>
        <div class = "colirio">
            <?php
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
                echo "<br><strong>" . count($numImpactedCities) * 5000 . "</strong> personas han sido afectadas.<br>";
                echo "Requiere <strong>" . ((count($numImpactedCities) * 5000) * 25)/1000 . "</strong> litros de colírio.";
            }
            estimateColirio($pomodoroHatersImpacted);
            ?>
            
        </div>
        <div class = "refresh-services-div">
            <button class = "refresh-bttn" onclick = "window.location.reload()"><img src = refresh.svg height = 25px width = 25px></button>
        </div>
</div>


<div class = "agentes-seguro">
    <div class = "header-agentes">Información para agentes de seguro</div>
        <div class = "header-total-map">Mapa de todas las zonas afectadas</div>
            <div class = "total-affected-map">
                <?php
                //Donde se guardará array con todos los impactos en ciudades, tierra, y mar//
                $impactedAreasTotal;

                //función para mostrar mapa de areas impactados en ciudades, tierra, y mar//
                //Igual a la función "showAfectedCities" pero utilizando el array "pomodoroHatersImpacted"//
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
                    echo "<br>";
                    showMap($pomodoroHatersImpacted);
                    $impactedAreasTotal = $pomodoroHatersImpacted;
                    return $impactedAreasTotal;
                }
                showAffectedAreas($pomodoroHatersImpacted, $impacts);
                ?>
            </div>
    <div class = "damages">
        <?php
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
            echo "<br> El coste total de los daños: <br><strong>";
            echo count($urbanDamages) * 200000 + count($nonUrbanoDamages) * 50000 . "</strong> Euros.";
        }
        estimateTotalDamages($impactedAreasTotal);
        ?>
    </div>
    <div class = "refresh-agentes">
        <button class = "refresh-bttn" onclick = "window.location.reload()"><img src = refresh.svg height = 25px width = 25px></button>
    </div>
</div>


<div class = "ong">
    <div class = "header-ong">Información para cocineros vascos</div>
    <img class = "fish" src="fish.svg" height="100px" width="auto">
    <?php
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
    ?>

    <div class ="fish-info">
        <?php
            //Imprimir información sobre el mar, bakalao, y ganancias//
            echo "<br><br>Hay un total de <strong>" . count($oceanTotal) . "</strong>km² de mar.<br>";
            echo "<strong>" . count($impactedOceanTotal) . "</strong>km² del mar han sido afectados. <br>";
            $totalBakalao = round((2000/count($oceanTotal)) * count($impactedOceanTotal));
            echo "Hay <strong>" . $totalBakalao . "</strong> toneladas de bakalao disponible.";
            echo "<br>Podemos ganar: <strong>" . $totalBakalao * 5 . "</strong> Euros.";
        ?>
    </div>
    
    <div class = "refresh-ong-div">
        <button class = "refresh-bttn" onclick = "window.location.reload()"><img src = refresh.svg height = 25px width = 25px></button>
    </div>
</div>
</body>
</html>