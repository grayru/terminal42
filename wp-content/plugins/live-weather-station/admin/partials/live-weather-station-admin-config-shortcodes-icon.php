<?php
/**
 * @package    Live_Weather_Station
 * @subpackage Live_Weather_Station/admin/partials
 * @author     Pierre Lannoy <https://pierre.lannoy.fr/>
 * @since      2.7.0
 */
?>
<div id="icon-error-<?php echo $device_key; ?>" class="wrap" style="display:none;">
    <div id="icon-error-container-<?php echo $device_key; ?>" class="metabox-holder">
        <div class="postbox-container" style="width: 100%;margin-top:16px;">
            <div id="normal-sortables" class="meta-box-sortables ui-sortable">
                <div class="postbox ">
                    <div class="handlediv" title="<?php echo __('Click to toggle', 'live-weather-station'); ?>"><br></div>
                    <h3 class="hndle"><span><?php esc_html_e( 'OpenWeatherMap error', 'live-weather-station' );?></span></h3>
                    <div class="inside">
                        <?php esc_html_e( 'OpenWeatherMap servers have returned an empty response for this weather station. For this reason, it is currently not possible to generate a shortcode. This is normally a temporary error so, please, retry again later.', 'live-weather-station' );?>
                    </div>
                </div>
            </div>
            <?php if(json_encode($js_array_icon[$device_key][2]) == '[]') { ?>
                <script language="javascript" type="text/javascript">
                    jQuery(document).ready(function($) {
                        $("#icon-datas-link-<?php echo $device_key; ?>").click(function(){
                                tb_show('', '#TB_inline?width=400&height=200&inlineId=icon-error-<?php echo $device_key; ?>');
                                $("#TB_ajaxContent").css("background-color",$(".wp-toolbar").css("backgroundColor"));
                                $("#TB_ajaxWindowTitle").html("<?php esc_html_e('Shortcodes for', 'live-weather-station');?> <?php esc_html_e('steel meter', 'live-weather-station');?>");
                            }
                        );
                    });
                </script>
            <?php } ?>
        </div>
    </div>
</div>
<div id="icon-datas-<?php echo $device_key; ?>" class="wrap" style="display:none;">
    <div id="icon-datas-container-<?php echo $device_key; ?>" class="metabox-holder">
        <div class="postbox-container" style="width: 54%;margin-right: 16px;margin-top:16px;">
            <div id="normal-sortables" class="meta-box-sortables ui-sortable">
                <div class="postbox ">
                    <div class="handlediv" title="<?php echo __('Click to toggle', 'live-weather-station'); ?>"><br></div>
                    <h3 class="hndle"><span><?php esc_html_e( '1. Set parameters for the shortcode', 'live-weather-station' );?></span></h3>
                    <div class="inside">
                        <table cellspacing="0">
                            <tbody>
                            <tr>
                                <th class="lws-option" width="35%" align="left" scope="row"><?php esc_html_e('Module', 'live-weather-station');?></th>
                                <td width="5%"/>
                                <td align="left">
                                    <span class="select-option">
                                        <select class="option-select" id="icon-datas-module-<?php echo $device_key; ?>">
                                            <?php foreach($js_array_icon[$device_key][2] as $key_module => $module) { ?>
                                                <option value="<?php echo $key_module; ?>"><?php echo $module[0]; ?></option>;
                                            <?php } ?>
                                        </select>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <th class="lws-option" width="35%" align="left" scope="row"><?php esc_html_e('Measurement', 'live-weather-station');?></th>
                                <td width="5%"/>
                                <td align="left">
                                    <span class="select-option">
                                        <select class="option-select" id="icon-datas-measurement-<?php echo $device_key; ?>">
                                        </select>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <th class="lws-option" width="35%" align="left" scope="row"><?php esc_html_e('Element', 'live-weather-station');?></th>
                                <td width="5%"/>
                                <td align="left">
                                    <span class="select-option">
                                        <select class="option-select" id="icon-datas-element-<?php echo $device_key; ?>">
                                        </select>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <th class="lws-option" width="35%" align="left" scope="row"><?php esc_html_e('Format', 'live-weather-station');?></th>
                                <td width="5%"/>
                                <td align="left">
                                    <span class="select-option">
                                        <select class="option-select" id="icon-datas-format-<?php echo $device_key; ?>">
                                        </select>
                                    </span>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <script language="javascript" type="text/javascript">
                    jQuery(document).ready(function($) {

                        var js_array_icon_<?php echo $device_key; ?> = <?php echo json_encode($js_array_icon[$device_key][2]); ?>;

                        new Clipboard('.icon-cpy-<?php echo $device_key; ?>');

                        $("#icon-datas-link-<?php echo $device_key; ?>").click(function(){
                                tb_show('', '#TB_inline?width=600&height=620&inlineId=icon-datas-<?php echo $device_key; ?>');
                                $("#TB_ajaxContent").css("background-color",$(".wp-toolbar").css("backgroundColor"));
                                $("#TB_ajaxWindowTitle").html("<?php esc_html_e('Shortcodes for', 'live-weather-station');?> <?php esc_html_e('icon datas', 'live-weather-station');?> - <?php echo $device['station_name']?>");
                            }
                        );

                        $("#icon-datas-module-<?php echo $device_key; ?>").change(function() {
                            var js_array_icon_measurement_<?php echo $device_key; ?> = js_array_icon_<?php echo $device_key; ?>[$(this).val()][2];
                            $("#icon-datas-measurement-<?php echo $device_key; ?>").html("");
                            $(js_array_icon_measurement_<?php echo $device_key; ?>).each(function (i) {
                                $("#icon-datas-measurement-<?php echo $device_key; ?>").append("<option value="+i+">"+js_array_icon_measurement_<?php echo $device_key; ?>[i][0]+"</option>");
                            });
                            $( "#icon-datas-measurement-<?php echo $device_key; ?>" ).change();
                        });

                        $("#icon-datas-measurement-<?php echo $device_key; ?>").change(function() {
                            var js_array_icon_element_<?php echo $device_key; ?> = js_array_icon_<?php echo $device_key; ?>[$("#icon-datas-module-<?php echo $device_key; ?>").val()][2][$(this).val()][2];
                            $("#icon-datas-element-<?php echo $device_key; ?>").html("");
                            $(js_array_icon_element_<?php echo $device_key; ?>).each(function (i) {
                                $("#icon-datas-element-<?php echo $device_key; ?>").append("<option value="+i+">"+js_array_icon_element_<?php echo $device_key; ?>[i][0]+"</option>");
                            });
                            $( "#icon-datas-element-<?php echo $device_key; ?>" ).change();
                        });

                        $("#icon-datas-element-<?php echo $device_key; ?>").change(function() {
                            var js_array_icon_format_<?php echo $device_key; ?> = js_array_icon_<?php echo $device_key; ?>[$("#icon-datas-module-<?php echo $device_key; ?>").val()][2][$("#icon-datas-measurement-<?php echo $device_key; ?>").val()][2][$(this).val()][2];
                            $("#icon-datas-format-<?php echo $device_key; ?>").html("");
                            $(js_array_icon_format_<?php echo $device_key; ?>).each(function (i) {
                                $("#icon-datas-format-<?php echo $device_key; ?>").append("<option value="+i+">"+js_array_icon_format_<?php echo $device_key; ?>[i][0]+"</option>");
                            });
                            $( "#icon-datas-format-<?php echo $device_key; ?>" ).change();
                        });

                        $("#icon-datas-format-<?php echo $device_key; ?>").change(function() {
                            var output = js_array_icon_<?php echo $device_key; ?>[$("#icon-datas-module-<?php echo $device_key; ?>").val()][2][$("#icon-datas-measurement-<?php echo $device_key; ?>").val()][2][$("#icon-datas-element-<?php echo $device_key; ?>").val()][2][$(this).val()][2];
                            var sc_device = "<?php echo $device['_id']; ?>";
                            var sc_module = js_array_icon_<?php echo $device_key; ?>[$("#icon-datas-module-<?php echo $device_key; ?>").val()][1];
                            var sc_measurement = js_array_icon_<?php echo $device_key; ?>[$("#icon-datas-module-<?php echo $device_key; ?>").val()][2][$("#icon-datas-measurement-<?php echo $device_key; ?>").val()][1];
                            var sc_element = js_array_icon_<?php echo $device_key; ?>[$("#icon-datas-module-<?php echo $device_key; ?>").val()][2][$("#icon-datas-measurement-<?php echo $device_key; ?>").val()][2][$("#icon-datas-element-<?php echo $device_key; ?>").val()][1];
                            var sc_format = js_array_icon_<?php echo $device_key; ?>[$("#icon-datas-module-<?php echo $device_key; ?>").val()][2][$("#icon-datas-measurement-<?php echo $device_key; ?>").val()][2][$("#icon-datas-element-<?php echo $device_key; ?>").val()][2][$("#icon-datas-format-<?php echo $device_key; ?>").val()][1];
                            var shortcode = "[live-weather-station-icon device_id='"+sc_device+"' module_id='"+sc_module+"' measure_type='"+sc_measurement+"' element='"+sc_element+"' format='"+sc_format+"']";
                            $("#icon-datas-output-<?php echo $device_key; ?>").html(output);
                            $("#icon-datas-shortcode-<?php echo $device_key; ?>").html(shortcode);
                        });

                        $( "#icon-datas-module-<?php echo $device_key; ?>" ).change();
                    });
                </script>
            </div>
        </div>
        <div class="postbox-container" style="width: 44%;margin-top:16px;">
            <div id="normal-sortables" class="meta-box-sortables ui-sortable">
                <div class="postbox ">
                    <div class="handlediv" title="<?php echo __('Click to toggle', 'live-weather-station'); ?>"><br></div>
                    <h3 class="hndle"><span><?php esc_html_e( '2. Verify the generated output', 'live-weather-station' );?></span></h3>
                    <div class="inside" style="height: 360px">
                        <div id="icon-spinner-<?php echo $device_key; ?>" style="margin:0;width:100%;height:100%;background-position-x:50%;background-position-y:50%;" class="spinner"></div>
                        <div id="icon-bg-<?php echo $device_key; ?>" style="border-radius: 5px;margin-bottom:10px;height:98%;width: 100%;float: inherit;display: flex;align-items: center;justify-content: center;top: -355px;position: relative;">
                            <canvas id="<?php echo $fingerprint; ?>"></canvas>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div id="normal-sortables" class="meta-box-sortables ui-sortable">
                <div class="postbox ">
                    <div class="handlediv" title="<?php echo __('Click to toggle', 'live-weather-station'); ?>"><br></div>
                    <h3 class="hndle"><span><?php esc_html_e( '3. Copy the following shortcode', 'live-weather-station' );?></span></h3>
                    <div class="inside">
                        <textarea readonly rows="5" style="width:100%;font-family:Consolas,Monaco,Lucida Console,Liberation Mono,DejaVu Sans Mono,Bitstream Vera Sans Mono,Courier New, monospace;" id="icon-datas-shortcode-<?php echo $device_key; ?>"></textarea>
                    </div>
                    <div id="major-publishing-actions">
                        <div id="delete-action">
                            <?php esc_html_e('This shortcode is ready for use.', 'live-weather-station' );?>
                        </div>
                        <div id="publishing-action">
                            <button data-clipboard-target="#icon-datas-shortcode-<?php echo $device_key; ?>" class="button button-primary icon-cpy-<?php echo $device_key; ?>"><?php esc_attr_e('Copy', 'live-weather-station');?></button>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>