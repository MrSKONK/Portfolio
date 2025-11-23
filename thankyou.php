<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Merci pour votre message</title>
    <style>

        @import url('https://fonts.googleapis.com/css2?family=Clicker+Script&family=Poppins:wght@200;300;400;500;600;700&display=swap');

        * 
        {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins' sans-serif;
        }

        body 
        {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
        }

        .thank-you-container 
        {
            background: white;
            padding: 2rem;
            border-radius: 1rem;
            box-shadow: 0 0 20px rgba(48, 46, 77, 0.15);
            text-align: center;
            max-width: 90%;
            width: 500px;
            animation: slideUp 0.5s ease-out;
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .icon {
            width: 80px;
            height: 80px;
            background: #4CAF50;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
        }

        .icon::before 
        {
            content: '✓';
            font-size: 40px;
            color: white;
        }

        h1 
        {
            color: #2c3e50;
            margin-bottom: 1rem;
            font-size: 2rem;
        }

        p 
        {
            color: #666;
            line-height: 1.6;
            margin-bottom: 1.5rem;
        }

        .back-button 
        {
            display: inline-block;
            padding: 0.8rem 1.5rem;
            background: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: all 0.3s ease;
        }

        .back-button:hover 
        {
            transform: scale(1.05);
        }

        @media (max-width: 480px) 
        {
            .thank-you-container 
            {
                padding: 1.5rem;
            }

            h1 
            {
                font-size: 1.5rem;
            }

            .icon 
            {
                width: 60px;
                height: 60px;
            }

            .icon::before 
            {
                font-size: 30px;
            }
        }
    </style>
</head>
<body>
    <div class="thank-you-container">
        <div class="icon"></div>
        <h1>Votre message a bien été envoyé !</h1>
        <p>J'ai bien reçu votre demande de contact et vous répondrai dans les plus brefs délais.</p>
        <a href="index.php" class="back-button">Retour à l'accueil</a>
    </div>
</body>

 <!-- PHP Start -->
 <?php
 if (isset($_POST["message"]))
 {
     $message = "Ce message a été envoyé via le formulaire de contact du site: 
     https://mrchampagne-myportfolio.alwaysdata.net/

     Nom : " . $_POST["name"] . "
     Email: " . $_POST["email"] . " 
     Message: " . $_POST["message"]." ";

     $retour = mail("nathancmp.971@gmail.com", $_POST["subject"], 
     $message, "From:contact@nathancmp.971@gmail.com" . "\r\n" . "Reply-to" . $_POST["email"]);
 }
 ?>
 <!-- PHP End -->
</html>