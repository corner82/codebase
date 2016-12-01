<?php
/**
 * Global Configuration Override
 *
 * You can use this file for overriding configuration values from modules, etc.
 * You would place values in here that are agnostic to the environment and not
 * sensitive to security.
 *
 * @NOTE: In practice, this file will typically be INCLUDED in your source
 * control, so do not include passwords or other sensitive information in this
 * file.
 */

return array(
    'module_layouts' => array(
       'Application' => 'layout/layout.phtml',
       'Admin' => 'layout/admin.phtml',      
       'Login' => 'layout/login.phtml',
       'Sanalfabrika' => 'layout/sanalfabrika.phtml',
       'Error' => 'layout/error.phtml',
   ),
    'action_layouts' => array(
        'Sanalfabrika' => array(
            'registration' => 'layout/registrationLayout.phtml',
            'login' => 'layout/loginLayout.phtml',
            'cmt' => 'layout/cmtLayout.phtml',
            'prodsercat' => 'layout/prodsercatLayout.phtml',
            'userprofile' => 'layout/userprofileLayout.phtml',
            'userprofilepersonal' => 'layout/userprofilepersonalLayout.phtml',
            'userprofileusers' => 'layout/userprofileusersLayout.phtml',
            'userprofileprojects' => 'layout/userprofileprojectsLayout.phtml',
            'userprofilecomments' => 'layout/userprofilecommentsLayout.phtml',
            'userprofilehistory' => 'layout/userprofilehistoryLayout.phtml',
            'userprofilesettings' => 'layout/userprofilesettingsLayout.phtml',
            'companyprofile' => 'layout/companyprofileLayout.phtml',
            'companyperformancemetersprofile' => 'layout/companyperformancemetersprofileLayout.phtml',
            'companyproductsprofile' => 'layout/companyproductsprofileLayout.phtml',
            'companycommentsprofile' => 'layout/companycommentsprofileLayout.phtml',
            'companymembersprofile' => 'layout/companymembersprofileLayout.phtml',
            'companyhistoryprofile' => 'layout/companyhistoryprofileLayout.phtml',
            'companyprojectsprofile' => 'layout/companyprojectsprofileLayout.phtml',
            'companyprofilesettings' => 'layout/companyprofilesettingsLayout.phtml',
            'companymtprofile' => 'layout/companymtprofileLayout.phtml',
            'clientspage' => 'layout/clientspageLayout.phtml',
            'sfmachines' => 'layout/sfmachinesLayout.phtml',
            'cprofileset' => 'layout/cprofilesetLayout.phtml',
            'cpgeneralset' => 'layout/cpgeneralsetLayout.phtml',
            'cpaddressset' => 'layout/cpaddresssetLayout.phtml',
            'cpprodset' => 'layout/cpprodsetLayout.phtml',
            'cpmemberset' => 'layout/cpmembersetLayout.phtml',
            'cpmp' => 'layout/cpmpLayout.phtml',
            'cpreference' => 'layout/cpreferenceLayout.phtml',
            'projreg' => 'layout/projregLayout.phtml',
            'uprofset' => 'layout/uprofsetLayout.phtml',
            'projpool' => 'layout/projpoolLayout.phtml',
            'signupconfirmation' => 'layout/signupconfirmationLayout.phtml',
            'index' => 'layout/sanalfabrika.phtml'
        ),
        'Admin' => array( 'index' => 'layout/admin.phtml',
                          'menu' => 'layout/menu.phtml',
                          'aclresources' => 'layout/aclresources.phtml',
                          'aclroles' => 'layout/aclroles.phtml',
                          'aclprivileges' => 'layout/aclprivileges.phtml',
                          'aclroleprivilege' => 'layout/aclroleprivilege.phtml',
                          'aclprivilegeservices' => 'layout/aclprivilegeservices.phtml',
                          'menutypes' => 'layout/menutypes.phtml',
                          'modules' => 'layout/modules.phtml',
                          'actions' => 'layout/actions.phtml',
                          'actionmenus' => 'layout/actionmenus.phtml',
                          'services' => 'layout/services.phtml',
                          'servicegroups' => 'layout/servicegroups.phtml',
                          'operationdef' => 'layout/operationdef.phtml',
                          'actionprivilegeservice' => 'layout/actionprivilegeservice.phtml',
                          'actionprivilege' => 'layout/actionprivilege.phtml',
                        ),
        'Error' => array(
            'index' => 'layout/401layout.phtml',
                        ),
   ),
    'session' => array(
        'config' => array(
            'class' => 'Zend\Session\Config\SessionConfig',     
            'options' => array(
                'name' => 'dev',    
            ),
        ),
        'savehandler' => array(
            'database'=> array(
                    'table'=> 'act_session',
                    'savehandler' => 'sessionDbSaveHandler',
                ),
        ),
        'storage' => 'Zend\Session\Storage\SessionArrayStorage',
        'validators' => array(
            'Zend\\Session\\Validator\\RemoteAddr',   
            'Zend\\Session\\Validator\\HttpUserAgent',       
        ),
        'remember_me_seconds' => 2419200,
        'use_cookies' => true,
        'cookie_httponly' => true,
    ),
    'dbAdapterPostgre' => array(
        'driver'    => 'Pdo',    
        'dsn'       => "pgsql:host=localhost;dbname=development",
        'username'  => 'postgres',
        'password'  => '1Qaaal123',          
    ),
    'authentication' => array(
        'database' => array (
            'table' => 'info_users',
            'identityColumn' => 'username',
            'credentialColumn' => 'password',    
        )        
    ),
    'ControlorsTobeAuthenticated' => array(
        'Admin',
        'Sanalfabrika',
    ),
    'ActionsTobeAuthenticated' => array(
        'Sanalfabrika' => array(
            'cmt',
            'prodsercat',
            'cprofileset',
            'cpgeneralset',
            'cpaddressset',
            'cpprodset',
            'cpmp',
            'cpmemberset',
            'cpreference',
            'projreg',
            'uprofset',
            'projpool'
        ),

    ),
); 
