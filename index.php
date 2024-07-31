<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Depedency Injection</title>
</head>
<body>
    <?php
        class User
        {
          public $name, $email;
          public function __construct($name = null, $email = null)
           {
            $this->name = $name;
            $this->email = $email;
           }
          public static function create(array $data) 
        
           {
              $user = new self($data['nama'], $data['email']);
              self::$users[] = $user;
              return $user;
  
              $errors = [];
          }
          }
    ?>
</body>
</html>