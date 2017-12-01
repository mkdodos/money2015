<!-- chart   -->
<div id="line-example"></div>


<script src="{{asset('js/morris.min.js')}}"></script>
<script src="{{asset('js/raphael.min.js')}}"></script>

<script>
$(function(){

  var chart = Morris.Line({
    // ID of the element in which to draw the chart.
    element: 'line-example',
    // data: [0, 0], // Set initial data (ideally you would provide an array of default data)
    xkey: 'w_date', // Set the key for X-axis
    ykeys: ['amt'], // Set the key for Y-axis
    labels: ['體重'], // Set the label when bar is rolled over
    xLabels:['month'],
    ymax:'auto[80]',
    ymin:'auto[70]',
    pointSize:0,
    // goals: [70, 80],
    // parseTime:false,//xkey的資料不當成時間處理
    smooth:false,
    postUnits:'',
    // axes:false,
    // resize:true,
    // hideHover:'false'
    // xLabelFormat:function (x) { return x.getFullYear()+'-'+(x.getMonth()+1)+'-'+x.getDate(); }
    yLabelFormat:function (y) { return Math.round(y).toString() + 'kg'; },
    xLabelFormat:function (x) { return (x.getMonth()+1)+'/'+x.getDate(); }

  });

  // Fire off an AJAX request to load the data
  $.ajax({
      type: "GET",
      dataType: 'json',
      url: "./weight_chart_data", // This is the URL to the API
      // data: { days: 7 } // Passing a parameter to the API to specify number of days
    })
    .done(function( data ) {
      // When the response to the AJAX request comes back render the chart with new data
      chart.setData(data);
    })
    .fail(function() {
      // If there is no communication between the server, show an error
      alert( "error occured" );
    });
})
</script>
