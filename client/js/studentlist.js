
function allData() {
  
  let table = document.getElementById('table');
  table.innerHTML = '';


  fetch('../../server/fetch_students.php')
    .then(response => response.json())
    .then(data => {
      data?.forEach(student => {
        table.innerHTML += `
          <tr>
            <td>${student.student_id !== null ? student.student_id : "N/A"}</td>
            <td>${student.fullname !== null ? student.fullname : "N/A"}</td>
            <td>${student.age !== null ? student.age : "N/A"}</td>
            <td>${student.gender !== null ? student.gender : "N/A"}</td>
            <td>${student.email !== null ? student.email : "N/A"}</td>
            <td>${student.section !== null ? student.section : "N/A"}</td>
            <td>${student.status !== null ? student.status : "N/A"}</td>
           <td>${student.grade !== null ? student.grade : "N/A"}</td>
            <td>${student.remarks !== null ? student.remarks : "N/A"}</td>
            <td>
              <div class="__actions">
                <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#editModal" onclick="openEditModal(${student.user_id})">
                  <i class="fa fa-edit"></i>
                </button>
                <button class="btn btn-sm btn-danger" onclick="removeData(${student.user_id})">
                  <i class="fa fa-trash"></i>
                </button>
              </div>
            </td>
          </tr>`;
      });
    })
    .catch(error => console.error('Error:', error));
}

allData();
