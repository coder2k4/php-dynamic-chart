<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8" />
    <title>How to Create Dynamic Chart in PHP using Chart.js</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script	src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
</head>
<body>
<div class="container">
    <h2 class="text-center mt-4 mb-3">How to Create Dynamic Chart in PHP using Chart.js</a></h2>

    <div class="card">
        <div class="card-header">Sample Survey</div>
        <div class="card-body">
            <div class="form-group">
                <h2 class="mb-4">Which is Popular Programming Language in 2021?</h2>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="programming_language" class="programming_language" id="programming_language_1" value="PHP" checked>
                    <label class="form-check-label mb-2" for="programming_language_1">PHP</label>
                </div>
                <div class="form-check">
                    <input type="radio" name="programming_language" id="programming_language_2" class="form-check-input" value="Node.js">
                    <label class="form-check-label mb-2" for="programming_language_2">Node.js</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="programming_language" class="programming_language" id="programming_language_3" value="Python">
                    <label class="form-check-label mb-3" for="programming_language_3">Python</label>
                </div>
            </div>
            <div class="form-group">
                <button type="button" name="submit_data" class="btn btn-primary" id="submit_data">Submit</button>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <div class="card mt-4">
                <div class="card-header">Pie Chart</div>
                <div class="card-body">
                    <div class="chart-container pie-chart">
                        <canvas id="pie_chart"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mt-4">
                <div class="card-header">Doughnut Chart</div>
                <div class="card-body">
                    <div class="chart-container pie-chart">
                        <canvas id="doughnut_chart"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mt-4 mb-4">
                <div class="card-header">Bar Chart</div>
                <div class="card-body">
                    <div class="chart-container pie-chart">
                        <canvas id="bar_chart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src=""></script>
</body>
</html>