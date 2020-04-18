<?php

$ch = curl_init();

curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

curl_setopt($ch, CURLOPT_URL,"https://covid19.th-stat.com/api/open/today");

$result=curl_exec($ch);

curl_close($ch);

$dataApiCovid= json_decode($result, true);

// print_r($DATA);

$int_Confirmed = $dataApiCovid['Confirmed'] ;
$int_Recovered = $dataApiCovid['Recovered'] ;
$int_Hospitalized = $dataApiCovid['Hospitalized'] ;
$int_Deaths = $dataApiCovid['Deaths'] ;
$int_NewConfirmed = $dataApiCovid['NewConfirmed'] ;
$int_NewRecovered = $dataApiCovid['NewRecovered'] ;
$int_NewHospitalized = $dataApiCovid['NewHospitalized'] ;
$int_NewDeaths = $dataApiCovid['NewDeaths'] ;
$int_UpdateDate = $dataApiCovid['UpdateDate'] ;


function DateThai($strDate)
	{
        $strDay= date("n",strtotime($strDate));
        $strMonth= date("j",strtotime($strDate));
		$strYear = date("Y",strtotime($strDate))+543;
		$strHour= date("H",strtotime($strDate));
		$strMinute= date("i",strtotime($strDate));
		$strSeconds= date("s",strtotime($strDate));
		$strMonthCut = Array("","มกราคม ","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม ","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
		$strMonthThai=$strMonthCut[$strMonth];
		return "$strDay $strMonthThai $strYear $strHour:$strMinute";
	}
    $strDate = $int_UpdateDate;
?>