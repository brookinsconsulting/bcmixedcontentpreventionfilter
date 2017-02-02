<?php /* #?ini charset="utf-8"?

[Event]
# Modify the final HTML to inject https content where possible to prevent mixed content browser warnings on ssl sites
Listeners[]=response/preoutput@BCMixedContentPreventionFunctions::outputFilter

*/ ?>