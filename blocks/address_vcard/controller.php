<?php 
/**
* Address Vcard Block Controller
*/
class AddressVcardBlockController extends BlockController {

    var $pobj;
    protected $btTable = 'btAddressVcard';
    protected $btInterfaceWidth = "350";
    protected $btInterfaceHeight = "400";

    /** 
     * Used for localization. If we want to localize the name/description we have to include this
     */
    public function getBlockTypeDescription() {
        return t("Address: listing with address, phone and website link");
    }
    public function getBlockTypeName() {
        return t("Address Vcard");
    }

    function printGoogleMapUrl() {
        $html = 'http://www.google.com/maps?q=';
        $c = "%2C"; // ",";
        $html .= $this->address;
        if ($this->address2 != '') {
            $html .= $c . $this->address2;
        }
        $html .= $c . $this->city;
        $html .= $c . $this->state;
        $html .= $c . $this->zip;
        $html = str_replace(" ", "+", $html);
        return $html;
    }
}
?>