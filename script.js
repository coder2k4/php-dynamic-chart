$(document).ready(function () {

    $('#submit_data').click(function () {

        var language = $('input[name=programming_language]:checked').val();

        $.ajax({
            url: "data.php",
            method: "POST",
            data: {
                action: 'insert',
                language: language
            },
            beforeSend: function () {
                $('#submit_data').attr('disabled', 'disabled');
            },
            success: function (data) {
                $('#submit_data').attr('disabled', false);
                $('#programming_language_1').prop('checked', 'checked');
                $('#programming_language_2').prop('checked', false);
                $('#programming_language_3').prop('checked', false);
                alert("Your Feedback has been send...");
                makechart();
            }
        })

    });

    makechart();

    function makechart() {
        $.ajax({
            url: "data.php",
            method: "POST",
            data: {action: 'fetch'},
            dataType: "JSON",
            success: function (data) {
                const language = [];
                const total = [];
                const color = [];

                for (let count = 0; count < data.length; count++) {
                    language.push(data[count].language);
                    total.push(data[count].total);
                    color.push(data[count].color);
                }

                const chart_data = {
                    labels: language,
                    datasets: [
                        {
                            label: 'Vote',
                            backgroundColor: color,
                            color: '#fff',
                            data: total
                        }
                    ]
                };

                const options = {
                    responsive: true,
                    scales: {
                        yAxes: [{
                            ticks: {
                                min: 0
                            }
                        }]
                    }
                };

                const group_chart1 = $('#pie_chart');

                const graph1 = new Chart(group_chart1, {
                    type: "pie",
                    data: chart_data
                });

                const group_chart2 = $('#doughnut_chart');

                const graph2 = new Chart(group_chart2, {
                    type: "doughnut",
                    data: chart_data
                });

                const group_chart3 = $('#bar_chart');

                const graph3 = new Chart(group_chart3, {
                    type: 'bar',
                    data: chart_data,
                    options: options
                });
            }
        })
    }

});