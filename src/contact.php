<?php
namespace Test;

class Contact {
	
	private $name = '';
	public $email = '';

    /**
     * @param $name
     * @return Contact
     */
    public function setName($name) {
	    $this->name = $name;
	    return $this;
    }

    /**
     * @param $email
     * @return Contact
     */
    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail() {
        return $this->email;
    }

}