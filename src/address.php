<?php
namespace Test;

class Address {

	private $houseNumber = '';
	private $street = '';
	protected $city = '';
	protected $county = '';
	public $postcode = '';
	public $country = '';
	private $contacts = [];

    /**
     * @param string $number
     * @return Address
     */
    public function setHouseNumber(string $number) : Address {
	    $this->houseNumber = $number;
        return $this;
    }

    /**
     * @return string
     */
    public function getHouseNumber() : string {
        return $this->houseNumber;
    }

    /**
     * @param string $street
     * @return Address
     */
    public function setStreet(string $street) : Address {
        $this->street = $street;
        return $this;
    }

    /**
     * @param string $city
     * @return Address
     */
    public function setCity(string $city) : Address {
        $this->city = $city;
        return $this;
    }

    /**
     * @param string $postcode
     * @return Address
     */
    public function setPostCode(string $postcode) : Address {
        $this->postcode = $postcode;
        return $this;
    }

    /**
     * @param string $county
     * @return Address
     */
    public function setCounty(string  $county) : Address {
        $this->county = $county;
        return $this;
    }

    /**
     * @param string $country
     * @return Address
     */
    public function setCountry(string $country) : Address {
        $this->country = $country;
        return $this;
    }

    /**
     * @param Contact $contact
     */
    public function addContact(Contact $contact) {
        $this->contacts[] = $contact;
    }

}