/*! widgets.js | Huro | Css ninja 2020-2021 */
"use strict";
function _toConsumableArray(e) {
  return (
    _arrayWithoutHoles(e) ||
    _iterableToArray(e) ||
    _unsupportedIterableToArray(e) ||
    _nonIterableSpread()
  );
}
function _nonIterableSpread() {
  throw new TypeError(
    "Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."
  );
}
function _unsupportedIterableToArray(e, t) {
  if (e) {
    if ("string" == typeof e) return _arrayLikeToArray(e, t);
    var r = Object.prototype.toString.call(e).slice(8, -1);
    return (
      "Object" === r && e.constructor && (r = e.constructor.name),
      "Map" === r || "Set" === r
        ? Array.from(e)
        : "Arguments" === r ||
          /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(r)
          ? _arrayLikeToArray(e, t)
          : void 0
    );
  }
}
function _iterableToArray(e) {
  if (
    ("undefined" != typeof Symbol && null != e[Symbol.iterator]) ||
    null != e["@@iterator"]
  )
    return Array.from(e);
}
function _arrayWithoutHoles(e) {
  if (Array.isArray(e)) return _arrayLikeToArray(e);
}
function _arrayLikeToArray(e, t) {
  (null == t || t > e.length) && (t = e.length);
  for (var r = 0, o = new Array(t); r < t; r++) o[r] = e[r];
  return o;
}
$(function () {
  if ($("#gauge-holder").length) {
    var e = bb.generate({
      data: {
        columns: [["data", 91.4]],
        type: "gauge",
        onclick: function (e, t) {
          console.log("onclick", e, t);
        },
        onover: function (e, t) {
          console.log("onover", e, t);
        },
        onout: function (e, t) {
          console.log("onout", e, t);
        },
      },
      gauge: {},
      color: {
        pattern: [
          themeColors.accent,
          themeColors.secondary,
          themeColors.orange,
          themeColors.purple,
        ],
        threshold: { values: [30, 60, 90, 100] },
      },
      size: { height: 120 },
      padding: { bottom: 20 },
      legend: { show: !1, position: "inset" },
      bindto: "#gauge-holder",
    });
    setTimeout(function () {
      e.load({ columns: [["data", 10]] });
    }, 1e3),
      setTimeout(function () {
        e.load({ columns: [["data", 50]] });
      }, 2e3),
      setTimeout(function () {
        e.load({ columns: [["data", 70]] });
      }, 3e3),
      setTimeout(function () {
        e.load({ columns: [["data", 0]] });
      }, 4e3),
      setTimeout(function () {
        e.load({ columns: [["data", 100]] });
      }, 5e3);
  }
  if ($("#trend-chart").length) {
    var t = {
      series: [{ name: "series1", data: [31, 40, 28, 51, 42, 109, 100] }],
      chart: {
        height: "200px",
        width: "100%",
        type: "line",
        toolbar: { show: !1 },
      },
      colors: [themeColors.accent, themeColors.purple, themeColors.orange],
      grid: { show: !1, padding: { left: -20, right: 0 } },
      padding: { bottom: 0, left: 0, right: 0 },
      legend: { show: !1, position: "top" },
      dataLabels: { enabled: !1 },
      stroke: { width: [2, 2, 2], curve: "smooth" },
      xaxis: {
        type: "datetime",
        categories: [
          "2018-09-19T00:00:00.000Z",
          "2018-09-19T01:30:00.000Z",
          "2018-09-19T02:30:00.000Z",
          "2018-09-19T03:30:00.000Z",
          "2018-09-19T04:30:00.000Z",
          "2018-09-19T05:30:00.000Z",
          "2018-09-19T06:30:00.000Z",
        ],
        labels: { show: !1 },
        axisBorder: { show: !1 },
        axisTicks: { show: !1 },
      },
      yaxis: { labels: { show: !1, offsetX: -40 } },
      tooltip: { x: { format: "dd/MM/yy HH:mm" } },
    };
    new ApexCharts(document.querySelector("#trend-chart"), t).render();
  }
  if (
    ($(".social-buttons-widget .inner-button").on("click", function () {
      $(this)
        .closest(".social-buttons-widget")
        .find(".inner-button")
        .removeClass("is-active"),
        $(this).addClass("is-active");
    }),















      $("#line-stats-widget-chart").length)
  ) {







    let xhr = new XMLHttpRequest();
    xhr.open("POST", "async/php/revenue.php");
    xhr.onload = () => {
      if (xhr.readyState === 4) {
        if (xhr.status === 200) {
          let data = xhr.response;
          console.log(data);
          var r = {
            series: [
              {
                name: "Revenue",
                data: data[2],
              },
            ],
            chart: {
              height: 250,
              type: "line",
              zoom: { enabled: !1 },
              toolbar: { show: !1 },
            },
            colors: [themeColors.accent],
            dataLabels: { enabled: !1 },
            stroke: { width: [2, 2, 2], curve: "smooth" },
            grid: { row: { colors: ["transparent", "transparent"], opacity: 0.5 } },
            xaxis: {
              categories: data[1],
            },
            tooltip: {
              y: {
                formatter: function (e) {
                  return e + "K";
                },
              },
            },
          };
          new ApexCharts(
            document.querySelector("#line-stats-widget-chart"),
            r
          ).render();
        }
      }
    }
    xhr.responseType = "json"
    xhr.send();



  }























  if ($("#area-stats-widget-chart").length) {

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "async/php/cra.php");
    xhr.onload = () => {
      if (xhr.readyState === 4) {
        if (xhr.status === 200) {
          let data = xhr.response;
          console.log(data);
          var o = {
            series: [
              {
                name: "Chiffre",
                data: data[2],
              },
              {
                name: "Revenue",
                data: data[3],
              },
              {
                name: "Abandonned",
                data: data[4],
              },
            ],
            chart: { height: 280, type: "area", offsetY: -10, toolbar: { show: !1 } },
            colors: [themeColors.accent, themeColors.success, themeColors.orange],
            legend: { position: "bottom", horizontalAlign: "center", show: !1 },
            dataLabels: { enabled: !1 },
            stroke: { width: [2, 2, 2], curve: "smooth" },
            xaxis: {
              categories: data[1],
            },
            tooltip: {
              y: {
                formatter: function (e) {
                  return e + "K" ;
                },
              },
            },
          };
          new ApexCharts(
            document.querySelector("#area-stats-widget-chart"),
            o
          ).render();

        }
      }
    }
    xhr.responseType = "json"
    xhr.send();























  }
  if ($(".spark-tile-widget").length) {
    (Apex.grid = { padding: { right: 0, left: 0 } }),
      (Apex.dataLabels = { enabled: !1 });
    var a = function (e) {
      for (var t, r, o = e.slice(), a = o.length; 0 !== a;)
        (r = Math.floor(Math.random() * a)),
          (t = o[(a -= 1)]),
          (o[a] = o[r]),
          (o[r] = t);
      return o;
    },
      s = [
        472, 454, 547, 385, 562, 247, 652, 318, 379, 391, 622, 515, 355, 415,
        358, 271, 932, 534, 615, 278, 546, 435, 192, 465,
      ];
    if ($("#widget-spark-1").length) {
      var l = {
        chart: {
          id: "sparklineWidget1",
          group: "sparklines",
          type: "area",
          height: 130,
          sparkline: { enabled: !0 },
        },
        colors: [themeColors.orange],
        stroke: { width: [2], curve: "straight" },
        fill: { opacity: 1 },
        series: [{ name: "Total Sales", data: a(s) }],
        labels: []
          .concat(_toConsumableArray(Array(24).keys()))
          .map(function (e) {
            return "2020-10-0" + (e + 1);
          }),
        yaxis: { min: 0 },
        xaxis: { type: "datetime" },
        title: {
          text: "Total Sales",
          offsetX: 5,
          style: {
            fontSize: "24px",
            cssClass: "apexcharts-yaxis-title",
            color: themeColors.lightText,
          },
        },
        subtitle: {
          text: "9,374",
          offsetX: 5,
          style: {
            fontSize: "24px",
            fontWeight: "600",
            cssClass: "apexcharts-yaxis-title",
          },
        },
      };
      new ApexCharts(document.querySelector("#widget-spark-1"), l).render();
    }
    if ($("#widget-spark-2").length) {
      var i = {
        chart: {
          id: "sparklineWidget2",
          group: "sparklines",
          type: "area",
          height: 130,
          sparkline: { enabled: !0 },
        },
        colors: [themeColors.info],
        stroke: { width: [2], curve: "straight" },
        fill: { opacity: 1 },
        series: [{ name: "Total Profit", data: a(s) }],
        labels: []
          .concat(_toConsumableArray(Array(24).keys()))
          .map(function (e) {
            return "2020-10-0" + (e + 1);
          }),
        yaxis: { min: 0 },
        xaxis: { type: "datetime" },
        title: {
          text: "Total Profit",
          offsetX: 5,
          style: {
            fontSize: "24px",
            cssClass: "apexcharts-yaxis-title",
            color: themeColors.lightText,
          },
        },
        subtitle: {
          text: "$24,273.31",
          offsetX: 5,
          style: {
            fontSize: "24px",
            fontWeight: "600",
            cssClass: "apexcharts-yaxis-title",
          },
        },
      };
      new ApexCharts(document.querySelector("#widget-spark-2"), i).render();
    }
    if ($("#widget-spark-3").length) {
      var n = {
        chart: {
          id: "sparklineWidget3",
          group: "sparklines",
          type: "area",
          height: 130,
          sparkline: { enabled: !0 },
        },
        colors: [themeColors.accent],
        stroke: { width: [2], curve: "straight" },
        fill: { opacity: 1 },
        series: [{ name: "Total Orders", data: a(s) }],
        labels: []
          .concat(_toConsumableArray(Array(24).keys()))
          .map(function (e) {
            return "2020-10-0" + (e + 1);
          }),
        xaxis: { type: "datetime" },
        yaxis: { min: 0 },
        title: {
          text: "Total Orders",
          offsetX: 5,
          style: {
            fontSize: "24px",
            cssClass: "apexcharts-yaxis-title",
            color: themeColors.lightText,
          },
        },
        subtitle: {
          text: "4,361",
          offsetX: 5,
          style: {
            fontSize: "24px",
            fontWeight: "600",
            cssClass: "apexcharts-yaxis-title",
          },
        },
      };
      new ApexCharts(document.querySelector("#widget-spark-3"), n).render();
    }
    if ($("#widget-spark-4").length) {
      var d = {
        chart: {
          id: "sparklineWidget3",
          group: "sparklines",
          type: "area",
          height: 130,
          sparkline: { enabled: !0 },
        },
        colors: [themeColors.green],
        stroke: { width: [2], curve: "straight" },
        fill: { opacity: 1 },
        series: [{ name: "Consolidated Profit", data: a(s) }],
        labels: []
          .concat(_toConsumableArray(Array(24).keys()))
          .map(function (e) {
            return "2020-10-0" + (e + 1);
          }),
        xaxis: { type: "datetime" },
        yaxis: { min: 0 },
        title: {
          text: "Consolidated Profit",
          offsetX: 5,
          style: {
            fontSize: "24px",
            fontWeight: "500",
            cssClass: "apexcharts-yaxis-title",
            color: themeColors.lightText,
          },
        },
        subtitle: {
          text: "$16,264.37",
          offsetX: 5,
          style: {
            fontSize: "24px",
            fontWeight: "600",
            cssClass: "apexcharts-yaxis-title",
          },
        },
      };
      new ApexCharts(document.querySelector("#widget-spark-4"), d).render();
    }
  }
  if ($("#flex-stat-circle").length) {
    var h = {
      series: [65],
      chart: {
        height: 130,
        type: "radialBar",
        offsetX: -10,
        toolbar: { show: !1 },
      },
      colors: [themeColors.purple],
      plotOptions: {
        radialBar: {
          hollow: { size: "75%" },
          dataLabels: {
            show: !0,
            name: {
              show: !1,
              fontSize: "12px",
              fontWeight: 400,
              offsetY: 5,
              color: themeColors.lightText,
            },
            value: {
              show: !0,
              fontWeight: 600,
              fontFamily: "Roboto, sans-serif",
              color: themeColors.purple,
              fontSize: "16px",
              offsetY: 5,
            },
          },
        },
      },
      labels: ["Progress"],
    };
    new ApexCharts(document.querySelector("#flex-stat-circle"), h).render();
  }
  if ($("#flex-stat-radial").length) {
    var c = {
      series: [65],
      chart: {
        height: 160,
        type: "radialBar",
        offsetX: -15,
        offsetY: -10,
        toolbar: { show: !1 },
      },
      colors: [themeColors.info, themeColors.secondary],
      plotOptions: {
        radialBar: {
          startAngle: -135,
          endAngle: 135,
          dataLabels: {
            name: {
              fontSize: "13px",
              fontWeight: "600",
              color: themeColors.lightText,
              show: !1,
            },
            value: {
              offsetY: 5,
              fontSize: "16px",
              fontFamily: "Roboto, sans-serif",
              fontWeight: "500",
              color: void 0,
              formatter: function (e) {
                return e + "%";
              },
            },
          },
        },
      },
      fill: {
        type: "gradient",
        gradient: {
          shade: "dark",
          shadeIntensity: 0.15,
          inverseColors: !1,
          opacityFrom: 1,
          opacityTo: 1,
          stops: [0, 50, 65, 91],
        },
      },
      stroke: { dashArray: 4 },
      labels: ["(30 days)"],
    };
    new ApexCharts(document.querySelector("#flex-stat-radial"), c).render();
  }
  if ($(".chart-group").length) {
    if ($("#widget-group-radial-1").length) {
      var p = {
        series: [31],
        chart: {
          height: 80,
          type: "radialBar",
          offsetY: -10,
          toolbar: { show: !1 },
        },
        colors: [themeColors.info],
        plotOptions: {
          radialBar: { hollow: { size: "35%" }, dataLabels: { show: !1 } },
        },
        labels: [""],
      };
      new ApexCharts(
        document.querySelector("#widget-group-radial-1"),
        p
      ).render();
    }
    if ($("#widget-group-radial-2").length) {
      var g = {
        series: [53],
        chart: {
          height: 80,
          type: "radialBar",
          offsetY: -10,
          toolbar: { show: !1 },
        },
        colors: [themeColors.orange],
        plotOptions: {
          radialBar: { hollow: { size: "35%" }, dataLabels: { show: !1 } },
        },
        labels: [""],
      };
      new ApexCharts(
        document.querySelector("#widget-group-radial-2"),
        g
      ).render();
    }
    if ($("#widget-group-radial-3").length) {
      var u = {
        series: [84],
        chart: {
          height: 80,
          type: "radialBar",
          offsetY: -10,
          toolbar: { show: !1 },
        },
        colors: [themeColors.green],
        plotOptions: {
          radialBar: { hollow: { size: "35%" }, dataLabels: { show: !1 } },
        },
        labels: [""],
      };
      new ApexCharts(
        document.querySelector("#widget-group-radial-3"),
        u
      ).render();
    }
    if ($("#widget-group-radial-4").length) {
      var f = {
        series: [57],
        chart: {
          height: 100,
          type: "radialBar",
          sparkline: { enabled: !0 },
          toolbar: { show: !1 },
        },
        colors: [themeColors.accent],
        plotOptions: {
          radialBar: {
            startAngle: -90,
            endAngle: 90,
            hollow: { size: "35%" },
            track: {
              background: "#e7e7e7",
              strokeWidth: "97%",
              margin: 5,
              dropShadow: {
                enabled: !1,
                top: 2,
                left: 0,
                color: "#999",
                opacity: 1,
                blur: 2,
              },
            },
            dataLabels: {
              name: { show: !1 },
              value: { show: !1, offsetY: -2, fontSize: "22px" },
            },
          },
        },
        fill: {
          type: "gradient",
          gradient: {
            shade: "light",
            shadeIntensity: 0.1,
            inverseColors: !1,
            opacityFrom: 1,
            opacityTo: 1,
            stops: [0, 50, 53, 91],
          },
        },
        labels: ["Average Results"],
      };
      new ApexCharts(
        document.querySelector("#widget-group-radial-4"),
        f
      ).render();
    }
    if ($("#widget-group-radial-5").length) {
      var y = {
        series: [36],
        chart: {
          height: 100,
          type: "radialBar",
          sparkline: { enabled: !0 },
          toolbar: { show: !1 },
        },
        colors: [themeColors.orange],
        plotOptions: {
          radialBar: {
            startAngle: -90,
            endAngle: 90,
            hollow: { size: "35%" },
            track: {
              background: "#e7e7e7",
              strokeWidth: "97%",
              margin: 5,
              dropShadow: {
                enabled: !1,
                top: 2,
                left: 0,
                color: "#999",
                opacity: 1,
                blur: 2,
              },
            },
            dataLabels: {
              name: { show: !1 },
              value: { show: !1, offsetY: -2, fontSize: "22px" },
            },
          },
        },
        fill: {
          type: "gradient",
          gradient: {
            shade: "light",
            shadeIntensity: 0.1,
            inverseColors: !1,
            opacityFrom: 1,
            opacityTo: 1,
            stops: [0, 50, 53, 91],
          },
        },
        labels: ["Average Results"],
      };
      new ApexCharts(
        document.querySelector("#widget-group-radial-5"),
        y
      ).render();
    }
    if ($("#widget-group-radial-6").length) {
      var m = {
        series: [88],
        chart: {
          height: 100,
          type: "radialBar",
          sparkline: { enabled: !0 },
          toolbar: { show: !1 },
        },
        colors: [themeColors.green],
        plotOptions: {
          radialBar: {
            startAngle: -90,
            endAngle: 90,
            hollow: { size: "35%" },
            track: {
              background: "#e7e7e7",
              strokeWidth: "97%",
              margin: 5,
              dropShadow: {
                enabled: !1,
                top: 2,
                left: 0,
                color: "#999",
                opacity: 1,
                blur: 2,
              },
            },
            dataLabels: {
              name: { show: !1 },
              value: { show: !1, offsetY: -2, fontSize: "22px" },
            },
          },
        },
        fill: {
          type: "gradient",
          gradient: {
            shade: "light",
            shadeIntensity: 0.1,
            inverseColors: !1,
            opacityFrom: 1,
            opacityTo: 1,
            stops: [0, 50, 53, 91],
          },
        },
        labels: ["Average Results"],
      };
      new ApexCharts(
        document.querySelector("#widget-group-radial-6"),
        m
      ).render();
    }
  }
});
