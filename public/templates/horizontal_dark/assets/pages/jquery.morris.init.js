!function(e){"use strict";var a=function(){};a.prototype.createLineChart=function(e,a,r,t,o,i){Morris.Line({element:e,data:a,xkey:r,ykeys:t,labels:o,hideHover:"auto",gridLineColor:"#303344",resize:!0,lineColors:i})},a.prototype.createAreaChart=function(e,a,r,t,o,i,s,n){Morris.Area({element:e,pointSize:3,lineWidth:2,data:t,xkey:o,ykeys:i,labels:s,resize:!0,hideHover:"auto",gridLineColor:"#303344",lineColors:n})},a.prototype.createBarChart=function(e,a,r,t,o,i){Morris.Bar({element:e,data:a,xkey:r,ykeys:t,labels:o,gridLineColor:"#303344",barSizeRatio:.4,resize:!0,hideHover:"auto",barColors:i})},a.prototype.createDonutChart=function(e,a,r){Morris.Donut({element:e,data:a,resize:!0,colors:r,labelColor:"#767da9",backgroundColor:"#transparent"})},a.prototype.init=function(){this.createLineChart("morris-line-example",[{y:"2009",a:3,b:5},{y:"2010",a:30,b:15},{y:"2011",a:10,b:12},{y:"2012",a:10,b:25},{y:"2013",a:22,b:5},{y:"2014",a:12,b:7},{y:"2015",a:5,b:5}],"y",["a","b"],["Series A","Series B"],["#ffc400","#0078ff"]);this.createAreaChart("morris-area-example",0,0,[{y:"2009",a:10,b:20},{y:"2010",a:75,b:65},{y:"2011",a:50,b:40},{y:"2012",a:75,b:65},{y:"2013",a:50,b:40},{y:"2014",a:75,b:65},{y:"2015",a:90,b:60},{y:"2016",a:90,b:75}],"y",["a","b"],["Series A","Series B"],["#464d73","#1f897f"]);this.createBarChart("morris-bar-example",[{y:"2009",a:100,b:90},{y:"2010",a:75,b:65},{y:"2011",a:50,b:40},{y:"2012",a:75,b:65},{y:"2013",a:50,b:40},{y:"2014",a:75,b:65},{y:"2015",a:100,b:90},{y:"2016",a:90,b:75}],"y",["a","b"],["Series A","Series B"],["#464d73","#1f897f"]);this.createDonutChart("morris-donut-example",[{label:"Download Sales",value:12},{label:"In-Store Sales",value:30},{label:"Mail-Order Sales",value:20}],["#f8b75e","#f64069","#00caaf"])},e.MorrisCharts=new a,e.MorrisCharts.Constructor=a}(window.jQuery),function(e){"use strict";window.jQuery.MorrisCharts.init()}();