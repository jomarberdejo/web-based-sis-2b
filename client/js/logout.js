document.querySelector('.logout-link').addEventListener('click', function(e) {
  e.preventDefault();

  Swal.fire({
    title: 'Are you sure you want to log out?',
    icon: 'question',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, log out!'
  }).then((result) => {
    if (result.isConfirmed) {

      fetch('../../server/logout.php', {
        method: 'POST',
        
      })
      .then(response => response.json())
      .then(data => {
        if (data.success) {

         window.location.href = '../../index.php';
        } else {
          Swal.fire('Error', 'Failed to log out.', 'error');
        }
      })
      .catch(error => {
        console.error('Logout error:', error);
        Swal.fire('Error', 'An error occurred during logout.', 'error');
      });
    }
  });
});

const signOut = document.querySelector('.signout');

signOut.addEventListener('click', () => {
  fetch('../../server/logout.php', {
    method: 'POST',
  
  })
  .then(response => response.json())
  .then(data => {
    if (data.success) {

      window.location.href = '../../index.php';
    } else {

      Swal.fire('Error', 'Failed to log out.', 'error');
    }
  })
  .catch(error => {
    console.error('Logout error:', error);
    Swal.fire('Error', 'An error occurred during logout.', 'error');
  });
});

const sidebarToggle = document.querySelector('.sidebar-toggle');
const sidebar = document.querySelector('.sidebar');

sidebarToggle.addEventListener('click', () => {
  sidebar.classList.toggle('open');
});
