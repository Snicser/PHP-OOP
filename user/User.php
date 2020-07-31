<?php
    class User
    {
        private string $firstName;
        private string $lastName;
        private int $age;
        private string $eMail;

        /**
         * User constructor.
         * @param string $firstName
         * @param string $lastName
         * @param int $age
         * @param string $eMail
         */
        public function __construct(string $firstName, string $lastName, int $age, string $eMail)
        {
            $this->firstName = $firstName;
            $this->lastName = $lastName;
            $this->age = $age;
            $this->eMail = $eMail;
        }

        public function addToDatabase() : bool
        {
            echo "User: " . $this->getFirstName() . " " . $this->getLastName() . "<br>";
            echo "Age and email: " . $this->getAge() . " years old, email: " . $this->getEMail() . "<br>" ;
            echo "User inserting into the database..." . "<br>" ;
            return true;
        }

        public function deleteUserFromDatabase() : bool
        {
            echo "Successfully deleted the user: ". $this->getFirstName() . " " . $this->getLastName() . "<br>";
            return true;
        }

        public function getFirstName(): string
        {
            return $this->firstName;
        }

        public function getLastName(): string
        {
            return $this->lastName;
        }

        public function getAge(): int
        {
            return $this->age;
        }

        public function setAge(int $age): void
        {
            if ($age > 0 && $age < 100) {
                $this->age = $age;
            } else {
                echo "Invalid age" . "<br>";
            }
        }

        public function getEMail(): string
        {
            return $this->eMail;
        }

        public function setEMail(string $eMail): void
        {
            $this->eMail = $eMail;
        }
    }