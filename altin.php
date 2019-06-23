<?php 
//APİ Coded By Hasan Atilan
 
$kullanici = new SoapClient('http://data.altinkaynak.com/DataService.asmx?WSDL');  
 
$giris = new stdClass();  
$giris->Username = 'AltinkaynakWebServis';  
$giris->Password = 'AltinkaynakWebServis';  
 
$yolla = new SoapHeader('http://data.altinkaynak.com/', 'AuthHeader', $giris, false);  
$kullanici->__setSoapHeaders($yolla);  
 
$sonuc = $kullanici->GetGold();  
 
$verial = simplexml_load_string($sonuc->GetGoldResult);  
 
 
$gramaltin = $verial->Kur[19]->Satis; 
$ceyrekaltin = $verial->Kur[12]->Satis;
$yarimaltin = $verial->Kur[13]->Satis;
$ondortayaraltin = $verial->Kur[11]->Satis;
$onsekizayaraltin = $verial->Kur[10]->Satis;
$yirmiikiayarbilezik = $verial->Kur[9]->Satis;
$gramsealtin = $verial->Kur[15]->Satis;
$hamitaltin = $verial->Kur[18]->Satis;
$gumus = $verial->Kur[8]->Satis;
 
 
echo' 
<table width="80%" border="0" cellspacing="1" cellpadding="1" class="doviz" align="right"> 
<tr> 
<td><strong>Gram Altın</strong></td> 
<td>&nbsp;</td> 
<td>Satis:'.$gramaltin.'</td> 
</tr> 
<tr> 
<td><strong>Ceyrek Altın</strong></td> 
<td>&nbsp;</td> 
<td>Satis:'.$ceyrekaltin.'</td> 
</tr> 
<tr> 
<td><strong>Yarım Altın</strong></td> 
<td>&nbsp;</td> 
<td>Satis:'.$yarimaltin.'</td> 
</tr> 
<tr> 
<td><strong>14 ayar Altın</strong></td> 
<td>&nbsp;</td> 
<td>Satis:'.$ondortayaraltin.' </td> 
</tr> 
<tr> 
<td><strong>18 ayar Altın</strong></td> 
<td>&nbsp;</td> 
<td>Satis: '.$onsekizayaraltin.' </td> 
</tr> 
<tr> 
<td><strong>22 ayar Bilezik</strong></td> 
<td>&nbsp;</td> 
<td>Satis: '.$yirmiikiayarbilezik.'</td> 
</tr> 
<tr> 
<td><strong>Gramse Altın</strong></td> 
<td>&nbsp;</td> 
<td>Satis: '.$gramsealtin.' </td> 
</tr> 
<tr> 
<td><strong>Hamit Altın</strong></td> 
<td>&nbsp;</td> 
<td>Satis: '.$hamitaltin.' </td> 
</tr> 
<tr> 
<td><strong>Gümüs Satım </strong></td> 
<td>&nbsp;</td> 
<td>Satis: '.$gumus.'</td> 
</tr> 
</table> 
'; 
 
 
 
?>
    
