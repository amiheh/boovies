<script>
function sort_by(cond){
  $(document).ready(function() {
        //alert('{{url("/ajax")}}/'+cond);
    var token = $('meta[name="csrf-token"]').attr('content');
    $.ajax({
      type: 'get',
      dataType: 'html',
        data: {
            "_token": token
        },
      url: '{{url("/ajax")}}/'+cond,
      success:function(response){
        console.log(response);
        $("#movieList").html(response);
      }
    })

  })

}

function checkRelease(){
  $(document).ready(function() {
    var start = $('input[name="start"]').val();
    var end = $('input[name="end"]').val();
    alert('{{url("/dateajax")}}/'+start+'/'+end);
    console.log('{{url("/dateajax")}}/'+start+'/'+end);
    var token = $('meta[name="csrf-token"]').attr('content');
    $.ajax({
      type: 'get',
      dataType: 'html',
        data: {
            "_token": token
        },
      url: '{{url("/dateajax")}}/'+start+'/'+end,
      success:function(response){
        console.log(response);
        $("#movieDateList").html(response);
      }
    })
  })

}

function scrollMovie() {
    $('html, body').animate({
      scrollTop: window.innerHeight
    }, 800, function(){
  })
}

function dateDashboard() {
    $('footer').slideToggle(500);
}

</script>