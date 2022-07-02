@extends('layouts.index')
@section('title','Visualization and Analysis')

@section('content')
<section class="bg-light position-relative">

	<!-- Svg decoration -->
	<figure class="position-absolute bottom-0 start-0 d-none d-lg-block">
		<svg width="822.2px" height="301.9px" viewBox="0 0 822.2 301.9">
			<path class="fill-warning opacity-5" d="M752.5,51.9c-4.5,3.9-8.9,7.8-13.4,11.8c-51.5,45.3-104.8,92.2-171.7,101.4c-39.9,5.5-80.2-3.4-119.2-12.1 c-32.3-7.2-65.6-14.6-98.9-13.9c-66.5,1.3-128.9,35.2-175.7,64.6c-11.9,7.5-23.9,15.3-35.5,22.8c-40.5,26.4-82.5,53.8-128.4,70.7 c-2.1,0.8-4.2,1.5-6.2,2.2L0,301.9c3.3-1.1,6.7-2.3,10.2-3.5c46.1-17,88.1-44.4,128.7-70.9c11.6-7.6,23.6-15.4,35.4-22.8 c46.7-29.3,108.9-63.1,175.1-64.4c33.1-0.6,66.4,6.8,98.6,13.9c39.1,8.7,79.6,17.7,119.7,12.1C634.8,157,688.3,110,740,64.6 c4.5-3.9,9-7.9,13.4-11.8C773.8,35,797,16.4,822.2,1l-0.7-1C796.2,15.4,773,34,752.5,51.9z"></path>
		</svg>
	</figure>

	<div class="container position-relative">
		<div class="row">
			<div class="col-12">
				<div class="row align-items-center">

					<!-- Image -->
					<div class="col-6 col-md-3 text-center order-1">
						<img src="{{asset('assets/images/element/category-1.svg')}}" alt="">
					</div>

					<!-- Content -->
					<div class="col-md-6 px-md-5 text-center position-relative order-md-2 mb-5 mb-md-0">

						<!-- Svg decoration -->
						<figure class="position-absolute top-0 start-0">
							<svg width="22px" height="22px" viewBox="0 0 22 22">
								<polygon class="fill-orange" points="22,8.3 13.7,8.3 13.7,0 8.3,0 8.3,8.3 0,8.3 0,13.7 8.3,13.7 8.3,22 13.7,22 13.7,13.7 22,13.7 "></polygon>
							</svg>
						</figure>

						<!-- Svg decoration -->
						<figure class="position-absolute top-0 start-50 translate-middle mt-n6 d-none d-md-block">
							<svg width="27px" height="27px">
								<path class="fill-purple" d="M13.122,5.946 L17.679,-0.001 L17.404,7.528 L24.661,5.946 L19.683,11.533 L26.244,15.056 L18.891,16.089 L21.686,23.068 L15.400,19.062 L13.122,26.232 L10.843,19.062 L4.557,23.068 L7.352,16.089 L-0.000,15.056 L6.561,11.533 L1.582,5.946 L8.839,7.528 L8.565,-0.001 L13.122,5.946 Z"></path>
							</svg>
						</figure>


						<!-- Title -->
						<h1 class="mb-3">Visualization and Analysis</h1>
						<p class="mb-3">Check out our Visualization and Analysis</p>

						<!-- Search -->

					</div>

					<!-- Image -->
					<div class="col-6 col-md-3 text-center order-3">
						<img src="{{asset('assets/images/element/category-2.svg')}}" alt="">
					</div>

				</div> <!-- Row END -->
			</div>
		</div> <!-- Row END -->
	</div>
</section>
<section>
    <div class="container">
        <div>
            <h3>Where is Indonesia's position in the ASEAN region regarding literacy rate?</h3>
            <div id="chartdiv"></div>
            <div class="mt-3">
                <p>Sourced from <a href="https://www.worldatlas.com/">https://www.worldatlas.com/</a> In 2020, Indonesia ranks 7th out of 11 ASEAN countries regarding the Literacy Rate 😱</p>
            </div>
        </div>

        <div>
            <h3>How is the literacy rate in Indonesia based on age?</h3>
            <div id="containesr" style="height: 500px; width: 100%;"></div>
            <div class="mt-3">
                <p>Sourced from <a href="https://www.statista.com/">https://www.statista.com/</a> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>

        <div>
            <h3>Digital Literacy Index in Indonesia</h3>
            <div id="stack" style="height: 500px"></div>
            <div class="mt-3">
                <p>Sourced from <a href="#">https://www.lorem.com/</a> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>

        <div>
            <h3>Literacy Rate in Indonesia in the form of Geospatial data</h3>
            <div id="map"></div>
            <div class="mt-3">
                <p>Sourced from <a href="#">https://www.lorem.com/</a> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>

        <div>
            <h3>Percentage of Households Owning Cell Phones by Province, 2017—2020</h3>
            <div>
                <select class="form-control" id="childd">
                    <option>Please Choose The Control</option>
                    @foreach ($child as $item)

                    <option value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach
                </select>

            </div>
            <div id="cellphone_container" style="height: 500px"></div>
            <div class="mt-3">
                <p>Sourced from <a href="#">https://www.lorem.com/</a> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>

        <div>
            <h3>Percentage of Households that Have Accessed the Internet in the Last 3 Months by Province and Regional Classification</h3>
            <div>
                <select class="form-control" id="childdd">
                    <option>Please Choose The Control</option>
                    @foreach ($child_2 as $item)

                    <option value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach
                </select>

            </div>
            <div id="internet_container" style="height: 500px"></div>
            <div class="mt-3">
                <p>Sourced from <a href="#">https://www.lorem.com/</a> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>

        <div>
            <h3>Correlation between the percentage of not attending school and the percentage of literacy rate</h3>
            <div id="piramida" style="height: 700px"></div>
            <div class="mt-3">
                <p>Sourced from <a href="#">https://www.lorem.com/</a> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>

        <div>
            <a href="{{route('resources')}}" class="btn btn-primary">Check All Our Resources</a>
        </div>



    </div>

</section>
@endsection
@section('script')
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
                                    text: 'Digital Literacy Index in Indonesia 2020'
                                },
                                xAxis: {
                                    categories: response.pro
                                },
                                yAxis: {
                                    min: 0,
                                    title: {
                                        text: 'Score'
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
                        text: 'Correlation between the percentage of not attending school and the percentage of literacy rate'
                    },
                    subtitle: {
                        text: '-'
                    },
                    accessibility: {
                        point: {
                            valueDescriptionFormat: '{index} {xDescription}, {value}%.'
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
                            return '<b>' + this.series.name + ' ' + this.point.category + '</b><br/>' +
                                'Percentage: ' + Highcharts.numberFormat(Math.abs(this.point.y), 1) + '%';
                        }
                    },

                    series: Data
                });




            }
        });
    });
</script>
@endsection
