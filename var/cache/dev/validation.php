<?php

// This file has been auto-generated by the Symfony Cache Component.

return [

'Symfony.Component.Form.Form' => 'O:49:"Symfony\\Component\\Validator\\Mapping\\ClassMetadata":10:{s:11:"constraints";a:1:{i:0;O:59:"Symfony\\Component\\Form\\Extension\\Validator\\Constraints\\Form":2:{s:7:"payload";N;s:6:"groups";a:2:{i:0;s:7:"Default";i:1;s:4:"Form";}}}s:18:"constraintsByGroup";a:2:{s:7:"Default";a:1:{i:0;r:3;}s:4:"Form";a:1:{i:0;r:3;}}s:17:"traversalStrategy";i:1;s:7:"getters";a:0:{}s:13:"groupSequence";a:0:{}s:21:"groupSequenceProvider";b:0;s:7:"members";a:1:{s:8:"children";a:1:{i:0;O:52:"Symfony\\Component\\Validator\\Mapping\\PropertyMetadata":7:{s:11:"constraints";a:0:{}s:18:"constraintsByGroup";a:0:{}s:17:"cascadingStrategy";i:2;s:17:"traversalStrategy";i:1;s:5:"class";s:27:"Symfony\\Component\\Form\\Form";s:4:"name";s:8:"children";s:8:"property";s:8:"children";}}}s:4:"name";s:27:"Symfony\\Component\\Form\\Form";s:10:"properties";a:1:{s:8:"children";r:19;}s:12:"defaultGroup";s:4:"Form";}',
'IteratorAggregate' => 'O:49:"Symfony\\Component\\Validator\\Mapping\\ClassMetadata":10:{s:11:"constraints";a:0:{}s:18:"constraintsByGroup";a:0:{}s:17:"traversalStrategy";i:1;s:7:"getters";a:0:{}s:13:"groupSequence";a:0:{}s:21:"groupSequenceProvider";b:0;s:7:"members";a:0:{}s:4:"name";s:17:"IteratorAggregate";s:10:"properties";a:0:{}s:12:"defaultGroup";s:17:"IteratorAggregate";}',
'Traversable' => 'O:49:"Symfony\\Component\\Validator\\Mapping\\ClassMetadata":10:{s:11:"constraints";a:0:{}s:18:"constraintsByGroup";a:0:{}s:17:"traversalStrategy";i:1;s:7:"getters";a:0:{}s:13:"groupSequence";a:0:{}s:21:"groupSequenceProvider";b:0;s:7:"members";a:0:{}s:4:"name";s:11:"Traversable";s:10:"properties";a:0:{}s:12:"defaultGroup";s:11:"Traversable";}',
'Symfony.Component.Form.FormInterface' => 'O:49:"Symfony\\Component\\Validator\\Mapping\\ClassMetadata":10:{s:11:"constraints";a:0:{}s:18:"constraintsByGroup";a:0:{}s:17:"traversalStrategy";i:1;s:7:"getters";a:0:{}s:13:"groupSequence";a:0:{}s:21:"groupSequenceProvider";b:0;s:7:"members";a:0:{}s:4:"name";s:36:"Symfony\\Component\\Form\\FormInterface";s:10:"properties";a:0:{}s:12:"defaultGroup";s:13:"FormInterface";}',
'Countable' => 'O:49:"Symfony\\Component\\Validator\\Mapping\\ClassMetadata":10:{s:11:"constraints";a:0:{}s:18:"constraintsByGroup";a:0:{}s:17:"traversalStrategy";i:1;s:7:"getters";a:0:{}s:13:"groupSequence";a:0:{}s:21:"groupSequenceProvider";b:0;s:7:"members";a:0:{}s:4:"name";s:9:"Countable";s:10:"properties";a:0:{}s:12:"defaultGroup";s:9:"Countable";}',
'ArrayAccess' => 'O:49:"Symfony\\Component\\Validator\\Mapping\\ClassMetadata":10:{s:11:"constraints";a:0:{}s:18:"constraintsByGroup";a:0:{}s:17:"traversalStrategy";i:1;s:7:"getters";a:0:{}s:13:"groupSequence";a:0:{}s:21:"groupSequenceProvider";b:0;s:7:"members";a:0:{}s:4:"name";s:11:"ArrayAccess";s:10:"properties";a:0:{}s:12:"defaultGroup";s:11:"ArrayAccess";}',
'FOS.UserBundle.Model.User' => 'O:49:"Symfony\\Component\\Validator\\Mapping\\ClassMetadata":10:{s:11:"constraints";a:2:{i:0;O:58:"Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntity":10:{s:7:"message";s:30:"fos_user.username.already_used";s:7:"service";s:29:"doctrine.orm.validator.unique";s:2:"em";N;s:11:"entityClass";N;s:16:"repositoryMethod";s:6:"findBy";s:6:"fields";s:17:"usernameCanonical";s:9:"errorPath";s:8:"username";s:10:"ignoreNull";b:1;s:7:"payload";N;s:6:"groups";a:2:{i:0;s:12:"Registration";i:1;s:7:"Profile";}}i:1;O:58:"Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntity":10:{s:7:"message";s:27:"fos_user.email.already_used";s:7:"service";s:29:"doctrine.orm.validator.unique";s:2:"em";N;s:11:"entityClass";N;s:16:"repositoryMethod";s:6:"findBy";s:6:"fields";s:14:"emailCanonical";s:9:"errorPath";s:5:"email";s:10:"ignoreNull";b:1;s:7:"payload";N;s:6:"groups";a:2:{i:0;s:12:"Registration";i:1;s:7:"Profile";}}}s:18:"constraintsByGroup";a:2:{s:12:"Registration";a:2:{i:0;r:3;i:1;r:16;}s:7:"Profile";a:2:{i:0;r:3;i:1;r:16;}}s:17:"traversalStrategy";i:1;s:7:"getters";a:0:{}s:13:"groupSequence";a:0:{}s:21:"groupSequenceProvider";b:0;s:7:"members";a:3:{s:8:"username";a:1:{i:0;O:52:"Symfony\\Component\\Validator\\Mapping\\PropertyMetadata":7:{s:11:"constraints";a:2:{i:0;O:48:"Symfony\\Component\\Validator\\Constraints\\NotBlank":3:{s:7:"message";s:23:"fos_user.username.blank";s:7:"payload";N;s:6:"groups";a:2:{i:0;s:12:"Registration";i:1;s:7:"Profile";}}i:1;O:46:"Symfony\\Component\\Validator\\Constraints\\Length":9:{s:10:"maxMessage";s:22:"fos_user.username.long";s:10:"minMessage";s:23:"fos_user.username.short";s:12:"exactMessage";s:108:"This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.";s:14:"charsetMessage";s:61:"This value does not match the expected {{ charset }} charset.";s:3:"max";i:180;s:3:"min";i:2;s:7:"charset";s:5:"UTF-8";s:7:"payload";N;s:6:"groups";a:2:{i:0;s:12:"Registration";i:1;s:7:"Profile";}}}s:18:"constraintsByGroup";a:2:{s:12:"Registration";a:2:{i:0;r:44;i:1;r:50;}s:7:"Profile";a:2:{i:0;r:44;i:1;r:50;}}s:17:"cascadingStrategy";i:1;s:17:"traversalStrategy";i:2;s:5:"class";s:25:"FOS\\UserBundle\\Model\\User";s:4:"name";s:8:"username";s:8:"property";s:8:"username";}}s:5:"email";a:1:{i:0;O:52:"Symfony\\Component\\Validator\\Mapping\\PropertyMetadata":7:{s:11:"constraints";a:3:{i:0;O:48:"Symfony\\Component\\Validator\\Constraints\\NotBlank":3:{s:7:"message";s:20:"fos_user.email.blank";s:7:"payload";N;s:6:"groups";a:2:{i:0;s:12:"Registration";i:1;s:7:"Profile";}}i:1;O:46:"Symfony\\Component\\Validator\\Constraints\\Length":9:{s:10:"maxMessage";s:19:"fos_user.email.long";s:10:"minMessage";s:20:"fos_user.email.short";s:12:"exactMessage";s:108:"This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.";s:14:"charsetMessage";s:61:"This value does not match the expected {{ charset }} charset.";s:3:"max";i:180;s:3:"min";i:2;s:7:"charset";s:5:"UTF-8";s:7:"payload";N;s:6:"groups";a:2:{i:0;s:12:"Registration";i:1;s:7:"Profile";}}i:2;O:45:"Symfony\\Component\\Validator\\Constraints\\Email":6:{s:7:"message";s:22:"fos_user.email.invalid";s:7:"checkMX";b:0;s:9:"checkHost";b:0;s:6:"strict";N;s:7:"payload";N;s:6:"groups";a:2:{i:0;s:12:"Registration";i:1;s:7:"Profile";}}}s:18:"constraintsByGroup";a:2:{s:12:"Registration";a:3:{i:0;r:77;i:1;r:83;i:2;r:95;}s:7:"Profile";a:3:{i:0;r:77;i:1;r:83;i:2;r:95;}}s:17:"cascadingStrategy";i:1;s:17:"traversalStrategy";i:2;s:5:"class";s:25:"FOS\\UserBundle\\Model\\User";s:4:"name";s:5:"email";s:8:"property";s:5:"email";}}s:13:"plainPassword";a:1:{i:0;O:52:"Symfony\\Component\\Validator\\Mapping\\PropertyMetadata":7:{s:11:"constraints";a:2:{i:0;O:48:"Symfony\\Component\\Validator\\Constraints\\NotBlank":3:{s:7:"message";s:23:"fos_user.password.blank";s:7:"payload";N;s:6:"groups";a:3:{i:0;s:12:"Registration";i:1;s:13:"ResetPassword";i:2;s:14:"ChangePassword";}}i:1;O:46:"Symfony\\Component\\Validator\\Constraints\\Length":9:{s:10:"maxMessage";s:140:"This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.";s:10:"minMessage";s:23:"fos_user.password.short";s:12:"exactMessage";s:108:"This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.";s:14:"charsetMessage";s:61:"This value does not match the expected {{ charset }} charset.";s:3:"max";i:4096;s:3:"min";i:2;s:7:"charset";s:5:"UTF-8";s:7:"payload";N;s:6:"groups";a:4:{i:0;s:12:"Registration";i:1;s:7:"Profile";i:2;s:13:"ResetPassword";i:3;s:14:"ChangePassword";}}}s:18:"constraintsByGroup";a:4:{s:12:"Registration";a:2:{i:0;r:121;i:1;r:128;}s:13:"ResetPassword";a:2:{i:0;r:121;i:1;r:128;}s:14:"ChangePassword";a:2:{i:0;r:121;i:1;r:128;}s:7:"Profile";a:1:{i:0;r:128;}}s:17:"cascadingStrategy";i:1;s:17:"traversalStrategy";i:2;s:5:"class";s:25:"FOS\\UserBundle\\Model\\User";s:4:"name";s:13:"plainPassword";s:8:"property";s:13:"plainPassword";}}}s:4:"name";s:25:"FOS\\UserBundle\\Model\\User";s:10:"properties";a:3:{s:8:"username";r:42;s:5:"email";r:75;s:13:"plainPassword";r:119;}s:12:"defaultGroup";s:4:"User";}',
'FOS.UserBundle.Model.UserInterface' => 'O:49:"Symfony\\Component\\Validator\\Mapping\\ClassMetadata":10:{s:11:"constraints";a:0:{}s:18:"constraintsByGroup";a:0:{}s:17:"traversalStrategy";i:1;s:7:"getters";a:0:{}s:13:"groupSequence";a:0:{}s:21:"groupSequenceProvider";b:0;s:7:"members";a:0:{}s:4:"name";s:34:"FOS\\UserBundle\\Model\\UserInterface";s:10:"properties";a:0:{}s:12:"defaultGroup";s:13:"UserInterface";}',
'Serializable' => 'O:49:"Symfony\\Component\\Validator\\Mapping\\ClassMetadata":10:{s:11:"constraints";a:0:{}s:18:"constraintsByGroup";a:0:{}s:17:"traversalStrategy";i:1;s:7:"getters";a:0:{}s:13:"groupSequence";a:0:{}s:21:"groupSequenceProvider";b:0;s:7:"members";a:0:{}s:4:"name";s:12:"Serializable";s:10:"properties";a:0:{}s:12:"defaultGroup";s:12:"Serializable";}',
'Symfony.Component.Security.Core.User.UserInterface' => 'O:49:"Symfony\\Component\\Validator\\Mapping\\ClassMetadata":10:{s:11:"constraints";a:0:{}s:18:"constraintsByGroup";a:0:{}s:17:"traversalStrategy";i:1;s:7:"getters";a:0:{}s:13:"groupSequence";a:0:{}s:21:"groupSequenceProvider";b:0;s:7:"members";a:0:{}s:4:"name";s:50:"Symfony\\Component\\Security\\Core\\User\\UserInterface";s:10:"properties";a:0:{}s:12:"defaultGroup";s:13:"UserInterface";}',
'Symfony.Component.Security.Core.User.AdvancedUserInterface' => 'O:49:"Symfony\\Component\\Validator\\Mapping\\ClassMetadata":10:{s:11:"constraints";a:0:{}s:18:"constraintsByGroup";a:0:{}s:17:"traversalStrategy";i:1;s:7:"getters";a:0:{}s:13:"groupSequence";a:0:{}s:21:"groupSequenceProvider";b:0;s:7:"members";a:0:{}s:4:"name";s:58:"Symfony\\Component\\Security\\Core\\User\\AdvancedUserInterface";s:10:"properties";a:0:{}s:12:"defaultGroup";s:21:"AdvancedUserInterface";}',
'FOS.UserBundle.Model.GroupableInterface' => 'O:49:"Symfony\\Component\\Validator\\Mapping\\ClassMetadata":10:{s:11:"constraints";a:0:{}s:18:"constraintsByGroup";a:0:{}s:17:"traversalStrategy";i:1;s:7:"getters";a:0:{}s:13:"groupSequence";a:0:{}s:21:"groupSequenceProvider";b:0;s:7:"members";a:0:{}s:4:"name";s:39:"FOS\\UserBundle\\Model\\GroupableInterface";s:10:"properties";a:0:{}s:12:"defaultGroup";s:18:"GroupableInterface";}',
'FOS.UserBundle.Model.Group' => 'O:49:"Symfony\\Component\\Validator\\Mapping\\ClassMetadata":10:{s:11:"constraints";a:1:{i:0;O:58:"Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntity":10:{s:7:"message";s:27:"fos_group.name.already_used";s:7:"service";s:29:"doctrine.orm.validator.unique";s:2:"em";N;s:11:"entityClass";N;s:16:"repositoryMethod";s:6:"findBy";s:6:"fields";s:4:"name";s:9:"errorPath";s:4:"name";s:10:"ignoreNull";b:1;s:7:"payload";N;s:6:"groups";a:1:{i:0;s:12:"Registration";}}}s:18:"constraintsByGroup";a:1:{s:12:"Registration";a:1:{i:0;r:3;}}s:17:"traversalStrategy";i:1;s:7:"getters";a:0:{}s:13:"groupSequence";a:0:{}s:21:"groupSequenceProvider";b:0;s:7:"members";a:1:{s:4:"name";a:1:{i:0;O:52:"Symfony\\Component\\Validator\\Mapping\\PropertyMetadata":7:{s:11:"constraints";a:2:{i:0;O:48:"Symfony\\Component\\Validator\\Constraints\\NotBlank":3:{s:7:"message";s:20:"fos_user.group.blank";s:7:"payload";N;s:6:"groups";a:1:{i:0;s:12:"Registration";}}i:1;O:46:"Symfony\\Component\\Validator\\Constraints\\Length":9:{s:10:"maxMessage";s:19:"fos_user.group.long";s:10:"minMessage";s:20:"fos_user.group.short";s:12:"exactMessage";s:108:"This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.";s:14:"charsetMessage";s:61:"This value does not match the expected {{ charset }} charset.";s:3:"max";i:180;s:3:"min";i:2;s:7:"charset";s:5:"UTF-8";s:7:"payload";N;s:6:"groups";a:1:{i:0;s:12:"Registration";}}}s:18:"constraintsByGroup";a:1:{s:12:"Registration";a:2:{i:0;r:26;i:1;r:31;}}s:17:"cascadingStrategy";i:1;s:17:"traversalStrategy";i:2;s:5:"class";s:26:"FOS\\UserBundle\\Model\\Group";s:4:"name";s:4:"name";s:8:"property";s:4:"name";}}}s:4:"name";s:26:"FOS\\UserBundle\\Model\\Group";s:10:"properties";a:1:{s:4:"name";r:24;}s:12:"defaultGroup";s:5:"Group";}',
'FOS.UserBundle.Model.GroupInterface' => 'O:49:"Symfony\\Component\\Validator\\Mapping\\ClassMetadata":10:{s:11:"constraints";a:0:{}s:18:"constraintsByGroup";a:0:{}s:17:"traversalStrategy";i:1;s:7:"getters";a:0:{}s:13:"groupSequence";a:0:{}s:21:"groupSequenceProvider";b:0;s:7:"members";a:0:{}s:4:"name";s:35:"FOS\\UserBundle\\Model\\GroupInterface";s:10:"properties";a:0:{}s:12:"defaultGroup";s:14:"GroupInterface";}',

];
