<html>
  <head>
  </head>
  <style>
  body {
    font-family: 'WalsheimThin';
    font-size: 18px;
  }
  </style>
  <script>
  window.onload = function() {
  var month = new Array("01", "02", "03", "04", "05", "06", "07", "08", "09", "10", "11", "12");
  var today = new Date();
  var dd = today.getDate();
  var mm = today.getMonth();
  var currentMonth = month[mm];
  var yyyy = today.getFullYear();
  var hh = String(today.getHours()).padStart(2, '0');
  var min = String(today.getMinutes()).padStart(2, '0');
  today = dd + '.' + currentMonth + '.' + yyyy;
  time = hh + ':' + min;
  document.getElementById('date').value = today;
  document.getElementById('time').value = time;
  }
  
  function callSBB() {
        let sbbfrom = document.getElementById('from').value;
        let sbbto = document.getElementById('to').value;
        let sbbdate = document.getElementById('date').value;
        let sbbtime = document.getElementById('time').value;
        let arrival = "";
      
        if(document.getElementById('departure').checked) {
          arrival = "false";
        }else if(document.getElementById('arrival').checked) {
          arrival = "true";
        }
        let url = `https://www.sbb.ch/en/buying/pages/fahrplan/fahrplan.xhtml?von=${sbbfrom}&nach=${sbbto}&datum=${sbbdate}&zeit=${sbbtime}&an=${arrival}&suche=true`;
        window.open(url, '_blank');
  
  }
  </script>
  <body>
  <img alt="sbb logo" src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/sbb_extension.svg" width="272" height="50" style="padding-bottom: 40px;">
  <form onsubmit="callSBB()" action="" id="sbbapp">
    <div style="display:flex; width:50%; margin-bottom: 2rem; align-itmes:stretch">
      <div style="width:50%; display:flex; border-bottom: 1px solid #000000; margin-right: 4rem;">
        <label style="padding-left:0px; color:#0a0a0a; padding-right:10px;">From:</label>
        <input id="from" type="text" name="from" placeholder="Place" style="border:none; background:none; font-size:18px; font-family:'WalsheimThin';">
      </div>
      <div style="width:50%; display:flex; border-bottom: 1px solid #000000;">
        <label style="padding-left:0px; color:#0a0a0a; padding-right:10px;">To:</label>
        <input id="to" type="text" name="to" style="border:none; background:none; font-size:18px; font-family:'WalsheimThin';" value="Bern">
      </div>      
    </div>
    <div style="display:flex; width:50%; margin-bottom: 1rem; align-itmes:stretch">
      <div style="width:50%; display:flex; border-bottom: 1px solid #000000; margin-right: 4rem;">
        <label style="padding-left:0px; color:#0a0a0a; padding-right:10px;">Date:</label>
        <input id="date" type="text" name="date" value="30.01.2022" style="border:none; background:none; font-size:20px; font-family:'WalsheimThin';">
      </div>
      <div style="width:50%; display:flex; border-bottom: 1px solid #000000;">
        <label style="padding-left:0px; color:#0a0a0a; padding-right:10px;">Time:</label>
        <input id="time" type="text" name="time" value="13:05" style="border:none; background:none; font-size:20px; font-family:'WalsheimThin';" value="Bern">
      </div>      
    </div>
    <div style="display:flex; width:50%; margin-bottom: 1rem; align-itmes:stretch">
      <div style="width:50%; display:flex; margin-right: 4rem; padding-top:2em;">
        <input type="radio" value="false" name="isArrival" checked="checked" id="departure">
        <label for="departure" style="padding-right:2em;">Departure</label>
        <input type="radio" value="true" name="isArrival" id="arrival" class="is_arrival">
        <label for="arrival">Arrival</label>
     </div>     
    </div>
    <div style="display:flex; width:100%; margin-bottom: 1rem; align-itmes:stretch">
      <div style="width:50%; display:flex; margin-right: 4rem; padding-top:2em; justify-content:flex-end">
        <input type="submit" value="Search for connection" id="search--sbb" class="button" style="background:red; display:inline-block; color:#fefefe; margin:0 0 1rem; padding: .85em 1em; border:1px solid transparent; font-family:inherit; font-size:.9rem; line-height:1; text-align:center;">
     </div>      
    </div>
  </form>
  </body>
</html>