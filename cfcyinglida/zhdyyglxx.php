<?php session_start(); 
@header('Content-type: text/html;charset=utf-8');
include('newdb.php');
$yyid = $_GET['id'];
$html_title="指定医院详细";

$yangzhangid = $yyid;
if(strlen($yyid) == 1){
	$yangzhangid = "00".$yyid;
}else if(strlen($yyid) == 2){
	$yangzhangid = "0".$yyid;
}

include('spap_head.php');
?>
    <div class="main">
		<div class="insmain">
			<div class="thislink">当前位置：<a href="yshzyshqgl.php"><?php echo $html_title;?></a> </div>
			<div class="inwrap flt top">
				<div class="title w977 flt">
				<strong><?php echo $html_title;?></strong>
				</div>
				<div class="incontact w955 flt">
    <div class="form">
<?php        
  $sql = "select * from `yyyshdq` where `id`='".$yyid."'";
  $Query_ID = mysql_query($sql);
  while($Record = mysql_fetch_array($Query_ID)){
?>
        <div>
            <span class="label">医院名称：</span>
            <?php echo $Record[3];?>
            </div>
        <div>
            <span class="label">医院所在城市：</span><?php echo $Record[1].$Record[24].$Record[26];?></div>
        <div>
            <span class="label">医院地址：</span><?php echo $Record[20];?></div>
        <div>
            <span class="label">医院科室：</span><?php echo $Record[5];?></div>
        <div>
            <span class="label">指定医生：</span><?php echo $Record[6];?></div>
        <div>
            <span class="label">医生联系方式：</span><?php echo $Record[7];?></div>
        <div>
            <span class="label">医生联系方式2：</span><?php echo $Record[29];?></div>
        <div>
            <span class="label">医生电子邮箱：</span><?php echo $Record[30];?></div>
        <div>
            <span class="label">指定医生样章：</span>
            <span>
            <?php
            $q1 = "/qzyzh/".$yangzhangid."-1.jpg";
            if(file_exists(dirname(__FILE__).$q1))
            	echo  "<img width=\"105\" height=\"45\" src='$q1'/>";
            else 
            	echo "无";
            ?></span>
        </div>
        <div>
            <span class="label">指定医生签字：</span><?php
            $q2 = "/qzyzh/".$yangzhangid."-2.jpg";
            if(file_exists(dirname(__FILE__).$q2))
            	echo  "<img width=\"105\" height=\"45\" src='$q2'/>";
            	else
            	echo "无";
            ?>
            </div>
        <div>
            <span class="label">授权一医生：</span><?php echo $Record[9];?></div>
        <div>
            <span class="label">授权医生电子邮箱：</span><?php echo $Record[31];?></div>
        <div>
            <span class="label">授权一医生签字：</span>
            <?php
            $q8 = "/qzyzh/".$yangzhangid."-8.jpg";
            if(file_exists(dirname(__FILE__).$q8))
            	echo  "<img width=\"105\" height=\"45\" src='$q8'/>";
            	else
            	echo "无";
            ?>
			</div>
        <div>
            <span class="label">授权一联系方式：</span><?php echo $Record[11];?></div>
        <div>
            <span class="label">授权二医生：</span><?php echo $Record[12];?></div>
        <div>
            <span class="label">授权二医生签字：</span>
             <?php
            $q3 = "/qzyzh/".$yangzhangid."-3.jpg";
            if(file_exists(dirname(__FILE__).$q3))
            	echo  "<img width=\"105\" height=\"45\" src='$q3'/>";
            	else
            	echo "无";
            ?></div>
        <div>
            <span class="label">授权二联系方式：</span><?php echo $Record[14];?></div>
        <div>
            <span class="label">授权三医生：</span><?php echo $Record[15];?></div>
        <div>
            <span class="label">授权三医生签字：</span>
             <?php
            $q4 = "/qzyzh/".$yangzhangid."-4.jpg";
            if(file_exists(dirname(__FILE__).$q4))
            	echo  "<img width=\"105\" height=\"45\" src='$q4'/>";
            	else
            	echo "无";
            ?>
            </div>
        <div>
            <span class="label">授权三联系方式：</span><?php echo $Record[17];?></div>
        <div>
            <span class="label">医生培训期数：</span><?php echo $Record[18];?></div>
        <div>
            <span class="label">医生培训日期：</span><?php echo $Record[19];?></div>
        <div>
            <span class="label">医生是否生效：</span><?php if($Record[21]=='1'){echo "是";}else {echo "否";}?></div>
        <div>
            <span class="label">医院指定药房：</span>
            <?php 

/*$yfsql = "select yfmch,yfzhdysh,yfdh from `yf` where `id`='".$Record[22]."'";

$yfQuery_ID = mysql_query($yfsql);
while($yfRecord = mysql_fetch_array($yfQuery_ID)){
echo $yfRecord[0]." ".$yfRecord[1]." ".$yfRecord[2];
}*/
  			echo $Record[22];        
            ?></div>
        <div>
            <span class="label">是否接收AE回访：</span><?php if($Record[23]=='1'){echo "是";}else {echo "否";}?></div>
            
        <div class="btnPos">
            <input type="button"  onclick="javascript:{history.go(-1);}" value="返回" class="uusub" /></div>
<?php
  }
?>

    </div>

            <div class="clearFoot noPrint">
            </div>
        </div>
    </div></div></div>
    <div id="footerCon">
        <div id="foot">
            <div id="footNav">
                <div>
                    <div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
