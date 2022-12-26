<?php include './pages/header.php'; ?>
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $cipher_key = $_POST['cipher_key'];
    if($_SESSION['cipher_key']==$cipher_key){
        $uploadedFile = $_FILES['uploadedFile'];
        if($uploadedFile['type']=="text/plain"){    
            $srcPath = $uploadedFile['tmp_name'];
            $output_msg = decryptThis(readThisFile($srcPath), $cipher_key);
        }else{
            echo "<h3>File type not accepted. The file type must be '.txt'.</h3>";
        }
    }else{
        $output_msg = "The key is incorrect. Text was not decrypted.";
    }
}
?>

<div class="row justify-content-center align-items-center g-2 mt-4">
    <div class="col-6">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data" class="rounded border p-2">

            <div class="mb-3 col-6 text-center m-auto">
              <label for="" class="form-label">Enter the key to download the encrypted file and decrypt it.</label>
              <input type="password" class="form-control" name="cipher_key">
            </div>
            <div class="mb-3 col-6 m-auto text-center">
              <label for="" class="form-label">Choose file</label>
              <input type="file" class="form-control" name="uploadedFile" aria-describedby="fileHelpId">
            </div>
            <div class="text-center">
                <h2>Decrypted text is:</h2>

                <p>
                    <?php
                        if(isset($output_msg)){
                            echo $output_msg;
                        }
                    ?>
                </p>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-outline-light">Submit</button>
            </div>
        </form>
    </div>
</div>

<?php include './pages/footer.php'; ?>