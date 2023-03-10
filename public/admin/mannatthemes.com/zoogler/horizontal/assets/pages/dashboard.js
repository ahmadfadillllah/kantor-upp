(gradientStroke1 = (ctx = document
    .getElementById("lineChart1")
    .getContext("2d")).createLinearGradient(0, 0, 0, 300)).addColorStop(
    0,
    "#008cff"
),
    gradientStroke1.addColorStop(1, "rgba(22, 195, 233, 0.1)"),
    (gradientStroke2 = ctx.createLinearGradient(0, 0, 0, 300)),
    gradientStroke2.addColorStop(0, "#ec536c"),
    gradientStroke2.addColorStop(1, "rgba(222, 15, 23, 0.1)");
var myChart = new Chart(ctx, {
    type: "line",
    data: {
        labels: ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Agu", "Sep", "Okt", "Nov", "Des"],
        datasets: [
            {
                label: "Surat Masuk",
                data: dataSuratMasuk,
                pointBorderWidth: 0,
                pointHoverBackgroundColor: gradientStroke1,
                backgroundColor: gradientStroke1,
                borderColor: "transparent",
                borderWidth: 1,
            },
            {
                label: "Surat Keluar",
                data: dataSuratKeluar,
                pointBorderWidth: 0,
                pointHoverBackgroundColor: gradientStroke2,
                backgroundColor: gradientStroke2,
                borderColor: "transparent",
                borderWidth: 1,
            },
        ],
    },
    options: {
        legend: { position: "bottom", display: !1 },
        tooltips: { displayColors: !1, intersect: !1 },
        elements: { point: { radius: 0 } },
        scales: {
            xAxes: [
                {
                    ticks: { max: 100, min: 20, stepSize: 10 },
                    gridLines: { display: !1, color: "#FFFFFF" },
                    ticks: { display: !0, fontFamily: "'Rubik', sans-serif" },
                },
            ],
            yAxes: [
                {
                    gridLines: { color: "#fff", display: !1 },
                    ticks: { display: !1, fontFamily: "'Rubik', sans-serif" },
                },
            ],
        },
    },
});

(gradientStroke1 = (ctx = document
    .getElementById("dash-doughnut")
    .getContext("2d")).createLinearGradient(0, 0, 0, 300)).addColorStop(
    0,
    "#00e795"
),
    gradientStroke1.addColorStop(1, "#0095e2"),
    (gradientStroke2 = ctx.createLinearGradient(0, 0, 0, 300)),
    gradientStroke2.addColorStop(1, "#f6d365"),
    gradientStroke2.addColorStop(0, "#ff7850"),
    (gradientStroke3 = ctx.createLinearGradient(0, 0, 0, 300)),
    gradientStroke3.addColorStop(0, "#f56348"),
    gradientStroke3.addColorStop(1, "#f81f8b");
myChart = new Chart(ctx, {
    type: "doughnut",
    data: {
        labels: ["Kontak", "Surat Masuk", "Surat Keluar"],
        datasets: [
            {
                backgroundColor: [
                    gradientStroke1,
                    gradientStroke2,
                    gradientStroke3,
                ],
                hoverBackgroundColor: [
                    gradientStroke1,
                    gradientStroke2,
                    gradientStroke3,
                ],
                data: semuaData,
                borderWidth: [0.8, 0.8, 0.8],
            },
        ],
    },
    options: {
        cutoutPercentage: 75,
        legend: { position: "bottom", display: !1, labels: { boxWidth: 12 } },
    },
});
var ctx,
    gradientStroke1 = (ctx = document
        .getElementById("bar-data")
        .getContext("2d")).createLinearGradient(0, 0, 0, 300);
gradientStroke1.addColorStop(0, "#5ecbf6"),
    gradientStroke1.addColorStop(1, "#8d44ad");
var cornerRadius = 20;
myChart = new Chart(ctx, {
    type: "bar",
    data: {
        labels: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12],
        datasets: [
            {
                label: "Revenue",
                data: [72, 75, 72, 77, 78, 74, 71, 72, 71, 69, 72, 75],
                borderColor: gradientStroke1,
                backgroundColor: gradientStroke1,
                hoverBackgroundColor: gradientStroke1,
                pointRadius: 0,
                fill: !1,
                borderWidth: 0,
            },
        ],
    },
    options: {
        legend: { position: "bottom", display: !1 },
        tooltips: { displayColors: !1, intersect: !1 },
        scales: {
            xAxes: [
                {
                    ticks: { max: 100, min: 20, stepSize: 10 },
                    gridLines: { display: !1, color: "#FFFFFF" },
                    ticks: { display: !0, fontFamily: "'Rubik', sans-serif" },
                },
            ],
            yAxes: [
                {
                    gridLines: { color: "#fff", display: !1 },
                    ticks: { display: !1, fontFamily: "'Rubik', sans-serif" },
                },
            ],
        },
    },
});
$(document).ready(function () {
    $(".boxscroll").niceScroll({
        cursorborder: "",
        cursorcolor: "#eff3f6",
        boxzoom: !0,
    });
});
