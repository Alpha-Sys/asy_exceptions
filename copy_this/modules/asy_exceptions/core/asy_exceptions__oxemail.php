<?php
/**
 * @web http://www.alpha-sys.de
 * @copyright Alpha-Sys 2013
 * @author Fabian Kunkler 
 * @email fabian.kunkler@alpha-sys.de
 * @version 1.0 16:00:00 13.08.2013
 */

class asy_exceptions__oxemail extends asy_exceptions__oxemail_parent{

    /**
     * Sends email with log message to recipient. Returns send state
     *
     * @param string $sEmail email recipient
     * @param string $sLogMessage  log message
     *
     * @return bool
     */
    public function sendExceptionMail( $sEmail, $sLogMessage )
    {
        // shop info
        $oShop = $this->_getShop();

        //set mail params (from, fromName, smtp )
        $this->_setMailParams( $oShop );
        
        $this->setBody($sLogMessage);
        
        $this->setSubject('Exception-Log from ' . $oShop->oxshops__oxname->value);
        
        $this->setRecipient($sEmail);

        return $this->send();
    }
}
