<?php
/**
 * Created by PhpStorm.
 * User: Sam
 * Date: 06.03.2018
 * Time: 2:44
 */

use frontend\assets\GooglemapWidgetAsset;

GooglemapWidgetAsset::register($this);
$this->registerJsFile('https://maps.googleapis.com/maps/api/js?key=AIzaSyC0W8pvVVI5WnPmQ253sS--xeiq2CpxUII&libraries=places,geometry&callback=initAutocomplete',  ['position' => yii\web\View::POS_END,
    'depends' => [\frontend\assets\GooglemapWidgetAsset::className()]],'js-print-category-map');
?>
<style>
    #map{
        height: 450px;
    }
</style>
<div class="col-sm-12">
                            <div class="form-group">
                                <label class="control-label  hidden" for="address_text"><?=$fieldModel_name?></label>
                                <input value="<?=$defaultValue; ?>" type="text" class="form-control" id="address_text" name="FieldValue[value][<?=$fieldModel_id?>]" placeholder="Начните вводить адрес">
                                <div hidden style="display: none;" class="wrap_hidden_fields">
                                <input value="" type="text" class="form-control" id="objects-lat" name="objects-lat" placeholder="lat">
                                <input value="" type="text" class="form-control" id="objects-lng" name="objects-lng" placeholder="lng">
                                <input value="" type="text" class="form-control" id="objects-country" name="objects-country" placeholder="objects-country">
                                <input value="" type="text" class="form-control" id="objects-sity" name="objects-sity" placeholder="objects-sity">
                                <input value="" type="text" class="form-control" id="objects-state" name="objects-state" placeholder="objects-state">
                                <input value="" type="text" class="form-control" id="objects-zip" name="objects-zip" placeholder="objects-zip">
                                </div>
                                <table id="address" hidden style="display: none!important;" class="hidden">
                                    <tr>
                                        <td class="label">Street address</td>
                                        <td class="slimField"><input class="field" id="street_number"
                                                                     disabled="true"></input></td>
                                        <td class="wideField" colspan="2"><input class="field" id="route"
                                                                                 disabled="true"></input></td>
                                    </tr>
                                    <tr>
                                        <td class="label">City</td>
                                        <!-- Note: Selection of address components in this example is typical.
                                             You may need to adjust it for the locations relevant to your app. See
                                             https://developers.google.com/maps/documentation/javascript/examples/places-autocomplete-addressform
                                        -->
                                        <td class="wideField" colspan="3"><input class="field" id="locality"
                                                                                 disabled="true"></input></td>
                                    </tr>
                                    <tr>
                                        <td class="label">State</td>
                                        <td class="slimField"><input class="field"
                                                                     id="administrative_area_level_1" disabled="true"></input></td>
                                        <td class="label">Zip code</td>
                                        <td class="wideField"><input class="field" id="postal_code"
                                                                     disabled="true"></input></td>
                                    </tr>
                                    <tr>
                                        <td class="label">Country</td>
                                        <td class="wideField" colspan="3"><input class="field"
                                                                                 id="country" disabled="true"></input></td>
                                    </tr>
                                </table>

                            </div>
</div>
                <div class="clearfix"></div>
                <div class="col-sm-12 wrap_map">
                    <div id="map"></div>
</div>