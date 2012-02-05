<?php
##
## NConf configuration
##

#
# Application settings
#

# The directory where NConf is located
define('NCONFDIR',     $nconfdir);

# Manual installation:
# Please replace the  $nconfdir  placeholder with the path to NConf as follows:
#define('NCONFDIR',     "/var/www/nconf");

# The path to the directory with the OS logo icons
define('OS_LOGO_PATH', "img/logos");

# This is the path to the Nagios binary. The binary is needed in order to run tests on the generated config. 
# This path should either point to the original binary (if Nagios is installed on the same host), to a copy of the binary 
# (copy it to the bin/ folder), or to a symbolic link. Make sure the binary is executable to the webserver user. 
define('NAGIOS_BIN',   "/var/www/nconf/bin/nagios");

# Check for updates
# When enabled, NConf will access http://update.nconf.org and will display information about the latest available version.
# This is done over your browser, so the server where NConf is running on does not need Internet access.
# NO information about your environment and NO NConf related info will be sent or made available to others!
# If you don't want NConf to check for updates, you can disable it here.
define('CHECK_UPDATE', 1);

#
# Defines which design-template (skin) to use
#
define('TEMPLATE_DIR', "nconf_fresh");

#
# Debug
#
define("DEBUG_MODE",     0); # [0|1]
define("DEBUG_GENERATE", 3); # [1=ERROR|2=WARN|3=INFO|4=DEBUG|5=TRACE]
define("DB_NO_WRITES",   0); # [0|1] Experimental, use with CAUTION!

#
# Defines how many seconds to wait on auto redirects.
# Used mostly after adding, modifying or deleting an item. 
#
define('REDIRECTING_DELAY', "1");

#
# General switch to enable / disable config deployment. 
# If deployment is disabled, the generated config will simply remain in the 'output' directory.
#
define('ALLOW_DEPLOYMENT', 1);

#
# Static configuration files
#
# List of folders containing additional files that you would like to make editable within NConf (basic text editing). 
# We call these files 'static files', because they are not generated by NConf. 
# All folders listed here will be included in the output file, together with the generated config. 
# We recommend you to copy your static files into the 'nconf/static_cfg' folder.
#
$STATIC_CONFIG = array("static_cfg");

# If security permits it, you could make your active Nagios configuration editable in NConf directly. 
# We discourage users from doing this though, because there is a risk that they could accidentally damage their Nagios configuration.
#$STATIC_CONFIG = array("static_cfg", "/etc/nagios");

#
# Syntax checking for static config folders
# Static config will be treated as "global" config. Syntax checking will be run for each Collector / Monitor server.
# In a distributed monitoring setup, you might have to disable syntax checking, if you are getting errors that items don't exist on certain servers.
#
define('CHECK_STATIC_SYNTAX', 1);

#
# These groups will always be added to any host or service, regardless of what is linked in the GUI. 
#
$SUPERADMIN_GROUPS = array ("+admins");

#
# List of mandatory contact groups for all hosts and services. User won't be able to save changes if 
# he hasn't assigned at least one of these groups. If empty, no contact group is mandatory.
#
$ONCALL_GROUPS = array ();

#
# Defines the amount of entries shown on the overview page. 
#
define('OVERVIEW_QUANTITY_STANDARD', "25");

#
# Defines the separator for the values of .select. type attributes. 
#
define('SELECT_VALUE_SEPARATOR', "::");

#
# PASSWORD ATTRIBUTES 
#
# Set default password encryption type
# possible values: [clear|crypt|md5|sha]
#
# Will be used when writing passwords to the database, and is also used for authentication. 
# Used when AUTH_TYPE is "file" or "sql".
#
# CAUTION:
# If you change this value, you have to manually update all the password attributes already set, 
# because the old value will remain encrypted with the previous encryption in the database. 
# You won't be able to log in, if the encryption does not match.
#
define('PASSWD_ENC', "clear");

#
# Configures the visibility of password attributes. 
# If PASSWD_DISPLAY = 1, you will see passwords plaintext on the detail view. 
# If PASSWD_DISPLAY = 0, the passwords will not be visible (in the detail view). 
#
define('PASSWD_DISPLAY', 0);

#
# If PASSWD_DISPLAY = 0 then this value will be used to hide the password.
# Any passwords will be represented as the following string (in the detail view).
#
define('PASSWD_HIDDEN_STRING', "********");


#
# CONTRIBUTIONS
#
# Enable/disable the log of the remote ip/hostname in the nconf history.
# When activated, the ip (or hostname in case HostnameLookups is set to On in httpd.conf) is appended as a history entry.
define('LOG_REMOTE_IP_HISTORY', 1);
?>
