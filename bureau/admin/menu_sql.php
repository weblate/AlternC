<?php
/*
 ----------------------------------------------------------------------
 AlternC - Web Hosting System
 Copyright (C) 2000-2012 by the AlternC Development Team.
 https://alternc.org/
 ----------------------------------------------------------------------
 LICENSE

 This program is free software; you can redistribute it and/or
 modify it under the terms of the GNU General Public License (GPL)
 as published by the Free Software Foundation; either version 2
 of the License, or (at your option) any later version.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License for more details.

 To read the license please visit http://www.gnu.org/copyleft/gpl.html
 ----------------------------------------------------------------------
*/
$q = $quota->getquota("mysql");
if ($q["t"] > 0 || $q['u'] >0) {
?>
<div class="menu-box">
<a href="javascript:menu_toggle('menu-sql');">
<div class="menu-title">
<img src="images/mysql.png" alt="MySQL" />&nbsp;MySQL (<?php echo $q["u"]; ?>/<?php echo $q["t"]; ?>)
<img src="/images/menu_moins.png" alt="" style="float:right;" id="menu-sql-img"/>
</div>
</a>
<div class="menu-content" id="menu-sql">
<ul>
<li><a href="sql_list.php"><?php __("Databases"); ?></a></li>
<li><a href="sql_users_list.php"><?php __("MySQL Users") ?></a></li>
<?php if ($q["u"] > 0 ) { ?>
  <li><a target="_blank" href="sql_admin.php"><?php __("PhpMyAdmin"); ?></a></li>
<?php } ?>
</ul>
</div>
</div>
<?php } ?>