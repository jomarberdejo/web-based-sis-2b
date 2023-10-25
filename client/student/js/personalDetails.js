document.addEventListener("DOMContentLoaded", () => {

    fetch("../../server/studentapi/fetch_student.php")
        .then(response => response.json())
        .then(data => {
            
            document.getElementById("studentId").textContent = data.student_id || "N/A";
            document.getElementById("fullName").textContent = data.fullname || "N/A";
            document.getElementById("age").textContent = data.age || "N/A";
            document.getElementById("gender").textContent = data.gender || "N/A";
            document.getElementById("email").textContent = data.email || "N/A";
        })
        .catch(error => console.error("Error:", error));
});
