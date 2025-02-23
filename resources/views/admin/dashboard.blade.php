@extends('admin.layouts.template')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-center mb-4">
        <h1 class="h3 mb-0 " style="font-weight: bold">Tableau de board</h1>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Toutes les soumissions</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $validations }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Soumission (Prise)</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $pris }}</div> {{-- Correction ici, $pris pour "Prise" --}}
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-check fa-2x text-gray-300"></i> {{-- Icône plus appropriée --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Pending Requests Card Example -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Soumission (Non-Prise)</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $nonPris }}</div> {{-- Correction ici, $nonPris pour "Non-Prise" --}}
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-times fa-2x text-gray-300"></i> {{-- Icône plus appropriée --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-12 col-lg-7">
            <div class="card shadow mb-4">
                <!-- En-tête du graphique -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Comparaison des Soumissions Prises et Non Prises</h6>
                </div>
                <!-- Corps du graphique -->
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="myLineChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var pris = {{ $pris }};
        var nonPris = {{ $nonPris }};

        var ctx = document.getElementById('myLineChart').getContext('2d');
        var myLineChart = new Chart(ctx, {
            type: 'line', // Type de graphique : Line
            data: {
                labels: ['Pris', 'Non Pris'], // Labels de l'axe X : catégories
                datasets: [{
                    label: 'Nombre de soumissions', // Label du dataset
                    data: [pris, nonPris], // Données : [nombre de "Pris", nombre de "Non Pris"]
                    borderColor: '#4e73df', // Couleur de la ligne (bleu, couleur primaire souvent utilisée)
                    backgroundColor: 'transparent', // Fond transparent
                    borderWidth: 2,
                    pointRadius: 5, // Taille des points
                    pointBackgroundColor: '#4e73df' // Couleur des points
                }]
            },
            options: {
                maintainAspectRatio: false,
                layout: {
                    padding: {
                        left: 10,
                        right: 25,
                        top: 25,
                        bottom: 0
                    }
                },
                scales: {
                    xAxes: [{
                        gridLines: {
                            display: false, // Pas de lignes de grille verticales
                            drawBorder: false // Pas de bordure sur l'axe X
                        }
                    }],
                    yAxes: [{
                        ticks: {
                            beginAtZero: true, // Axe Y commence à 0
                            maxTicksLimit: 5, // Limite le nombre de ticks sur l'axe Y
                            padding: 10,
                            callback: function(value, index, values) {
                                return number_format(value); // Formater les nombres (si nécessaire)
                            }
                        },
                        gridLines: {
                            color: "rgb(234, 236, 244)", // Couleur des lignes de grille horizontales
                            zeroLineColor: "rgb(234, 236, 244)", // Couleur de la ligne zéro
                            drawBorder: false, // Pas de bordure sur l'axe Y
                            borderDash: [2], // Style des lignes de grille
                            zeroLineBorderDash: [2] // Style de la ligne zéro
                        }
                    }],
                },
                legend: {
                    display: false // Pas de légende, car un seul dataset décrit clairement
                },
                tooltips: {
                    backgroundColor: "rgb(255,255,255)",
                    bodyFontColor: "#858796",
                    titleMarginBottom: 10,
                    titleFontColor: '#6e707e',
                    titleFontSize: 14,
                    borderColor: '#dddfeb',
                    borderWidth: 1,
                    xPadding: 15,
                    yPadding: 15,
                    displayColors: false,
                    intersect: false,
                    mode: 'index',
                    caretPadding: 10,
                    callbacks: {
                        label: function(tooltipItem, chart) {
                            var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                            return datasetLabel + ': ' + number_format(tooltipItem.yLabel); // Formater le label du tooltip
                        }
                    }
                }
            }
        });
    });

    function number_format(number, decimals, dec_point, thousands_sep) {
        number = (number + '').replace(/[^0-9+\-Ee.]/g, '');
        var n = !isFinite(+number) ? 0 : +number,
            prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
            sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
            dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
            s = '',
            toFixedFix = function(n, prec) {
                var k = Math.pow(10, prec);
                return '' + Math.round(n * k) / k;
            };
        s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
        if (s[0].length > 3) {
            s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
        }
        if ((s[1] || '').length < prec) {
            s[1] = s[1] || '';
            s[1] += new Array(prec - s[1].length + 1).join('0');
        }
        return s.join(dec);
    }
</script>
    
@endsection