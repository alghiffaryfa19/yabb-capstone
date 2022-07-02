<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="{{asset('superadmin/js/jquery.min.js')}}"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css" integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ==" crossorigin=""/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
		html, body {
			height: 100%;
			margin: 0;
		}
		.leaflet-container {
			height: 400px;
			width: 600px;
			max-width: 100%;
			max-height: 100%;
		}
	</style>

<style>
    #chartdiv {
      width: 100%;
      height: 500px;
    }
    </style>

	<style>#map { width: 100%; height: 500px; }
.info { padding: 6px 8px; font: 14px/16px Arial, Helvetica, sans-serif; background: white; background: rgba(255,255,255,0.8); box-shadow: 0 0 15px rgba(0,0,0,0.2); border-radius: 5px; } .info h4 { margin: 0 0 5px; color: #777; }
.legend { text-align: left; line-height: 18px; color: #555; } .legend i { width: 18px; height: 18px; float: left; margin-right: 8px; opacity: 0.7; }</style>
</head>
<body>
    <div class="container">
        <div id="containesr" style="height: 370px; width: 100%;"></div>
        <div id='map'></div>
        <div id="chartdiv"></div>
        <div>
            <select class="form-control" id="childd">
                <option></option>
                @foreach ($child as $item)

                <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
            </select>

        </div>
        <div id="cellphone_container"></div>

        <div>
            <select class="form-control" id="childdd">
                <option></option>
                @foreach ($child_2 as $item)

                <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
            </select>

        </div>
        <div id="internet_container"></div>

        <div id='piramida'></div>
        <div id="stack"></div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js" integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ==" crossorigin=""></script>
    <script type="text/javascript" src="{{asset('indo.js')}}"></script>

    <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>

{{-- <script src="{{asset('cellphone.js')}}"></script> --}}


<script type="text/javascript">

	var map = L.map('map').setView([-1.8123877831094566, 120.2139471273533], 5);

	var tiles = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
		maxZoom: 19,
		attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
	}).addTo(map);

	// control that shows state info on hover
	var info = L.control();

	info.onAdd = function (map) {
		this._div = L.DomUtil.create('div', 'info');
		this.update();
		return this._div;
	};

	info.update = function (props) {
		this._div.innerHTML = '<h5>Literacy rate of population above 15 years old in Indonesia 2021. by province</h5>' +  (props ?
			'<b>' + props.name + '</b><br />' + props.density + '%' : 'Hover over a state');
	};

	info.addTo(map);


	// get color depending on population density value
	function getColor(d) {
		return d > 98 ? '#800026' :
			d > 96  ? '#BD0026' :
			d > 94  ? '#E31A1C' :
			d > 92  ? '#FC4E2A' :
			d > 87   ? '#FD8D3C' :
			d > 78   ? '#FED976' : '#FFEDA0';
	}

	function style(feature) {
		return {
			weight: 2,
			opacity: 1,
			color: 'white',
			dashArray: '3',
			fillOpacity: 0.7,
			fillColor: getColor(feature.properties.density)
		};
	}

	function highlightFeature(e) {
		var layer = e.target;

		layer.setStyle({
			weight: 5,
			color: '#666',
			dashArray: '',
			fillOpacity: 0.7
		});

		if (!L.Browser.ie && !L.Browser.opera && !L.Browser.edge) {
			layer.bringToFront();
		}

		info.update(layer.feature.properties);
	}

	var geojson;

	function resetHighlight(e) {
		geojson.resetStyle(e.target);
		info.update();
	}

	function zoomToFeature(e) {
		map.fitBounds(e.target.getBounds());
	}

	function onEachFeature(feature, layer) {
		layer.on({
			mouseover: highlightFeature,
			mouseout: resetHighlight,
			click: zoomToFeature
		});
	}

	/* global statesData */
	geojson = L.geoJson(statesData, {
		style: style,
		onEachFeature: onEachFeature
	}).addTo(map);

	map.attributionControl.addAttribution('Population data &copy; <a href="http://census.gov/">US Census Bureau</a>');


	var legend = L.control({position: 'bottomright'});

	legend.onAdd = function (map) {

		var div = L.DomUtil.create('div', 'info legend');
		var grades = [0, 78, 87, 92, 94, 96, 98, 100];
		var labels = [];
		var from, to;

		for (var i = 0; i < grades.length; i++) {
			from = grades[i];
			to = grades[i + 1];

			labels.push(
				'<i style="background:' + getColor(from + 1) + '"></i> ' +
				from + (to ? '&ndash;' + to : '') + ' %') ;
		}

		div.innerHTML = labels.join('<br>');
		return div;
	};

	legend.addTo(map);

</script>
    <script>


$(document).ready(function () {
    $.ajax({
        url : '{{route('api_data')}}',
        type : 'GET',
        dataType : 'JSON',
        success : function(response) {

            var Data = new Array();

            response.forEach(function(data){
                Data.push(data)
            });

            Highcharts.chart('containesr', {

            title: {
                text: 'Literacy rate in Indonesia 2012-2021, by age group'
            },

            subtitle: {
                text: 'Source: statista.com'
            },

            yAxis: {
                title: {
                    text: '%'
                }
            },

            xAxis: {
                accessibility: {
                    rangeDescription: 'Range: 2012 to 2021cc'
                }
            },

            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle'
            },

            plotOptions: {
                series: {
                    label: {
                        connectorAllowed: false
                    },
                    pointStart: 2012
                }
            },

            series: Data,

            responsive: {
                rules: [{
                    condition: {
                        maxWidth: 500
                    },
                    chartOptions: {
                        legend: {
                            layout: 'horizontal',
                            align: 'center',
                            verticalAlign: 'bottom'
                        }
                    }
                }]
            }

            });
        }
    });

});

        </script>
        <script>
            $(document).ready(function () {
                $.ajax({
                    url : '{{route('api_asean')}}',
                    type : 'GET',
                    dataType : 'JSON',
                    success : function(response) {
                        var Data = new Array();

                        response.forEach(function(data){
                            Data.push(data)
                        });

                        am5.ready(function() {

                        // Create root element
                        // https://www.amcharts.com/docs/v5/getting-started/#Root_element
                        var root = am5.Root.new("chartdiv");


                        // Set themes
                        // https://www.amcharts.com/docs/v5/concepts/themes/
                        root.setThemes([
                        am5themes_Animated.new(root)
                        ]);


                        // Create chart
                        // https://www.amcharts.com/docs/v5/charts/xy-chart/
                        var chart = root.container.children.push(am5xy.XYChart.new(root, {
                        panX: false,
                        panY: false,
                        wheelX: "panX",
                        wheelY: "zoomX",
                        layout: root.verticalLayout
                        }));


                        // Data
                        var colors = chart.get("colors");

                        var data = Data;


                        // Create axes
                        // https://www.amcharts.com/docs/v5/charts/xy-chart/axes/
                        var xAxis = chart.xAxes.push(am5xy.CategoryAxis.new(root, {
                        categoryField: "country",
                        renderer: am5xy.AxisRendererX.new(root, {
                            minGridDistance: 30
                        }),
                        bullet: function (root, axis, dataItem) {
                            return am5xy.AxisBullet.new(root, {
                            location: 0.5,
                            sprite: am5.Picture.new(root, {
                                width: 24,
                                height: 24,
                                centerY: am5.p50,
                                centerX: am5.p50,
                                src: dataItem.dataContext.icon
                            })
                            });
                        }
                        }));

                        xAxis.get("renderer").labels.template.setAll({
                        paddingTop: 20
                        });

                        xAxis.data.setAll(data);

                        var yAxis = chart.yAxes.push(am5xy.ValueAxis.new(root, {
                        renderer: am5xy.AxisRendererY.new(root, {})
                        }));


                        // Add series
                        // https://www.amcharts.com/docs/v5/charts/xy-chart/series/
                        var series = chart.series.push(am5xy.ColumnSeries.new(root, {
                        xAxis: xAxis,
                        yAxis: yAxis,
                        valueYField: "visits",
                        categoryXField: "country"
                        }));

                        series.columns.template.setAll({
                        tooltipText: "{categoryX}: {valueY}",
                        tooltipY: 0,
                        strokeOpacity: 0,
                        templateField: "columnSettings"
                        });

                        series.data.setAll(data);


                        // Make stuff animate on load
                        // https://www.amcharts.com/docs/v5/concepts/animations/
                        series.appear();
                        chart.appear(1000, 100);

                        }); // end am5.ready()

                    }
                });
            });
        </script>
        <script>
            $(document).ready(function () {

                $('#childd').on('change', function() {
                var selValue = document.getElementById("childd").value;
                var e = document.getElementById("childd");
                var texte = e.options[e.selectedIndex].text;
                var url = "{{ route('tes123', ":id") }}";
                url = url.replace(':id', selValue);

                $.ajax({
                url : url,
                type : 'GET',
                dataType : 'JSON',
                success : function(response) {

                    var Data = new Array();

                    response.data.forEach(function(data){
                        Data.push(data)
                    });

                    Highcharts.chart('cellphone_container', {
                        chart: {
                            type: 'column'
                        },
                        title: {
                            text: 'Percentage of Households Owning Cell Phones by Province, 2017—2020'
                        },
                        subtitle: {
                            text: 'Source: #'
                        },
                        xAxis: {
                            categories: response.pro,
                            crosshair: true
                        },
                        yAxis: {
                            min: 0,
                            title: {
                                text: '%'
                            }
                        },
                        tooltip: {
                            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                                '<td style="padding:0"><b>{point.y:.1f} %</b></td></tr>',
                            footerFormat: '</table>',
                            shared: true,
                            useHTML: true
                        },
                        plotOptions: {
                            column: {
                                pointPadding: 0.2,
                                borderWidth: 0
                            }
                        },
                        series: Data
                    });


                    }
                        })
                });



            });



        </script>
        <script>
            $(document).ready(function () {

                $('#childdd').on('change', function() {
                var selValue = document.getElementById("childdd").value;
                var e = document.getElementById("childdd");
                var texte = e.options[e.selectedIndex].text;
                var url = "{{ route('tes456', ":id") }}";
                url = url.replace(':id', selValue);

                $.ajax({
                url : url,
                type : 'GET',
                dataType : 'JSON',
                success : function(response) {

                    var Data = new Array();

                    response.data.forEach(function(data){
                        Data.push(data)
                    });

                    Highcharts.chart('internet_container', {
                        chart: {
                            type: 'column'
                        },
                        title: {
                            text: 'Percentage of Households that Have Accessed the Internet in the Last 3 Months by Province and Regional Classification'
                        },
                        subtitle: {
                            text: 'Source: #'
                        },
                        xAxis: {
                            categories: response.pro,
                            crosshair: true
                        },
                        yAxis: {
                            min: 0,
                            title: {
                                text: '%'
                            }
                        },
                        tooltip: {
                            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                                '<td style="padding:0"><b>{point.y:.1f} %</b></td></tr>',
                            footerFormat: '</table>',
                            shared: true,
                            useHTML: true
                        },
                        plotOptions: {
                            column: {
                                pointPadding: 0.2,
                                borderWidth: 0
                            }
                        },
                        series: Data
                    });


                    }
                        })
                });



            });



        </script>
        <script>
            $(document).ready(function () {
                $.ajax({
                    url : '{{route('tes789')}}',
                    type : 'GET',
                    dataType : 'JSON',
                    success : function(response) {
                        var Data = new Array();

                        response.data.forEach(function(data){
                            Data.push(data)
                        });

                        var categories = response.pro;

                        Highcharts.chart('piramida', {
                            chart: {
                                type: 'bar'
                            },
                            title: {
                                text: 'Population pyramid for Germany, 2018'
                            },
                            subtitle: {
                                text: 'Source: <a href="http://populationpyramid.net/germany/2018/">Population Pyramids of the World from 1950 to 2100</a>'
                            },
                            accessibility: {
                                point: {
                                    valueDescriptionFormat: '{index}. Age {xDescription}, {value}%.'
                                }
                            },
                            xAxis: [{
                                categories: categories,
                                reversed: false,
                                labels: {
                                    step: 1
                                },
                                accessibility: {
                                    description: 'Age (male)'
                                }
                            }, { // mirror axis on right side
                                opposite: true,
                                reversed: false,
                                categories: categories,
                                linkedTo: 0,
                                labels: {
                                    step: 1
                                },
                                accessibility: {
                                    description: 'Age (female)'
                                }
                            }],
                            yAxis: {
                                title: {
                                    text: null
                                },
                                labels: {
                                    formatter: function () {
                                        return Math.abs(this.value) + '%';
                                    }
                                },
                                accessibility: {
                                    description: 'Percentage population',
                                    rangeDescription: 'Range: 0 to 5%'
                                }
                            },

                            plotOptions: {
                                series: {
                                    stacking: 'normal'
                                }
                            },

                            tooltip: {
                                formatter: function () {
                                    return '<b>' + this.series.name + ', age ' + this.point.category + '</b><br/>' +
                                        'Population: ' + Highcharts.numberFormat(Math.abs(this.point.y), 1) + '%';
                                }
                            },

                            series: Data
                        });




                    }
                });
            });
        </script>
        <script>
            $(document).ready(function () {
                $.ajax({
                    url : '{{route('wkwk')}}',
                    type : 'GET',
                    dataType : 'JSON',
                    success : function(response) {
                        var Data = new Array();

                        response.data.forEach(function(data){
                            Data.push(data)
                        });


                        Highcharts.chart('stack', {
                            chart: {
                                type: 'column'
                            },
                            title: {
                                text: 'Stacked column chart'
                            },
                            xAxis: {
                                categories: response.pro
                            },
                            yAxis: {
                                min: 0,
                                title: {
                                    text: 'Total fruit consumption'
                                },
                                stackLabels: {
                                    enabled: true,
                                    style: {
                                        fontWeight: 'bold',
                                        color: ( // theme
                                            Highcharts.defaultOptions.title.style &&
                                            Highcharts.defaultOptions.title.style.color
                                        ) || 'gray'
                                    }
                                }
                            },
                            legend: {
                                align: 'right',
                                x: -30,
                                verticalAlign: 'top',
                                y: 25,
                                floating: true,
                                backgroundColor:
                                    Highcharts.defaultOptions.legend.backgroundColor || 'white',
                                borderColor: '#CCC',
                                borderWidth: 1,
                                shadow: false
                            },
                            tooltip: {
                                headerFormat: '<b>{point.x}</b><br/>',
                                pointFormat: '{series.name}: {point.y}<br/>Total: {point.stackTotal}'
                            },
                            plotOptions: {
                                column: {
                                    stacking: 'normal',
                                    dataLabels: {
                                        enabled: true
                                    }
                                }
                            },
                            series: Data
                        });




                    }
                });
            });
        </script>
</body>
</html>
