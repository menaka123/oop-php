<?php
namespace Test;

class Book {

	private $records = [];

    /**
     * @param callable $call
     * @return Book
     */
    public function createAddress(callable $call) : Book {

        $address = new Address;
	    $this->records[] = $call($address);
	    return $this;
    }

    /**
     * Print $records
     */
    public function render(){

		$output = [];

		foreach($this->records as $index => $record){

			$output[] = 'Book record #'.($index+1);

            $closure = \Closure::bind(function (Address $address) {
                return [
                    $address->street,
                    $address->city,
                    $address->county,
                    $address->postcode,
                    $address->country,
                    $address->contacts
                ];
            }, null, Address::class);

            [$street, $city, $county, $postcode, $country, $contacts] = $closure($record);

            $houseNum = $record->getHouseNumber();

            $output[] = "Address: $houseNum $street, "
                . ($city ? "$city, " : '')
                . ($county ? "$county, " : '')
                . ($postcode ? "$postcode, " : '')
                . ($country ? "$country" : '');

            foreach($contacts as $i => $contact){

                $closure = \Closure::bind(function (Contact $contactClass) {
                    return $contactClass->name;
                }, null, Contact::class);

                $email = $contact->getEmail();
                $name = $closure($contact);
				$output[] = "Contact #".($i+1).": &lt;$email&gt; $name";
			}

		}

        foreach ($output as $print) {
            echo $print.'<br>';
        }
	}

}