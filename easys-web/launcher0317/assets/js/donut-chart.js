new Morris.Donut({
  // ID of the element in which to draw the chart.
  element: 'load',
  // Chart data records -- each entry in this array corresponds to a point on
  // the chart.
  data: [
      {label: "Cancelación", value: 5},
      {label: "Facturación", value: 10}
  ],
  resize: true,
  colors: ['#b2c831', '#9b4542']
});
