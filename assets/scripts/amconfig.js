
AmCharts.ready(function () {
    generateChartData();
    createStockChart();
});

var chartData1 = [];
var chartData2 = [];
var chartData3 = [];
var chartData4 = [];

function generateChartData() {
    var firstDate = new Date();
    firstDate.setDate(firstDate.getDate() - 500);
    firstDate.setHours(0, 0, 0, 0);

    for (var i = stockChartData.length - 1; i >= 0; i--) {

        var data = stockChartData[i];
        data.date = Date.parse(data.date);

        chartData1.push(data);
    }
}

function createStockChart() {
    var chart = new AmCharts.AmStockChart();
    chart.pathToImages = "../amcharts/images/";

    chart.categoryAxesSettings = {maxSeries:0};
    chart.colors = ["#50b652", "#FCD202", "#B0DE09", "#0D8ECF", "#2A0CD0", "#CD0D74", "#CC0000", "#00CC00", "#0000CC", "#DDDDDD", "#999999", "#333333", "#990000"];

    // DATASETS //////////////////////////////////////////
    // create data sets first
    var dataSet1 = new AmCharts.DataSet();
    dataSet1.fieldMappings = [{
        fromField: "value",
        toField: "value"
        }, {
        fromField: "volume",
        toField: "volume"
        }];
    dataSet1.dataProvider = chartData1;
    dataSet1.categoryField = "date";

    /*
    var dataSet2 = new AmCharts.DataSet();
    dataSet2.title = "second data set";
    dataSet2.fieldMappings = [{
        fromField: "value",
        toField: "value"
        }, {
        fromField: "volume",
        toField: "volume"
        }];
    dataSet2.dataProvider = chartData2;
    dataSet2.categoryField = "date";

    var dataSet3 = new AmCharts.DataSet();
    dataSet3.title = "third data set";
    dataSet3.fieldMappings = [{
        fromField: "value",
        toField: "value"
        }, {
        fromField: "volume",
        toField: "volume"
        }];
    dataSet3.dataProvider = chartData3;
    dataSet3.categoryField = "date";

    var dataSet4 = new AmCharts.DataSet();
    dataSet4.title = "fourth data set";
    dataSet4.fieldMappings = [{
        fromField: "value",
        toField: "value"
        }, {
        fromField: "volume",
        toField: "volume"
        }];
    dataSet4.dataProvider = chartData4;
    dataSet4.categoryField = "date";
    */

    // set data sets to the chart
    chart.dataSets = [dataSet1];//, dataSet2, dataSet3, dataSet4];

    // PANELS ///////////////////////////////////////////
    // first stock panel
    var stockPanel1 = new AmCharts.StockPanel();
    stockPanel1.showCategoryAxis = false;
    stockPanel1.title = "Cours";
    stockPanel1.valueAxes = [{
        labelsEnabled: false,
        gridAlpha: 0
    }];
    stockPanel1.percentHeight = 60;
    stockPanel1.color = "#666666";

    // graph of first stock panel
    var graph1 = new AmCharts.StockGraph();
    graph1.valueField = "value";
    graph1.comparable = false;
    graph1.bullet = "none";
    graph1.balloonText = "[[title]] <b>[[value]]</b>";
    graph1.type = "smoothedLine";
    graph1.fillAlphas = 0.1;
    graph1.valueAxes = [{
        gridAlpha: 0
    }];

    stockPanel1.addStockGraph(graph1);

    // create stock legend
    var stockLegend1 = new AmCharts.StockLegend();
    stockLegend1.periodValueTextComparing = "[[percents.value.close]]%";
    stockLegend1.periodValueTextRegular = "[[value.close]]";
    stockLegend1.color = "#FFFFFF";
    stockLegend1.markerType = "none";
    stockLegend1.markerLabelGap = 0;
    stockLegend1.marginLeft = 0;
    stockPanel1.stockLegend = stockLegend1;


    // second stock panel
    var stockPanel2 = new AmCharts.StockPanel();
    stockPanel2.title = "Volume";
    stockPanel2.percentHeight = 40;
    stockPanel2.color = "#666666";
    stockPanel2.valueAxes = [{
        gridAlpha: 0,
        labelsEnabled: false
    }];
    var graph2 = new AmCharts.StockGraph();
    graph2.valueField = "volume";
    graph2.type = "column";
    graph2.showBalloon = false;
    graph2.fillAlphas = 0.75;
    graph2.legendColor = "#666666";
    graph2.lineAlpha = 0;
    graph2.fillColors = "#FFFFFF";
    graph2.lineThickness = 0;
    stockPanel2.addStockGraph(graph2);

    var stockLegend2 = new AmCharts.StockLegend();
    stockLegend2.periodValueTextRegular = "[[value.close]]";
    stockLegend2.color = "#FFFFFF";
    stockLegend2.markerType = "none";
    stockPanel2.stockLegend = stockLegend2;

    // set panels to the chart
    chart.panels = [stockPanel1, stockPanel2];


    // OTHER SETTINGS ////////////////////////////////////
    chart.chartScrollbarSettings.enabled = false;

    // CURSOR

    var cursorSettings = new AmCharts.ChartCursorSettings();
    cursorSettings.valueBalloonsEnabled = true;
    cursorSettings.cursorColor = "#FFFFFF";
    cursorSettings.balloonPointerOrientation = "vertical";
    cursorSettings.categoryBalloonColor = "#007CC1";
    chart.chartCursorSettings = cursorSettings;


    // PERIOD SELECTOR ///////////////////////////////////
    var periodSelector = new AmCharts.PeriodSelector();
    periodSelector.position = "top";
    periodSelector.inputFieldsEnabled = false;
    periodSelector.periodsText = "";
    periodSelector.periods = [{
        period: "DD",
        count: 10,
        label: "10 days"
        }, {
        period: "MM",
        selected: true,
        count: 1,
        label: "1 month"
        }, {
        period: "YYYY",
        count: 1,
        label: "1 year"
        }, {
        period: "YTD",
        label: "YTD"
        }, {
        period: "MAX",
        label: "MAX"
        }];
    chart.periodSelector = periodSelector;

    chart.write('chartdiv');

}


// evolution chart ////////////////////////////////////


var caChartData = [{
    "ca": "106.6",
    "transaction": "404",
    "year": 2012
}, {
    "ca": "96.2",
    "transaction": "447",
    "year": 2013
}, {
    "ca": "91.4",
    "transaction": "580",
    "year": 2014
}];

AmCharts.ready(function () {
    var chart3 = new AmCharts.AmSerialChart();
    chart3.dataProvider = caChartData;
    chart3.categoryField = "year";
    chart3.color = "#666666";
    chart3.categoryAxis = [{
        gridThickness: 0
    }];

    var graph3 = new AmCharts.AmGraph();
    graph3.valueField = "transaction";
    graph3.type = "column";
    graph3.lineThickness = 0;
    graph3.fillColors = "#007CC1";
    graph3.fillAlphas = 0.5;
    graph3.categoryAxis = [{
        gridThickness: 0
    }];
    graph3.valueAxes = [{
        gridAlpha: 0
    }];
    graph3.balloonText = "<b>[[value]]</b> transactions";
    chart3.addGraph(graph3);

    var graph4 = new AmCharts.AmGraph();
    graph4.valueField = "transaction";
    graph4.type = "smoothedLine";
    graph4.lineThickness = 1;
    graph4.fillColors = "#007CC1";
    graph4.fillAlphas = 0;
    graph4.categoryAxis = [{
        gridThickness: 0
    }];


    chart3.write('ca-chartdiv');
});



