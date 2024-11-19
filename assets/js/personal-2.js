/*! personal-2.js | Huro | Css ninja 2020-2021 */
"use strict";$((function(){var e={series:[{name:"Pending",data:[31,40,28,51,42,109,100]},{name:"Completed",data:[11,32,45,32,34,52,41]},{name:"Blocked",data:[78,53,36,10,14,5,2]}],chart:{height:295,type:"area",toolbar:{show:!1}},colors:[themeColors.accent,themeColors.info,themeColors.orange],legend:{position:"top"},dataLabels:{enabled:!1},stroke:{width:[2,2,2],curve:"smooth"},xaxis:{type:"datetime",categories:["2020-09-19T00:00:00.000Z","2020-09-20T01:30:00.000Z","2020-09-21T02:30:00.000Z","2020-09-22T03:30:00.000Z","2020-09-23T04:30:00.000Z","2020-09-24T05:30:00.000Z","2020-09-25T06:30:00.000Z"]},tooltip:{x:{format:"dd/MM/yy HH:mm"}}};new ApexCharts(document.querySelector("#completion-chart"),e).render();var t=[{name:"Design",data:[44,55,57,56,61,58,63,60,66]},{name:"Development",data:[76,85,101,98,87,105,91,114,94]},{name:"Management",data:[35,41,36,26,45,48,52,53,41]}];t=t.map((function(e){return{name:e.name,data:e.data.map((function(e){return e-70}))}}));var a={chart:{height:250,type:"bar",toolbar:{show:!1}},colors:[themeColors.accent,themeColors.purple,themeColors.orange],legend:{position:"top"},plotOptions:{bar:{horizontal:!1,endingShape:"rounded",columnWidth:"55%"}},dataLabels:{enabled:!1},stroke:{show:!0,width:2,colors:["transparent"]},series:t,xaxis:{categories:["Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct"]},yaxis:{labels:{formatter:function(e){return e+70}}},fill:{opacity:1},tooltip:{y:{formatter:function(e){return e+"hrs"}}}};new ApexCharts(document.querySelector("#efficiency-chart"),a).render()}));