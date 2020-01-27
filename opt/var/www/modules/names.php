<?php 
#------------------------ tables names
$config_settings_table = 'config';
$data_sensor_temperature_table = 'sensor_temperature_data';
$data_sensor_humidity_table = 'sensor_humidity_data';
$status_heater_table = 'heater_status';
$status_exhaust_air_table = 'exhaust_air_status';
$status_cooling_compressor_table = 'cooling_compressor_status';
$status_circulating_air_table = 'circulating_air_status';
$status_uv_table = 'uv_status';
$status_light_table = 'light_status';
$status_humidifier_table = 'humidifier_status';
$status_dehumidifier_table = 'dehumidifier_status';
$data_scale1_table = 'scale1_data';
$data_scale2_table = 'scale2_data';
$current_values_table = 'current_values';
$agingtables_table = 'agingtables';
$settings_scale1_table = 'scale1_settings';
$settings_scale2_table = 'scale2_settings';
$data_sensor_temperature_meat1_table = 'sensor_temperature_meat1_data';
$data_sensor_temperature_meat2_table = 'sensor_temperature_meat2_data';
$data_sensor_temperature_meat3_table = 'sensor_temperature_meat3_data';
$data_sensor_temperature_meat4_table = 'sensor_temperature_meat4_data';
$debug_table = 'debug';
$agingtable_salami_table = 'agingtable_salami';
$agingtable_dryaging1_table = 'agingtable_dryaging1';
$agingtable_dryaging2_table = 'agingtable_dryaging1';
$system_table = 'system';

#----------------------------table keys;
$switch_on_cooling_compressor_key = 'switch_on_cooling_compressor';
$switch_off_cooling_compressor_key = 'switch_off_cooling_compressor';
$switch_on_humidifier_key = 'switch_on_humidifier';
$switch_off_humidifier_key = 'switch_off_humidifier';
$delay_humidify_key = 'delay_humidify';
$referenceunit_key = 'referenceunit';
$sensortype_key = 'sensortype';
$language_key = 'language';
$switch_on_light_hour_key = 'switch_on_light_hour';
$switch_on_light_minute_key = 'switch_on_light_minute';
$light_duration_key = 'light_duration';
$light_period_key = 'light_period';
$light_modus_key = 'light_modus';
$switch_on_uv_hour_key = 'switch_on_uv_hour';
$switch_on_uv_minute_key = 'switch_on_uv_minute';
$uv_duration_key = 'uv_duration';
$uv_period_key = 'uv_period';
$uv_modus_key = 'uv_modus';
$dehumidifier_modus_key = 'dehumidifier_modus';
$circulation_air_period_key = 'circulation_air_period';
$setpoint_temperature_key = 'setpoint_temperature';
$sensor_temperature_key = 'sensor_temperature';
$sensor_humidity_key = 'sensor_humidity';
$exhaust_air_duration_key = 'exhaust_air_duration';
$modus_key = 'modus';
$setpoint_humidity_key = 'setpoint_humidity';
$exhaust_air_period_key = 'exhaust_air_period';
$circulation_air_duration_key = 'circulation_air_duration';
$agingtable_key = 'agingtable';
$status_exhaust_air_key = 'status_exhaust_air';
$status_circulating_air_key = 'status_circulating_air';
$status_heater_key = 'status_heater';
$status_cooling_compressor_key = 'status_cooling_compressor';
$scale1_key = 'scale1';
$scale2_key = 'scale2';
$calibrate_scale1_key = 'calibrate_scale1';
$calibrate_scale2_key = 'calibrate_scale2';
$calibrate_weight_key = 'calibrate_weight';
$status_piager_key = 'status_piager';
$status_agingtable_key = 'status_agingtable';
$status_scale1_key = 'status_scale1';
$status_scale2_key = 'status_scale2';
$status_scale1_tara_key = 'status_tara_scale1';
$status_scale2_tara_key = 'status_tara_scale2';
$loglevel_file_key = 'loglevel_file';
$loglevel_console_key = 'loglevel_console';
$agingtable_period_key = 'agingtable_period';
$agingtable_period_starttime_key = 'agintable_period_starttime';
$measuring_interval_debug_key = 'measuring_interval_debug';
$agingtable_days_in_seconds_debug_key = 'agingtable_days_in_seconds_debug';
$status_light_manual_key = 'status_light_manual';
$failure_humidity_delta_key = 'failure_humidity_delta';
$failure_temperature_delta_key = 'failure_temperature_delta';
$samples_key = 'samples';
$spikes_key = 'spikes';
$sleep_key = 'sleep';
$gain_key = 'gain';
$bits_to_read_key = 'bits_to_read';
$scale_measuring_interval_key = 'measuring_interval';
$measuring_duration_key = 'measuring_duration';
$saving_period_key = 'saving_period';
$pi_revision_key = 'pi_revision';
$pi_ager_version_key = 'pi_ager_version';
$status_uv_manual_key = 'status_uv_manual';
$sensorbus_key = 'sensorbus';

#-----------------------------table fields;
$key_field = 'key';
$value_field = 'value';
$last_change_field = 'last_change';
$agingtable_name_field = 'name';
$id_field = 'id';
$agingtable_modus_field = 'modus';
$agingtable_setpoint_humidity_field = 'setpoint_humidity';
$agingtable_setpoint_temperature_field = 'setpoint_temperature';
$agingtable_circulation_air_duration_field = 'circulation_air_duration';
$agingtable_circulation_air_period_field = 'circulation_air_period';
$agingtable_exhaust_air_duration_field = 'exhaust_air_duration';
$agingtable_exhaust_air_period_field = 'exhaust_air_period';
$agingtable_days_field = 'days';
$agingtable_comment_field = 'comment';

#-----------------------------Paths and urls
$thread_url = 'https://www.grillsportverein.de/forum/threads/pi-ager-reifeschranksteuerung-mittels-raspberry-pi.273805/';
$error_reporting_url = 'https://github.com/Tronje-the-Falconer/Pi-Ager/wiki/Error-reporting';
$faq_url =  'https://github.com/Tronje-the-Falconer/Pi-Ager/wiki/FAQ';
$sqlite_path = '/var/www/config/pi-ager.sqlite3';
$logfile_txt_file = '/var/www/logs/logfile.txt';
$pi_ager_log_file = '/var/www/logs/pi-ager.log';
$changelogfile = '/var/www/changelog.txt';
#-----------------------------JSON Keys
$last_change_temperature_json_key = 'last_change_temperature';
$last_change_humidity_json_key = 'last_change_humidity';
$last_change_scale1_json_key = 'last_change_scale1';
$last_change_scale2_json_key = 'last_change_scale2';
?>