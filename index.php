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
    public int $productCount;
    public int $productPrice;
    public int $insertedCoins = 0;
    public int $returnCoins = 0;
    public int $bank;

    public function _construct(int $productCount,int $productPrice,int $bank)
    {$this->productCount = $productCount; $this->productPrice = $productPrice; $this->bank = $bank;}
    
    public function insertCoin(int $Coin)
    {   $this->insertedCoins += $Coin;
        if ($this->productCount >= 1 )
        {
          if ($this->insertedCoins >= $this->productPrice) {  
            $this->productCount--;
            $this->makeOrder();
          } 
          else {echo "socko";}
        }
        else {echo "bagety nejsou";}
    }
    
    public function makeOrder()
    {
     if ($this->insertedCoins > $this->productPrice) 
     {
        $this->returnCoins = $this->insertedCoins - $this->productPrice;
         
         if($this->bank > $this->returnCoins ){echo "tady je vaše bageta +". $this->returnCoins. "kč"; $this->bank-=$this->returnCoins;}
         else {echo "nemame na vraceni".$this->returnCoins ."kč SMŮLA :)";}
     }
     else {echo "tady je vaše bageta";} 
    }
}

$purchase1  = new Bagetomat(5,50,100);

try
{$purchase1->insertCoin(60);}
catch (\Throwable $th) {
    echo  $th->getMessage();}
?>
</body>
</html>
