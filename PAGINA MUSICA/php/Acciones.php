//Aqui va login
<>php
if(isset($_POST['btnIngresar'];)){
    $Usuario=$Conecta->real-escap-string($_POST['Usuario']);
    $pass=$Conecta->real-escap-string($_POST['pass']); 
    $Consulta="SELECT Usuario,password FROM Usuarios WHERE Usuario='$Usuario' and password='$pass';
    $Ejecuta=Conecta->uery($Consulta);
      if($Ejecuta>0){
        $Usuariok=$Ejecuta['Usuario'];
        $passk=$Ejecuta['password'];
        $-sesion['Usuario'];
         if($Usuario==$Usuariok and $password==$passk){
            location="App.php";
         }
         else{
            echo "No eres  Usuario";
         }
         else{
            echo "Ingresa datos";
         }
      }
}