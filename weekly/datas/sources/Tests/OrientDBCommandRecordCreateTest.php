<span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /><a name="l1" /><br /><a name="l2" /></span><span style="color: #FF8000">/**<br /><a name="l3" />&nbsp;*&nbsp;@author&nbsp;Anton&nbsp;Terekhov&nbsp;&lt;anton@netmonsters.ru&gt;<br /><a name="l4" />&nbsp;*&nbsp;@copyright&nbsp;Copyright&nbsp;Anton&nbsp;Terekhov,&nbsp;NetMonsters&nbsp;LLC,&nbsp;2011-2013<br /><a name="l5" />&nbsp;*&nbsp;@license&nbsp;https://github.com/AntonTerekhov/OrientDB-PHP/blob/master/LICENSE<br /><a name="l6" />&nbsp;*&nbsp;@link&nbsp;https://github.com/AntonTerekhov/OrientDB-PHP<br /><a name="l7" />&nbsp;*&nbsp;@package&nbsp;OrientDB-PHP<br /><a name="l8" />&nbsp;*/<br /><a name="l9" /><br /><a name="l10" /></span><span style="color: #007700">require_once&nbsp;</span><span style="color: #DD0000">'OrientDB/OrientDB.php'</span><span style="color: #007700">;<br /><a name="l11" />require_once&nbsp;</span><span style="color: #DD0000">'OrientDB_TestCase.php'</span><span style="color: #007700">;<br /><a name="l12" /><br /><a name="l13" /></span><span style="color: #FF8000">/**<br /><a name="l14" />&nbsp;*&nbsp;recordCreate()&nbsp;test&nbsp;in&nbsp;OrientDB&nbsp;tests<br /><a name="l15" />&nbsp;*<br /><a name="l16" />&nbsp;*&nbsp;@author&nbsp;Anton&nbsp;Terekhov&nbsp;&lt;anton@netmonsters.ru&gt;<br /><a name="l17" />&nbsp;*&nbsp;@package&nbsp;OrientDB-PHP<br /><a name="l18" />&nbsp;*&nbsp;@subpackage&nbsp;Tests<br /><a name="l19" />&nbsp;*/<br /><a name="l20" /></span><span style="color: #007700">class&nbsp;</span><span style="color: #0000BB">OrientDBRecordCreateTest&nbsp;</span><span style="color: #007700">extends&nbsp;</span><span style="color: #0000BB">OrientDB_TestCase<br /><a name="l21" /></span><span style="color: #007700">{<br /><a name="l22" /><br /><a name="l23" />&nbsp;&nbsp;&nbsp;&nbsp;protected&nbsp;</span><span style="color: #0000BB">$clusterID&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">2</span><span style="color: #007700">;<br /><a name="l24" /><br /><a name="l25" />&nbsp;&nbsp;&nbsp;&nbsp;protected&nbsp;</span><span style="color: #0000BB">$recordContent&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'testrecord:0'</span><span style="color: #007700">;<br /><a name="l26" /><br /><a name="l27" />&nbsp;&nbsp;&nbsp;&nbsp;protected&nbsp;function&nbsp;</span><span style="color: #0000BB">setUp</span><span style="color: #007700">()<br /><a name="l28" />&nbsp;&nbsp;&nbsp;&nbsp;{<br /><a name="l29" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">db&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #0000BB">OrientDB</span><span style="color: #007700">(</span><span style="color: #DD0000">'localhost'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">2424</span><span style="color: #007700">);<br /><a name="l30" />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><a name="l31" /><br /><a name="l32" />&nbsp;&nbsp;&nbsp;&nbsp;protected&nbsp;function&nbsp;</span><span style="color: #0000BB">tearDown</span><span style="color: #007700">()<br /><a name="l33" />&nbsp;&nbsp;&nbsp;&nbsp;{<br /><a name="l34" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">db&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">;<br /><a name="l35" />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><a name="l36" /><br /><a name="l37" />&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;function&nbsp;</span><span style="color: #0000BB">testRecordCreateOnNotConnectedDB</span><span style="color: #007700">()<br /><a name="l38" />&nbsp;&nbsp;&nbsp;&nbsp;{<br /><a name="l39" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setExpectedException</span><span style="color: #007700">(</span><span style="color: #DD0000">'OrientDBWrongCommandException'</span><span style="color: #007700">);<br /><a name="l40" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">/**&nbsp;@noinspection&nbsp;PhpParamsInspection&nbsp;*/<br /><a name="l41" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$list&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">recordCreate</span><span style="color: #007700">();<br /><a name="l42" />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><a name="l43" /><br /><a name="l44" />&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;function&nbsp;</span><span style="color: #0000BB">testRecordCreateOnConnectedDB</span><span style="color: #007700">()<br /><a name="l45" />&nbsp;&nbsp;&nbsp;&nbsp;{<br /><a name="l46" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">connect</span><span style="color: #007700">(</span><span style="color: #DD0000">'root'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">root_password</span><span style="color: #007700">);<br /><a name="l47" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setExpectedException</span><span style="color: #007700">(</span><span style="color: #DD0000">'OrientDBWrongCommandException'</span><span style="color: #007700">);<br /><a name="l48" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">/**&nbsp;@noinspection&nbsp;PhpParamsInspection&nbsp;*/<br /><a name="l49" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$list&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">recordCreate</span><span style="color: #007700">();<br /><a name="l50" />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><a name="l51" /><br /><a name="l52" />&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;function&nbsp;</span><span style="color: #0000BB">testRecordCreateOnNotOpenDB</span><span style="color: #007700">()<br /><a name="l53" />&nbsp;&nbsp;&nbsp;&nbsp;{<br /><a name="l54" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setExpectedException</span><span style="color: #007700">(</span><span style="color: #DD0000">'OrientDBWrongCommandException'</span><span style="color: #007700">);<br /><a name="l55" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">/**&nbsp;@noinspection&nbsp;PhpParamsInspection&nbsp;*/<br /><a name="l56" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$list&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">recordCreate</span><span style="color: #007700">();<br /><a name="l57" />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><a name="l58" /><br /><a name="l59" />&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;function&nbsp;</span><span style="color: #0000BB">testRecordCreateOnOpenDB</span><span style="color: #007700">()<br /><a name="l60" />&nbsp;&nbsp;&nbsp;&nbsp;{<br /><a name="l61" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">DBOpen</span><span style="color: #007700">(</span><span style="color: #DD0000">'demo'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'writer'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'writer'</span><span style="color: #007700">);<br /><a name="l62" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$recordPos&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">recordCreate</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">clusterID</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">recordContent</span><span style="color: #007700">);<br /><a name="l63" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">assertInternalType</span><span style="color: #007700">(</span><span style="color: #DD0000">'integer'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$recordPos</span><span style="color: #007700">);<br /><a name="l64" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">recordDelete</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">clusterID&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">':'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$recordPos</span><span style="color: #007700">);<br /><a name="l65" />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><a name="l66" /><br /><a name="l67" />&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;function&nbsp;</span><span style="color: #0000BB">testRecordCreateWithWrongOptionCount</span><span style="color: #007700">()<br /><a name="l68" />&nbsp;&nbsp;&nbsp;&nbsp;{<br /><a name="l69" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">DBOpen</span><span style="color: #007700">(</span><span style="color: #DD0000">'demo'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'writer'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'writer'</span><span style="color: #007700">);<br /><a name="l70" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setExpectedException</span><span style="color: #007700">(</span><span style="color: #DD0000">'OrientDBWrongParamsException'</span><span style="color: #007700">);<br /><a name="l71" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">/**&nbsp;@noinspection&nbsp;PhpParamsInspection&nbsp;*/<br /><a name="l72" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$record&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">recordCreate</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">clusterID</span><span style="color: #007700">);<br /><a name="l73" />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><a name="l74" /><br /><a name="l75" />&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;function&nbsp;</span><span style="color: #0000BB">testRecordCreateWithWrongClusterID</span><span style="color: #007700">()<br /><a name="l76" />&nbsp;&nbsp;&nbsp;&nbsp;{<br /><a name="l77" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">DBOpen</span><span style="color: #007700">(</span><span style="color: #DD0000">'demo'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'writer'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'writer'</span><span style="color: #007700">);<br /><a name="l78" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setExpectedException</span><span style="color: #007700">(</span><span style="color: #DD0000">'OrientDBException'</span><span style="color: #007700">);<br /><a name="l79" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$record&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">recordCreate</span><span style="color: #007700">(</span><span style="color: #0000BB">1000000</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'INVALID'</span><span style="color: #007700">);<br /><a name="l80" />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><a name="l81" /><br /><a name="l82" />&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;function&nbsp;</span><span style="color: #0000BB">testRecordCreateWithTypeBytes</span><span style="color: #007700">()<br /><a name="l83" />&nbsp;&nbsp;&nbsp;&nbsp;{<br /><a name="l84" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">DBOpen</span><span style="color: #007700">(</span><span style="color: #DD0000">'demo'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'admin'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'admin'</span><span style="color: #007700">);<br /><a name="l85" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$recordPos&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">recordCreate</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">clusterID</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">recordContent</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">OrientDB</span><span style="color: #007700">::</span><span style="color: #0000BB">RECORD_TYPE_BYTES</span><span style="color: #007700">);<br /><a name="l86" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">assertInternalType</span><span style="color: #007700">(</span><span style="color: #DD0000">'integer'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$recordPos</span><span style="color: #007700">);<br /><a name="l87" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">recordDelete</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">clusterID&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">':'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$recordPos</span><span style="color: #007700">);<br /><a name="l88" />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><a name="l89" /><br /><a name="l90" />&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;function&nbsp;</span><span style="color: #0000BB">testRecordCreateWithTypeDocument</span><span style="color: #007700">()<br /><a name="l91" />&nbsp;&nbsp;&nbsp;&nbsp;{<br /><a name="l92" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">DBOpen</span><span style="color: #007700">(</span><span style="color: #DD0000">'demo'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'admin'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'admin'</span><span style="color: #007700">);<br /><a name="l93" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$recordPos&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">recordCreate</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">clusterID</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">recordContent</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">OrientDB</span><span style="color: #007700">::</span><span style="color: #0000BB">RECORD_TYPE_DOCUMENT</span><span style="color: #007700">);<br /><a name="l94" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">assertInternalType</span><span style="color: #007700">(</span><span style="color: #DD0000">'integer'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$recordPos</span><span style="color: #007700">);<br /><a name="l95" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">recordDelete</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">clusterID&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">':'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$recordPos</span><span style="color: #007700">);<br /><a name="l96" />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><a name="l97" /><br /><a name="l98" />&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;function&nbsp;</span><span style="color: #0000BB">testRecordCreateWithTypeFlat</span><span style="color: #007700">()<br /><a name="l99" />&nbsp;&nbsp;&nbsp;&nbsp;{<br /><a name="l100" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">DBOpen</span><span style="color: #007700">(</span><span style="color: #DD0000">'demo'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'admin'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'admin'</span><span style="color: #007700">);<br /><a name="l101" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$recordPos&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">recordCreate</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">clusterID</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">recordContent</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">OrientDB</span><span style="color: #007700">::</span><span style="color: #0000BB">RECORD_TYPE_FLAT</span><span style="color: #007700">);<br /><a name="l102" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">assertInternalType</span><span style="color: #007700">(</span><span style="color: #DD0000">'integer'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$recordPos</span><span style="color: #007700">);<br /><a name="l103" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">recordDelete</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">clusterID&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">':'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$recordPos</span><span style="color: #007700">);<br /><a name="l104" />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><a name="l105" /><br /><a name="l106" />&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;function&nbsp;</span><span style="color: #0000BB">testRecordCreateWithWrongType</span><span style="color: #007700">()<br /><a name="l107" />&nbsp;&nbsp;&nbsp;&nbsp;{<br /><a name="l108" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">DBOpen</span><span style="color: #007700">(</span><span style="color: #DD0000">'demo'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'admin'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'admin'</span><span style="color: #007700">);<br /><a name="l109" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setExpectedException</span><span style="color: #007700">(</span><span style="color: #DD0000">'OrientDBWrongParamsException'</span><span style="color: #007700">);<br /><a name="l110" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$recordPos&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">recordCreate</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">clusterID</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">recordContent</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'!'</span><span style="color: #007700">);<br /><a name="l111" />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><a name="l112" /><br /><a name="l113" />&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;function&nbsp;</span><span style="color: #0000BB">testRecordCreateWithOrientDBRecordType</span><span style="color: #007700">()<br /><a name="l114" />&nbsp;&nbsp;&nbsp;&nbsp;{<br /><a name="l115" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">DBOpen</span><span style="color: #007700">(</span><span style="color: #DD0000">'demo'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'admin'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'admin'</span><span style="color: #007700">);<br /><a name="l116" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$record&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #0000BB">OrientDBRecord</span><span style="color: #007700">();<br /><a name="l117" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$record</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">data</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">field&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'value'</span><span style="color: #007700">;<br /><a name="l118" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">assertNull</span><span style="color: #007700">(</span><span style="color: #0000BB">$record</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">recordPos</span><span style="color: #007700">);<br /><a name="l119" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">assertNull</span><span style="color: #007700">(</span><span style="color: #0000BB">$record</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">clusterID</span><span style="color: #007700">);<br /><a name="l120" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">assertNull</span><span style="color: #007700">(</span><span style="color: #0000BB">$record</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">recordID</span><span style="color: #007700">);<br /><a name="l121" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">assertNull</span><span style="color: #007700">(</span><span style="color: #0000BB">$record</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">version</span><span style="color: #007700">);<br /><a name="l122" /><br /><a name="l123" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$recordPos&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">recordCreate</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">clusterID</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$record</span><span style="color: #007700">);<br /><a name="l124" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">recordDelete</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">clusterID&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">':'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$recordPos</span><span style="color: #007700">);<br /><a name="l125" /><br /><a name="l126" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">assertInternalType</span><span style="color: #007700">(</span><span style="color: #DD0000">'integer'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$recordPos</span><span style="color: #007700">);<br /><a name="l127" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">assertSame</span><span style="color: #007700">(</span><span style="color: #0000BB">$recordPos</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$record</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">recordPos</span><span style="color: #007700">);<br /><a name="l128" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">assertSame</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">clusterID</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$record</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">clusterID</span><span style="color: #007700">);<br /><a name="l129" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">assertSame</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">clusterID&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">':'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$recordPos</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$record</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">recordID</span><span style="color: #007700">);<br /><a name="l130" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">assertInternalType</span><span style="color: #007700">(</span><span style="color: #DD0000">'integer'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$record</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">version</span><span style="color: #007700">);<br /><a name="l131" />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><a name="l132" />}</span>
</span>