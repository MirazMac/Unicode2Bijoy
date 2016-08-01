<?php
require_once __DIR__.'/Unicode2Bijoy.class.php';
$str='হৃদয়ের চঞ্চলতা বন্ধে ব্রতী হলে
জীবন পরিপূর্ণ হবে নানা রঙের ফুলে।
কুঞ্ঝটিকা প্রভঞ্জন শঙ্কার কারণ
লণ্ডভণ্ড করে যায় ধরার অঙ্গন।
ক্ষিপ্ত হলে সাঙ্গ হবে বিজ্ঞজনে বলে
শান্ত হলে এ ব্রহ্মাণ্ডে বাঞ্ছিতফল মেলে।
আষাঢ়ে ঈশান কোনে হঠাৎ ঝড় উঠে
গগন মেঘেতে ঢাকে বৃষ্টি নামে মাঠে
ঊষার আকাশে নামে সন্ধ্যার ছায়া
ঐ দেখো থেমে গেছে পারাপারে খেয়া।
শরৎ ঋতুতে চাঁদ আলোয় অংশুমান
সুখ দুঃখ পাশা পাশি সহ অবস্থান।
যে জলেতে ঈশ্বর তৃষ্ণা মেটায়
সেই জলেতে জীবকুলে বিনাশ ঘটায়।
রোগ যদি দেহ ছেড়ে মনে গিয়ে ধরে
ঔষধের সাধ্য কি বা তারে সুস্থ করে ?';
?>
Original (Typed using Avro):<br/>
<span style="color:green"><?php echo $str;?></span>
<hr/>
Converted to Bijoy (SutonnyMJ font):<br/>
<span style="font-family:SutonnyMJ;font-size:22px;color:red">
<?php
echo Unicode2Bijoy::convert($str);
?>
</span>