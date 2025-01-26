<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Page not found | yendomart</title>

        <style>
            @import url(https://fonts.googleapis.com/css?family=Roboto:400,100,300,500);

            body { 
                background-color: #fed700; 
                color: #fff;
                font-size: 100%;
                line-height: 1.5;
                font-family: "Roboto", sans-serif;
            }

            .button {
                font-weight: 300;
                color: #fff;
                font-size: 1.2em;
                text-decoration: none;
                border: 1px solid #efefef;
                padding: .5em;
                border-radius: 3px;
                float: left;
                margin: 1em 0 0 -105px;
                left: 50%;
                position: relative;
                transition: all .3s linear;
            }

            .button:hover {
                background-color: #fed700;
                color: #fff;
            }

            p {
                font-size: 2em;
                text-align: center;
                font-weight: 100;
                margin-block: 0;
            }

            h1 {
                text-align: center;
                font-size: 12em;
                font-weight: 100;
                color: #fff;
                margin-bottom: 0;
                text-shadow: 
                    #d4af00 1px 1px, 
                    #e1b800 2px 2px, 
                    #eccc00 3px 3px, 
                    #f9db00 4px 4px, 
                    #fed700 5px 5px, 
                    #ffea59 6px 6px, 
                    #fff799 7px 7px, 
                    #fffacb 8px 8px;
            }
        </style>
        
    </head>
    <body>
        
        <h1>404</h1>
        <p><b>Oops! Page Not Found.</b></p>
        <a class="button" href="{{ route("home") }}">
            <b>Go to back home page</b>
        </a>
        
    </body>
</html>