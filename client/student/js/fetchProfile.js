const fetchProfile = () => {
  fetch("../../server/studentapi/fetch_profile.php")
        .then(response => response.json())
        .then(data => {
            
            document.getElementById("fullname").textContent = data.fullname || "N/A";
            document.getElementById("age").textContent = data.age || "N/A";
            document.getElementById("gender").textContent = data.gender || "N/A";
            document.getElementById("email").textContent = data.email || "N/A";
            
        })
        .catch(error => console.error("Error:", error));
}

fetchProfile();


document.addEventListener("DOMContentLoaded", () => {
    fetch("../../server/studentapi/fetch_profile.php")
        .then(response => response.json())
        .then(data => {

            document.getElementById("editFullName").value = data.fullname || "N/A";
            document.getElementById("editAge").value = data.age || "N/A";
            document.getElementById("editGender").value = data.gender || "N/A";
            document.getElementById("editEmail").value = data.email || "N/A";
        })
        .catch(error => console.error("Error:", error));
});



  const saveChangesBtn = document.getElementById("saveChangesBtn");
  saveChangesBtn.addEventListener("click", saveProfileChanges);


function saveProfileChanges() {
    
    
    const fullname = document.getElementById("editFullName").value;
    const ageInput = document.getElementById("editAge");
    const gender = document.getElementById("editGender").value;
    const emailInput = document.getElementById("editEmail");
    
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
    
    
    
    const data = {
        fullname: fullname,
        age: parseInt(age),
        gender: gender,
        email: email,
    };
    
    
    fetch("../../server/studentapi/update_profile.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
        },
        body: JSON.stringify(data),
    })
    .then(response => response.json())
    .then(result => {
      
        if (result.success) {
            Swal.fire({
                title: `Profile updated successfully.`,
                icon: "success",
                confirmButtonText: 'Done',
            });
            
            fetchProfile();
            document.querySelector('.btn-close').click();
        } else {
            console.error("Failed to update profile.");
        }
    })
    .catch(error => console.error("Error:", error));
}

