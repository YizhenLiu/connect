{\rtf1\ansi\ansicpg1252\deff0\deflang3081{\fonttbl{\f0\froman\fcharset0 Times New Roman;}{\f1\fswiss\fcharset0 Arial;}}
{\*\generator Msftedit 5.41.15.1515;}\viewkind4\uc1\pard\sb100\sa100\f0\fs24 <?php\par
/**\par
* MySQL connection check\par
*\par
* Checks the connection to the local install of MySQL\par
* \par
* @author Donal Ellis <donal.ellis@rmit.edu.au>\par
* @version 1.0\par
* @package Connect\par
*/\par
require_once('db.php');\par
if (!$dbconn = mysql_connect(DB_HOST, DB_USER, DB_PW)) \{\par
echo 'Could not connect to mysql on ' . DB_HOST . "\\n";\par
exit;\par
\}\par
echo 'Connected to mysql on ' . DB_HOST . "<br/>\\n";\par
if (!mysql_select_db(DB_NAME, $dbconn)) \{\par
echo 'Could not use database ' . DB_NAME . "\\n";\par
echo mysql_error() . "\\n";\par
exit;\par
\}\par
echo 'Connected to database ' . DB_NAME . "<br/>\\n";\par
?>\par
\pard\f1\fs20\par
}
 