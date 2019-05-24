




<html>
<head>
  <script src="https://cdn.anychart.com/geodata/1.2.0/countries/united_states_of_america/united_states_of_america.js"></script>
  <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
  <script src="https://cdn.anychart.com/releases/v8/js/anychart-base.min.js?hcode=be5162d915534272a57d0bb781d27f2b"></script>
  <script src="https://cdn.anychart.com/releases/v8/js/anychart-ui.min.js?hcode=be5162d915534272a57d0bb781d27f2b"></script>
  <script src="https://cdn.anychart.com/releases/v8/js/anychart-exports.min.js?hcode=be5162d915534272a57d0bb781d27f2b"></script>
  <script src="https://cdn.anychart.com/releases/v8/js/anychart-map.min.js?hcode=be5162d915534272a57d0bb781d27f2b"></script>
  <script src="https://cdn.anychart.com/releases/v8/js/anychart-data-adapter.min.js?hcode=be5162d915534272a57d0bb781d27f2b"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/proj4js/2.3.15/proj4.js"></script>
  <link href="https://cdn.anychart.com/playground-css/maps_choropleth/USA_restaurant_franchise/style.css" type="text/css" rel="stylesheet">
  <link href="https://cdn.anychart.com/releases/v8/css/anychart-ui.min.css?hcode=be5162d915534272a57d0bb781d27f2b" type="text/css" rel="stylesheet">
  <link href="https://cdn.anychart.com/releases/v8/fonts/css/anychart-font.min.css?hcode=be5162d915534272a57d0bb781d27f2b" type="text/css" rel="stylesheet">
  <style type="text/css">
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
    // The data used in this sample can be obtained from the CDN
    // https://cdn.anychart.com/samples/maps-choropleth/usa-restaurant-franchise-locator/data.json
    anychart.data.loadJsonFile('hj.json', function (data) {
        var purchase_franchise_url = "www.yourdomain.com/franchise/";
        var restaurantData = data;

        // add html elements in div#container
        var container = document.getElementById('container');
        container.innerHTML = '<div class="line"><div id="map-container"></div><div id="info"><h2 id="sight-title"></h2><div class="important">Click a country to see more</div></div></div>';

        //create map chart
        var map = anychart.map();

        //settings for map chart
        map.padding([10, 0, 10, 10])
                .geoData('anychart.maps.united_states_of_america')
                .interactivity({selectionMode: 'single-select'});
        map.title()
                .enabled(true)
                .padding([10, 0, 20, 0])
                .text('MAHALLE BAZLI BAŞVURU SAYILARI');

        //create choropleth series for map chart
        mapSeries = map.choropleth(anychart.data.set(restaurantData));
        mapSeries.geoIdField('code_hasc')
                .labels(false)
                .colorScale(anychart.scales.linearColor('#f2f2f2', '#039be5', '#01579b'))
        mapSeries.hovered()
                .stroke(mapSeries.stroke())
                .fill(mapSeries.fill());
        mapSeries.selected()
                .stroke('#757575')
                .fill('#9e9e9e');
        mapSeries.selected().labels()
                .enabled(true)
                .fontColor('#263238')
                .fontWeight('bold');

        //custom text in tooltips for choropleth series for map chart
        mapSeries.tooltip()
                .useHtml(true)
                .fontSize(12)
                .titleFormat(function () {
                    return this.getData('name');
                })
                .format(function () {
                    var restaurants_amount_text = '<span style="color: #d9d9d9;">' +
                            'Henüz başvuru yapılmamış ' + this.getData('name') + '.</span>';
                    if (this.value == 1) {
                        restaurants_amount_text = '<span style="color: #d9d9d9;">' +
                                'Başvuru sayisi <span style="color: #fff;">' + this.value + ' </span>  '
                                + this.getData('name') + '.</span><br/>.';
                    } else if (this.value > 1) {
                        restaurants_amount_text = '<span style="color: #d9d9d9;">' +
                                'Başvuru sayisi <span style="color: #fff;">' + this.value + ' </span> '
                                + this.getData('name') + '.</span><br/>.';
                    }
                    return restaurants_amount_text;
                });

        // on point select function for map chart (put information in div about selected point)
        map.listen('pointsSelect', function (e) {
            if (e.seriesStatus[0].points.length > 0) {
                var selectedPoints = e.seriesStatus[0].points;
                for (var i = 0; i < selectedPoints.length; i++) {
                    var data_item = restaurantData[selectedPoints[i].index];
                    $('#sight-title').html(data_item.name);
                    var restaurants_amount_text = '<p style="color: #212121;">There are no ACME restaurants in ' +
                            data_item.name + '.</p>' +
                            '<p>Interested in buying a franchise in ' + data_item.name + '?<br/>' +
                            'Please, contact: <a href="' + purchase_franchise_url + data_item.name + '">' +
                            purchase_franchise_url + data_item.name + '</a></p>';
                    if (data_item.value == 1) {
                        restaurants_amount_text = '<p style="color: #212121;">ACME has ' + data_item.value +
                                ' restaurant in ' + data_item.name + ':</p><ul>';
                    } else if (data_item.value > 1) {
                        restaurants_amount_text = '<p style="color: #212121;">ACME has ' + data_item.value +
                                ' restaurants in ' + data_item.name + ':</p><ul>';
                    }
                    if (data_item.restaurants) {
                        for (var j = 0; j < data_item.restaurants.length; j++) {
                            restaurants_amount_text += '<li><a href="' + data_item.restaurants[j].website + '">' +
                                    data_item.restaurants[j].name + '</a><br/> ' + data_item.restaurants[j].address + '</li>'
                        }
                        restaurants_amount_text += '</ul>';
                    }
                    $('div.important').html(restaurants_amount_text)
                }
            } else {
                $('div.important').html('Click a country to see more');
                $('#sight-title').html('');
            }
        });

        // set container id for the chart
        map.container('map-container');
        // initiate chart drawing
        map.draw();
    });
});
</script>
</body>
</html>
                