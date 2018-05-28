
            function StartMove() {
                var cssBGImage = new Image();
                cssBGImage.src = "images/companies/img.jpg";

                window.cssMaxWidth = cssBGImage.width;
                window.cssXPos = 0;
                setInterval("MoveBackGround()", 50);
            }

            function MoveBackGround() {
                window.cssXPos -= 1;
                if (window.cssXPos >= window.cssMaxWidth) {
                    window.cssXPos = 0;
                }
                toMove = document.getElementById("scroller");
                
                toMove.style.backgroundPosition = window.cssXPos + "px 0px";

            }
