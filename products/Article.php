<?php

class Article
    {
        private string $name;
        private string $description;
        private float $price;

        /**
         * Article constructor.
         * @param string $name
         * @param string $description
         * @param float $price
         */
        public function __construct(string $name, string $description, float $price)
        {
            $this->name = $name;
            $this->description = $description;
            $this->price = $price;
        }

        public function getName(): string
        {
            return $this->name;
        }

        public function setName(string $name): void
        {
            $this->name = $name;
        }

        public function getDescription(): string
        {
            return $this->description;
        }

        public function setDescription(string $description): void
        {
            $this->description = $description;
        }

        public function getPrice(): float
        {
            return $this->price;
        }

        public function setPrice(float $price): void
        {
            if ($price > 0) {
                $this->price = $price;
            } else {
                echo "Invalid price" . "<br>";
            }
        }
    }