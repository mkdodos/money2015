var chart = Morris.Line({
    // ID of the element in which to draw the chart.
    element: 'line-example',
    // data: [0, 0], // Set initial data (ideally you would provide an array of default data)
    xkey: 'm', // Set the key for X-axis
    ykeys: ['price','price2'], // Set the key for Y-axis
    labels: ['水','電'], // Set the label when bar is rolled over
    xLabels:['month'],
    // ymax:'auto[80]',
    // ymin:'auto[70]',
    pointSize:5,
    parseTime:false,// x 值不轉為時間
    smooth:false,
    postUnits:'',

    // yLabelFormat:function (y) { return Math.round(y).toString() ; },
    // xLabelFormat:function (x) { return x; }

  });
