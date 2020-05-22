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
        <title>Peta - SMA MA Dan SMK Kota Pekalongan</title>
        <br><br>
        <header><center><b><font size="5.5" face="verdana">PETA PERSEBARAN SMA SMK DAN MA DI KOTA PEKALONGAN
        </b><br><br><hr></center>
        <br>
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
        <script src="data/KOTA_PEKALONGAN_KEC_0.js"></script>
        <script src="data/KOTA_PEKALONGAN_KECLABEL_1.js"></script>
        <script src="data/KOTA_PEKALONGAN_DESA_2.js"></script>
        <script src="data/KOTA_PEKALONGAN_DESA_LABEL_3.js"></script>
        <script src="data/SMA_SMK_DAN_MA_4.php"></script>
        <script>
        var map = L.map('map', {
            zoomControl:true, maxZoom:28, minZoom:1
        }).fitBounds([[-6.94580088743,109.576389373],[-6.84861500843,109.739273587]]);
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
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_KOTA_PEKALONGAN_KEC_0_0() {
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
                fillColor: 'rgba(255,255,17,1.0)',
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
        function pop_KOTA_PEKALONGAN_KECLABEL_1(feature, layer) {
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
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_KOTA_PEKALONGAN_KECLABEL_1_0() {
            return {
                pane: 'pane_KOTA_PEKALONGAN_KECLABEL_1',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,255,17,1.0)',
            }
        }
        map.createPane('pane_KOTA_PEKALONGAN_KECLABEL_1');
        map.getPane('pane_KOTA_PEKALONGAN_KECLABEL_1').style.zIndex = 401;
        map.getPane('pane_KOTA_PEKALONGAN_KECLABEL_1').style['mix-blend-mode'] = 'normal';
        var layer_KOTA_PEKALONGAN_KECLABEL_1 = new L.geoJson(json_KOTA_PEKALONGAN_KECLABEL_1, {
            attribution: '<a href=""></a>',
            pane: 'pane_KOTA_PEKALONGAN_KECLABEL_1',
            onEachFeature: pop_KOTA_PEKALONGAN_KECLABEL_1,
            style: style_KOTA_PEKALONGAN_KECLABEL_1_0,
        });
        bounds_group.addLayer(layer_KOTA_PEKALONGAN_KECLABEL_1);
        function pop_KOTA_PEKALONGAN_DESA_2(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <th scope="row">DESA</th>\
                        <td>' + (feature.properties['DESA'] !== null ? Autolinker.link(String(feature.properties['DESA'])) : '') + '</td>\
                    </tr>\
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
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_KOTA_PEKALONGAN_DESA_2_0() {
            return {
                pane: 'pane_KOTA_PEKALONGAN_DESA_2',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,255,17,1.0)',
            }
        }
        map.createPane('pane_KOTA_PEKALONGAN_DESA_2');
        map.getPane('pane_KOTA_PEKALONGAN_DESA_2').style.zIndex = 402;
        map.getPane('pane_KOTA_PEKALONGAN_DESA_2').style['mix-blend-mode'] = 'normal';
        var layer_KOTA_PEKALONGAN_DESA_2 = new L.geoJson(json_KOTA_PEKALONGAN_DESA_2, {
            attribution: '<a href=""></a>',
            pane: 'pane_KOTA_PEKALONGAN_DESA_2',
            onEachFeature: pop_KOTA_PEKALONGAN_DESA_2,
            style: style_KOTA_PEKALONGAN_DESA_2_0,
        });
        bounds_group.addLayer(layer_KOTA_PEKALONGAN_DESA_2);
        map.addLayer(layer_KOTA_PEKALONGAN_DESA_2);
        function pop_KOTA_PEKALONGAN_DESA_LABEL_3(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <th scope="row">DESA</th>\
                        <td>' + (feature.properties['DESA'] !== null ? Autolinker.link(String(feature.properties['DESA'])) : '') + '</td>\
                    </tr>\
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
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_KOTA_PEKALONGAN_DESA_LABEL_3_0() {
            return {
                pane: 'pane_KOTA_PEKALONGAN_DESA_LABEL_3',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,255,17,1.0)',
            }
        }
        map.createPane('pane_KOTA_PEKALONGAN_DESA_LABEL_3');
        map.getPane('pane_KOTA_PEKALONGAN_DESA_LABEL_3').style.zIndex = 403;
        map.getPane('pane_KOTA_PEKALONGAN_DESA_LABEL_3').style['mix-blend-mode'] = 'normal';
        var layer_KOTA_PEKALONGAN_DESA_LABEL_3 = new L.geoJson(json_KOTA_PEKALONGAN_DESA_LABEL_3, {
            attribution: '<a href=""></a>',
            pane: 'pane_KOTA_PEKALONGAN_DESA_LABEL_3',
            onEachFeature: pop_KOTA_PEKALONGAN_DESA_LABEL_3,
            style: style_KOTA_PEKALONGAN_DESA_LABEL_3_0,
        });
        bounds_group.addLayer(layer_KOTA_PEKALONGAN_DESA_LABEL_3);
        function pop_SMA_SMK_DAN_MA_4(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <th scope="row">NSS</th>\
                        <td>' + (feature.properties['NSS'] !== null ? Autolinker.link(String(feature.properties['NSS'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">NPSN</th>\
                        <td>' + (feature.properties['NPSN'] !== null ? Autolinker.link(String(feature.properties['NPSN'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Nama</th>\
                        <td>' + (feature.properties['Nama'] !== null ? Autolinker.link(String(feature.properties['Nama'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Status</th>\
                        <td>' + (feature.properties['Status'] !== null ? Autolinker.link(String(feature.properties['Status'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Alamat</th>\
                        <td>' + (feature.properties['Alamat'] !== null ? Autolinker.link(String(feature.properties['Alamat'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Kecamatan</th>\
                        <td>' + (feature.properties['Kecamatan'] !== null ? Autolinker.link(String(feature.properties['Kecamatan'])) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        var myIcon = L.icon({
        iconUrl:'legend/SMA_SMK_DAN_MA_4_MA0.png',
        iconSize:[16, 16],
        iconAnchor:[8, 8],
        popupAnchor:[0, -10]
        });
        var myIcon1 = L.icon({
        iconUrl:'legend/SMA_SMK_DAN_MA_4_SMA1.png',
        iconSize:[16, 16],
        iconAnchor:[8, 8],
        popupAnchor:[0, -10]
        });
        var myIcon2 = L.icon({
        iconUrl:'legend/SMA_SMK_DAN_MA_4_SMK2.png',
        iconSize:[16, 16],
        iconAnchor:[8, 8],
        popupAnchor:[0, -10]
        });

        function style_SMA_SMK_DAN_MA_4_0(feature) {
            switch(String(feature.properties['Status'])) {
                case 'MA':
                    return {
                pane: 'pane_SMA_SMK_DAN_MA_4',
                radius: 4.0,
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(234,175,127,1.0)',
                icon: myIcon,
            }
                    break;
                case 'SMA':
                    return {
                pane: 'pane_SMA_SMK_DAN_MA_4',
                radius: 4.0,
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(56,151,234,1.0)',
                icon: myIcon1,
            }
                    break;
                case 'SMK':
                    return {
                pane: 'pane_SMA_SMK_DAN_MA_4',
                radius: 4.0,
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(235,80,240,1.0)',
                icon: myIcon2,
            }
                    break;
            }
        }
        map.createPane('pane_SMA_SMK_DAN_MA_4');
        map.getPane('pane_SMA_SMK_DAN_MA_4').style.zIndex = 404;
        map.getPane('pane_SMA_SMK_DAN_MA_4').style['mix-blend-mode'] = 'normal';
        var layer_SMA_SMK_DAN_MA_4 = new L.geoJson(json_SMA_SMK_DAN_MA_4, {
            attribution: '<a href=""></a>',
            pane: 'pane_SMA_SMK_DAN_MA_4',
            onEachFeature: pop_SMA_SMK_DAN_MA_4,
            pointToLayer: function (feature, latlng) {
                var context = {
                    feature: feature,
                    variables: {}
                };
                return L.marker(latlng, style_SMA_SMK_DAN_MA_4_0(feature));
            },
        });
        bounds_group.addLayer(layer_SMA_SMK_DAN_MA_4);
        map.addLayer(layer_SMA_SMK_DAN_MA_4);
        var baseMaps = {};
        L.control.layers(baseMaps,{'SMA_SMK_DAN_MA<br /><table><tr><td style="text-align: center;"><img src="legend/SMA_SMK_DAN_MA_4_MA0.png" height="16"/></td><td>MA</td></tr><tr><td style="text-align: center;"><img src="legend/SMA_SMK_DAN_MA_4_SMA1.png" height="16"/></td><td>SMA</td></tr><tr><td style="text-align: center;"><img src="legend/SMA_SMK_DAN_MA_4_SMK2.png" height="16"/></td><td>SMK</td></tr></table>': layer_SMA_SMK_DAN_MA_4,'<img src="legend/KOTA_PEKALONGAN_DESA_LABEL_3.png" /> KOTA_PEKALONGAN_DESA_LABEL': layer_KOTA_PEKALONGAN_DESA_LABEL_3,'<img src="legend/KOTA_PEKALONGAN_DESA_2.png" /> KOTA_PEKALONGAN_DESA': layer_KOTA_PEKALONGAN_DESA_2,'<img src="legend/KOTA_PEKALONGAN_KECLABEL_1.png" /> KOTA_PEKALONGAN_KEC LABEL': layer_KOTA_PEKALONGAN_KECLABEL_1,'<img src="legend/KOTA_PEKALONGAN_KEC_0.png" /> KOTA_PEKALONGAN_KEC': layer_KOTA_PEKALONGAN_KEC_0,},{collapsed:false}).addTo(map);
        setBounds();
        var i = 0;
        layer_KOTA_PEKALONGAN_KECLABEL_1.eachLayer(function(layer) {
            var context = {
                feature: layer.feature,
                variables: {}
            };
            layer.bindTooltip((layer.feature.properties['KECAMATAN'] !== null?String('<div style="color: #000000; font-size: 8pt; font-family: \'MS Shell Dlg 2\', sans-serif;">' + layer.feature.properties['KECAMATAN']) + '</div>':''), {permanent: true, offset: [-0, -16], className: 'css_KOTA_PEKALONGAN_KECLABEL_1'});
            labels.push(layer);
            totalMarkers += 1;
              layer.added = true;
              addLabel(layer, i);
              i++;
        });
        var i = 0;
        layer_KOTA_PEKALONGAN_DESA_LABEL_3.eachLayer(function(layer) {
            var context = {
                feature: layer.feature,
                variables: {}
            };
            layer.bindTooltip((layer.feature.properties['DESA'] !== null?String('<div style="color: #000000; font-size: 8pt; font-family: \'MS Shell Dlg 2\', sans-serif;">' + layer.feature.properties['DESA']) + '</div>':''), {permanent: true, offset: [-0, -16], className: 'css_KOTA_PEKALONGAN_DESA_LABEL_3'});
            labels.push(layer);
            totalMarkers += 1;
              layer.added = true;
              addLabel(layer, i);
              i++;
        });
        resetLabels([layer_KOTAPEKALONGANKECLABEL_1,layer_KOTAPEKALONGANDESALABEL_3]);
        map.on("zoomend", function(){
            resetLabels([layer_KOTAPEKALONGANKECLABEL_1,layer_KOTAPEKALONGANDESALABEL_3]);
        });
        map.on("layeradd", function(){
            resetLabels([layer_KOTAPEKALONGANKECLABEL_1,layer_KOTAPEKALONGANDESALABEL_3]);
        });
        map.on("layerremove", function(){
            resetLabels([layer_KOTAPEKALONGANKECLABEL_1,layer_KOTAPEKALONGANDESALABEL_3]);
        });
        </script>
    </body>
</html>
