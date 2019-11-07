$(document).ready(function() {

    $("#alert-success").hide();
    $("#alert-danger").hide();

    $("#myformmeet").submit(function(event){
      
      event.preventDefault(); 
      var token = $('meta[name="csrf-token"]').attr('content');

      var form_data = new FormData(this);
    
      $.ajax({
          method: 'POST',
          header:{
              'X-CSRF-TOKEN': token,
              'Content-Type':'application/json'
          },
          
          url:"https://desafio.liberfly.com.br/meetings/",
          cache: false,
          dataType: 'json',
          data: $("#myformmeet").serialize(),
          success: function(data){
            console.log(data);
            $("#alert-success").show();
            document.getElementById("myformmeet").reset();
          },
          error: function(data){
            $("#alert-danger").show();
            $("#errordiv").html(data["responseJSON"]);
            document.getElementById("myformmeet").reset();
          }
      });
    });

    $.ajax({
        url:"https://desafio.liberfly.com.br/meetings/showtoday",
        cache: false,
        method: 'GET',
        dataType: 'json',
        crossDomain: true,
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
                  "<li id='t1"+i+"' class='list-group-item d-flex justify-content-between bg-light'><div id='grid1"+i+"' class='' style='width:100%'><h6 class='my-0'> Room "+response[i]["room_id"]+"</h6><small id='gridsmall1"+i+"' class='text-success'>"+response[i]["situation"]+", "+st_array[1].substr(0,5)+"-"+end_array[1].substr(0,5)+"h</small><br/><small><button type='button' id='cancelmeeting"+i+"' class='btn btn-danger btn-sm' onclick='cancel("+response[i]["id"]+","+i+")' style='float: right' data-url='{{route('race.post')}}'>Cancel</button></small> </div><span id='fa"+i+"' class='fa fa-check text-success' style='margin-left: -7%'></span></li>"
                );
              }else{
                $(".meets").append(
                  "<li id='t2"+i+"' class='list-group-item d-flex justify-content-between bg-light'><div id='grid2"+i+"' class=''><h6 class='my-0'> Room "+response[i]["room_id"]+"</h6><small id='gridsmall2"+i+"' class='text-danger'>"+response[i]["situation"]+", "+st_array[1].substr(0,5)+"-"+end_array[1].substr(0,5)+"h</small></div><span class='fa fa-times text-danger' style='margin-left: -7%'></span></li>"
                );
              }
          }
        
        }
    });

  });

  $(function () {
      $('#datetimepicker1').datetimepicker({
        format: "L HH:mm"
      });
  });

  $(function () {
      $('#datetimepicker2').datetimepicker({             
        format: "L HH:mm"
      });
  });

  function cancel(id, i){
    var token = $('meta[name="csrf-token"]').attr('content');
      var url = "https://desafio.liberfly.com.br/meetings/"+id;    
      $.ajax( {
          method:'POST',
          header:{
            'X-CSRF-TOKEN': token
          },
          url: url,
          data:{
            _token: token,
            _method: 'PUT',
            dataType: 'json', 
            contentType:'application/json',
            situation: 'cancelado', 
          },
          success: function(data){
            console.log(data);
          }        
      })
      .done(function() {
          $("#gridsmall1"+i).addClass('text-danger');
          $("#fa"+i).addClass('fa fa-times text-danger');
          $("#cancelmeeting"+i).hide();
          $("#gridsmall1"+i).replaceWith("<small id='gridsmall2"+i+"' class='text-danger'>cancelado</small>");
      })
      .fail(function() {
          console.log("error");
      });
  }