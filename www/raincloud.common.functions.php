<?php

function showHeader(){

  echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
        <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
        <head>
        <body bgcolor="silver">
        <link rel="stylesheet" type="text/css" href="css/general.css">
        <script type="text/javascript" src="js/general.js"></script>';
        
  echo '<table class="main" align="center" bgcolor="white" width="60%">
          <tr>
            <td>
            </td>
            <td>
            </td>
            <td align="right">
              <img height="70px" src="img/raincloud-logo.png">
            </td>
            
          </tr>';

}

function showFooter(){

  echo '</td>
      </table>
    </html>';
    
}

function showNavigation(){

  echo '<tr>
          <td colspan="3" align="center">';
  echo '<nav id="menu-wrap">';
  echo '<meta name="viewport" content="width=device-width">';

  echo '<link rel="stylesheet" type="text/css" href="css/navigation.css">';
  echo '<script type="text/javascript" src="js/navigation.js"></script>';
  echo '<ul id="menu">';
  
  showNavigationChildren(0);
  
  echo '</ul>';
  echo '</nav>';

}

function showNavigationChildren($parent){

  $mysql_select_children = "SELECT * FROM `navigation` WHERE `parent`='".$parent."'";
  $query = mysql_query($mysql_select_children);
  while ($child = mysql_fetch_array($query)) {
      echo '<li><a href="#">'.$child["name"].'</a>
            <ul>';
      showNavigationChildren($child["id"]);
      echo '</ul>
            </li>';
  }

}




?>