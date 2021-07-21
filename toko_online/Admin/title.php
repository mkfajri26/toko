<?php 
if($_SESSION['usertype'] == 'admin')
{
  echo strip_tags ("Admin Area | $namatoko");
}
if($_SESSION['usertype'] == 'superadmin')
{
  echo strip_tags ("Super Admin Area | $namatoko");
}
?>