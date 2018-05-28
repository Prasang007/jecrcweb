
<html>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
        <title>New Page 1</title>
    </head>
    <div id="scroller" style="width: 1004px; height: 75px">
    </div>
    <body onload="StartMove()">

        <style>
            #scroller {
                background-color: #000000;
                padding-left: 40px;
                height: 75px;
                background-image: url(img.jpg);
                background-repeat: repeat-x;
            }
        </style>
        <script language="javascript">

            function StartMove() {
                var cssBGImage = new Image();
                cssBGImage.src = "img.jpg";

                window.cssMaxWidth = cssBGImage.width;
                window.cssXPos = 0;
                setInterval("MoveBackGround()", 50);
            }

            function MoveBackGround() {
                window.cssXPos = window.cssXPos - 1;
                if (window.cssXPos >= window.cssMaxWidth) {
                    window.cssXPos = 0;
                }
                toMove = document.getElementById("scroller");
                toMove.style.backgroundPosition = window.cssXPos + "px 0px";

            }
        </script>
    </body>

</html>
