@extends('layouts.new_layouts.master')
@section('content')
<div class="header-banner d-flex align-items-center">
  <div class="container">
      <section class="text-center placeholders">
        <div class="row">
          <div class="col-6 col-sm-3 placeholder">
            <img id="kursi1" src="{{asset('/assets/images/kursi.jpg')}}" width="100" height="100" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
              <h4>KURSI 1</h4>
              <div class="text-muted" id="mainData1" >Loading data</div>
              <meter value="50" min="0" max="100"></meter>
          </div>
          <div class="col-6 col-sm-3 placeholder">
            <img id="kursi2" src="{{asset('/assets/images/kursi.jpg')}}" width="100" height="100" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
              <h4>KURSI 2</h4>
              <span class="text-muted" id="mainData2">Loading data</span><br>
              <meter value="50" min="0" max="100"></meter>
            </div>
              <div class="col-6 col-sm-3">
                <img id="kursi7" src="{{asset('/assets/images/kursi.jpg')}}" width="100" height="100" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">

                  <h4 id="lokasi1">

                  </h4>
                  <p></p>
                  <p id="waktu"></p>
                  <p id="jam"></p>
              </div>
        </div>
      </section>
  </div>
</div>
@endsection

@section('script')

<script type="text/javascript">
$('document').ready(function () {
 setInterval(function () {getRealData()}, 1000);//request every x seconds

 });

 function getRealData() {
   $.ajax({
            type:'get',
            url:'monitoringgrj.top/monitoring/x/',
            dataType: "json",
            success:function(response){
              if (response.data==0) {

                 var img = document.getElementById("kursi7");
                 img.src="{{asset('/assets/images/kursi.jpg')}}";
                document.getElementById('lokasi'+1).innerHTML=("TIDAK ADA ORANG");
              }else {
                // location.reload();
                var img = document.getElementById("kursi7");
                img.src="{{asset('/assets/images/kursi_booked.jpg')}}";
                document.getElementById('lokasi'+1).innerHTML=("ADA ORANG");
              }
            }
            });
 }
</script>


<script type="text/javascript">
  // var months  =['Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'];
  var months  =['01','02','03','04','05','06','07','08','09','10','11','12'];
  var theDays =['Minggu','Senen','Selasa','Rabu','Kamis','Jumat','Sabtu'];
  var date    = new Date();
  var day     = date.getDate();
  if (day<11) {
    var ndate = 0+''+day
  } else {

  }
  var month   = date.getMonth();
  var thisDay = date.getDay(),
      thisDay = theDays[thisDay];
  var yy      = date.getYear();
  var year    = (yy<1000) ? yy + 1900: yy;

  // document.getElementById("waktu").innerHTML=(thisDay+', ' + day + '' + months[month] + '' + year);
  document.getElementById("waktu").innerHTML=(ndate + ' ' + months[month] + ' ' + year);
</script>
<script>
  function showtime()
  {
      var today       = new Date();
      var curr_hour   = today.getHours();
      var curr_minute = today.getMinutes();
      var curr_second = today.getSeconds();
      curr_hour       = checkTime(curr_hour);
      curr_minute     = checkTime(curr_minute);
      curr_second     = checkTime(curr_second);
      document.getElementById("jam").innerHTML=curr_hour+ ":" + curr_minute + ":" + curr_second ;
  }
  function checkTime(i){
      if(i == 60){
          i = 60;
      }
      return i;
  }
  setInterval(showtime, 500);
</script>


<script src="https://www.gstatic.com/firebasejs/5.0.2/firebase.js"></script>
	<script>
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyCMozbxdc1vlXn_XbAt-SFH0rZfiR3rW_s",
    authDomain: "skripsi-b1fbe.firebaseapp.com",
    databaseURL: "https://skripsi-b1fbe.firebaseio.com",
    projectId: "skripsi-b1fbe",
    storageBucket: "skripsi-b1fbe.appspot.com",
    messagingSenderId: "395402738287",
    appId: "1:395402738287:web:a2c461fe302461af122b9a",
    measurementId: "G-DJDD38PYTL"
  };
  firebase.initializeApp(config);
	</script>

<script type="text/javascript">
var mainData1 = document.getElementById("mainData1");
var mainData2 = document.getElementById("mainData2");
var mainData1Ref = firebase.database().ref().child("jos/area1");
var mainData2Ref = firebase.database().ref().child("jos/area2");
mainData1Ref.on('value',function(datasnapshot){
mainData1.innerText = datasnapshot.val();
if(Number(mainData1.innerText)==1){
  var img = document.getElementById("kursi1");
  img.src="{{asset('/assets/images/kursi_booked.jpg')}}";

}
else{
  var img = document.getElementById("kursi1");

  img.src="{{asset('/assets/images/kursi.jpg')}}";
}
});

mainData2Ref.on('value',function(datasnapshot){
mainData2.innerText = datasnapshot.val();
if(Number(mainData2.innerText)==1){
  var img = document.getElementById("kursi2");
  img.src="{{asset('/assets/images/kursi_booked.jpg')}}";
}
else{
  var img = document.getElementById("kursi2");
  img.src="{{asset('/assets/images/kursi.jpg')}}";
}
});


</script>
@endsection
