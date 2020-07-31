<?php

        require_once(ROOT_PATH . 'products/Article.php');

        class TeddyBear extends Article
        {
            private int $eyes;


            private float $hugValue;

            /**
             * TeddyBear constructor.
             * @param int $eyes
             * @param float $hugValue
             */
            public function __construct(int $eyes, float $hugValue)
            {
                parent::__construct("Teddy bear", "Huts a fluts zie mijn coole beer", 20);
                $this->eyes = $eyes;
                $this->hugValue = $hugValue;
            }

            public function talk() : void
            {
                echo "Hey bro wats up men" . "<br>" ;
            }

            public function eat() : void
            {
                echo "Ik heb honger geef mij eten" . "<br>";
            }

            public function info() : void
            {
                echo "Bro weet jij hoe duur ik ben ik was " . $this->getPrice() . "<br>";
            }

            public function getEyes(): int
            {
                return $this->eyes;
            }

            public function getHugValue(): float
            {
                return $this->hugValue;
            }
        }