<? 
$shogar_txt = "<header>::::: Shoel Garden Nanos  :::::<end>\n\n"; 
$shogar_txt = "Scheol Garden
<font color = #69E61E>
<a href='itemref://218099/218099/75'>LINK </a> Astinus's Stellar Pulse - NT
<a href='itemref://227769/227769/60'>LINK </a> Bail Out - Agent
<a href='itemref://210515/210515/76'>LINK </a> Benevolent Ward - Keeper
<a href='itemref://226428/226428/75'>LINK </a> Blast of Avoidance - Agent
<a href='itemref://239746/239746/65'>LINK </a> Build Spirit Tech Source Fountain - Adv
<a href='itemref://239748/239748/85'>LINK </a> Build Upgraded Spirit Tech Source Fountain - Adv
<a href='itemref://223212/223212/77'>LINK </a> Bypass Me - Soldier
<a href='itemref://218097/218097/60'>LINK </a> Caring Needle - NT
<a href='itemref://210404/210404/77'>LINK </a> Degeneration of Alacrity - Shade
<a href='itemref://227654/227654/76'>LINK </a> Electrical Engineering Knowledge - Engie
<a href='itemref://224132/224132/64'>LINK </a> Empowered Anger Addlement - Crat
<a href='itemref://233038/233038/63'>LINK </a> Empowered Greater Deflection Shield - Soldier
<a href='itemref://233040/233040/77'>LINK </a> Empowered Major Deflection Shield - Soldier
<a href='itemref://233090/233090/62'>LINK </a> Empowered Minor Harmonic Cocoon - Engie
<a href='itemref://226272/226272/77'>LINK </a> Fearbringer - Enforcer
<a href='itemref://227656/227656/79'>LINK </a> Field Quantum Physics Knowledge - Engie
<a href='itemref://223134/223134/77'>LINK </a> Intense Nano Net - Fixer
<a href='itemref://223326/223326/100'>LINK </a> Predator M-30 - Engie
<a href='itemref://210390/210390/61'>LINK </a> Primitive Dissipation - Shade
<a href='itemref://210501/210501/75'>LINK </a> Reaper - Keeper
<a href='itemref://216699/216699/77'>LINK </a> Rumble of Distant Thunder - MA
<a href='itemref://224407/2244707/75'>LINK </a> Summon Shadowweb Spinner MK II - Fixer
<a href='itemref://218107/218107/75'>LINK </a> Vital Corruptor - NT</FONT> ";

$shogar_txt = bot::makeLink("Shoel Garden Nanos", $shogar_txt); 
if($type == "msg") 
bot::send($shogar_txt, $sender); 
elseif($type == "all") 
bot::send($shogar_txt); 
else 
bot::send($shogar_txt, "guild"); 
?>