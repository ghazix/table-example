<span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /><a name="l1" /></span><span style="color: #FF8000">/**<br /><a name="l2" />&nbsp;*&nbsp;This&nbsp;file&nbsp;can&nbsp;be&nbsp;used&nbsp;as&nbsp;a&nbsp;starting&nbsp;point&nbsp;to&nbsp;understand&nbsp;way&nbsp;OrientDB-PHP<br /><a name="l3" />&nbsp;*&nbsp;works.<br /><a name="l4" />&nbsp;*&nbsp;@author&nbsp;Anton&nbsp;Terekhov&nbsp;&lt;anton@netmonsters.ru&gt;<br /><a name="l5" />&nbsp;*&nbsp;@copyright&nbsp;Copyright&nbsp;Anton&nbsp;Terekhov,&nbsp;NetMonsters&nbsp;LLC,&nbsp;2011-2012<br /><a name="l6" />&nbsp;*&nbsp;@license&nbsp;https://github.com/AntonTerekhov/OrientDB-PHP/blob/master/LICENSE<br /><a name="l7" />&nbsp;*&nbsp;@link&nbsp;https://github.com/AntonTerekhov/OrientDB-PHP<br /><a name="l8" />&nbsp;*&nbsp;@package&nbsp;OrientDB-PHP<br /><a name="l9" />&nbsp;*&nbsp;@subpackage&nbsp;Example<br /><a name="l10" />&nbsp;*/<br /><a name="l11" /><br /><a name="l12" /></span><span style="color: #0000BB">$rootPassword&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'60F3D52B4374C22B19F2EA5AD2812A45FB1C34985C2532D60E267AADB9E3E130'</span><span style="color: #007700">;<br /><a name="l13" /></span><span style="color: #0000BB">$dbName&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'example'</span><span style="color: #007700">;<br /><a name="l14" /></span><span style="color: #0000BB">$clusterName&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'default'</span><span style="color: #007700">;<br /><a name="l15" /><br /><a name="l16" />require_once&nbsp;</span><span style="color: #DD0000">'OrientDB/OrientDB.php'</span><span style="color: #007700">;<br /><a name="l17" /><br /><a name="l18" />echo&nbsp;</span><span style="color: #DD0000">'Connecting&nbsp;to&nbsp;server...'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><a name="l19" />try&nbsp;{<br /><a name="l20" />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$db&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #0000BB">OrientDB</span><span style="color: #007700">(</span><span style="color: #DD0000">'localhost'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">2424</span><span style="color: #007700">);<br /><a name="l21" />}<br /><a name="l22" />catch&nbsp;(</span><span style="color: #0000BB">Exception&nbsp;$e</span><span style="color: #007700">)&nbsp;{<br /><a name="l23" />&nbsp;&nbsp;&nbsp;&nbsp;die(</span><span style="color: #DD0000">'Failed&nbsp;to&nbsp;connect:&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$e</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getMessage</span><span style="color: #007700">());<br /><a name="l24" />}<br /><a name="l25" /><br /><a name="l26" />echo&nbsp;</span><span style="color: #DD0000">'Connecting&nbsp;as&nbsp;root...'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><a name="l27" />try&nbsp;{<br /><a name="l28" />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$connect&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">connect</span><span style="color: #007700">(</span><span style="color: #DD0000">'root'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$rootPassword</span><span style="color: #007700">);<br /><a name="l29" />}<br /><a name="l30" />catch&nbsp;(</span><span style="color: #0000BB">OrientDBException&nbsp;$e</span><span style="color: #007700">)&nbsp;{<br /><a name="l31" />&nbsp;&nbsp;&nbsp;&nbsp;die(</span><span style="color: #DD0000">'Failed&nbsp;to&nbsp;connect():&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$e</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getMessage</span><span style="color: #007700">());<br /><a name="l32" />}<br /><a name="l33" /><br /><a name="l34" />try&nbsp;{<br /><a name="l35" />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$exists&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">DBExists</span><span style="color: #007700">(</span><span style="color: #0000BB">$dbName</span><span style="color: #007700">);<br /><a name="l36" />}<br /><a name="l37" />catch&nbsp;(</span><span style="color: #0000BB">OrientDBException&nbsp;$e</span><span style="color: #007700">)&nbsp;{<br /><a name="l38" />&nbsp;&nbsp;&nbsp;&nbsp;die(</span><span style="color: #DD0000">'Failed&nbsp;to&nbsp;execute&nbsp;DBExists():&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$e</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getMessage</span><span style="color: #007700">());<br /><a name="l39" />}<br /><a name="l40" />if&nbsp;(</span><span style="color: #0000BB">$exists</span><span style="color: #007700">)&nbsp;{<br /><a name="l41" />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">'Deleting&nbsp;DB&nbsp;(in&nbsp;case&nbsp;of&nbsp;previous&nbsp;run&nbsp;failed)...'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><a name="l42" />&nbsp;&nbsp;&nbsp;&nbsp;try&nbsp;{<br /><a name="l43" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">DBDelete</span><span style="color: #007700">(</span><span style="color: #0000BB">$dbName</span><span style="color: #007700">);<br /><a name="l44" />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><a name="l45" />&nbsp;&nbsp;&nbsp;&nbsp;catch&nbsp;(</span><span style="color: #0000BB">OrientDBException&nbsp;$e</span><span style="color: #007700">)&nbsp;{<br /><a name="l46" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;die(</span><span style="color: #DD0000">'Failed&nbsp;to&nbsp;DBDelete():&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$e</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getMessage</span><span style="color: #007700">());<br /><a name="l47" />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><a name="l48" />}<br /><a name="l49" /><br /><a name="l50" />echo&nbsp;</span><span style="color: #DD0000">'Creating&nbsp;DB...'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><a name="l51" /><br /><a name="l52" />try&nbsp;{<br /><a name="l53" />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$result&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">DBCreate</span><span style="color: #007700">(</span><span style="color: #0000BB">$dbName</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">OrientDB</span><span style="color: #007700">::</span><span style="color: #0000BB">DB_TYPE_LOCAL</span><span style="color: #007700">);<br /><a name="l54" /><br /><a name="l55" />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">'Opening&nbsp;DB...'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><a name="l56" />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$clusters&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">DBOpen</span><span style="color: #007700">(</span><span style="color: #0000BB">$dbName</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'writer'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'writer'</span><span style="color: #007700">);<br /><a name="l57" />&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">$clusters</span><span style="color: #007700">[</span><span style="color: #DD0000">'clusters'</span><span style="color: #007700">]&nbsp;as&nbsp;</span><span style="color: #0000BB">$cluster</span><span style="color: #007700">)&nbsp;{<br /><a name="l58" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$cluster</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">name&nbsp;</span><span style="color: #007700">===&nbsp;</span><span style="color: #0000BB">$clusterName</span><span style="color: #007700">)&nbsp;{<br /><a name="l59" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$clusterID&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$cluster</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">id</span><span style="color: #007700">;<br /><a name="l60" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br /><a name="l61" />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><a name="l62" /><br /><a name="l63" />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">'Create&nbsp;record...'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><a name="l64" />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$record&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #0000BB">OrientDBRecord</span><span style="color: #007700">();<br /><a name="l65" />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$record</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">data</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">FirstName&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'Bruce'</span><span style="color: #007700">;<br /><a name="l66" />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$record</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">data</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">LastName&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'Wayne'</span><span style="color: #007700">;<br /><a name="l67" />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$record</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">data</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">appearance&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">1938</span><span style="color: #007700">;<br /><a name="l68" /><br /><a name="l69" />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$recordPos&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">recordCreate</span><span style="color: #007700">(</span><span style="color: #0000BB">$clusterID</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$record</span><span style="color: #007700">);<br /><a name="l70" /><br /><a name="l71" />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">'Created&nbsp;record&nbsp;position:&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$recordPos&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">PHP_EOL&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><a name="l72" /><br /><a name="l73" />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">'Load&nbsp;record...'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><a name="l74" /><br /><a name="l75" />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$recordLoaded&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">recordLoad</span><span style="color: #007700">(</span><span style="color: #0000BB">$clusterID&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">':'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$recordPos</span><span style="color: #007700">);<br /><a name="l76" />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">'Load&nbsp;record&nbsp;result:&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$recordLoaded&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">PHP_EOL&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><a name="l77" /><br /><a name="l78" />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">'%1$s&nbsp;%2$s&nbsp;first&nbsp;appears&nbsp;in&nbsp;%3$d'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">PHP_EOL&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$recordLoaded</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">data</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">FirstName</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$recordLoaded</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">data</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">LastName</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$recordLoaded</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">data</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">appearance</span><span style="color: #007700">);<br /><a name="l79" /><br /><a name="l80" />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">'Update&nbsp;record...'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><a name="l81" /><br /><a name="l82" />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$recordLoaded</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">data</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">appearance&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">1939</span><span style="color: #007700">;<br /><a name="l83" />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$version&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">recordUpdate</span><span style="color: #007700">(</span><span style="color: #0000BB">$recordLoaded</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">recordID</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$recordLoaded</span><span style="color: #007700">);<br /><a name="l84" /><br /><a name="l85" />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">'Updated&nbsp;record&nbsp;version:&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$version&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">PHP_EOL&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><a name="l86" /><br /><a name="l87" />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$recordReLoaded&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">recordLoad</span><span style="color: #007700">(</span><span style="color: #0000BB">$clusterID&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">':'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$recordPos</span><span style="color: #007700">);<br /><a name="l88" /><br /><a name="l89" />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">'No,&nbsp;%1$s&nbsp;%2$s&nbsp;first&nbsp;appears&nbsp;in&nbsp;%3$d!'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">PHP_EOL&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$recordReLoaded</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">data</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">FirstName</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$recordReLoaded</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">data</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">LastName</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$recordReLoaded</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">data</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">appearance</span><span style="color: #007700">);<br /><a name="l90" /><br /><a name="l91" />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">'Delete&nbsp;record&nbsp;with&nbsp;old&nbsp;version&nbsp;('&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$recordLoaded</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">version&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">')&nbsp;...'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><a name="l92" /><br /><a name="l93" />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$result&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">recordDelete</span><span style="color: #007700">(</span><span style="color: #0000BB">$recordLoaded</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">recordID</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$recordLoaded</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">version</span><span style="color: #007700">);<br /><a name="l94" /><br /><a name="l95" />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">'Delete&nbsp;record&nbsp;with&nbsp;correct&nbsp;version&nbsp;('&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$version&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">')&nbsp;...'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><a name="l96" /><br /><a name="l97" />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$result&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">recordDelete</span><span style="color: #007700">(</span><span style="color: #0000BB">$recordLoaded</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">recordID</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$version</span><span style="color: #007700">);<br /><a name="l98" />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">'Delete&nbsp;record&nbsp;result:&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">var_export</span><span style="color: #007700">(</span><span style="color: #0000BB">$result</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #0000BB">PHP_EOL&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><a name="l99" /><br /><a name="l100" />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">'Retry&nbsp;load&nbsp;record...'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><a name="l101" /><br /><a name="l102" />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$recordLoaded2&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">recordLoad</span><span style="color: #007700">(</span><span style="color: #0000BB">$recordLoaded</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">recordID</span><span style="color: #007700">);<br /><a name="l103" />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">'Load&nbsp;record&nbsp;result:&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">var_export</span><span style="color: #007700">(</span><span style="color: #0000BB">$recordLoaded2</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #0000BB">PHP_EOL&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><a name="l104" />}<br /><a name="l105" />catch&nbsp;(</span><span style="color: #0000BB">OrientDBException&nbsp;$e</span><span style="color: #007700">)&nbsp;{<br /><a name="l106" />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">$e</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getMessage</span><span style="color: #007700">()&nbsp;.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><a name="l107" />}<br /><a name="l108" /><br /><a name="l109" />echo&nbsp;</span><span style="color: #DD0000">'Deleting&nbsp;DB...'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><a name="l110" />try&nbsp;{<br /><a name="l111" />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">DBDelete</span><span style="color: #007700">(</span><span style="color: #0000BB">$dbName</span><span style="color: #007700">);<br /><a name="l112" />}<br /><a name="l113" />catch&nbsp;(</span><span style="color: #0000BB">OrientDBException&nbsp;$e</span><span style="color: #007700">)&nbsp;{<br /><a name="l114" />&nbsp;&nbsp;&nbsp;&nbsp;die(</span><span style="color: #DD0000">'Failed&nbsp;to&nbsp;DBDelete():&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$e</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getMessage</span><span style="color: #007700">()&nbsp;.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">);<br /><a name="l115" />}</span>
</span>