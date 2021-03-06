<?php

/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */

$mod_strings = array(
    'LBL_MODULE_NAME' => 'Health Check',
    'LBL_MODULE_NAME_SINGULAR' => 'Health Check',
    'LBL_MODULE_TITLE' => 'Health Check',
    'LBL_LOGFILE' => 'Log file',
    'LBL_BUCKET' => 'Bucket',
    'LBL_FLAG' => 'Flag',
    'LBL_LOGMETA' => 'Log meta',
    'LBL_ERROR' => 'Error',

    'LBL_SCAN_101_LOG' => '%s has studio history',
    'LBL_SCAN_102_LOG' => '%s has extensions: %s',
    'LBL_SCAN_103_LOG' => '%s has custom vardefs',
    'LBL_SCAN_104_LOG' => '%s has custom layoutdefs',
    'LBL_SCAN_105_LOG' => '%s has custom viewdefs',

    'LBL_SCAN_201_LOG' => '%s is not a stock module',

    'LBL_SCAN_301_LOG' => '%s to be run as BWC',
    'LBL_SCAN_302_LOG' => 'Unknown file views present - %s is not MB module',
    'LBL_SCAN_303_LOG' => 'Non-empty form file %s - %s is not MB module',
    'LBL_SCAN_304_LOG' => 'Unknown files: %s%s - %s is not MB module',
    'LBL_SCAN_305_LOG' => 'Bad vardefs - key %s, name %s in module %s',
    'LBL_SCAN_306_LOG' => 'Bad vardefs - relate field %s in module %s has empty `module`',
    'LBL_SCAN_307_LOG' => 'Bad vardefs - link %s in module %s refers to invalid relationship',
    'LBL_SCAN_308_LOG' => 'Vardef HTML function in %s',
    'LBL_SCAN_309_LOG' => 'Bad md5 for %s',
    'LBL_SCAN_310_LOG' => 'Unknown file %s/%s',
    'LBL_SCAN_311_LOG' => 'Vardef HTML function %s in $module module for field %s',
    'LBL_SCAN_312_LOG' => 'Bad vardefs - \'name\' field type is invalid \'%s\', module - \'%s\'',
    'LBL_SCAN_313_LOG' => 'Extension dir %s detected - %s is not MB module',
    'LBL_SCAN_314_LOG' => "Bad vardefs - multienum field '%s' with options list '%s' keys contain incompatible characters - '{%s}' in module %s",

    'LBL_SCAN_401_LOG' => 'Vendor files inclusion found, for files that have been moved to vendor:'. PHP_EOL .'%s',
    'LBL_SCAN_402_LOG' => 'Bad module %s - not in beanList and not in filesystem',
    'LBL_SCAN_403_LOG' => 'Specific Sugar files inclusion found for:' . PHP_EOL .'%s',
    'LBL_SCAN_520_LOG' => 'Logic hook after_ui_frame detected in %s',
    'LBL_SCAN_521_LOG' => 'Logic hook after_ui_footer detected in %s',
//    'LBL_SCAN_405_LOG' => 'Incompatible Integration - %s %s',
    'LBL_SCAN_406_LOG' => '%s has unsupported custom views. These custom views files will be moved to a Disabled directory during the upgrade',
    'LBL_SCAN_407_LOG' => '%s has unsupported custom views. These custom views files will be moved to a Disabled directory during the upgrade',
    'LBL_SCAN_519_LOG' => 'Extension dir %s detected',
    'LBL_SCAN_518_LOG' => 'Found customCode %s in %s, file %s',
    'LBL_SCAN_410_LOG' => 'Max fields - Found more than %s fields (%s) in %s',
    'LBL_SCAN_522_LOG' => 'Found \'get_subpanel_data\' with \'function:\' value in %s',
    'LBL_SCAN_412_LOG' => 'Bad subpanel link %s in %s',
    'LBL_SCAN_413_LOG' => 'Unknown widget class detected: %s for %s, module %s in file %s',
    'LBL_SCAN_414_LOG' => 'Unknown fields handled by CRYS-36, so no more checks here',
    'LBL_SCAN_415_LOG' => 'Bad hook file in %s: %s',
    'LBL_SCAN_523_LOG' => 'By-ref parameter in hook file %s function %s',
    'LBL_SCAN_417_LOG' => 'Incompatible module %s',
    'LBL_SCAN_418_LOG' => 'Found subpanel with link to non-existing module: %s',
    'LBL_SCAN_419_LOG' => 'Bad vardefs - key %s, name %s in module %s',
    'LBL_SCAN_420_LOG' => 'Bad vardefs - relate field %s in module %s has empty `module`',
    'LBL_SCAN_421_LOG' => 'Bad vardefs - link %s in module %s refers to invalid relationship',
    'LBL_SCAN_525_LOG' => 'Vardef HTML function in %s',
    'LBL_SCAN_423_LOG' => 'Bad vardefs subfields - %s refers to bad subfield %s',
    'LBL_SCAN_424_LOG' => 'Inline HTML found in %s on line %s',
    'LBL_SCAN_425_LOG' => 'Found "echo" in %s on line %s',
    'LBL_SCAN_426_LOG' => 'Found "print" in %s on line %s',
    'LBL_SCAN_427_LOG' => 'Found "die/exit" in %s on line %s',
    'LBL_SCAN_428_LOG' => 'Found "print_r" in %s on line %s',
    'LBL_SCAN_429_LOG' => 'Found "var_dump" in %s on line %s',
    'LBL_SCAN_430_LOG' => 'Found output buffering (%s) in %s on line %s',
    'LBL_SCAN_524_LOG' => 'Vardef HTML function %s in %s module for field %s',
    'LBL_SCAN_432_LOG' => 'Bad vardefs - \'name\' field type is invalid \'%s\', module - \'%s\'',
    'LBL_SCAN_526_LOG' => "Bad vardefs - multienum field '%s' with options list '%s' keys contain incompatible characters - '%s' in module %s",
    'LBL_SCAN_527_LOG' => "Table name in bean %s does not match the table attribute in the %s/vardefs.php",
    'LBL_SCAN_528_LOG' => 'Field %s of %s module has incorrect display_default value',
    'LBL_SCAN_529_LOG' => '%s: %s in file %s on line %s',
    'LBL_SCAN_530_LOG' => 'Missing custom file: %s',

    'LBL_SCAN_501_LOG' => 'Missing file: %s',
    'LBL_SCAN_502_LOG' => 'md5 mismatch for %s, expected %s',
    'LBL_SCAN_503_LOG' => 'Custom module with the same name as new Sugar7 module: %s',
    'LBL_SCAN_504_LOG' => 'Field type missing in module %s: %s',
    'LBL_SCAN_505_LOG' => 'Type change in %s for field %s: from %s to %s',
    'LBL_SCAN_506_LOG' => '$this usage in %s',
    'LBL_SCAN_507_LOG' => 'Bad vardefs subfields - %s refers to bad subfield %s. Located in module %s',
    'LBL_SCAN_508_LOG' => 'Inline HTML found in %s on line %s',
    'LBL_SCAN_509_LOG' => 'Found "echo" in %s on line %s',
    'LBL_SCAN_510_LOG' => 'Found "print" in %s on line %s',
    'LBL_SCAN_511_LOG' => 'Found "die/exit" in %s on line %s',
    'LBL_SCAN_512_LOG' => 'Found "print_r" in %s on line %s',
    'LBL_SCAN_513_LOG' => 'Found "var_dump" in %s on line %s',
    'LBL_SCAN_514_LOG' => 'Found output buffering (%s) in %s on line %s',
    'LBL_SCAN_515_LOG' => 'Script failure: %s',
    'LBL_SCAN_516_LOG' => 'Previously removed files found referenced in: %s',
    'LBL_SCAN_517_LOG' => 'Incompatible Integration - %s %s',

    'LBL_SCAN_901_LOG' => 'Instance already upgraded to Sugar 7',
    'LBL_SCAN_999_LOG' => 'Unknown failure, please consult support',

    'LBL_SCAN_101_TITLE' => '%s has studio history',
    'LBL_SCAN_102_TITLE' => '%s has extensions: %s',
    'LBL_SCAN_103_TITLE' => '%s has custom vardefs',
    'LBL_SCAN_104_TITLE' => '%s has custom layoutdefs',
    'LBL_SCAN_105_TITLE' => '%s has custom viewdefs',

    'LBL_SCAN_201_TITLE' => '%s is not a stock module',

    'LBL_SCAN_301_TITLE' => '%s to be run as BWC',
    'LBL_SCAN_302_TITLE' => 'Unknown file views present - %s is not MB module',
    'LBL_SCAN_303_TITLE' => 'Non-empty form file %s - %s is not MB module',
    'LBL_SCAN_304_TITLE' => 'Unknown files: %s%s - %s is not MB module',
    'LBL_SCAN_305_TITLE' => 'Bad vardefs - key %s, name %s in module %s',
    'LBL_SCAN_306_TITLE' => 'Bad vardefs - relate field %s in module %s has empty `module`',
    'LBL_SCAN_307_TITLE' => 'Bad vardefs - link %s in module %s refers to invalid relationship',
    'LBL_SCAN_308_TITLE' => 'Vardef HTML function in %s',
    'LBL_SCAN_309_TITLE' => 'Bad md5 for %s',
    'LBL_SCAN_310_TITLE' => 'Unknown file %s/%s',
    'LBL_SCAN_311_TITLE' => 'Vardef HTML function %s in $module module for field %s',
    'LBL_SCAN_312_TITLE' => 'Bad vardefs - \'name\' field type is invalid \'%s\', module - \'%s\'',
    'LBL_SCAN_313_TITLE' => 'Extension dir %s detected - %s is not MB module',

    'LBL_SCAN_401_TITLE' => 'Vendor files inclusion found, for files that have been moved to vendor:'. PHP_EOL .'%s',
    'LBL_SCAN_402_TITLE' => 'Bad module %s - not in beanList and not in filesystem',
    'LBL_SCAN_403_TITLE' => 'Specific Sugar files inclusion found for:' . PHP_EOL .'%s',
    'LBL_SCAN_520_TITLE' => 'Logic hook after_ui_frame detected in %s',
    'LBL_SCAN_521_TITLE' => 'Logic hook after_ui_footer detected in %s',
//    'LBL_SCAN_405_TITLE' => 'Incompatible Integration - %s %s',
    'LBL_SCAN_406_TITLE' => '%s has unsupported custom views. These custom views files will be moved to a Disabled directory during the upgrade',
    'LBL_SCAN_407_TITLE' => '%s has unsupported custom views. These custom views files will be moved to a Disabled directory during the upgrade',
    'LBL_SCAN_519_TITLE' => 'Extension dir %s detected',
    'LBL_SCAN_518_TITLE' => 'Found customCode %s in %s, file %s',
    'LBL_SCAN_410_TITLE' => 'Max fields - Found more than %s fields (%s) in %s',
    'LBL_SCAN_522_TITLE' => 'Found \'get_subpanel_data\' with \'function:\' value in %s',
    'LBL_SCAN_412_TITLE' => 'Bad subpanel link %s in %s',
    'LBL_SCAN_413_TITLE' => 'Unknown widget class detected: %s for %s, module %s in file %s',
    'LBL_SCAN_414_TITLE' => 'Unknown fields handled by CRYS-36, so no more checks here',
    'LBL_SCAN_415_TITLE' => 'Bad hook file in %s: %s',
    'LBL_SCAN_523_TITLE' => 'By-ref parameter in hook file %s function %s',
    'LBL_SCAN_417_TITLE' => 'Incompatible module %s',
    'LBL_SCAN_418_TITLE' => 'Found subpanel with link to non-existing module: %s',
    'LBL_SCAN_419_TITLE' => 'Bad vardefs - key %s, name %s in module %s',
    'LBL_SCAN_420_TITLE' => 'Bad vardefs - relate field %s in module %s has empty `module`',
    'LBL_SCAN_421_TITLE' => 'Bad vardefs - link %s in module %s refers to invalid relationship',
    'LBL_SCAN_525_TITLE' => 'Vardef HTML function in %s',
    'LBL_SCAN_423_TITLE' => 'Bad vardefs subfields - %s refers to bad subfield %s',
    'LBL_SCAN_424_TITLE' => 'Inline HTML found in %s on line %s',
    'LBL_SCAN_425_TITLE' => 'Found "echo" in %s on line %s',
    'LBL_SCAN_426_TITLE' => 'Found "print" in %s on line %s',
    'LBL_SCAN_427_TITLE' => 'Found "die/exit" in %s on line %s',
    'LBL_SCAN_428_TITLE' => 'Found "print_r" in %s on line %s',
    'LBL_SCAN_429_TITLE' => 'Found "var_dump" in %s on line %s',
    'LBL_SCAN_430_TITLE' => 'Found output buffering (%s) in %s on line %s',
    'LBL_SCAN_524_TITLE' => 'Vardef HTML function %s in %s module for field %s',
    'LBL_SCAN_432_TITLE' => 'Bad vardefs - \'name\' field type is invalid \'%s\', module - \'%s\'',

    'LBL_SCAN_501_TITLE' => 'Missing file: %s',
    'LBL_SCAN_502_TITLE' => 'md5 mismatch for %s, expected %s',
    'LBL_SCAN_503_TITLE' => 'Custom module with the same name as new Sugar7 module: %s',
    'LBL_SCAN_504_TITLE' => 'Field type missing in module %s: %s',
    'LBL_SCAN_505_TITLE' => 'Type change in %s for field %s: from %s to %s',
    'LBL_SCAN_506_TITLE' => '$this usage in %s',
    'LBL_SCAN_507_TITLE' => 'Bad vardefs subfields - %s refers to bad subfield %s in module %s. Located in module %s',
    'LBL_SCAN_508_TITLE' => 'Inline HTML found in %s on line %s',
    'LBL_SCAN_509_TITLE' => 'Found "echo" in %s on line %s',
    'LBL_SCAN_510_TITLE' => 'Found "print" in %s on line %s',
    'LBL_SCAN_511_TITLE' => 'Found "die/exit" in %s on line %s',
    'LBL_SCAN_512_TITLE' => 'Found "print_r" in %s on line %s',
    'LBL_SCAN_513_TITLE' => 'Found "var_dump" in %s on line %s',
    'LBL_SCAN_514_TITLE' => 'Found output buffering (%s) in %s on line %s',
    'LBL_SCAN_515_TITLE' => 'Script failure: %s',
    'LBL_SCAN_517_TITLE' => 'Incompatible Integration - %s %s',
    'LBL_SCAN_526_TITLE' => "Bad vardefs - multienum field '%s' with options list '%s' keys contain incompatible characters - '%s' in module %s",
    'LBL_SCAN_528_TITLE' => 'Field %s of %s module has incorrect display_default value',
    'LBL_SCAN_529_TITLE' => '%s: %s in file %s on line %s',
    'LBL_SCAN_530_TITLE' => 'Missing custom file: %s',

    'LBL_SCAN_901_TITLE' => 'Instance already upgraded to Sugar 7',
    'LBL_SCAN_999_TITLE' => 'Unknown failure, please consult support',

    'LBL_SCAN_101_DESCR' => 'Studio customizations were detected on your instance.  We do not anticipate any problems with these customization and your customizations can be upgraded to Sugar7.',
    'LBL_SCAN_102_DESCR' => 'Studio customizations were detected on your instance.  We do not anticipate any problems with these customization and your customizations can be upgraded to Sugar7.',
    'LBL_SCAN_103_DESCR' => 'Studio customizations were detected on your instance.  We do not anticipate any problems with these customization and your customizations can be upgraded to Sugar7.',
    'LBL_SCAN_104_DESCR' => 'Studio customizations were detected on your instance.  We do not anticipate any problems with these customization and your customizations can be upgraded to Sugar7.',
    'LBL_SCAN_105_DESCR' => 'Studio customizations were detected on your instance.  We do not anticipate any problems with these customization and your customizations can be upgraded to Sugar7.',

    'LBL_SCAN_201_DESCR' => 'Studio customizations were detected on your instance.  We do not anticipate any problems with these customization and your customizations can be upgraded to Sugar7.',

    'LBL_SCAN_301_DESCR' => 'Certain customizations were detected and were not migrated to Sugar7.  This module (%s) will continue to be available but it will be run in Backwards Compatibility Mode on Sugar7.',
    'LBL_SCAN_302_DESCR' => 'Unknown file views were detected and were not migrated to Sugar7.  This module (%s) will continue to be available but it will be run in Backwards Compatibility Mode on Sugar7. ',
    'LBL_SCAN_303_DESCR' => 'Non-empty form files were detected and were not migrated to Sugar7.  This module (%s) will continue to be available but it will be run in Backwards Compatibility Mode on Sugar7. ',
    'LBL_SCAN_304_DESCR' => 'Unknown files (%s%s) were detected and were not migrated to Sugar7.  This module (%s) will continue to be available but it will be run in Backwards Compatibility Mode on Sugar7. ',
    'LBL_SCAN_305_DESCR' => 'Bad vardefs(%s: %s) were detected in module %s and were not migrated to Sugar7.  This customization will continue to be available but it will be run in Backwards Compatibility Mode on Sugar7. ',
    'LBL_SCAN_306_DESCR' => 'Bad vardefs were detected and were not migrated to Sugar7.  Relate field (%s) in module %s has an empty `module`). This customization will continue to be available but it will be run in Backwards Compatibility Mode on Sugar7. ',
    'LBL_SCAN_307_DESCR' => 'Bad vardefs were detected and were not migrated to Sugar7. The link (%s) in module %s refers to invalid relationship.  This customization will continue to be available but it will be run in Backwards Compatibility Mode on Sugar7. ',
    'LBL_SCAN_308_DESCR' => 'Certain customizations were detected and were not migrated to Sugar7.  This module (%s) will continue to be available but it will be run in Backwards Compatibility Mode on Sugar7. ',
    'LBL_SCAN_309_DESCR' => 'An md5 hash for %s does not match out of the box file.  This file may have been modified and will not be upgraded to Sugar7',
    'LBL_SCAN_310_DESCR' => 'Unknown view files (%s) were detected and were not migrated to Sugar7.  This module (%s) will continue to be available but it will be run in Backwards Compatibility Mode on Sugar7.',
    'LBL_SCAN_311_DESCR' => 'Certain customizations were detected and were not migrated to Sugar7.  This module (%s) will continue to be available but it will be run in Backwards Compatibility Mode on Sugar7. ',
    'LBL_SCAN_312_DESCR' => 'Bad vardefs were detected and were not migrated to Sugar7. Bad vardefs: \'name\' field type is invalid \'%s\' for module \'%s\'.  This customization will continue to be available but it will be run in Backwards Compatibility Mode on Sugar7. ',
    'LBL_SCAN_313_DESCR' => 'Extensions directory was detected - %s is not a Module Buider module.  This module will continue to be available, but only in Backwards Compatibility Mode.',

    'LBL_SCAN_401_DESCR' => 'Customized file includes a file that has been moved to the vendor directory.  We have attempted to take the corrective action and no further action is needed. ',
    'LBL_SCAN_402_DESCR' => 'Bad module %s - not in beanList and not in filesystem',
    'LBL_SCAN_403_DESCR' => 'Some of the Sugar files have changed their location in Sugar 7. We have to correct their include paths.',
    'LBL_SCAN_520_DESCR' => 'This logic hook is not supported anymore in Sugar 7',
    'LBL_SCAN_521_DESCR' => 'This logic hook is not supported anymore in Sugar 7',
//    'LBL_SCAN_405_DESCR' => 'Package detected which has been blacklisted as not supported in Sugar 7',
    'LBL_SCAN_406_DESCR' => 'Stock Sugar module has unsupported custom views in custom/modules/%s/views. These custom views files will be moved to a Disabled directory during the upgrade',
    'LBL_SCAN_407_DESCR' => 'Stock Sugar module has unsupported custom views in modules/%s/views. These custom views files will be moved to a Disabled directory during the upgrade',
    'LBL_SCAN_519_DESCR' => 'Stock Sugar module has one of the extensions which we do not support for upgrade, such as customized routing, access control, Javascript, etc.',
    'LBL_SCAN_518_DESCR' => 'The vardefs include user customCode definitions that we do not know how to convert',
    'LBL_SCAN_410_DESCR' => 'Too many fields in the view',
    'LBL_SCAN_522_DESCR' => 'Subpanel data is fetched by a function, we do not support upgrading this yet.',
    'LBL_SCAN_412_DESCR' => 'Subpanel refers to a link that does not exist or is not properly defined',
    'LBL_SCAN_413_DESCR' => 'Field refers to a widget class name that does not have matching widget class file',
    'LBL_SCAN_414_DESCR' => 'Unknown fields handled by CRYS-36, so no more checks here',
    'LBL_SCAN_415_DESCR' => 'Logic hook refers to a file that does not exist',
    'LBL_SCAN_523_DESCR' => 'Old logic hook file uses by-reference parameter passing, which may lead to error messages being displayed (and thus mess up REST)',
    'LBL_SCAN_417_DESCR' => 'Module Feeds or iFrames detected, which should not exist anymore',
    'LBL_SCAN_418_DESCR' => 'Subpanel refers to a module that does not exist',
    'LBL_SCAN_419_DESCR' => 'Vardef key does not match vardef name',
    'LBL_SCAN_420_DESCR' => 'Vardef contains relate fields referring to relationship which can not be properly loaded',
    'LBL_SCAN_421_DESCR' => 'Vardef contains link field that can not be properly loaded',
    'LBL_SCAN_525_DESCR' => 'Vardef defines enum that is a result of HTML function, which is not supported for Sugar7',
    'LBL_SCAN_423_DESCR' => 'Vardef is defined as compound fields containing subfields, and one of these subfields does not actually exist',
    'LBL_SCAN_424_DESCR' => 'File contains inline HTML',
    'LBL_SCAN_425_DESCR' => 'Code contains this output-producing function',
    'LBL_SCAN_426_DESCR' => 'Code contains this output-producing function',
    'LBL_SCAN_427_DESCR' => 'Code contains this output-producing function',
    'LBL_SCAN_428_DESCR' => 'Code contains this output-producing function. Note that print_r(..., true) is allowed.',
    'LBL_SCAN_429_DESCR' => 'Code contains this output-producing function',
    'LBL_SCAN_430_DESCR' => 'Code contains this output-producing function',
    'LBL_SCAN_524_DESCR' => 'Field is defined as function producing HTML and can not be auto-converted (we know how to convert some stock fields like emails and currency)',
    'LBL_SCAN_432_DESCR' => 'Field \'name\' has a type other than name, fullname, varchar or id',

    'LBL_SCAN_501_DESCR' => 'One of the core files is not present in the instance',
    'LBL_SCAN_502_DESCR' => 'One of the core files has been modified in this install',
    'LBL_SCAN_503_DESCR' => 'Custom module has the same name as one of new Sugar modules',
    'LBL_SCAN_504_DESCR' => 'Vardef field definition omits type',
    'LBL_SCAN_505_DESCR' => 'Non-blob field type is changed to blob field type. This is not allowed because blob types can not be indexed and we may have filters relying on this field being indexed.',
    'LBL_SCAN_506_DESCR' => '$this is used in the metadata file. Since metadata file is loaded in different context in Sugar7, it would fail.',
    'LBL_SCAN_507_DESCR' => 'Vardef is defined as compound fields containing subfields, and one of these subfields does not actually exist',
    'LBL_SCAN_508_DESCR' => 'File contains inline HTML',
    'LBL_SCAN_509_DESCR' => 'Code contains this output-producing function',
    'LBL_SCAN_510_DESCR' => 'Code contains this output-producing function',
    'LBL_SCAN_511_DESCR' => 'Code contains this output-producing function',
    'LBL_SCAN_512_DESCR' => 'Code contains this output-producing function. Note that print_r(..., true) is allowed.',
    'LBL_SCAN_513_DESCR' => 'Code contains this output-producing function',
    'LBL_SCAN_514_DESCR' => 'Code contains this output-producing function',
    'LBL_SCAN_515_DESCR' => 'The checking script failed, which means the instaScannerMeta.phpnce probably contains bad PHP code that the script tried to load.',
    'LBL_SCAN_517_DESCR' => 'Package detected which has been blacklisted as not supported in Sugar 7',
    'LBL_SCAN_526_DESCR' => "This List contains Item Name values that prevent the upgrade.",
    'LBL_SCAN_528_DESCR' => 'Date/Datetime/Time field with incorrect display_default value like -none-',
    'LBL_SCAN_529_DESCR' => 'PHP errors may be triggered by the interpreter when incorrect php-syntax or some run-time code-problems are found.',
    'LBL_SCAN_530_DESCR' => 'One of the custom files is not present in the instance, but is used by the custom code.',

    'LBL_SCAN_901_DESCR' => 'Instance already upgraded to Sugar 7',
    'LBL_SCAN_999_DESCR' => 'Unknown failure, please consult support',
);
