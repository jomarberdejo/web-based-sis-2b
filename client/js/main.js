


function removeData(id) {
  const studentToRemove = {
    id: id,
  };

  fetch('../../server/delete_student.php', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json',
    },
    body: JSON.stringify(studentToRemove),
  })
    .then(response => response.json())
    .then(data => {
      if (data.success) {
        Swal.fire({
        title: `Student deleted successfully.`,
        icon: "success",
        confirmButtonText: 'Done',
      });
        allData();
      } else {
        console.error('Failed to remove student:', data.error);
      }
    })
    .catch(error => console.error('Error:', error));
}


function openEditModal(id) {

  fetch(`../../server/fetch_student.php?id=${id}`)
    .then(response => response.json())
    .then(student => {
      document.getElementById('editId').value = student.user_id;
      document.getElementById('editStudentId').value = student.student_id;
      document.getElementById('editFullName').value = student.fullname;
      document.getElementById('editAge').value = student.age;
      document.getElementById('editGender').value = student.gender;
      document.getElementById('editEmail').value = student.email;
      document.getElementById('editSection').value = student.section;
      document.getElementById('editStatus').value = student.status;
      document.getElementById('editGrade').value = student.grade;
      document.getElementById('editRemarks').value = student.remarks;
    })
    .catch(error => console.error('Error:', error));
}



function updateData() {
  const id = document.getElementById('editId').value;
  const studentIdInput = document.getElementById('editStudentId');
  const fullName = document.getElementById('editFullName').value;
  const ageInput = document.getElementById('editAge');
  const gender = document.getElementById('editGender').value;
  const emailInput = document.getElementById('editEmail');
  const section = document.getElementById('editSection').value;
  const status = document.getElementById('editStatus').value;
  const grade = document.getElementById('editGrade').value;
  const remarks = document.getElementById('editRemarks').value;


  const studentId = studentIdInput.value;
  if (studentId !== '') {
    const studentIdFormat = /^\d{4}-\d{5}$/; 
    if (!studentId.match(studentIdFormat)) {
      studentIdInput.setCustomValidity('Invalid student ID format (e.g., 2021-25436)');
      studentIdInput.reportValidity();
      return;
    }
  }

  
  const age = ageInput.value;
  
  if (age !== '') {
    if (isNaN(age) || age <= 0) {
      ageInput.setCustomValidity('Age must be a positive number');
      ageInput.reportValidity();
      return;
    }
  }


  const email = emailInput.value;
  if (email !== '') {
    const emailFormat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if (!email.match(emailFormat)) {
      emailInput.setCustomValidity('Invalid email address');
      emailInput.reportValidity();
      return;
    }
  }


  const updatedStudent = {
    id: id,
    studentId: studentId,
    fullName: fullName,
    age: parseInt(age),
    gender: gender,
    email: email,
    section: section,
    status: status,
    grade: grade,
    remarks: remarks,
  };

  fetch('../../server/update_student.php', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json',
    },
    body: JSON.stringify(updatedStudent),
  })
    .then((response) => response.json())
    .then((data) => {
      if (data.success) {
        Swal.fire({
          title: `Student named ${fullName} updated successfully.`,
          icon: 'success',
          confirmButtonText: 'Done',
        });
        allData();
        document.querySelector('.btn-close').click();
      } else {
        alert("Error")
        console.error('Failed to update data. Please try again.');
      }
    })
    .catch((error) => {
      console.error('Error:', error);
      alert('An error occurred while updating data.');
    });
}







let timer;
const delay = 1000; 

function search() {
  clearTimeout(timer);
  timer = setTimeout(() => {
    const query = document.getElementById('searchInput').value.toLowerCase();
    const table = document.getElementById('table');
    const rows = table.getElementsByTagName('tr');

    for (let i = 0; i < rows.length; i++) {
      const studentId = rows[i].cells[0].textContent.toLowerCase();
      const fullName = rows[i].cells[1].textContent.toLowerCase();


      if (studentId.includes(query) || fullName.includes(query)) {
        rows[i].style.display = '';
      } else {
        rows[i].style.display = 'none';
      }
    }
  }, delay);
}




    