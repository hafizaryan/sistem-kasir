<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="//maps.googleapis.com/maps/api/js?key=AIzaSyD9-xRbyMcTIO6RL96myTGq7wfLzaLNUtg"
        type="text/javascript"></script>

    <ul class="breadcrumb">
        <li><a href="<?= base_url('/dashboard')?>">Home</a></li>
        <li class="active"><?= $judul ?></li>
    </ul>
    <!-- PAGE CONTENT WRAPPER -->
    <div class="page-content-wrap">                    
        <!-- START WIDGETS -->                                                                
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <!-- <a href="<?= base_url('/'.$url.'/tambah')?>" class="btn btn-primary pull-right"> Tambah <?= $judul ?></a> -->

                        <h4><?= $modelTempatKuliner[0]['nama'] ?></h4>
                    </div>
                    <div class="panel-body panel-body-table">
                         
                        &nbsp;
                        
                        <!-- Bootstrap core CSS -->
                        <!-- <link href="/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->

                        <div id="map" style="width:100%;height:400px;"></div>

                        <!-- tempat meletakan panel keterangan -->
                        <div id="panel"></div>

                        <script>
                            // function myMap() {
                            //     var mapProp= {
                            //       center: new google.maps.LatLng(0.5346774811860796, 101.41946499766215),
                            //       zoom: 12,
                            //       mapTypeId:google.maps.MapTypeId.MAP,
                            //     };
                            //     var map = new google.maps.Map(document.getElementById("map"),mapProp);
                                
                                <?php 
                                    $no=0;
                                    foreach ($modelTempatKuliner as $v):
                                        $no++;
                                ?>
                            //         tambahMarker(<?= $v['lat'] ?>, <?= $v['lon'] ?>,'<?= $v["nama"] ?>',map);
                                <?php 
                                    if($no == $k){
                                        break;
                                    }

                                ?>
                                <?php endforeach; ?>

                            //     google.maps.event.addListener(map, 'click', function(event) {
                            //       // placeMarker(map, event.latLng);
                            //     });
                            // }

                            // function tambahMarker(lat, lon, id_sawit, map){
                            //     // membuat Marker
                            //     var marker=new google.maps.Marker({
                            //       position: new google.maps.LatLng(lat, lon),
                            //       map: map
                            //     });

                            //     map.setCenter(marker.getPosition());

                            //     // Zoom to 9 when clicking on marker
                            //     google.maps.event.addListener(marker,'click',function() {
                            //       map.setZoom(19);
                            //       map.setCenter(marker.getPosition());
                            //     });

                            //     var infowindow = new google.maps.InfoWindow({
                            //       content:""+id_sawit
                            //     });

                            //     google.maps.event.addListener(marker, 'click', function() {
                            //       infowindow.open(map,marker);
                            //     });
                            // }

                            // function placeMarker(map, location) {
                            //   var marker = new google.maps.Marker({
                            //     position: location,
                            //     map: map
                            //   });
                            //   var infowindow = new google.maps.InfoWindow({
                            //     content: 'Latitude: ' + location.lat() +
                            //     '<br>Longitude: ' + location.lng()
                            //   });
                            //   infowindow.open(map,marker);
                            // }
                        </script>

                        <script type="text/javascript">
                           $(document).ready(function() { 

                            // $("#formRute").submit(function(e) {

                                // e.preventDefault();
                                //ambil value dari form input asal
                                var asal= '0.4695556788392381, 101.35390820836572';

                                if ("geolocation" in navigator){
                                  navigator.geolocation.getCurrentPosition(function(position){ 
                                    var currentLatitude = position.coords.latitude;
                                    var currentLongitude = position.coords.longitude;

                                    var infoWindowHTML = "Latitude: " + currentLatitude + "<br>Longitude: " + currentLongitude;
                                    var infoWindow = new google.maps.InfoWindow({map: map, content: infoWindowHTML});
                                    var currentLocation = { lat: currentLatitude, lng: currentLongitude };
                                    infoWindow.setPosition(currentLocation);
                                    asal = "'" + currentLatitude +","+ currentLongitude;
                                  });
                                }

                                //ambil value dari form input tujuan
                                var tujuan= '0.4813999057439537, 101.42995419793245';
                                 //cek apakah asal dan tujuan kosong
                                 if (asal=="") {
                                  alert("Tempat asal tidak boleh kosong!");
                                 }else if (tujuan=="") {
                                  alert("Tempat tujuan tidak boleh kosong!");
                                 }else{

                                    var directionsService = new google.maps.DirectionsService();
                                    var directionsDisplay = new google.maps.DirectionsRenderer();
                                    var mapOptions = {
                                      zoom:12,
                                    }

                                    var map = new google.maps.Map(document.getElementById('map'), mapOptions);              
                                    directionsDisplay.setMap(map);
                                    directionsDisplay.setPanel(document.getElementById('panel'));

                                    var start = asal;
                                    var end = tujuan;
                                    var request = {
                                      origin: start,
                                      destination: end,
                                      travelMode: 'DRIVING'
                                    };
                                    directionsService.route(request, function(result, status) {
                                      if (status == 'OK') {
                                        directionsDisplay.setDirections(result);
                                      }
                                    });

                                 }

                              });

                           // });

                        </script>

                        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD9-xRbyMcTIO6RL96myTGq7wfLzaLNUtg&callback=myMap"></script>

                        
                    </div>
                </div>                                                
            </div>
        </div>                        
    </div>
    <!-- END PAGE CONTENT WRAPPER -->   
<?= $this->endSection() ?>  