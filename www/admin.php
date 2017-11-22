<?php 
                                    include 'header.php';                                       // Template-Kopf und Navigation
                                    include 'modules/names.php';
                                    include 'modules/database.php';
                                    include 'modules/read_config_db.php';                       // Liest die Grundeinstellungen Sensortyp, Hysteresen, GPIO's)
                                    
                                    include 'modules/system_reboot.php';                        // Startet das System neu
                                    include 'modules/system_shutdown.php';                      // Fährt das System herunter
                                    include 'modules/start_stop_program.php';                   // 
                                    
                                    include 'modules/database_empty_statistic_tables.php';      // leert die Statistik-Tabellen (Status, data)
                                    include 'modules/database_create_new_database.php';         // erzeugt neue DB
                                    include 'modules/write_loglevel_db.php';                    // schreibt das Loglevel in Datenbank
                                    include 'modules/write_debug_values.php';                   // schreibt die Debug-Werte
                                    

                                ?>
                                <h2 class="art-postheader"><?php echo _('administration'); ?></h2>
                                <form method="post" name="admin">
                                    <div class="hg_container">
                                        <!----------------------------------------------------------------------------------------Sensortype-->
                                        <table style="width: 100%;" class="miniature_writing">
                                            <tr>
                                                <td class="td_png_icon"><h3><?php echo _('sensortype'); ?></h3><img src="images/icons/sensortype_42x42.png" alt=""><br><button class="art-button" type="button" onclick="help_sensortype_blockFunction()"><?php echo _('help'); ?></button>
                                                </td>
                                                <td style=" text-align: left; padding-left: 20px;">
                                                    <input type="radio" name="sensortype_config" value="1" <?php echo $checked_sens_1; ?>/><label> DHT11</label><br>
                                                    <input type="radio" name="sensortype_config" value="2" <?php echo $checked_sens_2; ?>/><label> DHT22</label><br>
                                                    <input type="radio" name="sensortype_config" value="3" <?php echo $checked_sens_3; ?>/><label> SHT</label><br>
                                                    <br>
                                                </td>
                                                
                                            </tr>
                                        </table>
                                        <script>
                                            function help_sensortype_blockFunction() {
                                                document.getElementById('help_sensortype').style.display = 'block';
                                            }
                                            function help_sensortype_noneFunction() {
                                                document.getElementById('help_sensortype').style.display = 'none';
                                            }
                                        </script>
                                        <p id="help_sensortype" class="help_p">
                                            <?php  echo '<b>'._('sensortype').':</b> '._('connect your sensor according to instructions and select the right type.');
                                             echo '<br><br>'; ?>
                                            <button class="art-button" type="button" onclick="help_sensortype_noneFunction()"><?php echo _('close'); ?></button>
                                        </p>
                                        <hr>
                                        <!----------------------------------------------------------------------------------------Waagen-->
                                    <table style="width: 100%;" class="miniature_writing">
                                        <tr>
                                            <td rowspan="14" class="td_png_icon"><h3><?php echo _('scales'); ?></h3><img src="images/icons/scale_42x42.png" alt=""><br><button class="art-button" type="button" onclick="help_scales_blockFunction()"><?php echo _('help'); ?></button></td>
                                            <td colspan="3"><h3><?php echo _('scale'); ?> 1</h3></td>
                                        </tr>
                                        <tr>
                                            <td class="text_left_padding"><?php echo _('reference unit'); ?>:</td>
                                            <td class="text_left_padding"><input name="referenceunit_scale1_config" maxlength="4" size="2" type="text" value=<?php echo $referenceunit_scale1; ?>></td>
                                        </tr>
                                        <tr>
                                            <td class="text_left_padding"><?php echo _('measuring interval'); ?>:</td>
                                            <td class="text_left_padding"><input name="measuring_interval_scale1_config" maxlength="4" size="2" type="text" value=<?php echo $measuring_interval_scale1; ?>></td>
                                        </tr>
                                        <tr>
                                            <td class="text_left_padding"><?php echo _('measuring duration'); ?>:</td>
                                            <td class="text_left_padding"><input name="measuring_duration_scale1_config" maxlength="4" size="2" type="text" value=<?php echo $measuring_duration_scale1; ?>></td>
                                        </tr>
                                        <tr>
                                            <td class="text_left_padding"><?php echo _('saving period'); ?>:</td>
                                            <td class="text_left_padding"><input name="saving_period_scale1_config" maxlength="4" size="2" type="text" value=<?php echo $saving_period_scale1; ?>></td>
                                        </tr>
                                        <tr>
                                            <td class="text_left_padding"><?php echo _('samples'); ?>:</td>
                                            <td class="text_left_padding"><input name="samples_scale1_config" maxlength="4" size="2" type="text" value=<?php echo $samples_scale1; ?>></td>
                                        </tr>
                                        <tr>
                                            <td class="text_left_padding"><?php echo _('spikes'); ?>:</td>
                                            <td class="text_left_padding"><input name="spikes_scale1_config" maxlength="4" size="2" type="text" value=<?php echo $spikes_scale1; ?>></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"><h3><?php echo _('scale'); ?> 2</h3></td>
                                        </tr>
                                        <tr>
                                            <td class="text_left_padding"><?php echo _('reference unit'); ?>:</td>
                                            <td class="text_left_padding"><input name="referenceunit_scale2_config" maxlength="4" size="2" type="text" value=<?php echo $referenceunit_scale2; ?>></td>
                                        </tr>
                                        <tr>
                                            <td class="text_left_padding"><?php echo _('measuring interval'); ?>:</td>
                                            <td class="text_left_padding"><input name="measuring_interval_scale2_config" maxlength="4" size="2" type="text" value=<?php echo $measuring_interval_scale2; ?>></td>
                                        </tr>
                                        <tr>
                                            <td class="text_left_padding"><?php echo _('measuring duration'); ?>:</td>
                                            <td class="text_left_padding"><input name="measuring_duration_scale2_config" maxlength="4" size="2" type="text" value=<?php echo $measuring_duration_scale2; ?>></td>
                                        </tr>
                                        <tr>
                                            <td class="text_left_padding"><?php echo _('saving period'); ?>:</td>
                                            <td class="text_left_padding"><input name="saving_period_scale2_config" maxlength="4" size="2" type="text" value=<?php echo $saving_period_scale2; ?>></td>
                                        </tr>
                                        <tr>
                                            <td class="text_left_padding"><?php echo _('samples'); ?>:</td>
                                            <td class="text_left_padding"><input name="samples_scale2_config" maxlength="4" size="2" type="text" value=<?php echo $samples_scale2; ?>></td>
                                        </tr>
                                        <tr>
                                            <td class="text_left_padding"><?php echo _('spikes'); ?>:</td>
                                            <td class="text_left_padding"><input name="spikes_scale2_config" maxlength="4" size="2" type="text" value=<?php echo $spikes_scale2; ?>></td>
                                        </tr>
                                    </table>
                                    <script>
                                        function help_scales_blockFunction() {
                                            document.getElementById('help_scales').style.display = 'block';
                                        }
                                        function help_scales_noneFunction() {
                                            document.getElementById('help_scales').style.display = 'none';
                                        }
                                    </script>
                                    <p id="help_scales" class="help_p">
                                        <?php echo _('10KG China Zelle: 205<br>20kg China Zelle: 102<br>50kg Edelstahl Zelle: 74<br>20kg Edelstahl Zelle: 186<br>'); ?>
                                        <button class="art-button" type="button" onclick="help_scales_noneFunction()"><?php echo _('close'); ?></button>
                                    </p>
                                    <hr>
                                        <!----------------------------------------------------------------------------------------Language-->
                                        <table style="width: 100%;" class="miniature_writing">
                                            <tr>
                                                <td class="td_png_icon"><h3><?php echo _('language'); ?></h3><img src="images/icons/language_42x42.png" alt=""><br><button class="art-button" type="button" onclick="help_language_blockFunction()"><?php echo _('help'); ?></button>
                                                </td>
                                                <td style=" text-align: left; padding-left: 20px;">
                                                    <input type="radio" name="language_config" value="1" <?php echo $checked_language_1; ?>/><label> de_DE</label><br>
                                                    <input type="radio" name="language_config" value="2" <?php echo $checked_language_2; ?>/><label> en_EN</label><br>
                                                    <br>
                                                </td>
                                                
                                            </tr>
                                        </table>
                                        <script>
                                            function help_language_blockFunction() {
                                                document.getElementById('help_language').style.display = 'block';
                                            }
                                            function help_language_noneFunction() {
                                                document.getElementById('help_language').style.display = 'none';
                                            }
                                        </script>
                                        <p id="help_language" class="help_p">
                                            <?php  echo '<b>'._('language').':</b> '._('set the language. if you are missing your prefered language, please contact us');
                                             echo '<br><br>'; ?>
                                            <button class="art-button" type="button" onclick="help_language_noneFunction()"><?php echo _('close'); ?></button>
                                        </p>
                                        <br>
                                        <br>
                                        <table style="width: 100%; align: center;">
                                            <tr>
                                                <td style="width: 50%;">&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td><button class="art-button" name="admin_form_submit" type="submit" value="admin_form_submit" onclick="return confirm('<?php echo _('save'); echo ' '; echo _('administration 1'); ?>?')"><?php echo _('save'); ?></button></td>
                                            </tr>
                                        </table>
                                    </div>
                                </form>
                                <h2 class="art-postheader"><?php echo _('reboot & shutdown'); ?></h2>
                                <!----------------------------------------------------------------------------------------Reboot/Shutdown-->
                                <div class="hg_container">
                                    <form  method="post" name="boot">
                                        <table style="width: 100%;">
                                            <tr>
                                                <td><button class="art-button" name="reboot" onclick="return confirm('<?php echo _('ATTENTION: reboot system?');?>');"><?php echo _('reboot'); ?></button></td>
                                                <td><button class="art-button" name="shutdown" onclick="return confirm('<?php echo _('ATTENTION: shutdown system?');?>');"><?php echo _('shutdown'); ?></button></td>
                                            </tr>
                                        </table>
                                    </form>
                                </div>
                                <hr>
                                <h2 class="art-postheader"><?php echo _('logging'); ?></h2>
                                <!----------------------------------------------------------------------------------------logging-->
                                <div class="hg_container" >
                                    <?php
                                        $loglevel_console = get_table_value($debug_table, $loglevel_console_key);
                                        $loglevel_file = get_table_value($debug_table, $loglevel_file_key);
                                        
                                        if ($loglevel_console == 10){
                                            $loglevel_console_selected_10 = 'selected="selected"';
                                        }
                                        else{
                                            $loglevel_console_selected_10 = '';
                                        }
                                        if ($loglevel_console == 20){
                                            $loglevel_console_selected_20 = 'selected="selected"';
                                        }
                                        else{
                                            $loglevel_console_selected_20 = '';
                                        }
                                        if ($loglevel_console == 30){
                                            $loglevel_console_selected_30 = 'selected="selected"';
                                        }
                                        else {
                                            $loglevel_console_selected_30 = '';
                                        }
                                        if ($loglevel_console == 40){
                                            $loglevel_console_selected_40 = 'selected="selected"';
                                        }
                                        else{
                                            $loglevel_console_selected_40 = '';
                                        }
                                        if ($loglevel_console == 50){
                                            $loglevel_console_selected_50 = 'selected="selected"';
                                        }
                                        else{
                                            $loglevel_console_selected_50 = '';
                                        }
                                        if ($loglevel_file == 10){
                                            $loglevel_pi_ager_logfile_selected_10 = 'selected="selected"';
                                        }
                                        else{
                                            $loglevel_pi_ager_logfile_selected_10 = '';
                                        }
                                        if ($loglevel_file == 20){
                                            $loglevel_pi_ager_logfile_selected_20 = 'selected="selected"';
                                        }
                                        else{
                                            $loglevel_pi_ager_logfile_selected_20 = '';
                                        }
                                        if ($loglevel_file == 30){
                                            $loglevel_pi_ager_logfile_selected_30 = 'selected="selected"';
                                        }
                                        else{
                                            $loglevel_pi_ager_logfile_selected_30 = '';
                                        }
                                        if ($loglevel_file == 40){
                                            $loglevel_pi_ager_logfile_selected_40 = 'selected="selected"';
                                        }
                                        else{
                                            $loglevel_pi_ager_logfile_selected_40 = '';
                                        }
                                        if ($loglevel_file == 50){
                                            $loglevel_pi_ager_logfile_selected_50 = 'selected="selected"';
                                        }
                                        else{
                                            $loglevel_pi_ager_logfile_selected_50 = '';
                                        }
                                    
                                    ?>
                                    <form method="post" name="logging">
                                        <label>Loglevel Console:
                                            <select name="loglevel_console">
                                                <option <?php echo $loglevel_console_selected_10 ; ?> value="10">DEBUG</option>
                                                <option <?php echo $loglevel_console_selected_20 ; ?> value="20">INFO</option>
                                                <option <?php echo $loglevel_console_selected_30 ; ?> value="30">WARNING</option>
                                                <option <?php echo $loglevel_console_selected_40 ; ?> value="40">ERROR</option>
                                                <option <?php echo $loglevel_console_selected_50 ; ?> value="50">CRITICAL</option>
                                            </select>
                                        </label>
                                        <br>
                                        <label>Loglevel pi_ager.log:
                                            <select name="loglevel_file" >
                                                <option <?php echo $loglevel_pi_ager_logfile_selected_10 ; ?> value="10">DEBUG</option>
                                                <option <?php echo $loglevel_pi_ager_logfile_selected_20 ; ?> value="20">INFO</option>
                                                <option <?php echo $loglevel_pi_ager_logfile_selected_30 ; ?> value="30">WARNING</option>
                                                <option <?php echo $loglevel_pi_ager_logfile_selected_40 ; ?> value="40">ERROR</option>
                                                <option <?php echo $loglevel_pi_ager_logfile_selected_50 ; ?> value="50">CRITICAL</option>
                                            </select>
                                        </label>
                                        <br><br>
                                        <button class="art-button" name="save_loglevel" value="save_loglevel" onclick="return confirm('<?php echo _('save loglevel?');?>');"><?php echo _('save'); ?></button>
                                        
                                    </form>
                                </div>
                                <hr>
                                <h2 class="art-postheader"><?php echo _('debug values'); ?></h2>
                                <!----------------------------------------------------------------------------------------Debugging-->
                                <div class="hg_container" >
                                    <form method="post" name="debug">
                                        <table style="width: 100%;">
                                            <?php
                                                $measuring_interval_debug = get_table_value($debug_table, $measuring_interval_debug_key);
                                                $agingtable_days_in_seconds_debug = get_table_value($debug_table, $agingtable_days_in_seconds_debug_key);
                                            ?>
                                            <tr>
                                                <td><?php echo _('measuring interval'); ?>:</td>
                                                <td><input name="measuring_interval_debug" maxlength="4" size="2" type="text" value=<?php echo $measuring_interval_debug; ?>></td>
                                            </tr>
                                            <tr>
                                                <td><?php echo _('agingtable days in seconds'); ?>:</td>
                                                <td><input name="agingtable_days_in_seconds_debug" maxlength="4" size="2" type="text" value=<?php echo $agingtable_days_in_seconds_debug; ?>></td>
                                            </tr>

                                        </table>
                                        <button class="art-button" name="save_debug_values" value="save_debug_values" onclick="return confirm('<?php echo _('ATTENTION: save debug values?');?>');"><?php echo _('save'); ?></button>
                                    </form>
                                </div>
                                <hr>
                                <h2 class="art-postheader"><?php echo _('database'); ?></h2>
                                <!----------------------------------------------------------------------------------------Database-->
                                <div class="hg_container" >                                    
                                    <table style="width: 100%;">
                                        <tr>
                                            <form method="post" name="database">
                                                <td><button class="art-button" name="empty_statistic_tables" value="empty_statistic_tables" onclick="return confirm('<?php echo _('ATTENTION: empty statistic tables?');?>');"><?php echo _('empty statistic tables'); ?></button></td>
                                                <td><button class="art-button" name="create_new_database" value="create_new_database" onclick="return confirm('<?php echo _('ATTENTION: create new database?');?>');"><?php echo _('create new database'); ?></button></td>
                                            </form>
                                            <td><button class="art-button" name="database_administration" onclick="window.location.href='/phpliteadmin.php'"><?php echo _('database administration'); ?></button></td>
                                        </tr>
                                    </table>
                                </div>
                                <h2 class="art-postheader"><?php echo _('python'); ?></h2>
                                <!----------------------------------------------------------------------------------------Reboot/Shutdown-->
                                <div class="hg_container">
                                    <form  method="post" name="boot">
                                        <table style="width: 100%;">
                                            <tr>
                                                <td><button class="art-button" name="admin_stop_main" value="admin_stop_main" onclick="return confirm('<?php echo _('ATTENTION: kill');?> main.py?');"><?php echo _('stop'); ?> main.py</button></td>
                                                <td><button class="art-button" name="admin_start_main" value="admin_start_main" onclick="return confirm('<?php echo _('start');?> main.py?');"><?php echo _('start'); ?> main.py</button></td>
                                            </tr></tr>
                                                <td><button class="art-button" name="admin_stop_agingtable"  value="admin_stop_agingtable" onclick="return confirm('<?php echo _('ATTENTION:');?> kill agingtable.py?');"><?php echo _('stop'); ?> agingtable.py</button></td>
                                                <td><button class="art-button" name="admin_start_agingtable"  value="admin_start_agingtable" onclick="return confirm('<?php echo _('start');?> agingtable.py?');"><?php echo _('start'); ?> agingtable.py</button></td>
                                            </tr></tr>
                                                <td><button class="art-button" name="admin_stop_scale"  value="admin_stop_scale" onclick="return confirm('<?php echo _('ATTENTION: kill');?> scale.py?');"><?php echo _('stop'); ?> scale.py</button></td>
                                                <td><button class="art-button" name="admin_start_scale"  value="admin_start_scale" onclick="return confirm('<?php echo _('start');?> scale.py?');"><?php echo _('start'); ?> scale.py</button></td>
                                            </tr>
                                        </table>
                                    </form>
                                </div>
                                <!----------------------------------------------------------------------------------------Content Ende-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php 
            include 'footer.php';
        ?>