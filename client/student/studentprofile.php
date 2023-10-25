<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="description" content="Student Information Management System">
    <meta name="author" content="Jomar M. Berdejo">
  
    <!-- css links -->
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/content.css">
    <link rel="stylesheet" href="../css/footer.css">
    
    <!-- js links -->
    <script defer src="./js/fetchProfile.js"></script>
    <script defer src="../js/logout.js"></script>

    
  
    <!-- dependencies -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.20/dist/sweetalert2.min.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
   
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.20/dist/sweetalert2.min.js"></script>
  
    <script src="https://kit.fontawesome.com/ca7101e501.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css" />
  
    
    <title>Student Information System</title>

   
  </head>

<body>
  <div class="main">
     <?php
      include('./components/sidebar.php');
      ?>


     <div class="homepage">
             <?php
      include('../components/header.php');
      ?>
      <div class="main-paragraph">
      
      <div class="content-title">
     <h3 class="text-light"><i class="fa-solid fa-user-gear text-warning"></i> My Profile</h3>
     </div>
        
    
    <div class="container mt-4">
  <div class="row">
    <div class="col-12 mx-auto">
      <div class="card">
        <div class="card-body bg-dark">
          <div class="row">
            <div class="col-12">

          <div class="mb-3">
                          <h5 class="text-light">Full Name</h5>
              <p class="text-light" id="fullname"> </p>
          </div>

          <div class="mb-3">
              <h5 class="text-light">Age</h5>
              <p class="text-light" id="age"> </p>
          </div>

<div class="mb-3">
                <h5 class="text-light">Gender</h5>
              <p class="text-light" id="gender"> </p>
</div>
<div class="mb-3">
              <h5 class="text-light">Email</h5>
              <p class="text-light" id="email"> </p>
</div>

            </div>



          </div>

<button class="btn btn-primary mt-3 mb-3" data-bs-toggle="modal" data-bs-target="#editProfileModal">
  Edit Profile
</button>

        </div>
      </div>
    </div>
  </div>
</div>


</div>

  
    </div>
    </div>
    

<div class="modal fade" id="editProfileModal" tabindex="-1" aria-labelledby="editProfileModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editProfileModalLabel">Edit Profile</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form id="editProfileForm">

          <div class="mb-3">
            <label for="editFullName" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="editFullName" name="editFullName">
          </div>
          <div class="mb-3">
            <label for="editAge" class="form-label">Age</label>
            <input type="number" class="form-control" id="editAge" name="editAge">
          </div>
          <div class="mb-3">
            <label for="editGender" class="form-label">Gender</label>
            <select class="form-select" id="editGender" name="editGender">
             <option value="">Select Gender</option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
            </select>
          </div>
          
          <div class="mb-3">
            <label for="editEmail" class="form-label">Email</label>
            <input type="email" class="form-control" id="editEmail" name="editEmail">
          </div>

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="saveChangesBtn">Save Changes</button>
      </div>
    </div>
  </div>
</div>



  <?php 
   include('./components/footer.php');
  ?>
 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
  
  
  
  
</body>

</html>
