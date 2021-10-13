<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width={device-width}, initial-scale=1.0">
    <title>Bagetomat</title>
</head>
<body>
<?php
class Bagetomat 
{
    private int $productCount;
    private int $productPrice;
    private int $insertedCoins;
    private int $returnCoins;
    
    public function constructor__(int $productCount,int $productPrice,int $returnCoins)
    {$this->productCount = $productCount; $this->productPrice = $productPrice;$this->returnCoins = $returnCoins;}
    
    public function insertCoin(int $insertedCoins)
    {   $this->insertedCoins = $insertedCoins;
        if ($insertedCoins >= $this->productPrice) {  
        $this->productCount--;
        $this->makeOrder();
        } 
     else {echo "socko";}
    }
    
    public function makeOrder()
    {
     if ($this->insertedCoins > $this->productPrice) {
        $this->returnCoins = $this->insertedCoins - $this->productPrice;
        echo "tady je vaše bageta +". $this->returnCoins. "kč";}
     else {echo "tady je vaše bageta";} 
    }
}

$purchase1  = new Bagetomat(1, 50, 0);
try
{$purchase1->insertCoin(60);}
catch (\Throwable $th) {
    echo "error:" . $th->getMessage();}

?>
</body>
</html>