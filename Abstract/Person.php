<?PHP

class Person
{
    protected $first_name;
    protected $last_name;
    protected $email;
    public function __construct($first_name, $last_name, $email)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->email = $email;

    }

    //getters

    public function getFirst_name() 
    {
        return $this->first_name;
    }

    public function getLast_name()
    {
        return $this->last_name;
    }
    
    public function getEmail()
    {
        return $this->email;
    }
    //setters

    public function setFirst_name(string $first_name): void
    {
        $this->first_name = $first_name;
    }

    public function setLast_name(string $last_name): void
    {
        $this->last_name = $last_name;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }



}