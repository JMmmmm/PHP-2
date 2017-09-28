<?php 

class C_Reg extends C_Controller
{
    protected $title;
    protected $errorPass;

    function __construct()
    {
    }
    
    protected function before()
    {
        $this->title = 'Регистрация';
        $this->errorPass = '';
    }
    
    public function render()
    {
        $vars = array('title' => $this->title, 'errorPass' => $this->errorPass);
        $page = $this->Template('v/v_registForm.php', $vars);
        echo $page;
    }
    
    public function action_reg(){
        
        if($this->isPost()){
            
            if ($_POST['pass'] == $_POST['pass2']){
                
                try
                {
                    // соединяемся с базой данных
                    $connect_str = DB_DRIVER . ':host='. DB_HOST . ';dbname=' . DB_NAME;
                    $db = new PDO($connect_str,DB_USER,DB_PASS);
                    
                    // вставляем несколько строк в таблицу
                    $row = $db->exec("INSERT INTO `maindata` VALUES ('null','".$_POST['user']."', '".$_POST['pass']."', '".$_POST['email']."', '".$_POST['tel']."')");

                }
                catch(PDOException $e)
                {
                    die("Error: ".$e->getMessage());
                }
                
                header('location: index.php');
                exit();
            }
            else {
                $this->errorPass = "Повторный пароль не соответствует первому";
            }   
        }
        
        
        
    }
    
}

?>