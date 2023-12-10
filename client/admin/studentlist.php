<?php 
  include('../common/check_auth.php');
?>
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
    <script defer src="../js/logout.js"></script>
    <script defer src="../js/main.js"></script>
    <script defer src="../js/studentlist.js"></script>
  
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
      include('../components/sidebar.php');
      ?>

     <div class="homepage _student-list">
      <?php
      include('../components/header.php');
      ?>
      
      <div class="main-paragraph">
 
     <div class="content-title">
     <h3 class="text-light"><i class="bi bi-person-lines-fill text-warning"></i> Students' List
       </h3>
     </div>
 
 
  <!-- Title of the system -->
  <div class="container mt-4">
    <div class="row">
      <!-- Search input -->
      <div class="col-lg-6 mt-3">
        <div class="input-group">
          <input type="text" id="searchInput" class="form-control bg-dark text-light" placeholder="Search by Student ID or Full Name" oninput="search()">
        </div>
      </div>
      <!-- Table design for student list -->
      <div class="col-lg mt-3">
        <div class="card">
          <div class="card-body ">
            <div class="table-responsive">
             <div class="__data-table overflow-auto">
              <table id="datatable" class="table table-hover table-dark table-striped table-bordered">
                <thead class= "thead-dark">
                  <tr>
                    <th>Student ID</th>
                    <th > Full Name</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Email</th>
                    <th>Section</th>
                    <th>Status</th>
                   <th>Grade</th>
                    <th>Remarks</th>
                     <th>Actions</th>
                  </tr>
                </thead>
               <div class="table-responsive">
                   <tbody id="table" class="bg-dark">
                  
                </tbody>
               </div>

              </table>
            </div>

          </div>
        </div>
      </div>
     </div>
    </div>
  </div>
  
  <!-- Modal form for editing student -->
  <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editModalLabel">Edit Student</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="editForm">
            <input type="hidden" id="editId" />
            <div class="mb-3">
              <label for="editStudentId" class="form-label">Student ID</label>
              <input type="text" class="form-control" id="editStudentId" required>
            </div>
            <div class="mb-3">
              <label for="editFullName" class="form-label">Full Name</label>
              <input type="text" class="form-control" id="editFullName" required>
            </div>
            <div class="mb-3">
              <label for="editAge" class="form-label">Age</label>
              <input type="number" class="form-control" id="editAge" min="0" max="100" required>
            </div>
            <div class="mb-3">
                <label for="editGender" class="form-label">Gender</label>
                <select class="form-control" id="editGender" required>
                  <option value="">Select Gender</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                </select>
            </div>
            <div class="mb-3">
              <label for="editEmail" class="form-label">Email</label>
              <input type="email" class="form-control" id="editEmail" required>
            </div>
            <div class="mb-3">
              <label for="editSection" class="form-label">Section</label>
                <select class="form-control" id="editSection" required>
                  <option value="">Select Status</option>
                  <option value="A">A</option>
                  <option value="B">B</option>
                  <option value="C">C</option>
                </select>
            </div>
            <div class="mb-3">
              <label for="editStatus" class="form-label">Status</label>
              <select class="form-select" id="editStatus" required>
               <option value="">Select Remarks</option>
                <option value="Enrolled">Enrolled</option>
                <option value="In Progress">In Progress</option>
              </select>
            </div>
            
             <div class="mb-3">
                <label for="editGrade" class="form-label">Student Grade</label>
                <input type="number" class="form-control" id="editGrade" placeholder="Student Grade" required
                 >
              </div>
              
              <div class="mb-3">
                <label for="editRemarks" class="form-label">Remarks</label>
                <select class="form-control " id="editRemarks" required>
                  <option value="">Select Remarks</option>
                  <option value="Outstanding">Outstanding</option>
                  <option value="Satisfactory">Satisfactory</option>
                                 <option value="Good Progress">Good Progress</option>
                  <option value="Needs Improvement ">Needs Improvemement</option>
                 <option value="Under Review">Under Review</option>
                </select>
              </div>
            
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-primary" onclick="updateData()">Save Changes</button>
        </div>
      </div>
    </div>
  </div>

</div>

</div>
</div>



  <?php 
   include('../components/footer.php');
  ?>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>

 

</body>

</html>
