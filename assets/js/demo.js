$(function () {
	new Chart(document.getElementById("line_chart").getContext("2d"), getChartJs('line'));
	new Chart(document.getElementById("bar_chart").getContext("2d"), getChartJs2('bar'));
});