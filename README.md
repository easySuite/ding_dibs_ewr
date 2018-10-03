# Ding DIBS EWR (External Webservice Reports)
Enables possibility to push data about captured payment from DIBS to Logiva webservice called "Signflow".

This module also provide an page (**@/admin/config/payment/ewr/log**) where user can view logs of pushed reports to webservice.
 
## Installation
Procedure is same as for any Drupal module.

## Configuration
In order to work correctly this module needs to be configured. On page **@/admin/config/payment/ewr/settings** is present
configuration form which requires:
+ Webservice URL
+ Organization ID
+ Terminal ID
+ Terminal password

This information is provided by webservice owner in a individual way.
 
