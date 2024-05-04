<?php
 # Delete Teacher Registiton..................
  if(isset($_GET['id'])){
    $id = $_GET['id'];

    include("../dbManager.php");
    $query = "DELETE FROM teacherreg WHERE id = $id";

    if(mysqli_query($conn,$query)){
        echo "
          <script>
            alert('Delete Succeessfull');
            window.location.href='dashbord.php';
          </script>
        ";
    }
  }

  


# Delete Notice Board ..........
  if(isset($_GET['id'])){
    $id = $_GET['id'];

    include("../dbManager.php");
    $query = "DELETE FROM noticeboard WHERE id = $id";

    if(mysqli_query($conn,$query)){
        echo "
          <script>
            alert('Delete Notice');
            window.location.href='dashbord.php';
          </script>
        ";
    }
  }


# Delete Enquiry ..........
  if(isset($_GET['id'])){
    $id = $_GET['id'];

    include("../dbManager.php");
    $query = "DELETE FROM enquiry WHERE id = $id";

    if(mysqli_query($conn,$query)){
        echo "
          <script>
            alert('Delete Notice');
            window.location.href='dashbord.php';
          </script>
        ";
    }
  }

  
?>