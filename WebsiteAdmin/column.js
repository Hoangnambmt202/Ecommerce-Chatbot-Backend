//load the Google Visualization API and the chart
google.load('visualization', '1', {'packages':['columnchart','piechart']});

//set callback
google.setOnLoadCallback (createChart);

//callback function
function createChart() {

//create data table object
var dataTable = new google.visualization.DataTable();

//define columns
dataTable.addColumn('string','Quarters');
dataTable.addColumn('number', 'Chăn ');
dataTable.addColumn('number', 'Ga giường');
dataTable.addColumn('number', 'Gối');
dataTable.addColumn('number', 'nệm');
//define rows of data
dataTable.addRows([
['tháng 1', 1037, 4152, 770, 100],
['tháng 2', 1116, 5951, 857, 260],
['tháng 3', 2439, 5183, 1924, 234],
['tháng 4', 3868, 7641, 3095, 529]
]);

//instantiate our chart objects

var chart = new google.visualization.ColumnChart (document.getElementById('chart'));

//define options for visualization
var options = {width: 1000, height: 400, is3D: true, title: 'Thống kê doanh số bán được trong 4 tháng'};

//draw our chart
chart.draw(dataTable, options);
}


