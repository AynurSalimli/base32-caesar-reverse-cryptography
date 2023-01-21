<html>
    <head>
        <title>
            Reverse
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
    <body style="background-color: rgb(0, 0, 0);">
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
                <h1>Reverse</h1>
                <img style="width: 200px; height: 200px; margin-bottom: 40px;" src="reverse.jpg">

                <form>
                    Enter plaintext: <textarea type="text" id="reverse" name="text"></textarea><br/><br/>
                    Reverse <input type="button" style="font-size: 15pt;" value="encrypt or decrypt" id="ayce" onclick="Reverse()">
                </form>
                Ciphertext : <textarea id="plaintext"></textarea>
                
                <script>
                    function Reverse() {
                        var str = document.getElementById("reverse").value;
                        var splitString = str.split("");
                        var reverseArray = splitString.reverse();
                        var joinArray = reverseArray.join("");
                        a = joinArray;
                        console.log(a);
                        document.getElementById("plaintext").innerHTML =  a;
                    }
                </script>
            </div>
        </div>
        <div class="content_alt">
            <p style="font-size: 20pt; text-align: center;"><a style="color: white;" href="caesar.php" target="_top">Caesar</a> &nbsp &nbsp &nbsp <a style="color: white;" href="base32.php" target="_top">Base32</a></p>
        </div>
    </body>
</html>