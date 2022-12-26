<?php include './pages/header.php'; ?>

<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $msg = $_POST['msg'];
    $cipher_key = $_POST['cipher_key'];
    $_SESSION['cipher_key'] = $cipher_key;
    $cipher = encryptThis($msg, $cipher_key);
    // $dec_text = decryptThis($cipher, $cipher_key);
    // var_dump($cipher);
    // var_dump($dec_text);
    writeInFile('./data/Encrypted_msg.txt', $cipher);
}
?>

<div class="row justify-content-center align-items-center g-2 mt-4">
    <div class="col-6">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="rounded border p-2">
            <div class="text-center">
                <h2>Write the text to be encrypted:</h2>
            </div>
            <div class="mb-3 col-6 text-center m-auto">
              <label for="" class="form-label">Choose the key for this message</label>
              <input type="password" class="form-control" name="cipher_key">
            </div>
            <div class="mb-3 col-11 m-auto">
                <label for="" class="form-label"></label>
                <textarea class="form-control" name="msg"></textarea>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-outline-light">Submit</button>
            </div>
            <div class="text-center mt-2">
                <a name="" class="btn btn-outline-info" href="./data/Encrypted_msg.txt" download="" role="button">Download encrypted file</a>
            </div>
        </form>
    </div>
</div>

<?php include './pages/footer.php'; ?>
