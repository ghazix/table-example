<span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /><a name="l1" /><br /><a name="l2" /></span><span style="color: #FF8000">/**<br /><a name="l3" />&nbsp;*&nbsp;@author&nbsp;Anton&nbsp;Terekhov&nbsp;&lt;anton@netmonsters.ru&gt;<br /><a name="l4" />&nbsp;*&nbsp;@copyright&nbsp;Copyright&nbsp;Anton&nbsp;Terekhov,&nbsp;NetMonsters&nbsp;LLC,&nbsp;2011-2013<br /><a name="l5" />&nbsp;*&nbsp;@license&nbsp;https://github.com/AntonTerekhov/OrientDB-PHP/blob/master/LICENSE<br /><a name="l6" />&nbsp;*&nbsp;@link&nbsp;https://github.com/AntonTerekhov/OrientDB-PHP<br /><a name="l7" />&nbsp;*&nbsp;@package&nbsp;OrientDB-PHP<br /><a name="l8" />&nbsp;*/<br /><a name="l9" /><br /><a name="l10" /></span><span style="color: #007700">require_once&nbsp;</span><span style="color: #DD0000">'OrientDB/OrientDB.php'</span><span style="color: #007700">;<br /><a name="l11" />require_once&nbsp;</span><span style="color: #DD0000">'OrientDB_TestCase.php'</span><span style="color: #007700">;<br /><a name="l12" /><br /><a name="l13" /></span><span style="color: #FF8000">/**<br /><a name="l14" />&nbsp;*&nbsp;DBDelete()&nbsp;test&nbsp;in&nbsp;OrientDB&nbsp;tests<br /><a name="l15" />&nbsp;*<br /><a name="l16" />&nbsp;*&nbsp;@author&nbsp;Anton&nbsp;Terekhov&nbsp;&lt;anton@netmonsters.ru&gt;<br /><a name="l17" />&nbsp;*&nbsp;@package&nbsp;OrientDB-PHP<br /><a name="l18" />&nbsp;*&nbsp;@subpackage&nbsp;Tests<br /><a name="l19" />&nbsp;*/<br /><a name="l20" /></span><span style="color: #007700">class&nbsp;</span><span style="color: #0000BB">OrientDBDBDeleteTest&nbsp;</span><span style="color: #007700">extends&nbsp;</span><span style="color: #0000BB">OrientDB_TestCase<br /><a name="l21" /></span><span style="color: #007700">{<br /><a name="l22" /><br /><a name="l23" />&nbsp;&nbsp;&nbsp;&nbsp;protected&nbsp;</span><span style="color: #0000BB">$dbName&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'unittest_'</span><span style="color: #007700">;<br /><a name="l24" /><br /><a name="l25" />&nbsp;&nbsp;&nbsp;&nbsp;protected&nbsp;static&nbsp;</span><span style="color: #0000BB">$dbSequence&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;<br /><a name="l26" /><br /><a name="l27" />&nbsp;&nbsp;&nbsp;&nbsp;protected&nbsp;function&nbsp;</span><span style="color: #0000BB">setUp</span><span style="color: #007700">()<br /><a name="l28" />&nbsp;&nbsp;&nbsp;&nbsp;{<br /><a name="l29" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">db&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #0000BB">OrientDB</span><span style="color: #007700">(</span><span style="color: #DD0000">'localhost'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">2424</span><span style="color: #007700">);<br /><a name="l30" />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><a name="l31" /><br /><a name="l32" />&nbsp;&nbsp;&nbsp;&nbsp;protected&nbsp;function&nbsp;</span><span style="color: #0000BB">tearDown</span><span style="color: #007700">()<br /><a name="l33" />&nbsp;&nbsp;&nbsp;&nbsp;{<br /><a name="l34" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">db&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">;<br /><a name="l35" />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><a name="l36" /><br /><a name="l37" />&nbsp;&nbsp;&nbsp;&nbsp;protected&nbsp;function&nbsp;</span><span style="color: #0000BB">sequenceInc</span><span style="color: #007700">()<br /><a name="l38" />&nbsp;&nbsp;&nbsp;&nbsp;{<br /><a name="l39" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$dbSequence</span><span style="color: #007700">++;<br /><a name="l40" />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><a name="l41" /><br /><a name="l42" />&nbsp;&nbsp;&nbsp;&nbsp;protected&nbsp;function&nbsp;</span><span style="color: #0000BB">getDBName</span><span style="color: #007700">()<br /><a name="l43" />&nbsp;&nbsp;&nbsp;&nbsp;{<br /><a name="l44" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">dbName&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$dbSequence</span><span style="color: #007700">;<br /><a name="l45" />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><a name="l46" /><br /><a name="l47" />&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;function&nbsp;</span><span style="color: #0000BB">testDBCreateOnNotConnectedDB</span><span style="color: #007700">()<br /><a name="l48" />&nbsp;&nbsp;&nbsp;&nbsp;{<br /><a name="l49" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">sequenceInc</span><span style="color: #007700">();<br /><a name="l50" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setExpectedException</span><span style="color: #007700">(</span><span style="color: #DD0000">'OrientDBWrongCommandException'</span><span style="color: #007700">);<br /><a name="l51" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$result&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">DBDelete</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDBName</span><span style="color: #007700">());<br /><a name="l52" />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><a name="l53" /><br /><a name="l54" />&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;function&nbsp;</span><span style="color: #0000BB">testDBDeleteOnConnectedDB</span><span style="color: #007700">()<br /><a name="l55" />&nbsp;&nbsp;&nbsp;&nbsp;{<br /><a name="l56" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">sequenceInc</span><span style="color: #007700">();<br /><a name="l57" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">connect</span><span style="color: #007700">(</span><span style="color: #DD0000">'root'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">root_password</span><span style="color: #007700">);<br /><a name="l58" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$result&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">DBCreate</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDBName</span><span style="color: #007700">(),&nbsp;</span><span style="color: #0000BB">OrientDB</span><span style="color: #007700">::</span><span style="color: #0000BB">DB_TYPE_LOCAL</span><span style="color: #007700">);<br /><a name="l59" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">assertTrue</span><span style="color: #007700">(</span><span style="color: #0000BB">$result</span><span style="color: #007700">);<br /><a name="l60" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$result&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">DBDelete</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDBName</span><span style="color: #007700">());<br /><a name="l61" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">assertTrue</span><span style="color: #007700">(</span><span style="color: #0000BB">$result</span><span style="color: #007700">);<br /><a name="l62" />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><a name="l63" /><br /><a name="l64" />&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;function&nbsp;</span><span style="color: #0000BB">testDBDeleteOnNotOpenDB</span><span style="color: #007700">()<br /><a name="l65" />&nbsp;&nbsp;&nbsp;&nbsp;{<br /><a name="l66" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">sequenceInc</span><span style="color: #007700">();<br /><a name="l67" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setExpectedException</span><span style="color: #007700">(</span><span style="color: #DD0000">'OrientDBWrongCommandException'</span><span style="color: #007700">);<br /><a name="l68" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$result&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">DBDelete</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDBName</span><span style="color: #007700">());<br /><a name="l69" />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><a name="l70" /><br /><a name="l71" />&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;function&nbsp;</span><span style="color: #0000BB">testDBDeleteOnOpenDB</span><span style="color: #007700">()<br /><a name="l72" />&nbsp;&nbsp;&nbsp;&nbsp;{<br /><a name="l73" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">sequenceInc</span><span style="color: #007700">();<br /><a name="l74" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">DBOpen</span><span style="color: #007700">(</span><span style="color: #DD0000">'demo'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'writer'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'writer'</span><span style="color: #007700">);<br /><a name="l75" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setExpectedException</span><span style="color: #007700">(</span><span style="color: #DD0000">'OrientDBWrongCommandException'</span><span style="color: #007700">);<br /><a name="l76" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$result&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">DBDelete</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDBName</span><span style="color: #007700">());<br /><a name="l77" />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><a name="l78" /><br /><a name="l79" />&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;function&nbsp;</span><span style="color: #0000BB">testDBDeleteWithTypeMemory</span><span style="color: #007700">()<br /><a name="l80" />&nbsp;&nbsp;&nbsp;&nbsp;{<br /><a name="l81" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">sequenceInc</span><span style="color: #007700">();<br /><a name="l82" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">connect</span><span style="color: #007700">(</span><span style="color: #DD0000">'root'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">root_password</span><span style="color: #007700">);<br /><a name="l83" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">DBCreate</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDBName</span><span style="color: #007700">(),&nbsp;</span><span style="color: #0000BB">OrientDB</span><span style="color: #007700">::</span><span style="color: #0000BB">DB_TYPE_MEMORY</span><span style="color: #007700">);<br /><a name="l84" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$result&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">DBDelete</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDBName</span><span style="color: #007700">());<br /><a name="l85" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">assertTrue</span><span style="color: #007700">(</span><span style="color: #0000BB">$result</span><span style="color: #007700">);<br /><a name="l86" />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><a name="l87" /><br /><a name="l88" />&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;function&nbsp;</span><span style="color: #0000BB">testDBDeleteWithTypeLocal</span><span style="color: #007700">()<br /><a name="l89" />&nbsp;&nbsp;&nbsp;&nbsp;{<br /><a name="l90" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">sequenceInc</span><span style="color: #007700">();<br /><a name="l91" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">connect</span><span style="color: #007700">(</span><span style="color: #DD0000">'root'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">root_password</span><span style="color: #007700">);<br /><a name="l92" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">DBCreate</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDBName</span><span style="color: #007700">(),&nbsp;</span><span style="color: #0000BB">OrientDB</span><span style="color: #007700">::</span><span style="color: #0000BB">DB_TYPE_LOCAL</span><span style="color: #007700">);<br /><a name="l93" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$result&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">DBDelete</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDBName</span><span style="color: #007700">());<br /><a name="l94" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">assertTrue</span><span style="color: #007700">(</span><span style="color: #0000BB">$result</span><span style="color: #007700">);<br /><a name="l95" />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><a name="l96" /><br /><a name="l97" />&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;function&nbsp;</span><span style="color: #0000BB">testDBDeleteWithNonExistDB</span><span style="color: #007700">()<br /><a name="l98" />&nbsp;&nbsp;&nbsp;&nbsp;{<br /><a name="l99" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">connect</span><span style="color: #007700">(</span><span style="color: #DD0000">'root'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">root_password</span><span style="color: #007700">);<br /><a name="l100" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setExpectedException</span><span style="color: #007700">(</span><span style="color: #DD0000">'OrientDBException'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'com.orientechnologies.orient.core.exception.OStorageException:&nbsp;Database&nbsp;with&nbsp;name&nbsp;\'INVALID\'&nbsp;doesn\'t&nbsp;exits.'</span><span style="color: #007700">);<br /><a name="l101" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$result&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">DBDelete</span><span style="color: #007700">(</span><span style="color: #DD0000">'INVALID'</span><span style="color: #007700">);<br /><a name="l102" />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><a name="l103" /><br /><a name="l104" />&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;function&nbsp;</span><span style="color: #0000BB">testDBDeleteWithWrongOptionCount</span><span style="color: #007700">()<br /><a name="l105" />&nbsp;&nbsp;&nbsp;&nbsp;{<br /><a name="l106" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">sequenceInc</span><span style="color: #007700">();<br /><a name="l107" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">connect</span><span style="color: #007700">(</span><span style="color: #DD0000">'root'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">root_password</span><span style="color: #007700">);<br /><a name="l108" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setExpectedException</span><span style="color: #007700">(</span><span style="color: #DD0000">'OrientDBWrongParamsException'</span><span style="color: #007700">);<br /><a name="l109" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">/**&nbsp;@noinspection&nbsp;PhpParamsInspection&nbsp;*/<br /><a name="l110" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$result&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">DBDelete</span><span style="color: #007700">();<br /><a name="l111" />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><a name="l112" />}</span>
</span>