<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     class User
     {
        public $prenom;
        public $text;
        public $email;
        public function Hello()
        {
          echo $this->prenom;
        }
        public function Register()
        {
          echo $this->text;
        }
        public function Mail()
        {
          echo $this->email;
        } 
     }
     $User1 = new User();
     
     $User1->prenom = "Hello, Alonita \n";
     $User1->Hello();

     $User1->text = "Enregistrer\n";
     $User1->Register();

     $User1->email = "email envoyé\n";
     $User1->Mail();
    ?>
</body>
</html>