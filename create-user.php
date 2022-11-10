<?php

# Create New admin User programmatically.
require_once('./app/Mage.php');
umask(0);
Mage::app();

try {
    $user = Mage::getModel('admin/user')->setData(array(
'username' => 'admin',
'firstname' => 'Admin',
'lastname' => 'Admin',
'email' => 'email@admin.com',
'password' => 'admin123',
'is_active' => 1
))->save();
}
catch (Exception $e) {
echo $e->getMessage();
exit;
}

//Assign Role Id
try {
$user->setRoleIds(array(1))  //Administrator role id is 1 ,Here you can assign other roles ids
->setRoleUserId($user->getUserId())
->saveRelations();
}catch (\Exception $e){

}

?>