<?php

    $chartType = $_POST['chartType'];
    $dato1 = $_GET['dato1'];
    $dato2 = $_GET['dato2'];
    $dato3 = $_GET['dato3'];

    if ($chartType == '1') {

        // HTML y CSS para la gráfica de barras
        echo '
        <div style="width: 400px;">
            <canvas id="barChart"></canvas>
        </div>
        ';
        
        // Script para generar la gráfica de barras
        echo '
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            var ctx = document.getElementById("barChart").getContext("2d");
            var barChart = new Chart(ctx, {
                type: "bar",
                data: {
                    labels: ["Dato 1", "Dato 2", "Dato 3"],
                    datasets: [{
                        label: "Valores",
                        data: ['.$dato1.', '.$dato2.', '.$dato3.'],
                        backgroundColor: ["rgba(255, 99, 132, 0.2)", "rgba(54, 162, 235, 0.2)", "rgba(255, 206, 86, 0.2)"],
                        borderColor: ["rgba(255, 99, 132, 1)", "rgba(54, 162, 235, 1)", "rgba(255, 206, 86, 1)"],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        </script>
        ';
        
        
    } elseif ($chartType == '2') {
        echo '
        <div style="width: 400px;">
            <canvas id="pieChart"></canvas>
        </div>
        ';

        // Script para generar el gráfico de pastel
        echo '
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            var ctx = document.getElementById("pieChart").getContext("2d");
            var pieChart = new Chart(ctx, {
                type: "pie",
                data: {
                    labels: ["Dato 1", "Dato 2", "Dato 3"],
                    datasets: [{
                        data: ['.$dato1.', '.$dato2.', '.$dato3.'],
                        backgroundColor: ["rgba(255, 99, 132, 0.2)", "rgba(54, 162, 235, 0.2)", "rgba(255, 206, 86, 0.2)"],
                        borderColor: ["rgba(255, 99, 132, 1)", "rgba(54, 162, 235, 1)", "rgba(255, 206, 86, 1)"],
                        borderWidth: 1
                    }]
                }
            });
        </script>
        ';
       
    } elseif ($chartType == '3') {
        echo '
        <table>
            <thead>
                <tr>
                    <th>Dato</th>
                    <th>Valor</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Dato 1</td>
                    <td>'.$dato1.'</td>
                </tr>
                <tr>
                    <td>Dato 2</td>
                    <td>'.$dato2.'</td>
                </tr>
                <tr>
                    <td>Dato 3</td>
                    <td>'.$dato3.'</td>
                </tr>
            </tbody>
        </table>
        ';
    }

?>
