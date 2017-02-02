<?php
/**
 * File containing the BCMixedContentPreventionFunctions class.
 *
 * @copyright Copyright (C) 1999 - 2017 Brookins Consulting. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2 (or later)
 * @version 0.1.0
 * @package bcmixedcontentpreventionfilter
 */

/*
 * BCMixedContentPrevention functions
 *
*/
class BCMixedContentPreventionFunctions
{
    /*
     * Inject https protocol to replace http protocol on content (image) before HTML output for design and content assets
     * This is run on the response/preoutput ezpEvent
     *
    */
    public static function outputFilter( $templateResult )
    {
        $protocolHttp = 'http';
        $protocolHttps = 'https';
        $protocolDefault = '';

        $patterns = array();
        $patterns[0] = '@(<img\ssrc=["\'])' . $protocolHttp . ':((?:.*?)>)@is';

        $replacements = array();
        $replacementRegexString = '\1' . $protocolHttps . ':\2';
        $replacements[0] = $replacementRegexString;

        $templateResult = preg_replace( $patterns, $replacements, $templateResult );

        return $templateResult;
    }
}
 
?>