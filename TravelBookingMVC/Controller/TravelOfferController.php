<?php
include_once 'C:/xampp/htdocs/TravelBookingMVC/Model/TravelOffer.php';
class TravelOfferController {
    public function showTravelOffer($offer) {
        $offer->show();
    }
}
?>
