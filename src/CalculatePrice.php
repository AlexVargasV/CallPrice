
<?php

class CalculatePrice
{   


    public function __construct()
    {
    }

    //Calculate the price for company;
    public function main ($Number,$CompanyA,$CompanyB)
    {
        function Calculate($Number,$Company)
        {
            if($Number != NULL && $Company != NULL)
            {
                $lenght = 0;
                $price = 0;
                $flag = false;
                for($i = 0; $i< sizeof($Company); $i++)
                {
                    
                    $size =strlen($Company[$i][0]);
                    $CutNumber = substr ( $Number, 0, $size);
                    if($CutNumber == $Company[$i][0] && $lenght<$size)
                    {
                        $flag = true;
                        $price = $Company[$i][1] ;
                        $lenght = $size;
                    }
                }
                if($flag == false)
                {
                    $price = '';
                }
                
                return $price;
            }

            
        }
        #take the price 
        $PriceA = Calculate($Number,$CompanyA);
        $PriceB = Calculate($Number,$CompanyB);
        if($PriceA == NULL && $PriceB ==! NULL)
        {
            return $PriceB;
        }
        if($PriceB == NULL && $PriceA ==! NULL)
        {
            return $PriceA;
        }
        #comparate the prices
        if($PriceA < $PriceB)
        {
            //echo("Number:".$Number." More Cheapest for this Number is the A Operator :".$PriceA);
            return $PriceA;
        }
        if($PriceB < $PriceA)
        {
            //echo("Number:".$Number." More Cheapest for this Number is the B Operator :".$PriceB);
            return $PriceB;
        }
        if($PriceA = $PriceB)
        {
            return $PriceA;
        }
    }


#Developer: Alexander Vargas 
}
