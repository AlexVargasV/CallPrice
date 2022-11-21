<?php 
    #introduce the number phone 
    $Number = "00889";
    #Company and list of prefix and price
    $CompanyA= array(
        ["221",1], 
        ["0.12",0.25], 
        ["008",070], 
        ["46",0.17], 
        ["4620",0.0], 
        ["468",0.15],
        ["4631",0.15],
        ["4673",0.9],
        ["46732",1.1],
        ["69",789],
        ["123",89],
        );
    $CompanyB= array( 
        ["1",0.92], 
        ["44",0.5], 
        ["46",0.2], 
        ["467",1.0], 
        ["48",1.2],
        );

    
    //Calculate the price for company;
    function Calculate($Number,$Company)
    {
        if($Number != NULL && $Company!= NULL)
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
    function main ($Number,$CompanyA,$CompanyB)
    {
        #take the price 
        $PriceA = Calculate($Number,$CompanyA);
        $PriceB = Calculate($Number,$CompanyB);
        #comparate the prices
        if($PriceA == NULL && $PriceB ==! NULL)
        {
            echo("Number:".$Number." More Cheapest for this Number is the B Operator :".$PriceB);
        }
        if($PriceB == NULL && $PriceA =! NULL)
        {
            echo("Number:".$Number." More Cheapest for this Number is the A Operator :".$PriceA);
        }
        if($PriceA < $PriceB && $PriceA != NULL)
        {
            echo("Number:".$Number." More Cheapest for this Number is the A Operator :".$PriceA);
        }
        if($PriceB < $PriceA && $PriceB != NULL)
        {
            echo("Number:".$Number." More Cheapest for this Number is the B Operator :".$PriceB);
        }
        if($PriceA!= NULL && $PriceB != NULL)
        {
            if($PriceA = $PriceB)
            {
                echo("Number:".$Number." is the same price betweb company A and B :".$PriceA." ".$PriceB);
            }
        }

    }

main($Number,$CompanyB,$CompanyB);

#Developer: Alexander Vargas Villagomez
?>