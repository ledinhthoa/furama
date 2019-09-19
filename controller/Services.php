<?php


 abstract class dich_vu
 {
     private $dientich;
     private $soluongnguoitoida;
     private $tendichvu;
    private $kieuthue;

     /**
      * @return mixed
      */
     abstract public  function showInfor();



}
class villa extends dich_vu {
     private $tieuchuanphong;
     private $tiennghi;
     private $dientichhoboi;
     private $sotang;
     public function showInfor()
     {
         echo 'so tang villa'.$this->sotang;
         // TODO: Implement showInfor() method.
     }


}
class house extends dich_vu{

    private $tieuchuanphong;
    private $tiennghi;
    private $sotang;
    public function showInfor()
    {
        echo 'so tang house'.$this->sotang;
        // TODO: Implement showInfor() method.
    }

}
class romms extends dich_vu{

     private $dichvudikem;
     public function showInfor()
     {
         echo 'dich vu mien phi rooms'.$this->dichvudikem;
         // TODO: Implement showInfor() method.
     }

}
