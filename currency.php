<!DOCTYPE HTML>
<html lang="en">
    <?php 

        function currencyConvert($amount, $rate1, $rate2){
            if(isset($_POST['submit'])){
                if($rate1=="american" && $rate2 =="canadian"){
                    $amount2 = $amount * 1.34;
                    return "$$amount USD".'<img style="display:inline-block;" src="united-states.png" width = "20px" height="20px"/>'." is $$amount2 CAD".'<img style="display:inline-block;" src="canada.png" width = "20px" height="20px"/>';
                }
                if($rate1=="american" && $rate2 == "euro"){
                    $amount2 = $amount * 0.86;
                    return "$$amount USD".'<img style="display:inline-block;" src="united-states.png" width = "20px" height="20px"/>'."is ".'&euro;'."$amount2".'<img style="display:inline-block;" src="flag.png" width = "20px" height="20px"/>';
                }
                if($rate1=="american" && $rate2 == "pound"){
                    $amount2 = $amount * 0.77;
                    return "$$amount USD".'<img style="display:inline-block;" src="united-states.png" width = "20px" height="20px"/>'."is ".'&pound;'."$amount2".'<img style="display:inline-block;" src="union-jack.png" width = "20px" height="20px"/>';
                }
                if($rate1=="american" && $rate2 == "yuan"){
                    $amount2 = $amount * 6.68;
                    return "$$amount USD".'<img style="display:inline-block;" src="united-states.png" width = "20px" height="20px"/>'."is ".'&yen;'."$amount2".'<img style="display:inline-block;" src="chinese.png" width = "20px" height="20px"/>';
                }
                if($rate1=="canadian" && $rate2 == "american"){
                    $amount2 = $amount * 0.75;
                    return "$$amount CAD".'<img style="display:inline-block;" src="canada.png" width = "20px" height="20px"/>'."is $$amount2 USD".'<img style="display:inline-block;" src="united-states.png" width = "20px" height="20px"/>';
                }
                if($rate1=="canadian" && $rate2 == "euro"){
                    $amount2 = $amount * 0.64;
                    return "$$amount CAD".'<img style="display:inline-block;" src="canada.png" width = "20px" height="20px"/>'."is ".'&euro;'."$amount2".'<img style="display:inline-block;" src="flag.png" width = "20px" height="20px"/>';
                }
                if($rate1=="canadian" && $rate2 == "pound"){
                    $amount2 = $amount * 0.58;
                    return "$$amount CAD".'<img style="display:inline-block;" src="canada.png" width = "20px" height="20px"/>'."is ".'&pound;'."$amount2".'<img style="display:inline-block;" src="union-jack.png" width = "20px" height="20px"/>';
                }
                if($rate1=="canadian" && $rate2 == "yuan"){
                    $amount2 = $amount * 5.02;
                    return "$$amount CAD".'<img style="display:inline-block;" src="canada.png" width = "20px" height="20px"/>'."is ".'&yen;'."$amount2".'<img style="display:inline-block;" src="chinese.png" width = "20px" height="20px"/>';
                }
                if($rate1=="euro" && $rate2 =="american"){
                    $amount2 = $amount * 1.16;
                    return '&euro;'."$amount".'<img style="display:inline-block;" src="flag.png" width = "20px" height="20px"/>'."is $$amount2 USD".'<img style="display:inline-block;" src="united-states.png" width = "20px" height="20px"/>'; 
                }  
                if($rate1=="euro" && $rate2 =="canadian"){
                    $amount2 = $amount * 1.55;
                    return '&euro;'."$amount".'<img style="display:inline-block;" src="flag.png" width = "20px" height="20px"/>'." is $$amount2 CAD".'<img style="display:inline-block;" src="canada.png" width = "20px" height="20px"/>';
                } 
                if($rate1=="euro" && $rate2 =="pound"){
                    $amount2 = $amount * 0.90;
                    return '&euro;'."$amount".'<img style="display:inline-block;" src="flag.png" width = "20px" height="20px"/>'."is ".'&pound;'."$amount2".'<img style="display:inline-block;" src="union-jack.png" width = "20px" height="20px"/>';
                } 
                if($rate1=="euro" && $rate2 =="yuan"){
                    $amount2 = $amount * 7.78;
                    return '&euro;'."$amount".'<img style="display:inline-block;" src="flag.png" width = "20px" height="20px"/>'."is ".'&yen;'."$amount2".'<img style="display:inline-block;" src="chinese.png" width = "20px" height="20px"/>';
                }
                if($rate1=="pound" && $rate2 == "american"){
                    $amount2 = $amount * 1.29;
                    return '&pound;'."$amount".'<img style="display:inline-block;" src="union-jack.png" width = "20px" height="20px"/>'."is $$amount2 USD".'<img style="display:inline-block;" src="united-states.png" width = "20px" height="20px"/>';
                }
                if($rate1=="pound" && $rate2 == "canadian"){
                    $amount2 = $amount * 1.72;
                    return '&pound;'."$amount".'<img style="display:inline-block;" src="union-jack.png" width = "20px" height="20px"/>'." is $$amount2 CAD".'<img style="display:inline-block;" src="canada.png" width = "20px" height="20px"/>';
                }
                if($rate1=="pound" && $rate2 == "euro"){
                    $amount2 = $amount * 1.11;
                    return '&pound;'."$amount".'<img style="display:inline-block;" src="union-jack.png" width = "20px" height="20px"/>'."is ".'&euro;'."$amount2".'<img style="display:inline-block;" src="flag.png" width = "20px" height="20px"/>';
                }
                if($rate1=="pound" && $rate2 == "yuan"){
                    $amount2 = $amount * 8.66;
                    return '&pound;'."$amount".'<img style="display:inline-block;" src="union-jack.png" width = "20px" height="20px"/>'."is ".'&yen;'."$amount2".'<img style="display:inline-block;" src="chinese.png" width = "20px" height="20px"/>';
                }
                if($rate1 == "yuan" && $rate2 =="american"){
                    $amount2 = $amount * 0.15;
                    return '&yen;'."$amount".'<img style="display:inline-block;" src="chinese.png" width = "20px" height="20px"/>'."is $$amount2 USD".'<img style="display:inline-block;" src="united-states.png" width = "20px" height="20px"/>';
                }
                if($rate1=="yuan" && $rate2 =="canadian"){
                    $amount2 = $amount * 0.2;
                    return '&yen;'."$amount".'<img style="display:inline-block;" src="chinese.png" width = "20px" height="20px"/>'." is $$amount2 CAD".'<img style="display:inline-block;" src="canada.png" width = "20px" height="20px"/>';
                }
                if(rate1=="yuan" && $rate2 =="euro"){
                    $amount2 = $amount * 0.13;
                    return '&yen;'."$amount".'<img style="display:inline-block;" src="chinese.png" width = "20px" height="20px"/>'."is ".'&euro;'."$amount2".'<img style="display:inline-block;" src="flag.png" width = "20px" height="20px"/>';
                }
                if($rate1=="yuan" && $rate2=="pound"){
                    $amount2 = $amount * 0.12;
                    return '&yen;'."$amount".'<img style="display:inline-block;" src="chinese.png" width = "20px" height="20px"/>'."is ".'&pound;'."$amount2".'<img style="display:inline-block;" src="union-jack.png" width = "20px" height="20px"/>';
                }  
            }
        }
        if(isset($_POST["amount"]) && isset($_POST["r1"]) && isset($_POST["r2"])){
            $result = currencyConvert(floatval($_POST["amount"]), strval($_POST["r1"]), strval($_POST["r2"]));
        }
    ?>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <div class="navbar">
            <button class="dropbtn"><a href="index.html">Home</a></button>
            <div class = "dropdown">
                <button class="dropbtn"><a href="#">Products</a></button> 
                <div class="dropdown-content">
                    <a href="currency.php">Currency Exchange</a>
                    <a href="#">Service 2</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn"><a href="contact.html">Contact Us</a></button>
                <div class="dropdown-content">
                    <a href="#">Contactez-nous<img src="data:image/svg+xml;base64,PHN2ZyBpZD0iQ2FwYV8xIiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCA1MTIgNTEyIiBoZWlnaHQ9IjUxMiIgdmlld0JveD0iMCAwIDUxMiA1MTIiIHdpZHRoPSI1MTIiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGc+PGc+PHBhdGggZD0ibTQ2MC44MjUgNTIuMjdoLTEyMS45OTVsLTgyLjgzIDIwMy43MyA4Mi44MyAyMDMuNzNoMTIxLjk5NWMyNC4xMjEgMCA0My42NzUtMTkuNTU0IDQzLjY3NS00My42NzV2LTMyMC4xMWMwLTI0LjEyMS0xOS41NTQtNDMuNjc1LTQzLjY3NS00My42NzV6IiBmaWxsPSIjZmY2ZjdmIi8+PHBhdGggZD0ibTE3My4xNyA1Mi4yN2gtMTIxLjk5NWMtMjQuMTIxIDAtNDMuNjc1IDE5LjU1NC00My42NzUgNDMuNjc1djMyMC4xMWMwIDI0LjEyMSAxOS41NTQgNDMuNjc1IDQzLjY3NSA0My42NzVoMTIxLjk5NWw4Mi44My0yMDMuNzN6IiBmaWxsPSIjNWM4NGQ5Ii8+PHBhdGggZD0ibTE3My4xNyA1Mi4yN2gxNjUuNjZ2NDA3LjQ2aC0xNjUuNjZ6IiBmaWxsPSIjZWFlYWVhIi8+PHBhdGggZD0ibTU0LjY0IDI0NS4xMDFjMC03NC42OCA0LjQxNC0xNDIuNTQ1IDM4LjI0NC0xOTIuODMyaC00MS43MDljLTI0LjEyMS4wMDEtNDMuNjc1IDE5LjU1NS00My42NzUgNDMuNjc2djMyMC4xMWMwIDI0LjEyMSAxOS41NTQgNDMuNjc1IDQzLjY3NSA0My42NzVoMTAzLjI5MmMtNjEuMDQtNTEuNDg2LTk5LjgyNy0xMjguNTIyLTk5LjgyNy0yMTQuNjI5eiIgZmlsbD0iIzQ2NzdkNCIvPjwvZz48Zz48cGF0aCBkPSJtMTM5LjI1IDI2MC44MzF2LTIxLjg3NmMwLTQuMTQyLTMuMzU4LTcuNS03LjUtNy41cy03LjUgMy4zNTgtNy41IDcuNXYyMS44NzZjMCA0LjE0MiAzLjM1OCA3LjUgNy41IDcuNXM3LjUtMy4zNTcgNy41LTcuNXoiLz48cGF0aCBkPSJtMzcyLjc1IDIzOC45NTV2MjEuODc2YzAgNC4xNDIgMy4zNTggNy41IDcuNSA3LjVzNy41LTMuMzU4IDcuNS03LjV2LTIxLjg3NmMwLTQuMTQyLTMuMzU4LTcuNS03LjUtNy41cy03LjUgMy4zNTgtNy41IDcuNXoiLz48cGF0aCBkPSJtMjIwLjEwNyAyNjUuNjIyYzkuMDU0IDEwLjM4OSAyMi4xMzcgMTYuMzQ4IDM1Ljg5MyAxNi4zNDhzMjYuODM4LTUuOTU5IDM1Ljg5My0xNi4zNDhjMi43MjEtMy4xMjMgMi4zOTYtNy44Ni0uNzI3LTEwLjU4MnMtNy44Ni0yLjM5Ni0xMC41ODIuNzI3Yy02LjIwNSA3LjEyLTE1LjE2NiAxMS4yMDMtMjQuNTg0IDExLjIwM3MtMTguMzc5LTQuMDgzLTI0LjU4NC0xMS4yMDNjLTIuNzIyLTMuMTIzLTcuNDU5LTMuNDQ4LTEwLjU4Mi0uNzI3LTMuMTIzIDIuNzIyLTMuNDQ4IDcuNDU5LS43MjcgMTAuNTgyeiIvPjxwYXRoIGQ9Im01MS4xNzUgNDY3LjIzaDQwOS42NWMyOC4yMTggMCA1MS4xNzUtMjIuOTU3IDUxLjE3NS01MS4xNzV2LTIyNi4xODVjMC00LjE0Mi0zLjM1OC03LjUtNy41LTcuNXMtNy41IDMuMzU4LTcuNSA3LjV2MjI2LjE4NWMwIDE5Ljk0Ny0xNi4yMjggMzYuMTc1LTM2LjE3NSAzNi4xNzVoLTExNC40OTV2LTM5Mi40NmgxMTQuNDk0YzE5Ljk0NyAwIDM2LjE3NiAxNi4yMjggMzYuMTc2IDM2LjE3NXY2My45MjZjMCA0LjE0MiAzLjM1OCA3LjUgNy41IDcuNXM3LjUtMy4zNTggNy41LTcuNXYtNjMuOTI2YzAtMjguMjE4LTIyLjk1Ny01MS4xNzUtNTEuMTc1LTUxLjE3NS00OC42MzkgMC0zNTguMTI1IDAtNDA5LjY1IDAtMjguMjE4IDAtNTEuMTc1IDIyLjk1Ny01MS4xNzUgNTEuMTc1djIxMC4wMjNjMCA0LjE0MiAzLjM1NyA3LjUgNy41IDcuNSA0LjE0MiAwIDcuNS0zLjM1OCA3LjUtNy41di0yMTAuMDIzYzAtMTkuOTQ3IDE2LjIyOC0zNi4xNzUgMzYuMTc1LTM2LjE3NWgxMTQuNDk1djM5Mi40NmgtMTE0LjQ5NWMtMTkuOTQ3IDAtMzYuMTc1LTE2LjIyOC0zNi4xNzUtMzYuMTc1di04MC4wODdjMC00LjE0Mi0zLjM1OC03LjUtNy41LTcuNS00LjE0MyAwLTcuNSAzLjM1OC03LjUgNy41djgwLjA4N2MwIDI4LjIxOCAyMi45NTcgNTEuMTc1IDUxLjE3NSA1MS4xNzV6bTI4MC4xNTUtMTVoLTE1MC42NnYtMzkyLjQ2aDE1MC42NnoiLz48L2c+PC9nPjwvc3ZnPg==" width = "30" height="30"/></a>
                    <a href="#">Kontaktiere uns<img src="data:image/svg+xml;base64,PHN2ZyBpZD0iQ2FwYV8xIiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCA0OTcgNDk3IiBoZWlnaHQ9IjUxMiIgdmlld0JveD0iMCAwIDQ5NyA0OTciIHdpZHRoPSI1MTIiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZD0ibTAgMzE1LjUydjkxLjU0NGMwIDIzLjQ3NSAxOS4wMyA0Mi41MDYgNDIuNTA2IDQyLjUwNmg0MTEuOTg5YzIzLjQ3NSAwIDQyLjUwNi0xOS4wMyA0Mi41MDYtNDIuNTA2di05MS41NDRsLTI0OC41LTI5Ljk3M3oiIGZpbGw9IiNmOGQwNzAiLz48cGF0aCBkPSJtNDAgNDA3LjA2NXYtOTEuNTQ1bDIyOC41LTI3LjU2LTIwLTIuNDEzLTI0OC41IDI5Ljk3M3Y5MS41NDVjMCAyMy40NzUgMTkuMDMgNDIuNTA1IDQyLjUwNiA0Mi41MDVoNDBjLTIzLjQ3NiAwLTQyLjUwNi0xOS4wMy00Mi41MDYtNDIuNTA1eiIgZmlsbD0iI2ZmYTgzZiIvPjxwYXRoIGQ9Im00NTQuNDk0IDQ3LjQzaC00MTEuOTg4Yy0yMy40NzYgMC00Mi41MDYgMTkuMDMtNDIuNTA2IDQyLjUwNnY5MS41NDRsMjQ4LjUgMzguMDA5IDI0OC41LTM4LjAwOXYtOTEuNTQ0YzAtMjMuNDc2LTE5LjAzLTQyLjUwNi00Mi41MDYtNDIuNTA2eiIgZmlsbD0iIzRmNGM1ZiIvPjxwYXRoIGQ9Im00MCAxODEuNDh2LTkxLjU0NGMwLTIzLjQ3NiAxOS4wMy00Mi41MDYgNDIuNTA2LTQyLjUwNmgtNDBjLTIzLjQ3NiAwLTQyLjUwNiAxOS4wMy00Mi41MDYgNDIuNTA2djkxLjU0NGwyNDguNSAzOC4wMDkgMjAtMy4wNTl6IiBmaWxsPSIjNDIzZTRmIi8+PHBhdGggZD0ibTAgMTgxLjQ4aDQ5N3YxMzQuMDRoLTQ5N3oiIGZpbGw9IiNmZDVmN2UiLz48cGF0aCBkPSJtMCAxODEuNDhoNDB2MTM0LjA0aC00MHoiIGZpbGw9IiNlMzI1NGMiLz48ZyBmaWxsPSIjNDIzZTRmIj48cGF0aCBkPSJtMTU1LjU1NiAyNTkuNjE0Yy00LjE0MiAwLTcuNS0zLjM1OC03LjUtNy41di0xNy44NmMwLTQuMTQyIDMuMzU4LTcuNSA3LjUtNy41czcuNSAzLjM1OCA3LjUgNy41djE3Ljg2YzAgNC4xNDItMy4zNTggNy41LTcuNSA3LjV6Ii8+PHBhdGggZD0ibTM0MS40NDUgMjU5LjYxNGMtNC4xNDIgMC03LjUtMy4zNTgtNy41LTcuNXYtMTcuODZjMC00LjE0MiAzLjM1OC03LjUgNy41LTcuNXM3LjUgMy4zNTggNy41IDcuNXYxNy44NmMwIDQuMTQyLTMuMzU4IDcuNS03LjUgNy41eiIvPjxwYXRoIGQ9Im0yNDguNSAyNzAuMjQ2Yy0xMS41NTkgMC0yMi41NTEtNS4wMDctMzAuMTU4LTEzLjczNi0yLjcyMS0zLjEyMy0yLjM5Ni03Ljg2LjcyNy0xMC41ODIgMy4xMjMtMi43MjEgNy44NTktMi4zOTYgMTAuNTgyLjcyNyA0Ljc1OCA1LjQ2IDExLjYyOCA4LjU5MSAxOC44NSA4LjU5MXMxNC4wOTItMy4xMzEgMTguODUtOC41OTFjMi43MjEtMy4xMjMgNy40NTktMy40NDggMTAuNTgyLS43MjdzMy40NDggNy40NTkuNzI3IDEwLjU4MmMtNy42MDkgOC43MjktMTguNjAxIDEzLjczNi0zMC4xNiAxMy43MzZ6Ii8+PC9nPjwvc3ZnPg==" width="30" height="30"/></a>
                </div>
            </div>
            <button class="dropbtn"><a href="aboutme.html">About</a></button>
        </div>
            <div id="top">
                <header>
                    <h1>Currency</h1>
                    <p class="instructions">
                        Use the converter below to convert your currency from one to another.
                    </p>
                </header>
            </div>
            <div id="data">
                <fieldset>
                    <form method="post" action="">
                        <table>
                            <tr>
                                <td>Amount: <input type="text" name="amount" required = "required" placeholder="Enter amount."></td>
                            </tr>
                            <tr>
                                <td> Converting from:</td>
                            </tr>
                            <tr>
                                <td>
                                    American<img style="display:inline-block;" src="united-states.png" width = "20px" height="20px"/>: <input type="radio" name="r1" value="american" checked>
                                    Canadian<img style="display:inline-block;" src="canada.png" width = "20px" height="20px"/>: <input type="radio" name="r1" value="canadian">
                                    Euro<img style="display:inline-block;" src="flag.png" width = "20px" height="20px"/>: <input type="radio" name="r1" value="euro">
                                    British Pound<img style="display:inline-block;" src="union-jack.png" width = "20px" height="20px"/>: <input type="radio" name="r1" value="pound">
                                    Chinese Yuan<img style="display:inline-block;" src="chinese.png" width = "20px" height="20px"/>: <input type="radio" name="r1" value="yuan">
                                </td>
                            </tr>
                            <tr>
                                <td>to:</td>
                            </tr>
                            <tr>
                                <td>
                                    American<img style="display:inline-block;" src="united-states.png" width = "20px" height="20px"/>: <input type="radio" name="r2"value="american">
                                    Canadian<img style="display:inline-block;" src="canada.png" width = "20px" height="20px"/>: <input type="radio" name="r2" value="canadian" checked>
                                    Euro<img style="display:inline-block;" src="flag.png" width = "20px" height="20px"/>: <input type="radio" name="r2"value="euro">
                                    British Pound<img style="display:inline-block;" src="union-jack.png" width = "20px" height="20px"/>: <input type="radio" value="pound" name="r2">
                                    Chinese Yuan<img style="display:inline-block;" src="chinese.png" width = "20px" height="20px"/>: <input type="radio" name="r2" value="yuan">
                                </td>
                            </tr>
                        </table>
                        <button type="submit" name="submit" value="Convert">Convert</button>
                    </form>
                </fieldset>
            </div>
            <div id="output">
                <p>
                    <?php if (isset($result)) { ?>
                        <?php echo $result; ?>
                    <?php } ?>
                </p>
            </div>
        </div>
    </body>
</html>