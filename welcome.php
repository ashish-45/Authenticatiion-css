<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <style>
        .container {
            width: 100%;
            height: 100vh;
            font-family: sans-serif;
            background-color: #EDF5E1;
            position: absolute;
            left: 0px;
            top: 0px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            flex-direction: row;
        }

        .encr{
            width: 100%;
            height: 43vh;
            background: #8EE4AF;
            padding: 20px;
            text-align: left;
            color: #fff;
            display: flex;
            align-items: center;
            flex-direction: column;
        }

        .encr h2 {
            margin-top: 0%;
            color: #05386B;
            background: linear-gradient(to right,#379683,#8EE4AF);
            padding: 10px;
            text-align: center;
        }
        .decr{
            width: 100%;
            height: 43vh;   
            background: #8EE4AF;
            padding: 20px;
            text-align: left;
            color: #fff;
            display: flex;
            align-items: center;
            flex-direction: column;
        }

        .decr h2 {
            margin-top: 0%;
            color: #05386B;
            background: linear-gradient(to right,#379683,#8EE4AF);
            padding: 10px;
            text-align: center;
        }

        #btn{
            position: relative;
            padding: 10px 30px;
            height: 50px;
            background-color: #05386B;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            color: #EDF5E1;
            font-size: 15px;
            font-family: sans-serif;
            transition: 0.5s;
        }
        #btn:hover{
            background-color: #EDF5E1;
            color: #05386B;

        }
        @media only screen and (max-width: 1000px){
            .encr h2{
                font-size: 1em;
            }
            .encr{
                height: max-content;
            }
            .decr h2{
                font-size: 1em;
            }            
            .decr{
                height: max-content;
            }
            p{
                font-size: 80%;
            }
            #btn{
                width: 80%;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="encr">
            <h2>HOW TO ENCRYPT?</h2>
            <p>
                Encryption is a process that encodes a message or file so that it can be only be read by certain people.
                Encryption uses an algorithm to scramble, or encrypt, data and then uses a key for the receiving party
                to unscramble, or decrypt, the information.
                <br>
                Encryption uses algorithms to scramble your information. It is then transmitted to the receiving party,
                who is able to decode the message with a key. There are many types of algorithms, which all involve
                different ways of scrambling and then decrypting information.
            </p>
            <a href="encryption.html"><button id="btn">Let's Encrypt</button></a>
        </div>
        <div class="decr">
            <h2>HOW TO DECRYPT?</h2>
            <p>
                Decryption is taking encoded or encrypted text or other data and converting it back into text you or the
                computer can read and understand. This term could be used to describe a method of unencrypting the data
                manually or unencrypting the data using the proper codes or keys. <br>

                Data may be encrypted to make it difficult for someone to steal the information. Some companies also
                encrypt data for general protection of company data and trade secrets. If this data needs to be
                viewable, it may require decryption. If a decryption passcode or key is not available, special software
                may be needed to decrypt the data using algorithms to crack the decryption and make the data readable.
            </p>
            <a href="decryption.html"><button id="btn">Let's Decrypt</button></a>
        </div>
    </div>
</body>

</html>