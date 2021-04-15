<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Decryption</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/encrdecr.css">
</head>

<body>
    <div class="container">
        <div class="card">
            <a href="welcome.html"><i class="fa fa-arrow-circle-o-left"></i></a>
            <h2>DECRYPTION</h2>
            <form action="">
                <input type="text" class="input-box" placeholder="Enter Encrypted Text" required>
                <input type="password" class="input-box" placeholder="Secret Key" required>
                <button type="submit" class="enc-btn">Decrypt</button>
                <div class="result">
                    <input type="text" class="input-box" placeholder="Plain Text" disabled><button id="btn">Copy</button>
                </div>
                <button type="reset" class="enc-btn">Reset</button>
            </form>
        </div>
    </div>

</body>

</html>