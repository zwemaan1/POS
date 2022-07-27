<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            flex-direction: column;
            gap: 40px;
            background : #27282c;
        }
        #ania{
            position: relative;
            background:  #444;
            color: #fff;
            text-decoration: none;
            text-transform: uppercase;
            font-size: 1.5em;
            letter-spacing: 0.1em;
            font-weight: 400;
            padding: 10px 30px;
            transition: 0.5s;


        }

        #ania:hover{
            letter-spacing: 0.25em;
            background: var(--clr);
            color: var(--clr);
            box-shadow: 0 0 35px var(--clr);
        }

        #ania::before{
            content: '';
            position: absolute;
            inset: 2px;
            background: #27282c;

        }

        #ania #anispan
        {
            position: relative;
            z-index: 1;
        }

        #ania #anii {
            position: absolute;
            inset: 0;
            display: block;
        }

        #ania #anii::before{
            content: '';
            position: absolute;
            top:-6px;
            left: 100%;
            transform: translateX(-50%);
            width: 10px;
            height: 10px;
            background: #27282c;
            border: 2px solid var(--clr);
            transition: 0.5s;
         }

         #ania:hover #anii::before{
            left: 0%;
            transform: translateX(-50%) rotate(45deg);
            box-shadow: 33px 30px var(--clr);
         }


         #ania #anii::after{
            content: '';
            position: absolute;
            bottom:-6px;
            left: 0%;
            transform: translateX(-50%);
            width: 10px;
            height: 10px;
            background: #27282c;
            border: 2px solid var(--clr);
            transition: 0.5s;
         }

         #ania:hover #anii::after{
            left: 100%;
            transform: translateX(-50%) rotate(-45deg);
            box-shadow: 30px -33px var(--clr);
         }
    </style>
</head>
<body>
    <a href="" style="--clr:#1e9bff" id="ania"><span id="anispan">Submit</span><i id="anii"></i></a>
    <a href="" style="--clr:#ff1867" id="ania"><span id="anispan">Cancle</span><i id="anii"></i></a>
    <a href="" style="--clr:#6eff3e" id="ania"><span id="anispan">Submit</span><i id="anii"></i></a>
</body>
</html>