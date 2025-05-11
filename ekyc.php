<?php
session_start();
include 'connect.php';

if (!isset($_SESSION['email'])) {
    header("location: login2.php");
}

if (isset($_POST['ekyc'])) {

    $email = $_SESSION['email'];
    $sql = "SELECT * FROM register WHERE email = '$email'";
    $result = $conn->query($sql);
    $row = mysqli_fetch_array($result);
    $user_id = $row['id'];

    $cus_name = $_POST['cus_name'];
    $cus_aadhar = $_POST['cus_aadhar'];
    $cus_pan = $_POST['cus_pan'];
    $c_bank_ac = $_POST['c_bank_ac'];

    $agent_id = "AG" . $_POST['agent_id'];
    $cus_ifsc_code = $_POST['cus_ifsc_code'];

    $pol_id = "POL" . rand(100, 999);


    $insertQuery = "INSERT INTO ekyc(cus_name,cus_aadhar,cus_pan,c_bank_ac,pol_id,agent_id,cus_ifsc_code, user_id) VALUES 
    ('$cus_name','$cus_aadhar','$cus_pan','$c_bank_ac','$pol_id','$agent_id','$cus_ifsc_code', '$user_id')";

    if ($conn->query($insertQuery) == TRUE) {
        header("location: homepage.php");
    } else {
        echo "Error occured while inserting, please try again";
    }
}
?>

<?php include 'template/header.php'; ?>
<div class="login-container" role="main">

    <div class="login-wrapper">
        <h1 class="login-title">eKYC</h1>
        <form class="login-form" action="" method="POST">
            <div class="input-group">
                <label for="name" class="input-label">Name</label>
                <input
                    type="text"
                    id="name"
                    name="cus_name"
                    class="text-input"
                    placeholder="John Doe"
                    required
                    autocomplete="name"
                    aria-required="true" />
            </div>
            <div class="input-group">
                <label for="cus_aadhar" class="input-label">Aadhaar Number</label>
                <input
                    type="text"
                    id="aadhar"
                    name="cus_aadhar"
                    class="text-input"
                    placeholder="1234 5678 9012"
                    required
                    autocomplete="aadhar"
                    aria-required="true" />
            </div>
            <div class="input-group">
                <label for="pan" class="input-label">PAN Number</label>
                <input
                    type="text"
                    id="pan"
                    name="cus_pan"
                    class="text-input"
                    placeholder="ABCDE1234F"
                    required
                    autocomplete="pan"
                    aria-required="true" />
            </div>
            <div class="input-group">
                <label for="bank_account" class="input-label">Bank A/C Number</label>
                <input
                    type="text"
                    id="bank_account"
                    name="c_bank_ac"
                    class="text-input"
                    placeholder="123456789012"
                    required
                    autocomplete="bank_account"
                    aria-required="true" />
            </div>
            <div class="input-group">
                <label for="ifsc_code" class="input-label">IFSC Code</label>
                <input
                    type="text"
                    id="ifsc_code"
                    name="cus_ifsc_code"
                    class="text-input"
                    placeholder="ABCD1024X"
                    required
                    autocomplete="ifsc_code"
                    aria-required="true" />
            </div>
            <div class="input-group">
                <label for="nominee_name" class="input-label">Nominee Name</label>
                <input
                    type="text"
                    id="nominee_name"
                    name="nominee_name"
                    class="text-input"
                    placeholder="Nominee Name"
                    required
                    autocomplete="nominee_name"
                    aria-required="true" />
            </div>
            <div class="input-group">
                <label for="agent_id" class="input-label">Agent ID</label>
                <input
                    type="number"
                    id="agent_id"
                    name="agent_id"
                    class="text-input"
                    placeholder="Agent ID"
                    required
                    autocomplete="agent_id"
                    aria-required="true"
                    value="AG" />
            </div>
            <button type="submit" class="signin-button" name="ekyc">Submit</button>
        </form>
    </div>
</div>
<!-- Footer template Section -->
<?php include 'template/footer.php'; ?>
<!-- END :: Footer template Section -->