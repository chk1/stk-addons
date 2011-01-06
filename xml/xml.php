<?
/* copyright 2009 Lucas Baudin <xapantu@gmail.com>                 
                                                                              
 This file is part of stkaddons.                                 
                                                                              
 stkaddons is free software: you can redistribute it and/or      
 modify it under the terms of the GNU General Public License as published by  
 the Free Software Foundation, either version 3 of the License, or (at your   
 option) any later version.                                                   
                                                                              
 stkaddons is distributed in the hope that it will be useful, but
 WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or
 FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License for    
 more details.                                                                
                                                                              
 You should have received a copy of the GNU General Public License along with 
 stkaddons.  If not, see <http://www.gnu.org/licenses/>.   */

define ("ROOT", "../");
include("../include/connectMysql.php");
echo "<?xml version=\"1.0\"?>\n";
?>
<addons  xmlns='http://stkaddons.tuxfamily.org/'>
    <news>:)</news>
    <redirect></redirect>
<?php
$addon  = new coreAddon('karts');
$addon->loadAll();
while($addon->next())
{
?>
    <kart
        name="<?=$addon->addonCurrent["name"]?>"
        description="<?=$addon->addonCurrent["Description"]?>"
        version="<?=$addon->addonCurrent["version"]?>"
        stkversion="<?=$addon->addonCurrent["STKVersion"]?>"
        file="<?=DOWN_LOCATION.$addon->addonCurrent["file"]?>"
        testing="<?=$addon->addonCurrent["available"]?>"
        icon="<?='../icon/'.$addon->addonCurrent["icon"]?>"
    />
<?php
}
$addon  = new coreAddon('tracks');
$addon->loadAll();
while($addon->next())
{
?>
    <track>
        name="<?=$addon->addonCurrent["name"]?>"
        description="<?=$addon->addonCurrent["Description"]?>"
        version="<?=$addon->addonCurrent["version"]?>"
        stkversion="<?=$addon->addonCurrent["STKVersion"]?>"
        file="<?=DOWN_LOCATION.$addon->addonCurrent["file"]?>"
        testing"<?=$addon->addonCurrent["available"]?>"
        icon="<?='../icon/'.$addon->addonCurrent["icon"]?>"
    </track>
<?php
}
echo "</addons>";
?>
