<?php

use PHPUnit\Framework\TestCase;

class OperationsTest extends TestCase
{

    private $op;

    public function setup(): void
    {
        $this->op = new CalculatePrice();
    }
    public function testacod()
    {
        #introduce the number phone 
        $Number = "1131721";
        #Company and list of prefix and price
        $CompanyA= array(
            ["2",13], 
            ["113",0.15], 
            ["113",0.12],
            ["1",0.10],
            ["20",0.9], 
            ["25",0.08], 
            ["23",0.07],
            ["28",0.06], 
            ["007",0.05], 
            ["008",0.05], 
            ["18",0.03],
            ["17",0.03], 
            ["16",0.02], 
            ["15",0.01], 
            ["13",1],
            ["29",2], 
            ["295",3], 
            ["298",4], 
            ["1131",1.50],
            ["27",5.6], 
            ["37",0.5], 
            ["991",0.7], 
            ["992",0.8],
            ["993",0.10], 
            ["593",0.01], 
            ["592",1.5], 
            ["82",1.6],
            ["62",1.7], 
            ["1",1.9], 
            ["205",1], 
            ["556",2.1],
            ["64",0.15], 
            ["332",0.35], 
            ["221",0.33], 
            ["1112",0.34],
            ["17",0.35], 
            ["16",0.60], 
            ["15",0.61],   
            );
        $CompanyB= array( 
            ["1",0.9], 
            ["13",0.10], 
            ["11",1.51],
            ["20",0.11],
            ["25",0.12], 
            ["11",0.70], 
            ["62",0.14],
            ["593",0.15], 
            ["22",0.16], 
            ["33",0.17], 
            ["21",0.18],
            ["54",0.20], 
            ["59",0.60], 
            ["58",1], 
            ["57",2],
            ["224",3], 
            ["223",4], 
            ["221",5], 
            ["220",1.2],
            ["100",1.3], 
            ["101",1.5], 
            ["102",0.01], 
            ["103",0.02],
            ["104",0.03], 
            ["005",0.04], 
            ["006",0.05], 
            ["007",0.06],
            ["594",5], 
            ["332",3], 
            ["333",3], 
            ["339",1],
            ["55",2], 
            ["57",1], 
            ["5578",1], 
            ["555",1],
            ["112",0.01], 
            ["110",1.2],     
            );
            #first parameter is a result expected and the second is a executed function
            $this->assertEquals(1.50, $this->op->main($Number,$CompanyA,$CompanyB));

    }

}