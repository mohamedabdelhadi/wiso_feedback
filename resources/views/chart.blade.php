<html>
<head>
  <script src="https://cdn.anychart.com/releases/v8/js/anychart-base.min.js"></script>
  <script src="https://cdn.anychart.com/releases/v8/js/anychart-ui.min.js"></script>
  <script src="https://cdn.anychart.com/releases/v8/js/anychart-exports.min.js"></script>
  <link href="https://cdn.anychart.com/releases/v8/css/anychart-ui.min.css" type="text/css" rel="stylesheet">
  <link href="https://cdn.anychart.com/releases/v8/fonts/css/anychart-font.min.css" type="text/css" rel="stylesheet">
  <style type="text/css">

    html,
    body,
    #container {
      width: 100%;
      height: 100%;
      margin: 0;
      padding: 0;
    }
  
</style>
</head>
<body>
  
  <div id="container"></div>
  

  <script>

    anychart.onDocumentReady(function () {
      // create pie chart with passed data
      var chart = anychart.pie([
        ['Age Group A ', 33],        
        ['Age Group B', 33],
        ['Age Group C', 33]
      ]);

      // creates palette
      var palette = anychart.palettes.distinctColors();
      palette.items([
        { color: '#A989C5' },
        { color: '#F9D45C' },        
        { color: '#7172AD' }
      ]);

      // set chart radius
      chart
        .radius('43%')
        // create empty area in pie chart
        .innerRadius('60%')
        // set chart palette
        .palette(palette);

      // set outline settings
      chart
        .outline()
        .width('3%')
        .fill(function () {
          return anychart.color.darken(this.sourceColor, 0.25);
        });

      // format tooltip
    //   chart.tooltip().format('Percent Value: {%PercentValue}%');
      chart.tooltip().format('Range: 18-25');

      // create standalone label and set label settings
      var label = anychart.standalones.label();
      label
        .enabled(true)
        .text('Total= 100%')
        .width('100%')
        .height('100%')
        .adjustFontSize(true, true)
        .minFontSize(10)
        .maxFontSize(25)
        .fontColor('#60727b')
        .position('center')
        .anchor('center')
        .hAlign('center')
        .vAlign('middle');

      // set label to center content of chart
      chart.center().content(label);

      // set container id for the chart
      chart.container('container');
      // initiate chart drawing
      chart.draw();
    });
  
</script>
</body>
</html>
                





































<!-- <html>
<script src="https://d3js.org/d3.v4.min.js"></script>
<script src=
"https://cdn.jsdelivr.net/npm/billboard.js/dist/billboard.min.js"></script>
<link
	rel="stylesheet"
	href=
"https://cdn.jsdelivr.net/npm/billboard.js/dist/billboard.min.css"
/>
<link
	rel=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"
	type="text/css"
/>

<script src=
"https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js">
</script>
<script src=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js">
</script>

<script src=
"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.1/Chart.min.js">
</script>

<style>
	body {
	text-align: center;
	color: green;
	}
	h2 {
	text-align: center;
	font-family: "Verdana", sans-serif;
	font-size: 40px;
	}
</style>
<body>
	<div class="col-xs-12 text-center">
	<h2>Donut Chart</h2>
	</div>

	<div id="donut-chart"></div>

	<script>
	var chart = bb.generate({
		data: {
		columns: [
			["Blue", 2],
			["orange", 4],
			["green", 3],
		],
		type: "donut",
		onclick: function (d, i) {
			console.log("onclick", d, i);
		},
		onover: function (d, i) {
			console.log("onover", d, i);
		},
		onout: function (d, i) {
			console.log("onout", d, i);
		},
		},
		donut: {
		title: "70",
		},
		bindto: "#donut-chart",
	});
	</script>
</body>
</html> -->
