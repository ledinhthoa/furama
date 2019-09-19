<?php
namespace model;

class loaidichvu
{

//    public  $loaidichvu_id;
    public  $tenloaidv;
    public $soloaidv;

    public function __construct($tenloaidv, $soloaidv)
    {

        $this->tenloaidv = $tenloaidv;
        $this->soloaidv = $soloaidv;
    }
}
