

<?php
class Hyper{
    protected $name;
    protected function __construct($name)
    {
        $this->name=$name;
    }

    public function getName()
    {
        return $this->name;
    }
}
class feel extends Hyper{
    public function __construct()
    {
        parent::__construct($name);

    }

    public function call(){
        echo parent::getName("why");
    }
}
$new= new feel('some');


