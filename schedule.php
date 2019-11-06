
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Schedule meeting | LiberFly</title>

    <link href="css/bootstrap.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    
    <!-- Custom styles for this template -->
    <link href="css/form-validation.css" rel="stylesheet">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/tempusdominus-bootstrap-4.min.css" />
  </head>
  <body class="bg-light">

<header>
  <div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          <h4 class="text-white">About</h4>
          <p class="" style="color: #c9c9c9 !important;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque neque felis, auctor mollis leo a, faucibus vulputate ante. Suspendisse lacus orci, maximus quis tortor ut, consectetur venenatis odio. Integer congue dignissim massa vel molestie. In sodales luctus urna quis pharetra. </p>
        </div>
        <div class="col-sm-4 offset-md-1 py-4">
          <h4 class="text-white">Contact</h4>
          <ul class="list-unstyled">
            <li><a href="#" class="text-white">Follow on Twitter</a></li>
            <li><a href="#" class="text-white">Like on Facebook</a></li>
            <li><a href="#" class="text-white">Email me</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container d-flex justify-content-between">
      <a href="index.php" class="navbar-brand d-flex align-items-center">
      <img class="d-block mx-auto mb-6" src="https://www.liberfly.com.br/wp-content/uploads/2019/08/liberfly-white-transparent-40.png" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>
</header>

    <div class="container">
  <div class="py-5 text-center">
    <h2>Liber rooms</h2>
    <p class="lead">Meeting room scheduling.</p>
  </div>

  <div class="row">
    <div class="col-md-4 order-md-2 mb-4">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">Today's meetings</span>
        <span class="badge badge-secondary badge-pill qmeet"></span>
      </h4>

      <ul class="meets list-group mb-3">

      </ul>

    </div>
    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Schedule meeting</h4>
      
      <form class="needs-validation" novalidate>

        <div class="row">
            <div class="col-md-5 mb-3">
                <label for="roomnumber">Room number</label>
                <select class="custom-select d-block w-100" id="country" required>
                <option value="">Choose...</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                </select>
                <div class="invalid-feedback">
                    Please provide a room.
                 </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" placeholder="you@example.com">
          <div class="invalid-feedback">
            Please enter a valid email address for shipping updates.
          </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <label for="email">Start of the meeting</label>
                <div class="form-group">
                    <div class="input-group date" id="datetimepicker1" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker1"/>
                        <div class="input-group-append" data-target="#datetimepicker1" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <label for="email">End of the meeting</label>
                <div class="form-group">
                    <div class="input-group date" id="datetimepicker2" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker2"/>
                        <div class="input-group-append" data-target="#datetimepicker2" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit">Schedule</button>
      </form>
    </div>
  </div>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2019 LiberFly</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>
</div>
        <script src="js/jquery.js"></script>
        <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/form-validation.js"></script>    
        <script type="text/javascript" src="js/moment.js"></script>
        <script type="text/javascript" src="js/tempusdominus-bootstrap-4.min.js"></script>

        <script type="text/javascript">

          $(document).ready(function() {
            $.ajax({
                url:"https://desafio.liberfly.com.br/meetings/showtoday",
                cache: false,
                method: 'GET',
                crossDomain: true,
                dataType: 'json',
                success: function(response){

                  console.log(response);

                  var tam = response.length;
                  $(".qmeet").html(tam);
                  for (var i = 0; i < tam; i++) {
                      var st = response[i]["start_at"];
                      var end = response[i]["finished_at"];
                      var st_array = st.split(' ');
                      var end_array = end.split(' ');

                      if(response[i]["situation"] === 'ativo'){
                        $(".meets").append(
                          "<li class='list-group-item d-flex justify-content-between bg-light'><div class='text-success'><h6 class='my-0'> Room "+response[i]["room_id"]+"</h6><small class='text-muted'>"+response[i]["situation"]+", "+st_array[1].substr(0,5)+"-"+end_array[1].substr(0,5)+"h</small></div><span class='fa fa-check'></span></li>"
                        );
                      }else{
                        $(".meets").append(
                          "<li class='list-group-item d-flex justify-content-between bg-light'><div class='text-danger'><h6 class='my-0'> Room "+response[i]["room_id"]+"</h6><small class='text-muted'>"+response[i]["situation"]+", "+st_array[1].substr(0,5)+"-"+end_array[1].substr(0,5)+"h</small></div><span class='fa fa-times'></span></li>"
                        );
                      }
                  }
                
                }
            });
          });

          $(function () {
              $('#datetimepicker1').datetimepicker();
          });

          $(function () {
              $('#datetimepicker2').datetimepicker();
          });
        </script> 


</body>
</html>
