<!doctype html>
<html>
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Logo Rotatif</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://use.fontawesome.com/releases/v5.7.2/css/all.css' rel='stylesheet'>
    <style>
        /* Importation des polices depuis Google */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

        /* Réinitialisation des styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: #ecf0f3;
        }
input {
    background-color: #ecf0f3;
    border-radius: 20px;
    padding: 10px 15px;
    font-size: 1.2rem;
    color: #666;
    box-shadow: inset 8px 8px 8px #cbced1, inset -8px -8px 8px #fff;
}

input:focus,
input:valid {
    background-color: #ecf0f3; /* Assurez-vous que la couleur de fond reste la même */
    box-shadow: inset 8px 8px 8px #cbced1, inset -8px -8px 8px #fff; /* Conservez les mêmes ombres */
    /* Ajoutez d'autres propriétés si nécessaire */
}


        .wrapper {
            max-width: 350px;
            min-height: 500px;
            margin: 80px auto;
            padding: 40px 30px 30px 30px;
            background-color: #ecf0f3;
            border-radius: 15px;
            box-shadow: 13px 13px 20px #cbced1, -13px -13px 20px #fff;
        }

        .logo {
            width: 80px;
            margin: auto;
        }

        .logo img {
            width: 100%;
            height: 80px;
            object-fit: cover;
            border-radius: 50%;
            box-shadow: 0px 0px 3px #5f5f5f,
                        0px 0px 0px 5px #ecf0f3,
                        8px 8px 15px #a7aaa7,
                        -8px -8px 15px #fff;
            /* Application de l'animation de rotation */
            animation: rotation 2s infinite linear;
        }

        @keyframes rotation {
            from {
                transform: rotate(0deg);
            }
            to {
                transform: rotate(360deg);
            }
        }

        .wrapper .name {
            font-weight: 600;
            font-size: 1.4rem;
            letter-spacing: 1.3px;
            padding-left: 10px;
            color: #555;
        }

        .wrapper .form-field input {
            width: 100%;
            display: block;
            border: none;
            outline: none;
            background: none;
            font-size: 1.2rem;
            color: #666;
            padding: 10px 15px 10px 10px;
        }

        .wrapper .form-field {
            padding-left: 10px;
            margin-bottom: 20px;
            border-radius: 20px;
            box-shadow: inset 8px 8px 8px #cbced1, inset -8px -8px 8px #fff;
        }

        .wrapper .form-field .fas {
            color: #555;
        }

        .wrapper .btn {
            box-shadow: none;
            width: 100%;
            height: 40px;
            background-color: #03A9F4;
            color: #fff;
            border-radius: 25px;
            box-shadow: 3px 3px 3px #b1b1b1,
                        -3px -3px 3px #fff;
            letter-spacing: 1.3px;
        }

        .wrapper .btn:hover {
            background-color: #039BE5;
        }

        .wrapper a {
            text-decoration: none;
            font-size: 0.8rem;
            color: #03A9F4;
        }

        .wrapper a:hover {
            color: #039BE5;
        }

        @media(max-width: 380px) {
            .wrapper {
                margin: 30px 20px;
                padding: 40px 15px 15px 15px;
            }
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="logo">
            <img src="https://www.freepnglogos.com/uploads/twitter-logo-png/twitter-bird-symbols-png-logo-0.png" alt="Logo">
        </div>
        <div class="text-center mt-4 name">
            Deepseek.my.id
        </div>
        <form class="p-3 mt-3">
            <div class="form-field d-flex align-items-center">
             
                <input type="text" name="userNameAA" id="userNameAA" placeholder="Votre mail">
            </div>
            <div class="form-field d-flex align-items-center">
               
                <input type="password" name="passwordAA" id="pwdAA" placeholder="Mot de passe">
            </div>
            <button class="btn mt-3">Login</button>
        </form>
        <div class="text-center fs-6">
            <a href="#">Mot de passe oublié ?</a> ou <a href="#">S'inscrire</a>
        </div>
    </div>
    <div class="wrapper mt-4">
        <div id="lala">
            gfdhgfdhgfdh
    <br>gfdgfdsgfdsgfdsgfdgfdhgfdhgfdh
    <br>gfdgfdsgfdsgfdsgfdgfdhgfdhgfdh
    <br>gfdgfdsgfdsglorem ipsum</div></div>
</body>
</html>
