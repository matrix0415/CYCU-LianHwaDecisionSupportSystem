$(function chart_build(date_day) {
   $.plot($("#placeholder"), [date_day],
	{
	//設置圖表樣式
	xaxis: {
       mode: "time",
       timeformat: "%m/%d"
	  },
	 yaxis: {
	  min: 0,
      max: 30,
	  tickSize: 3,
      minTickSize:3 ,
	  },
	  series: {
       lines: { show: true, fill:false },
       points: { show: true, fill: false }
      }
	}
	);
   }
   });