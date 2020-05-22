<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1,width=device-width">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <link rel="stylesheet" href="css/leaflet.css">
        <link rel="stylesheet" href="css/qgis2web.css">
        <link rel="stylesheet" href="css/leaflet-measure.css">
        <style>
        html, body, #map {
            width: 100%;
            height: 100%;
            padding: 0;
            margin: 0;
        }
        </style>
        <title>Peta - Siswa SMA MA Dan SMK Menurut Kecamatan Di Kota Pekalongan</title>
        <header><center><b><h1><font size="4.5" face="verdana">PETA PERSEBARAN SISWA SMA SMK DAN MA MENURUT KECAMATAN</h1><h2>
        DI KOTA PEKALONGAN</h2>
        </b><hr></center>
		</header>
    </head>
    <body>
        <div id="map">
        </div>
        <script src="js/qgis2web_expressions.js"></script>
        <script src="js/leaflet.js"></script>
        <script src="js/leaflet.rotatedMarker.js"></script>
        <script src="js/leaflet.pattern.js"></script>
        <script src="js/leaflet-hash.js"></script>
        <script src="js/Autolinker.min.js"></script>
        <script src="js/rbush.min.js"></script>
        <script src="js/labelgun.min.js"></script>
        <script src="js/labels.js"></script>
        <script src="js/leaflet-measure.js"></script>
        <script src="data/KOTA_PEKALONGAN_KEC_0.php"></script>
        <script>
        var map = L.map('map', {
            zoomControl:true, maxZoom:28, minZoom:1
        }).fitBounds([[-6.9441839595,109.591452333],[-6.8469980805,109.754336547]]);
        var hash = new L.Hash(map);
        map.attributionControl.addAttribution('<a href="https://github.com/tomchadwin/qgis2web" target="_blank">qgis2web</a>');
        var measureControl = new L.Control.Measure({
            primaryLengthUnit: 'meters',
            secondaryLengthUnit: 'kilometers',
            primaryAreaUnit: 'sqmeters',
            secondaryAreaUnit: 'hectares'
        });
        measureControl.addTo(map);
        var bounds_group = new L.featureGroup([]);
        function setBounds() {
        }
        function pop_KOTA_PEKALONGAN_KEC_0(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <th scope="row">KECAMATAN</th>\
                        <td>' + (feature.properties['KECAMATAN'] !== null ? Autolinker.link(String(feature.properties['KECAMATAN'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">KABUPATEN</th>\
                        <td>' + (feature.properties['KABUPATEN'] !== null ? Autolinker.link(String(feature.properties['KABUPATEN'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">PROPINSI</th>\
                        <td>' + (feature.properties['PROPINSI'] !== null ? Autolinker.link(String(feature.properties['PROPINSI'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">SMA_MA</th>\
                        <td>' + (feature.properties['SMA_MA'] !== null ? Autolinker.link(String(feature.properties['SMA_MA'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">SMK</th>\
                        <td>' + (feature.properties['SMK'] !== null ? Autolinker.link(String(feature.properties['SMK'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">JUMLAH</th>\
                        <td>' + (feature.properties['JUMLAH'] !== null ? Autolinker.link(String(feature.properties['JUMLAH'])) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_KOTA_PEKALONGAN_KEC_0_0(feature) {
            if (feature.properties['JUMLAH'] >= 1589.000000 && feature.properties['JUMLAH'] <= 2298.600000 ) {
                return {
                pane: 'pane_KOTA_PEKALONGAN_KEC_0',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,255,178,1.0)',
            }
            }
            if (feature.properties['JUMLAH'] >= 2298.600000 && feature.properties['JUMLAH'] <= 3008.200000 ) {
                return {
                pane: 'pane_KOTA_PEKALONGAN_KEC_0',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(254,204,92,1.0)',
            }
            }
            if (feature.properties['JUMLAH'] >= 3008.200000 && feature.properties['JUMLAH'] <= 3717.800000 ) {
                return {
                pane: 'pane_KOTA_PEKALONGAN_KEC_0',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(253,141,60,1.0)',
            }
            }
            if (feature.properties['JUMLAH'] >= 3717.800000 && feature.properties['JUMLAH'] <= 4427.400000 ) {
                return {
                pane: 'pane_KOTA_PEKALONGAN_KEC_0',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(240,59,32,1.0)',
            }
            }
            if (feature.properties['JUMLAH'] >= 4427.400000 && feature.properties['JUMLAH'] <= 5137.000000 ) {
                return {
                pane: 'pane_KOTA_PEKALONGAN_KEC_0',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(189,0,38,1.0)',
            }
            }
        }
        map.createPane('pane_KOTA_PEKALONGAN_KEC_0');
        map.getPane('pane_KOTA_PEKALONGAN_KEC_0').style.zIndex = 400;
        map.getPane('pane_KOTA_PEKALONGAN_KEC_0').style['mix-blend-mode'] = 'normal';
        var layer_KOTA_PEKALONGAN_KEC_0 = new L.geoJson(json_KOTA_PEKALONGAN_KEC_0, {
            attribution: '<a href=""></a>',
            pane: 'pane_KOTA_PEKALONGAN_KEC_0',
            onEachFeature: pop_KOTA_PEKALONGAN_KEC_0,
            style: style_KOTA_PEKALONGAN_KEC_0_0,
        });
        bounds_group.addLayer(layer_KOTA_PEKALONGAN_KEC_0);
        map.addLayer(layer_KOTA_PEKALONGAN_KEC_0);
        var baseMaps = {};
        L.control.layers(baseMaps,{'KOTA_PEKALONGAN_KEC<br /><table><tr><td style="text-align: center;"><img src="legend/KOTA_PEKALONGAN_KEC_0_158922990.png" /></td><td> 1589 - 2299 </td></tr><tr><td style="text-align: center;"><img src="legend/KOTA_PEKALONGAN_KEC_0_229930081.png" /></td><td> 2299 - 3008 </td></tr><tr><td style="text-align: center;"><img src="legend/KOTA_PEKALONGAN_KEC_0_300837182.png" /></td><td> 3008 - 3718 </td></tr><tr><td style="text-align: center;"><img src="legend/KOTA_PEKALONGAN_KEC_0_371844273.png" /></td><td> 3718 - 4427 </td></tr><tr><td style="text-align: center;"><img src="legend/KOTA_PEKALONGAN_KEC_0_442751374.png" /></td><td> 4427 - 5137 </td></tr></table>': layer_KOTA_PEKALONGAN_KEC_0,},{collapsed:false}).addTo(map);
        setBounds();
        var i = 0;
        layer_KOTA_PEKALONGAN_KEC_0.eachLayer(function(layer) {
            var context = {
                feature: layer.feature,
                variables: {}
            };
            layer.bindTooltip((layer.feature.properties['KECAMATAN'] !== null?String('<div style="color: #000000; font-size: 8pt; font-family: \'MS Shell Dlg 2\', sans-serif;">' + layer.feature.properties['KECAMATAN']) + '</div>':''), {permanent: true, offset: [-0, -16], className: 'css_KOTA_PEKALONGAN_KEC_0'});
            labels.push(layer);
            totalMarkers += 1;
              layer.added = true;
              addLabel(layer, i);
              i++;
        });
        resetLabels([layer_KOTAPEKALONGANKEC_0]);
        map.on("zoomend", function(){
            resetLabels([layer_KOTAPEKALONGANKEC_0]);
        });
        map.on("layeradd", function(){
            resetLabels([layer_KOTAPEKALONGANKEC_0]);
        });
        map.on("layerremove", function(){
            resetLabels([layer_KOTAPEKALONGANKEC_0]);
        });
        </script>
    </body>
</html>
