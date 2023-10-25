document.addEventListener("DOMContentLoaded", () => {
  const statusRadio = document.getElementById("statusRadio");
  const genderRadio = document.getElementById("genderRadio");
  const ctx = document.getElementById("dashboardChart").getContext("2d");

  let selectedData = [];
  let selectedLabels = [];

  const chart = new Chart(ctx, {
    type: "bar",
    data: {
      labels: selectedLabels,
      datasets: [
        {
          label: "Students",
          data: selectedData,
          backgroundColor: "gold",
        },
      ],
    },
    options: {
      responsive: true,
      scales: {
        x: {
          grid: {
            color: "#ccc",
          },
          beginAtZero: true,
          ticks: {
            color: "#fff",
          },
        },
        y: {
          grid: {
            color: "#ccc",
          },
          beginAtZero: true,
          ticks: {
            color: "#fff",
          },
        },
      },
      plugins: {
        legend: {
          labels: {
            color: "gold",
          },
        },
      },
    },
  });

  function updateChartData() {
    fetch('../../server/fetch_dashboard.php')
      .then(response => response.json())
      .then(data => {
        // Update chart data and labels based on the radio button selection
        if (statusRadio.checked) {
          selectedLabels = ["Enrolled", "In Progress"];
          selectedData = [
            parseInt(data.enrolledStudents),
            parseInt(data.inProgress)
          ];
        } else if (genderRadio.checked) {
          selectedLabels = ["Male", "Female"];
          selectedData = [
            parseInt(data.maleStudents),
            parseInt(data.femaleStudents)
          ];
        }
        // Update the chart
        chart.data.labels = selectedLabels;
        chart.data.datasets[0].data = selectedData;
        chart.update();
      })
      .catch(error => console.error('Error:', error));
  }

  statusRadio.addEventListener("change", updateChartData);
  genderRadio.addEventListener("change", updateChartData);

  updateChartData();
});
