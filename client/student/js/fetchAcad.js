document.addEventListener("DOMContentLoaded", () => {

    fetch("../../server/studentapi/fetch_acad.php")
        .then(response => response.json())
        .then(data => {
            
            document.getElementById("section").textContent = data.section || "N/A";
            document.getElementById("status").textContent = data.status || "N/A";
            document.getElementById("grade").textContent = data.grade || "N/A";
            document.getElementById("remarks").textContent = data.remarks || "N/A";
            
        })
        .catch(error => console.error("Error:", error));
});
