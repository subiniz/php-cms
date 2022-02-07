<?php
    if(isset($_SESSION['alert'])) {
?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?php echo $_SESSION['alert']; ?>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
<?php
    unset($_SESSION['alert']); // Unset/Removes the alert variable from the session array
    }
?>

<?php
    if(isset($_SESSION['error'])) {
?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <?php echo $_SESSION['error']; ?>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
<?php
    unset($_SESSION['error']); // Unset/Removes the error variable from the session array
    }
?>  