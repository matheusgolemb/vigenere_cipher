<?php
function genEncrypt_Key($decText, $key){
    //Making the key have the same lenght as the text.
    $arrayText = str_split($key);
    if(strlen($key)==strlen($decText)){
        return $key;
    }elseif(strlen($key)>strlen($decText)){
        //The key must not be longer than the cipher txt
        return false;
    }else{
        $newKey = $key;
        for ($i=0; strlen($newKey) < strlen($decText) ; $i++) {
            if ($i > count($arrayText)-1) {
                $i = 0;
            }
            $newKey = $newKey . $arrayText[$i];
        }
        return $newKey;
    }
}

function encryptThis($text, $key){
    $arrayKey = str_split(genEncrypt_Key($text, $key));
    if(!$arrayKey){
        return false;
    }
    $arrayText = str_split($text);
    $encrypted_text = [];
    for ($i=0; $i < count($arrayText) ; $i++) { //Looping in each char of text, getting the dec value of char(considering the ASCII table) and applying the formula of vigenere and pushing encrypted value to new text.
        $encText = ord($arrayText[$i]); //Getting the ASCII value of letter.Using the whole ASCII table, so every char is encrypted and decrypted.
        $encKey = ord($arrayKey[$i]); //Getting the ASCII value of letter.Using the whole ASCII table, so every char is encrypted and decrypted.
        $enc_char = ($encText + $encKey) % 256;
        array_push($encrypted_text, chr($enc_char));
    }
    $encrypted_text = implode($encrypted_text);
    return $encrypted_text;   
}
function decryptThis($cipherText, $key){
    $arrayKey = str_split(genEncrypt_Key($cipherText, $key));
    $arrayText = str_split($cipherText);
    $encrypted_text = [];
    for ($i=0; $i < count($arrayText) ; $i++) {//Looping in each char of text, getting the dec value of char(considering the ASCII table) and applying the formula of vigenere and pushing decrypted value to new text.
        $encText = ord($arrayText[$i]); //Getting the ASCII value of letter.Using the whole ASCII table, so every char is encrypted and decrypted.
        $encKey = ord($arrayKey[$i]) + 256; //Getting the ASCII value of letter. Using the whole ASCII table, so every char is encrypted and decrypted. This case is +256 because the result is negative, it's necessary to the MOD value not become negative.
        $enc_char = ($encText - $encKey) % 256;
        array_push($encrypted_text, chr($enc_char));
    }
    $encrypted_text = implode($encrypted_text);
    return $encrypted_text;     
}
function readThisFile($fileName){ //return back an associate array
    if(file_exists($fileName)){
        $file = fopen($fileName,'r');
        $dataArray = fread($file,filesize($fileName));
        fclose($file);
        return $dataArray;
    }
    return false;
}
function writeInFile($fileName, $newData){  //write in file new data
    $file = fopen($fileName, 'w');
    fwrite($file, $newData);
    fclose($file);
}




?>