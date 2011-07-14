<?php 
defined('C5_EXECUTE') or die(_("Access Denied."));

class AddressVcardPackage extends Package {

    protected $pkgHandle = 'address_vcard';
    protected $appVersionRequired = '5.4.1.1';
    protected $pkgVersion = '1.0';

    /**
     * The address_vcard block's view template uses the vcard microformat, 
     * @see: http://microformats.org/wiki/vCard. 
     * This common format and template allows site users to have a consistent 
     * and proper markup for address listed on their website.
     */
    public function getPackageDescription() {
        return t("Inserts a street address block using vcard microformat");
        // see http://microformats.org/wiki/vCard
    }

    public function getPackageName() {
        return t("Address Vcard");
    }

    public function install() {
        $pkg = parent::install();
        // install block 
        BlockType::installBlockTypeFromPackage('address_vcard', $pkg); 
    }
}
?>