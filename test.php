<body style="background-color: black; color:white; font-size:large">
    <h1>Haloooooooou65</h1>
    
</body>

<?php 
    class Inventory {
        public $products = [];
        public $name = null;
        public $quantities = null;
        public $price = null;

        public function __construct () {}
        public function  addProduct($name, $quantities, $price){
            $this->name = $name;
            $this->quantities = $quantities;
            $this->price = $price;

            foreach ($this->products as $key=> $value) {
                if($value['name'] === $this->name){
                    $this->updateInstead($key, $this->name, $this->quantities, $this->price);
                    return false;
                }
            }

            $this->products[] = [
                'name'=>$this->name,
                'quantities'=>$this->quantities,
                'price'=>$this->price,
            ];
            echo '<pre>';
            print_r($this->products);
            echo '<pre>';
        }

        public function removeProduct($name){
            $this->name = $name;

            foreach ($this->products as $key => $value) {
                if($value['name'] !== $this->name){
                    $this->products[$key] = $value;
                };
            }
            echo '<pre>';
            print_r($this->products);
            echo '<pre>';
        }

        public function updateInstead($key, $name, $quantities, $price){

            $this->products[$key] = [
                'name'=>$name,
                'quantities'=>$quantities,
                'price'=>$price,
            ];
            
            echo '<pre>';
            print_r($this->products);
            echo '<pre>';
        }

        public function updateQuantity($name, $quantities){
            $this->name = $name;
            $this->quantities = $quantities;

            foreach ($this->products as $key => $value) {
                if($value['name'] === $this->name){

                    $this->products[$key]['quantities'] = $this->quantities;
                }
            }
            
            echo '<pre>';
            print_r($this->products);
            echo '<pre>';
        }

        public function calculateTotalValue (){
            $result = [];
            foreach ($this->products as $value) {
                $result = $value['quantities'] * $value['price'];
            }

            $x=0;
            $total = 0;
            while($x < count($this->products)){
                $total += $result[$x];
                $x++;
            }

            echo '<pre>';
            print_r($total);
            echo '<pre>';
        }

        public function getAllProducts() {
            echo '<pre>';
            print_r($this->products);
            echo '<pre>';        
        }
    }

    $inventory = new Inventory();
    $inventory->addProduct('malika', 2, 2000);
    $inventory->addProduct('jodi', 2, 2000);
    $inventory->calculateTotalValue();
    // $inventory->addProduct('jodi', 4, 4000);
    // $inventory->updateQuantity('malika', 8);
    // $inventory->getAllProducts();




?>