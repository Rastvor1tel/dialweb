$(function(){
	$('.site-case__canvas').each(function(){
		var data = $(this).data('values').split(',');
		var maxValue = Math.max.apply(null, data);
		var labels = [];
		if ($(this).data('labels')) {
			const string = $(this).data('labels');
            labels = string.split(',');
        } else {
            for (var i = 0; i < data.length; i++) {
                labels.push('  ');
            }
		}


		new Chart($(this), {
			type: 'line',
			data: {
				labels: labels,
				datasets: [{
					data: data,
					borderColor: '#fe9023',
					pointBackgroundColor: '#fe9023',
					backgroundColor: 'rgba(254, 144, 35, 0.3)',
					pointRadius: 4,
				}]
			},
			options: {
				legend: {display: false},
				tooltips: {enabled: false},
				scales: {
					yAxes: [{
						ticks: {display: true, beginAtZero: true, max: maxValue*1.25},
					}],
				},
			},
		});
	});
});