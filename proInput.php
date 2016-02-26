<?php
include "config/connect.php";
function addMhs($nim,$nama,$sem,$no_hp)
{
    global $connect;
    $sql = "insert into mahasiswa values('$nim','$nama','$sem','$no_hp')";
    $que = $connect->prepare($sql);
    
    $queex= $que->execute();
    if ($queex)
    {
        return true;
    }else{
        return false;
    }
}

function addKhs($nim,$data,$date)
{
    global $connect;
    $sql = "insert into req_khs values('','$nim','$data','$date','0')";
    $que = $connect->prepare($sql);
    $queex= $que->execute();
    if ($queex)
    {
        return true;
    }else{
        return false;
    }
}

function addTNS($nim,$sem,$alasan,$date)
{
    global $connect;
    $sql = "insert into req_tns values('','$nim','$sem','$alasan','$date','0')";
    $que = $connect->prepare($sql);
    $queex= $que->execute();
    if ($queex)
    {
        return true;
    }else{
        return false;
    }
}

function addTNA($nim,$sem,$date,$tgl_sidang,$no_ijazah,$tgl_ijazah,$judul,$judul_en)
{
    global $connect;
    $sql = "insert into reg_tna values('','$nim','$sem','$date',$tgl_sidang','$no_ijazah','$tgl_ijazah','$judul','$judul_en')";
    $que = $connect->prepare($sql);
    $queex= $que->execute();
    if ($queex)
    {
        return true;
    }else{
        return false;
    }
    
}

