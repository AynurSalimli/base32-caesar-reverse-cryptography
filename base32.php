<html>
    <head>
        <title>
            Base32
        </title>
        <style>
            .content {
            position: fixed;
            bottom: 0;
            background: rgb(0, 0, 0, 0);
            color: #f1f1f1;
            width: 100%;
            height: 99%;
            }
            .content_alt {
            position: fixed;
            bottom: 50px;
            background: rgb(0, 0, 0, 0.5);
            color: #f1f1f1;
            width: 100%;
            padding: 0px;
            height: 7%;
            }
            .content_ust {
            position: fixed;
            width: 10%;
            height: 70px;
            padding: 0px;
            position: absolute;
            top: 15px;
            right: 0px;
            }
        </style>
    </head>
    <body style="background-color: black;">
        <video style="position: fixed; right: 0; bottom: 0; min-width: 100%; min-height: 100%;" autoplay muted loop>
            <source src="4k background footage (ideal for Blockchain Website).webm" type="video/webm">
        </video>
  
        <div class="content">
            <div style="text-align: center; margin-top: 70px; font-size: 20pt;">
                <div><a href="../login/login.php" id="signout" style="background-color: black; color: white; font-size: 20pt; padding: 5 10 5 10; position: absolute; width: 6.5%; height: 47px; top: 25px; right: 25px;">Sign out</a></div>
                <script>
                    document.querySelector("#signout").addEventListener("click", () => {
                      signOut();
                    });
                    const signOut = () => {
                      location.replace("index.html");
                      firebase
                        .auth()
                        .signOut()
                        .then(function () {
                          location.reload();
                        })
                        .catch(function (error) {
                          alert("error signing out, check network connection");
                        });
                    };
                </script>
                <h1>Base32</h1>
                <img style="width: 200px; height: 200px; margin-bottom: 40px;" src="base32.jpeg">

                <form style="font-size: 20pt;">  
                    Enter plaintext : <textarea type="text" id="Base64" name="text"></textarea><br/><br/>
                    Base32 <input type="button" style="font-size: 15pt;" value="encrypt" onclick="Base64_encoder()"/>
                    <input type="button" style="font-size: 15pt;" value="decrypt" onclick="Base64_decoder()"/>
                </form>  
                Ciphertext : <textarea id="ASCII_text"></textarea>
        
                <script>
                    function Base64_encoder() {
                        var string = document.getElementById("Base64").value;
                        var encodedString = btoa(string);
                        console.log(encodedString);
                        document.getElementById("ASCII_text").innerHTML = encodedString;
                    }
                </script>
        
                Plaintext : <textarea id="Base32_text"></textarea>
        
                <script>
                    function Base64_decoder() {
                        var Base64 = document.getElementById("Base64").value;
                        var decodedBase64 = atob(Base64);
                        console.log(decodedBase64);
                        document.getElementById("Base32_text").innerHTML = decodedBase64;
                    }
                </script>        
            </div>
        </div>
        <div class="content_alt">
            <p style="font-size: 20pt; text-align: center;"><a style="color: white;" href="reverse.php" target="_top">Reverse</a> &nbsp &nbsp &nbsp <a style="color: white;" href="caesar.php" target="_top">Caesar</a> </p>
        </div>
    </body>
</html>
