                     <html>
<head>
  <script src="https://cdn.anychart.com/releases/v8/js/anychart-base.min.js?hcode=be5162d915534272a57d0bb781d27f2b"></script>
  <script src="https://cdn.anychart.com/releases/v8/js/anychart-ui.min.js?hcode=be5162d915534272a57d0bb781d27f2b"></script>
  <script src="https://cdn.anychart.com/releases/v8/js/anychart-exports.min.js?hcode=be5162d915534272a57d0bb781d27f2b"></script>
  <script src="https://cdn.anychart.com/releases/v8/js/anychart-map.min.js?hcode=be5162d915534272a57d0bb781d27f2b"></script>
  <script src="https://cdn.anychart.com/releases/v8/js/anychart-data-adapter.min.js?hcode=be5162d915534272a57d0bb781d27f2b"></script>
  <script src="https://cdn.anychart.com/geodata/1.2.0/countries/france/france.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/proj4js/2.3.15/proj4.js"></script>
  <link href="https://cdn.anychart.com/releases/v8/css/anychart-ui.min.css?hcode=be5162d915534272a57d0bb781d27f2b" type="text/css" rel="stylesheet">
  <link href="https://cdn.anychart.com/releases/v8/fonts/css/anychart-font.min.css?hcode=be5162d915534272a57d0bb781d27f2b" type="text/css" rel="stylesheet">
  <style type="text/css">
html, body, #container {
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
    // The data used in this sample can be obtained from the CDN
    // https://cdn.anychart.com/samples/maps-bubble/france-surf-areas-by-lat-long/data.json
    anychart.data.loadJsonFile('https://cdn.anychart.com/samples/maps-bubble/france-surf-areas-by-lat-long/data.json', function (data) {
        // create data set
        var dataSet = anychart.data.set(data);

        // create map chart
        var map = anychart.map();

        map.unboundRegions()
                .enabled(true)
                .fill('#E1E1E1')
                .stroke('#D2D2D2');
        // set geodata using https://cdn.anychart.com/geodata/1.2.0/countries/france/france.js
        map.geoData('anychart.maps.france');

        // create map title
        map.title()
                .enabled(true)
                .useHtml(true)
                .padding([0, 0, 20, 0])
                .text("France Surf Areas by Lat/Long <br/>" +
                        "<span style='color: #545f69; font-size: 13px'>(All coordinates were taken from Google Maps)</span>");

        // set chart bubble settings
        map.maxBubbleSize('6.5%')
                .minBubbleSize('1.5%');

        //create choropleth series
        var series = map.bubble(dataSet);
        series.labels()
                .enabled(true)
                .useHtml(true)
                .anchor('left-bottom')
                .position('right')
                .format(function () {
                    return this.getData('name') + " <b>" + this.getData('size') + "</b>";
                });

        series.tooltip()
                .useHtml(true)
                .title({useHtml: true})
                .width(250)
                .title({fontColor: '#7c868e'})
                .padding([8, 13, 10, 13])
                .titleFormat(function () {
                    var span_for_value = ' (<span style="color: #545f69; font-size: 12px; font-weight: bold">';
                    return this.getData('name') + span_for_value + this.getData('size') + '</span> spots)</strong>';
                })
                .format(function () {
                    return '<span style="color: #545f69; font-size: 12px">' + this.getData('desc') + '</span></strong>';
                });

        map.tooltip().background()
                .enabled(true)
                .fill('#fff')
                .stroke('#c1c1c1')
                .corners(3)
                .cornerType('round');

        // set container id for the chart
        map.container('container');
        // initiate chart drawing
        map.draw();
    });
});
</script>
</body>
</html>
                