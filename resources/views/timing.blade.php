@extends('layouts.customer')


@section('content')
<head>

    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('pick-hours-availability-calendar/css/mark-your-calendar.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <style>
      body { background-color: #fafafa; }
      .container { margin: 150px auto; }
    </style>
</head>
<body>
  <div id="jquery-script-menu">
    <div class="jquery-script-center">
      <div id="carbon-block"></div>
        <div class="jquery-script-ads">
          <script type="text/javascript"><!--
            google_ad_client = "ca-pub-2783044520727903";
            /* jQuery_demo */
            google_ad_slot = "2780937993";
            google_ad_width = 728;
            google_ad_height = 90;
            //-->
          </script>
          <script type="text/javascript" src="https://pagead2.googlesyndication.com/pagead/show_ads.js"></script>
        </div>
        <div class="jquery-script-clear"></div>
      </div>
    </div>
    <div class="container">
      <h3>Select Time Slot</h3>
      <div id="picker"></div>
        <div>
          <p>Selected dates / times:</p>
            <div id="selected-dates"></div>
              <form action="{{ route('create') }}" method="POST">
               @csrf
                <input type="hidden" id="selected-datess" name="timeslot">
                <input type="hidden" id="shop" name="shop" value={{$id}}>
                  <button type="submit" class="btn btn-primary">Next</button>
            
              </form>
            </div>
        </div>
      </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script type="text/javascript" src="{{ asset('assets\js\mark-your-calendar.js' )}}"></script>
    <script type="text/javascript">
      
     
        (function($) {
          var app = @json($time);
          console.log(app[0])
          $('#picker').markyourcalendar({
            
            startDate: new Date(),
            availability: [
              app[0],
              app[1],
              app[2],
              app[3],
              app[4],
              app[5],
              app[6]
                ],
            
            isMultiple: false,
            onClick: function(ev, data) {
              // data is a list of datetimes
              
              var html = ``;
              $.each(data, function() {
                var d = this.split(' ')[0];
                var t = this.split(' ')[1];
                html += `` + d + `, ` + t + ``;
              });
              
              $( '#selected-datess' ).val(html);
              $('#selected-dates').html(html);
            },
            onClickNavigator: function(ev, instance) {
              var arr = [
                [
                  
              app[0],
                
              app[1],
              
              app[2],
              
              app[3],
              
              app[4],
              
              app[5],

              app[6],
                
                ]
              
              ]
             
              instance.setAvailability(arr[0]);
            }
          });
        })(jQuery);
    </script>
    <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<script>
try {
  fetch(new Request("https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js", { method: 'HEAD', mode: 'no-cors' })).then(function(response) {
    return true;
  }).catch(function(e) {
    var carbonScript = document.createElement("script");
    carbonScript.src = "//cdn.carbonads.com/carbon.js?serve=CK7DKKQU&placement=wwwjqueryscriptnet";
    carbonScript.id = "_carbonads_js";
    document.getElementById("carbon-block").appendChild(carbonScript);
  });
} catch (error) {
  console.log(error);
}
</script>

@endsection
