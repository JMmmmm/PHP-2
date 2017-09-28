<?php 

class C_personCab extends C_Controller
{
    protected $title;
    protected $content;

    function __construct()
    {
    }
    
    protected function before()
    {
        $this->title = 'Личный кабинет';
        $this->content = '';
    }
    
    public function render()
    {
        $vars = array('title' => $this->title, 'content' => $this->content);
        $page = $this->Template('v/v_personCab.php', $vars);
        echo $page;
    }
    
    public function action_cab(){
    }  
}

?>