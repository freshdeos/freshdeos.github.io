// Dummy PCR Line Chart
const pcrCtx = document.getElementById("pcrChart").getContext("2d");
const pcrChart = new Chart(pcrCtx, {
  type: "line",
  data: {
    labels: ["10:00", "11:00", "12:00", "13:00"],
    datasets: [{
      label: "PCR",
      data: [1.4, 1.35, 1.42, 1.5],
      borderColor: "blue",
      backgroundColor: "lightblue",
      fill: false,
      tension: 0.2,
    }]
  },
  options: {
    responsive: true,
    plugins: {
      legend: { display: false }
    }
  }
});

// Dummy Bar Chart for CE/PE
const barCtx = document.getElementById("barChart").getContext("2d");
const barChart = new Chart(barCtx, {
  type: "bar",
  data: {
    labels: ["17100", "17300", "17500", "17700"],
    datasets: [
      {
        label: "Call",
        data: [40, 45, 32, 38],
        backgroundColor: "dodgerblue"
      },
      {
        label: "Put",
        data: [35, 33, 28, 31],
        backgroundColor: "mediumturquoise"
      }
    ]
  },
  options: {
    responsive: true,
    plugins: {
      legend: { position: 'top' }
    },
    scales: {
      y: { beginAtZero: true }
    }
  }
  
});
