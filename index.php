<?php include 'header.php'?>
    <div class="container-fluid">
        <div class="row" style="background: url('img/camera-2.jpg');background-size: cover; height:100vh;">
           <div class="col-md-6" style="height:400px">
            </div> 
            <div class="col-md-5 border my-md-auto bg-light b-round">
                <div class="row mx-3 py-2 my-2">
                <p class="text-center mx-auto bg-dark text-light t-size b-round lead">Track Your Booking/Order</p>
                  <div class="col-6 form-check form-check-inline">
                      <form action="TrackingId.php" method="POST">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked>
                    <label id="cMobile" class="form-check-label" for="inlineRadio1">Mobile number</label>
                  </div>
                  <div class="col-6 form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                    <label id="tId"  class="form-check-label" for="inlineRadio2">Tracking Id</label>
                  </div>
                  </div>
                  <div class="row justify-content-between mx-3 py-2">
                 <input id="box" class="col-7 b-round form-control"type="text" name="track" placeholder="Enter the Mobile number">
                <input type="submit" name="sbmt" class="form-control my-2 col-3 btn-dark" value="search">
                </form>
                 </div>
            </div>
        </div>
        <div class="row">
            <p class="lead py-2 display-6 px-3 my-3 shadow">Wedding Ceremony</p>
            <div class="col">
                <img src="img/camera-3.jpg" width="100%" height="700px">
            </div>
        </div>
        <div class="row">
            <p class="lead py-2 display-6 px-3 shadow">Birthday Party</p>
            <div class="col">
                <img src="img/camera-4.jpg" width="100%" height="700px">
            </div>
        </div>
    </div>
   <?php include 'footer.php' ?>
</body>
<script>
    $(document).ready(function(){
        $("#cMobile").click(function(){
            var a=$(this).text();
            $("#box").attr('placeholder',a);
        });
        $("#tId").click(function(){
            var a=$(this).text();
            $("#box").attr('placeholder',a);
        });
    });
</script>
</html>
