<?php
/**
 * PEAR2_Pyrus_Task_Exception
 *
 * PHP version 5
 *
 * @category  PEAR2
 * @package   PEAR2_Pyrus
 * @author    Greg Beaver <cellog@php.net>
 * @copyright 2008 The PEAR Group
 * @license   http://www.opensource.org/licenses/bsd-license.php New BSD License
 * @version   SVN: $Id$
 * @link      http://svn.pear.php.net/wsvn/PEARSVN/Pyrus/
 */

/**
 * Exception class for Pyrus Tasks
 *
 * @category  PEAR2
 * @package   PEAR2_Pyrus
 * @author    Greg Beaver <cellog@php.net>
 * @copyright 2008 The PEAR Group
 * @license   http://www.opensource.org/licenses/bsd-license.php New BSD License
 * @link      http://svn.pear.php.net/wsvn/PEARSVN/Pyrus/
 */
class PEAR2_Pyrus_Task_Exception extends PEAR2_Exception
{
    /**#@+
     * Error codes for task validation routines
     */
    const NOATTRIBS = 1;
    const MISSING_ATTRIB = 2;
    const WRONG_ATTRIB_VALUE = 3;
    const INVALID = 4;
    /**#@-*/
    function __construct($message, $code, $cause = null)
    {
        
    }
}