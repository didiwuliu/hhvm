<?php

$i = 0;
 print ++$i;
 print "\t";
 print (null<>true) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = null;
 print ($a <>true) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = true;
 print (null<>$b) ? 'Y' : 'N';
 print ($a <>$b) ? 'Y' : 'N';
 print "\t";
 print "null <> true	";
 print "\n";
 print ++$i;
 print "\t";
 print (null<>false) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = null;
 print ($a <>false) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = false;
 print (null<>$b) ? 'Y' : 'N';
 print ($a <>$b) ? 'Y' : 'N';
 print "\t";
 print "null <> false	";
 print "\n";
 print ++$i;
 print "\t";
 print (null<>1) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = null;
 print ($a <>1) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = 1;
 print (null<>$b) ? 'Y' : 'N';
 print ($a <>$b) ? 'Y' : 'N';
 print "\t";
 print "null <> 1	";
 print "\n";
 print ++$i;
 print "\t";
 print (null<>0) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = null;
 print ($a <>0) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = 0;
 print (null<>$b) ? 'Y' : 'N';
 print ($a <>$b) ? 'Y' : 'N';
 print "\t";
 print "null <> 0	";
 print "\n";
 print ++$i;
 print "\t";
 print (null<>-1) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = null;
 print ($a <>-1) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = -1;
 print (null<>$b) ? 'Y' : 'N';
 print ($a <>$b) ? 'Y' : 'N';
 print "\t";
 print "null <> -1	";
 print "\n";
 print ++$i;
 print "\t";
 print (null<>'1') ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = null;
 print ($a <>'1') ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = '1';
 print (null<>$b) ? 'Y' : 'N';
 print ($a <>$b) ? 'Y' : 'N';
 print "\t";
 print "null <> '1'	";
 print "\n";
 print ++$i;
 print "\t";
 print (null<>'0') ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = null;
 print ($a <>'0') ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = '0';
 print (null<>$b) ? 'Y' : 'N';
 print ($a <>$b) ? 'Y' : 'N';
 print "\t";
 print "null <> '0'	";
 print "\n";
 print ++$i;
 print "\t";
 print (null<>'-1') ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = null;
 print ($a <>'-1') ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = '-1';
 print (null<>$b) ? 'Y' : 'N';
 print ($a <>$b) ? 'Y' : 'N';
 print "\t";
 print "null <> '-1'	";
 print "\n";
 print ++$i;
 print "\t";
 print (null<>null) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = null;
 print ($a <>null) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = null;
 print (null<>$b) ? 'Y' : 'N';
 print ($a <>$b) ? 'Y' : 'N';
 print "\t";
 print "null <> null	";
 print "\n";
 print ++$i;
 print "\t";
 print (null<>array()) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = null;
 print ($a <>array()) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = array();
 print (null<>$b) ? 'Y' : 'N';
 print ($a <>$b) ? 'Y' : 'N';
 print "\t";
 print "null <> array()	";
 print "\n";
 print ++$i;
 print "\t";
 print (null<>array(1)) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = null;
 print ($a <>array(1)) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = array(1);
 print (null<>$b) ? 'Y' : 'N';
 print ($a <>$b) ? 'Y' : 'N';
 print "\t";
 print "null <> array(1)	";
 print "\n";
 print ++$i;
 print "\t";
 print (null<>array(2)) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = null;
 print ($a <>array(2)) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = array(2);
 print (null<>$b) ? 'Y' : 'N';
 print ($a <>$b) ? 'Y' : 'N';
 print "\t";
 print "null <> array(2)	";
 print "\n";
 print ++$i;
 print "\t";
 print (null<>array('1')) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = null;
 print ($a <>array('1')) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = array('1');
 print (null<>$b) ? 'Y' : 'N';
 print ($a <>$b) ? 'Y' : 'N';
 print "\t";
 print "null <> array('1')	";
 print "\n";
 print ++$i;
 print "\t";
 print (null<>array('0' => '1')) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = null;
 print ($a <>array('0' => '1')) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = array('0' => '1');
 print (null<>$b) ? 'Y' : 'N';
 print ($a <>$b) ? 'Y' : 'N';
 print "\t";
 print "null <> array('0' => '1')	";
 print "\n";
 print ++$i;
 print "\t";
 print (null<>array('a')) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = null;
 print ($a <>array('a')) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = array('a');
 print (null<>$b) ? 'Y' : 'N';
 print ($a <>$b) ? 'Y' : 'N';
 print "\t";
 print "null <> array('a')	";
 print "\n";
 print ++$i;
 print "\t";
 print (null<>array('a' => 1)) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = null;
 print ($a <>array('a' => 1)) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = array('a' => 1);
 print (null<>$b) ? 'Y' : 'N';
 print ($a <>$b) ? 'Y' : 'N';
 print "\t";
 print "null <> array('a' => 1)	";
 print "\n";
 print ++$i;
 print "\t";
 print (null<>array('b' => 1)) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = null;
 print ($a <>array('b' => 1)) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = array('b' => 1);
 print (null<>$b) ? 'Y' : 'N';
 print ($a <>$b) ? 'Y' : 'N';
 print "\t";
 print "null <> array('b' => 1)	";
 print "\n";
 print ++$i;
 print "\t";
 print (null<>array('a' => 1, 'b' => 2)) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = null;
 print ($a <>array('a' => 1, 'b' => 2)) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = array('a' => 1, 'b' => 2);
 print (null<>$b) ? 'Y' : 'N';
 print ($a <>$b) ? 'Y' : 'N';
 print "\t";
 print "null <> array('a' => 1, 'b' => 2)	";
 print "\n";
 print ++$i;
 print "\t";
 print (null<>array(array('a' => 1))) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = null;
 print ($a <>array(array('a' => 1))) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = array(array('a' => 1));
 print (null<>$b) ? 'Y' : 'N';
 print ($a <>$b) ? 'Y' : 'N';
 print "\t";
 print "null <> array(array('a' => 1))	";
 print "\n";
 print ++$i;
 print "\t";
 print (null<>array(array('b' => 1))) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = null;
 print ($a <>array(array('b' => 1))) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = array(array('b' => 1));
 print (null<>$b) ? 'Y' : 'N';
 print ($a <>$b) ? 'Y' : 'N';
 print "\t";
 print "null <> array(array('b' => 1))	";
 print "\n";
 print ++$i;
 print "\t";
 print (null<>'php') ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = null;
 print ($a <>'php') ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = 'php';
 print (null<>$b) ? 'Y' : 'N';
 print ($a <>$b) ? 'Y' : 'N';
 print "\t";
 print "null <> 'php'	";
 print "\n";
 print ++$i;
 print "\t";
 print (null<>'') ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = null;
 print ($a <>'') ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = '';
 print (null<>$b) ? 'Y' : 'N';
 print ($a <>$b) ? 'Y' : 'N';
 print "\t";
 print "null <> ''	";
 print "\n";

