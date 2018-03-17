<span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /><a name="l1" /><br /><a name="l2" /></span><span style="color: #FF8000">/**<br /><a name="l3" />&nbsp;*&nbsp;@author&nbsp;Anton&nbsp;Terekhov&nbsp;&lt;anton@netmonsters.ru&gt;<br /><a name="l4" />&nbsp;*&nbsp;@copyright&nbsp;Copyright&nbsp;Anton&nbsp;Terekhov,&nbsp;NetMonsters&nbsp;LLC,&nbsp;2011<br /><a name="l5" />&nbsp;*&nbsp;@license&nbsp;https://github.com/AntonTerekhov/OrientDB-PHP/blob/master/LICENSE<br /><a name="l6" />&nbsp;*&nbsp;@link&nbsp;https://github.com/AntonTerekhov/OrientDB-PHP<br /><a name="l7" />&nbsp;*&nbsp;@package&nbsp;OrientDB-PHP<br /><a name="l8" />&nbsp;*/<br /><a name="l9" /><br /><a name="l10" />/**<br /><a name="l11" />&nbsp;*&nbsp;DBExists()&nbsp;command&nbsp;for&nbsp;OrientDB-PHP<br /><a name="l12" />&nbsp;*<br /><a name="l13" />&nbsp;*&nbsp;@author&nbsp;Anton&nbsp;Terekhov&nbsp;&lt;anton@netmonsters.ru&gt;<br /><a name="l14" />&nbsp;*&nbsp;@package&nbsp;OrientDB-PHP<br /><a name="l15" />&nbsp;*&nbsp;@subpackage&nbsp;Command<br /><a name="l16" />&nbsp;*/<br /><a name="l17" /></span><span style="color: #007700">class&nbsp;</span><span style="color: #0000BB">OrientDBCommandDBExists&nbsp;</span><span style="color: #007700">extends&nbsp;</span><span style="color: #0000BB">OrientDBCommandAbstract<br /><a name="l18" /></span><span style="color: #007700">{<br /><a name="l19" /><br /><a name="l20" />&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;function&nbsp;</span><span style="color: #0000BB">__construct</span><span style="color: #007700">(</span><span style="color: #0000BB">$parent</span><span style="color: #007700">)<br /><a name="l21" />&nbsp;&nbsp;&nbsp;&nbsp;{<br /><a name="l22" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">__construct</span><span style="color: #007700">(</span><span style="color: #0000BB">$parent</span><span style="color: #007700">);<br /><a name="l23" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">opType&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">OrientDBCommandAbstract</span><span style="color: #007700">::</span><span style="color: #0000BB">DB_EXIST</span><span style="color: #007700">;<br /><a name="l24" />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><a name="l25" /><br /><a name="l26" />&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;function&nbsp;</span><span style="color: #0000BB">prepare</span><span style="color: #007700">()<br /><a name="l27" />&nbsp;&nbsp;&nbsp;&nbsp;{<br /><a name="l28" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">prepare</span><span style="color: #007700">();<br /><a name="l29" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">count</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">attribs</span><span style="color: #007700">)&nbsp;!=&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">)&nbsp;{<br /><a name="l30" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">OrientDBWrongParamsException</span><span style="color: #007700">(</span><span style="color: #DD0000">'This&nbsp;command&nbsp;requires&nbsp;DB&nbsp;name'</span><span style="color: #007700">);<br /><a name="l31" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br /><a name="l32" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Add&nbsp;DB&nbsp;name<br /><a name="l33" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addString</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">attribs</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">]);<br /><a name="l34" />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><a name="l35" /><br /><a name="l36" />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">/**<br /><a name="l37" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;(non-PHPdoc)<br /><a name="l38" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;@see&nbsp;OrientDBCommandAbstract::parseResponse()<br /><a name="l39" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;@return&nbsp;bool<br /><a name="l40" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/<br /><a name="l41" />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">parseResponse</span><span style="color: #007700">()<br /><a name="l42" />&nbsp;&nbsp;&nbsp;&nbsp;{<br /><a name="l43" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">debugCommand</span><span style="color: #007700">(</span><span style="color: #DD0000">'exist_result'</span><span style="color: #007700">);<br /><a name="l44" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$result&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">readByte</span><span style="color: #007700">();<br /><a name="l45" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$result&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #0000BB">chr</span><span style="color: #007700">(</span><span style="color: #0000BB">1</span><span style="color: #007700">))&nbsp;{<br /><a name="l46" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br /><a name="l47" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br /><a name="l48" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br /><a name="l49" />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><a name="l50" />}</span>
</span>