let cards = document.querySelectorAll('.card');

for (let card of cards) {
  card.addEventListener('click', () => {
    window.location.href = "../admin/studentlist.php";
  });
}

function updateDashboard() {
  fetch('../../server/dashboard.php')
    .then(response => response.json())
    .then(data => {
      const totalStudents = data.totalStudents;
      const enrolledStudents = data.enrolledStudents;
      const inProgress = data.inProgress;
      const enrollmentRate = data.enrollmentRate;
      const maleStudents = data.maleStudents;
      const femaleStudents = data.femaleStudents;

      document.getElementById("totalStudents").textContent = totalStudents !== null ? totalStudents : 0;
      document.getElementById("enrolledStudents").textContent = enrolledStudents !== null ? enrolledStudents : 0;
      document.getElementById("inProgress").textContent = inProgress !== null ? inProgress : 0;
      document.getElementById("enrollmentRate").textContent = enrollmentRate !== null ? enrollmentRate + "%" : "0%";
      document.getElementById("maleStudents").textContent = maleStudents !== null ? maleStudents : 0;
      document.getElementById("femaleStudents").textContent = femaleStudents !== null ? femaleStudents : 0;
    })
    .catch(error => console.error('Error:', error));
}

updateDashboard();
