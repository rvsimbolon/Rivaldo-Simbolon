<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highcharts/6.0.7/highcharts.js"
        integrity="sha512-II2EADCxSMhJpyATOu/IIG65gtrqG78WzDfvVofFu861reXnBe9Xbl31w5C9Fi0996DowKv6Y9tGqZv2F6VKsQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <div class="col-md-9 rounded shadow">
    <script type="text/javascript">
						$(document).ready(function () {
							
							var tanggal = "03-01-2023";
							
                            var dataKu = [22,24,8,4,0,3,11,25,16,46,60,13];
							$('#containerKOTA_PALEMBANG').highcharts({
								chart: {
									type: 'spline'
								},
								title: {
									style: {
										color: 'black', 
										fontWeight: 'bold' 
									},
									text: 'Konsentrasi Partikulat PM<sub>2.5</sub><br> di KOTA PALEMBANG [Kenten]'
								},
								subtitle: {
									style: {
										color: 'black', 
										fontWeight: 'bold' 
									},
									text: 'Tanggal:'+tanggal
								},
								credits: {
									enabled: false
								},
								xAxis: {
									type: 'category',
									labels: {
										style: {
											fontSize: '8px',
											fontFamily: 'Verdana, sans-serif'
										}
									},
									title: {
										style: {
											color: 'black', 
											fontWeight: 'bold' 
										},
										text: 'Jam'
									},
								},
								yAxis: {
									min: 0,
									max: 400,
									tickInterval: 20,
									title: {
										style: {
											color: 'black', 
											fontWeight: 'bold' 
										},
										text: 'Konsentrasi PM<sub>2.5</sub> (µgram/m3)'
									},
									min: 0,
									minorGridLineWidth: 0,
									gridLineWidth: 0,
									alternateGridColor: null,
									plotBands: [
									{ // Baik
										from: 0,
										to: 15,
										color: '#00cc00'
									},
									{ // Sedang
										from: 15,
										to: 65,
										color: '#194cc9'
									},
									{ // Tidak Sehat
										from: 65,
										to: 150,
										color: '#ffc900'
									},
									{ // Sangat Tidak Sehat
										from: 150,
										to: 250,
										color: '#ff0000'
									},
									{ // Berbahaya
										from: 250,
										to: 400,
										color: '#222'
									}]   									
								},           
								legend: {
									enabled: false
								},
								plotOptions: {
									spline: {
										lineWidth: 2,
										states: {
											hover: {
												lineWidth: 3
											}
										},
										marker: {
											enabled: true
										},
									},
									line: {
										lineWidth: 1,
										enableMouseTracking: false,
										marker: {
											enabled: false
										},
									}
								},
								series: [
								{
									name: 'Konsentrasi (PM<sub>2.5</sub>)',
									type: 'spline',
									color: '#fff',
									data: dataKu,
									dataLabels: {
										enabled: false,
										enableMouseTracking: true,
										color: '#fff',
										align: 'center',
										rotation: 270,
										x: 2,
										y: -30,
										style: {
											fontSize: '13px',
											fontFamily: 'Verdana'
										}
									},
									tooltip: {
									pointFormat: '{point.y:.2f} µgram/m3'
									}			
								},{
									type: 'line',
									color: '#222',
									data: 
										[400,400,400,400,400,400,400,400,400,400,400,400,400,400,400,400,400,400,400,400,400,400,400,400]
								}]		
							});
						});

						</script>    
    <div id="containerKOTA_PALEMBANG"  style="width: 100%; height: 330px; margin: 0 auto"
                                            ></div>
                                        <div class="text-center">
                                        <img src="https://bmkg.go.id/asset/img/pm25/pm25-baik.png" alt="Baik"
                                                class="loaded mr-1 mb-1" style="height: 32px">
                                            <img src="https://bmkg.go.id/asset/img/pm25/pm25-sedang.png" alt="Sedang"
                                                class="loaded mr-1 mb-1" style="height: 32px">
                                            <img src="https://bmkg.go.id/asset/img/pm25/pm25-tidaksehat.png"
                                                alt="Tidak Sehat" class="loaded mr-1 mb-1" style="height: 32px">
                                            <img src="https://bmkg.go.id/asset/img/pm25/pm25-sangattidaksehat.png"
                                                alt="Sangat Tidak Sehat" class="loaded mr-1 mb-1" style="height: 32px">
                                            <img src="https://bmkg.go.id/asset/img/pm25/pm25-berbahaya.png" alt="Berbahaya"
                                                class="loaded mr-1 mb-1" style="height: 32px">
                                        </div>
     </div>
    </div>
</div>
