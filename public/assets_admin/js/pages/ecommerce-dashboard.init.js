"use strict";
var _options;
function _defineProperty(e, t, r) {
    return (
        t in e
            ? Object.defineProperty(e, t, {
                  value: r,
                  enumerable: !0,
                  configurable: !0,
                  writable: !0,
              })
            : (e[t] = r),
        e
    );
}
var options = {
        series: [{ data: [40, 55, 40, 60, 48, 28, 56, 60] }],
        chart: {
            height: 45,
            width: 100,
            type: "bar",
            sparkline: { enabled: !0 },
            animations: { enabled: !1 },
        },
        colors: ["#287F71"],
        plotOptions: { bar: { columnWidth: "40%", borderRadius: 2 } },
        dataLabels: { enabled: !1 },
        fill: { opacity: 1 },
        grid: { strokeDashArray: 4 },
        labels: [1, 2, 3, 4, 5, 6, 7, 8],
        xaxis: { crosshairs: { width: 1 } },
        yaxis: { labels: { padding: 0 } },
        tooltip: { theme: "light" },
        legend: { show: !1 },
    },
    chart = new ApexCharts(document.querySelector("#new-orders"), options);
chart.render();

(options = {
    series: [{ data: [40, 55, 40, 60, 48, 28, 56, 60] }],
    chart: {
        height: 45,
        width: 100,
        type: "bar",
        sparkline: { enabled: !0 },
        animations: { enabled: !1 },
    },
    colors: ["#963b68"],
    plotOptions: { bar: { columnWidth: "40%", borderRadius: 2 } },
    dataLabels: { enabled: !1 },
    fill: { opacity: 1 },
    grid: { strokeDashArray: 4 },
    labels: [1, 2, 3, 4, 5, 6, 7, 8],
    xaxis: { crosshairs: { width: 1 } },
    yaxis: { labels: { padding: 0 } },
    tooltip: { theme: "light" },
    legend: { show: !1 },
}),
    (chart = new ApexCharts(
        document.querySelector("#monthly-orders"),
        options
    )).render();

options = {
    series: [{ data: [40, 67, 55, 75, 65, 44, 30, 85] }],
    chart: {
        height: 45,
        width: 100,
        type: "bar",
        sparkline: { enabled: !0 },
        animations: { enabled: !1 },
    },
    colors: ["#73bbe2"],
    plotOptions: { bar: { columnWidth: "40%", borderRadius: 2 } },
    dataLabels: { enabled: !1 },
    fill: { opacity: 1 },
    grid: { strokeDashArray: 4 },
    labels: [1, 2, 3, 4, 5, 6, 7, 8],
    xaxis: { crosshairs: { width: 1 } },
    yaxis: { labels: { padding: 0 } },
    tooltip: { theme: "light" },
    legend: { show: !1 },
};
(chart = new ApexCharts(
    document.querySelector("#monthly-revenue"),
    options
)).render();


options = {
    series: [{ data: [40, 67, 55, 75, 65, 44, 30, 85] }],
    chart: {
        height: 45,
        width: 100,
        type: "bar",
        sparkline: { enabled: !0 },
        animations: { enabled: !1 },
    },
    colors: ["#f59440"],
    plotOptions: { bar: { columnWidth: "40%", borderRadius: 2 } },
    dataLabels: { enabled: !1 },
    fill: { opacity: 1 },
    grid: { strokeDashArray: 4 },
    labels: [1, 2, 3, 4, 5, 6, 7, 8],
    xaxis: { crosshairs: { width: 1 } },
    yaxis: { labels: { padding: 0 } },
    tooltip: { theme: "light" },
    legend: { show: !1 },
};
(chart = new ApexCharts(
    document.querySelector("#items-stock"),
    options
)).render();



_defineProperty(
    (_options = {
        series: [
            {
                name: "2024",
                data: [
                    1.8, 2.7, 1.9, 3, 2.1, 2.7, 2.2, 1.9, 2.5, 2.4, 1.5, 3.6,
                ],
            },
            {
                name: "2023",
                data: [
                    -2.8, -1.8, -2.9, -2.2, -2.6, -2.3, -1.9, -2.5, -1.3, -1,
                    -0.9, -1.8,
                ],
            },
        ],
        chart: {
            height: 360,
            type: "bar",
            stacked: !0,
            offsetX: -15,
            foreColor: "#adb0bb",
            parentHeightOffset: 0,
            toolbar: { show: !1 },
        },
        colors: ["#135046", "#cbe0dd"],
        plotOptions: {
            bar: {
                horizontal: !1,
                barHeight: "60%",
                columnWidth: "20%",
                borderRadius: [6],
                borderRadiusApplication: "end",
                borderRadiusWhenStacked: "all",
            },
        },
        dataLabels: { enabled: !1 },
        grid: {
            show: !0,
            borderColor: "rgba(0,0,0,0.1)",
            strokeDashArray: 4,
            xaxis: { lines: { show: !0 } },
            yaxis: { lines: { show: !0 } },
        },
        yaxis: { min: -5, max: 5, title: {} },
        xaxis: {
            axisBorder: { show: !1 },
            axisTicks: { show: !1 },
            categories: [
                "Jan",
                "Feb",
                "Mar",
                "Apr",
                "May",
                "Jun",
                "July",
                "Aug",
                "Sep",
                "Oct",
                "Nov",
                "Dec",
            ],
            labels: {
                style: {
                    fontSize: "13px",
                    colors: "#adb0bb",
                    fontWeight: "400",
                },
            },
        },
    }),
    "yaxis",
    { tickAmount: 4 }
),
    _defineProperty(_options, "tooltip", {
        x: { format: "dd/MM/yy HH:mm" },
        theme: "light",
    }),
    _defineProperty(_options, "legend", { show: !0 }),
    (options = _options);
(chart = new ApexCharts(
    document.querySelector("#chart-money"),
    options
)).render();
options = {
    series: [
        { name: "India", data: [80, 50, 30, 40, 100, 20] },
        { name: "Australia", data: [20, 30, 40, 80, 20, 80] },
    ],
    chart: {
        type: "radar",
        height: 360,
        parentHeightOffset: 0,
        dropShadow: { enabled: !0, blur: 1, left: 1, top: 1 },
        toolbar: { show: !1 },
    },
    stroke: { width: 1 },
    fill: { opacity: 0.1 },
    markers: { size: 0, hover: { size: 10 } },
    yaxis: { stepSize: 20 },
    legend: { show: !0 },
    xaxis: {
        categories: ["2019", "2020", "2021", "2022", "2023", "2024"],
        labels: {
            show: !0,
            style: {
                colors: [
                    "#001b2f",
                    "#001b2f",
                    "#001b2f",
                    "#001b2f",
                    "#001b2f",
                    "#001b2f",
                ],
                fontSize: "13px",
            },
        },
    },
    colors: ["#963b68", "#2786f1"],
    dataLabels: { enabled: !0, background: { enabled: !0, borderRadius: 2 } },
};
(chart = new ApexCharts(
    document.querySelector("#sales-country"),
    options
)).render();
options = {
    series: [
        {
            name: "New Customer",
            data: [85, 80, 150, 127, 220, 200, 300, 290, 314],
        },
        {
            name: "Old Customer",
            data: [215, 165, 100, 200, 145, 185, 104, 124, 82],
        },
    ],
    chart: {
        type: "line",
        height: 305,
        parentHeightOffset: 0,
        zoom: { enabled: !1 },
        toolbar: { show: !1 },
        animations: { enabled: !1 },
    },
    dataLabels: { enabled: !1 },
    fill: { opacity: 1 },
    stroke: { width: [2, 2], curve: "straight", dashArray: [0, 7] },
    legend: {
        position: "top",
        horizontalAlign: "right",
        tooltipHoverFormatter: function (e, t) {
            return (
                e +
                " <strong>" +
                t.w.globals.series[t.seriesIndex][t.dataPointIndex] +
                "</strong>"
            );
        },
    },
    markers: { size: 0, hover: { sizeOffset: 6 } },
    grid: { strokeDashArray: 4, xaxis: { lines: { show: !0 } } },
    xaxis: {
        labels: { padding: 0 },
        axisBorder: { show: !1 },
        tooltip: { enabled: !1 },
        categories: ["09", "10", "11", "12", "13", "14", "15", "16"],
    },
    tooltip: {
        y: [
            {
                title: {
                    formatter: function (e) {
                        return e;
                    },
                },
            },
            {
                title: {
                    formatter: function (e) {
                        return e;
                    },
                },
            },
        ],
    },
    colors: ["#537AEF", "#5be7bd"],
};
(chart = new ApexCharts(
    document.querySelector("#repeat-customer"),
    options
)).render();
options = {
    series: [67],
    chart: { height: 248, type: "radialBar", parentHeightOffset: 0 },
    colors: ["#73bbe2"],
    plotOptions: {
        radialBar: {
            startAngle: -135,
            endAngle: 135,
            dataLabels: {
                name: { fontSize: "16px", color: void 0, offsetY: 10 },
                value: {
                    offsetY: 0,
                    fontSize: "28px",
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
    labels: [""],
};
(chart = new ApexCharts(
    document.querySelector("#ordersreport"),
    options
)).render();
