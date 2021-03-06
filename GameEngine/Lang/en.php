﻿<?php

//MENU
define("REG","ثبت نام");
define("FORUM","انجمن");
define("CHAT","چت");
// define("IMPRINT","Imprint");
define("MORE_LINKS","More Links");
define("TOUR","Game Tour");


//ERRORS
define("USRNM_EMPTY","(Username empty)");
define("USRNM_TAKEN","(Name is already in use.)");
define("USRNM_SHORT","(min. ".USRNM_MIN_LENGTH." figures)");
define("USRNM_CHAR","(Invalid Characters)");
define("PW_EMPTY","(Password empty)");
define("PW_SHORT","(min. ".PW_MIN_LENGTH." figures)");
define("PW_INSECURE","(Password insecure. Please choose a more secure one.)");
define("EMAIL_EMPTY","(Email Empty)");
define("EMAIL_INVALID","(Invalid email address)");
define("EMAIL_TAKEN","(Email is already in use)");
define("TRIBE_EMPTY","<li>Please choose a tribe.</li>");
define("AGREE_ERROR","<li>You have to agree to the game rules and the general terms & conditions in order to register.</li>");
define("LOGIN_USR_EMPTY","Enter name.");
define("LOGIN_PASS_EMPTY","Enter password.");
define("EMAIL_ERROR","Email does not match existing");
define("PASS_MISMATCH","Passwords do not match");
define("ALLI_OWNER","Please appoint an alliance owner before deleting");
define("SIT_ERROR","Sitter already set");
define("USR_NT_FOUND","Name does not exist.");
define("WEL_TOPIC","Useful tips & information ");
define("ATAG_EMPTY","Tag empty");
define("ANAME_EMPTY","Name empty");
define("ATAG_EXIST","Tag taken");
define("ANAME_EXIST","Name taken");

//COPYRIGHT
define("TRAVIAN_COPYRIGHT","TravianX 100% Open Source Travian Clone.");

//BUILD.TPL
define("CUR_PROD","Current production");
define("NEXT_PROD","Production at level ");

//BUILDINGS
define("B1","Woodcutter");
define("B1_DESC","The Woodcutter cuts down trees in order to produce lumber. The further you extend the bid1 the more lumber is produced by him.");
define("B2","Clay Pit");
define("B2_DESC","Clay is produced here. By increasing its level you increase its clay production.");
define("B3","Iron Mine");
define("B3_DESC","Here miners produce the precious resource iron. By increasing the mine`s level you increase its iron production.");
define("B4","Cropland");
define("B4_DESC","Your population`s food is produced here. By increasing the farm`s level you increase its crop production.");

//DORF1
define("LUMBER","Lumber");
define("CLAY","Clay");
define("IRON","Iron");
define("CROP","Crop");
define("LEVEL","Level");
define("CROP_COM",CROP." consumption");
define("PER_HR","per hour");
define("PROD_HEADER","Production");
define("MULTI_V_HEADER","Villages");
// define("ANNOUNCEMENT","Announcement");
define("GO2MY_VILLAGE","Go to my village");
define("VILLAGE_CENTER","Village centre");
define("FINISH_GOLD","Finish all construction and research orders in this village immediately for 2 Gold?");
define("WAITING_LOOP","(waiting loop)");
define("HRS","(hrs.)");
define("DONE_AT","done at");
define("CANCEL","cancel");
define("LOYALTY","Loyalty:"); 
// define("CALCULATED_IN","Calculated in");
define("SEVER_TIME","Server time:");  

//QUEST
define("Q_CONTINUE","Continue with the next task.");
define("Q_REWARD","Your reward:");
define("Q0","Welcome to ");
define("Q0_DESC","As I see you have been made chieftain of this little village. I will be your counselor for the first few days and never leave your (right hand) side.");
define("Q0_OPT1","To the first task.");
define("Q0_OPT2","Look around on your own.");
define("Q0_OPT3","Play no tasks.");

define("Q1","Task 1: Woodcutter");
define("Q1_DESC","There are four green forests around your village. Construct a woodcutter on one of them. Lumber is an important resource for our new settlement.");
define("Q1_ORDER","Order:<\/p>Construct a woodcutter.");
define("Q1_RESP","Yes, that way you gain more lumber.I helped a bit and completed the order instantly.");
define("Q1_REWARD","Woodcutter instantly completed.");

define("Q2","Task 2: Crop");
define("Q2_DESC","Now your subjects are hungry from working all day. Extend a cropland to improve your subjects' supply. Come back here once the building is complete.");
define("Q2_ORDER","Order:<\/p>Extend one cropland.");
define("Q2_RESP","Very good. Now your subjects have enough to eat again...");

define("Q3","Task 3: Your Village's Name");
define("Q3_DESC","Creative as you are you can grant your village the ultimate name.\r\n<br \/><br \/>\r\nClick on 'profile' in the left hand menu and then select 'change profile'...");
define("Q3_ORDER","Order:<\/p>Change your village's name to something nice.");
define("Q3_RESP","Wow, a great name for their village. It could have been the name of my village!...");

define("Q4","Task 4: Other Players");
define("Q4_DESC","In ". SERVER_NAME ." you play along with billions of other players. Click 'statistics' in the top menu to look up your rank and enter it here.");
define("Q4_ORDER","Order:<\/p>Look for your rank in the statistics and enter it here.");
define("Q4_BUTN","complete task");
define("Q4_RESP","Exactly! That's your rank.");

define("Q5","Task 5: Two Building Orders");
define("Q5_DESC","Build an iron mine and a clay pit. Of iron and clay one can never have enough.");
define("Q5_ORDER","Order:<\/p><ul><li>Extend one iron mine.<\/li><li>Extend one clay pit.<\/li><\/ul>");
define("Q5_RESP","As you noticed, building orders take rather long. The world of ". SERVER_NAME ." will continue to spin even if you are offline. Even in a few months there will be many new things for you to discover.\r\n<br \/><br \/>\r\nThe best thing to do is occasionally checking your village and giving you subjects new tasks to do.");

define("Q6","Message From The Taskmaster");
define("Q6_DESC","You are to be informed that a nice reward is waiting for you at the taskmaster.<br /><br />Hint: The message has been generated automatically. An answer is not necessary.");

define("Q5","Task 5: Two Building Orders");
define("Q5_DESC","Build an iron mine and a clay pit. Of iron and clay one can never have enough.");
define("Q5_ORDER","Order:<\/p><ul><li>Extend one iron mine.<\/li><li>Extend one clay pit.<\/li><\/ul>");
define("Q5_RESP","As you noticed, building orders take rather long. The world of ". SERVER_NAME ." will continue to spin even if you are offline. Even in a few months there will be many new things for you to discover.\r\n<br \/><br \/>\r\nThe best thing to do is occasionally checking your village and giving you subjects new tasks to do.");

//ATTACKS ETC.
define("TROOP_MOVEMENTS","Troop Movements:");
define("ARRIVING_REINF_TROOPS","Arriving reinforcing troops");
define("ARRIVING_REINF_TROOPS_SHORT","Reinf.");
define("OWN_ATTACKING_TROOPS","Own attacking troops");
define("ATTACK","Attack");
define("OWN_REINFORCING_TROOPS","Own reinforcing troops");
define("TROOPS_DORF","Troops:");

//404.php
define("NOTHING_HERE","Nothing here!");
define("WE_LOOKED","We looked 404 times already but can't find anything");

//TIME RELATED
define("CALCULATED_IN","Calculated in");
// define("SERVER_TIME","Server time:");

//MASSMESSAGE.php
define("MASS","Message Content");
define("MASS_SUBJECT","Subject:");
define("MASS_COLOR","Message color:");
define("MASS_REQUIRED","All fields required");
define("MASS_UNITS","Images (units):");
define("MASS_SHOWHIDE","Show/Hide");
define("MASS_READ","Read this: after adding smilie, you have to add left or right after number otherwise image will won't work");
define("MASS_CONFIRM","Confirmation");
define("MASS_REALLY","Do you really want to send MassIGM?");
define("MASS_ABORT","Aborting right now");
define("MASS_SENT","Mass IGM was sent");

##############################################
##                                          ##
##     LANG TEST - (Only edit the text)     ##
##                                          ##
##############################################

// Menu items

	define("GAME_TOUR","تور بازی");
	define("FORUM","انجمن");
	define("FORUM_LINK","");
	define("MORE_GAMES","More Games");
	define("REGISTER","ثبت نام");
	define("LOGIN","ورود");
	define("MANUAL","Manual");
	define("TUTORIAL","Tutorial");
	define("SCREENSHOTS","Screenshots");
	define("FAQ","FAQ");
	define("SPIELREGELN","Game Rules");
	define("AGB","Terms");
	define("IMPRINT","Imprint");
	define("SUPPORT","Support");
	define("LINKS","Links");
	define("HOME","Homepage");
	define("PROFILE","Profile");
	define("INSTRUCTIONS","Instructions");
	define("ADMIN_PANEL","Admin Panel");
	define("MULTIHUNTER_PANEL","Multihunter Panel");
	define("MASS_MESSAGE","Mass Message");
	define("UPDATE_TOP_TEN","Update Top 10");
	define("SYSTEM_MESSAGE","System Message");
	define("LOGOUT","Logout");
	define("HELP","Help");
	define("TRAVIAN_PLUS",SERVER_NAME." <b><span class=\"plus_g\">P</span><span class=\"plus_o\">l</span><span class=\"plus_g\">u</span><span class=\"plus_o\">s</span></span></span></b>");

// Manual steps

	define("THE_TRIBES","The tribes");
	define("THE_BUILDINGS","The buildings");
	define("CULTURE_POINTS","Culture points");

// Index

	define("WELCOME","Welcome to ".SERVER_NAME);
	define("PLAY_NOW","Play now, for free!");
	define("WHAT_IS","What is ".SERVER_NAME);
	define("GAME_DESCRIPTION",SERVER_NAME." is a <b>browser game</b> featuring an engaging ancient world with thousands of other real players.</p><p>It`s <strong>free to play</strong> and requires <strong>no downloads</strong>.");
	define("CLICK_HERE","Click here to play ".SERVER_NAME);
	define("ABOUT","About the game");
	define("ABOUT1","You will begin as the chief of a tiny village and will embark on an exciting quest.");
	define("ABOUT2","Build up villages, wage wars or establish trade routes with your neighbours.");
	define("ABOUT3","Play with and against thousands of other real players and conquer the world of ".SERVER_NAME.".");
	define("NEWS","اخبار");
	define("CHOOSE_WORLD","Choose your world");
	
// Index Travian 4

	define("","");

	$lang['index2']['description'] = "Master the art of ancient tactics as Roman, Gaul or Teuton!";
	$lang['index2']['shop title'] = "";
	$lang['index2']['shop'] = "";
	$lang['index2']['shop link'] = "#";
	$lang['index2']['strategy game'] = "تراوین ، به همراه دو نژاد جدید مغول؛و پارس ها";
	$lang['index2']['what is'] = "در زمانهای قدیم امپراطوری های زیادی بر سرزمین های جهان حکومت می کردند،بر سرزمین شرق حکومت متمدن پارسی حکمفرما بود ،در سرزمین غرب آلمانی های وحشی و خونخوار و رومی های پر ادعا و فرانسوی های فریبکار و متقلب حکمرانی می کردند.شما خود را فرمانراوی کدام قبیله می دانید.";
	$lang['index2']['register free'] = "به صورت رایگان ثبت نام کنید !";
	$lang['index2']['title1'] = "به تراوین با سرعت بالا خوش آمدید ";
	$lang['index2']['desc1'] = "<br /> <br /><br /> <br />در کنار شما دوستان بودن افتخار ماست";
	$lang['index2']['text1'] = "ثبت نام کنید ";
	$lang['index2']['link1'] = "#serverRegister";
	$lang['index2']['title2'] = " با پنج نژاد برتر";
	$lang['index2']['desc2'] = "گول ، روم ، توتن ، ایرانیان، مغول <br /><br /> <br /><br /> ";
	$lang['index2']['text2'] = "ثبت نام کنید ";
	$lang['index2']['link2'] = "#serverRegister";
	$lang['index2']['title3'] = "توصیه ";
	$lang['index2']['desc3'] = "دوست هم باشید <br />در اتحادیه همکاری کنید<br />یکی برای همه ، همه برای یکی<br />برای برنده شدن در این بازی نیاز به همکاری دارید ";
	$lang['index2']['text3'] = "ثبت نام کنید ";
	$lang['index2']['link3'] = "#serverRegister";
	$lang['index2']['learn more'] = "یادگیری بیشتر ";
	$lang['index2']['strip1'] = "مزارع و معادن خود را ارتقاء دهید تا تولید منابع شما افزایش یابد. برای ساخت و یا ارتقاء ساختمان و تربیت لشکر شما به منابع نیاز خواهید داشت";
	$lang['index2']['strip2'] = "ساختمان‌های دهکده‌ی خود را ساخته و سطح آنها را ارتقاء دهید. ساختمان‌ها باعث بهبود زیر ساخت‌های کلی دهکده‌ی شما، افزایش تولید منابع شده و به شما اجازه‌ی تحقیق، تربیت و ارتقاء لشکریان دهکده را خواهد داد ";
	$lang['index2']['strip3'] = "مناطق و دهکده‌های اطراف خود را نگاه کنید. شما قادر به پیدا کردن دوست‌ها و یا دشمن‌های جدید می‌باشید. از آبادی‌های اطراف دهکده‌ی خود استفاده کرده و شاهد رشد امپراطوری خود باشید. ";
	$lang['index2']['strip4'] = "خود را با بازیکن‌های دیگر مقایسه کرده و پیشرفت و موفقیت خود را بسنجید. به رتبه‌های تاپ 10 نگاه کنید و برای دریافت مدال‌های هفتگی بکوشید.";
	$lang['index2']['strip5'] = "در مورد ماجراجویی‌ها، تجارت‌ها و جنگ‌های خود گزارش‌هایی با جزیئیات دقیق دریافت کنید و کنترل گزارش‌های در حال اتفاق در اطراف دهکده‌ی خود را فراموش نکنید.";
	$lang['index2']['strip6'] = "با بازیکن‌های دیگر مبادله‌ی اطلاعات کرده و روابط دیپلماتیک برقرار کنید. همیشه به یاد داشته باشید که برقراری رابطه بهترین راه برای پیدا کردن دوست‌های جدید و رفع مشکلات گذشته می‌باشد.";

// Screenshots Travian 4

	define("SCREENSHOTS_T4_TITLE1","مرکز دهکده");
	define("SCREENSHOTS_T4_TITLE2","دید‌کلی دهکده");
	define("SCREENSHOTS_T4_TITLE3","قهرمان");
	define("SCREENSHOTS_T4_TITLE4","اطلاعات ساختمان");
	define("SCREENSHOTS_T4_TITLE5","محدوده‌ی اطراف");
	define("SCREENSHOTS_T4_TITLE6","گزارش نبرد");
	define("SCREENSHOTS_T4_TITLE7","سیستم مدال‌ها");
	define("SCREENSHOTS_T4_TITLE8","سیستم وظایف");
	define("SCREENSHOTS_T4_DESC1","روزی دهکده‌ی شما می‌تواند مانند این شود و نقطه‌ی شروعی برای امپراطوری بزرگ شما باشد.");
	define("SCREENSHOTS_T4_DESC2","چوب، خشت، آهن و گندم منابع حیاتی می‌باشند که با استفاده از آنها می‌توانید اقتصاد خود را بهتر کرده و غذای اهالی دهکده‌ی خود را تامین کنید؛ این منابع برای ساخت ساختمان و حتی در جنگ نیز لازم می‌باشد. با این منابع باارزش قادر به تربیت لشکری بزرگ می‌باشید.");
	define("SCREENSHOTS_T4_DESC3","می‌توانید قهرمان خود را به ماجراجویی‌های خطرناکی ارسال کنید. اگر قهرمان شما موفق باشد امکان دارد اجناس باارزشی پیدا کرده و با خود به دهکده بیارد.");
	define("SCREENSHOTS_T4_DESC4","برای اینکه دهکده‌ی قدرتمندی با تولیدی بالایی داشته باشید باید در آن ساختمان‌های زیادی بنا کنید. در ابتدا هنگام انتخاب ساختمانی که می‌خواهید قبل از بقیه بنا کنید، دقت کنید زیرا منابع بسیار کمی دارید.");
	define("SCREENSHOTS_T4_DESC5","برای آشنایی با همسایگان خود، محدوده‌ی اطراف خود را کاوش کنید؛ شما می‌توانید مسیر صلح را انتخاب کرده و برای خود اتحاد درست کنید و با دیگران متحد شوید و یا با جنگ سرزمین‌های اطراف خود را تسخیر کنید. شاید در اطراف دهکده‌ی شما آبادی‌های غنی موجود باشد، آنها را تسخیر کنید تا تولیدی منابع شما افزایش یابد، اما مواظب حیوانات وحشی موجود در آنها باشید.");
	define("SCREENSHOTS_T4_DESC6","بهتر است در همان ابتدای کار به فکر تربیت لشکر باشید، تا قادر به دفاع از خود و حمله به دیگران باشید. از این روش شما قادر به غارت بیشتر منابع و ساخت سریع‌تر امپراطوری خود خواهید بود.");
	define("SCREENSHOTS_T4_DESC7","در آخر هر هفته 10 بازیکن و اتحاد برتر در رده‌های متفاوتی انتخاب می‌شوند؛ آنها مدالی به عنوان جایزه برای اینکار خود دریافت خواهند کرد.");
	define("SCREENSHOTS_T4_DESC8","برای راهنمایی شما در ابتدای بازی ما کاردان را برای شما ارسال کرده‌ایم؛ برای ساخت دهکده‌ی خود او شما را راهنمایی خواهد کرد. فقط کافی است روی عکس وی در سمت راست کلیک کنید.");

	$lang['screenshots2']['desc1'] = "روزی دهکده‌ی شما می‌تواند مانند این شود و نقطه‌ی شروعی برای امپراطوری بزرگ شما باشد.";
	$lang['screenshots2']['desc2'] = "چوب، خشت، آهن و گندم منابع حیاتی می‌باشند که با استفاده از آنها می‌توانید اقتصاد خود را بهتر کرده و غذای اهالی دهکده‌ی خود را تامین کنید؛ این منابع برای ساخت ساختمان و حتی در جنگ نیز لازم می‌باشد. با این منابع باارزش قادر به تربیت لشکری بزرگ می‌باشید.";
	$lang['screenshots2']['desc3'] = "می‌توانید قهرمان خود را به ماجراجویی‌های خطرناکی ارسال کنید. اگر قهرمان شما موفق باشد امکان دارد اجناس باارزشی پیدا کرده و با خود به دهکده بیارد.";
	$lang['screenshots2']['desc4'] = "برای اینکه دهکده‌ی قدرتمندی با تولیدی بالایی داشته باشید باید در آن ساختمان‌های زیادی بنا کنید. در ابتدا هنگام انتخاب ساختمانی که می‌خواهید قبل از بقیه بنا کنید، دقت کنید زیرا منابع بسیار کمی دارید.";
	$lang['screenshots2']['desc5'] = "برای آشنایی با همسایگان خود، محدوده‌ی اطراف خود را کاوش کنید؛ شما می‌توانید مسیر صلح را انتخاب کرده و برای خود اتحاد درست کنید و با دیگران متحد شوید و یا با جنگ سرزمین‌های اطراف خود را تسخیر کنید. شاید در اطراف دهکده‌ی شما آبادی‌های غنی موجود باشد، آنها را تسخیر کنید تا تولیدی منابع شما افزایش یابد، اما مواظب حیوانات وحشی موجود در آنها باشید.";
	$lang['screenshots2']['desc6'] = "بهتر است در همان ابتدای کار به فکر تربیت لشکر باشید، تا قادر به دفاع از خود و حمله به دیگران باشید. از این روش شما قادر به غارت بیشتر منابع و ساخت سریع‌تر امپراطوری خود خواهید بود.";
	$lang['screenshots2']['desc7'] = "در آخر هر هفته 10 بازیکن و اتحاد برتر در رده‌های متفاوتی انتخاب می‌شوند؛ آنها مدالی به عنوان جایزه برای اینکار خود دریافت خواهند کرد.";
	$lang['screenshots2']['desc8'] = "برای راهنمایی شما در ابتدای بازی ما کاردان را برای شما ارسال کرده‌ایم؛ برای ساخت دهکده‌ی خود او شما را راهنمایی خواهد کرد. فقط کافی است روی عکس وی در سمت راست کلیک کنید.";

// Player statics

	define("TOTAL_PLAYERS","Total players");
	define("PLAYERS_ACTIVE","Players active");
	define("PLAYERS_ONLINE","Players online");
	define("PLAYERS","Players");
	define("ACTIVE","Active");
	define("ONLINE","Online");
	define("PLAYER_STATISTICS","Players statistics");

//ANMELDEN.php

	define("NICKNAME","Nickname");
	define("EMAIL","Email");
//	define("PASSWORD","Password");
	define("ROMANS","Romans");
	define("TEUTONS","Teutons");
	define("GAULS","Gauls");
	define("NW","North West");
	define("NE","North East");
	define("SW","South West");
	define("SE","South East");
	define("RANDOM","random");
	define("ACCEPT_RULES"," I accept the game rules and general terms and conditions.");
	define("ONE_PER_SERVER","Each player may only own ONE account per server.");
	define("BEFORE_REGISTER","Before you register an account you should read the <a href='anleitung.php' target='_blank'>instructions</a> of TravianX to see the specific advantages and disadvantages of the three tribes.");
	define("BUILDING_UPGRADING","Building:");
	define("HOURS","hours");

// Login Travian 3.6

	define("COOKIES","You must have cookies enabled to be able to log in. If you share this computer with other people you should log out after each session for your own safety.");
	define("NAME","Name");
	define("PASSWORD","Password");
	define("PW_FORGOT","Password forgotten?");
	define("EMAIL_REQUEST","Then you can request a new one which will be sent to your email address.");
	define("REQUIRE_FIELDS","All fields required");
	define("NO_VERIFIED","Email not verified!");
	define("FOLLOW","Follow this link to activate your account.");
	define("VERIFI","Verify Email.");
	define("LOGIN_PW_ERROR","The password is wrong.");

// Login Travian 4

	define("","");

// System message

	define("ANNOUNCEMENT","Announcement");
	define("HI_USERNAME","Hi");
	define("GO_TO_MY_VILLAGE","Go to my village");

// Extra

	define("STARTED","The server started ".round((time()-COMMENCE)/86400)." days ago.");
	define("CALCULATED_IN","Calculated in");
	define("SERVER_TIME","Server time");
	
// Resources

	define("R1","Lumber");
	define("R2","Clay");
	define("R3","Iron");
	define("R4","Crop");

##================================================##
##========== UNITS - YOU MUST NOT EDIT! ==========##
##================================================##

// Hero
define("U0","Hero");

//ROMAN UNITS
define("U1","Legionnaire");
define("U2","Praetorian");
define("U3","Imperian");
define("U4","Equites Legati");
define("U5","Equites Imperatoris");
define("U6","Equites Caesaris");
define("U7","Battering Ram");
define("U8","Fire Catapult");
define("U9","Senator");
define("U10","Settler");

//TEUTON UNITS
define("U11","Clubswinger");
define("U12","Spearman");
define("U13","Axeman");
define("U14","Scout");
define("U15","Paladin");
define("U16","Teutonic Knight");
define("U17","Ram");
define("U18","Catapult");
define("U19","Chief");
define("U20","Settler");

//GAUL UNITS
define("U21","Phalanx");
define("U22","Swordsman");
define("U23","Pathfinder");
define("U24","Theutates Thunder");
define("U25","Druidrider");
define("U26","Haeduan");
define("U27","Ram");
define("U28","Trebuchet");
define("U29","Chieftain");
define("U30","Settler");

//NATURE UNITS
define("U31","Rat");
define("U32","Spider");
define("U33","Snake");
define("U34","Bat");
define("U35","Wild Boar");
define("U36","Wolf");
define("U37","Bear");
define("U38","Crocodile");
define("U39","Tiger");
define("U40","Elephant");

//NATARS UNITS
define("U41","Pikeman");
define("U42","Thorned Warrior");
define("U43","Guardsman");
define("U44","Birds Of Prey");
define("U45","Axerider");
define("U46","Natarian Knight");
define("U47","War Elephant");
define("U48","Ballista");
define("U49","Natarian Emperor");
define("U50","Natarian Settler");

//MONSTER UNITS
define("U51","Monster Peon");
define("U52","Monster Hunter");
define("U53","Monster Warrior");
define("U54","Ghost");
define("U55","Monster Steed");
define("U56","Monster War Steed");
define("U57","Monster Ram");
define("U58","Monster Catapult");
define("U59","Monster Chief");
define("U60","Monster Settler");

##================================================##
##======== END UNITS - YOU MUST NOT EDIT! ========##
##================================================##
?>
