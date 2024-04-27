$(function () {
  "use strict";

  // chart 1
  initMap();

  var ctx = document.getElementById("chart1").getContext('2d');

  var gradientStroke1 = ctx.createLinearGradient(0, 0, 0, 300);
  gradientStroke1.addColorStop(0, '#6078ea');
  gradientStroke1.addColorStop(1, '#17c5ea');

  var gradientStroke2 = ctx.createLinearGradient(0, 0, 0, 300);
  gradientStroke2.addColorStop(0, '#ff8359');
  gradientStroke2.addColorStop(1, '#ffdf40');

  var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
      datasets: [{
        label: 'MPast Month',
        data: [65, 59, 80, 81, 65, 59, 80, 81, 59, 80, 81, 65],
        borderColor: gradientStroke1,
        backgroundColor: gradientStroke1,
        hoverBackgroundColor: gradientStroke1,
        pointRadius: 0,
        fill: false,
        borderWidth: 0
      }, {
        label: 'Current month',
        data: [28, 48, 40, 19, 28, 48, 40, 19, 40, 19, 28, 48],
        borderColor: gradientStroke2,
        backgroundColor: gradientStroke2,
        hoverBackgroundColor: gradientStroke2,
        pointRadius: 0,
        fill: false,
        borderWidth: 0
      }]
    },

    options: {
      maintainAspectRatio: false,
      legend: {
        position: 'bottom',
        display: false,
        labels: {
          boxWidth: 8
        }
      },
      tooltips: {
        displayColors: false,
      },
      scales: {
        xAxes: [{
          barPercentage: .5
        }]
      }
    }
  });


  // chart 2

  var ctx = document.getElementById("chart2").getContext('2d');

  var gradientStroke1 = ctx.createLinearGradient(0, 0, 0, 300);
  gradientStroke1.addColorStop(0, '#fc4a1a');
  gradientStroke1.addColorStop(1, '#f7b733');

  var gradientStroke2 = ctx.createLinearGradient(0, 0, 0, 300);
  gradientStroke2.addColorStop(0, '#4776e6');
  gradientStroke2.addColorStop(1, '#8e54e9');


  var gradientStroke3 = ctx.createLinearGradient(0, 0, 0, 300);
  gradientStroke3.addColorStop(0, '#ee0979');
  gradientStroke3.addColorStop(1, '#ff6a00');

  var gradientStroke4 = ctx.createLinearGradient(0, 0, 0, 300);
  gradientStroke4.addColorStop(0, '#42e695');
  gradientStroke4.addColorStop(1, '#3bb2b8');


  var new_job = $("#new_job").text();
  var active_job = $("#active_job").text();
  var exp_job = $("#exp_job").text();

  var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
      labels: ["New Job post", "Active Job post", "Expired Job post"],
      datasets: [{
        backgroundColor: [
          // gradientStroke1,
          gradientStroke2,
          gradientStroke3,
          gradientStroke4
        ],
        hoverBackgroundColor: [
          // gradientStroke1,
          gradientStroke2,
          gradientStroke3,
          gradientStroke4
        ],
        data: [exp_job, active_job, new_job],
        borderWidth: [1, 1, 1]
      }]
    },
    options: {
      maintainAspectRatio: false,
      cutoutPercentage: 75,
      legend: {
        position: 'bottom',
        display: false,
        labels: {
          boxWidth: 8
        }
      },
      tooltips: {
        displayColors: false,
      }
    }
  });


  //get weekly and annual data
  var dateArray = [];
  var dataAray = [];
  var dataToPrint = [0, 0, 0, 0, 0, 0, 0];

  $.ajax({
    type: "GET",
    url: "/getWeeklyAndAnualData",
    data: {},
    success: function (data) {
      dateArray = Last7Days();
      dataAray = data.dataweek;

      for (var i = 0; i < 7; i++) {
        if (dataAray.length > 0) {
          for (var j = 0; j < dataAray.length; j++) {
            if (dateArray[i] == dataAray[j].days) {
              dataToPrint[i] = dataAray[j].nbre;
            }
          }
        }
      }

      var ctx = document.getElementById('chart3').getContext('2d');
      var gradientStroke1 = ctx.createLinearGradient(0, 0, 0, 300);
      gradientStroke1.addColorStop(0, '#008cff');
      gradientStroke1.addColorStop(1, 'rgba(22, 195, 233, 0.1)');

      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: dateArray,
          datasets: [{
            label: 'Jobs',
            data: dataToPrint,
            pointBorderWidth: 2,
            pointHoverBackgroundColor: gradientStroke1,
            backgroundColor: gradientStroke1,
            borderColor: gradientStroke1,
            borderWidth: 3
          }]
        },
        options: {
          maintainAspectRatio: false,
          legend: {
            position: 'bottom',
            display: false
          },
          tooltips: {
            displayColors: false,
            mode: 'nearest',
            intersect: false,
            position: 'nearest',
            xPadding: 10,
            yPadding: 10,
            caretPadding: 10
          }
        }
      });

    },
    error: function (data) {
      console.log('error ', data);
    }
  });


  function formatDate(date) {
    var dd = date.getDate();
    var mm = date.getMonth() + 1;
    var yyyy = date.getFullYear();
    if (dd < 10) { dd = '0' + dd }
    if (mm < 10) { mm = '0' + mm }
    date = yyyy + '-' + mm + '-' + dd;
    return date
  }

  function Last7Days() {
    var result = [];
    for (var i = 0; i < 7; i++) {
      var d = new Date();
      d.setDate(d.getDate() - i);
      result.push(formatDate(d))
    }

    result.reverse();
    return result;

  }


  var ctx = document.getElementById("chart4").getContext('2d');

  var gradientStroke1 = ctx.createLinearGradient(0, 0, 0, 300);
  gradientStroke1.addColorStop(0, '#ee0979');
  gradientStroke1.addColorStop(1, '#ff6a00');

  var gradientStroke2 = ctx.createLinearGradient(0, 0, 0, 300);
  gradientStroke2.addColorStop(0, '#283c86');
  gradientStroke2.addColorStop(1, '#39bd3c');

  var gradientStroke3 = ctx.createLinearGradient(0, 0, 0, 300);
  gradientStroke3.addColorStop(0, '#7f00ff');
  gradientStroke3.addColorStop(1, '#e100ff');


  var non_active = $("#act_jobs").text();
  var active_ = $("#exp_jobs").text();
  var myChart = new Chart(ctx, {
    type: 'pie',
    data: {
      labels: ["Parcelles non active", "Parcelle active"],
      datasets: [{
        backgroundColor: [
          gradientStroke1,
          gradientStroke2,
          // gradientStroke3
        ],

        hoverBackgroundColor: [
          gradientStroke1,
          gradientStroke2,
          // gradientStroke3
        ],

        data: [non_active, active_],
        borderWidth: [1, 1]
      }]
    },
    options: {
      maintainAspectRatio: false,
      cutoutPercentage: 0,
      legend: {
        position: 'bottom',
        display: false,
        labels: {
          boxWidth: 8
        }
      },
      tooltips: {
        displayColors: false,
      },
    }
  });


  // chart 5
  var ctx = document.getElementById("chart5").getContext('2d');

  var gradientStroke1 = ctx.createLinearGradient(0, 0, 0, 300);
  gradientStroke1.addColorStop(0, '#f54ea2');
  gradientStroke1.addColorStop(1, '#ff7676');

  var gradientStroke2 = ctx.createLinearGradient(0, 0, 0, 300);
  gradientStroke2.addColorStop(0, '#42e695');
  gradientStroke2.addColorStop(1, '#3bb2b8');

  var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: [1, 2, 3, 4, 5, 6, 7, 8],
      datasets: [{
        label: 'Last week',
        data: [40, 30, 60, 35, 60, 25, 50, 40],
        borderColor: gradientStroke1,
        backgroundColor: gradientStroke1,
        hoverBackgroundColor: gradientStroke1,
        pointRadius: 0,
        fill: false,
        borderWidth: 1
      }, {
        label: 'Current week',
        data: [50, 60, 40, 70, 35, 75, 30, 20],
        borderColor: gradientStroke2,
        backgroundColor: gradientStroke2,
        hoverBackgroundColor: gradientStroke2,
        pointRadius: 0,
        fill: false,
        borderWidth: 1
      }]
    },
    options: {
      maintainAspectRatio: false,
      legend: {
        position: 'bottom',
        display: false,
        labels: {
          boxWidth: 8
        }
      },
      scales: {
        xAxes: [{
          barPercentage: .5
        }]
      },
      tooltips: {
        displayColors: false,
      }
    }
  });


});
