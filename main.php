<?php
ob_start();
define('API_KEY','BOT_TOKEN');
   function del($nomi){
   array_map('unlink', glob("$nomi"));
   }

   function ty($ch){ 
   return bot('sendChatAction', [
   'chat_id' => $ch,
   'action' => 'typing',
   ]);
   }

function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}
  
$update = json_decode(file_get_contents('php://input'));
$admin = "922518741";
$message = $update->message;
$mid = $message->message_id;
$cid = $message->chat->id;
$type = $message->chat->type;
$botim = "Islom_VBot";
$tx = $message->text;
$text= $message->text;


$step = file_get_contents("Bot/$cid.step");
$name = $message->chat->first_name;


$fuser = $message->from->id;
$fid = $message->from->username;

$sooat = date("H",strtotime('2 hour'));
$minutt = date("i" , strtotime('2 hour'));


$okun=date("n");
$oynoms = "1Yanvar1 2Fevral2 3Mart3 4Aprel4 5May5 6Iyun6 7Iyul7 8Avgust8 9Sentabr9 10Oktabr10 11Noyabr11 12Dekabr12";
$ex2 = explode("$okun",$oynoms);
$oy = "$ex2[1]";
$kun = date("d",strtotime("2 hour"));
$soat = date("H:i:s",strtotime("2 hour"));
$yil = date('Y',strtotime('2 hour'));
$sana="📆 Hozir: $yil-Yil, $kun-$oy, $soat";


$rpl = json_encode([
    'resize_keyboard'=>false,
    'force_reply'=>true,
    'selective'=>true
     ]);
$reply = $message->reply_to_message->text;  


$duo=json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🕋Fotiha Surasi🕋"]],
[['text'=>"🕋Ihlos Surasi🕋"]],
[['text'=>"🔙Orqaga⬆"]],
]
]);



$asosiy=json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"☝Qabrdagi Savol-Javob☝"]],
[['text'=>"👳‍♂️Namoz Bo'limi👳‍♂️"],['text'=>"📜Kalimalar🧾"]],
[['text'=>"🤲🏻Duolar☝️"]],
[['text'=>"🕋Namoz Vaqtlari⌚️"],['text'=>"🦠Covid-19😷"]],
[['text'=>"🕋MA'RUZALAR🔊"]],
[['text'=>"🔱PANEL🔰"]],
]
]);

$maruza=json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"Qur’on o’qilganda ko’zidan yosh kelsa"]],
[['text'=>"Shaytonning hiylalari☝️"]],
[['text'=>"Jamoat bilan o'qilgan Bomdod namozi"]],
[['text'=>"Borar joyimiz bir"]],
[['text'=>"🔙Orqaga⬆"]],
]
]);

$key = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🕋BOMDOD🕋"],['text'=>"🕋PESHIN🕋"]],
[['text'=>"🕋ASR🕋"],['text'=>"🕋SHOM🕋"]],
[['text'=>"🕋XUFTON🕋"]],
[['text'=>"👏TAXORAT OLISH💦"]],
[['text'=>"😊StikkerLar😊"]],
[['text'=>"🔙Orqaga⬆"]],
]
]);

$panel = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"Adminga Xabar"]],
[['text'=>"🔙Orqaga⬆"]],
]
]);

$viloyat=json_encode([
    'resize_keyboard'=>true,
    'keyboard'=>[
        [['text'=>"Toshkent"],['text'=>"Jizzax"]],
        [['text'=>"Andijon"],['text'=>"Surxondaryo"]],
        [['text'=>"Namangan"],['text'=>"Qashqadaryo"]],
        [['text'=>"Farg'ona"],['text'=>"Navoiy"]],
        [['text'=>"Xorazm"],['text'=>"Samarqand"]],
        [['text'=>"Sirdaryo"],['text'=>"Buxoro"]],
       [["text"=>"🔙Orqaga⬆"]],
        ],
        ]);


mkdir("Bot");




$adminpanel = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"✍️Foydalanuvchilarga Xabar Yuborish"]],
[['text'=>"✍️Foydalanuvchilarga Forward Yuborish"]],
[['text'=>"🔰STATISTIKA♾"]],
[['text'=>"🔙Orqaga⬆"]],
]
]);



if($tx=="/start" and $type=="private"){
file_put_contents("Bot/stat.txt","Salom");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"👋*Assalomu alaykum va rohmatullohu va barakatuh😉 
➖➖➖➖➖➖➖➖➖➖➖➖➖➖
Siz Bu bot orqali namoz o'qishni o'rgana olasiz😊
➖➖➖➖➖➖➖➖➖➖➖➖➖➖
Endi bitta savob qilib botga 1 ta do'stingizni chaqiring🙁
➖➖➖➖➖➖➖➖➖➖➖➖➖➖
Balki u ham namoz o'qishni o'rganib olar🔰
➖➖➖➖➖➖➖➖➖➖➖➖➖➖
Savobi esa sizga bo'ladi😊*",
'parse_mode'=>'markdown',
'reply_markup'=>$asosiy,
]);
}


if($tx=="👳‍♂️Namoz Bo'limi👳‍♂️"){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"*💢Namoz bo'limiga xush kelibsiz!

👇Marhamat o'zingizga kerakli bo'limni tanlang☺️*",
'parse_mode'=>'markdown',
'reply_markup'=>$key,
]);
}



if($tx=="🔱PANEL🔰" and $cid==$admin){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"👨🏻‍💻Admin panelga xush kelibsiz!!",
'reply_markup'=>$adminpanel,
]);
}

If($tx=="🔱PANEL🔰" and $cid!=$admin){
Bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"Foydalanuvchi paneliga xush kelibsiz!",
'reply_markup'=>$panel,
]);
}

$lichka = file_get_contents("stat.txt");
if($type=="private"){
if(stripos($lichka,"$cid") !==false){
}else{
file_put_contents("stat.txt","$lichka\n$cid");
}
}
if($tx=="🔰STATISTIKA♾" and $cid==$admin){
$lich = substr_count($lichka,"\n");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"*🔰Foydalanuvchilar $lich ta

👇Userlar👇

$lichka*",
'parse_mode'=>'markdown',
]);
}

if($tx=="✍️Foydalanuvchilarga Xabar Yuborish" and $cid==$admin){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"Xabaringizni yozing",
]);
file_put_contents("Bot/$cid.step","xabar");
}

if($step=="xabar" and $cid==$admin){
$userlar = explode("\n",$lichka);
foreach($userlar as $users){
$xabarok=bot('sendmessage',[
'chat_id'=>$users,
'text'=>$text,
]);
}
if($xabarok){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"Xabar yetkazildi",
]);
file_put_contents("Bot/$cid.step","");
}
}

if($tx=="✍️Foydalanuvchilarga Forward Yuborish" and $cid==$admin){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"Xabaringizni Yozing.Men Uni Forward Qilib Hammaga yuboraman!!",
]);
file_put_contents("Bot/$cid.step","forward");
}

if($step=="forward" and $cid==$admin){
$userlar = explode("\n",$lichka);
foreach($userlar as $users){
$xabarok=bot('ForwardMessage',[
'chat_id'=>$users,
'from_chat_id'=>$cid,
'message_id'=>$mid,
]);
}
if($xabarok){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"Xabar yetkazildi",
]);
file_put_contents("Bot/$cid.step","");
}
}





If($tx=="🕋BOMDOD🕋"){
bot('sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/namozdarsi/14",
'caption'=>"😇Mana bomdod namozini o'qish videodarsi.

👳‍♂Erkaklar uchun 

@$botim",
'reply_markup'=>$key,
]);
bot('sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/namozdarsi/13",
'caption'=>"😇Mana bomdod namozini o'qish videodarsi.

🧕Ayollar uchun

@$botim",
'reply_markup'=>$key,
]);
}


If($tx=="🕋PESHIN🕋"){
bot('sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/namozdarsi/12",
'caption'=>"😇Mana peshin namozini o'qish videodarsi.

👳‍♂Erkaklar uchun 

@$botim",
'reply_markup'=>$key,
]);
bot('sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/namozdarsi/11",
'caption'=>"😇Mana peshin namozini o'qish videodarsi.

🧕Ayollar uchun 

@$botim",
'reply_markup'=>$key,
]);
}



If($tx=="🕋ASR🕋"){
bot('sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/namozdarsi/10",
'caption'=>"😇Mana asr namozini o'qish videodarsi.

👳‍♂Erkaklar uchun 

@$botim",
'reply_markup'=>$key,
]);
bot('sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/namozdarsi/9",
'caption'=>"😇Mana asr namozini o'qish videodarsi.

🧕Ayollar uchun 

@$botim",
'reply_markup'=>$key,
]);
}


If($tx=="🕋SHOM🕋"){
bot('sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/namozdarsi/8",
'caption'=>"😇Mana shom namozini o'qish videodarsi.

👳‍♂Erkaklar uchun 

@$botim",
'reply_markup'=>$key,
]);
bot('sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/namozdarsi/7",
'caption'=>"😇Mana shom namozini o'qish videodarsi.

🧕Ayollar uchun 

@$botim",
'reply_markup'=>$key,
]);
}


If($tx=="🕋XUFTON🕋"){
bot('sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/namozdarsi/6",
'caption'=>"😇Mana xufton namozini o'qish videodarsi.

👳‍♂Erkaklar uchun

@$botim",
'reply_markup'=>$key,
]);
Bot('sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/namozdarsi/5",
'caption'=>"😇Mana xufton namozini o'qish videodarsi.

🧕Ayollar uchun",
'reply_markup'=>$key,
]);
}


If($tx=="👏TAXORAT OLISH💦"){
bot('sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/namozdarsi/15",
'caption'=>"😇Mana taxorat olish videodarsi.

@$botim",
'reply_markup'=>$key,
]);
}

If($tx=="😊StikkerLar😊"){
bot('sendsticker',[
'chat_id'=>$cid,
'sticker'=>"https://t.me/namozdarsi/19",
'reply_markup'=>$key,
]);
}





if($tx=="🤲🏻Duolar☝️"){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"*Marhamat kerakli Duoni tanlang*",
'parse_mode'=>'markdown',
'reply_markup'=>$duo,
]);
}


If($tx=="🔙Orqaga⬆"){
Bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"*Bosh menyuga qaytdik😉*",
'parse_mode'=>'markdown',
'reply_markup'=>$asosiy,
]);
}



If($tx=="🕋Fotiha Surasi🕋"){
Bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"(بِسۡمِ ٱللَّهِ ٱلرَّحۡمَـٰنِ ٱلرَّحِیمِ ۝  ٱلۡحَمۡدُ لِلَّهِ رَبِّ ٱلۡعَـٰلَمِینَ ۝  ٱلرَّحۡمَـٰنِ ٱلرَّحِیمِ ۝  مَـٰلِكِ یَوۡمِ ٱلدِّینِ ۝  إِیَّاكَ نَعۡبُدُ وَإِیَّاكَ نَسۡتَعِینُ ۝  ٱهۡدِنَا ٱلصِّرَ ٰ⁠طَ ٱلۡمُسۡتَقِیمَ ۝  صِرَ ٰ⁠طَ ٱلَّذِینَ أَنۡعَمۡتَ عَلَیۡهِمۡ غَیۡرِ ٱلۡمَغۡضُوبِ عَلَیۡهِمۡ وَلَا ٱلضَّاۤلِّینَ)
*[Fotiha surasi 1 - 7]
ФОТИҲА СУРАСИ

Аъузу биллаҳи минаш шайтонир рожийм. 
Бисмиллаҳир роҳманир роҳийм.

 1. Алҳамдулиллаҳи роббил ъаламийн.
2.  Ар-роҳманир роҳийм. 
3. Малики явмиддин. 
4. Иййака наъбуду ва иййака настаъийн. 
5. Иҳдинас сиротал мустақим. 
6.7. Сиротоллазийна анъамта ъалайҳим ғойрил мағзуби ълайҳим валлаззоллийн.

Меҳрибон ва раҳмли Аллоҳнинг номи ила бошлайман.

1. Ҳамд оламларнинг Робби – Аллоҳгадир.
2. У Роҳман ва Роҳиймдир.
3. Жазо-мукофот кунининг эгасидир.
4. Фақат Сенгагина ибодат қиламиз ва фақат Сендангина ёрдам сўраймиз.
5. Бизни тўғри йўлга ҳидоят қилгин.
6-7. Ўзинг неъмат берганларнинг йўлига. Ғазабга қолганларникига ҳам эмас, адашганларникига ҳам эмас.

@$botim
#01 sura*",
'parse_mode'=>'markdown',
'reply_markup'=>$duo,
]);
}

If($tx=="📜Kalimalar🧾"){
Bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"*kalimalar*",
'parse_mode'=>'markodwn',
'reply_markup'=>$asosiy,
]);
}


If($tx=="📜Kalimalar🧾"){
Bot('sendmessage',[
'chat_id'=>$cid,
'text'=>" *
1. Kalimai toyyiba



La ilaha illallohu Muhammadur rosululloh.



To‘g‘ri so‘z: Allohdan o‘zga sig‘iniladigan (iloh) yo‘qdir! Muhammad Allohning rasulidir! 



2. Kalimai shahodat



Ashhadu alla ilaha illallohu va ashhadu anna Muhammadan ‘abduhu va rosuluh.



Iqrorlik so‘zi: Allohdan o‘zga sig‘iniladigan (iloh)ning yo‘qligiga va Muhammad Allohning bandasi va rasuli ekaniga iqrorman. 



3. Kalimai tavhid



Ashhadu alla ilaha illallohu vahdahu la sharika lah, lahul mulku va lahul hamd(u) yuhyi va yumit(u) va huva hayyul la yamut(u), biyadihil xoyr(u) va huva ‘ala kulli shayin qodir.



Tanholigiga iqrorlik so‘zi: Tanho Allohdan o‘zga sig‘iniladigan (iloh) yo‘qligiga iqrorman! Allohning sherigi yo‘qdir. Mulk Allohnikidir. Maqtov Allohgadir. (Alloh) tiriltiradi va o‘ldiradi. Ammo O‘zi tirikdir, o‘lmaydi. Yaxshilik Uning ixtiyoridadir va U hamma narsaga qodirdir! 



4. Kalimai raddi kufr



Allohumma inni a’uzu bika min an ushrika bika shayan va ana a’lam. Va astag‘firuka lima la a’lam. Innaka anta ‘allamul g‘uyub.



Kufrni qaytarish so‘zi: Allohim, Sendan o‘zim bilganim holda Senga biror narsani sherik qilishimdan asrashingni so‘rayman. Sendan o‘zim bilmaganim holda shirk qilib qo‘ygan bo‘lsam, kechishingni tilayman. Albatta, Sen g‘ayblarni bilguvchi Zotsan. 



5. Kalimai istig‘for



Astag‘firulloh, astag‘firulloh, astag‘firulloha ta’ala min kulli zambin aznabtuhu ‘amdan av xotoan sirron va ‘alaniyah. Va atubu ilayhi minaz zambillazi a’lamu va minaz-zambillazi la a’lam. Innaka anta ‘allamul g‘uyub.



Gunohlarni kechishini so‘rash so‘zi: Allohdan gunohlarimni kechishini so‘rayman. Allohdan gunohlarimni kechishini so‘rayman. Alloh taolodan ataylab yo adashib, yashirin yo oshkora qilgan hamma gunohlarimni kechishini so‘rayman. O‘zim bilgan va bilmagan gunohlardan Allohga qaytaman. Albatta, Sen g‘ayblarni bilguchi Zotsan. 



6. Kalimai tamjid



Subhanalloh val hamdu lillah va la ilaha illallohu vallohu akbar. La havla va la quvvata illa billahil ‘aliyyil ‘azim. Ma shaallohu kana va ma lam yashalam yakun.



Ulug‘lash so‘zi: Allohning aybu nuqsoni yo‘qdir. Va maqtov Allohgadir. Allohdan o‘zga sig‘iniladigan (iloh) yo‘qdir! Alloh ulug‘dir. Mutloq kuch va quvvat qudratli va buyuk Allohdan o‘zgada yo‘qdir. Alloh nimaniki xohlasa, bo‘ladi, nimaniki xohlamasa, bo‘lmaydi.

Iymoni mujmal 



Amantu billahi kama huva bi asma’ihi va sifatihi va qobiltu jamiy’a ahkamihi va arkanihi.



Allohni ismi va sifatlari bilan tanidim va barcha buyurgan hukmlarini qabul qildim.



Iymoni mufassal 



Amantu billahi va malaikatihi va kutubihi va rusulihi val yavmil axiri val qodari xoyrihi va sharrihi minallohi ta’ala val ba’si ba’dal mavt.



Mo‘minlikning batafsil ifodasi: Allohga, Uning farishtalariga, kitoblariga, rasullariga, oxirat kuniga, yaxshilik va yomonlik Allohning xohishi bilan bo‘lishiga va o‘limdan keyin qayta tirilishga ishondim*",
'parse_mode'=>'markdown',
'reply_markup'=>$asosiy,
]);
}



If($tx=="☝Qabrdagi Savol-Javob☝"){
Bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"*Qabrdagi Savol-Javob👇


1-savol:  Robbing kim? 

Javobi:     Robbim Alloh. 

2-savol:   Dining qaysi? 

Javobi:     Dinim islom.

3-savol:   Payg‘ambaring kim? 

Javobi:     Payg‘ambarimiz Muhammad sollallohu alayhi vasallam.




@$botim*",
'parse_mode'=>'markdown',
'reply_markup'=>$asosiy,
]);
}




if($tx=="🕋Namoz Vaqtlari⌚️"){
$nv = file_get_contents("https://islom.uz/");
$ex = explode("\n",$nv);

$a = trim($ex[397]);
$tong = str_replace("<div id='tc1' class='p_clock '><b>","",$a);
$tong = str_replace("<div id='tc1' class='p_clock c_active'><b>","",$tong);
$b = trim($ex[419]);

$asr = str_replace("<div id='tc4' class='p_clock '><b>","",$b);
$asr = str_replace("<div id='tc4' class='p_clock c_active'><b>","",$asr);
$d = trim($ex[426]);

$shom = str_replace("<div id='tc5' class='p_clock '><b>","",$d);
$shom = str_replace("<div id='tc5' class='p_clock c_active'><b>","",$shom);
$e = trim($ex[433]);
$xufton = str_replace("<div id='tc6' class='p_clock c_active'><b>","",$e);
$xufton = str_replace("<div id='tc6' class='p_clock '><b>","",$xufton);
$f = trim($ex[405]);

$quyosh = str_replace("<div id='tc2' class='p_clock '><b>","",$f);
$quyosh = str_replace("<div id='tc2' class='p_clock c_active'><b>","",$quyosh);
$g = trim($ex[412]);
$peshin = str_replace("<div id='tc3' class='p_clock '><b>","",$g);
$peshin = str_replace("<div id='tc3' class='p_clock c_active'><b>","",$peshin);
$tong = str_replace("</b></div>","",$tong);

$quyosh = str_replace("</b></div>","",$quyosh);
$asr = str_replace("</b></div>","",$asr);
$peshin = str_replace("</b></div>","",$peshin);
$shom = str_replace("</b></div>","",$shom);
$xufton = str_replace("</b></div>","",$xufton);

bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"*
🕌 Namoz Vaqtlari:

➖➖➖➖➖➖➖➖➖➖➖➖➖➖

📛 Eslatma: Bu vaqtlar - _Toshkent_ namoz vaqtlari!
*
➖➖➖➖➖➖➖➖➖➖➖➖➖➖

🕋 *Bomdod:* $tong
🕋 *Quyosh:* $quyosh
🕋 *Peshin:* $peshin
🕋* Asr:* $asr
🕋* Shom:* $shom
🕋 *Xufton:* $xufton

➖➖➖➖➖➖➖➖➖➖➖➖➖➖

*$sana

➖➖➖➖➖➖➖➖➖➖➖➖➖➖
@$botim*
",
'parse_mode'=>'markdown',
'reply_markup'=>$asosiy,
]);
}




if($tx=="🦠Covid-19😷"){
$soat=date("H:i",strtotime("2 hour"));

$stat = file_get_contents("https://m.aniq.uz/statistika/uzbekiston-coronavirus");
$ex1=explode("\n",$stat);

$kasal=str_replace('<td class="confirm head-data">',' ',$ex1[179]);  
$kasal=str_replace('</td>',' ',$kasal);
$kasal = trim($kasal);

///kasallarga qowilgan
$davo=str_replace('<td class="treated head-data">',' ',$ex1[184]);  
$davo=str_replace('</td>',' ',$davo);
$davo = trim($davo);

//sogayganlar
$sog=str_replace('<td class="recover head-data">',' ',$ex1[189]);  
$sog=str_replace('</td>',' ',$sog);
$sog = trim($sog);

//o'lganlar
$olim=str_replace('<td class="death head-data">',' ',$ex1[194]);  
$olim=str_replace('</td>',' ',$olim);
$olim = trim($olim);
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"*
🇺🇿O'zbekiston Bo'yicha Koronavirus Statistikasi:

➖➖➖➖➖➖➖➖➖➖➖➖➖➖

📅$kun-$oy, Holatiga ko'ra

➖➖➖➖➖➖➖➖➖➖➖➖➖➖

🇺🇿Uzbekistan🇺🇿
🤒Kasallanganlar: $kasal
🛏Davolanayotganlar: $davo
😷Sog'ayganlar: $sog
☠O'lganlar: $olim
➖➖➖➖➖➖➖➖➖➖➖➖➖➖


$sana

➖➖➖➖➖➖➖➖➖➖➖➖➖➖

@$botim*
",
'parse_mode'=>'markdown',
'reply_markup'=>$asosiy,
]);
}




If($tx=="🕋Ihlos Surasi🕋"){
Bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"*Кул хуваллоху ахад оллоху Самат лам ялид ва лам ювлад ва лам юкуллаху куфуфан ахад


@$botim*",
'parse_mode'=>'markdown',
'reply_markup'=>$duo,
]);
}

if($tx=="/dev"){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"*Bot developeri: @git7i 

Yangilikllar: @git7i_blog*",
'parse_mode'=>'markdown',
'reply_markup'=>$asosiy,
]);
}


If($tx=="🕋MA'RUZALAR🔊"){
Bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"*Marhamat ma'ruzalar toʻplami👇*",
'parse_mode'=>'markdown',
'reply_markup'=>$maruza,
]);
}


if($tx=="Qur’on o’qilganda ko’zidan yosh kelsa"){
bot('sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/NAMOZ/3072",
'caption'=>"Qur'on o'qiganda ko'ziga yosh kelsa!

Yangiliklar: ",
]);
}




if($tx=="Shaytonning hiylalari☝️"){
bot('sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/NAMOZ/3071",
'caption'=>"Shaytonning hiylalari☝️

Yangiliklar: ",
]);
}

//Jamoat bilan o'qilgan Bomdod namozi


if($tx=="Jamoat bilan o'qilgan Bomdod namozi"){
bot('sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/NAMOZ/3068",
'caption'=>"Jamoat bilan o'qilgan Bomdod namozi

Yangiliklar: ",
]);
}

//Borar joyimiz bir

if($tx=="Borar joyimiz bir"){
bot('sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/NAMOZ/3073",
'caption'=>"Borar joyimiz bir!

Unutmaylik!

Yangiliklar: ",
]);
}




if($tx=="Adminga Xabar"){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"Xabaringizni yozing men uni adminga yuboraman!",
'reply_markup'=>$rpl,
]);
}

if($reply=="Xabaringizni yozing men uni adminga yuboraman!"){
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"Xabar [$fuser](tg://user?id=$fuser) , * @$fid * dan 

$tx",
'parse_mode'=>'markdown',
]);
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"Xabaringiz adminga yuborildi!

Tez orada javob olasiz🙂",
'reply_markup'=>$panel,
]);
}





if(mb_stripos($tx,"/sms") !== false){
$ex = explode(" ",$tx);
$sms = str_replace("/sms $ex[1]","",$tx);
$ismi = $message->from->first_name;

if(mb_stripos($ex[1],"@") !== false){
$ssl = str_replace("@","",$ex[1]);
$egasi = "t.me/$ssl";
}else{
$egasi = "tg://user?id=$ex[1]";
$eegasi = "$ex[1]";
}
bot('sendmessage',[
'chat_id'=>$ex[1],
'text'=>"📨 Yangi Habar

👤Kimdan: [$ismi](tg://user?id=$uid)

💌Habar: $sms

📆 $sana 🔸 $soat 🕰",
'parse_mode'=>"markdown", 
]);
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"👤[Foydalanuvchi]($egasi)ga Habaringiz Yuborildi📩",
'parse_mode'=>"markdown", 
]);
}
