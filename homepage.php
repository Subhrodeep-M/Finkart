<?php
session_start();

// Database connection file
include 'connect.php';

// Form handling function
if (isset($_SESSION['email'])) {
  $email = $_SESSION['email'];
  $sql = "SELECT * FROM register WHERE email = '$email'";
  $result = $conn->query($sql);
  $row = mysqli_fetch_array($result);

  $id = $row['id'];
  $name = $row['name'];
  $email = $row['email'];
  $number = $row['number'];
  $message = "Login Successful";
  // If the user is logged in, display a welcome message


  // Fetch the ekyc data from the database [statements section]

  $sql_stm = "SELECT * FROM ekyc WHERE user_id = '$id' limit 100";
  $statements_records = $conn->query($sql_stm);
} else {
  // If the user is not logged in, redirect to the login page
  header("location: login2.php");
}

?>
<!-- Header template Section  -->
<?php include 'template/header.php'; ?>

<div class="member-dashboard" role="main">
  <div class="main-container">

    <!-- Navbar template Section  -->
    <?php include 'template/navbar.php'; ?>
    <!-- END :: Navbar template Section  -->

    <!-- Welcome template Section -->
    <!-- Welcome message to the user -->
    <h1 class="welcome-text">Welcome, Mr. <?php echo $name ?></h1>
    <p>
      <?php echo $email ?> | <?php echo $number ?>
    </p>

    <!-- Statement card -->
    <section class="statements-section" aria-label="Member Statements">
      <h2 class="statements-title">Your Statements</h2>

      <div class="statements-header">
        <div>Member Name</div>
        <div>Member ID</div>
        <div>Designated Agent ID</div>
        <div>Contact</div>
        <div>Policy ID</div>
        <div>Policy Status</div>
        <div>Status</div>
        <div>Created On</div>
      </div>


      <?php
      foreach ($statements_records as $row) {
        $cus_name = $row['cus_name'];
        $cus_pan = $row['cus_pan'];
        $c_bank_ac = $row['c_bank_ac'];
        $pol_id = $row['pol_id'];
        $agent_id = $row['agent_id'];

        // $cus_ifsc_code = $row['cus_ifsc_code'];
        $status = $row['status'];
        $created_at = $row['created_at'];

        $member_id = str_pad($row['id'], 5, '0', STR_PAD_LEFT);

      ?>

        <div class="statement-row">
          <div><?php echo $cus_name ?></div>
          <div><?php echo $member_id ?></div>
          <div><?php echo $agent_id ?></div>
          <div><?php echo $number ?></div>
          <div><?php echo $pol_id ?></div>
          <div><?php echo $agent_id ?></div>
          <div class="status-<?php echo strtolower($status) ?>"><?php echo $status ?></div>
          <div><?php echo $created_at ?></div>
        </div>

      <?php
      }
      ?>



      <nav class="pagination" aria-label="Statements pagination">
        <button class="pagination-button active" aria-current="page">1</button>
        <button class="pagination-button">2</button>
        <button class="pagination-button">3</button>
        <button class="pagination-button">Next</button>
      </nav>
    </section>
    <!-- END :: Statement card -->

    <!-- END :: Welcome template Section -->
  </div>
</div>
<!-- Footer template Section -->
<?php include 'template/footer.php'; ?>
<!-- END :: Footer template Section -->