<?php
/**
 * @web http://www.alpha-sys.de
 * @copyright Alpha-Sys 2013
 * @author Fabian Kunkler 
 * @email fabian.kunkler@alpha-sys.de
 * @version 1.0 16:00:00 13.08.2013
 */

class asy_exceptions__oxutils extends asy_exceptions__oxutils_parent{

    /**
     * Writes given log message. Returns write state
     *
     * @param string $sLogMessage  log message
     * @param string $sLogFileName log file name
     *
     * @return bool
     */
    public function writeToLog( $sLogMessage, $sLogFileName )
    {
        $ret = parent::writeToLog( $sLogMessage, $sLogFileName );
                
        $myconfig = $this->getConfig();
        $sEmail = $myconfig->getConfigParam("sExceptionEmail");
        if($sEmail && $sEmail != ''){
            if(!strpos($sLogMessage, 'instantiate mail function')){
                $oEmail = oxNew('oxemail');
                $oEmail->sendExceptionMail($sEmail, $sLogMessage);
            }
        }
        
        return $ret;
    }
}
