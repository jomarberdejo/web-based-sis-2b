

function toggleLoginPassword() {
  const passwordInput = document.getElementById("password");
  const togglePasswordButton = document.querySelector(".toggle-password");
  
  if (passwordInput.type === "password") {
    passwordInput.type = "text";
    togglePasswordButton.src = "./client/icons/hide.png";
  } else {
    passwordInput.type = "password";
    togglePasswordButton.src = "./client/icons/show.png";
  }
}

function toggleSignupPassword() {

  const passwordInput = document.getElementById("register-password");

  const togglePasswordButton = document.querySelector(".toggle-password");
  
  if (passwordInput.type === "password") {
    passwordInput.type = "text";
    togglePasswordButton.src = "../client/icons/hide.png";
  } else {
    passwordInput.type = "password";
    togglePasswordButton.src = "../client/icons/show.png";
  }
}

function validateSignUp(event) {
    event.preventDefault();
    const username = document.getElementById("register-username").value;
    const password = document.getElementById("register-password").value;
    const usernameInput = document.getElementById("register-username");
    const passwordInput = document.getElementById("register-password");

    if (username === "") {
        usernameInput.classList.add("shake");
        setTimeout(() => {
            usernameInput.classList.remove("shake");
        }, 500);
        let form = document.getElementById("login-form");
        form.reset();
    } else if (username !== "" && password === "") {
        passwordInput.classList.add("shake");
        setTimeout(() => {
            passwordInput.classList.remove("shake");
        }, 500);
        let form = document.getElementById("login-form");
        form.reset();
    } else {
        fetch("../../server/register.php", {
    method: "POST",
    headers: {
        "Content-Type": "application/json",
    },
    body: JSON.stringify({
        username,
        password,
    }),
})
.then((response) => response.json())
.then((data) => {
    if (data.success) { 
      
        Swal.fire({
            title: `Register successfully.`,
            icon: "success",
            confirmButtonText: 'Done',
          });
    } else {
       
        Swal.fire({
            title: `Registration failed: ${data.error}`,
            icon: "error",
            confirmButtonText: 'OK',
          });
    }
})
.catch((error) => {
    console.error("Registration error: " + error);
});

    }
}


    function validateLogin(event) {
            event.preventDefault();
      
            const username = document.getElementById("username").value;
            const password = document.getElementById("password").value;
            const usernameInput = document.getElementById("username");
            const passwordInput = document.getElementById("password");
           
         

            if (username === "") {
    usernameInput.classList.add("shake");
    setTimeout(() => {
      usernameInput.classList.remove("shake");
    }, 500);
    let form = document.getElementById("login-form")
    form.reset()
  }

  else if (username !== "" && password === "") {

    passwordInput.classList.add("shake");

    setTimeout(() => {
      passwordInput.classList.remove("shake");
    }, 500);
    let form = document.getElementById("login-form")

    form.reset()

  } else {
      fetch("./server/login.php", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                    },
                    body: JSON.stringify({
                        username,
                        password,
                    }),
                })
                .then((response) => response.json())
                .then((data) => {
                
                    if (data.success) {
                     window.location.href = './client/common/check_login.php';
                  } else {
                        alert("Login failed, Incorrect username or password");
                    }
                })
            }
        }



  

